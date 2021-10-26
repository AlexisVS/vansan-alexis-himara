<?php

namespace App\Http\Controllers\front;

use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;
use App\Http\Controllers\Controller;
use App\Models\Page_roomlist;
use App\Models\Room as ModelsRoom;
use App\Models\Room_categories;
use App\Models\Room_service;
use App\Models\Room_service_room;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class Room extends Controller
{
    public function index()
    {
        // if (request()->query('search') || request()->query('category') || request()->query('service')) {
        //     $roomLists = ModelsRoom::all()
        //         // ? search
        //         ->filter(function ($item) {
        //             if (request()->query('search') == null) {
        //                 return true;
        //             }
        //             return Str::contains(Str::lower($item->name), Str::lower(request()->query('search'))) ? true : false;
        //         })
        //         // ? category
        //         ->filter(function ($item) {
        //             if (request()->query('category') == null) {
        //                 return true;
        //             }
        //             return $item->room_category_id == request()->query('category') ? true : false;
        //         })
        //         // ? service
        //         ->filter(function ($item) {
        //             // pour pouvoir prendre les service pour les room je prend de la table room_service_rooms toutes les plage de la meme room et ensuite toutes les plage du meme service
        //             if (request()->query('service') == null) {
        //                 return true;
        //             }

        //             $itemId = Arr::collapse($item->services->where('id', '=', request()->query('service'))->values()->toArray())['id'];
        //             // ['pivot']['room_service_id'];

        //             // dd(request()->query('service'), $item->id, $itemId);

        //             return $itemId == request()->query('service') ? true : false;
        //         });
        //     // dd($roomLists);
        // } else {
        //     $roomLists = ModelsRoom::all();
        // }

        // $servicesRoom = Room_service_room::where('room_id', 1)->where('room_service_id', 6)->get();

        // dd($servicesRoom);


        $roomLists = QueryBuilder::for(ModelsRoom::class)
            ->allowedFilters(['name', 'room_category_id', AllowedFilter::exact('services.id')])
            ->allowedIncludes(['services'])
            ->get();
        $data = [
            // * static
            'static_roomList' => Page_roomlist::find(1),

            // * dynamic
            'roomServicesRooms' => Room_service_room::all(),
            'roomCategories' => Room_categories::all(),
            'roomServices' => Room_service::all(),
            'roomLists' => $roomLists,
        ];

        return view('front.pages.rooms-list', $data);
    }

    public function show()
    {
        return view('front.pages.room');
    }
}

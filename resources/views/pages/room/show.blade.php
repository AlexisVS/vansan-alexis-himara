<x-app-layout>
  <x-slot name="header">
    <div class="flex justify-between items-center space-x-12 w-full">

      <div class="flex items-center space-x-4">
        <a href="{{ url()->previous() }}" class="px-6 py-1 bg-himaraGold-500 hover:bg-himaraGold-400 shadow">
          <svg version="1.1" id="Layer_1" class="fill-current text-white w-7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 492 492" style="enable-background:new 0 0 550 492;" xml:space="preserve">
            <g>
              <g>
                <path d="M487.912,115.343H269.116V38.831c0-1.48-0.952-2.82-2.276-3.456c-1.324-0.64-2.952-0.464-4.116,0.448L1.464,242.991C0.548,243.719,0,244.827,0,245.999c0,1.176,0.528,2.284,1.444,3.012l261.224,207.164c0.7,0.548,1.54,0.832,2.392,0.832c0.568,0,1.248-0.124,1.78-0.38c1.324-0.64,2.276-1.988,2.276-3.464v-76.508h218.908c2.116,0,3.976-1.536,3.976-3.664v-253.46C492,117.407,490.032,115.343,487.912,115.343z" />
              </g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
          </svg>
        </a>
        <h2 class="font-semibold font-display text-xl text-himaraGold-500 leading-tight">
          Room {{ $show->name }}
        </h2>
      </div>

      <div class="flex space-x-4">
        <a href="/dashboard/room/category" class="px-4 py-2 mr-2 mt-2 bg-himaraBlue-500 text-white shadow rounded-md hover:bg-himaraBlue-600">Categories</a>
        <a href="/dashboard/room/service" class="px-4 py-2 mr-2 mt-2 bg-himaraBlue-500 text-white shadow rounded-md hover:bg-himaraBlue-600">Services</a>
      </div>

    </div>

    {{-- <div class="flex space-x-4">
      <a href="/dashboard/room/review/create" class="px-6 py-3 mr-2 mt-3 bg-himaraBlue-500 text-white shadow rounded-md hover:bg-himaraBlue-600">Add service</a>
    </div> --}}

  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:pl-6 lg:pl-8">

      <section class="w-full">

        <div class="flex justify-between items-center">
          <h3 class="font-semibold font-display text-5xl text-himaraGold-500 leading-tight">
            Room : {{ $show->name }}
          </h3>
        </div>

        {{-- Description.description --}}
        <div class="mb-28 mt-8 bg-himaraGold-500 shadow overflow-hidden sm:rounded-lg">
          <div class="flex items-center justify-between w-full pr-5">
            <div class="px-4 py-5 sm:px-6 ">
              <h3 class="text-2xl leading-6 font-display font-semibold text-gray-100">
                Room {{ $show->name }}
              </h3>
              <p class="mt-1 max-w-2xl text-md text-gray-50">
                All information about this room
              </p>
            </div>
            <a href="/dashboard/room/{{ $show->id }}/edit">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-gray-100 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
              </svg>
            </a>
          </div>
          <div class="border-t border-gray-200">

            <dl class="">
              @foreach(collect($show)->keys() as $column)
              @if (Str::contains($column, ['i_class']) == true )
              <div class="{{ $loop->iteration % 2 == 1 ? 'bg-gray-50' : 'bg-white' }} px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-400">
                  @php
                  echo str_replace('_', ' ', $column ?? '')
                  @endphp
                </dt>
                <dd class="mt-1 text-sm text-gray-400 sm:mt-0 sm:col-span-2">
                  <i class="fa fa-2x {{ $show->$column }}"></i>
                </dd>
              </div>
              @else
              <div class="{{ $loop->iteration % 2 == 1 ? 'bg-gray-50' : 'bg-white' }} px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-400">
                  @php
                  echo str_replace('_', ' ', $column ?? '')
                  @endphp
                </dt>
                <dd class="mt-1 text-sm text-gray-400 sm:mt-0 sm:col-span-2">
                  {{ $show->$column }}
                </dd>
              </div>
              @endif
              @if($loop->last == true && $show->room_category_id != null)
              <div class="{{ $loop->iteration % 2 == 1 ? 'bg-gray-50' : 'bg-white' }} px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-400">
                  categories : value
                </dt>
                <dd class="mt-1 text-sm text-gray-400 sm:mt-0 sm:col-span-2">
                  {{ $show->categories->value }}
                </dd>
              </div>

              <div class="{{ $loop->iteration % 2 == 1 ? 'bg-gray-50' : 'bg-white' }} px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-400">
                  categories : text
                </dt>
                <dd class="mt-1 text-sm text-gray-400 sm:mt-0 sm:col-span-2">
                  {{ $show->categories->text }}
                </dd>
              </div>
              @endif
              @endforeach

            </dl>
          </div>
        </div>

        <section>

          <div class="flex justify-between items-center {{ $show->images->count() == null ?  'mb-28' : null }}">

            <h3 class="font-semibold font-display text-5xl text-himaraGold-500 leading-tight">
              Images
            </h3>

            <a href="/dashboard/room/{{ $show->id }}/edit" class="px-6 py-3 mt-3 bg-himaraBlue-500 text-white shadow rounded-md hover:bg-himaraBlue-600">Add image</a>

          </div>

          @if($show->images->count())

          <div class="flex flex-col mt-8 mb-28">
            <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-6 lg:px-8">
              <div class="inline-block min-w-full mr-8 overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                <table class="min-w-full">
                  <thead>
                    <tr>
                      @foreach(collect($show->images->first())->keys() as $column)
                      @if ($loop->iteration <= collect($show->images->first())->keys()->count() - 2)
                        <x-table.head :name="$column" />
                        @endif
                        @endforeach
                        <x-table.head />

                    </tr>
                  </thead>

                  <tbody class="bg-white">
                    @foreach ($show->images as $row)
                    <tr class="hover:bg-himaraGold-400">
                      @foreach (collect($show->images->first())->keys() as $column)
                      @if (Str::contains($column, ['i_class']) == true )
                      <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 ">
                        <div class="text-sm leading-5 text-gray-400 truncate flex justify-start items-center">
                          <i class="ml-2 fa fa-2x {{ $row->$column }}"></i>
                        </div>
                      </td>
                      @elseif ($loop->iteration <= 3) @if (Str::contains($column, ['img'])==true) <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 ">
                        <div class="text-sm leading-5 text-gray-400 truncate">
                          <img class="max-w-xs max-h-32" src="{{ asset("/images/rooms/" . strtolower($show->categories->value). '/' . $row->$column)}}" alt="">
                          <figcaption> {{ substr($row->$column, 0 , 20) }}</figcaption>
                        </div>
                        </td>
                        @else
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 ">
                          <div class="text-sm leading-5 break-words text-gray-400 truncate">

                            {{ substr($row->$column, 0 , 25) }}
                            @if(strlen($row->$column) > 25)
                            <br>
                            {{ substr($row->$column, 25 , 25) }}

                            @if(strlen($row->$column) > 50)
                            <br>
                            {{ substr($row->$column, 50 , 25) }}
                            @endif

                            @if(strlen($row->$column) > 75)
                            <br>
                            {{ substr($row->$column, 75 , 25) }}
                            @endif

                            @if(strlen($row->$column) > 100 )
                            <br>
                            {{ substr($row->$column, 100 , 25) }}
                            @endif

                            @if(strlen($row->$column) > 125)
                            <br>
                            {{ substr($row->$column, 125 , 25) }}
                            @endif
                            @if(strlen($row->$column) > 125)
                            ...
                            @endif
                            @endif
                          </div>
                        </td>
                        @endif
                        @endif
                        @endforeach

                        {{-- DELETE --}}

                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 ">
                          <form action="{{ "/dashboard/room/". $show->id ."/destroy-image/" . $row->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">
                              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-himaraGold-600 hover:text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                              </svg>
                            </button>
                          </form>
                        </td>

                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          @endif

        </section>

      </section>

      @if($show->services->count() > 0)

      <section>

        <div class="flex justify-between items-center">

          <h3 class="font-semibold font-display text-5xl text-himaraGold-500 leading-tight">
            Services
          </h3>

          <a href="/dashboard/room/service/create" class="px-6 py-3 mt-3 bg-himaraBlue-500 text-white shadow rounded-md hover:bg-himaraBlue-600">Add service</a>

        </div>

        <x-table.table :columns="collect($show->services->first())->keys()" crud-uri="/dashboard/room/service/" :data-tables="$show->services" numberHeadActions="" />

      </section>

      @endif


      <section>

        <div class="flex justify-between items-center">

          <h3 class="font-semibold font-display text-5xl text-himaraGold-500 leading-tight">
            reviews
          </h3>

          <a href="/dashboard/room/{{ $show->id }}/review/create" class="px-6 py-3 mr-2 mt-2 bg-himaraBlue-500 text-white shadow rounded-md hover:bg-himaraBlue-600">Add review</a>

        </div>

        @if($show->reviews->count())

        <x-table.table image-path="/images/users" :columns="collect($show->reviews->first())->keys()" crud-uri="/dashboard/room/{{ $show->id }}/review/" :data-tables="$show->reviews" numberHeadActions="" />

        @endif

      </section>


    </div>

  </div>

</x-app-layout>

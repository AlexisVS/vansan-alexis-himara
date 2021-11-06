<x-app-layout>
  <x-slot name="header">
    <div class="flex items-center space-x-12">
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
        Room
      </h2>
    </div>

  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <section>

        <h3 class="font-semibold font-display text-5xl text-himaraGold-500 leading-tight">
          Static Room
        </h3>

        <x-description.description image-path="/images/" :columns="collect($static_room->first())->keys()" title='Static page room body' {{-- subtitle='Le sous titre mon composant description' --}} :data-tables="collect($static_room->take(1))" edit-uri="/dashboard/room/edit-static" uri-static='true' />

        <x-description.description image-path="/images/" :columns="collect($static_room_sidebar->first())->keys()" title='Static page room sidebar' {{-- subtitle='Le sous titre mon composant description' --}} :data-tables="collect($static_room_sidebar->take(1))" edit-uri="/dashboard/room/edit-static-sidebar" uri-static='true' />

      </section>

      <section>

        <div class="flex justify-between items-center">
          <h3 class="font-semibold font-display text-5xl text-himaraGold-500 leading-tight">
            Room
          </h3>
          <div class="flex space-x-4">
            <a href="/dashboard/room/category" class="px-6 py-3 mr-2 mt-3 bg-himaraBlue-500 text-white shadow rounded-md hover:bg-himaraBlue-600">Add items</a>
            <a href="/dashboard/room/review" class="px-6 py-3 mr-2 mt-3 bg-himaraBlue-500 text-white shadow rounded-md hover:bg-himaraBlue-600">Add items</a>
            <a href="/dashboard/room/service" class="px-6 py-3 mr-2 mt-3 bg-himaraBlue-500 text-white shadow rounded-md hover:bg-himaraBlue-600">Add items</a>
          </div>
        </div>

        {{-- Description.description --}}
        @foreach($rooms as $room)
        <div class="mb-28 mt-8 bg-himaraGold-500 shadow overflow-hidden sm:rounded-lg">
          <div class="flex items-center justify-between w-full pr-5">
            <div class="px-4 py-5 sm:px-6 ">
              <h3 class="text-2xl leading-6 font-display font-semibold text-gray-100">
                Room {{ $room->name }}
              </h3>
              <p class="mt-1 max-w-2xl text-md text-gray-50">
                All information about this room
              </p>
            </div>
            <a href="/dashboard/room/{{ $room->id }}/edit">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-gray-100 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
              </svg>
            </a>
          </div>
          <div class="border-t border-gray-200">

            <dl class="">
              @foreach(collect($room)->keys() as $column)
              @if (Str::contains($column, ['i_class']) == true )
              <div class="{{ $loop->iteration % 2 == 1 ? 'bg-gray-50' : 'bg-white' }} px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-400">
                  @php
                  echo str_replace('_', ' ', $column ?? '')
                  @endphp
                </dt>
                <dd class="mt-1 text-sm text-gray-400 sm:mt-0 sm:col-span-2">
                  <i class="fa fa-2x {{ $room->$column }}"></i>
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
                  {{ $room->$column }}
                </dd>
              </div>
              @endif
              @endforeach
              <div class="{{ $loop->iteration % 2 == 1 ? 'bg-gray-50' : 'bg-white' }} px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-400">
                  categories : value
                </dt>
                <dd class="mt-1 text-sm text-gray-400 sm:mt-0 sm:col-span-2">
                  {{ $room->categories->value }}
                </dd>
              </div>

              <div class="{{ $loop->iteration % 2 == 1 ? 'bg-gray-50' : 'bg-white' }} px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-400">
                  categories : text
                </dt>
                <dd class="mt-1 text-sm text-gray-400 sm:mt-0 sm:col-span-2">
                  {{ $room->categories->text }}
                </dd>
              </div>

              <div class="{{ $loop->iteration % 2 == 1 ? 'bg-gray-50' : 'bg-white' }} px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-400">
                  images
                </dt>
                <dd class="mt-1 text-sm text-gray-400 sm:mt-0 sm:col-span-2">
                  <div class="grid grid-cols-1 lg:grid-cols-3 gap-x-5 gap-y-6">
                    @foreach ($room->images as $image)
                    <div>
                      <img class="max-w-xs max-h-32 mx-auto px-3" src="{{ asset("/images/rooms/" .
                        strtolower($room->categories->value) . '/' . $image->image_img )}}" alt="">
                      <p class="text-gray-400 max-w-xs text-center mx-auto">{{ $image->image_img
                        }}</p>
                    </div>
                    @endforeach
                  </div>
                </dd>
              </div>

            </dl>
          </div>
        </div>
        @endforeach

      </section>

    </div>
  </div>

</x-app-layout>

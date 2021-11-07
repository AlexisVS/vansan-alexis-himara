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


        <x-form.form action='/dashboard/room/{{ $edit->id }}' method='PUT' enctype title='Edition room {{ $edit->name }}' subtitle="All information about this room">
          <x-form.textarea name="dropcap_before" :text="$edit->dropcap_before" />
          <x-form.text name="dropcap_u" :text="$edit->dropcap_u" />
          <x-form.textarea name="dropcap_after" :text="$edit->dropcap_after" />
          <x-form.textarea name="text1" :text="$edit->text1" />
          <x-form.textarea name="text2_before" :text="$edit->text2_before" />
          <x-form.text name="text2_u" :text="$edit->text2_u" />
          <x-form.textarea name="text2_after" :text="$edit->text2_after" />
          <x-form.textarea name="text3_before" :text="$edit->text3_before" />
          <x-form.text name="text3_u" :text="$edit->text3_u" />
          <x-form.textarea name="text3_after" :text="$edit->text3_after" />
          <x-form.fa-select name="rating_i_class" :icons="$icons" :selected="$edit->rating_i_class" />
          <x-form.text name="rating_text" :text="$edit->rating_text" />
          <x-form.text name="price" :text="$edit->price" />
          <x-form.text name="name" :text="$edit->name" />
          <x-form.text name="slogan" :text="$edit->slogan" />
          <x-form.text name="number_bed" :text="$edit->number_bed" />
          <x-form.text name="number_persons" :text="$edit->number_persons" />
          <x-form.text name="sq_mt" :text="$edit->sq_mt" />
          {{-- Categories --}}
          <div class="col-start-1 col-span-full md:col-start-2 md:col-span-4">
            <label for="country" class="block text-sm font-medium text-gray-500">
              @php
              echo str_replace('_', ' ', 'room_category_id')
              @endphp
            </label>
            <select name="room_category_id" class="text-gray-400 mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-himaraGold-500 focus:border-himaraGold-500 sm:text-sm">
              @foreach($categories as $category)
              <option value="{{ $category->id }}" @if($category->id == $edit->room_category_id)
                selected="selected"
                @endif
                >{{ $category->value }}</option>
              @endforeach
            </select>
          </div>
          @if($edit->favorite_roomList == 1)
          <x-form.checkbox name="favorite_roomList" title="favorite room" checked="checked" label="yes" label-subtitle="" />
          @else
          <x-form.checkbox name="favorite_roomList" title="favorite room" label="yes" label-subtitle="" />
          @endif />
          {{-- available a true --}}
          {{-- Services --}}
          <div class="col-start-1 col-span-full md:col-start-2 md:col-span-4">
            <label for="country" class="block text-sm font-medium text-gray-500">
              Services
            </label>
            <select name="services[]" multiple="multiple" class="text-gray-400 mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-himaraGold-500 focus:border-himaraGold-500 sm:text-sm">
              @foreach($services as $service)
              <option value="{{ $service->id }}" @foreach ($edit->services->pluck('id') as $select)
                @if ($service->id == $select)
                selected="selected"
                @endif
                @endforeach
                >
                {{ $service->room_service_text }}
              </option>
              @endforeach
            </select>
          </div>
          {{-- Images --}}
          <x-form.upload name="images[]" title="Images" multiple />
        </x-form.form>

      </section>

    </div>
  </div>

</x-app-layout>

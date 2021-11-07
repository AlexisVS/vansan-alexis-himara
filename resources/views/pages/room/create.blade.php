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
        Add Room
      </h2>
    </div>

  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <section>
        <x-form.form action='/dashboard/room' method='POST' enctype title='Add room' subtitle="">
          <x-form.textarea name="dropcap_before" placeholder="Du texte" />
          <x-form.text name="dropcap_u" placeholder="Du texte" />
          <x-form.textarea name="dropcap_after" placeholder="Du texte" />
          <x-form.textarea name="text1" placeholder="Du texte" />
          <x-form.textarea name="text2_before" placeholder="Du texte" />
          <x-form.text name="text2_u" placeholder="Du texte" />
          <x-form.textarea name="text2_after" placeholder="Du texte" />
          <x-form.textarea name="text3_before" placeholder="Du texte" />
          <x-form.text name="text3_u" placeholder="Du texte" />
          <x-form.textarea name="text3_after" placeholder="Du texte" />
          <x-form.fa-select name="rating_i_class" :icons="$icons" />
          <x-form.text name="rating_text" placeholder="not necessary" />
          <x-form.text name="price" placeholder="price" />
          <x-form.text name="name" placeholder="name of the room" />
          <x-form.text name="slogan" placeholder="slogan" />
          <x-form.text name="number_bed" placeholder="5" />
          <x-form.text name="number_persons" placeholder="15" />
          <x-form.text name="sq_mt" placeholder="150" />
          {{-- Categories --}}
          <div class="col-start-1 col-span-full md:col-start-2 md:col-span-4">
            <label for="country" class="block text-sm font-medium text-gray-500">
              @php
              echo str_replace('_', ' ', 'room_category_id')
              @endphp
            </label>
            <select name="room_category_id" class="text-gray-400 mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-himaraGold-500 focus:border-himaraGold-500 sm:text-sm">
              @foreach($categories as $category)
              <option value="{{ $category->id }}">{{ $category->value }}</option>
              @endforeach
            </select>
          </div>
          <x-form.checkbox name="favorite_roomList" title="favorite room" label="yes" label-subtitle="" />
          {{-- available a true --}}
          {{-- Services --}}
          <div class="col-start-1 col-span-full md:col-start-2 md:col-span-4">
            <label for="country" class="block text-sm font-medium text-gray-500">
              Services
            </label>
            <select name="services[]" multiple="multiple" class="text-gray-400 mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-himaraGold-500 focus:border-himaraGold-500 sm:text-sm">
              @foreach($services as $service)
              <option value="{{ $service->id }}">
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

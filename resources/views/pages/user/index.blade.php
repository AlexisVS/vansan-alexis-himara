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
        Team
      </h2>
    </div>

  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

      <section>

        @php
          $show = true;
          $edit = true;
          $delete = true;
          $crudUri = "/dashboard/user/";
          $imagePath = '/images/users'
        @endphp
        <div class="flex justify-between items-center">
          <h3 class="font-semibold font-display text-5xl text-himaraGold-500 leading-tight">
            Users
          </h3>
          <a href="/dashboard/user/create" class="px-6 py-3 mr-2 mt-3 bg-himaraBlue-500 text-white shadow rounded-md hover:bg-himaraBlue-600">Add user</a>
        </div>

        <div class="flex flex-col mt-8 mb-28">
          <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-6 lg:px-8">
            <div class="inline-block min-w-full mr-8 overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
              <table class="min-w-full">
                <thead>
                  <tr>
                    @foreach(collect(['name', 'email', 'phone', 'profile_img', '', '']) as $column)
                    @if ($loop->iteration <= collect(['name', 'email', 'phone', 'profile_img', '', ''])->count() - 2)
                      <x-table.head :name="$column" />
                    @endif
                    @endforeach
                      <x-table.head name="Role" />
                      <x-table.head />
                      @canany(['update', 'delete'], App\Models\User::class)
                        <x-table.head />
                        <x-table.head />
                      @endcanany
                  </tr>
                </thead>

                <tbody class="bg-white">
                  @foreach ($users as $row)
                  <tr class="hover:bg-himaraGold-400">
                    @foreach (collect(['name', 'email', 'phone', 'profile_img', '', '']) as $column)
                    @if (Str::contains($column, ['i_class']) == true )
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 ">
                      <div class="text-sm leading-5 text-gray-400 truncate flex justify-start items-center">
                        <i class="ml-2 fa fa-2x {{ $row->$column }}"></i>
                      </div>
                    </td>
                    @elseif (Str::contains($column, ['flaticon']) == true )
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 ">
                      <div class="text-sm leading-5 text-gray-400 truncate flex justify-start items-center">
                        <i class="ml-2 fa fa-2x {{ $row->$column }}"></i>
                      </div>
                    </td>
                    @elseif ($loop->iteration <= collect(['name', 'email', 'phone', 'profile_img', '', ''])->count() - 2)
                      @if (Str::contains($column, ['img']) == true && isset($imagePath) )
                      <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 ">
                        <div class="text-sm leading-5 text-gray-400 truncate">
                          <img class="max-w-xs max-h-32" src="{{ asset($imagePath . (substr($imagePath, -1) != '/' ? '/' : '') . $row->$column)}}" alt="">
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
                      <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 ">
                        <div class="text-sm leading-5 break-words text-gray-400 truncate">
                          {{ $row->roles->first()->name ?? '' }}
                        </div>
                      </td>
                      {{-- SHOW --}}
                      @if($show ?? false == false)
                      <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 ">
                        <a href="{{ $crudUri . (substr($crudUri, -1) != '/' ? '/' : null) . $row->id }}">
                          <svg class="fill-current text-himaraGold-600 hover:text-gray-400" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 442.04 442.04" style="enable-background:new 0 0 442.04 442.04;" xml:space="preserve">
                            <g>
                              <g>
                                <path d="M221.02,341.304c-49.708,0-103.206-19.44-154.71-56.22C27.808,257.59,4.044,230.351,3.051,229.203c-4.068-4.697-4.068-11.669,0-16.367c0.993-1.146,24.756-28.387,63.259-55.881c51.505-36.777,105.003-56.219,154.71-56.219c49.708,0,103.207,19.441,154.71,56.219c38.502,27.494,62.266,54.734,63.259,55.881c4.068,4.697,4.068,11.669,0,16.367c-0.993,1.146-24.756,28.387-63.259,55.881C324.227,321.863,270.729,341.304,221.02,341.304z M29.638,221.021c9.61,9.799,27.747,27.03,51.694,44.071c32.83,23.361,83.714,51.212,139.688,51.212s106.859-27.851,139.688-51.212c23.944-17.038,42.082-34.271,51.694-44.071c-9.609-9.799-27.747-27.03-51.694-44.071c-32.829-23.362-83.714-51.212-139.688-51.212s-106.858,27.85-139.688,51.212C57.388,193.988,39.25,211.219,29.638,221.021z" />
                              </g>
                              <g>
                                <path d="M221.02,298.521c-42.734,0-77.5-34.767-77.5-77.5c0-42.733,34.766-77.5,77.5-77.5c18.794,0,36.924,6.814,51.048,19.188c5.193,4.549,5.715,12.446,1.166,17.639c-4.549,5.193-12.447,5.714-17.639,1.166c-9.564-8.379-21.844-12.993-34.576-12.993c-28.949,0-52.5,23.552-52.5,52.5s23.551,52.5,52.5,52.5c28.95,0,52.5-23.552,52.5-52.5c0-6.903,5.597-12.5,12.5-12.5s12.5,5.597,12.5,12.5C298.521,263.754,263.754,298.521,221.02,298.521z" />
                              </g>
                              <g>
                                <path d="M221.02,246.021c-13.785,0-25-11.215-25-25s11.215-25,25-25c13.786,0,25,11.215,25,25S234.806,246.021,221.02,246.021z" />
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
                      </td>
                      @endif
                      @canany(['update', 'delete'], App\Models\User::class)
                      {{-- EDIT --}}
                      @if($edit ?? false == false)
                      <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 ">
                        <a href="{{ $crudUri . (substr($crudUri, -1) != '/' ? '/' : null) . $row->id . '/edit' }}">
                          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-himaraGold-600 hover:text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                          </svg>
                        </a>
                      </td>
                      @endif
                      {{-- DELETE --}}
                      @if($delete ?? false == false)
                      <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 ">
                        <form action="{{ $crudUri . (substr($crudUri, -1) != '/' ? '/' : null) . $row->id }}" method="post">
                          @csrf
                          @method('DELETE')
                          <button type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-himaraGold-600 hover:text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                          </button>
                        </form>
                      </td>
                      @endif
                      @endcanany
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </section>

    </div>
  </div>

</x-app-layout>

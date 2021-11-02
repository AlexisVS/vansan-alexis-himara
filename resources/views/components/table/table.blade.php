@php
/*
* @param attribute collection :columns = column de la table avec collect($MODEL->first())->keys()
* @param attribute string crud-uri = chemin du crud index. EX: model Room in backend = /dashboard/room
* @param attribute collection :data-tables = une collection de table ou les colonnes = :columns
* @param attribute numberHeadActions = bollean pour desactiver un table.head
*/
@endphp
<div class="flex flex-col mt-8 mb-28">
  <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-6 lg:px-8">
    <div
      class="inline-block min-w-full mr-8 overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
      <table class="min-w-full">
        <thead>
          <tr>
            @foreach($columns as $column)
            @if ($loop->iteration < $columns->count() - 2)
              <x-table.head :name="$column" />
              @endif
              @endforeach
              @if ($numberHeadActions ?? false)
              @for ($i = 0; $i
              < $numberHeadActions; $i++) <x-table.head />
              @endfor
              @else
              <x-table.head />
              <x-table.head />
              <x-table.head />
              @endif
          </tr>
        </thead>

        <tbody class="bg-white">
          @foreach ($dataTables as $row)
          <tr class="hover:bg-himaraGold-400">
            @foreach ($columns as $column)
            @if ($loop->iteration < $columns->count() - 2)
              <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 ">
                <div class="text-sm leading-5 text-gray-400 truncate">
                  {{ substr($row->$column, 0 , 45) }}
                  <br>
                  {{ substr($row->$column, 45 , 45) }}

                </div>
              </td>
              @endif
              @endforeach
              {{-- SHOW --}}
              <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 ">
                <a href="{{ $crudUri . (substr($crudUri, -1) != '/' ? '/' : null) . $row->id }}">
                  <svg class="fill-current text-himaraGold-600 hover:text-gray-400" version="1.1" id="Capa_1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    width="32px" height="32px" viewBox="0 0 442.04 442.04"
                    style="enable-background:new 0 0 442.04 442.04;" xml:space="preserve">
                    <g>
                      <g>
                        <path
                          d="M221.02,341.304c-49.708,0-103.206-19.44-154.71-56.22C27.808,257.59,4.044,230.351,3.051,229.203c-4.068-4.697-4.068-11.669,0-16.367c0.993-1.146,24.756-28.387,63.259-55.881c51.505-36.777,105.003-56.219,154.71-56.219c49.708,0,103.207,19.441,154.71,56.219c38.502,27.494,62.266,54.734,63.259,55.881c4.068,4.697,4.068,11.669,0,16.367c-0.993,1.146-24.756,28.387-63.259,55.881C324.227,321.863,270.729,341.304,221.02,341.304z M29.638,221.021c9.61,9.799,27.747,27.03,51.694,44.071c32.83,23.361,83.714,51.212,139.688,51.212s106.859-27.851,139.688-51.212c23.944-17.038,42.082-34.271,51.694-44.071c-9.609-9.799-27.747-27.03-51.694-44.071c-32.829-23.362-83.714-51.212-139.688-51.212s-106.858,27.85-139.688,51.212C57.388,193.988,39.25,211.219,29.638,221.021z" />
                      </g>
                      <g>
                        <path
                          d="M221.02,298.521c-42.734,0-77.5-34.767-77.5-77.5c0-42.733,34.766-77.5,77.5-77.5c18.794,0,36.924,6.814,51.048,19.188c5.193,4.549,5.715,12.446,1.166,17.639c-4.549,5.193-12.447,5.714-17.639,1.166c-9.564-8.379-21.844-12.993-34.576-12.993c-28.949,0-52.5,23.552-52.5,52.5s23.551,52.5,52.5,52.5c28.95,0,52.5-23.552,52.5-52.5c0-6.903,5.597-12.5,12.5-12.5s12.5,5.597,12.5,12.5C298.521,263.754,263.754,298.521,221.02,298.521z" />
                      </g>
                      <g>
                        <path
                          d="M221.02,246.021c-13.785,0-25-11.215-25-25s11.215-25,25-25c13.786,0,25,11.215,25,25S234.806,246.021,221.02,246.021z" />
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
              {{-- EDIT --}}
              <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 ">
                <a href="{{ $crudUri . (substr($crudUri, -1) != '/' ? '/' : null) . $row->id . '/edit' }}">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-himaraGold-600 hover:text-gray-400"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                  </svg>
                </a>
              </td>
              {{-- DELETE --}}
              <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 ">
                <form action="{{ $crudUri . (substr($crudUri, -1) != '/' ? '/' : null) . $row->id }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-himaraGold-600 hover:text-gray-400"
                      fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
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
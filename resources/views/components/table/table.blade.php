<div class="flex flex-col mt-8">
  <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-6 lg:px-8">
    <div class="inline-block min-w-full mr-8 overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
      <table class="min-w-full">
        <thead>
          <tr>
            @foreach($columns as $column)
            @if ($loop->iteration > 1 && $loop->iteration < $columns->count() - 2)
              <x-table.head :name="$column" />
              @endif
              @endforeach
          </tr>
        </thead>

        <tbody class="bg-white">
          @foreach ($dataTables as $row)
          <tr class="hover:bg-himaraGold-400">
            @foreach ($columns as $column)
            @if ($loop->iteration > 1 && $loop->iteration < $columns->count() - 2)
              <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 ">
                <div class="text-sm leading-5 text-gray-400 truncate">
                  {{ substr($row->$column, 0 , 45) }}
                  <br>
                  {{ substr($row->$column, 45 , 45) }}

                </div>
              </td>
              @endif
              @endforeach
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

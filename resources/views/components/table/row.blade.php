<tr>
  @foreach($values as $value)
    @foreach ($headings as $heading)
      <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
        <p class="text-gray-900 whitespace-no-wrap">
          {{ $value->$heading }}
        </p>
      </td>
      <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
    @endforeach
  @endforeach
</tr>
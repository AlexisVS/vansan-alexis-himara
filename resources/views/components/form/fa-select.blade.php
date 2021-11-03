@php
/*
* @param string $title
* @param string $name
* @param string $selected = class de l'icon
*/
@endphp
<div class="col-start-1 col-span-full md:col-start-1 md:col-span-6">
  <p class="mb-2 text-sm font-medium text-gray-500">
    {{ $title }}
  </p>
  <div class="grid grid-cols-3 gap-y-4 pr-4 h-96 sm:grid-cols-5 md:grid-cols-8 lg:grid-cols-12 overflow-y-scroll ">

    @foreach ($icons as $icon)
    
    <div class="flex items-center justify-center">
      <div class="h-5 flex items-center">
        <input id="comments" name="{{ $name }}" type="radio" value="1" {{ $icon->class == $selected }}
        class="focus:ring-himaraGold-500 h-4 w-4 text-himaraGold-400 border-gray-300 rounded">
      </div>
      <div class="ml-3 text-sm">
        <label for="comments" class="font-medium text-gray-400">
          <i class="font-fontawesome text-2xl">{!! $icon->content !!}</i>
        </div>
      </div>
      @endforeach

    </div>
</div>
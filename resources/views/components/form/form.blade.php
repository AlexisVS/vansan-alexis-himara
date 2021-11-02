<div class="lg:grid lg:grid-cols-12 lg:gap-x-5">




  <div class="col-span-3">
    <label for="about" class="block text-sm font-medium text-gray-700">
      About
    </label>
    <div class="mt-1">
      <textarea id="about" name="about" rows="3"
        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
        placeholder="you@example.com"></textarea>
    </div>
    <p class="mt-2 text-sm text-gray-500">
      Brief description for your profile. URLs are hyperlinked.
    </p>
  </div>



  <div class="flex items-start">
    <div class="h-5 flex items-center">
      <input id="comments" name="comments" type="checkbox"
        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
    </div>
    <div class="ml-3 text-sm">
      <label for="comments" class="font-medium text-gray-700">Comments</label>
      {{-- <p class="text-gray-500">Get notified when someones posts a comment on a posting.</p> --}}
    </div>
  </div>




  <div class="col-span-3">
    <label class="block text-sm font-medium text-gray-700">
      Cover photo
    </label>
    <div class="mt-1 border-2 border-gray-300 border-dashed rounded-md px-6 pt-5 pb-6 flex justify-center">
      <div class="space-y-1 text-center">
        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48"
          aria-hidden="true">
          <path
            d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <div class="flex text-sm text-gray-600">
          <label for="file-upload"
            class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
            <span>Upload a file</span>
            <input id="file-upload" name="file-upload" type="file" class="sr-only">
          </label>
          <p class="pl-1">or drag and drop</p>
        </div>
        <p class="text-xs text-gray-500">
          PNG, JPG, GIF up to 10MB
        </p>
      </div>
    </div>
  </div>


  <div class="col-span-6 sm:col-span-3">
    <label for="country" class="block text-sm font-medium text-gray-700">Country / Region</label>
    <select id="country" name="country" autocomplete="country"
      class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
      <option>United States</option>
      <option>Canada</option>
      <option>Mexico</option>
    </select>
  </div>



  <div class="space-y-6 sm:px-6 lg:px-0 lg:col-span-9">


    <form action="#" method="POST">
      <div class="shadow sm:rounded-md sm:overflow-hidden">
        <div class="bg-white py-6 px-4 space-y-6 sm:p-6">
          <div>
            <h3 class="text-lg leading-6 font-medium text-gray-900">Personal Information</h3>
            <p class="mt-1 text-sm text-gray-500">Use a permanent address where you can recieve mail.</p>
          </div>
          <div class="grid grid-cols-6 gap-6">

            {{-- CONTENT --}}



            <div class="col-span-6">
              <label for="street-address" class="block text-sm font-medium text-gray-700">Street address</label>
              <input type="text" name="street-address" id="street-address" autocomplete="street-address"
                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

          </div>
        </div>
        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
          <button type="submit"
            class="bg-indigo-600 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Save
          </button>
        </div>
      </div>
    </form>


  </div>
</div>
<x-app-layout>
  <x-slot name="header">
    <div class="flex w-full items-center justify-between">

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
          {{ $archive ?? 'Mailbox' }}
        </h2>
      </div>
      @if($archive ?? true == false)
      <a href="/dashboard/mailbox" class="px-6 py-3 mr-2 ml-3 mt-3 bg-himaraBlue-500 text-white shadow rounded-md hover:bg-himaraBlue-600">Mailbox</a>
      @else
      <a href="/dashboard/mailbox-archive" class="px-6 py-3 mr-2 ml-3 mt-3 bg-himaraBlue-500 text-white shadow rounded-md hover:bg-himaraBlue-600">Archive</a>
      @endif
    </div>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

      <div class="container flex flex-col mx-auto w-full items-center justify-center">
        {{-- <div class="px-4 py-5 sm:px-6 w-full border dark:bg-gray-800 bg-white shadow mb-2 rounded-md">
          <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-white">
            User database
          </h3>
          <p class="mt-1 max-w-2xl text-sm text-gray-500 dark:text-gray-200">
            Details and informations about user.
          </p>
        </div> --}}
        @if($mails->count() == 0)
        <p class="text-3xl text-gray-400 w-full tracking-wider text-center">There is no {{ $archive ?? null ? strtolower($archive) : 'mail' }}</p>
        @else
        <ul class="w-full flex flex-col">
          @foreach ($mails->sortBy('read') as $mail)

          <li class="border-gray-400 flex flex-row mb-2">

            
              <a href="/dashboard/mailbox/{{ $mail->id }}" class="transition duration-500 shadow ease-in-out transform hover:-translate-y-1 hover:shadow-lg select-none cursor-pointer {{ $mail->read == 0 ? 'bg-himaraGold-400 text-gray-600 font-semibold' : 'bg-white text-gray-500' }} dark:bg-gray-800 rounded-md flex flex-1 items-center p-4">
                {{-- <div class="flex flex-col w-10 h-10 justify-center items-center mr-4">
                  
                </div> --}}
                <div class="flex-1 pl-1 md:mr-16">
                  <div class="{{ $mail->read == 0 ? 'font-semibold' : 'font-medium' }} whitespace-nowrap dark:text-white">
                    {{ $mail->mailable->name }}
                  </div>

                </div>

                <div class="w-full flex justify-center items-center {{ $mail->read == 0 ? 'font-semibold' : 'font-medium' }} dark:text-white">

                  {{ $mail->title }}

                </div>

                <div class="text-gray-600 dark:text-gray-200 text-xs whitespace-nowrap">
                  {{ $mail->created_at->format('D') }}
                  <br>
                  {{ $mail->created_at->format('d/m/Y') }}
                </div>

                <div class="flex items-center space-x-4 ml-6">

                  @if($mail->archived == 0)
                    
                  {{-- Archive --}}
                  <form action="/dashboard/mailbox/{{ $mail->id }}" method="post">
                    @csrf
                    @method('put')
                    <button type="submit">
                      <svg version="1.1" id="Capa_1" class="w-5 h-6 fill-current text-himaraBlue-400 hover:text-himaraBlue-600" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" stroke="currentColor" viewBox="0 0 276.157 276.157" style="enable-background:new 0 0 276.157 276.157;" xml:space="preserve">
                        <path stroke-width="5" d="M273.081,101.378c-3.3-4.651-8.86-7.319-15.255-7.319h-24.34v-26.47c0-10.201-8.299-18.5-18.5-18.5
                        h-85.322c-3.63,0-9.295-2.876-11.436-5.806l-6.386-8.735c-4.982-6.814-15.104-11.954-23.546-11.954H58.731
                        c-9.293,0-18.639,6.608-21.738,15.372l-2.033,5.752c-0.958,2.71-4.721,5.371-7.596,5.371H18.5c-10.201,0-18.5,8.299-18.5,18.5
                        v167.07c0,0.885,0.161,1.73,0.443,2.519c0.152,3.306,1.18,6.424,3.053,9.064c3.3,4.652,8.86,7.319,15.255,7.319h188.486
                        c11.395,0,23.27-8.424,27.035-19.179l40.677-116.188C277.061,112.159,276.381,106.03,273.081,101.378z M18.5,64.089h8.864
                        c9.295,0,18.64-6.608,21.738-15.372l2.032-5.75c0.959-2.711,4.722-5.372,7.597-5.372h29.564c3.63,0,9.295,2.876,11.437,5.806
                        l6.386,8.734c4.982,6.815,15.104,11.954,23.546,11.954h85.322c1.898,0,3.5,1.603,3.5,3.5v26.47H69.34
                      c-11.395,0-23.27,8.424-27.035,19.179L15,191.231V67.589C15,65.692,16.603,64.089,18.5,64.089z M260.791,113.238l-40.677,116.188
                      c-1.674,4.781-7.812,9.135-12.877,9.135H18.751c-1.448,0-2.577-0.373-3.02-0.998c-0.443-0.625-0.423-1.814,0.056-3.181
                      l40.677-116.188c1.674-4.781,7.812-9.135,12.877-9.135h188.486c1.448,0,2.577,0.373,3.021,0.998
                      C261.29,110.682,261.27,111.871,260.791,113.238z" />
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

                    </button>
                  </form>
                  @endif


                  {{-- Delete --}}
                  <form action="/dashboard/mailbox/{{ $mail->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-300 hover:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                      </svg>
                    </button>
                  </form>

                </div>

                {{-- <button class="w-24 text-right flex justify-end">
                <svg width="12" fill="currentColor" height="12" class="hover:text-gray-800 dark:hover:text-white dark:text-gray-200 text-gray-500" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1363 877l-742 742q-19 19-45 19t-45-19l-166-166q-19-19-19-45t19-45l531-531-531-531q-19-19-19-45t19-45l166-166q19-19 45-19t45 19l742 742q19 19 19 45t-19 45z">
                  </path>
                </svg>
              </button> --}}

            </a>

          </li>
          @endforeach

        </ul>
        @endif
      </div>

    </div>
  </div>
</x-app-layout>

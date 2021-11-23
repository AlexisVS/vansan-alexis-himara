<x-guest-layout>
<div class="w-full flex items-center justify-between">

  <a class="p-6 block w-72" href="/">
    <img src="/images/{{ $image_brand->image_brand_img }}" alt="">
  </a>

  <h1 class="font-bold font-display text-3xl text-himaraGold-500 leading-tight">
    Profile
  </h1>

  <div class="w-72"></div>

</div>

  <section class="w-full flex items-baseline flex-col lg:flex-row justify-evenly mt-16">


        <x-description.description 
          image-path="/images/users/" 
          :columns="collect(['name', 'email', 'phone', 'profile_img'])" 
          title='User Profile' 
          {{-- subtitle='Le sous titre mon composant description' --}} 
          :data-tables="collect([auth()->user()])" 
        />
      
        <x-form.form action='/profile/{{ auth()->user()->id }}' method='PUT' enctype title='Edition user' subtitle="All text in your page">
          <x-form.text name="name" :text="auth()->user()->name" />
          <x-form.text name="email" :text="auth()->user()->email" />
          <x-form.text name="phone" :text="auth()->user()->phone" />
          <x-form.upload name="profile_img" />
        </x-form.form>
            
  </section>

  <section class="w-full">

    <h1 class="font-bold font-display text-5xl ring-0 text-himaraGold-500 leading-tight block ml-24">
      Mailbox
    </h1>

    <div class="w-full flex items-stretch my-24">

      <div class="container flex flex-col mx-auto w-full items-center justify-center">

        @if($mails->count() == 0)

        <p class="text-3xl text-gray-400 w-full tracking-wider text-center">There is no {{ $archive ?? null ? strtolower($archive) : 'mail' }}</p>

        @else

        <ul class="w-full flex flex-col">

          @foreach ($mails->sortBy('read') as $mail)

          <li class="border-gray-400 flex flex-row mb-2">

            <a href="/profile/mail/{{ $mail->mailable->id }}" class="transition duration-500 shadow ease-in-out transform hover:-translate-y-1 hover:shadow-lg select-none cursor-pointer {{ $mail->read == 0 ? 'bg-himaraGold-400 text-gray-600 font-semibold' : 'bg-white text-gray-500' }} dark:bg-gray-800 rounded-md flex flex-1 items-center p-4">
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

            </a>

          </li>

          @endforeach

        </ul>

        @endif

      </div>

    </div>

  </section>

</x-guest-layout>

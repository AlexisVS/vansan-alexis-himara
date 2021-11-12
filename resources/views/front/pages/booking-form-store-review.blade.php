<x-guest-layout>




    <div class="flex items-center justify-center min-h-screen">

      <section class="max-w-7xl">

        <x-form.form action="/booking-form-store-review-mail" method='POST' title="Review" subtitle="" class="">
          <input type="hidden" name="user_id" value="{{ request()->route()->parameter('userId') }}">
          <input type="hidden" name="room_id" value="{{ request()->route()->parameter('roomId') }}">
          <x-form.select name="rating" :options="collect([1,2,3,4,5])" />
          <x-form.fa-select name="rating_i_class" :icons="$icons" selected="fa-star" />
          <x-form.text name="review_info" placeholder="Name of member" />
          <x-form.text name="review_date" placeholder="February 03, 2018" />
          <x-form.text name="review_location" placeholder="Madrid / Spain" />
          <x-form.textarea name="review_text" placeholder="Comment text" />
        </x-form.form>

      </section>

    </div>

</x-guest-layout>

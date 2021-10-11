@extends('front.layout.main')
@section('content')
  @include('front.partials.layout.top-menu')
  @include('front.partials.layout.header')
  @include('front.partials.pages.room.page-title')
  <main>
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-12">
          @include('front.partials.pages.room.room-slider')
          @include('front.partials.pages.room.dropcap')
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ut, asperiores voluptatibus quo rem iusto
            laborum, laudantium corrupti ea esse officia placeat beatae! Ducimus quasi nisi odio architecto repudiandae
            illo sunt nulla quia obcaecati
            blanditiis? Doloremque commodi deserunt corporis, maiores, quam ipsam voluptates beatae necessitatibus,
            sapiente impedit sunt cupiditate odio, officiis quo debitis distinctio! Tenetur quibusdam modi adipisci vel
            ullam cum ratione itaque laborum
            molestias nesciunt. Qui itaque saepe obcaecati quo tempora natus laudantium quidem, inventore totam. Nobis
            incidunt est doloribus qui vero expedita a fugit necessitatibus minus sapiente illo, commodi laudantium minima
            quo deserunt odio repellat
            placeat quas, perferendis, voluptates! Omnis corporis nostrum optio reprehenderit aspernatur consequuntur,
            nisi rerum. Architecto provident alias voluptatem aliquam tenetur eius eos. Iure, earum. Asperiores
            consectetur, dolorem animi pariatur. Magni
            necessitatibus non hic odit nesciunt voluptatum distinctio provident, repellendus quae dolores, assumenda
            delectus quisquam fuga velit natus cumque. Odio sint deserunt ex dolorem, culpa, sit accusantium nesciunt.
            Dicta, nulla aperiam expedita nihil
            at laborum! Minima ducimus, nobis quasi minus totam ab quo, quia labore nihil praesentium doloremque
            recusandae! Voluptas delectus distinctio architecto aliquid eligendi nostrum odio a culpa modi cumque mollitia
            id, consequuntur, labore, ut minima
            illum. Repellendus cumque veniam quae odit enim.
          </p>
          @include('front.partials.pages.room.section-title')
          @include('front.partials.pages.room.room-services-list')
          <p>Horem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
            dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
            suscipit lobortis nisl ut aliquip
            ex ea
            <u>commodo consequat.</u>
            Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu
            feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril
            delenit...
          </p>
          <p>Horem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
            dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
            suscipit lobortis nisl ut aliquip
            ex ea
            <u>commodo consequat.</u>
            Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu
            feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril
            delenit...
          </p>
          <!-- ROOM REVIEWS -->
          @include('front.partials.pages.room.room-reviews')
          @include('front.partials.pages.room.similar-rooms')
        </div>
        <div class="col-lg-3 col-12">
          @include('front.partials.pages.room.sidebar')
        </div>
      </div>
  </main>
  @include('front.partials.layout.footer')
@endsection
@section('after-wrapper')
  @include('front.partials.layout.notification')
@endsection

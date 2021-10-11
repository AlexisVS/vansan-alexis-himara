@extends('front.layout.main')
@section('content')

@endsection
@include('front.partials.layout.header')
@include('front.partials.pages.event-details.revolution-slider')
<main class="restaurant">
  <div class="container">
    <div class="entry">
      @include('front.partials.pages.event-details.booking-form')
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum commodi incidunt labore unde minima numquam
        rerum, expedita itaque quibusdam ipsa consequuntur cupiditate, officia iure earum soluta voluptatem impedit
        pariatur rem! Nulla, error
        placeat! Animi harum, eveniet placeat excepturi perferendis, ex consectetur explicabo voluptatem totam hic,
        officiis quisquam? Similique eum itaque, delectus quo deserunt deleniti quibusdam alias sed commodi
        assumenda magnam unde provident
        praesentium doloribus a asperiores, amet dolores maiores, illo quis inventore sunt, nihil nemo pariatur!
        Culpa neque sint accusantium laboriosam reiciendis corporis, veritatis quos, debitis doloremque adipisci
        repudiandae atque, minus! Atque libero,
        asperiores ex fugit, quia consequatur modi officiis! Magnam quae atque quasi natus minima optio nobis
        eveniet aspernatur vitae deserunt totam in sed, placeat odio cumque, accusantium ducimus. Molestias quasi
        ipsa libero vero dolorem recusandae iusto
        beatae quae architecto provident expedita debitis, animi enim labore deleniti ullam, a nobis asperiores
        aliquam necessitatibus error? Quia consequatur vero assumenda architecto ex, aliquid. Perferendis, at,
        necessitatibus. Assumenda vel, consequuntur voluptatibus non voluptates!</p>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quia itaque accusantium voluptatibus esse
        animi tenetur adipisci! Iure cumque aliquam tempore quam, asperiores obcaecati architecto earum vitae a
        commodi ratione velit nesciunt
        animi at dolore illo fugit. At nostrum, tenetur similique adipisci
        voluptatem mollitia, cum neque autem labore sapiente dolore accusantium et excepturi odit iusto corporis,
        facere inventore obcaecati incidunt, est quam. Maiores aliquid cupiditate tenetur aut fugit! Quis deleniti
        nesciunt at officiis! Iusto
        recusandae numquam ratione excepturi perspiciatis cumque nisi, explicabo dolorum alias ipsum voluptates non,
        possimus! Voluptatem adipisci dolor quos tenetur placeat?</p>
      @include('front.partials.pages.event-details.image-gallery')
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quis autem natus dicta, possimus
        necessitatibus cum, et doloribus facilis fugit molestias! Delectus quo doloribus pariatur dolor sint, ad
        officiis totam similique quaerat nesciunt quod
        fugit libero voluptates deserunt laboriosam hic quia? Ex iusto maiores ipsum ab quis provident, molestiae
        veritatis, consequuntur nostrum aliquid quos. Eligendi enim fugiat fuga aperiam odio accusamus, architecto
        et, sequi ullam facere, quidem fugit
        ut. </p>
      <table class="mt20 mb20">
        <thead>
          <tr>
            <td>Name</td>
            <td>Nickname</td>
            <td>Number</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Jane</td>
            <td>Doe</td>
            <td>13</td>
          </tr>
          <tr>
            <td>Eve</td>
            <td>Doe</td>
            <td>94</td>
          </tr>
          <tr>
            <td>Jane</td>
            <td>Doe</td>
            <td>77</td>
          </tr>
          <tr>
            <td>Ina</td>
            <td>Aldrich</td>
            <td>16</td>
          </tr>
        </tbody>
      </table>
      <p>
        Praesentium vel quos recusandae perferendis, dolore voluptatibus nesciunt provident quod ab laborum
        quisquam alias quaerat optio. Temporibus, saepe, atque, ea inventore excepturi explicabo tenetur similique,
        rerum tempora doloremque at nemo
        alias.</p>
    </div>
  </div>
</main>
@include('front.partials.layout.footer')
@section('after-wrapper')
  @include('front.partials.layout.notification')
@endsection

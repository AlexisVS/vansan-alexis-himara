<main class="location-page">
  <div class="container">
    <div class="row">
      @if($teams->count())
      @foreach ($teams as $team)
      <div class="col-lg-3 col-md-6">
        <div class="staff-item">
          <figure>
            <img src="{{ 'images/staff/' . $team->figure_img }}" class="img-fluid" alt="Image">
            <div class="position">{{ $team->figure_text }}</div>
          </figure>
          <div class="details">
            <h5>{{ $team->details_name }}</h5>
            <p>{{ $team->details_text }}</p>
          </div>
        </div>
      </div>
      @endforeach
      @endif
    </div>
  </div>
</main>

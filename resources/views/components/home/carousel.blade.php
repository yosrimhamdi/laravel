<section id="hero">
  <div
    id="heroCarousel"
    class="carousel slide carousel-fade"
    data-ride="carousel"
  >

    <div
      class="carousel-inner"
      role="listbox"
    >
      @foreach ($slides as $slide)
        @if ($loop->first)
          {{ $x = 'active' }}
        @else
          {{ $x = '' }}
        @endif
        <div
          class="carousel-item {{ $x }}"
          style="background-image: url({{ url($slide->image) }});"
        >
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>{{ $slide->title }}</h2>
              <p>{{ $slide->description }}</p>
              <div class="text-center"><a
                  href=""
                  class="btn-get-started"
                >Read More</a></div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    <a
      class="carousel-control-prev"
      href="#heroCarousel"
      role="button"
      data-slide="prev"
    >
      <span
        class="carousel-control-prev-icon icofont-simple-left"
        aria-hidden="true"
      ></span>
      <span class="sr-only">Previous</span>
    </a>

    <a
      class="carousel-control-next"
      href="#heroCarousel"
      role="button"
      data-slide="next"
    >
      <span
        class="carousel-control-next-icon icofont-simple-right"
        aria-hidden="true"
      ></span>
      <span class="sr-only">Next</span>
    </a>

    <ol
      class="carousel-indicators"
      id="hero-carousel-indicators"
    ></ol>

  </div>
</section>

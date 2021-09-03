<section
  id="about-us"
  class="about-us"
>
  <div
    class="container"
    data-aos="fade-up"
  >
    <div class="section-title">
      <h2>About Us</strong></h2>
    </div>
    <div class="row content">
      <div
        class="col-lg-6"
        data-aos="fade-right"
      >
        <h2>{{ count($about) ? $about[0]->title : '' }}</h2>
        <h3>{{ count($about) ? $about[0]->short_description : '' }}</h3>
      </div>
      <div
        class="col-lg-6 pt-4 pt-lg-0"
        data-aos="fade-left"
      >
        <p>{{ count($about) ? $about[0]->long_description : '' }}</p>
        <ul>
          <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequa</li>
          <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
          <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
            aute irure dolor in reprehenderit in</li>
        </ul>
        <p class="font-italic">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
          dolore
          magna aliqua.
        </p>
      </div>
    </div>
  </div>
</section>

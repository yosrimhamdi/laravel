<x-home.base>
  <div class="map-section">
    <iframe
      style="border:0; width: 100%; height: 350px;"
      src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
      frameborder="0"
      allowfullscreen
    ></iframe>
  </div>
  <section
    id="contact"
    class="contact"
  >
    <div class="container">
      <div
        class="row justify-content-center"
        data-aos="fade-up"
      >
        <div class="col-lg-10">
          <div class="info-wrap">
            <div class="row">
              <div class="col-lg-4 info">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                @foreach ($contacts as $contact)
                  <p>{{ $contact->location }}</p>
                @endforeach
              </div>
              <div class="col-lg-4 info mt-4 mt-lg-0">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                @foreach ($contacts as $contact)
                  <p>{{ $contact->email }}</p>
                @endforeach
              </div>
              <div class="col-lg-4 info mt-4 mt-lg-0">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                @foreach ($contacts as $contact)
                  <p>{{ $contact->phone }}</p>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="row mt-5 justify-content-center"
        data-aos="fade-up"
      >
        <div class="col-lg-10">
          <form
            action="{{ route('message.store') }}"
            method="POST"
            role="form"
            class="php-email-form"
          >
            @csrf
            <div class="form-row">
              <div class="col-md-6 form-group">
                <input
                  type="text"
                  name="user-name"
                  class="form-control"
                  id="name"
                  placeholder="Your Name"
                  data-rule="minlen:4"
                  data-msg="Please enter at least 4 chars"
                />
                <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group">
                <input
                  type="email"
                  class="form-control"
                  name="email"
                  id="email"
                  placeholder="Your Email"
                  data-rule="email"
                  data-msg="Please enter a valid email"
                />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                name="subject"
                id="subject"
                placeholder="Subject"
                data-rule="minlen:4"
                data-msg="Please enter at least 8 chars of subject"
              />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea
                class="form-control"
                name="message"
                rows="5"
                data-rule="required"
                data-msg="Please write something for us"
                placeholder="Message"
              ></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>
      </div>
    </div>
  </section>
</x-home.base>

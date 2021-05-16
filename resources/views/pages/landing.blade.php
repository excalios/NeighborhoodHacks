<x-app-layout>
    <!-- Jumbotron -->
    <section class="container mt-5">
      <div class="row jumbotron d-flex flex-row align-items-center justify-content-center">
        <div class="col">
          <div class="jumbotron-text d-flex flex-column">
            <img src="{{ asset('assets/img/BisnisIn!.png') }}" alt="BisnisIn!" width="204" />
            <p class="lead mt-4" style="color: rgba(0, 0, 0, 0.38)">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas congue quis eros nec bibendum. Duis bibendum quis ante sit amet accumsan. Phasellus imperdiet, enim eget congue lobortis, neque ante laoreet orci, sit amet
              pharetra augue lacus ut tellus. Morbi fermentum in magna in efficitur.
            </p>
          </div>
        </div>
        <div class="col">
          <img src="{{ asset('assets/img/Landing.png') }}" alt="Landing" width="625" class="d-none d-md-block" />
        </div>
      </div>
    </section>
    <!-- End Jumbotron -->

    <!-- Statistics -->
    <section class="statistics">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="card h-100" style="background: linear-gradient(139.73deg, rgba(60, 178, 61, 0.72) 3.78%, #80da48 103.21%); box-shadow: 0px 4px 15px #b0b0b0; border-radius: 5px">
              <img src="{{ asset('assets/img/Statistics/1.png') }}" class="card-img-top" alt="Investors" />
              <div class="card-title ms-5" style="color: #ffffff; font-weight: 600; font-size: 20px">
                <h2>109</h2>
                <p>Investors</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-3 mt-4 mt-sm-0">
            <div class="card h-100" style="background: linear-gradient(139.73deg, rgba(60, 178, 61, 0.72) 3.78%, #80da48 103.21%); box-shadow: 0px 4px 15px #b0b0b0; border-radius: 5px">
              <img src="{{ asset('assets/img/Statistics/2.png') }}" class="card-img-top" alt="Investors" />
              <div class="card-title ms-5" style="color: #ffffff; font-weight: 600; font-size: 20px">
                <h2>87</h2>
                <p>Certified Advisor</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-3 mt-4 mt-md-0">
            <div class="card h-100" style="background: linear-gradient(139.73deg, rgba(60, 178, 61, 0.72) 3.78%, #80da48 103.21%); box-shadow: 0px 4px 15px #b0b0b0; border-radius: 5px">
              <img src="{{ asset('assets/img/Statistics/3.png') }}" class="card-img-top" alt="Investors" />
              <div class="card-title ms-5" style="color: #ffffff; font-weight: 600; font-size: 20px">
                <h2>1501</h2>
                <p>Business Owners</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-3 mt-4 mt-md-0">
            <div class="card h-100" style="background: linear-gradient(139.73deg, rgba(60, 178, 61, 0.72) 3.78%, #80da48 103.21%); box-shadow: 0px 4px 15px #b0b0b0; border-radius: 5px">
              <img src="{{ asset('assets/img/Statistics/4.png') }}" class="card-img-top" alt="Investors" />
              <div class="card-title ms-5" style="color: #ffffff; font-weight: 600; font-size: 20px">
                <h2>1.3 Billions</h2>
                <p>Rupiah Invested</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Statistics -->

    <!-- Features -->
    <section class="features my-5" id="features">
      <div class="container">
        <div class="row my-5 text-center text-md-start" style="font-weight: 600">
          <h2>Our<br />Features</h2>
        </div>
        <div class="row d-flex flex-column flex-md-row align-items-center align-items-md-stretch justify-content-between mx-5">
          <div class="col-6 col-md-4 col-lg-3 d-flex flex-column text-center">
            <img src="{{ asset('assets/img/Features/1.png') }}" alt="FindBusiness" class="card-img-top rounded-circle p-5" style="background: linear-gradient(139.73deg, rgba(60, 178, 61, 0.72) 3.78%, #80da48 103.21%)" />
            <h2 class="mt-5">Find Business</h2>
            <p style="font-style: italic; color: rgba(0, 0, 0, 0.38)">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus deserunt blanditiis facere eos voluptates nobis est, modi magni esse sit?</p>
          </div>
          <div class="col-6 col-md-4 col-lg-3 d-flex flex-column text-center">
            <img src="{{ asset('assets/img/Features/2.png') }}" alt="FindInvestors" class="card-img-top rounded-circle p-5" style="background: linear-gradient(139.73deg, rgba(60, 178, 61, 0.72) 3.78%, #80da48 103.21%)" />
            <h2 class="mt-5">Find Investor</h2>
            <p style="font-style: italic; color: rgba(0, 0, 0, 0.38)">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus deserunt blanditiis facere eos voluptates nobis est, modi magni esse sit?</p>
          </div>
          <div class="col-6 col-md-4 col-lg-3 d-flex flex-column text-center">
            <img src="{{ asset('assets/img/Features/3.png') }}" alt="ConsultBiz" class="card-img-top rounded-circle p-5" style="background: linear-gradient(139.73deg, rgba(60, 178, 61, 0.72) 3.78%, #80da48 103.21%)" />
            <h2 class="mt-5">Consult Biz</h2>
            <p style="font-style: italic; color: rgba(0, 0, 0, 0.38)">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus deserunt blanditiis facere eos voluptates nobis est, modi magni esse sit?</p>
          </div>
        </div>
      </div>
    </section>
    <!-- End Features -->

    <!-- Success Stories -->
    <section class="SuccessStories" id="success_stories">
      <div class="container">
        <div class="row my-4 text-center text-md-start" style="font-weight: 600">
          <h2>Success<br />Stories</h2>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <li type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></li>
            <li type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></li>
            <li type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></li>
          </div>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <div class="col d-flex flex-column-reverse flex-md-row align-items-center justify-content-center gap-4">
                <p class="testimoni-text">
                  Bu Tini is a housewife that starts her business in the pandemic era to help her husband who lost his job. BisnisIn has helped Bu Tini to gain 5 million Rupiah of Funding and help her kickstart her wooden furniture
                  Business. Now, Bu Tini has sell 352 units of her product and gain a stable income despite the economic uncertainty due to the pandemic.
                </p>
                <img src="assets/img/TestimoniImg.png" class="testimoni-image" alt="..." />
              </div>
            </div>
            <div class="carousel-item">
              <div class="col d-flex flex-column-reverse flex-md-row align-items-center justify-content-center gap-4">
                <p class="testimoni-text">
                  Bu Tini is a housewife that starts her business in the pandemic era to help her husband who lost his job. BisnisIn has helped Bu Tini to gain 5 million Rupiah of Funding and help her kickstart her wooden furniture
                  Business. Now, Bu Tini has sell 352 units of her product and gain a stable income despite the economic uncertainty due to the pandemic.
                </p>
                <img src="assets/img/TestimoniImg.png" class="testimoni-image" alt="..." />
              </div>
            </div>
            <div class="carousel-item">
              <div class="col d-flex flex-column-reverse flex-md-row align-items-center justify-content-center gap-4">
                <p class="testimoni-text">
                  Bu Tini is a housewife that starts her business in the pandemic era to help her husband who lost his job. BisnisIn has helped Bu Tini to gain 5 million Rupiah of Funding and help her kickstart her wooden furniture
                  Business. Now, Bu Tini has sell 352 units of her product and gain a stable income despite the economic uncertainty due to the pandemic.
                </p>
                <img src="assets/img/TestimoniImg.png" class="testimoni-image" alt="..." />
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon d-none-block d-md-none d-lg-block" style="background-color: #99D79A" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon d-none-block d-md-none d-lg-block" style="background-color: #99D79A" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>
    <!-- End Success Stories -->

</x-app-layout>

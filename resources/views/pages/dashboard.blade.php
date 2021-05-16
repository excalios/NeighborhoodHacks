<x-app-layout>
    <!-- Dashboard Jumbotron -->
    <section class="dashboard-jumbotron container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-8 col-centered mt-5">
          <div class="maintxt">
            <img src="{{ asset('assets/img/Dashboard Jumbtron.png') }}" width="1111" class="image-responsive d-none d-md-block" alt="LandingDash" />
            <div class="overlay-text col d-flex flex-column p-5">
              <div class="card-text d-flex flex-column flex-sm-row flex-md-column flex-lg-column">
                <h2 style="font-weight: 600; font-size: 48px">Did you know?</h2>
                <p>By investing in other businesses through equity mutual funds an entreprenuer an participate in other business opportunities available in the market, create capital at attractive returns for future use.</p>
              </div>
              <div class="d-flex flex-row align-items-center justify-content-start">
                <a type="button" class="btn rounded-pill" href="/" style="background: #09790b; color: #ffffff">Upgrade Account</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Dashboard Jumbotron -->

    <!-- Category -->
    <section class="category" id="category">
      <div class="container">
        <div class="row my-5 text-center text-md-start" style="font-weight: 600">
          <h2>Category</h2>
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row gap-5 justify-content-center">
                <div class="col-12 col-sm-6 col-md-2">
                  <div class="card d-flex justify-content-center align-items-center" style="background: rgba(255, 251, 161, 0.32)">
                    <img src="{{ asset('assets/img/Category/1.png') }}" class="card-img-top p-5" alt="Investors" />
                    <div class="card-title">
                      <a href="#" class="btn stretched-link" style="font-weight: 600; font-size: 20px">Culinary</a>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-2 mt-4 mt-sm-0">
                  <div class="card d-flex justify-content-center align-items-center" style="background: rgba(255, 251, 161, 0.32)">
                    <img src="{{ asset('assets/img/Category/2.png') }}" class="card-img-top p-5" alt="Investors" />
                    <div class="card-title" style="font-weight: 600; font-size: 20px">
                      <a href="#" class="btn stretched-link" style="font-weight: 600; font-size: 20px">Fashion</a>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-2 mt-4 mt-md-0">
                  <div class="card d-flex justify-content-center align-items-center" style="background: rgba(255, 251, 161, 0.32)">
                    <img src="{{ asset('assets/img/Category/3.png') }}" class="card-img-top p-5" alt="Investors" />
                    <div class="card-title" style="font-weight: 600; font-size: 20px">
                      <a href="#" class="btn stretched-link" style="font-weight: 600; font-size: 20px">Medical</a>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-2 mt-4 mt-md-0">
                  <div class="card d-flex justify-content-center align-items-center" style="background: rgba(255, 251, 161, 0.32)">
                    <img src="{{ asset('assets/img/Category/4.png') }}" class="card-img-top p-5" alt="Investors" />
                    <div class="card-title" style="font-weight: 600; font-size: 20px">
                      <a href="#" class="btn stretched-link" style="font-weight: 600; font-size: 20px">Service</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row gap-5 justify-content-center">
                <div class="col-12 col-sm-6 col-md-2">
                  <div class="card d-flex justify-content-center align-items-center" style="background: rgba(255, 251, 161, 0.32)">
                    <img src="assets/img/Category/1.png" class="card-img-top p-5" alt="Investors" />
                    <div class="card-title">
                      <a href="#" class="btn stretched-link" style="font-weight: 600; font-size: 20px">Culinary</a>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-2 mt-4 mt-sm-0">
                  <div class="card d-flex justify-content-center align-items-center" style="background: rgba(255, 251, 161, 0.32)">
                    <img src="assets/img/Category/2.png" class="card-img-top p-5" alt="Investors" />
                    <div class="card-title" style="font-weight: 600; font-size: 20px">
                      <a href="#" class="btn stretched-link" style="font-weight: 600; font-size: 20px">Fashion</a>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-2 mt-4 mt-md-0">
                  <div class="card d-flex justify-content-center align-items-center" style="background: rgba(255, 251, 161, 0.32)">
                    <img src="assets/img/Category/3.png" class="card-img-top p-5" alt="Investors" />
                    <div class="card-title" style="font-weight: 600; font-size: 20px">
                      <a href="#" class="btn stretched-link" style="font-weight: 600; font-size: 20px">Medical</a>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-2 mt-4 mt-md-0">
                  <div class="card d-flex justify-content-center align-items-center" style="background: rgba(255, 251, 161, 0.32)">
                    <img src="assets/img/Category/4.png" class="card-img-top p-5" alt="Investors" />
                    <div class="card-title" style="font-weight: 600; font-size: 20px">
                      <a href="#" class="btn stretched-link" style="font-weight: 600; font-size: 20px">Service</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" style="background-color: #18c016" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" style="background-color: #18c016" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>
    <!-- End Category -->

    <!-- Bussines -->
    <section class="bussines" id="bussines">
      <div class="container">
        <div class="row my-5 text-center text-md-start" style="font-weight: 600">
          <h2>Business</h2>
        </div>
        <!-- Search -->
        <div class="row d-flex flex-row justify-content-between">
          <div class="col-6">
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search Business Name..." aria-label="search" />
              <button class="btn rounded-pill" style="background: #58ca5a" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="46" height="16" fill="white" class="bi bi-search" viewBox="0 0 16 16">
                  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
              </button>
            </form>
          </div>
          <div class="col filter">
            <button class="btn">
              <a>Filter</a>
              <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-funnel-fill" viewBox="0 0 16 16">
                <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2z" />
              </svg>
            </button>
          </div>
        </div>
        <!-- End Search -->

        <div class="row mt-4 gap-5 justify-content-center">
          <div class="col-xl-3 col-lg-4 col-md-4 col-12">
            <div class="single-product">
              <div class="product-img col" style="border: 1px solid rgba(0, 0, 0, 0.35); box-sizing: border-box; border-radius: 20px">
                <a href="businessinfo.html">
                  <img src="assets/img/Product/1.png" class="img-fluid" />
                </a>
              </div>
              <div class="product-content mt-3">
                <h3><a href="businessinfo.html" style="font-weight: 600; font-size: 20px; color: #000000">Kain Batik Sidoarjo</a></h3>
                <div class="product-price">
                  <span style="color: rgba(0, 0, 0, 0.38)">Fashion</span>
                  <p style="font-weight: 600">Jakarta</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-4 col-12">
            <div class="single-product">
              <div class="product-img col" style="border: 1px solid rgba(0, 0, 0, 0.35); box-sizing: border-box; border-radius: 20px">
                <a href="businessinfo.html">
                  <img src="assets/img/Product/2.png" class="img-fluid" />
                </a>
              </div>
              <div class="product-content mt-3">
                <h3><a href="businessinfo.html" style="font-weight: 600; font-size: 20px; color: #000000">Kue Tradisional Maya</a></h3>
                <div class="product-price">
                  <span style="color: rgba(0, 0, 0, 0.38)">Culinary</span>
                  <p style="font-weight: 600">Banjarmasin</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-4 col-12">
            <div class="single-product">
              <div class="product-img col" style="border: 1px solid rgba(0, 0, 0, 0.35); box-sizing: border-box; border-radius: 20px">
                <a href="businessinfo.html">
                  <img src="assets/img/Product/3.png" class="img-fluid" />
                </a>
              </div>
              <div class="product-content mt-3">
                <h3><a href="businessinfo.html" style="font-weight: 600; font-size: 20px; color: #000000">Coconut utensils Ekoku</a></h3>
                <div class="product-price">
                  <span style="color: rgba(0, 0, 0, 0.38)">Houseware</span>
                  <p style="font-weight: 600">Payangkumbuh</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-4 col-12">
            <div class="single-product">
              <div class="product-img col" style="border: 1px solid rgba(0, 0, 0, 0.35); box-sizing: border-box; border-radius: 20px">
                <a href="{{ route('detail') }}">
                  <img src="assets/img/Product/4.png" class="img-fluid" />
                </a>
              </div>
              <div class="product-content mt-3">
                <h3><a href="{{ route('detail') }}" style="font-weight: 600; font-size: 20px; color: #000000">Keripik Maicih</a></h3>
                <div class="product-price">
                  <span style="color: rgba(0, 0, 0, 0.38)">Culinary</span>
                  <p style="font-weight: 600">Cirebon</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-4 col-12">
            <div class="single-product">
              <div class="product-img col" style="border: 1px solid rgba(0, 0, 0, 0.35); box-sizing: border-box; border-radius: 20px">
                <a href="businessinfo.html">
                  <img src="assets/img/Product/5.png" class="img-fluid" />
                </a>
              </div>
              <div class="product-content mt-3">
                <h3><a href="businessinfo.html" style="font-weight: 600; font-size: 20px; color: #000000">Keripik Pisang</a></h3>
                <div class="product-price">
                  <span style="color: rgba(0, 0, 0, 0.38)">Culinary</span>
                  <p style="font-weight: 600">Jakarta</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-4 col-12">
            <div class="single-product">
              <div class="product-img col" style="border: 1px solid rgba(0, 0, 0, 0.35); box-sizing: border-box; border-radius: 20px">
                <a href="businessinfo.html">
                  <img src="assets/img/Product/6.png" class="img-fluid" />
                </a>
              </div>
              <div class="product-content mt-3">
                <h3><a href="businessinfo.html" style="font-weight: 600; font-size: 20px; color: #000000">Kendi Bu Jowo</a></h3>
                <div class="product-price">
                  <span style="color: rgba(0, 0, 0, 0.38)">Houseware</span>
                  <p style="font-weight: 600">Malang</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Bussines -->

</x-app-layout>

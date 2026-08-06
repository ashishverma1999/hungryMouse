@extends('layouts.app')

@section('content')

      <section class="py-5 overflow-hidden bg-light" id="home">
        <div class="container-fluid px-0">
          <div class="row flex-center min-vh-75">
            <div class="col-md-7 col-lg-6 py-8 text-md-start text-center order-1 order-md-0">
              <h1 class="display-1 fs-md-5 fs-lg-6 fs-xl-8 text-black fw-bolder mb-4">Cloud Kitchen &bull; On The Move</h1>
              <p class="lead text-muted mb-5">Order from Hungry Mouse, delivering hot and fresh meals directly to your doorstep.</p>
              <div class="card shadow-sm border-0 rounded-pill p-2 w-xxl-100">
                <div class="card-body p-0">
                  <form class="row gx-0 align-items-center">
                    <div class="col">
                      <div class="input-group-icon"><i class="fas fa-map-marker-alt text-primary input-box-icon ms-3"></i>
                        <label class="visually-hidden" for="inputDelivery">Address</label>
                        <input class="form-control border-0 shadow-none ps-5 py-3 rounded-pill" type="text" placeholder="Enter delivery address" style="font-size: 1.1rem;" />
                      </div>
                    </div>
                    <div class="col-auto">
                      <button class="btn btn-primary rounded-pill py-3 px-4" type="submit"> <i class="fas fa-arrow-right"></i></button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-5 col-lg-6 order-0 order-md-1 mt-8 mt-md-0"><a class="img-landing-banner" href="#!"><img class="img-fluid rounded-3" src="{{ asset(\'assets/img/gallery/Artboard 1.png\') }}" alt="hero-header" style="box-shadow: 0 10px 40px rgba(0,0,0,0.1);" /></a></div>
          </div>
        </div>
      </section>



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-6 overflow-hidden bg-light">
        <div class="container">
          <div class="row h-100">
            <div class="col-lg-10 mx-auto text-center mb-5">
              <h2 class="fw-bolder" style="color: #0e3e26; font-size: 2.5rem; text-transform: uppercase; letter-spacing: 2px;">Explore Our Menu</h2>
              <hr style="width: 100px; height: 5px; background-color: #FFB30E; margin: 15px auto 0; opacity: 1; border: none; border-radius: 5px;">
            </div>
            <div class="col-12 col-md-10 mx-auto">
              <div id="menuCarousel" class="carousel slide carousel-fade shadow-lg rounded-4 overflow-hidden" data-bs-ride="carousel" data-bs-interval="3000" style="border: 4px solid #0e3e26;">
                <div class="carousel-indicators" style="margin-bottom: -40px;">
                  <button type="button" data-bs-target="#menuCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" style="background-color: #FFB30E; width: 12px; height: 12px; border-radius: 50%; margin: 0 5px;"></button>
                  <button type="button" data-bs-target="#menuCarousel" data-bs-slide-to="1" aria-label="Slide 2" style="background-color: #FFB30E; width: 12px; height: 12px; border-radius: 50%; margin: 0 5px;"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('assets/img/gallery/Artboard 1.png') }}" class="d-block w-100" alt="Menu Part 1">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('assets/img/gallery/Artboard 2.png') }}" class="d-block w-100" alt="Menu Part 2">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#menuCarousel" data-bs-slide="prev" style="width: 50px;">
                  <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: #0e3e26; border-radius: 50%; padding: 1.5rem; box-shadow: 0 4px 10px rgba(0,0,0,0.3);"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#menuCarousel" data-bs-slide="next" style="width: 50px;">
                  <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: #0e3e26; border-radius: 50%; padding: 1.5rem; box-shadow: 0 4px 10px rgba(0,0,0,0.3);"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->



      <section class="py-5">
        <div class="container-fluid px-0">
          <div class="row mb-4">
            <div class="col-12">
              <h3 class="fw-bold fs-4 fs-lg-5 lh-sm">Our Virtual Brands</h3>
            </div>
          </div>
          <div class="row gx-4 gy-4">
            <div class="col-sm-6 col-md-4 col-lg-3 h-100 mb-5"><a class="card border-0 shadow-none h-100 hover-top" href="#!" style="text-decoration: none; color: inherit;"><img class="img-fluid rounded-4 mb-3" src="{{ asset(\'assets/img/gallery/brand_burger.png\') }}" alt="..." style="object-fit: cover; height: 180px; width: 100%;" />
                <div class="card-body p-0">
                  <div class="d-flex justify-content-between align-items-start mb-1">
                    <h5 class="mb-0 fw-bold">FireBurger</h5><span class="badge bg-light text-dark fs--1 rounded-pill"><i class="fas fa-star text-warning me-1"></i>4.8</span>
                  </div>
                  <p class="text-muted mb-1 fs--1"><span class="text-dark fw-bold">$0 delivery fee</span><span class="mx-2">&bull;</span>Fast mins</p>
                  <p class="text-muted fs--1 mb-0">Virtual Brand &bull; Gourmet Smashed Burgers</p>
                </div>
              </a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 h-100 mb-5"><a class="card border-0 shadow-none h-100 hover-top" href="#!" style="text-decoration: none; color: inherit;"><img class="img-fluid rounded-4 mb-3" src="{{ asset(\'assets/img/gallery/brand_burger.png\') }}" alt="..." style="object-fit: cover; height: 180px; width: 100%;" />
                <div class="card-body p-0">
                  <div class="d-flex justify-content-between align-items-start mb-1">
                    <h5 class="mb-0 fw-bold">Slice City</h5><span class="badge bg-light text-dark fs--1 rounded-pill"><i class="fas fa-star text-warning me-1"></i>4.5</span>
                  </div>
                  <p class="text-muted mb-1 fs--1"><span class="text-dark fw-bold">$0 delivery fee</span><span class="mx-2">&bull;</span>Fast mins</p>
                  <p class="text-muted fs--1 mb-0">Virtual Brand &bull; Artisan Neapolitan Pizza</p>
                </div>
              </a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 h-100 mb-5"><a class="card border-0 shadow-none h-100 hover-top" href="#!" style="text-decoration: none; color: inherit;"><img class="img-fluid rounded-4 mb-3" src="{{ asset(\'assets/img/gallery/brand_burger.png\') }}" alt="..." style="object-fit: cover; height: 180px; width: 100%;" />
                <div class="card-body p-0">
                  <div class="d-flex justify-content-between align-items-start mb-1">
                    <h5 class="mb-0 fw-bold">GreenBowl</h5><span class="badge bg-light text-dark fs--1 rounded-pill"><i class="fas fa-star text-warning me-1"></i>4.9</span>
                  </div>
                  <p class="text-muted mb-1 fs--1"><span class="text-dark fw-bold">$0 delivery fee</span><span class="mx-2">&bull;</span>Fast mins</p>
                  <p class="text-muted fs--1 mb-0">Virtual Brand &bull; Fresh Salads &amp; Bowls</p>
                </div>
              </a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 h-100 mb-5"><a class="card border-0 shadow-none h-100 hover-top" href="#!" style="text-decoration: none; color: inherit;"><img class="img-fluid rounded-4 mb-3" src="{{ asset(\'assets/img/gallery/brand_burger.png\') }}" alt="..." style="object-fit: cover; height: 180px; width: 100%;" />
                <div class="card-body p-0">
                  <div class="d-flex justify-content-between align-items-start mb-1">
                    <h5 class="mb-0 fw-bold">Taco Loco</h5><span class="badge bg-light text-dark fs--1 rounded-pill"><i class="fas fa-star text-warning me-1"></i>4.6</span>
                  </div>
                  <p class="text-muted mb-1 fs--1"><span class="text-dark fw-bold">$0 delivery fee</span><span class="mx-2">&bull;</span>Fast mins</p>
                  <p class="text-muted fs--1 mb-0">Virtual Brand &bull; Authentic Street Tacos</p>
                </div>
              </a></div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      
@endsection

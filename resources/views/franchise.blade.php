@extends('layouts.app')

@section('content')

      <section class="py-8 overflow-hidden bg-light" id="franchise">
        <div class="container-fluid px-0">
          <div class="row flex-center">
            <div class="col-12 text-center">
              <h1 class="display-1 fs-md-5 fs-lg-6 fs-xl-8 text-black fw-bolder mb-4">Franchise Opportunities</h1>
              <p class="lead text-muted mb-5">Partner with Hungry Mouse and join our growing family!</p>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-8 mt-4"><img class="img-fluid rounded-3 w-100" src="{{ asset(\'assets/img/gallery/Hungry_Mouse_Grand_Opening_Print_1080x1350.png\') }}" alt="Grand Opening" style="box-shadow: 0 10px 40px rgba(0,0,0,0.1);"></div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      

      <section class="py-6" style="background-color: #f9f9f9;">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="card border-0 shadow-lg" style="border-radius: 15px; overflow: hidden;">
                <div class="card-header text-center py-4" style="background-color: #0e3e26; color: #FFB30E;">
                  <h3 class="mb-0 fw-bold">Franchise Inquiry Form</h3>
                  <p class="mb-0 text-white-50">Fill out the details below and our team will get back to you.</p>
                </div>
                <div class="card-body p-5 bg-white">
                  <form action="#" method="POST">
                    <div class="row g-4">
                      <div class="col-md-6">
                        <label class="form-label fw-bold" style="color: #0e3e26;">Full Name</label>
                        <input type="text" class="form-control py-2" placeholder="John Doe" required style="border-radius: 8px;">
                      </div>
                      <div class="col-md-6">
                        <label class="form-label fw-bold" style="color: #0e3e26;">Email Address</label>
                        <input type="email" class="form-control py-2" placeholder="johndoe@example.com" required style="border-radius: 8px;">
                      </div>
                      <div class="col-md-6">
                        <label class="form-label fw-bold" style="color: #0e3e26;">Phone Number</label>
                        <input type="tel" class="form-control py-2" placeholder="+91 XXXXX XXXXX" required style="border-radius: 8px;">
                      </div>
                      <div class="col-md-6">
                        <label class="form-label fw-bold" style="color: #0e3e26;">City / Location</label>
                        <input type="text" class="form-control py-2" placeholder="Lucknow" required style="border-radius: 8px;">
                      </div>
                      <div class="col-12">
                        <label class="form-label fw-bold" style="color: #0e3e26;">Investment Budget</label>
                        <select class="form-select py-2" style="border-radius: 8px;">
                          <option selected disabled>Select a range</option>
                          <option value="5L-10L">5 Lakhs - 10 Lakhs</option>
                          <option value="10L-20L">10 Lakhs - 20 Lakhs</option>
                          <option value="20L-50L">20 Lakhs - 50 Lakhs</option>
                          <option value="50L+">50 Lakhs+</option>
                        </select>
                      </div>
                      <div class="col-12">
                        <label class="form-label fw-bold" style="color: #0e3e26;">Additional Message</label>
                        <textarea class="form-control" rows="4" placeholder="Tell us about your experience and interest..." style="border-radius: 8px;"></textarea>
                      </div>
                      <div class="col-12 text-center mt-5">
                        <button type="submit" class="btn btn-lg px-5 fw-bold" style="background-color: #FFB30E; color: #0e3e26; border-radius: 8px; box-shadow: 0 4px 15px rgba(255, 179, 14, 0.4); border: none;">Submit Inquiry</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

@endsection

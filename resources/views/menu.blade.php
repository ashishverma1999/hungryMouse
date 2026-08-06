@extends('layouts.app')

@section('content')

      <section class="py-8 overflow-hidden bg-light" id="menu">
        <div class="container-fluid px-0">
          <div class="row flex-center">
            <div class="col-12 text-center">
              <h1 class="display-1 fs-md-5 fs-lg-6 fs-xl-8 text-black fw-bolder mb-4">Our Menu</h1>
              <p class="lead text-muted mb-5">Cart and Carry every time!</p>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-8 mb-4"><img class="img-fluid rounded-3 w-100" src="{{ asset(\'assets/img/gallery/Artboard 2.png\') }}" alt="Menu Banner" style="box-shadow: 0 10px 40px rgba(0,0,0,0.1);"></div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      

      <section class="py-5" style="background-color: #f9f9f9;">
        <div class="container-fluid px-0">
          <div class="row mb-5">
            <div class="col-12 text-center">
              <h2 class="fw-bolder" style="color: #0e3e26; font-size: 2.5rem; text-transform: uppercase; letter-spacing: 2px;">Indian Combos</h2>
              <hr style="width: 100px; height: 5px; background-color: #FFB30E; margin: 15px auto 0; opacity: 1; border: none; border-radius: 5px;">
            </div>
          </div>
          <div class="row g-4 px-3 px-md-5">
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; background: #ffffff; border-left: 6px solid #0e3e26 !important; transition: transform 0.2s;">
                <div class="card-body position-relative p-4">
                  
                  <div class="d-flex align-items-start mb-3">
                    <div class="d-flex justify-content-center align-items-center rounded" style="min-width: 45px; height: 45px; background-color: #0e3e26; color: #FFB30E; font-weight: 800; font-size: 1.25rem;">
                      1
                    </div>
                    <h5 class="card-title fw-bold ms-3 mb-0" style="color: #212529; flex: 1; line-height: 1.4;">DAL MAKHNI WITH JEERA RICE</h5>
                  </div>
                  <div class="d-flex justify-content-between align-items-end mt-4 pt-2" style="border-top: 1px dashed #e9ecef;">
                    <span class="text-muted fw-bold" style="font-size: 0.9rem; letter-spacing: 1px;">PRICE</span>
                    <span class="fw-bolder fs-2" style="color: #d13030;">₹149</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; background: #ffffff; border-left: 6px solid #0e3e26 !important; transition: transform 0.2s;">
                <div class="card-body position-relative p-4">
                  
                  <div class="d-flex align-items-start mb-3">
                    <div class="d-flex justify-content-center align-items-center rounded" style="min-width: 45px; height: 45px; background-color: #0e3e26; color: #FFB30E; font-weight: 800; font-size: 1.25rem;">
                      2
                    </div>
                    <h5 class="card-title fw-bold ms-3 mb-0" style="color: #212529; flex: 1; line-height: 1.4;">DAL TADKA WITH STEAM RICE</h5>
                  </div>
                  <div class="d-flex justify-content-between align-items-end mt-4 pt-2" style="border-top: 1px dashed #e9ecef;">
                    <span class="text-muted fw-bold" style="font-size: 0.9rem; letter-spacing: 1px;">PRICE</span>
                    <span class="fw-bolder fs-2" style="color: #d13030;">₹99</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; background: #ffffff; border-left: 6px solid #0e3e26 !important; transition: transform 0.2s;">
                <div class="card-body position-relative p-4">
                  
                  <div class="d-flex align-items-start mb-3">
                    <div class="d-flex justify-content-center align-items-center rounded" style="min-width: 45px; height: 45px; background-color: #0e3e26; color: #FFB30E; font-weight: 800; font-size: 1.25rem;">
                      3
                    </div>
                    <h5 class="card-title fw-bold ms-3 mb-0" style="color: #212529; flex: 1; line-height: 1.4;">KADHAI PANEER + LACCHA PARATHA 2PC</h5>
                  </div>
                  <div class="d-flex justify-content-between align-items-end mt-4 pt-2" style="border-top: 1px dashed #e9ecef;">
                    <span class="text-muted fw-bold" style="font-size: 0.9rem; letter-spacing: 1px;">PRICE</span>
                    <span class="fw-bolder fs-2" style="color: #d13030;">₹129</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; background: #ffffff; border-left: 6px solid #0e3e26 !important; transition: transform 0.2s;">
                <div class="card-body position-relative p-4">
                  
                  <div class="d-flex align-items-start mb-3">
                    <div class="d-flex justify-content-center align-items-center rounded" style="min-width: 45px; height: 45px; background-color: #0e3e26; color: #FFB30E; font-weight: 800; font-size: 1.25rem;">
                      4
                    </div>
                    <h5 class="card-title fw-bold ms-3 mb-0" style="color: #212529; flex: 1; line-height: 1.4;">PANEER BUTTER MASALA + STEAM RICE</h5>
                  </div>
                  <div class="d-flex justify-content-between align-items-end mt-4 pt-2" style="border-top: 1px dashed #e9ecef;">
                    <span class="text-muted fw-bold" style="font-size: 0.9rem; letter-spacing: 1px;">PRICE</span>
                    <span class="fw-bolder fs-2" style="color: #d13030;">₹149</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; background: #ffffff; border-left: 6px solid #0e3e26 !important; transition: transform 0.2s;">
                <div class="card-body position-relative p-4">
                  
                  <div class="d-flex align-items-start mb-3">
                    <div class="d-flex justify-content-center align-items-center rounded" style="min-width: 45px; height: 45px; background-color: #0e3e26; color: #FFB30E; font-weight: 800; font-size: 1.25rem;">
                      5
                    </div>
                    <h5 class="card-title fw-bold ms-3 mb-0" style="color: #212529; flex: 1; line-height: 1.4;">MIX VEG + 2 BUTTER NAAN</h5>
                  </div>
                  <div class="d-flex justify-content-between align-items-end mt-4 pt-2" style="border-top: 1px dashed #e9ecef;">
                    <span class="text-muted fw-bold" style="font-size: 0.9rem; letter-spacing: 1px;">PRICE</span>
                    <span class="fw-bolder fs-2" style="color: #d13030;">₹149</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; background: #ffffff; border-left: 6px solid #0e3e26 !important; transition: transform 0.2s;">
                <div class="card-body position-relative p-4">
                  
                  <div class="d-flex align-items-start mb-3">
                    <div class="d-flex justify-content-center align-items-center rounded" style="min-width: 45px; height: 45px; background-color: #0e3e26; color: #FFB30E; font-weight: 800; font-size: 1.25rem;">
                      6
                    </div>
                    <h5 class="card-title fw-bold ms-3 mb-0" style="color: #212529; flex: 1; line-height: 1.4;">ALOO JEERA + POORI (4PC)</h5>
                  </div>
                  <div class="d-flex justify-content-between align-items-end mt-4 pt-2" style="border-top: 1px dashed #e9ecef;">
                    <span class="text-muted fw-bold" style="font-size: 0.9rem; letter-spacing: 1px;">PRICE</span>
                    <span class="fw-bolder fs-2" style="color: #d13030;">₹99</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; background: #ffffff; border-left: 6px solid #0e3e26 !important; transition: transform 0.2s;">
                <div class="card-body position-relative p-4">
                  
                  <div class="d-flex align-items-start mb-3">
                    <div class="d-flex justify-content-center align-items-center rounded" style="min-width: 45px; height: 45px; background-color: #0e3e26; color: #FFB30E; font-weight: 800; font-size: 1.25rem;">
                      7
                    </div>
                    <h5 class="card-title fw-bold ms-3 mb-0" style="color: #212529; flex: 1; line-height: 1.4;">CHOLE BHATURE (2PC)</h5>
                  </div>
                  <div class="d-flex justify-content-between align-items-end mt-4 pt-2" style="border-top: 1px dashed #e9ecef;">
                    <span class="text-muted fw-bold" style="font-size: 0.9rem; letter-spacing: 1px;">PRICE</span>
                    <span class="fw-bolder fs-2" style="color: #d13030;">₹119</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; background: #ffffff; border-left: 6px solid #0e3e26 !important; transition: transform 0.2s;">
                <div class="card-body position-relative p-4">
                  
                  <div class="d-flex align-items-start mb-3">
                    <div class="d-flex justify-content-center align-items-center rounded" style="min-width: 45px; height: 45px; background-color: #0e3e26; color: #FFB30E; font-weight: 800; font-size: 1.25rem;">
                      8
                    </div>
                    <h5 class="card-title fw-bold ms-3 mb-0" style="color: #212529; flex: 1; line-height: 1.4;">RAJMA CHAWAL</h5>
                  </div>
                  <div class="d-flex justify-content-between align-items-end mt-4 pt-2" style="border-top: 1px dashed #e9ecef;">
                    <span class="text-muted fw-bold" style="font-size: 0.9rem; letter-spacing: 1px;">PRICE</span>
                    <span class="fw-bolder fs-2" style="color: #d13030;">₹129</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; background: #ffffff; border-left: 6px solid #0e3e26 !important; transition: transform 0.2s;">
                <div class="card-body position-relative p-4">
                  
                  <div class="d-flex align-items-start mb-3">
                    <div class="d-flex justify-content-center align-items-center rounded" style="min-width: 45px; height: 45px; background-color: #0e3e26; color: #FFB30E; font-weight: 800; font-size: 1.25rem;">
                      9
                    </div>
                    <h5 class="card-title fw-bold ms-3 mb-0" style="color: #212529; flex: 1; line-height: 1.4;">PANEER TIKKA MASALA + JEERA RICE</h5>
                  </div>
                  <div class="d-flex justify-content-between align-items-end mt-4 pt-2" style="border-top: 1px dashed #e9ecef;">
                    <span class="text-muted fw-bold" style="font-size: 0.9rem; letter-spacing: 1px;">PRICE</span>
                    <span class="fw-bolder fs-2" style="color: #d13030;">₹159</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; background: #ffffff; border-left: 6px solid #0e3e26 !important; transition: transform 0.2s;">
                <div class="card-body position-relative p-4">
                  
                  <div class="d-flex align-items-start mb-3">
                    <div class="d-flex justify-content-center align-items-center rounded" style="min-width: 45px; height: 45px; background-color: #0e3e26; color: #FFB30E; font-weight: 800; font-size: 1.25rem;">
                      10
                    </div>
                    <h5 class="card-title fw-bold ms-3 mb-0" style="color: #212529; flex: 1; line-height: 1.4;">VEG BIRYANI + RAITA</h5>
                  </div>
                  <div class="d-flex justify-content-between align-items-end mt-4 pt-2" style="border-top: 1px dashed #e9ecef;">
                    <span class="text-muted fw-bold" style="font-size: 0.9rem; letter-spacing: 1px;">PRICE</span>
                    <span class="fw-bolder fs-2" style="color: #d13030;">₹149</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="py-5" style="background-color: #f9f9f9;">
        <div class="container-fluid px-0">
          <div class="row mb-5">
            <div class="col-12 text-center">
              <h2 class="fw-bolder" style="color: #0e3e26; font-size: 2.5rem; text-transform: uppercase; letter-spacing: 2px;">Chinese Combos</h2>
              <hr style="width: 100px; height: 5px; background-color: #FFB30E; margin: 15px auto 0; opacity: 1; border: none; border-radius: 5px;">
            </div>
          </div>
          <div class="row g-4 px-3 px-md-5">
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; background: #ffffff; border-left: 6px solid #0e3e26 !important; transition: transform 0.2s;">
                <div class="card-body position-relative p-4">
                  
                  <div class="d-flex align-items-start mb-3">
                    <div class="d-flex justify-content-center align-items-center rounded" style="min-width: 45px; height: 45px; background-color: #0e3e26; color: #FFB30E; font-weight: 800; font-size: 1.25rem;">
                      1
                    </div>
                    <h5 class="card-title fw-bold ms-3 mb-0" style="color: #212529; flex: 1; line-height: 1.4;">VEG HAKKA NOODLES + CHILLI PANEER</h5>
                  </div>
                  <div class="d-flex justify-content-between align-items-end mt-4 pt-2" style="border-top: 1px dashed #e9ecef;">
                    <span class="text-muted fw-bold" style="font-size: 0.9rem; letter-spacing: 1px;">PRICE</span>
                    <span class="fw-bolder fs-2" style="color: #d13030;">₹149</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; background: #ffffff; border-left: 6px solid #0e3e26 !important; transition: transform 0.2s;">
                <div class="card-body position-relative p-4">
                  
                  <div class="d-flex align-items-start mb-3">
                    <div class="d-flex justify-content-center align-items-center rounded" style="min-width: 45px; height: 45px; background-color: #0e3e26; color: #FFB30E; font-weight: 800; font-size: 1.25rem;">
                      2
                    </div>
                    <h5 class="card-title fw-bold ms-3 mb-0" style="color: #212529; flex: 1; line-height: 1.4;">VEG FRIED RICE + MANCHURIAN</h5>
                  </div>
                  <div class="d-flex justify-content-between align-items-end mt-4 pt-2" style="border-top: 1px dashed #e9ecef;">
                    <span class="text-muted fw-bold" style="font-size: 0.9rem; letter-spacing: 1px;">PRICE</span>
                    <span class="fw-bolder fs-2" style="color: #d13030;">₹149</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; background: #ffffff; border-left: 6px solid #0e3e26 !important; transition: transform 0.2s;">
                <div class="card-body position-relative p-4">
                  
                  <div class="d-flex align-items-start mb-3">
                    <div class="d-flex justify-content-center align-items-center rounded" style="min-width: 45px; height: 45px; background-color: #0e3e26; color: #FFB30E; font-weight: 800; font-size: 1.25rem;">
                      3
                    </div>
                    <h5 class="card-title fw-bold ms-3 mb-0" style="color: #212529; flex: 1; line-height: 1.4;">SCHEZWAN FRIED RICE + CHILLI PANEER</h5>
                  </div>
                  <div class="d-flex justify-content-between align-items-end mt-4 pt-2" style="border-top: 1px dashed #e9ecef;">
                    <span class="text-muted fw-bold" style="font-size: 0.9rem; letter-spacing: 1px;">PRICE</span>
                    <span class="fw-bolder fs-2" style="color: #d13030;">₹159</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; background: #ffffff; border-left: 6px solid #0e3e26 !important; transition: transform 0.2s;">
                <div class="card-body position-relative p-4">
                  
                  <div class="d-flex align-items-start mb-3">
                    <div class="d-flex justify-content-center align-items-center rounded" style="min-width: 45px; height: 45px; background-color: #0e3e26; color: #FFB30E; font-weight: 800; font-size: 1.25rem;">
                      4
                    </div>
                    <h5 class="card-title fw-bold ms-3 mb-0" style="color: #212529; flex: 1; line-height: 1.4;">HAKKA NOODLES + MANCHURIAN</h5>
                  </div>
                  <div class="d-flex justify-content-between align-items-end mt-4 pt-2" style="border-top: 1px dashed #e9ecef;">
                    <span class="text-muted fw-bold" style="font-size: 0.9rem; letter-spacing: 1px;">PRICE</span>
                    <span class="fw-bolder fs-2" style="color: #d13030;">₹149</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; background: #ffffff; border-left: 6px solid #0e3e26 !important; transition: transform 0.2s;">
                <div class="card-body position-relative p-4">
                  
                  <div class="d-flex align-items-start mb-3">
                    <div class="d-flex justify-content-center align-items-center rounded" style="min-width: 45px; height: 45px; background-color: #0e3e26; color: #FFB30E; font-weight: 800; font-size: 1.25rem;">
                      5
                    </div>
                    <h5 class="card-title fw-bold ms-3 mb-0" style="color: #212529; flex: 1; line-height: 1.4;">SINGAPORE NOODLES + CHILLI PANEER</h5>
                  </div>
                  <div class="d-flex justify-content-between align-items-end mt-4 pt-2" style="border-top: 1px dashed #e9ecef;">
                    <span class="text-muted fw-bold" style="font-size: 0.9rem; letter-spacing: 1px;">PRICE</span>
                    <span class="fw-bolder fs-2" style="color: #d13030;">₹159</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; background: #ffffff; border-left: 6px solid #0e3e26 !important; transition: transform 0.2s;">
                <div class="card-body position-relative p-4">
                  
                  <div class="d-flex align-items-start mb-3">
                    <div class="d-flex justify-content-center align-items-center rounded" style="min-width: 45px; height: 45px; background-color: #0e3e26; color: #FFB30E; font-weight: 800; font-size: 1.25rem;">
                      6
                    </div>
                    <h5 class="card-title fw-bold ms-3 mb-0" style="color: #212529; flex: 1; line-height: 1.4;">FRIED RICE + CHILLI GARLIC POTATO</h5>
                  </div>
                  <div class="d-flex justify-content-between align-items-end mt-4 pt-2" style="border-top: 1px dashed #e9ecef;">
                    <span class="text-muted fw-bold" style="font-size: 0.9rem; letter-spacing: 1px;">PRICE</span>
                    <span class="fw-bolder fs-2" style="color: #d13030;">₹129</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="py-5" style="background-color: #f9f9f9;">
        <div class="container-fluid px-0">
          <div class="row mb-5">
            <div class="col-12 text-center">
              <h2 class="fw-bolder" style="color: #0e3e26; font-size: 2.5rem; text-transform: uppercase; letter-spacing: 2px;">Tandoor Combos</h2>
              <hr style="width: 100px; height: 5px; background-color: #FFB30E; margin: 15px auto 0; opacity: 1; border: none; border-radius: 5px;">
            </div>
          </div>
          <div class="row g-4 px-3 px-md-5">
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; background: #ffffff; border-left: 6px solid #0e3e26 !important; transition: transform 0.2s;">
                <div class="card-body position-relative p-4">
                  
                  <div class="d-flex align-items-start mb-3">
                    <div class="d-flex justify-content-center align-items-center rounded" style="min-width: 45px; height: 45px; background-color: #0e3e26; color: #FFB30E; font-weight: 800; font-size: 1.25rem;">
                      1
                    </div>
                    <h5 class="card-title fw-bold ms-3 mb-0" style="color: #212529; flex: 1; line-height: 1.4;">PANEER TIKKA (6 PC) + MINT CHUTNEY</h5>
                  </div>
                  <div class="d-flex justify-content-between align-items-end mt-4 pt-2" style="border-top: 1px dashed #e9ecef;">
                    <span class="text-muted fw-bold" style="font-size: 0.9rem; letter-spacing: 1px;">PRICE</span>
                    <span class="fw-bolder fs-2" style="color: #d13030;">₹199</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; background: #ffffff; border-left: 6px solid #0e3e26 !important; transition: transform 0.2s;">
                <div class="card-body position-relative p-4">
                  
                  <div class="d-flex align-items-start mb-3">
                    <div class="d-flex justify-content-center align-items-center rounded" style="min-width: 45px; height: 45px; background-color: #0e3e26; color: #FFB30E; font-weight: 800; font-size: 1.25rem;">
                      2
                    </div>
                    <h5 class="card-title fw-bold ms-3 mb-0" style="color: #212529; flex: 1; line-height: 1.4;">MALAI PANEER TIKKA (6 PC) + MINT CHUTNEY</h5>
                  </div>
                  <div class="d-flex justify-content-between align-items-end mt-4 pt-2" style="border-top: 1px dashed #e9ecef;">
                    <span class="text-muted fw-bold" style="font-size: 0.9rem; letter-spacing: 1px;">PRICE</span>
                    <span class="fw-bolder fs-2" style="color: #d13030;">₹219</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; background: #ffffff; border-left: 6px solid #0e3e26 !important; transition: transform 0.2s;">
                <div class="card-body position-relative p-4">
                  
                  <div class="d-flex align-items-start mb-3">
                    <div class="d-flex justify-content-center align-items-center rounded" style="min-width: 45px; height: 45px; background-color: #0e3e26; color: #FFB30E; font-weight: 800; font-size: 1.25rem;">
                      3
                    </div>
                    <h5 class="card-title fw-bold ms-3 mb-0" style="color: #212529; flex: 1; line-height: 1.4;">VEG SEEKH KEBAB (2 PC) + MINT CHUTNEY</h5>
                  </div>
                  <div class="d-flex justify-content-between align-items-end mt-4 pt-2" style="border-top: 1px dashed #e9ecef;">
                    <span class="text-muted fw-bold" style="font-size: 0.9rem; letter-spacing: 1px;">PRICE</span>
                    <span class="fw-bolder fs-2" style="color: #d13030;">₹159</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; background: #ffffff; border-left: 6px solid #0e3e26 !important; transition: transform 0.2s;">
                <div class="card-body position-relative p-4">
                  
                  <div class="d-flex align-items-start mb-3">
                    <div class="d-flex justify-content-center align-items-center rounded" style="min-width: 45px; height: 45px; background-color: #0e3e26; color: #FFB30E; font-weight: 800; font-size: 1.25rem;">
                      4
                    </div>
                    <h5 class="card-title fw-bold ms-3 mb-0" style="color: #212529; flex: 1; line-height: 1.4;">TANDOORI ALOO (6 PC) + MINT CHUTNEY</h5>
                  </div>
                  <div class="d-flex justify-content-between align-items-end mt-4 pt-2" style="border-top: 1px dashed #e9ecef;">
                    <span class="text-muted fw-bold" style="font-size: 0.9rem; letter-spacing: 1px;">PRICE</span>
                    <span class="fw-bolder fs-2" style="color: #d13030;">₹129</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; background: #ffffff; border-left: 6px solid #0e3e26 !important; transition: transform 0.2s;">
                <div class="card-body position-relative p-4">
                  
                  <div class="d-flex align-items-start mb-3">
                    <div class="d-flex justify-content-center align-items-center rounded" style="min-width: 45px; height: 45px; background-color: #0e3e26; color: #FFB30E; font-weight: 800; font-size: 1.25rem;">
                      5
                    </div>
                    <h5 class="card-title fw-bold ms-3 mb-0" style="color: #212529; flex: 1; line-height: 1.4;">TANDOORI PLATTER (PANEER TIKKA 4 PC + SEEKH KEBAB 2 PC)</h5>
                  </div>
                  <div class="d-flex justify-content-between align-items-end mt-4 pt-2" style="border-top: 1px dashed #e9ecef;">
                    <span class="text-muted fw-bold" style="font-size: 0.9rem; letter-spacing: 1px;">PRICE</span>
                    <span class="fw-bolder fs-2" style="color: #d13030;">₹249</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="py-5" style="background-color: #f9f9f9;">
        <div class="container-fluid px-0">
          <div class="row mb-5">
            <div class="col-12 text-center">
              <h2 class="fw-bolder" style="color: #0e3e26; font-size: 2.5rem; text-transform: uppercase; letter-spacing: 2px;">Continental Combos</h2>
              <hr style="width: 100px; height: 5px; background-color: #FFB30E; margin: 15px auto 0; opacity: 1; border: none; border-radius: 5px;">
            </div>
          </div>
          <div class="row g-4 px-3 px-md-5">
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; background: #ffffff; border-left: 6px solid #0e3e26 !important; transition: transform 0.2s;">
                <div class="card-body position-relative p-4">
                  
                  <div class="d-flex align-items-start mb-3">
                    <div class="d-flex justify-content-center align-items-center rounded" style="min-width: 45px; height: 45px; background-color: #0e3e26; color: #FFB30E; font-weight: 800; font-size: 1.25rem;">
                      1
                    </div>
                    <h5 class="card-title fw-bold ms-3 mb-0" style="color: #212529; flex: 1; line-height: 1.4;">PANEER TIKKA PIZZA + SOFT DRINK</h5>
                  </div>
                  <div class="d-flex justify-content-between align-items-end mt-4 pt-2" style="border-top: 1px dashed #e9ecef;">
                    <span class="text-muted fw-bold" style="font-size: 0.9rem; letter-spacing: 1px;">PRICE</span>
                    <span class="fw-bolder fs-2" style="color: #d13030;">₹149</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; background: #ffffff; border-left: 6px solid #0e3e26 !important; transition: transform 0.2s;">
                <div class="card-body position-relative p-4">
                  
                  <div class="d-flex align-items-start mb-3">
                    <div class="d-flex justify-content-center align-items-center rounded" style="min-width: 45px; height: 45px; background-color: #0e3e26; color: #FFB30E; font-weight: 800; font-size: 1.25rem;">
                      2
                    </div>
                    <h5 class="card-title fw-bold ms-3 mb-0" style="color: #212529; flex: 1; line-height: 1.4;">VEGGIE PIZZA + SOFT DRINK</h5>
                  </div>
                  <div class="d-flex justify-content-between align-items-end mt-4 pt-2" style="border-top: 1px dashed #e9ecef;">
                    <span class="text-muted fw-bold" style="font-size: 0.9rem; letter-spacing: 1px;">PRICE</span>
                    <span class="fw-bolder fs-2" style="color: #d13030;">₹129</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; background: #ffffff; border-left: 6px solid #0e3e26 !important; transition: transform 0.2s;">
                <div class="card-body position-relative p-4">
                  
                  <div class="d-flex align-items-start mb-3">
                    <div class="d-flex justify-content-center align-items-center rounded" style="min-width: 45px; height: 45px; background-color: #0e3e26; color: #FFB30E; font-weight: 800; font-size: 1.25rem;">
                      3
                    </div>
                    <h5 class="card-title fw-bold ms-3 mb-0" style="color: #212529; flex: 1; line-height: 1.4;">WHITE SAUCE PASTA + GARLIC BREAD</h5>
                  </div>
                  <div class="d-flex justify-content-between align-items-end mt-4 pt-2" style="border-top: 1px dashed #e9ecef;">
                    <span class="text-muted fw-bold" style="font-size: 0.9rem; letter-spacing: 1px;">PRICE</span>
                    <span class="fw-bolder fs-2" style="color: #d13030;">₹149</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; background: #ffffff; border-left: 6px solid #0e3e26 !important; transition: transform 0.2s;">
                <div class="card-body position-relative p-4">
                  
                  <div class="d-flex align-items-start mb-3">
                    <div class="d-flex justify-content-center align-items-center rounded" style="min-width: 45px; height: 45px; background-color: #0e3e26; color: #FFB30E; font-weight: 800; font-size: 1.25rem;">
                      4
                    </div>
                    <h5 class="card-title fw-bold ms-3 mb-0" style="color: #212529; flex: 1; line-height: 1.4;">RED SAUCE PASTA + GARLIC BREAD</h5>
                  </div>
                  <div class="d-flex justify-content-between align-items-end mt-4 pt-2" style="border-top: 1px dashed #e9ecef;">
                    <span class="text-muted fw-bold" style="font-size: 0.9rem; letter-spacing: 1px;">PRICE</span>
                    <span class="fw-bolder fs-2" style="color: #d13030;">₹149</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; background: #ffffff; border-left: 6px solid #0e3e26 !important; transition: transform 0.2s;">
                <div class="card-body position-relative p-4">
                  
                  <div class="d-flex align-items-start mb-3">
                    <div class="d-flex justify-content-center align-items-center rounded" style="min-width: 45px; height: 45px; background-color: #0e3e26; color: #FFB30E; font-weight: 800; font-size: 1.25rem;">
                      5
                    </div>
                    <h5 class="card-title fw-bold ms-3 mb-0" style="color: #212529; flex: 1; line-height: 1.4;">CHEESE SANDWICH + FRENCH FRIES + SOFT DRINK</h5>
                  </div>
                  <div class="d-flex justify-content-between align-items-end mt-4 pt-2" style="border-top: 1px dashed #e9ecef;">
                    <span class="text-muted fw-bold" style="font-size: 0.9rem; letter-spacing: 1px;">PRICE</span>
                    <span class="fw-bolder fs-2" style="color: #d13030;">₹139</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; background: #ffffff; border-left: 6px solid #0e3e26 !important; transition: transform 0.2s;">
                <div class="card-body position-relative p-4">
                  
                  <div class="d-flex align-items-start mb-3">
                    <div class="d-flex justify-content-center align-items-center rounded" style="min-width: 45px; height: 45px; background-color: #0e3e26; color: #FFB30E; font-weight: 800; font-size: 1.25rem;">
                      6
                    </div>
                    <h5 class="card-title fw-bold ms-3 mb-0" style="color: #212529; flex: 1; line-height: 1.4;">VEG BURGER + FRENCH FRIES + SOFT DRINK</h5>
                  </div>
                  <div class="d-flex justify-content-between align-items-end mt-4 pt-2" style="border-top: 1px dashed #e9ecef;">
                    <span class="text-muted fw-bold" style="font-size: 0.9rem; letter-spacing: 1px;">PRICE</span>
                    <span class="fw-bolder fs-2" style="color: #d13030;">₹149</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="py-5" style="background-color: #f9f9f9;">
        <div class="container-fluid px-0">
          <div class="row mb-5">
            <div class="col-12 text-center">
              <h2 class="fw-bolder" style="color: #0e3e26; font-size: 2.5rem; text-transform: uppercase; letter-spacing: 2px;">Non-Veg Combos</h2>
              <hr style="width: 100px; height: 5px; background-color: #FFB30E; margin: 15px auto 0; opacity: 1; border: none; border-radius: 5px;">
            </div>
          </div>
          <div class="row g-4 px-3 px-md-5">
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; background: #ffffff; border-left: 6px solid #0e3e26 !important; transition: transform 0.2s;">
                <div class="card-body position-relative p-4">
                  
                  <div class="d-flex align-items-start mb-3">
                    <div class="d-flex justify-content-center align-items-center rounded" style="min-width: 45px; height: 45px; background-color: #0e3e26; color: #FFB30E; font-weight: 800; font-size: 1.25rem;">
                      1
                    </div>
                    <h5 class="card-title fw-bold ms-3 mb-0" style="color: #212529; flex: 1; line-height: 1.4;">CHICKEN CURRY + JEERA RICE</h5>
                  </div>
                  <div class="d-flex justify-content-between align-items-end mt-4 pt-2" style="border-top: 1px dashed #e9ecef;">
                    <span class="text-muted fw-bold" style="font-size: 0.9rem; letter-spacing: 1px;">PRICE</span>
                    <span class="fw-bolder fs-2" style="color: #d13030;">₹179</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; background: #ffffff; border-left: 6px solid #0e3e26 !important; transition: transform 0.2s;">
                <div class="card-body position-relative p-4">
                  
                  <div class="d-flex align-items-start mb-3">
                    <div class="d-flex justify-content-center align-items-center rounded" style="min-width: 45px; height: 45px; background-color: #0e3e26; color: #FFB30E; font-weight: 800; font-size: 1.25rem;">
                      2
                    </div>
                    <h5 class="card-title fw-bold ms-3 mb-0" style="color: #212529; flex: 1; line-height: 1.4;">BUTTER CHICKEN + 2 BUTTER NAAN</h5>
                  </div>
                  <div class="d-flex justify-content-between align-items-end mt-4 pt-2" style="border-top: 1px dashed #e9ecef;">
                    <span class="text-muted fw-bold" style="font-size: 0.9rem; letter-spacing: 1px;">PRICE</span>
                    <span class="fw-bolder fs-2" style="color: #d13030;">₹249</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; background: #ffffff; border-left: 6px solid #0e3e26 !important; transition: transform 0.2s;">
                <div class="card-body position-relative p-4">
                  
                  <div class="d-flex align-items-start mb-3">
                    <div class="d-flex justify-content-center align-items-center rounded" style="min-width: 45px; height: 45px; background-color: #0e3e26; color: #FFB30E; font-weight: 800; font-size: 1.25rem;">
                      3
                    </div>
                    <h5 class="card-title fw-bold ms-3 mb-0" style="color: #212529; flex: 1; line-height: 1.4;">KADHAI CHICKEN + 2 LACCHA PARATHA</h5>
                  </div>
                  <div class="d-flex justify-content-between align-items-end mt-4 pt-2" style="border-top: 1px dashed #e9ecef;">
                    <span class="text-muted fw-bold" style="font-size: 0.9rem; letter-spacing: 1px;">PRICE</span>
                    <span class="fw-bolder fs-2" style="color: #d13030;">₹229</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; background: #ffffff; border-left: 6px solid #0e3e26 !important; transition: transform 0.2s;">
                <div class="card-body position-relative p-4">
                  
                  <div class="d-flex align-items-start mb-3">
                    <div class="d-flex justify-content-center align-items-center rounded" style="min-width: 45px; height: 45px; background-color: #0e3e26; color: #FFB30E; font-weight: 800; font-size: 1.25rem;">
                      4
                    </div>
                    <h5 class="card-title fw-bold ms-3 mb-0" style="color: #212529; flex: 1; line-height: 1.4;">CHICKEN BIRYANI + RAITA + SOFT DRINK</h5>
                  </div>
                  <div class="d-flex justify-content-between align-items-end mt-4 pt-2" style="border-top: 1px dashed #e9ecef;">
                    <span class="text-muted fw-bold" style="font-size: 0.9rem; letter-spacing: 1px;">PRICE</span>
                    <span class="fw-bolder fs-2" style="color: #d13030;">₹219</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; background: #ffffff; border-left: 6px solid #0e3e26 !important; transition: transform 0.2s;">
                <div class="card-body position-relative p-4">
                  <span class="badge bg-warning text-dark position-absolute top-0 end-0 mt-3 me-3 px-2 py-1 fs-0 shadow-sm">BEST SELLER</span>
                  <div class="d-flex align-items-start mb-3">
                    <div class="d-flex justify-content-center align-items-center rounded" style="min-width: 45px; height: 45px; background-color: #0e3e26; color: #FFB30E; font-weight: 800; font-size: 1.25rem;">
                      5
                    </div>
                    <h5 class="card-title fw-bold ms-3 mb-0" style="color: #212529; flex: 1; line-height: 1.4;">MUTTON DUM BIRYANI + RAITA + SOFT DRINK</h5>
                  </div>
                  <div class="d-flex justify-content-between align-items-end mt-4 pt-2" style="border-top: 1px dashed #e9ecef;">
                    <span class="text-muted fw-bold" style="font-size: 0.9rem; letter-spacing: 1px;">PRICE</span>
                    <span class="fw-bolder fs-2" style="color: #d13030;">₹349</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; background: #ffffff; border-left: 6px solid #0e3e26 !important; transition: transform 0.2s;">
                <div class="card-body position-relative p-4">
                  <span class="badge bg-danger position-absolute top-0 end-0 mt-3 me-3 px-2 py-1 fs-0 shadow-sm">NEW</span>
                  <div class="d-flex align-items-start mb-3">
                    <div class="d-flex justify-content-center align-items-center rounded" style="min-width: 45px; height: 45px; background-color: #0e3e26; color: #FFB30E; font-weight: 800; font-size: 1.25rem;">
                      6
                    </div>
                    <h5 class="card-title fw-bold ms-3 mb-0" style="color: #212529; flex: 1; line-height: 1.4;">CHICKEN FRIED RICE + CHILLI CHICKEN</h5>
                  </div>
                  <div class="d-flex justify-content-between align-items-end mt-4 pt-2" style="border-top: 1px dashed #e9ecef;">
                    <span class="text-muted fw-bold" style="font-size: 0.9rem; letter-spacing: 1px;">PRICE</span>
                    <span class="fw-bolder fs-2" style="color: #d13030;">₹229</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; background: #ffffff; border-left: 6px solid #0e3e26 !important; transition: transform 0.2s;">
                <div class="card-body position-relative p-4">
                  
                  <div class="d-flex align-items-start mb-3">
                    <div class="d-flex justify-content-center align-items-center rounded" style="min-width: 45px; height: 45px; background-color: #0e3e26; color: #FFB30E; font-weight: 800; font-size: 1.25rem;">
                      7
                    </div>
                    <h5 class="card-title fw-bold ms-3 mb-0" style="color: #212529; flex: 1; line-height: 1.4;">CHICKEN HAKKA NOODLES + CHILLI CHICKEN</h5>
                  </div>
                  <div class="d-flex justify-content-between align-items-end mt-4 pt-2" style="border-top: 1px dashed #e9ecef;">
                    <span class="text-muted fw-bold" style="font-size: 0.9rem; letter-spacing: 1px;">PRICE</span>
                    <span class="fw-bolder fs-2" style="color: #d13030;">₹229</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; background: #ffffff; border-left: 6px solid #0e3e26 !important; transition: transform 0.2s;">
                <div class="card-body position-relative p-4">
                  
                  <div class="d-flex align-items-start mb-3">
                    <div class="d-flex justify-content-center align-items-center rounded" style="min-width: 45px; height: 45px; background-color: #0e3e26; color: #FFB30E; font-weight: 800; font-size: 1.25rem;">
                      8
                    </div>
                    <h5 class="card-title fw-bold ms-3 mb-0" style="color: #212529; flex: 1; line-height: 1.4;">TANDOORI CHICKEN (HALF) + 2 BUTTER NAAN + MINT CHUTNEY</h5>
                  </div>
                  <div class="d-flex justify-content-between align-items-end mt-4 pt-2" style="border-top: 1px dashed #e9ecef;">
                    <span class="text-muted fw-bold" style="font-size: 0.9rem; letter-spacing: 1px;">PRICE</span>
                    <span class="fw-bolder fs-2" style="color: #d13030;">₹299</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; background: #ffffff; border-left: 6px solid #0e3e26 !important; transition: transform 0.2s;">
                <div class="card-body position-relative p-4">
                  
                  <div class="d-flex align-items-start mb-3">
                    <div class="d-flex justify-content-center align-items-center rounded" style="min-width: 45px; height: 45px; background-color: #0e3e26; color: #FFB30E; font-weight: 800; font-size: 1.25rem;">
                      9
                    </div>
                    <h5 class="card-title fw-bold ms-3 mb-0" style="color: #212529; flex: 1; line-height: 1.4;">CHICKEN TIKKA (6 PC) + SOFT DRINK</h5>
                  </div>
                  <div class="d-flex justify-content-between align-items-end mt-4 pt-2" style="border-top: 1px dashed #e9ecef;">
                    <span class="text-muted fw-bold" style="font-size: 0.9rem; letter-spacing: 1px;">PRICE</span>
                    <span class="fw-bolder fs-2" style="color: #d13030;">₹249</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; background: #ffffff; border-left: 6px solid #0e3e26 !important; transition: transform 0.2s;">
                <div class="card-body position-relative p-4">
                  
                  <div class="d-flex align-items-start mb-3">
                    <div class="d-flex justify-content-center align-items-center rounded" style="min-width: 45px; height: 45px; background-color: #0e3e26; color: #FFB30E; font-weight: 800; font-size: 1.25rem;">
                      10
                    </div>
                    <h5 class="card-title fw-bold ms-3 mb-0" style="color: #212529; flex: 1; line-height: 1.4;">CHICKEN ROLL + FRENCH FRIES + SOFT DRINK</h5>
                  </div>
                  <div class="d-flex justify-content-between align-items-end mt-4 pt-2" style="border-top: 1px dashed #e9ecef;">
                    <span class="text-muted fw-bold" style="font-size: 0.9rem; letter-spacing: 1px;">PRICE</span>
                    <span class="fw-bolder fs-2" style="color: #d13030;">₹199</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection

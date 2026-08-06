import re

carousel_blade = '''
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
'''

carousel_html = carousel_blade.replace("{{ asset('assets/img/gallery/Artboard 1.png') }}", "assets/img/gallery/Artboard 1.png")
carousel_html = carousel_html.replace("{{ asset('assets/img/gallery/Artboard 2.png') }}", "assets/img/gallery/Artboard 2.png")

# Replace in index.blade.php
with open('resources/views/index.blade.php', 'r', encoding='utf-8') as f:
    blade_content = f.read()

# Find the section to replace: from <!-- ============================================-->\n      <!-- <section> begin ============================-->
# to <!-- <section> close ============================-->\n      <!-- ============================================-->
start_tag = '      <!-- ============================================-->\n      <!-- <section> begin ============================-->'
end_tag = '      <!-- <section> close ============================-->\n      <!-- ============================================-->'

start_idx = blade_content.find(start_tag)
end_idx = blade_content.find(end_tag, start_idx) + len(end_tag)

if start_idx != -1 and end_idx != -1:
    new_blade = blade_content[:start_idx] + carousel_blade + blade_content[end_idx:]
    with open('resources/views/index.blade.php', 'w', encoding='utf-8') as f:
        f.write(new_blade)
    print("Replaced in blade.")
else:
    print("Could not find bounds in blade.")

# Replace in index.html
with open('public/index.html', 'r', encoding='utf-8') as f:
    html_content = f.read()

# Since user commented out some tags in HTML, we might need a regex
import re
pattern = re.compile(r'      <!-- ============================================-->\n\s*<!-- <section> begin ============================-->.*?<!-- <section> close ============================-->\n\s*<!-- ============================================-->', re.DOTALL)

if pattern.search(html_content):
    new_html = pattern.sub(carousel_html, html_content)
    with open('public/index.html', 'w', encoding='utf-8') as f:
        f.write(new_html)
    print("Replaced in HTML.")
else:
    print("Could not find bounds in HTML.")

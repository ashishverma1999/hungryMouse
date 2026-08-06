import os

form_html = '''
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
'''

# Update Blade
blade_path = 'resources/views/franchise.blade.php'
with open(blade_path, 'r', encoding='utf-8') as f:
    blade_content = f.read()

injection_point = blade_content.find('@endsection')
if injection_point != -1:
    new_blade = blade_content[:injection_point] + form_html + '\n' + blade_content[injection_point:]
    with open(blade_path, 'w', encoding='utf-8') as f:
        f.write(new_blade)
    print("Added to Blade!")

# Update HTML
html_path = 'public/franchise.html'
if os.path.exists(html_path):
    with open(html_path, 'r', encoding='utf-8') as f:
        html_content = f.read()
    
    injection_point2 = html_content.find('<!-- <section> begin ============================-->')
    if injection_point2 != -1:
        new_html = html_content[:injection_point2] + form_html + '\n' + html_content[injection_point2:]
        with open(html_path, 'w', encoding='utf-8') as f:
            f.write(new_html)
        print("Added to HTML!")

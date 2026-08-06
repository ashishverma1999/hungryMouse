import os

about_html = '''
      <section class="py-6" style="background-color: #ffffff;">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
              <h2 class="fw-bolder mb-4" style="color: #0e3e26;">Our Story</h2>
              <p class="lead mb-4" style="color: #4a4a4a; line-height: 1.8;">
                Welcome to <strong>Hungry Mouse</strong>, Lucknow's premier cloud kitchen. We started with a simple vision: to serve incredibly delicious, high-quality food right to your doorstep without compromising on taste, speed, or hygiene.
              </p>
              <p class="lead mb-5" style="color: #4a4a4a; line-height: 1.8;">
                Whether you're craving Indian delicacies, spicy Chinese combos, sizzling Tandoor items, or Continental fast food, our expert chefs prepare every meal using the freshest ingredients. Our "Cart and Carry" model ensures that whenever hunger strikes, the Hungry Mouse is ready to deliver a feast!
              </p>
              <div class="d-flex justify-content-center flex-wrap gap-5 mt-5">
                <div class="text-center">
                  <div class="mb-3 d-flex justify-content-center align-items-center rounded-circle shadow-sm" style="width: 80px; height: 80px; background-color: #0e3e26; color: #FFB30E; margin: 0 auto;">
                    <i class="fas fa-utensils fa-2x"></i>
                  </div>
                  <h5 class="fw-bold" style="color: #0e3e26;">Fresh Ingredients</h5>
                </div>
                <div class="text-center">
                  <div class="mb-3 d-flex justify-content-center align-items-center rounded-circle shadow-sm" style="width: 80px; height: 80px; background-color: #0e3e26; color: #FFB30E; margin: 0 auto;">
                    <i class="fas fa-shipping-fast fa-2x"></i>
                  </div>
                  <h5 class="fw-bold" style="color: #0e3e26;">Fast Delivery</h5>
                </div>
                <div class="text-center">
                  <div class="mb-3 d-flex justify-content-center align-items-center rounded-circle shadow-sm" style="width: 80px; height: 80px; background-color: #0e3e26; color: #FFB30E; margin: 0 auto;">
                    <i class="fas fa-smile fa-2x"></i>
                  </div>
                  <h5 class="fw-bold" style="color: #0e3e26;">Happy Customers</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
'''

files_to_update = [
    'resources/views/about.blade.php',
    'resources/views/about-hungry-mouse.blade.php',
    'public/about.html',
    'public/about-hungry-mouse.html'
]

for file_path in files_to_update:
    if os.path.exists(file_path):
        with open(file_path, 'r', encoding='utf-8') as f:
            content = f.read()
            
        if 'about.blade.php' in file_path or 'about-hungry-mouse.blade.php' in file_path:
            injection_point = content.find('@endsection')
        else:
            injection_point = content.find('<!-- <section> begin ============================-->')
            
        if injection_point != -1 and 'Our Story' not in content:
            new_content = content[:injection_point] + about_html + '\n' + content[injection_point:]
            with open(file_path, 'w', encoding='utf-8') as f:
                f.write(new_content)
            print(f"Updated {file_path}")

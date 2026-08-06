import os

menu_data = [
    {
        "category": "Indian Combos",
        "items": [
            ("DAL MAKHNI WITH JEERA RICE", 149),
            ("DAL TADKA WITH STEAM RICE", 99),
            ("KADHAI PANEER + LACCHA PARATHA 2PC", 129),
            ("PANEER BUTTER MASALA + STEAM RICE", 149),
            ("MIX VEG + 2 BUTTER NAAN", 149),
            ("ALOO JEERA + POORI (4PC)", 99),
            ("CHOLE BHATURE (2PC)", 119),
            ("RAJMA CHAWAL", 129),
            ("PANEER TIKKA MASALA + JEERA RICE", 159),
            ("VEG BIRYANI + RAITA", 149),
        ]
    },
    {
        "category": "Chinese Combos",
        "items": [
            ("VEG HAKKA NOODLES + CHILLI PANEER", 149),
            ("VEG FRIED RICE + MANCHURIAN", 149),
            ("SCHEZWAN FRIED RICE + CHILLI PANEER", 159),
            ("HAKKA NOODLES + MANCHURIAN", 149),
            ("SINGAPORE NOODLES + CHILLI PANEER", 159),
            ("FRIED RICE + CHILLI GARLIC POTATO", 129),
        ]
    },
    {
        "category": "Tandoor Combos",
        "items": [
            ("PANEER TIKKA (6 PC) + MINT CHUTNEY", 199),
            ("MALAI PANEER TIKKA (6 PC) + MINT CHUTNEY", 219),
            ("VEG SEEKH KEBAB (2 PC) + MINT CHUTNEY", 159),
            ("TANDOORI ALOO (6 PC) + MINT CHUTNEY", 129),
            ("TANDOORI PLATTER (PANEER TIKKA 4 PC + SEEKH KEBAB 2 PC)", 249),
        ]
    },
    {
        "category": "Continental Combos",
        "items": [
            ("PANEER TIKKA PIZZA + SOFT DRINK", 149),
            ("VEGGIE PIZZA + SOFT DRINK", 129),
            ("WHITE SAUCE PASTA + GARLIC BREAD", 149),
            ("RED SAUCE PASTA + GARLIC BREAD", 149),
            ("CHEESE SANDWICH + FRENCH FRIES + SOFT DRINK", 139),
            ("VEG BURGER + FRENCH FRIES + SOFT DRINK", 149),
        ]
    },
    {
        "category": "Non-Veg Combos",
        "items": [
            ("CHICKEN CURRY + JEERA RICE", 179),
            ("BUTTER CHICKEN + 2 BUTTER NAAN", 249),
            ("KADHAI CHICKEN + 2 LACCHA PARATHA", 229),
            ("CHICKEN BIRYANI + RAITA + SOFT DRINK", 219),
            ("MUTTON DUM BIRYANI + RAITA + SOFT DRINK", 349, "BEST SELLER"),
            ("CHICKEN FRIED RICE + CHILLI CHICKEN", 229, "NEW"),
            ("CHICKEN HAKKA NOODLES + CHILLI CHICKEN", 229),
            ("TANDOORI CHICKEN (HALF) + 2 BUTTER NAAN + MINT CHUTNEY", 299),
            ("CHICKEN TIKKA (6 PC) + SOFT DRINK", 249),
            ("CHICKEN ROLL + FRENCH FRIES + SOFT DRINK", 199),
        ]
    }
]

html = ""
for category in menu_data:
    cat_name = category['category']
    html += f'''
      <section class="py-5" style="background-color: #f9f9f9;">
        <div class="container-fluid px-0">
          <div class="row mb-5">
            <div class="col-12 text-center">
              <h2 class="fw-bolder" style="color: #0e3e26; font-size: 2.5rem; text-transform: uppercase; letter-spacing: 2px;">{cat_name}</h2>
              <hr style="width: 100px; height: 5px; background-color: #FFB30E; margin: 15px auto 0; opacity: 1; border: none; border-radius: 5px;">
            </div>
          </div>
          <div class="row g-4 px-3 px-md-5">'''
    
    for idx, item in enumerate(category['items']):
        name = item[0]
        price = item[1]
        badge = ""
        if len(item) == 3:
            badge_text = item[2]
            badge_color = "bg-danger" if badge_text == "NEW" else "bg-warning text-dark"
            badge = f'<span class="badge {badge_color} position-absolute top-0 end-0 mt-3 me-3 px-2 py-1 fs-0 shadow-sm">{badge_text}</span>'
            
        html += f'''
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; background: #ffffff; border-left: 6px solid #0e3e26 !important; transition: transform 0.2s;">
                <div class="card-body position-relative p-4">
                  {badge}
                  <div class="d-flex align-items-start mb-3">
                    <div class="d-flex justify-content-center align-items-center rounded" style="min-width: 45px; height: 45px; background-color: #0e3e26; color: #FFB30E; font-weight: 800; font-size: 1.25rem;">
                      {idx + 1}
                    </div>
                    <h5 class="card-title fw-bold ms-3 mb-0" style="color: #212529; flex: 1; line-height: 1.4;">{name}</h5>
                  </div>
                  <div class="d-flex justify-content-between align-items-end mt-4 pt-2" style="border-top: 1px dashed #e9ecef;">
                    <span class="text-muted fw-bold" style="font-size: 0.9rem; letter-spacing: 1px;">PRICE</span>
                    <span class="fw-bolder fs-2" style="color: #d13030;">₹{price}</span>
                  </div>
                </div>
              </div>
            </div>'''
            
    html += '''
          </div>
        </div>
      </section>'''

# Inject into menu.blade.php
with open('resources/views/menu.blade.php', 'r', encoding='utf-8') as f:
    file_content = f.read()

injection_point = file_content.find('@endsection')
new_content = file_content[:injection_point] + html + '\n' + file_content[injection_point:]

with open('resources/views/menu.blade.php', 'w', encoding='utf-8') as f:
    f.write(new_content)

print("Menu generated successfully!")

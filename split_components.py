import os
import re

os.makedirs('resources/views/components', exist_ok=True)

# Process app.blade.php
with open('resources/views/layouts/app.blade.php', 'r', encoding='utf-8') as f:
    app_html = f.read()

# Extract Navbar
nav_start = app_html.find('<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top"')
nav_end = app_html.find('</nav>') + 6
navbar = app_html[nav_start:nav_end]

# Extract Footer
footer_start = app_html.find('<section class="py-0 pt-7 bg-1000">')
footer_end = app_html.find('</main>') # The main tag closes right before scripts
# actually let's find the closing section tag for footer
# it should be the last </section> before </main>
footer_end = app_html.rfind('</section>', footer_start, app_html.find('</main>')) + 10
footer = app_html[footer_start:footer_end]

# Write components
with open('resources/views/components/navbar.blade.php', 'w', encoding='utf-8') as f:
    f.write(navbar)
with open('resources/views/components/footer.blade.php', 'w', encoding='utf-8') as f:
    f.write(footer)

# Replace in app.blade.php
new_app = app_html[:nav_start] + '<x-navbar />' + app_html[nav_end:footer_start] + '<x-footer />\n' + app_html[footer_end:]
with open('resources/views/layouts/app.blade.php', 'w', encoding='utf-8') as f:
    f.write(new_app)

# Process index.blade.php
with open('resources/views/index.blade.php', 'r', encoding='utf-8') as f:
    index_html = f.read()

# Extract Hero Header
hero_start = index_html.find('<section class="py-5 overflow-hidden bg-light" id="home">')
hero_end = index_html.find('</section>', hero_start) + 10
hero = index_html[hero_start:hero_end]

# Extract Popular Items
pop_start = index_html.find('<section class="py-4 overflow-hidden">')
pop_end = index_html.find('</section>', pop_start) + 10
pop = index_html[pop_start:pop_end]

# Extract Featured Restaurants
feat_start = index_html.find('<section class="py-5">')
feat_end = index_html.find('</section>', feat_start) + 10
feat = index_html[feat_start:feat_end]

# Write components
with open('resources/views/components/hero-header.blade.php', 'w', encoding='utf-8') as f:
    f.write(hero)
with open('resources/views/components/popular-items.blade.php', 'w', encoding='utf-8') as f:
    f.write(pop)
with open('resources/views/components/featured-restaurants.blade.php', 'w', encoding='utf-8') as f:
    f.write(feat)

# Replace in index.blade.php
new_index = """@extends('layouts.app')

@section('content')
  <x-hero-header />
  <x-popular-items />
  <x-featured-restaurants />
@endsection
"""
with open('resources/views/index.blade.php', 'w', encoding='utf-8') as f:
    f.write(new_index)

print("Components split successfully!")

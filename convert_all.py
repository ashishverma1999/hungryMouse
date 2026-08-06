nimport os
import re

html_files = ['index.html', 'about.html', 'menu.html', 'about-hungry-mouse.html', 'franchise.html']

os.makedirs('resources/views/layouts', exist_ok=True)
os.makedirs('resources/views/components', exist_ok=True)

def replace_assets(text):
    text = re.sub(r'href="(assets/[^"]+)"', r'href="{{ asset(\'\1\') }}"', text)
    text = re.sub(r'src="(assets/[^"]+)"', r'src="{{ asset(\'\1\') }}"', text)
    text = re.sub(r'href="(vendors/[^"]+)"', r'href="{{ asset(\'\1\') }}"', text)
    text = re.sub(r'src="(vendors/[^"]+)"', r'src="{{ asset(\'\1\') }}"', text)
    return text

with open('public/index.html', 'r', encoding='utf-8') as f:
    app_html = f.read()

nav_start = app_html.find('<nav')
nav_end = app_html.find('</nav>') + 6

footer_start = app_html.find('<section class="py-0 pt-7 bg-1000">')
footer_end = app_html.find('</main>')

navbar = replace_assets(app_html[nav_start:nav_end])
footer = replace_assets(app_html[footer_start:footer_end])
header = replace_assets(app_html[:nav_start])
scripts = replace_assets(app_html[footer_end:])

with open('resources/views/components/navbar.blade.php', 'w', encoding='utf-8') as f:
    f.write(navbar)
with open('resources/views/components/footer.blade.php', 'w', encoding='utf-8') as f:
    f.write(footer)

layout_blade = header + "\n<x-navbar />\n    @yield('content')\n<x-footer />\n" + scripts

with open('resources/views/layouts/app.blade.php', 'w', encoding='utf-8') as f:
    f.write(layout_blade)

for file in html_files:
    file_path = os.path.join('public', file)
    if not os.path.exists(file_path):
        continue
    with open(file_path, 'r', encoding='utf-8') as f:
        html = f.read()
    
    n_end = html.find('</nav>') + 6
    f_start = html.find('<section class="py-0 pt-7 bg-1000">')
    
    content = replace_assets(html[n_end:f_start])
    
    blade_name = file.replace('.html', '.blade.php')
    blade_content = "@extends('layouts.app')\n\n@section('content')\n" + content + "\n@endsection\n"
    
    with open(f'resources/views/{blade_name}', 'w', encoding='utf-8') as f:
        f.write(blade_content)

print("Conversion complete!")

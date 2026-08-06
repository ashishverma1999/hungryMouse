import os
import re

# Read the HTML file
with open('public/index.html', 'r', encoding='utf-8') as f:
    html = f.read()

# Create directories
os.makedirs('resources/views/layouts', exist_ok=True)

# Find boundaries
nav_end = html.find('</nav>') + 6
footer_start = html.find('<section class="py-0 pt-7 bg-1000">')

header = html[:nav_end]
content = html[nav_end:footer_start]
footer = html[footer_start:]

# Function to replace assets
def replace_assets(text):
    text = re.sub(r'href="(assets/[^"]+)"', r'href="{{ asset(\'\1\') }}"', text)
    text = re.sub(r'src="(assets/[^"]+)"', r'src="{{ asset(\'\1\') }}"', text)
    text = re.sub(r'href="(vendors/[^"]+)"', r'href="{{ asset(\'\1\') }}"', text)
    text = re.sub(r'src="(vendors/[^"]+)"', r'src="{{ asset(\'\1\') }}"', text)
    return text

# Layout file
layout_blade = replace_assets(header) + "\n    @yield('content')\n" + replace_assets(footer)

# Index file
index_blade = "@extends('layouts.app')\n\n@section('content')\n" + replace_assets(content) + "\n@endsection\n"

# Write Layout
with open('resources/views/layouts/app.blade.php', 'w', encoding='utf-8') as f:
    f.write(layout_blade)

# Write Index
with open('resources/views/index.blade.php', 'w', encoding='utf-8') as f:
    f.write(index_blade)

print("Blade files created successfully!")

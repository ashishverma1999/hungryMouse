import os

for dp, dn, files in os.walk('resources/views'):
    for f in files:
        if f.endswith('.blade.php'):
            path = os.path.join(dp, f)
            with open(path, 'r') as file:
                content = file.read()
            
            # Replace container with container-fluid px-0
            content = content.replace('class="container"', 'class="container-fluid px-0"')
            
            with open(path, 'w') as file:
                file.write(content)

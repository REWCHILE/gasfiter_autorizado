import os
import glob
import re

php_files = glob.glob('*.php') + glob.glob('includes/*.php')

replacements = [
    ('assets/images/hero-home-main.png', 'assets/images/hero-home-main.webp'),
    ('assets/images/hero-fuga-gas.png', 'assets/images/hero-fuga-gas.webp'),
    ('assets/images/hero-prodoral.png', 'assets/images/hero-prodoral.webp'),
    ('assets/images/hero-calefont.png', 'assets/images/hero-calefont.webp'),
    ('assets/images/hero-destapes.png', 'assets/images/hero-destapes.webp'),
    ('assets/images/hero-sec.png', 'assets/images/hero-sec.webp'),
    ('assets/images/hero-gasfiter.png', 'assets/images/hero-gasfiter.webp'),
    ('assets/images/fuga-gas.png', 'assets/images/fuga-gas.webp'),
    ('assets/images/prodoral.png', 'assets/images/prodoral.webp'),
    ('assets/images/calefont.png', 'assets/images/calefont.webp'),
    ('assets/images/qr-sec.png', 'assets/images/qr-sec.webp'),
    ('assets/images/qr-sec-hd.png', 'assets/images/qr-sec-hd.webp'),
    ('assets/images/domingo-isain-portrait.jpg', 'assets/images/domingo-isain-portrait.webp'),
    ('assets/images/domingo-isain-caamano-gasfiter-sec.jpg', 'assets/images/domingo-isain-caamano-gasfiter-sec.webp'),
    ('assets/images/logo.jpg', 'assets/images/logo.webp')
]

for path in php_files:
    with open(path, 'r', encoding='utf-8') as f:
        content = f.read()
    
    orig = content
    for old_src, new_src in replacements:
        content = content.replace(old_src, new_src)
        
    if content != orig:
        with open(path, 'w', encoding='utf-8') as f:
            f.write(content)
        print(f"Updated images in {path}")

print("All PHP files now use modern WebP images!")

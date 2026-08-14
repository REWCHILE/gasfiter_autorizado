import glob
import re

php_files = glob.glob('*.php') + glob.glob('includes/*.php')

for path in php_files:
    with open(path, 'r', encoding='utf-8') as f:
        content = f.read()
    
    orig = content
    
    # 1. Update hero images to eager and high priority
    content = re.sub(r'(class="hero-main-img"[^>]*)(?<!loading="eager">)', r'\1 fetchpriority="high" loading="eager" decoding="async"', content)
    
    # 2. Update all other images to lazy and async
    def update_img(match):
        img_tag = match.group(0)
        if 'loading=' in img_tag:
            return img_tag
        if 'hero-main-img' in img_tag or 'brand-logo-img' in img_tag:
            return img_tag.replace('>', ' decoding="async">')
        return img_tag.replace('>', ' loading="lazy" decoding="async">')

    content = re.sub(r'<img\s+[^>]+>', update_img, content)
    
    if content != orig:
        with open(path, 'w', encoding='utf-8') as f:
            f.write(content)
        print(f"Optimized img tags in: {path}")

print("Image tags optimization completed!")

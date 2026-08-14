from PIL import Image
import os
import glob

img_dir = 'assets/images'
images = glob.glob(f'{img_dir}/*.*')

total_orig_size = 0
total_webp_size = 0

print("--- Optimizing and converting all images to WebP ---")

for path in images:
    filename = os.path.basename(path)
    ext = os.path.splitext(filename)[1].lower()
    
    if ext not in ['.png', '.jpg', '.jpeg']:
        continue
    
    # Skip favicons or small icons from WebP conversion (keep them as is or make webp alongside)
    if 'favicon' in filename or 'apple-touch' in filename or filename == 'favicon.ico':
        continue
    
    orig_size = os.path.getsize(path)
    total_orig_size += orig_size
    
    base_name = os.path.splitext(filename)[0]
    webp_path = os.path.join(img_dir, f"{base_name}.webp")
    
    with Image.open(path) as img:
        # Resize if overly large (> 1200px)
        w, h = img.size
        if w > 1200:
            new_w = 1200
            new_h = int(h * (1200 / w))
            img = img.resize((new_w, new_h), Image.Resampling.LANCZOS)
        
        # Save WebP with high efficiency
        if img.mode in ('RGBA', 'LA'):
            img.save(webp_path, 'WEBP', quality=82, method=6)
        else:
            img = img.convert('RGB')
            img.save(webp_path, 'WEBP', quality=82, method=6)
            
    webp_size = os.path.getsize(webp_path)
    total_webp_size += webp_size
    
    savings = (1 - (webp_size / orig_size)) * 100
    print(f"{filename} ({orig_size/1024:.1f} KB) -> {base_name}.webp ({webp_size/1024:.1f} KB) [-{savings:.1f}%]")

print(f"\nTOTAL ORIGINAL: {total_orig_size/1024/1024:.2f} MB")
print(f"TOTAL WEBP: {total_webp_size/1024/1024:.2f} MB")
print(f"TOTAL SAVINGS: {(1 - (total_webp_size/total_orig_size))*100:.1f}% reduction!")

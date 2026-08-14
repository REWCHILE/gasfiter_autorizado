from PIL import Image, ImageDraw, ImageFont
import os

# Create 1200 x 630 canvas
W, H = 1200, 630
img = Image.new('RGB', (W, H), color='#091a2c')
draw = ImageDraw.Draw(img)

# 1. Subtle gradient / background accents
for y in range(H):
    # Gradient from #091a2c to #0f2b48 to #1e1b4b
    ratio = y / H
    r = int(9 * (1 - ratio) + 15 * ratio)
    g = int(26 * (1 - ratio) + 43 * ratio)
    b = int(44 * (1 - ratio) + 72 * ratio)
    draw.line([(0, y), (W, y)], fill=(r, g, b))

# Ambient radial glows
glow_center = (900, 315)
for radius in range(350, 0, -5):
    alpha = int((1 - (radius / 350)) * 40)
    # Green glow
    draw.ellipse([glow_center[0]-radius, glow_center[1]-radius, glow_center[0]+radius, glow_center[1]+radius], outline=(16, 185, 129))

# Load Hero Image if available
hero_path = 'assets/images/hero-home-main.png'
if os.path.exists(hero_path):
    hero_img = Image.open(hero_path).convert('RGBA')
    # Resize keeping aspect ratio
    hero_img.thumbnail((560, 520), Image.Resampling.LANCZOS)
    hw, hh = hero_img.size
    
    # Create card backing for hero image
    card_x, card_y = 610, (H - hh) // 2
    # Shadow
    draw.rounded_rectangle([card_x - 10, card_y - 10, card_x + hw + 10, card_y + hh + 10], radius=20, fill='#071322', outline='#0284c7', width=2)
    img.paste(hero_img, (card_x, card_y), hero_img)

# Try loading fonts, fallback to default if not available
try:
    font_badge = ImageFont.truetype("arialbd.ttf", 22)
    font_title = ImageFont.truetype("arialbd.ttf", 46)
    font_subtitle = ImageFont.truetype("arial.ttf", 24)
    font_pill = ImageFont.truetype("arialbd.ttf", 20)
    font_phone = ImageFont.truetype("arialbd.ttf", 32)
    font_web = ImageFont.truetype("arialbd.ttf", 22)
except:
    font_badge = ImageFont.load_default()
    font_title = ImageFont.load_default()
    font_subtitle = ImageFont.load_default()
    font_pill = ImageFont.load_default()
    font_phone = ImageFont.load_default()
    font_web = ImageFont.load_default()

# Left Side Typography & Branding
# Top Badge
draw.rounded_rectangle([50, 50, 480, 92], radius=12, fill='#064e3b', outline='#10b981', width=2)
draw.text((70, 58), "✓ INSTALADOR AUTORIZADO SEC", font=font_badge, fill='#6ee7b7')

# Main Title (2 lines)
draw.text((50, 115), "GASFITER AUTORIZADO", font=font_title, fill='#ffffff')
draw.text((50, 170), "CERTIFICADO SEC 24/7", font=font_title, fill='#38bdf8')

# Subtitle / Services list
draw.text((50, 245), "• Detección Fugas de Gas con Gas Trazador", font=font_subtitle, fill='#e2e8f0')
draw.text((50, 285), "• Sellado Prodoral R6-1 para Fugas de Gas", font=font_subtitle, fill='#e2e8f0')
draw.text((50, 325), "• Calefont Multimarca & Sello Verde SEC", font=font_subtitle, fill='#e2e8f0')
draw.text((50, 365), "• Destapes con Hidrojet y Cámara CCTV", font=font_subtitle, fill='#e2e8f0')

# Phone Card Banner
draw.rounded_rectangle([50, 425, 560, 510], radius=16, fill='#dc2626', outline='#f87171', width=2)
draw.text((70, 445), "📞 Central: +56 9 3223 7072", font=font_phone, fill='#ffffff')

# Bottom details
draw.text((50, 535), "⚡ Respuesta en 30 a 40 min • Cobertura Santiago y Regiones", font=font_pill, fill='#94a3b8')
draw.text((50, 568), "🌐 www.gasfiter-autorizado.cl", font=font_web, fill='#38bdf8')

# Paste QR in bottom right corner of hero card
qr_path = 'assets/images/qr-sec.png'
if os.path.exists(qr_path):
    qr_img = Image.open(qr_path).convert('RGBA')
    qr_img = qr_img.resize((90, 90), Image.Resampling.LANCZOS)
    
    # White background for QR
    draw.rounded_rectangle([1080, 500, 1180, 600], radius=8, fill='#ffffff', outline='#10b981', width=2)
    img.paste(qr_img, (1085, 505), qr_img)

# Save as optimized JPEG (< 200KB)
output_path = 'assets/images/og-share-whatsapp.jpg'
img.save(output_path, 'JPEG', quality=88, optimize=True)

# Also save root og-image.jpg
img.save('og-image.jpg', 'JPEG', quality=88, optimize=True)

size_kb = os.path.getsize(output_path) / 1024
print(f"SUCCESS: Generated {output_path} ({size_kb:.1f} KB)")

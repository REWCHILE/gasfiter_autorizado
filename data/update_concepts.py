import os
import re

files_to_process = [
    'index.php',
    'servicios.php',
    'prodoral.php',
    'fuga-de-gas.php',
    'gasfiter-sec.php',
    'calefont.php',
    'destape-alcantarillado.php',
    'cobertura.php',
    'cotizar.php',
    'contacto.php',
    'includes/header.php',
    'includes/footer.php',
    'includes/seo-meta.php',
    'includes/cta-urgencia.php',
    'includes/reviews-section.php',
    'assets/js/main.js',
    'assets/js/calculator.js',
    'assets/css/main.css',
    'assets/css/responsive.css',
    'data/make_og_image.py'
]

replacements = [
    # 1. Prodoral R200 -> Prodoral R6-1
    ('Prodoral R200', 'Prodoral R6-1'),
    ('prodoral r200', 'prodoral r6-1'),
    ('PRODORAL R200', 'PRODORAL R6-1'),
    ('Sellado de Fugas con Prodoral', 'Sellado de Fugas con Prodoral R6-1'),
    
    # 2. Llegada en 30 a 45 min -> Respuesta en 30 a 40 min
    ('Llegada en 30 a 45 min', 'Respuesta en 30 a 40 min'),
    ('Llegada en 30 a 45 minutos', 'Respuesta en 30 a 40 minutos'),
    ('Llegada urgente en 30 a 45 min', 'Respuesta inmediata en 30 a 40 min'),
    ('Llegamos en 30 a 45 min', 'Respuesta en 30 a 40 min'),
    ('Llegada 30 a 45 min', 'Respuesta 30 a 40 min'),
    ('Llegada Prioritaria en 30 a 45 min', 'Respuesta Prioritaria en 30 a 40 min'),
    ('tiempo de llegada promedio es de 30 a 45 minutos', 'tiempo de respuesta promedio es de 30 a 40 minutos'),
    ('tiempo promedio de llegada es de 30 a 45 minutos', 'tiempo promedio de respuesta es de 30 a 40 minutos'),
    ('Atención inmediata en 30 a 45 minutos', 'Respuesta inmediata en 30 a 40 minutos'),
    ('arribo de urgencia en <strong>30 a 45 minutos</strong>', 'respuesta de urgencia en <strong>30 a 40 minutos</strong>'),
    ('se desplazará en 30 a 45 minutos', 'le responderá y coordinará en 30 a 40 minutos'),
    ('30 a 45 min', '30 a 40 min'),
    ('30 a 45 minutos', '30 a 40 minutos')
]

for file_path in files_to_process:
    if not os.path.exists(file_path):
        continue
    with open(file_path, 'r', encoding='utf-8') as f:
        content = f.read()
    
    original_content = content
    for old_str, new_str in replacements:
        content = content.replace(old_str, new_str)
    
    if content != original_content:
        with open(file_path, 'w', encoding='utf-8') as f:
            f.write(content)
        print(f"Updated: {file_path}")
    else:
        print(f"No changes in: {file_path}")

print("DONE replacing concepts!")

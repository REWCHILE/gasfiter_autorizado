<?php
/**
 * SEO Meta Tags & Schema.org JSON-LD Generator
 * Gasfiter Autorizado Certificado SEC - gasfiter-autorizado.cl
 */

// Default SEO values if not provided by the individual page
$site_name = "Gasfiter Autorizado SEC";
$site_phone = "+56 9 3223 7072";
$site_phone_raw = "56932237072";
$site_phone_display = "9 3223 7072";
$site_domain = "https://gasfiter-autorizado.cl";

$page_title = isset($page_title) ? $page_title : "Gasfiter Autorizado Certificado SEC | Fugas de Gas, Calefont y Destapes 24/7";
$page_description = isset($page_description) ? $page_description : "Central Gasfiter Autorizado Certificado SEC en Santiago y Regiones. Expertos en detección de fugas de gas, sellado con Prodoral sin picar, mantención de calefont, destape de alcantarillados y certificación SEC. Atención 24/7. Llame al 9 3223 7072.";
$canonical_url = isset($canonical_url) ? $canonical_url : $site_domain . $_SERVER['REQUEST_URI'];
$og_image = isset($og_image) ? $og_image : $site_domain . "/assets/images/og-share-whatsapp.jpg?v=2";
$page_type = isset($page_type) ? $page_type : "home";
?>

<!-- Primary Meta Tags -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
<title><?php echo htmlspecialchars($page_title); ?></title>
<meta name="title" content="<?php echo htmlspecialchars($page_title); ?>">
<meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
<meta name="keywords" content="gasfiter, gasfiter autorizado, gasfiter certificado, gasfiter sec, gasfiter profesional, fuga de gas, prodoral, sellado prodoral r6-1, central gasfiter, casa del gasfiter, gasfiter a domicilio, gasfiter emergencia, gasfiter 24 hrs, gasfiter calefont, reparacion calefont, maestro gasfiter, sec gasfiter certificado, gasfiter destapa cañerias, gasfiter fugas de agua, gasfiter filtraciones de agua, gasfiter destape alcantarillado, gasfiter santiago, gasfiter las condes, gasfiter providencia, gasfiter vitacura, gasfiter lo barnechea, gasfiter ñuñoa, gasfiter la reina, gasfiter la florida, gasfiter puente alto, gasfiter san bernardo, gasfiter san miguel, gasfiter quinta normal, gasfiter recoleta, gasfiter estacion central, gasfiter maipu, gasfiter chicureo, gasfiter huechuraba, gasfiter valparaiso, gasfiter viña del mar, gasfiter villa alemana">
<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
<meta name="language" content="Spanish">
<meta name="author" content="Gasfiter Autorizado Certificado SEC Chile - Instalgaschile ®">
<link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">

<!-- Open Graph / Facebook / WhatsApp (Meta Standard) -->
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo htmlspecialchars($canonical_url); ?>">
<meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
<meta property="og:image" content="<?php echo htmlspecialchars($og_image); ?>">
<meta property="og:image:secure_url" content="<?php echo htmlspecialchars($og_image); ?>">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="<?php echo htmlspecialchars($page_title); ?>">
<meta property="og:locale" content="es_CL">
<meta property="og:site_name" content="Gasfiter Autorizado Certificado SEC">

<!-- Schema / WhatsApp Direct Scraper Fallbacks -->
<meta itemprop="name" content="<?php echo htmlspecialchars($page_title); ?>">
<meta itemprop="description" content="<?php echo htmlspecialchars($page_description); ?>">
<meta itemprop="image" content="<?php echo htmlspecialchars($og_image); ?>">
<link rel="image_src" href="<?php echo htmlspecialchars($og_image); ?>">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="<?php echo htmlspecialchars($canonical_url); ?>">
<meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
<meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
<meta name="twitter:image" content="<?php echo htmlspecialchars($og_image); ?>">
<meta name="twitter:image:alt" content="<?php echo htmlspecialchars($page_title); ?>">

<!-- Geo Tags for Local SEO in Chile -->
<meta name="geo.region" content="CL-RM">
<meta name="geo.placename" content="Santiago, Chile">
<meta name="geo.position" content="-33.448890;-70.669265">
<meta name="ICBM" content="-33.448890, -70.669265">

<!-- Schema.org JSON-LD Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "PlumbingService",
      "@id": "<?php echo $site_domain; ?>/#organization",
      "name": "Gasfiter Autorizado Certificado SEC Chile",
      "alternateName": "Instalgaschile ® - Central Gasfiter Autorizado SEC",
      "url": "<?php echo $site_domain; ?>",
      "logo": "<?php echo $site_domain; ?>/assets/images/logo.webp",
      "image": "<?php echo $site_domain; ?>/assets/images/hero-gasfiter.webp",
      "telephone": "+56932237072",
      "priceRange": "$$",
      "currenciesAccepted": "CLP",
      "paymentAccepted": "Efectivo, Tarjeta de Débito, Tarjeta de Crédito, Transferencia Bancaria",
      "founder": {
        "@type": "Person",
        "name": "Domingo Isain",
        "jobTitle": "Director General e Instalador Autorizado SEC"
      },
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
          "opens": "00:00",
          "closes": "23:59"
        }
      ],
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Av Libertador Bernardo O’Higgins 1302",
        "addressLocality": "Santiago",
        "addressRegion": "Región Metropolitana",
        "postalCode": "8320000",
        "addressCountry": "CL"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": -33.448890,
        "longitude": -70.669265
      },
      "areaServed": [
        {"@type": "City", "name": "Santiago"},
        {"@type": "City", "name": "Las Condes"},
        {"@type": "City", "name": "Providencia"},
        {"@type": "City", "name": "Vitacura"},
        {"@type": "City", "name": "Lo Barnechea"},
        {"@type": "City", "name": "Ñuñoa"},
        {"@type": "City", "name": "La Reina"},
        {"@type": "City", "name": "La Florida"},
        {"@type": "City", "name": "Puente Alto"},
        {"@type": "City", "name": "San Bernardo"},
        {"@type": "City", "name": "San Miguel"},
        {"@type": "City", "name": "Quinta Normal"},
        {"@type": "City", "name": "Recoleta"},
        {"@type": "City", "name": "Estación Central"},
        {"@type": "City", "name": "Maipú"},
        {"@type": "City", "name": "Huechuraba"},
        {"@type": "City", "name": "Colina"},
        {"@type": "City", "name": "Chicureo"},
        {"@type": "City", "name": "Valparaíso"},
        {"@type": "City", "name": "Viña del Mar"},
        {"@type": "City", "name": "Villa Alemana"},
        {"@type": "City", "name": "Rancagua"}
      ],
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "1250",
        "bestRating": "5",
        "worstRating": "1"
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Servicios Profesionales de Gasfitería Autorizada SEC",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Detección y Reparación de Fugas de Gas con Gas Trazador",
              "description": "Inspección electrónica de fugas de gas, prueba de hermeticidad y reparación inmediata certificada SEC."
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Sellado de Fugas con Prodoral R6-1 R6-1",
              "description": "Sellado polimérico interno de matrices y tuberías de gas sin necesidad de romper muros ni baldosas."
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Certificación SEC y Sello Verde",
              "description": "Regularización de instalaciones de gas, tramitación TC6, inspección y normalización para sello verde."
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Mantención y Reparación de Calefont a Domicilio",
              "description": "Servicio técnico multimarca: Junkers, Rheem, Splendid, Neckar, Mademsa, calderas y termos."
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Destape de Alcantarillado y Desagües con Hidrojet",
              "description": "Limpieza profunda con agua a alta presión y video inspección con cámara CCTV robotizada."
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Detección de Fugas de Agua con Ultrasonido y Cámara Térmica",
              "description": "Geófono y termografía infrarroja para localización exacta de filtraciones ocultas sin romper."
            }
          }
        ]
      }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "<?php echo $site_domain; ?>/#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Inicio",
          "item": "<?php echo $site_domain; ?>/"
        }
        <?php if (isset($breadcrumb_title) && isset($breadcrumb_url)): ?>
        ,{
          "@type": "ListItem",
          "position": 2,
          "name": "<?php echo htmlspecialchars($breadcrumb_title); ?>",
          "item": "<?php echo htmlspecialchars($breadcrumb_url); ?>"
        }
        <?php endif; ?>
      ]
    }
  ]
}
</script>

<?php
/**
 * FAQ Schema Generator
 * Outputs JSON-LD FAQPage Schema for Rich Google Snippets
 */

if (!empty($faqs) && is_array($faqs)): ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    <?php 
    $faqCount = count($faqs);
    foreach ($faqs as $i => $faq): 
    ?>
    {
      "@type": "Question",
      "name": "<?php echo addslashes($faq['question']); ?>",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "<?php echo addslashes(strip_tags($faq['answer'])); ?>"
      }
    }<?php echo ($i < $faqCount - 1) ? ',' : ''; ?>
    <?php endforeach; ?>
  ]
}
</script>
<?php endif; ?>

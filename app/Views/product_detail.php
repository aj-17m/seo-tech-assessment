<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<script type="application/ld+json">
{
    "@context": "https://schema.org/",
    "@type": "Product",
    "name": "<?= $product['title'] ?>",
    "description": "<?= strip_tags($product['description']) ?>",
    "offers": {
        "@type": "Offer",
        "price": "<?= $product['price'] ?>",
        "priceCurrency": "USD"
    }
}
</script>

<div class="container mt-5">
    <!-- Product details here -->
</div>
<?= $this->endSection() ?>
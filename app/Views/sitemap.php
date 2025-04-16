<?= '<?xml version="1.0" encoding="UTF-8"?>' ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc><?= $baseURL ?></loc>
        <lastmod><?= date('c') ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    
    <?php foreach ($categories as $category): ?>
    <url>
        <loc><?= $baseURL ?>/products/<?= $category['slug'] ?></loc>
        <lastmod><?= date('c', strtotime($category['created_at'])) ?></lastmod>
        <changefreq>weekly</changefreq>
    </url>
    <?php endforeach; ?>
    
    <?php foreach ($products as $product): ?>
    <url>
        <loc><?= $baseURL ?>/product/<?= $product['slug'] ?></loc>
        <lastmod><?= date('c', strtotime($product['created_at'])) ?></lastmod>
        <changefreq>weekly</changefreq>
    </url>
    <?php endforeach; ?>
</urlset>
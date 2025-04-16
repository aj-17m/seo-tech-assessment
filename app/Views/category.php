<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="container">
    <h1><?= esc($category['name']) ?></h1>
    
    <div class="row">
        <?php foreach ($products as $product): ?>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?= esc($product['title']) ?></h5>
                    <p class="card-text">$<?= number_format($product['price'], 2) ?></p>
                    <a href="/product/<?= $product['slug'] ?>" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection() ?>

return view('category');
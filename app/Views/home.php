<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <h1>Product Categories</h1>
    <div class="row">
        <?php foreach ($categories as $category): ?>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?= $category['name'] ?></h5>
                    <a href="/products/<?= $category['slug'] ?>" class="btn btn-primary">View Products</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection() ?>
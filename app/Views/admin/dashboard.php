<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>
<div class="container">
    <h1 class="mb-4"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</h1>
    
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <div class="card text-white bg-primary h-100">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-boxes me-2"></i>Products</h5>
                    <p class="display-4"><?= $stats['products'] ?></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-white bg-success h-100">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-tags me-2"></i>Categories</h5>
                    <p class="display-4"><?= $stats['categories'] ?></p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="mt-5">
        <div class="d-grid gap-2 d-md-block">
            <a href="/admin/products" class="btn btn-lg btn-outline-dark me-2">
                <i class="fas fa-box me-2"></i>Manage Products
            </a>
            <a href="/admin/categories" class="btn btn-lg btn-outline-dark">
                <i class="fas fa-tag me-2"></i>Manage Categories
            </a>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
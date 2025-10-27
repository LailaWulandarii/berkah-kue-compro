<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>

<!-- Hero Section -->
<header class="hero-section text-white text-center">
    <div class="container">
        <h2 class="hero-title"><?= $lang == 'id' ? $meta['nama_halaman_id'] : $meta['nama_halaman_en']; ?></h2>
        <h1 class="hero-subtitle"><?= $lang == 'id' ? $meta['deskripsi_halaman_id'] : $meta['deskripsi_halaman_en']; ?></h1>
    </div>
</header>

<!-- Daftar Produk -->
<section id="product" class="container py-5">
    <div class="row g-4">
        <?php foreach ($product as $p): ?>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="produk-card shadow-sm h-100">
                    <img src="<?= base_url('assets/img/produk/' . $p['foto_produk']) ?>" 
                         class="produk-image img-fluid" 
                         alt="<?= $lang == 'id' ? $p['alt_produk_id'] : $p['alt_produk_en']; ?>">

                    <div class="produk-card-body d-flex flex-column">
                        <a href="<?= base_url($lang == 'id' ? 'id/produk/' . $p['slug_id'] : 'en/product/' . $p['slug_en']); ?>" 
                           class="produk-title">
                            <?= $lang == 'id' ? $p['nama_produk_id'] : $p['nama_produk_en']; ?>
                        </a>

                        <p class="produk-description">
                            <?= $lang == 'id' ? substr($p['deskripsi_produk_id'], 0, 150) : substr($p['deskripsi_produk_en'], 0, 150); ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

</main>

<?= $this->endSection(); ?>
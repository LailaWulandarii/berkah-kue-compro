<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>

<!-- Hero Section -->
<header class="hero-section text-white text-center">
    <div class="container">
        <h2 class="hero-title"><?= $lang == 'id' ? $meta['nama_halaman_id'] : $meta['nama_halaman_en']; ?></h2>
        <h1 class="hero-subtitle"><?= $lang == 'id' ? $meta['deskripsi_halaman_id'] : $meta['deskripsi_halaman_en']; ?></h1>
    </div>
</header>

<section id="aktivitas" class="container py-5">
    <div class="row">
        <?php foreach ($allAktivitas as $p) : ?>
            <div class="col-md-4 col-lg-4">
                <div class="activity-card">
                    <div class="activity-img-wrapper">
                        <img src="<?= base_url('assets/img/aktivitas/' . $p["foto_aktivitas"]) ?>" 
                            class="activity-img" 
                            alt="<?= $lang == 'id' ? $p['alt_aktivitas_id'] : $p['alt_aktivitas_en']; ?>">
                        <span class="activity-date"><?= date('d M Y', strtotime($p['updated_at'])); ?></span>
                    </div>
                    <div class="activity-card-body">
                        <p><span class="activity-category"><?= $lang == 'id' ? $p['nama_kategori'] : $p['nama_kategori']; ?></span></p>
                        <a href="<?= base_url(
                                        $lang === 'id'
                                            ? 'id/aktivitas/' . ($p['slug_kategori_id'] ?? 'kategori-tidak-ditemukan') . '/' . ($p['slug_aktivitas_id'] ?? 'aktivitas-tidak-ditemukan')
                                            : 'en/activity/' . ($p['slug_kategori_en'] ?? 'category-not-found') . '/' . ($p['slug_aktivitas_en'] ?? 'activity-not-found')
                                    ); ?>" class="card-title-link">
                            <h5 class="activity-card-title"><?= $lang == 'id' ? $p['judul_aktivitas_id'] : $p['judul_aktivitas_en']; ?></h5>
                            <p class="activity-card-text"><?= $lang == 'id' ? substr($p['deskripsi_aktivitas_id'], 0, 100) : substr($p['deskripsi_aktivitas_en'], 0, 100); ?>...</p>
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>


<?= $this->endSection(); ?>
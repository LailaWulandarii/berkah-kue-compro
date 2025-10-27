<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<!-- Hero Section -->
<header class="hero-section text-white text-center">
    <div class="container">
        <h2 class="hero-title"><?= $lang == 'id' ? $meta['nama_halaman_id'] : $meta['nama_halaman_en']; ?></h2>
        <p class="hero-subtitle"><?= $lang == 'id' ? $meta['deskripsi_halaman_id'] : $meta['deskripsi_halaman_en']; ?></p>
    </div>
</header>
<section id="activity-detail" class="container py-5">
    <div class="activity-container-card">
        
        <!-- Aktivitas Utama -->
        <div class="activity-detail-main">
            <div class="activity-card-large">
                <div class="image-wrapper">
                    <img src="<?= base_url('assets/img/aktivitas/' . $aktivitas['foto_aktivitas']); ?>" 
                         alt="<?= $lang == 'id' ? $aktivitas['alt_aktivitas_id'] : $aktivitas['alt_aktivitas_en']; ?>">
                    <span class="activity-date"><?= date('d M Y', strtotime($aktivitas['created_at'])); ?></span>
                </div>

                <div class="card-content">
                    <span class="activity-category"><?= $lang == 'id' ? $aktivitas['nama_kategori_id'] : $aktivitas['nama_kategori_en']; ?></span>
                    <h1 class="activity-title"><?= $lang == 'id' ? $aktivitas['judul_aktivitas_id'] : $aktivitas['judul_aktivitas_en']; ?></h1>
                    <p class="activity-content"><?= $lang == 'id' ? $aktivitas['deskripsi_aktivitas_id'] : $aktivitas['deskripsi_aktivitas_en']; ?></p>
                </div>
            </div>
        </div>

        <!-- Aktivitas Lainnya -->
        <div class="activity-card-wrapper">
            <h3 class="text-center"><?= $lang == 'id' ? 'Aktivitas Lainnya' : 'Related Activities'; ?></h3>
            <hr>
            <div class="activity-card-scrollable">
                <?php foreach ($allAktivitas as $activity): ?>
                    <div class="activity-card-item">
                        <div class="image-wrapper">
                            <img src="<?= base_url('assets/img/aktivitas/' . $activity['foto_aktivitas']); ?>" 
                                 alt="<?= $lang == 'id' ? $activity['alt_aktivitas_id'] : $activity['alt_aktivitas_en']; ?>">
                            <span class="activity-date"><?= date('d M Y', strtotime($activity['created_at'])); ?></span>
                        </div>
                        <div class="card-content">
                            <span class="activity-category"><?= $lang == 'id' ? $activity['nama_kategori_id'] : $activity['nama_kategori_en']; ?></span>
                            <h4 class="activity-title"><?= $lang == 'id' ? $activity['judul_aktivitas_id'] : $activity['judul_aktivitas_en']; ?></h4>
                            <p class="activity-description-small"><?= $lang == 'id' ? $aktivitas['deskripsi_aktivitas_id'] : $aktivitas['deskripsi_aktivitas_en']; ?></p>
                        </div>
                    </div>
                    <hr>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</section>

<?= $this->endSection(); ?>
<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>

<!-- Hero Section -->
<header class="hero-section text-white text-center">
    <div class="container">
        <h2 class="hero-title"><?= $lang == 'id' ? $meta['nama_halaman_id'] : $meta['nama_halaman_en']; ?></h2>
        <h1 class="hero-subtitle"><?= $lang == 'id' ? $meta['deskripsi_halaman_id'] : $meta['deskripsi_halaman_en']; ?></h1>
    </div>
</header>
<!-- Tentang Kami -->
<section id="tentang" class="container py-5">
    <div class="row align-items-center">
        <!-- Teks Tentang Kami -->
        <div class="col-md-6">
            <span class="about-meta"><?= lang('bahasa.titleAbout'); ?></span>
            <h2 class="about-title"><?= lang('bahasa.headerAbout'); ?></h2>
            <p class="tentang-text-detail"><?= $lang == 'id' ? $profil['deskripsi_perusahaan_id'] : $profil['deskripsi_perusahaan_en']; ?></p>
        </div>

        <!-- Gambar Tentang Kami -->
        <div class="col-md-6 text-center">
            <br>
            <img src="<?= base_url('assets/img/profil/' . $profil['foto_perusahaan']); ?>" alt="<?= $lang == 'id' ? $profil['alt_foto_perusahaan_id'] : $profil['alt_foto_perusahaan_en']; ?>" class="img-fluid rounded tentang-img" alt="Tentang Kami">
        </div>
    </div>
</section>

<?= $this->endSection(); ?>
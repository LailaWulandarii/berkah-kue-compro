<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<!-- Hero Section -->
<header class="hero-section text-white text-center">
    <div class="container">
        <h2 class="hero-title"><?= $lang == 'id' ? $meta['nama_halaman_id'] : $meta['nama_halaman_en']; ?></h2>
        <h1 class="hero-subtitle"><?= $lang == 'id' ? $meta['deskripsi_halaman_id'] : $meta['deskripsi_halaman_en']; ?></h1>
    </div>
</header>
<section id="kontak" class="container py-5">
    <div class="row contact-card">
        <div class="contact-card-item col-md-4">
            <div class="w-100 p-4">
                <p class="contact-description"><?= $lang == 'id' ? $kontak['deskripsi_kontak_id'] : $kontak['deskripsi_kontak_en']; ?></p>
            </div>
        </div>
        <div class="col-md-8">
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.4867622753814!2d112.5022728!3d-8.2542494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78a3001fab4ced%3A0xb427ec73ed066603!2sToko%20Berkah%20Abadi!5e0!3m2!1sid!2sid!4v1748735004293!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>



<?= $this->endSection(); ?>
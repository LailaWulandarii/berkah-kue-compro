<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>

<section id="hero" class="carousel slide" data-bs-ride="carousel">
    <!-- Indikator Titik -->
    <div class="carousel-indicators">
        <?php if (!empty($slider) && is_array($slider)): ?>
            <?php foreach ($slider as $index => $slide): ?>
                <button type="button" data-bs-target="#hero" data-bs-slide-to="<?= $index; ?>" class="<?= $index === 0 ? 'active' : ''; ?>"></button>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <!-- Gambar dan Caption Slider -->
    <div class="carousel-inner">
        <?php if (!empty($slider) && is_array($slider)): ?>
            <?php foreach ($slider as $index => $slide): ?>
                <div class="carousel-item <?= $index === 0 ? 'active' : ''; ?>">
                    <img src="<?= base_url('assets/img/slider/' . $slide['foto_slider']) ?>" class="d-block w-100" alt="<?= $lang == 'id' ? $slide['alt_foto_slider_id'] : $slide['alt_foto_slider_en']; ?>">
                    <div class="carousel-overlay"></div>
                    <!-- Caption per slide -->
                    <div class="carousel-caption-custom">
                        <h1 class="slider-caption">
                            <?= $lang == 'id' ? $slide['caption_slider_id'] : $slide['caption_slider_en']; ?>
                        </h1>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>


<section class="container py-5">
    <div class="section-container">
        <div class="section-line"></div>
        <div class="section-text">
            <h2 class="section-title">
                <?= $lang == 'id' ? $aboutMeta['nama_halaman_id'] : $aboutMeta['nama_halaman_en']; ?>
            </h2>
            <p class="section-subtitle">
                <?= $lang == 'id' ? $aboutMeta['deskripsi_halaman_id'] : $aboutMeta['deskripsi_halaman_en']; ?>
            </p>
        </div>
    </div>

    <!-- Konten lainnya bisa menyusul di bawah -->
    <div class="row align-items-center">
        <!-- Teks Tentang Kami -->
        <div class="col-md-6">
            <h2 class="about-title"><?= $profil['nama_perusahaan']; ?></h2>
            <p class="tentang-text"><?= $lang == 'id' ? $profil['deskripsi_perusahaan_id'] : $profil['deskripsi_perusahaan_en']; ?></p>
        </div>

        <!-- Gambar Tentang Kami -->
        <div class="col-md-6 text-center">
            <br>
            <img src="<?= base_url('assets/img/profil/' . $profil['foto_perusahaan']); ?>"
                alt="<?= $lang == 'id' ? $profil['alt_foto_perusahaan_id'] : $profil['alt_foto_perusahaan_en']; ?>"
                class="img-fluid rounded tentang-img">
        </div>

        <!-- Tombol -->
        <div class="col-md-6">
            <p><a href="<?= base_url($lang == 'id' ? 'id/tentang' : 'en/about') ?>" class="btn btn-grey mt-3">
                    <?= lang('bahasa.buttonAbout'); ?> <i class="bi bi-arrow-right"></i>
                </a></p>
        </div>
    </div>
</section>
<section id="produk" class="container py-5">
    <div class="section-container mb-4">
        <div class="section-line"></div>
        <div class="section-text">
            <h2 class="section-title"><?= $lang == 'id' ? $productMeta['nama_halaman_id'] : $productMeta['nama_halaman_en']; ?></h2>
            <p class="section-subtitle"><?= $lang == 'id' ? $productMeta['deskripsi_halaman_id'] : $productMeta['deskripsi_halaman_en']; ?></p>
        </div>
    </div>

    <div class="horizontal-scroll-container">
        <?php foreach (array_slice($product, 0, 8) as $p): ?>
            <div class="horizontal-card">
                <img src="<?= base_url('assets/img/produk/' . $p['foto_produk']) ?>" alt="<?= $lang == 'id' ? $p['alt_produk_id'] : $p['alt_produk_en']; ?>">
                <div class="card-content">
                    <h5>
                        <a href="<?= base_url($lang == 'id' ? 'id/produk/' . $p['slug_id'] : 'en/product/' . $p['slug_en']); ?>" class="produk-card-title">
                            <?= $lang == 'id' ? $p['nama_produk_id'] : $p['nama_produk_en']; ?>
                        </a>
                    </h5>
                    <p><?= $lang == 'id' ? strip_tags($p['deskripsi_produk_id']) : strip_tags($p['deskripsi_produk_en']); ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="text-center mt-4">
        <a href="<?= base_url($lang == 'id' ? 'id/produk' : 'en/product'); ?>" class="btn btn-grey">
            <?= lang('bahasa.buttonProduct'); ?> <i class="bi bi-arrow-right"></i>
        </a>
    </div>
</section>

<section id="aktivitas" class="container py-5">
    <div class="section-container">
        <div class="section-line"></div>
        <div class="section-text">
            <h2 class="section-title"><?= $lang == 'id' ? $aktivitasMeta['nama_halaman_id'] : $aktivitasMeta['nama_halaman_en']; ?></h2>
            <p class="section-subtitle"><?= $lang == 'id' ? $aktivitasMeta['deskripsi_halaman_id'] : $aktivitasMeta['deskripsi_halaman_en']; ?></p>
        </div>
    </div>

    <div class="aktivitas-slider-wrapper">
        <button class="slider-btn prev-btn" aria-label="Previous">&#10094;</button>
        <div class="aktivitas-slider">
            <?php if (!empty($aktivitas) && is_array($aktivitas)) : ?>
                <?php foreach ($aktivitas as $p) : ?>
                    <a class="aktivitas-card" href="<?= base_url(
                                                        $lang === 'id'
                                                            ? 'id/aktivitas/' . ($p['slug_kategori_id'] ?? 'kategori-tidak-ditemukan') . '/' . ($p['slug_aktivitas_id'] ?? 'aktivitas-tidak-ditemukan')
                                                            : 'en/activity/' . ($p['slug_kategori_en'] ?? 'category-not-found') . '/' . ($p['slug_aktivitas_en'] ?? 'activity-not-found')
                                                    ); ?>">
                        <div class="aktivitas-thumb">
                            <img src="<?= base_url('assets/img/aktivitas/' . $p['foto_aktivitas']); ?>" alt="<?= $lang == 'id' ? $p['alt_aktivitas_id'] : $p['alt_aktivitas_en']; ?>">
                        </div>
                        <div class="aktivitas-info">
                            <h5 class="aktivitas-title"><?= $lang == 'id' ? $p['judul_aktivitas_id'] : $p['judul_aktivitas_en']; ?></h5>
                            <p class="aktivitas-excerpt"><?= $lang == 'id' ? substr($p['deskripsi_aktivitas_id'], 0, 120) : substr($p['deskripsi_aktivitas_en'], 0, 120); ?>...</p>
                            <small class="aktivitas-date"><?= date('d M Y', strtotime($p['updated_at'])); ?></small>
                        </div>
                    </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <button class="slider-btn next-btn" aria-label="Next">&#10095;</button>
    </div>

    <div class="text-center mt-4">
        <a href="<?= base_url($lang == 'id' ? 'id/aktivitas' : 'en/activity'); ?>" class="btn btn-grey">
            <?= lang('bahasa.buttonActivity'); ?> <i class="bi bi-arrow-right"></i>
        </a>
    </div>
</section>

<section id="artikel" class="container py-5">
    <div class="section-container">
        <div class="section-line"></div>
        <div class="section-text">
            <h2 class="section-title"><?= $lang == 'id' ? $articleMeta['nama_halaman_id'] : $articleMeta['nama_halaman_en']; ?></h2>
            <p class="section-subtitle"><?= $lang == 'id' ? $articleMeta['deskripsi_halaman_id'] : $articleMeta['deskripsi_halaman_en']; ?></p>
        </div>
    </div>
    <div class="article-container-card">
        <div class="article-detail-main">
            <?php if (!empty($article)): ?>
                <div class="article-card-large">
                    <div class="image-wrapper">
                        <img src="<?= base_url('assets/img/artikel/' . $article[0]['foto_artikel']); ?>" alt="<?= $lang == 'id' ? $article[0]['alt_artikel_id'] : $article[0]['alt_artikel_en']; ?>">
                        <span class="article-date"><?= date('d F Y', strtotime($article[0]['created_at'])); ?></span>
                    </div>
                    <div class="card-content">
                        <a href="<?= base_url(
                                        $lang === 'id'
                                            ? 'id/artikel/' . $article[0]['slug_kategori_id'] . '/' . $article[0]['slug_artikel_id']
                                            : 'en/article/' . $article[0]['slug_kategori_en'] . '/' . $article[0]['slug_artikel_en']
                                    ); ?>" class="card-title-link">
                            <span class="article-category"><?= $lang == 'id' ? $article[0]['nama_kategori'] : $article[0]['nama_kategori']; ?></span>
                            <h3 class="article-title"><?= $lang == 'id' ? $article[0]['judul_artikel_id'] : $article[0]['judul_artikel_en']; ?></h3>
                            <p class="article-content"><?= $lang == 'id' ? $article[0]['snippet_id'] : $article[0]['snippet_en']; ?></p>
                        </a>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <div class="article-card-wrapper">
            <h3 class="article-card-title text-center"><?= $lang == 'id' ? 'Artikel Lainnya' : 'Related Articles'; ?></h3>
            <hr>
            <div class="article-card-scrollable">
                <?php if (!empty($sideArtikel)): ?>
                    <?php foreach ($sideArtikel as $article): ?>
                        <div class="article-card-item">
                            <div class="image-wrapper">
                                <img src="<?= base_url('assets/img/artikel/' . $article['foto_artikel']); ?>" alt="<?= $lang == 'id' ? $article['alt_artikel_id'] : $article['alt_artikel_en']; ?>">
                                <span class="article-date"><?= date('d F Y', strtotime($article['created_at'])); ?></span>
                            </div>
                            <div class="card-content">
                                <a href="<?= base_url($lang == 'id'
                                                ? 'id/artikel/' . $article['slug_kategori_id'] . '/' . $article['slug_artikel_id']
                                                : 'en/article/' . $article['slug_kategori_en'] . '/' . $article['slug_artikel_en']); ?>" class="card-title-link">
                                    <span class="article-category"><?= $lang == 'id' ? $article['nama_kategori'] : $article['nama_kategori']; ?></span>
                                    <h4 class="article-title"><?= $lang == 'id' ? $article['judul_artikel_id'] : $article['judul_artikel_en']; ?></h4>
                                    <p class="article-description-small"><?= $lang == 'id' ? $article['snippet_id'] : $article['snippet_en']; ?></p>

                                </a>
                            </div>

                        </div>
                        <hr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>Tidak ada artikel terkait.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="text-center mt-4">
        <a href="<?= base_url($lang == 'id' ? 'id/artikel' : 'en/article'); ?>" class="btn btn-grey">
            <?= lang('bahasa.buttonArticle'); ?> <i class="bi bi-arrow-right"></i>
        </a>
    </div>

</section>
<section id="kontak" class="container py-5">
    <div class="section-container">
        <div class="section-line"></div>
        <div class="section-text">
            <h2 class="section-title"><?= $lang == 'id' ? $contactMeta['nama_halaman_id'] : $contactMeta['nama_halaman_en']; ?></h2>
            <p class="section-subtitle"><?= $lang == 'id' ? $contactMeta['deskripsi_halaman_id'] : $contactMeta['deskripsi_halaman_en']; ?></p>
        </div>
    </div>
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
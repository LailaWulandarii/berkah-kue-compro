<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<!-- Hero Section -->
<header class="hero-section text-white text-center">
    <div class="container">
        <h2 class="hero-title"><?= $lang == 'id' ? $meta['nama_halaman_id'] : $meta['nama_halaman_en']; ?></h2>
        <p class="hero-subtitle"><?= $lang == 'id' ? $meta['deskripsi_halaman_id'] : $meta['deskripsi_halaman_en']; ?></p>
    </div>
</header>
<section id="artikel-detail" class="container py-5">
    <div class="article-container-card">
        
        <!-- Artikel Utama (Detail Artikel) -->
        <div class="article-detail-main">
            <div class="article-card-large">
                <div class="image-wrapper">
                    <img src="<?= base_url('assets/img/artikel/' . $artikel['foto_artikel']); ?>" 
                         alt="<?= $lang == 'id' ? $artikel['alt_artikel_id'] : $artikel['alt_artikel_en']; ?>">
                    <span class="article-date"><?= date('d M Y', strtotime($artikel['created_at'])); ?></span>
                </div>

                <div class="card-content">
                    <span class="article-category"><?= $lang == 'id' ? $artikel['nama_kategori_id'] : $artikel['nama_kategori_en']; ?></span>
                    <h1 class="article-title"><?= $lang == 'id' ? $artikel['judul_artikel_id'] : $artikel['judul_artikel_en']; ?></h1>
                    <p class="article-content"><?= $lang == 'id' ? $artikel['deskripsi_artikel_id'] : $artikel['deskripsi_artikel_en']; ?></p>
                </div>
            </div>
        </div>

        <!-- Artikel Lainnya (Di Sisi Kanan) -->
        <div class="article-card-wrapper">
            <h3 class="article-card-title text-center"><?= $lang == 'id' ? 'Artikel Lainnya' : 'Related Articles'; ?></h3>
            <hr>
            <div class="article-card-scrollable">
                <?php 
                $max_articles = 5; // Batasi hanya 5 artikel lainnya
                $count = 0;
                foreach ($allArticle as $article): 
                    if ($count >= $max_articles) break; // Hentikan setelah 5 artikel
                    $count++;
                ?>
                    <div class="article-card-item">
                        <div class="image-wrapper">
                            <img src="<?= base_url('assets/img/artikel/' . $article['foto_artikel']); ?>" 
                                 alt="<?= $lang == 'id' ? $article['alt_artikel_id'] : $article['alt_artikel_en']; ?>">
                            <span class="article-date"><?= date('d M Y', strtotime($article['created_at'])); ?></span>
                        </div>
                        <div class="card-content">
                            <span class="article-category"><?= $lang == 'id' ? $article['nama_kategori_id'] : $article['nama_kategori_en']; ?></span>
                            <a href="<?= base_url(
                                            $lang == 'id'
                                                ? 'id/artikel/' . $article['slug_kategori_id'] . '/' . $article['slug_artikel_id']
                                                : 'en/article/' . $article['slug_kategori_en'] . '/' . $article['slug_artikel_en']
                                        ); ?>" class="card-title-link">
                                <h4 class="article-title"><?= $lang == 'id' ? $article['judul_artikel_id'] : $article['judul_artikel_en']; ?></h4>
                                <p class="article-description-small"><?= $lang == 'id' ? substr($article['snippet_id'], 0, 80) : substr($article['snippet_en'], 0, 80); ?>...</p>
                            </a>
                        </div>
                    </div>
                    <hr>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</section>

<?= $this->endSection(); ?>
<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>

<!-- Hero Section -->
<header class="hero-section text-white text-center">
    <div class="container">
        <h2 class="hero-title"><?= $lang == 'id' ? $meta['nama_halaman_id'] : $meta['nama_halaman_en']; ?></h2>
        <h1 class="hero-subtitle"><?= $lang == 'id' ? $meta['deskripsi_halaman_id'] : $meta['deskripsi_halaman_en']; ?></h1>
    </div>
</header>

<section id="artikel" class="container py-5">
    <div class="article-container-card">
        <!-- Artikel Utama (Tersusun ke Bawah) -->
        <div class="article-main">
            <?php foreach ($allArticle as $article): ?>
                <div class="article-card-large">
                    <div class="image-wrapper">
                        <img src="<?= base_url('assets/img/artikel/' . $article['foto_artikel']); ?>"
                            alt="<?= $lang == 'id' ? $article['alt_artikel_id'] : $article['alt_artikel_en']; ?>">
                        <span class="article-date"><?= date('d M Y', strtotime($article['created_at'])); ?></span>
                    </div>
                    <div class="card-content">
                        <a href="<?= base_url(
                                        $lang === 'id'
                                            ? 'id/artikel/' . ($article['slug_kategori_id'] ?? 'kategori-tidak-ditemukan') . '/' . ($article['slug_artikel_id'] ?? 'artikel-tidak-ditemukan')
                                            : 'en/article/' . ($article['slug_kategori_en'] ?? 'category-not-found') . '/' . ($article['slug_artikel_en'] ?? 'article-not-found')
                                    ); ?>" class="card-title-link">
                            <span class="article-category"><?= $lang == 'id' ? $article['nama_kategori'] : $article['nama_kategori']; ?></span>
                            <h3 class="article-title"><?= $lang == 'id' ? $article['judul_artikel_id'] : $article['judul_artikel_en']; ?></h3>
                            <p class="article-description"><?= $lang == 'id' ? $article['snippet_id'] : $article['snippet_en']; ?></p>
                        </a>
                    </div>
                </div>

            <?php endforeach; ?>

            <!-- Pagination -->
            <div class="d-flex justify-content-center mt-4">
                <?= $pager->links('default', 'bootstrap_pagination') ?>
            </div>
        </div>

        <!-- Artikel Lainnya (Di Sisi Kanan) -->
        <div class="article-card-wrapper">
            <h3 class="article-card-title text-center"><?= $lang == 'id' ? 'Artikel Lainnya' : 'Related Articles'; ?></h3>
            <hr>
            <div class="article-card-scrollable">
                <?php foreach ($sideArticle as $article): ?>
                    <div class="article-card-item">
                        <div class="image-wrapper">
                            <img src="<?= base_url('assets/img/artikel/' . $article['foto_artikel']); ?>"
                                alt="<?= $lang == 'id' ? $article['alt_artikel_id'] : $article['alt_artikel_en']; ?>">
                            <span class="article-date"><?= date('d M Y', strtotime($article['created_at'])); ?></span>
                        </div>
                        <div class="card-content">
                            <span class="article-category"><?= $lang == 'id' ? $article['nama_kategori'] : $article['nama_kategori']; ?></span>
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
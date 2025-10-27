<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<!-- Hero Section -->
<header class="hero-section text-white text-center">
    <div class="container">
        <h2 class="hero-title"><?= $lang == 'id' ? $meta['nama_halaman_id'] : $meta['nama_halaman_en']; ?></h2>
        <p class="hero-subtitle"><?= $lang == 'id' ? $meta['deskripsi_halaman_id'] : $meta['deskripsi_halaman_en']; ?></p>
    </div>
</header>
<section class="container py-5">
    <div class="bg-card">
        <div class="detail-produk-container">
            <img src="<?= base_url('assets/img/produk/' . $product["foto_produk"]) ?>"
                alt="<?= $lang == 'id' ? $product['alt_produk_id'] : $product['alt_produk_en']; ?>"
                class="detail-produk-image">

            <div class="detail-produk-info">
                <h1 class="detail-produk-title">
                    <?= $lang == 'id' ? $product['nama_produk_id'] : $product['nama_produk_en']; ?>
                </h1>
                <?php
                $rawFullDescription = $lang == 'id' ? $product['deskripsi_produk_id'] : $product['deskripsi_produk_en'];
                $cleanDescription = preg_replace('/\sdata-(start|end)="\d+"/', '', $rawFullDescription);
                $plainTextDescription = strip_tags($cleanDescription);

                // --- Langkah 2: Buat deskripsi singkat ---
                $characterLimit = 180; // Batas karakter yang lebih disesuaikan untuk deskripsi singkat
                $shortDescription = $plainTextDescription; // Defaultnya adalah teks penuh
                $isTruncated = false;

                if (mb_strlen($plainTextDescription) > $characterLimit) {
                    // Gunakan mb_substr untuk penanganan karakter multi-byte yang lebih baik
                    $shortDescription = mb_substr($plainTextDescription, 0, $characterLimit) . '...';
                    $isTruncated = true;
                }
                ?>

                <p class="detail-produk-description-short">
                    <?= htmlspecialchars($shortDescription); // Pastikan teks di-escape untuk keamanan ?>
                </p>
                <?php if ($isTruncated): // Tampilkan tombol hanya jika deskripsi dipotong ?>
                    <a href="#" class="read-more-btn" data-bs-toggle="modal" data-bs-target="#produkDescriptionModal">
                        <?= lang('bahasa.buttonAbout'); ?>
                    </a>
                <?php endif; ?>

                <div class="detail-produk-actions mt-4">
                    <a href="<?= base_url($lang == 'id' ? 'id/kontak' : 'en/contact'); ?>" class="btn btn-secondary">
                        <?= lang('bahasa.buttonConsult'); ?>
                    </a>
                    <a href="<?= base_url($lang == 'id' ? 'id/produk' : 'en/product'); ?>" class="btn btn-outline-secondary">
                        <?= lang('bahasa.buttonProduct'); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="produkDescriptionModal" tabindex="-1" aria-labelledby="produkDescriptionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="produkDescriptionModalLabel">
                    <?= $lang == 'id' ? $product['nama_produk_id'] : $product['nama_produk_en']; ?>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="full-description-content">
                    <?php
                    // Untuk deskripsi lengkap di modal, kita ingin mempertahankan beberapa HTML dasar
                    // Biarkan tag <p>, <strong>, <ul>, <li>, tapi tetap bersihkan atribut data-start/end
                    $cleanModalDescription = preg_replace('/\sdata-(start|end)="\d+"/', '', $rawFullDescription);
                    // Gunakan nl2br untuk baris baru dari teks asli jika tidak ada tag <p>
                    // Namun karena ada <p> di data Anda, nl2br mungkin tidak diperlukan jika <p> sudah mengurusnya.
                    // Jika Anda ingin semua paragraf dan list item ditampilkan dengan baik di modal,
                    // cukup echo $cleanModalDescription.
                    echo $cleanModalDescription;
                    ?>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>
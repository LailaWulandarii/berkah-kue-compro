<!DOCTYPE html>
<html lang="<?= session()->get('lang') ?? 'id'; ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if (isset($metaCategory)): ?>
        <title><?= $lang == 'id' ? $metaCategory['title_id'] : $metaCategory['title_en']; ?></title>
        <meta name="description" content="<?= $lang == 'id' ? $metaCategory['meta_desc_id'] : $metaCategory['meta_desc_en']; ?>">
    <?php else: ?>
        <title><?= $lang == 'id' ? $meta['title_id'] : $meta['title_en']; ?></title>
        <meta name="description" content="<?= $lang == 'id' ? $meta['meta_desc_id'] : $meta['meta_desc_en']; ?>">
    <?php endif; ?>
    <link rel="canonical" href="<?= isset($canonical) && !empty($canonical) ? $canonical : base_url() ?>">

    <link href=" <?= base_url('favicon.png'); ?>" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet">
</head>

<body>
    <?= $this->include('layouts/navbar'); ?>
    <a href="https://<?= $kontak['link_wa']; ?>" target="_blank" class="whatsapp-button">
        <img src="<?= base_url('assets/img/logo/wa.png'); ?>" width="30" alt="WhatsApp">
        <?= lang('bahasa.buttonSlider'); ?>
    </a>

    <?= $this->renderSection('content'); ?>

    <?= $this->include('layouts/footer'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    // Aktivitas slider (pastikan elemen .aktivitas-slider, .prev-btn, .next-btn ada di HTML)
    document.addEventListener('DOMContentLoaded', function() {
        const slider = document.querySelector('.aktivitas-slider');
        const prevBtn = document.querySelector('.prev-btn');
        const nextBtn = document.querySelector('.next-btn');

        if (slider && prevBtn && nextBtn) { // Add checks to prevent errors if elements don't exist
            prevBtn.addEventListener('click', () => {
                slider.scrollBy({
                    left: -300,
                    behavior: 'smooth'
                });
            });

            nextBtn.addEventListener('click', () => {
                slider.scrollBy({
                    left: 300,
                    behavior: 'smooth'
                });
            });
        }
    });
</script>
<script>
    // Produk Description Truncation (using textContent for plain text)
    document.addEventListener('DOMContentLoaded', function() {
        const descriptionElements = document.querySelectorAll('.produk-description');
        const characterLimit = 150; // Adjust this limit as needed for product cards

        descriptionElements.forEach(descElement => {
            const originalText = descElement.textContent;
            let truncatedText = originalText;

            // Method: Truncate by CHARACTER count
            if (originalText.length > characterLimit) {
                // Ensure we don't cut in the middle of a word if possible,
                // but for simple char limit, this is effective.
                truncatedText = originalText.substring(0, characterLimit).trim() + '...';
            }
            descElement.textContent = truncatedText;
        });
    });
</script>
<script>
    // Navbar Scroll Effect
    document.addEventListener('DOMContentLoaded', function() {
        const navbar = document.querySelector('.glass-navbar');
        const scrollThreshold = 100;

        // Check if navbar exists to prevent errors on pages without it
        if (navbar) {
            window.addEventListener('scroll', function() {
                if (window.scrollY > scrollThreshold) {
                    navbar.classList.add('scrolled-navbar');
                } else {
                    navbar.classList.remove('scrolled-navbar');
                }
            });
        }
    });
</script>

</body>

</html>
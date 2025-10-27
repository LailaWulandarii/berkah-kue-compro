<?php
// Ambil bahasa yang disimpan di session
$lang = session()->get('lang') ?? 'id'; // Default ke 'id' jika tidak ada di session

$current_url = uri_string();

// Ambil query string (misalnya ?keyword=sukses)
$query_string = $_SERVER['QUERY_STRING'] ?? ''; // Pastikan tidak ada error jika query string kosong

// Simpan segmen bahasa saat ini
$segments = explode('/', $current_url);
$lang_segment = $segments[0] ?? ''; // Ambil segmen pertama dari URL

// Pastikan hanya 'en' atau 'id' yang dianggap sebagai segmen bahasa
if ($lang_segment !== 'en' && $lang_segment !== 'id') {
    $lang_segment = 'id'; // Default ke 'id' jika segmen bahasa tidak ada
}

// Definisikan tautan untuk setiap halaman berdasarkan bahasa
$homeLink    = ($lang_segment === 'en') ? '/' : '/';
$aboutLink   = ($lang_segment === 'en') ? 'about' : 'tentang';
$contactLink = ($lang_segment === 'en') ? 'contact' : 'kontak';
$articleLink = ($lang_segment === 'en') ? 'article' : 'artikel';
$activityLink = ($lang_segment === 'en') ? 'activity' : 'aktivitas';
$productLink = ($lang_segment === 'en') ? 'product' : 'produk';

// Ambil bagian dari URL tanpa segmen bahasa
array_shift($segments); // Hapus segmen bahasa dari array
$url_without_lang = implode('/', $segments); // Gabungkan kembali sisa URL

// Tentukan bahasa yang ingin digunakan
$new_lang = ($lang_segment === 'en') ? 'id' : 'en';

// Mapping penggantian segmen dalam URL berdasarkan bahasa yang aktif
$replace_map = [
    'tentang' => 'about',
    'kontak' => 'contact',
    'artikel' => 'article',
    'aktivitas' => 'activity',
    'produk' => 'product',
];

foreach ($replace_map as $id => $en) {
    if ($lang_segment === 'en') {
        // Jika bahasa saat ini 'en', ubah ke 'id'
        $url_without_lang = str_replace($en, $id, $url_without_lang);
    } else {
        // Jika bahasa saat ini 'id', ubah ke 'en'
        $url_without_lang = str_replace($id, $en, $url_without_lang);
    }
}

// Buat URL yang bersih
$clean_url = ($url_without_lang !== '') ? "$new_lang/$url_without_lang" : $new_lang;

// Gabungkan query string jika ada
if (!empty($query_string)) {
    $clean_url .= '?' . $query_string;
}

// Tautan Bahasa Inggris & Indonesia
$english_url = base_url($clean_url);
$indonesia_url = base_url($clean_url);

// Tautan Kategori Artikel untuk Navbar
$categoryLinks = [];
if (!empty($categories)) {
    foreach ($categories as $cat) {
        $slug = ($lang === 'id') ? $cat['slug_kategori_id'] : $cat['slug_kategori_en'];
        $name = ($lang === 'id') ? $cat['nama_kategori_id'] : $cat['nama_kategori_en'];
        $categoryLinks[] = [
            'url' => base_url("$lang/$articleLink/$slug"),
            'name' => $name
        ];
    }
}

// Tautan Kategori Aktivitas untuk Navbar
$kategoriAktivitasLinks = [];
if (!empty($categoriesAktivitas)) {
    foreach ($categoriesAktivitas as $cat) {
        $slug = ($lang === 'id') ? $cat['slug_kategori_id'] : $cat['slug_kategori_en'];
        $name = ($lang === 'id') ? $cat['nama_kategori_id'] : $cat['nama_kategori_en'];
        $kategoriAktivitasLinks[] = [
            'url' => base_url("$lang/$activityLink/$slug"),
            'name' => $name
        ];
    }
}
?>

<nav class="navbar navbar-expand-lg fixed-top glass-navbar">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url($lang . '/') ?>">
            <img src="<?= base_url('assets/img/profil/' . $profil['logo_perusahaan']); ?>"
                 alt="<?= $lang == 'id' ? $profil['alt_logo_perusahaan_id'] : $profil['alt_logo_perusahaan_en']; ?>"
                 style="width: 70%;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link <?= isset($data['activeMenu']) && $data['activeMenu'] === 'home' ? 'active' : '' ?>"
                       href="<?= base_url($lang . '/') ?>">
                        <?= lang('bahasa.home'); ?>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= isset($data['activeMenu']) && $data['activeMenu'] === 'about' ? 'active' : '' ?>"
                       href="<?= base_url($lang . '/' . $aboutLink) ?>">
                        <?= lang('bahasa.about'); ?>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= isset($activeMenu) && $activeMenu === 'product' ? 'active' : '' ?>"
                       href="<?= base_url($lang . '/' . $productLink) ?>">
                        <?= lang('bahasa.product'); ?>
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?= isset($data['activeMenu']) && $data['activeMenu'] === 'activity' ? 'active' : '' ?>"
                       href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?= lang('bahasa.activity'); ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= base_url($lang . '/' . $activityLink) ?>">
                                <?= $lang == 'id' ? 'Semua Aktivitas' : 'All Activity'; ?>
                            </a></li>
                        <?php if (!empty($kategoriAktivitasLinks)): ?>
                            <?php foreach ($kategoriAktivitasLinks as $link): ?>
                                <li><a class="dropdown-item" href="<?= $link['url']; ?>">
                                        <?= $link['name']; ?>
                                    </a></li>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <li><a class="dropdown-item disabled">No Categories Available</a></li>
                        <?php endif; ?>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?= isset($data['activeMenu']) && $data['activeMenu'] === 'article' ? 'active' : '' ?>"
                       href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?= lang('bahasa.article'); ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= base_url($lang . '/' . $articleLink) ?>">
                                <?= $lang == 'id' ? 'Semua Artikel' : 'All Articles'; ?>
                            </a></li>
                        <?php if (!empty($categoryLinks)): ?>
                            <?php foreach ($categoryLinks as $category): ?>
                                <li><a class="dropdown-item" href="<?= $category['url']; ?>">
                                        <?= $category['name']; ?>
                                    </a></li>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <li><a class="dropdown-item disabled">No Categories Available</a></li>
                        <?php endif; ?>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= isset($data['activeMenu']) && $data['activeMenu'] === 'contact' ? 'active' : '' ?>"
                       href="<?= base_url('/' . $lang . '/' . $contactLink); ?>">
                        <?= lang('bahasa.contact'); ?>
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?= $lang === 'en' ? 'English' : 'Indonesia'; ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item <?= $lang === 'id' ? 'active disabled' : ''; ?>"
                               href="<?= $indonesia_url; ?>">
                                <img src="<?= base_url('assets/flags/indonesia.jpeg') ?>" width="20" class="me-2"> Indonesia
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item <?= $lang === 'en' ? 'active disabled' : ''; ?>"
                               href="<?= $english_url; ?>">
                                <img src="<?= base_url('assets/flags/english.jpeg') ?>" width="20" class="me-2"> English
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>


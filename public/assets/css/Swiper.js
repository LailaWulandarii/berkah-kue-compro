<script>
    var swiper = new Swiper(".produk-slider", {
        slidesPerView: 3, /* Menampilkan 3 card */
        spaceBetween: 20, /* Jarak antar card */
        centeredSlides: true, /* Slide di tengah lebih menonjol */
        loop: true, /* Slide terus berputar */
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            768: { slidesPerView: 3 },
            576: { slidesPerView: 1 }
        }
    });
</script>

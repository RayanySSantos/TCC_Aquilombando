document.addEventListener("DOMContentLoaded", function () {

    const imagens = document.querySelectorAll(".hero-galeria img, .historia-hero-galeria img, .culinaria-hero-galeria img, .artesanato-hero-galeria img, .costumes-hero-galeria img, .agricultura-hero-galeria img, .comunidades-grid .card img");
    const lightbox = document.getElementById("lightbox");
    const lightboxImg = document.getElementById("lightbox-img");
    const fechar = document.querySelector(".lightbox-fechar");

    if (!lightbox || imagens.length === 0) return;

    imagens.forEach(img => {
        img.addEventListener("click", function () {
            lightboxImg.src = this.src;
            lightbox.style.display = "flex";
        });
    });

    fechar.addEventListener("click", function () {
        lightbox.style.display = "none";
    });

    lightbox.addEventListener("click", function (e) {
        if (e.target === lightbox) {
            lightbox.style.display = "none";
        }
    });

});

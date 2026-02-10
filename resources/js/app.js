import './bootstrap';

document.addEventListener("DOMContentLoaded", () => {

    const imagens = document.querySelectorAll(".hero-galeria img");
    const lightbox = document.getElementById("lightbox");
    const lightboxImg = document.getElementById("lightbox-img");
    const fechar = document.querySelector(".lightbox-fechar");

    if (!lightbox || imagens.length === 0) return;

    imagens.forEach(img => {
        img.addEventListener("click", () => {
            lightboxImg.src = img.src;
            lightbox.style.display = "flex";
        });
    });

    fechar.addEventListener("click", () => {
        lightbox.style.display = "none";
    });

    lightbox.addEventListener("click", (e) => {
        if (e.target === lightbox) {
            lightbox.style.display = "none";
        }
    });

});

document.addEventListener("DOMContentLoaded", function () {
    const imageSelector = [
        ".hero-galeria img",
        ".historia-hero-galeria img",
        ".culinaria-hero-galeria img",
        ".artesanato-hero-galeria img",
        ".costumes-hero-galeria img",
        ".agricultura-hero-galeria img",
        ".comunidades-grid .card img",
        ".estatistica-container .estatistica-card-grafico img"
    ].join(", ");

    const lightbox = document.getElementById("lightbox");
    const lightboxImg = document.getElementById("lightbox-img");
    const closeButton = document.querySelector(".lightbox-fechar");

    if (!lightbox || !lightboxImg || !closeButton) return;

    const closeLightbox = function () {
        lightbox.style.display = "none";
        lightboxImg.removeAttribute("src");
        lightboxImg.removeAttribute("alt");
    };

    document.addEventListener("click", function (event) {
        const image = event.target.closest(imageSelector);

        if (!image) return;
        if (!image.src) return;

        lightboxImg.src = image.src;
        lightboxImg.alt = image.alt || "Imagem ampliada";
        lightbox.style.display = "flex";
    });

    closeButton.addEventListener("click", closeLightbox);

    lightbox.addEventListener("click", function (event) {
        if (event.target === lightbox) {
            closeLightbox();
        }
    });

    document.addEventListener("keydown", function (event) {
        if (event.key === "Escape" && lightbox.style.display === "flex") {
            closeLightbox();
        }
    });
});

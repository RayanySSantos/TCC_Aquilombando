document.addEventListener("DOMContentLoaded", () => {
    const nomeQuilombo = document.body.dataset.fonteQuilombo;

    if (!nomeQuilombo) {
        return;
    }

    document.querySelectorAll(".carrossel-pequeno").forEach((carrossel) => {
        const fontes = document.createElement("div");
        fontes.className = "carrossel-fontes";
        fontes.innerHTML = `
            <p class="carrossel-fonte">Fonte: ${nomeQuilombo}.</p>
            <p class="carrossel-fonte">Fonte: Projeto Mapeamento Gastronômico, 2025.</p>
        `;
        carrossel.insertAdjacentElement("afterend", fontes);
    });
});

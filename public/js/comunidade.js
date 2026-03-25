document.addEventListener("DOMContentLoaded", () => {
    const nomeQuilombo = document.body.dataset.fonteQuilombo;
    const fontesEspecificas = {
        "Quilombo Aroeira":
            "Fonte: Quilombo Aroeira; Projetos Mapeamento Gastronômico; Culinária Ancestral; e Comunidades Rurais e Tradicionais (2025).",
        "Quilombo Lagoa dos Anjos":
            "Fonte: Quilombo Lagoa dos Anjos; Projetos Mapeamento Gastronômico; Culinária Ancestral; e Comunidades Rurais e Tradicionais (2025).",
    };
    const fonteCompleta =
        fontesEspecificas[nomeQuilombo] ??
        `Fonte: ${nomeQuilombo}; Projeto Mapeamento Gastronômico (2025).`;

    if (!nomeQuilombo) {
        return;
    }

    document.querySelectorAll(".carrossel-pequeno").forEach((carrossel) => {
        const fontes = document.createElement("div");
        fontes.className = "carrossel-fontes";
        fontes.innerHTML = `
            <p class="carrossel-fonte">${fonteCompleta}</p>
        `;
        carrossel.insertAdjacentElement("afterend", fontes);
    });
});

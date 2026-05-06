document.addEventListener("DOMContentLoaded", () => {
    const nomeQuilombo = document.body.dataset.fonteQuilombo;
    const fontePadrao = `Fonte: ${nomeQuilombo}; Projeto Mapeamento Gastronômico (2025).`;
    const fontesEspecificas = {
        "Quilombo Aroeira":
            "Fonte: Quilombo Aroeira; Projetos Mapeamento Gastronômico; Culinária Ancestral; e Vozes do Sertão (2025).",
        "Quilombo Lagoa dos Anjos":
            "Fonte: Quilombo Lagoa dos Anjos; Projetos Mapeamento Gastronômico; Culinária Ancestral; e Vozes do Sertão (2025).",
    };

    if (!nomeQuilombo) {
        return;
    }

    document.querySelectorAll(".carrossel-pequeno").forEach((carrossel) => {
        const secao = carrossel.closest(".secao");
        let fonteCompleta = fontesEspecificas[nomeQuilombo] ?? fontePadrao;

        if (secao && (secao.id === "culinaria" || secao.id === "guardioes")) {
            fonteCompleta = "Fonte: Projeto Mapeamento Gastronômico (2025).";
        }

        if (nomeQuilombo === "Quilombo Vargem Comprida" && secao && secao.id === "reisado") {
            fonteCompleta = "Fonte: Projeto Mapeamento Gastronômico (2025).";
        }

        if (nomeQuilombo === "Quilombo Vargem Comprida" && secao && secao.id === "agricultura") {
            fonteCompleta = "Fonte: Quilombo Vargem Comprida (2025).";
        }

        const fontes = document.createElement("div");
        fontes.className = "carrossel-fontes";
        fontes.innerHTML = `
            <p class="carrossel-fonte">${fonteCompleta}</p>
        `;
        carrossel.insertAdjacentElement("afterend", fontes);
    });
});

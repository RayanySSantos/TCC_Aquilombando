document.addEventListener("DOMContentLoaded", () => {

    const card = document.getElementById("cardComunidade");
    const cardTitulo = document.getElementById("cardTitulo");
    const cardLista = document.getElementById("cardLista");

    // todas as cidades e suas comunidades
    const comunidades = {
        "Caetité": ["Passagem de Areia"],
        "Palmas de Monte Alto": ["Vargem Alta", "Vargem Comprida", "Aroeira"],
        "Pindaí": ["Quilombo de Boi"],
        "Candiba": ["Lagoa dos Anjos"]
    };

    // cores alternadas
    const cores = ["verde", "vermelho", "amarelo", "marrom"];

    // hotspots das cidades
    document.querySelectorAll(".cidade-hotspot").forEach(h => {
        h.addEventListener("click", () => {

            const cidade = h.dataset.local;
            const lista = comunidades[cidade];

            // preenche título
            cardTitulo.textContent = cidade;

            // preenche a lista
            cardLista.innerHTML = "";
            lista.forEach((nome, index) => {
                const cor = cores[index % cores.length];
                const slug = nome.toLowerCase().replace(/ /g, "-");

                cardLista.innerHTML += `
                    <div class="item ${cor}" onclick="location.href='/comunidades/${slug}'">
                        ${nome}
                    </div>
                `;
            });

            // Mostrar card
            card.style.display = "block";
        });
    });

    // fechar o card clicando fora
    document.addEventListener("click", (e) => {
        if (!card.contains(e.target) && !e.target.classList.contains("cidade-hotspot")) {
            card.style.display = "none";
        }
    });

});

const card = document.getElementById("cardComunidade");
const fecharCard = document.querySelector(".card-fechar");

if (fecharCard) {
    fecharCard.addEventListener("click", () => {
        card.style.display = "none";
    });
}

const darkModeBtn = document.createElement("button");
darkModeBtn.textContent = "🌙 Modo Oscuro";
darkModeBtn.className = "btn btn-secondary position-fixed bottom-0 end-0 m-3";
document.body.appendChild(darkModeBtn);

if (localStorage.getItem("modoOscuro") === "true") activarModoOscuro();

darkModeBtn.addEventListener("click", () => {
    const activado = document.body.classList.toggle("modo-oscuro");
    darkModeBtn.textContent = activado ? "☀️ Modo Claro" : "🌙 Modo Oscuro";
    localStorage.setItem("modoOscuro", activado);
});

function activarModoOscuro() {
    document.body.classList.add("modo-oscuro");
    darkModeBtn.textContent = "☀️ Modo Claro";
}

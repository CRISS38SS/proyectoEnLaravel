document.getElementById('victoryBtn').addEventListener('click', function () {
    const sound = document.getElementById('victorySound');
    sound.currentTime = 0;
    sound.play().catch(e => {
        console.log("Reproducción bloqueada por el navegador (común en celulares).");
    });
});
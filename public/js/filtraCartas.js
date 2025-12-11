document.getElementById('filterRareza').addEventListener('change', function () {
    const filtro = this.value;
    const cards = document.querySelectorAll('#skins .card, #lossiete .card');

    cards.forEach(card => {
        const rarezaElement = card.querySelector('.text-muted');
        const rarezaText = rarezaElement.textContent;

        // obtiene la rareza
        const match = rarezaText.match(/Rareza:\s*([^\n<]+)/);
        const rarezaSkin = match ? match[1].trim() : '';

        // esto es solo para verificar 
        console.log('Filtro:', filtro, 'Rareza encontrada:', rarezaSkin);

        if (filtro === 'todos' || rarezaSkin === filtro) {
            card.parentElement.style.display = '';
        } else {
            card.parentElement.style.display = 'none';
        }
    });
});
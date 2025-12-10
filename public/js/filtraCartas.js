document.getElementById('filterRareza').addEventListener('change', function () {
    const filtro = this.value;
    const cards = document.querySelectorAll('#skins .card, #lossiete .card');

    cards.forEach(card => {
        const rareza = card.querySelector('.card-text + .text-muted').textContent;
        const match = rareza.match(/Rareza:\s*(\w+)/);
        const rarezaSkin = match ? match[1] : '';

        if (filtro === 'todos' || rarezaSkin === filtro) {
            card.parentElement.style.display = '';
        } else {
            card.parentElement.style.display = 'none';
        }
    });
});
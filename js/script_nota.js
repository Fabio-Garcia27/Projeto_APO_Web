// Fábio 05/05/2024
// Necessário ter window.onload - script seja executado após a página ser carregada
window.onload = function() {
    const prova1 = document.getElementById('prova1');
    const prova2 = document.getElementById('prova2');
    const exame = document.getElementById('exame');
    const media = document.getElementById('media');

    prova1.addEventListener('input', calcularMedia);
    prova2.addEventListener('input', calcularMedia);
    exame.addEventListener('input', calcularMedia);

    function calcularMedia() {
        const nota1 = parseFloat(prova1.value) || 0;
        const nota2 = parseFloat(prova2.value) || 0;
        const notaExame = parseFloat(exame.value) || 0;
        const mediaValor = (nota1 + nota2 + notaExame) / 3;
        media.value = isNaN(mediaValor) ? '' : mediaValor.toFixed(2);
    }
}


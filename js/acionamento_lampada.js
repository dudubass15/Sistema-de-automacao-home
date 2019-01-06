function alternarLamp(ligado) { 
    if(ligado) {
        // return desliga();
        alert('Ligado');
    } else {
        alert('Desligado');
    }
    // return liga();
}

function AvisoPainel(ligado) {
    if(ligado) {
        var cor = '#FFF400';
        var conteudo = document.getElementById('area-button');

        conteudo.style.backgroundColor = cor;

    } else {
        var cor = '';
        var conteudo = document.getElementById('area-button');

        conteudo.style.backgroundColor = cor;
    }
}
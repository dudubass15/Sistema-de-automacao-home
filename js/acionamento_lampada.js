function alternarLamp(ligado) { 
    if(ligado) {
        $(function()
        {
            $.ajax({
                type: 'post',
                url: 'acionamento_py.php',
                data: { on: "ligado" },
                success: function(){
                    console.log("ok");
                }
            });
        });
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
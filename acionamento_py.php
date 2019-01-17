<?php

if(isset($_POST['on']) && !empty($_POST['on'])) {
    $comando_on = $_POST['on'];

    envio_comando($comando_on);

} else{
    header('Location: index.php');
}

    function envio_comando($comando_on) {
        if($comando_on == 'ligado'){
            $cmd = shell_exec('python acionamento_rele.py');
            $cmd_escape = escapeshellcmd($cmd);
            system($cmd_escape);
        } else {
            echo("Não foi possível enviar o comando ...");
        }
        
    }


?>
<?php

include 'configuracao/ssh_config.php';

    if(isset($_POST['on']) && !empty($_POST['on'])) {
        $comando_on = $_POST['on'];

        envio_comando_shh();

    } else{
        header('Location: index.php');
    }

    function envio_comando_shh() {
        // if($comando_on == 'ligado'){
        //     $cmd = shell_exec('python acionamento_rele.py');
        //     $cmd_escape = escapeshellcmd($cmd);
        //     system($cmd_escape);
        // } else {
        //     echo("Não foi possível enviar o comando ...");
        // }
        
        $ssh = new Net_SSH2('10.0.1.202');
            if (!$ssh->login('pi', 'eduardo00')) {
                exit('Login Failed');
            }

            echo $ssh->exec('pwd');
            echo $ssh->exec('ls -la');
        
    }


?>
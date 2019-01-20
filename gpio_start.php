<?php

    $dado = system('gpio-g mode 11 out');
    $dado.=system('gpio-g write 11 1');

    exec($dado);

    echo("Comando executado com sucesso !");


?>
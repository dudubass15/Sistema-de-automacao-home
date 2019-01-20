<?php

    shell_exec('gpio-g mode 11 out');
    shell_exec('gpio-g write 11 1');

    echo("Comando executado com sucesso !");


?>
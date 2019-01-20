<?php

    // shell_exec('gpio-g mode 11 out');
    // shell_exec('gpio-g write 11 1');

    $a = exec("sudo python3 /home/pi/Documentos/rele_teste.py");

    echo $a;


?>
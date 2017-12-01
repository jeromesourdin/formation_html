<?php

$fichier = "ressources/monfichierdest.txt";

$maChaine = "Hasta la proxima ! \nBella!\n";
file_put_contents($fichier,$maChaine,FILE_APPEND);

//unlink($fichier);
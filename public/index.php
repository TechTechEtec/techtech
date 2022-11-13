<?php

require_once("../vendor/autoload.php"); # Autoload necessário para rodar as bibliotecas de terceiros.
require_once('../app/config/config.php'); # Importando as Constantes 
require_once("../app/functions/dd.php"); # Para usar função de debug na aplicação
require_once("../app/functions/console_log.php"); # Para usar função de console.log
require_once("../app/functions/redirect.php"); # Para usar função de console.log
require_once("../app/service/cURL.php"); # Para usar função de fetch_markdown()

session_start();

new app\core\RouterCore(); # Classe responsável pelo renderização dos arquivos twig.php quando a rota muda

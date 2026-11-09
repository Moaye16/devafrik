<?php

//$debut = microtime(true);

define('WEBROOT', dirname(__FILE__));

define('ROOT', dirname(WEBROOT));

define('DS', DIRECTORY_SEPARATOR);

define('CORE', ROOT.DS.'core');

//define('BASE_URL', dirname($_SERVER['SCRIPT_NAME']));

define('BASE_URL', rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/'));

error_reporting(E_ALL & ~E_DEPRECATED);

require CORE.DS.'includes.php';

new Dispatcher();

?>


<!--div style="position: fixed; bottom: 0; background: #900; color: #fff; line-height: 30px; left:0; right:0; padding-left:10px;">

    <!--?php
    echo 'Page généré en ' .round(microtime(true) - $debut,5).' secondes';
    ?>

</div-->


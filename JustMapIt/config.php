<?php

require_once __DIR__.'/../../../vendor/autoload.php';

use RedBean_Facade as R;

define('REDBEAN_MODEL_PREFIX', 'JustMapIt\Model\\');

R::setup('mysql:host=localhost;dbname=<dbname>', '<dbuser>', '<dbpass>');

<?php

use App\HolaMon;

$model = new HolaMon();

$hola = $model->getString();

?>

<h1> {{$hola}} </h1>
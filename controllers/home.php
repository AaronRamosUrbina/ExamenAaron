<?php

$titulo = 'Bienvenidos';
$contenido = '.....Cuestinario.......';

$pregun = new preguntas();

$variables = array('formulario'=>$pregun->mostrarPreguntas());

view('home',$variables);

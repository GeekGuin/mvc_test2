<?php

$diccionario = array ('Título de la página' => 'MVC en PHP',
					  'keywords' => 'mvc, view, controller, model, php', 
					  'description' => 'El paradigma de la programación orientada a objetos con el patron arquitectónico del MVC');

$template = file_get_contents('index.html');

foreach ($diccionario as $clave=>$valor) 
{
	$template = str_replace('{'.$clave.'}', $valor, $template);
}
print $template;
?>
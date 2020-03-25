<?php

$categorias = [];
$categorias[0] = 'Infantil';
$categorias[1] = 'Adolescente';
$categorias[2] = 'Adulto';
$categorias[3] = 'Idoso';


//print_r($categorias);

$nome = 'Eduardo' ;
$idade = 18;

//var_dump($nome);
//var_dump($idade);

/*if($idade >= 6 && $idade<= 12)
{
	echo "Infantil";
}
else if($idade >= 13 && $idade <= 18)
{
	echo "Adolescente";
}
else
{
	echo "Adulto";
}
*/

if($idade >= 6 && $idade <= 12)
{
	for($i = 0; $i <= count($categorias); $i++)
	{
		if($categorias[$i] == 'Infantil')
			echo "O nadador " . $nome . " compete na categoria Infantil";
	}
}
else if($idade >= 13 && $idade <= 18)
{
	for($i = 0; $i <= count ($categorias); $i++)
	{
		if($categorias[$i] == 'Adolescente')
			echo "O nadador " . $nome . " compete na categoria " .$categorias[$i];
	}
}
else
{
	for($i = 0; $i <= count($categorias); $i++)
	{
		if($categorias[$i] == 'Adulto')
			echo "O nadador " . $nome . " compete na categoria Adulto";
	}
}
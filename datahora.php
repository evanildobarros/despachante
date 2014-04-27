<?php

/*****************************************************
*   Script: Mensagem de saudações com data e hora.   *
*   Desenvolvido por: kenshin@szone2k.org            *
*   Criado em: 03/Novembro/2005                      *
******************************************************
*          TODOS OS DIREITOS RESERVADOS              *
*****************************************************/

/*---------------------------------
     TRADUZ (BR) MESES / DIAS
----------------------------------*/

//Meses
$meses = array(
"January"=>"Janeiro",
"February"=>"Fevereiro",
"March"=>"Março",
"April"=>"Abril",
"May"=>"Maio",
"June"=>"Junho",
"July"=>"Julho",
"August"=>"Agosto",
"September"=>"Setembro",
"October"=>"Outubro",
"November"=>"Novembro",
"December"=>"Dezembro"
);

//Dias
$dias = array(
"Sunday"=>"Domingo",
"Monday"=>"Segunda",
"Tuesday"=>"Terça",
"Wednesday"=>"Quarta",
"Thursday"=>"Quinta",
"Friday"=>"Sexta",
"Saturday"=>"Sábado",
);

/*---------------------------------
         DIA / MES / ANO
----------------------------------*/

//Data usando funçao getdate
$data = getdate();

//Dia
$dia = $data ["weekday"];
$dia2 = $dias [$dia];
$dia3 = date("d");

//Mes
$mes = $data ["month"];
$mes2 = $meses [$mes];

//Ano
$ano = $data ["year"];

/*---------------------------------
     HORA / MINUTOS / SEGUNDOS
----------------------------------*/

//Hora
$hora = date("G");

//Minutos
$minutos = date("i");

//Segundos
$segundos = date("s");

/*---------------------------------
        PARA AS MENSAGENS
----------------------------------*/

//Funcionamento do script, nao alterar
$hora = date("H");

//Mensagem Data e Hora
$msghora = "$hora:$minutos:$segundos";
$mesreferencia = $mes2;

switch ($hora)
{
	case 1:
		$mensagemdodia = "Quando você elimina o impossível, o que sobra por mais incrível que pareça só pode ser a verdade.";
		break;
	case 2:
		$mensagemdodia = "A verdade alivia mais do que machuca. E estará sempre acima de qualquer falsidade como o óleo sobre a água.";
		break;
	case 3:
		$mensagemdodia = "Existem verdades que a gente só pode dizer depois de ter conquistado o direito de dizê-las.";
		break;
	case 4:
		$mensagemdodia = "Não existe o esquecimento total: as pegadas impressas na alma são indestrutíveis.";
		break;
	case 5:
		$mensagemdodia = "Nossos fracassos são, às vezes, mais frutíferos que os êxitos.";
		break;
	case 6:
		$mensagemdodia = "Tudo que uma pessoa pode imaginar, outras podem tornar real.";
		break;
	case 7:
		$mensagemdodia = "O homem nunca encontrou uma definição para a palavra liberdade.";
		break;
	case 8:
		$mensagemdodia = "O futuro pertence aqueles que acreditam na beleza dos seus sonhos.";
		break;
	case 9:
		$mensagemdodia = "A imaginação é mais importante que o conhecimento.";
		break;
	case 10:
		$mensagemdodia = "Mas eu desconfio que a única pessoa livre, realmente livre, é aquela que não tem medo do ridículo.";
		break;
	case 11:
		$mensagemdodia = "Quer a faca caia no melão, ou o melão na faca, o melão vai sofrer...";
		break;
	case 12:
		$mensagemdodia = "Se o mundo é mesmo parecido com o que vejo, prefiro acreditar no mundo do meu jeito...";
		break;
	case 13:
		$mensagemdodia = "A verdade é a fortaleza dos inocentes";
		break;
	case 14:
		$mensagemdodia = "Tudo vale a pena quando a alma não é pequena.";
		break;
	case 15:
		$mensagemdodia = "Falais baixo se falais de amor";
		break;
	case 16:
		$mensagemdodia = "O amor me move: só por ele eu falo";
		break;
	case 17:
		$mensagemdodia = "A ganância é a ruína dos prepotentes";
		break;
	case 18:
		$mensagemdodia = "Quanto maior for a crença em seus objetivos, mais depressa você os conquistará!";
		break;
	case 19:
		$mensagemdodia = "Muita luz é como muita sombra, não nos deixa ver";
		break;
	case 20:
		$mensagemdodia = "Existem muitos motivos para não se amar uma pessoa, mas apenas um para amá-la.";
		break;
	case 21:
		$mensagemdodia = "Felicidade é a certeza de que nossa vida não está se passando inutilmente." ;
		break;
	case 22:
		$mensagemdodia = "Nunca ande pelo caminho traçado, pois ele conduz somente até onde os outros foram.";
		break;
	case 23:
		$mensagemdodia = "Lembre-se de que és tão bom como o que de melhor tiveres feito na vida.";
		break;
	case 24:
		$mensagemdodia = "Acredito firmemente que a única coisa a temer é o próprio medo.";
		break;
	case 0:
		$mensagemdodia = "Nunca a alma humana surge tão forte e nobre como quando renuncia à vingança e ousa perdoar uma ofensa.";
		break;
}
session_register('data'); //logo no inicio do site.
$_SESSION['data']="$dia2, $dia3 de $mes2 de $ano";
session_register('mensagemdodia'); //logo no inicio do site.
$_SESSION['mensagemdodia']="$mensagemdodia";
session_register('mesdiario');
$_SESSION['mesdiario']="$mes2"
?>
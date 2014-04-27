<?php

/*****************************************************
*   Script: Mensagem de sauda��es com data e hora.   *
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
"March"=>"Mar�o",
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
"Tuesday"=>"Ter�a",
"Wednesday"=>"Quarta",
"Thursday"=>"Quinta",
"Friday"=>"Sexta",
"Saturday"=>"S�bado",
);

/*---------------------------------
         DIA / MES / ANO
----------------------------------*/

//Data usando fun�ao getdate
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
		$mensagemdodia = "Quando voc� elimina o imposs�vel, o que sobra por mais incr�vel que pare�a s� pode ser a verdade.";
		break;
	case 2:
		$mensagemdodia = "A verdade alivia mais do que machuca. E estar� sempre acima de qualquer falsidade como o �leo sobre a �gua.";
		break;
	case 3:
		$mensagemdodia = "Existem verdades que a gente s� pode dizer depois de ter conquistado o direito de diz�-las.";
		break;
	case 4:
		$mensagemdodia = "N�o existe o esquecimento total: as pegadas impressas na alma s�o indestrut�veis.";
		break;
	case 5:
		$mensagemdodia = "Nossos fracassos s�o, �s vezes, mais frut�feros que os �xitos.";
		break;
	case 6:
		$mensagemdodia = "Tudo que uma pessoa pode imaginar, outras podem tornar real.";
		break;
	case 7:
		$mensagemdodia = "O homem nunca encontrou uma defini��o para a palavra liberdade.";
		break;
	case 8:
		$mensagemdodia = "O futuro pertence aqueles que acreditam na beleza dos seus sonhos.";
		break;
	case 9:
		$mensagemdodia = "A imagina��o � mais importante que o conhecimento.";
		break;
	case 10:
		$mensagemdodia = "Mas eu desconfio que a �nica pessoa livre, realmente livre, � aquela que n�o tem medo do rid�culo.";
		break;
	case 11:
		$mensagemdodia = "Quer a faca caia no mel�o, ou o mel�o na faca, o mel�o vai sofrer...";
		break;
	case 12:
		$mensagemdodia = "Se o mundo � mesmo parecido com o que vejo, prefiro acreditar no mundo do meu jeito...";
		break;
	case 13:
		$mensagemdodia = "A verdade � a fortaleza dos inocentes";
		break;
	case 14:
		$mensagemdodia = "Tudo vale a pena quando a alma n�o � pequena.";
		break;
	case 15:
		$mensagemdodia = "Falais baixo se falais de amor";
		break;
	case 16:
		$mensagemdodia = "O amor me move: s� por ele eu falo";
		break;
	case 17:
		$mensagemdodia = "A gan�ncia � a ru�na dos prepotentes";
		break;
	case 18:
		$mensagemdodia = "Quanto maior for a cren�a em seus objetivos, mais depressa voc� os conquistar�!";
		break;
	case 19:
		$mensagemdodia = "Muita luz � como muita sombra, n�o nos deixa ver";
		break;
	case 20:
		$mensagemdodia = "Existem muitos motivos para n�o se amar uma pessoa, mas apenas um para am�-la.";
		break;
	case 21:
		$mensagemdodia = "Felicidade � a certeza de que nossa vida n�o est� se passando inutilmente." ;
		break;
	case 22:
		$mensagemdodia = "Nunca ande pelo caminho tra�ado, pois ele conduz somente at� onde os outros foram.";
		break;
	case 23:
		$mensagemdodia = "Lembre-se de que �s t�o bom como o que de melhor tiveres feito na vida.";
		break;
	case 24:
		$mensagemdodia = "Acredito firmemente que a �nica coisa a temer � o pr�prio medo.";
		break;
	case 0:
		$mensagemdodia = "Nunca a alma humana surge t�o forte e nobre como quando renuncia � vingan�a e ousa perdoar uma ofensa.";
		break;
}
session_register('data'); //logo no inicio do site.
$_SESSION['data']="$dia2, $dia3 de $mes2 de $ano";
session_register('mensagemdodia'); //logo no inicio do site.
$_SESSION['mensagemdodia']="$mensagemdodia";
session_register('mesdiario');
$_SESSION['mesdiario']="$mes2"
?>
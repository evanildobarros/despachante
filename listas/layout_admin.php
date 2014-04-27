<?php
	if (!isset($_SESSION)) {
	@session_start();
	}
	$MM_authorizedUsers = "";
	$MM_donotCheckaccess = "true";
	
	// *** Restrict Access To Page: Grant or deny access to this page
	function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
	// For security, start by assuming the visitor is NOT authorized. 
	$isValid = False; 
	
	// When a visitor has logged into this site, the Session variable MM_Username set equal to their username. 
	// Therefore, we know that a user is NOT logged in if that Session variable is blank. 
	if (!empty($UserName)) { 
	// Besides being logged in, you may restrict access to only certain users based on an ID established when they login. 
	// Parse the strings into arrays. 
	$arrUsers = Explode(",", $strUsers); 
	$arrGroups = Explode(",", $strGroups); 
	if (in_array($UserName, $arrUsers)) { 
	$isValid = true; 
	} 
	// Or, you may restrict access to only certain users based on their username. 
	if (in_array($UserGroup, $arrGroups)) { 
	$isValid = true; 
	} 
	if (($strUsers == "") && true) { 
	$isValid = true; 
	} 
	} 
	return $isValid; 
	}
	
	$MM_restrictGoTo = "login.php";
	if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
	$MM_qsChar = "?";
	$MM_referrer = $_SERVER['PHP_SELF'];
	if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
	if (isset($QUERY_STRING) && strlen($QUERY_STRING) > 0) 
	$MM_referrer .= "?" . $QUERY_STRING;
	$MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
	header("Location: ". $MM_restrictGoTo);
	 
	exit;
	

	
	}
	
	require ('../datahora.php');
	?>    
    
    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
	<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<link rel="stylesheet" href="css/layout.css" type="text/css">
	<link rel="stylesheet" href="css/menu_horizontal.css" type="text/css">
	<title>Gerenciador Despachante</title>
	</head>
	
	<body>
	<div class="banner">
	
	<div class="logo"><img width="400" height="60" src="../img/LOGO_CARRO.png"></div>
	<div class="titulo">
	<span class="span1">
	Hoje � <?php echo $_SESSION['data']; ?> <br>
	Usu�rio: <span class="span2"><?php echo $_SESSION['MM_Username']; ?></span><br>
    <span ><a class="span15" href="../logout.php">sair</a></span></div>
	
	
	</div>
	<div class="cont_menu">
	<?php include('menu.php');  ?>
	</div>
	<div class="conteudo">
     <?php include('lista_admin.php');  ?>
    </div>
    
    
	<div class="rodape" align="center"><span class="span"> Mhs Solu��es Web - Endere�o: Rua 03 qd.05 Casa 36  Cohatrac IV<br>
	   Contato: (98) 8800 - 3198 | 8128-6981 Email: eneylton@hotmail.com<br>
	   todos os direitos reservados 2014 &copy;copyright</span></div>
	</body>
	</html>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Gerenciador Despachante</title>
        <meta http-equiv="description" content="" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="css/jmenu.css" type="text/css" />
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery-ui.js"></script>
        <script type="text/javascript" src="js/jMenu.jquery.js"></script>
    </head>
    <body>
       

<ul id="jMenu">
            <li>
                <a>Home</a>
              

            <li>
                <a>Cadastros</a>
                <ul>
                    <li><a>Clientes</a></li>
                    <li><a>Ve&iacute;culos</a></li>
                    <li><a>Placas</a></li>
                    
                </ul>
            </li>

            <li>
                <a>Licenciamento</a>
                <ul>
                    <li><a>Category 4.2</a></li>
                    <li><a>Category 4.2</a></li>
                    <li>
                        <a>Category 4.2</a>
                        <ul>
                            <li><a>Category 4.3</a></li>
                            <li><a>Category 4.3</a></li>
                            <li><a>Category 4.3</a></li>
                            <li><a>Category 4.3</a></li>
                        </ul>
                    </li>
                    <li><a>Category 4.2</a></li>
                </ul>
            </li>

            <li>
                <a>Financeiro</a>
                <ul>
                    <li>
                        <a>Category 5.2</a>
                       
                  </li>
                    <li><a>Category 5.2</a></li>
                    <li><a>Category 5.2</a></li>
                    <li><a>Category 5.2</a></li>
                </ul>
            </li>

            <li><a>Administra&ccedil;&atilde;o</a>
            <ul>
                    <li><a href="layout_admin.php">Consultar Opera&ccedil;&otilde;es</a></li>
                    <li><a>Ve&iacute;culos</a></li>
                    <li><a>Placas</a></li>
                    
                </ul>
            
            </li>

           
        </ul>

        <script type="text/javascript">
            $(document).ready(function() {
                $("#jMenu").jMenu({
                    openClick : false,
                    ulWidth :'auto',
                     TimeBeforeOpening : 100,
                    TimeBeforeClosing : 11,
                    animatedText : false,
                    paddingLeft: 1,
                    effects : {
                        effectSpeedOpen : 150,
                        effectSpeedClose : 150,
                        effectTypeOpen : 'slide',
                        effectTypeClose : 'slide',
                        effectOpen : 'swing',
                        effectClose : 'swing'
                    }

                });
            });
        </script>
    </body>
</html>


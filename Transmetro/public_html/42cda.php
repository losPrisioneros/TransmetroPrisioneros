<?PHP
ini_set('display_errors','On');
    ini_set('display_errors',1);
    header("Content-Type: text/html;charset=utf-8");

session_start();
mysql_connect('localhost', 'root', 'root') ;
mysql_select_db("transmetro")or die ("No se pudo conectar a la base de datos") ;
extract($_POST);
$acentos = mysql_query("SET NAMES 'utf8'");

$query = "SELECT * FROM usuarios WHERE uss='".$usuario."' and pwd='".$pass."' ";

 $result1 = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
                $numrows5 = mysql_num_rows($result1);
                if ($numrows5==0) 
                {
                header("Location: login.php?errorusuario=si");
                }
                else
                {
                $row1 = mysql_fetch_array($result1,MYSQL_ASSOC);
                $usuario1 = $row1["uss"];
                $nombre1 = $row1["nombres"];
                $apellidos = $row1["apellidos"];
                $_SESSION["usuario"] =$usuario; 
                $_SESSION["apellidos"]= $apellidos;
                $_SESSION["nombres"]= $nombre1;
                                               
                header("Location: index.php?entro=si");
                    exit();     
                
                }
?>

<?PHP
ini_set('display_errors','On');
    ini_set('display_errors',1);

session_start();
mysql_connect('mysql16.000webhost.com', 'a4007173_tmdb', 'transmetro1') ;
mysql_select_db("a4007173_tmdb")or die ("No se pudo conectar a la base de datos") ;
extract($_POST);

$query = "SELECT * FROM usuario WHERE codigo='".$usuario."' and pass='".$pass."' ";

 $result1 = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
                $numrows5 = mysql_num_rows($result1);
                if ($numrows5==0) 
                {
                header("Location: login.php?errorusuario=si");
                }
                else
                {
                $row1 = mysql_fetch_array($result1,MYSQL_ASSOC);
                $tipo_usuario1 = $row1["tipo_usuario"];
                $nombre1 = $row1["nombre"];
                $_SESSION["usuario"] =$usuario; 
                $_SESSION["pass"]= $pass;
                
                 
                
                header("Location: main.php");
                    exit();     
                
                }
?>

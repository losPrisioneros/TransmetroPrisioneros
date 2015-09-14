<?PHP

ini_set('display_errors', 'On');
ini_set('display_errors', 1);

function conectarse() {
   /* if (!(*/$conn = mysql_connect('mysql16.000webhost.com', 'a4007173_tmdb', 'transmetro1') ;
            /* )) {*/
      //  ?><!--<script>alert("fallo")</script>--><?PHP
       // echo 'error conectando a la base de datos';
       // exit();
    //}else{
     //   echo 'Conectado con exito';
    //    ?><!-- <script>alert("funciono")</script>--><?PHP
    //}

    echo 'Conectado con exito';
    mysql_select_db("a4007173_tmdb",$conn)or die ("No se pudo conectar a la base de datos") ;
    
    return $conn;
}
?>


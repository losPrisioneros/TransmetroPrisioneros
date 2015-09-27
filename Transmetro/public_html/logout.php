

<?PHP 
session_start();
session_destroy(); 
echo '<script language="javascript">alert("Se ha cerrado su sesión");'
    . 'document.location=("index.php");</script>';
?>

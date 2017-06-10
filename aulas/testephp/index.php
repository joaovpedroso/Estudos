<?php
    function __autoload($class_name){
        require_once 'classes/'. $class_name. '.php';
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Teste De CRUDE com PHP OO</title>
    </head>
    <body>
        <?php
            $livros = new Livros();
            
            if(isset($_POST['cadastrar']));
        ?>
    </body>
</html>

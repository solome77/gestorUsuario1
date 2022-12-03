<!DOCTYPE html>
<html>
<head>
   
    <title>email3</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form action= "correo3.php" method="post">
         <input type="text" placeholder="name" name="name" required="">
         <input type="email" placeholder="email" name="email" required="">
         <input type="text" placeholder="asunto" name="asunto" required="">
         <textarea placeholder="mensaje" name="msg"></textarea>
         <input type="submit" name="enviar">
    </form>
    <?php
    include("correo3.php");
    ?>
</body>
</html>
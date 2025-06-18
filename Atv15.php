<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
    //isset verifica se a variável está vazia
    if(isset($_POST["username"], $_POST["usercat"], $_POST["userpreco"], $_POST["userqtd"])){
        $name = $_POST["username"];
        $categoria = $_POST["usercat"];
        $preco = $_POST["userpreco"];
        $qtd = $_POST["userqtd"];
        echo $name . "<br>";
        echo $categoria . "<br>";
        echo $preco . "<br>";
        echo $qtd . "<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="POST">

            <p>Nome do produto</p>
            <input type="name" id="username" name="username" placeholder="">
            <p>Categoria do produto</p>
            <input type="name" id="usercat" name="usercat" placeholder="">
            <p>Preço do produto</p>
            <input type="number" id="userpreco" name="userpreco" placeholder="">
            <p>Quatidade do produto</p>
            <input type="number" id="userqtd" name="userqtd" placeholder="">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
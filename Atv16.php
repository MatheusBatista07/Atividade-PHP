<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
    if(isset($_POST["username"], $_POST["selectprod"], $_POST["avaliacao"], $_POST["comentario"])){
        $username = $_POST["username"];
        $selectprod = $_POST["avaliacao"];
        $aval = $_POST["avaliacao"];
        $comentario = $_POST["comentario"];
        echo "juhiujhgfeuihe $username . <br>";
        echo $selectprod . "<br>";
        echo $aval . "<br>";
        echo $comentario . "<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
</head>
<body>
    <form method="POST">
        
        <p>Nome do cliente</p>
        <input type="name" id="username" name="username">

        <p>Produto</p>
        <select name="selectprod" id="selectprod">
            <option value="valor1">Carne</option>
            <option value="valor2">Frios</option>
            <option value="valor3">Perecíveis</option>
            <option value="valor4">Não Perecíveis</option>
        </select>

        <p>Avaliação</p>
        <input type="radio" name="avaliacao" id="avaliacao"> 1
        <input type="radio" name="avaliacao" id="avaliacao"> 2
        <input type="radio" name="avaliacao" id="avaliacao"> 3
        <input type="radio" name="avaliacao" id="avaliacao"> 4
        <input type="radio" name="avaliacao" id="avaliacao"> 5

        <p>Comentário</p>
        <textarea name="comentario" id="comentario"></textarea>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

    form{
        display: block;
        height: 20px;
        width: 20px;
        background-color: black;
    }

    input{
        margin-top: 10px;
    }

    body{
    text-align: center;
    display: flex;
    margin-top: 150px;
    margin-left: 600px;
    }

</style>

<body>
    <form action="dadosContato.php" method="POST">
        <input name="txtName" type="text" placeholder="Digite seu nome">
        <input name="txtEmail" type="email" placeholder="Digite seu Email">
        <input name="txtAssunto"type="text" placeholder="Assunto">
        <textarea name="mensagem"> </textarea>
        
        <input type="Submit" value="Enviar">
    </form>
    
</body>
</html>
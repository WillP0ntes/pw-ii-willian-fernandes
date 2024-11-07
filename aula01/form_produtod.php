<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post"> 
        <input name="txtName" type="text" placeholder="Nome do Produto">
        <input name="txtDescricao" type="text" placeholder="Descrição do Produdo">
        <input name="numValor" type="number" placeholder="Valor do Produto">
        <input name="numQuantidade" type="number" placeholder="Quantidade do Produto">
        <input type="submit" value="Enviar">
    </form>    



    <?php
        $nameProduto=$_POST['txtName'];
        $descricaoProduto=$_POST['txtDescricao'];
        $valorProduto=$_POST['numValor'];
        $quantidadeProduto=$_POST['numQuantidade'];

        echo "$nameProduto: ";
    ?>
</body>
</html>
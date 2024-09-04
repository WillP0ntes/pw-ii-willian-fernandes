<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario</title>

        <style>
            body {
                margin: 0;
                display: flex;
                height: 100dvh;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                background-color: #778899;
            }

            div {
                display: flex;
                flex-direction: column;
                background-color: rgb(57, 127, 207);
                width: 200px;
                height: 50px;
                border: 1px solid #000;
                box-shadow: 0 0 5px #000;
            }

            h1 {
                font-family: 'Franklin Gothic Medium', Arial;
            }

            p {
                background-color: whitesmoke;
                border-radius: 5px;
            }

            span {
                font-weight: bold;

            }
        </style>
    </head>
    <body>

    <?php

        $nomeProduto = $_POST['txtProduto'];
        $descricaoProduto = $_POST['txtDescricao'];
        $valorProduto = $_POST['numValor'];
        $quantidadeProduto = $_POST['numQtd'];

        $valorTotal = $valorProduto * $quantidadeProduto;

        if ($valorTotal > 1000) {
            
            $valorDesconto = (10/100) * $valorTotal; 
        }

        else if ($valorTotal <= 1000) {

            $valorDesconto = (5/100) * $valorTotal;
        }

        $totalPagar = $valorTotal - $valorDesconto;

        echo "<h1> Dados do Formulario </h1>";
        echo "<div> <p> Produto: <span>$nomeProduto</span> </p> </div> \n" ;
        echo "<div><p> Descrição: <span>$descricaoProduto</span> </p> </div> \n";
        echo "<div><p> Valor do Produto: <span>$valorProduto</span> </p> </div> \n";
        echo "<div><p> Quantidade do Produto: <span>$quantidadeProduto</span> </p> </div> \n";
        echo "<div><p> Valor Total: <span>$valorTotal</span> </p> </div> \n";
        echo "<div><p> Valor a Pagar: <span>$totalPagar</span> </p> </div>";

    ?>

    </body>
</html>
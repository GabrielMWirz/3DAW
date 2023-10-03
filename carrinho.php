<?php
    $id="";
    $produto="";
    $preco="";
    $quant="";
    $total = "";
    $x = 1;

    $produtos = fopen("produtos.txt", "r") or die ("erro ao abrir arquivo");
    $linhas[] = fgets($produtos);
?>


<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Carrinho</title>
    </head>

    <body>
        <h1>Carrinho de compras: </h1>
        <table>
        <tr>
            <th>ID</th>
            <th>PRODUTO</th>
            <th>PREÇO</th>
            <th>QUANTIDADE</th>
        </tr>
<?php

    while (!feof($produtos))
            {
                $linhas[] = fgets($produtos);
                $dados = explode(";", $linhas[$x]);
                $id = $dados[0];
                $produto = $dados[1];
                $preco = $dados[2];
                $quant = $dados[3];
            }
?>

        <tr>
            <td><?php echo $id?></td>
            <td><?php echo $produto?></td>
            <td><?php echo $preco?></td>
            <td><?php echo $quant?></td>
        </tr>

<?php
    fclose ($produtos);
?>
     </table>

</html>

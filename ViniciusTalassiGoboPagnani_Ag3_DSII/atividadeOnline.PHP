<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade Online - Resultado</title>
</head>
<body>
    <div>
        <h2>Dados Recebidos</h2>
        <?php
        // Verifica se o formulário foi submetido
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Recebe os dados do formulário
            $nome = $_POST["txtNome"];
            $valorCompra = $_POST["txtValorCompra"];
            $formaPagamento = $_POST["cmbPag"];

            // Exibe os dados recebidos
            echo "<p><strong>Nome do Cliente:</strong> $nome</p>";
            echo "<p><strong>Valor da Compra:</strong> R$ $valorCompra</p>";
            echo "<p><strong>Forma de Pagamento:</strong> $formaPagamento</p>";
        } else {
            echo "<p>Nenhum dado recebido.</p>";
        }
        ?>
    </div>
</body>
</html>

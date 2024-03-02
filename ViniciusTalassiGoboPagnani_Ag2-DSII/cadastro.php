<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Armazenar os dados em variáveis
    $nome = $_POST['txtNome'];
    $sobrenome = $_POST['txtSobrenome'];
    $email = $_POST['txtEmail'];
    $formacao = $_POST['txtFormacao'];
    $ultimoEmprego = $_POST['txtEmprego'];

    // Exibir a mensagem de confirmação e os dados cadastrados
    echo "<div class='container'>";
    echo "<h2>Cadastro Confirmado com sucesso!</h2>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Sobrenome:</strong> $sobrenome</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Formação:</strong> $formacao</p>";
    echo "<p><strong>Descrição Último Emprego:</strong> $ultimoEmprego</p>";
    echo "</div>";
} else {
    // Se não houver envio do formulário, exibir o formulário
    echo "<h2>Cadastro</h2>";
            echo "<form method='post' action='cadastro.php'>";
            echo "<label for='txtNome'>Nome</label>";
            echo "<input id='txtNome' name='txtNome' type='text'>";
            echo "<label for='txtSobrenome'>Sobrenome</label>";
            echo "<input id='txtSobrenome' name='txtSobrenome' type='text'>";
            echo "<label for='txtEmail'>Email</label>";
            echo "<input id='txtEmail' name='txtEmail' type='text'>";
            echo "<label for='txtFormacao'>Formação</label>";
            echo "<input id='txtFormacao' name='txtFormacao' type='text'>";
            echo "<label for='txtEmprego'>Descrição Último Emprego</label>";
            echo "<input id='txtEmprego' name='txtEmprego' type='text'>";
            echo "<button type='submit'>Enviar</button>";
            echo "</form>";
}
?>

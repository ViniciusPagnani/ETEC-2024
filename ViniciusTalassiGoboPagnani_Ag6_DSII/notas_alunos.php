<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "pwii";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Consulta SQL
$sql = "SELECT nome, nota1, nota2, nota3, nota4 FROM alunoconcluinte";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Saída dos dados de cada linha
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["nome"]."</td>
                <td>".$row["nota1"]."</td>
                <td>".$row["nota2"]."</td>
                <td>".$row["nota3"]."</td>
                <td>".$row["nota4"]."</td>
              </tr>";
    }
} else {
    echo "0 resultados";
}
$conn->close();
?>

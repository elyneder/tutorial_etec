<?php
require_once("conn.php");
$dados_alunos = mysqli_query($mysqli, "SELECT * from alunos");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula</title>
</head>
<body>
    <h1>Lista dos dados do Banco de dados</h1>
    <table width='70%' border=1>
    <tr>
        <td><strong>Id do Aluno</strong></td>
        <td><strong>Nome do Aluno</strong></td>
        <td><strong>Idade do Aluno</strong></td>
        <td><strong>Foto do Aluno</strong></td>    
    </tr>
    <?php
    while($resultado = mysqli_fetch_assoc($dados_alunos)){
        echo "<tr>";
        echo "<td>".$resultado['id_aluno']."</td>";
        echo "<td>".$resultado['nome_aluno']."</td>";
        echo "<td>".$resultado['idade_aluno']."</td>";

        $caminhoimagem = "img/" . $resultado['foto_aluno'];
        echo "<td><img src='$caminhoimagem' width='40' heigth='40'></td>";
        echo "</tr>";
    }
    ?>
    </table>


</body>
</html>
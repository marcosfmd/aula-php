<?php
    include './aula02/lib//listar.php';
    $alunos = listaAlunos();
    $aluno = $alunos[3];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    <header>
        <a href="/">Home</a>
        <a href="/listaAluno.php">Alunos</a>
    </header>

    <main>
        Olá
        <ul>
            <?php
                echo '<p>'. $aluno .'</p>'
            ?>
        </ul>
    </main>
    
</body>
</html>


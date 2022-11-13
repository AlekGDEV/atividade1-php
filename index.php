<?php
    include('./config.php');
    $get = 'SELECT * FROM alunos ORDER BY matricula';
    $res_get = $connection->query($get);
?>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<div class="container-fluid mt-5">
    <h1 class="text-center">Alunos</h1>
    <div class="d-flex justify-content-end">
        <a href="add.php" class="btn btn-outline-success me-2">Adicionar</a>
        <a href="" class="btn btn-outline-danger ">Sair</a>
    </div>
    <hr>
    <table class="table table-stripped table-hover text-center">
        <thead class="table-dark">
            <th>ID</th>
            <th>Nome</th>
            <th>Matricula</th>
            <th>Cidade</th>
        </thead>
        <tbody class="table-danger">
            <?php
                foreach($res_get as $eachAluno){
                    echo '
                    <tr>
                        <td>'. $eachAluno['idalunos'] .'</td>
                        <td>'. $eachAluno['nome'] .'</td>
                        <td>'. $eachAluno['matricula'] .'</td>
                        <td>'. $eachAluno['cidade'] .'</td> 
                    </tr>';
                }
            ?>
        </tbody>
    </table>
</div>


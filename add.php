<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<body style='background-color: #666'>
    <div class="container mt-5">
        <div class="d-flex flex-column align-items-center">
            <h1 class="text-light m-auto">Formulario de cadastro do aluno</h1>
            <hr class="text-light w-50 mb-2">
        </div>
        <form action="add.php" method="POST">
            <div class="d-flex flex-column justify-content-center align-items-center m-auto h-50 w-50 bg-dark rounded">
                <label for="nome" class="text-light">Nome: </label>
                <input name="valor_nome" id="nome" type="text" class="form-control bg-light text-start w-75" placeholder="Exemplo: André" required>
        
                <label for="matricula" class="text-light mt-3">Matricula: </label>
                <input name="valor_matricula" id="matricula" type="number" class="form-control bg-light text-start w-75" placeholder="Exemplo: 99" required>
        
                <label for="cidade" class="text-light mt-3">Cidade: </label>
                <input name="valor_cidade" id="cidade" type="text" class="form-control bg-light text-start w-75" placeholder="Exemplo: Fortaleza" required>
    
                <input type="submit" class="btn btn-outline-success text-light mt-3 w-75" placeholder="Enviar">
            </div>
        </form>
        <div class="d-flex justify-content-center">
            <a href="/" class="btn btn-outline-light mt-2 w-50">Voltar ao inicio</a>
        </div>
    </div>
    <?php error_reporting(0);
        include('./config.php');
            $nome = $_POST['valor_nome'];
            $matricula = $_POST['valor_matricula'];
            $cidade = $_POST['valor_cidade'];
            $post = "INSERT INTO `ativ1`.`alunos` (`nome`, `matricula`, `cidade`) VALUES ('{$nome}','{$matricula}','{$cidade}');";
            mysqli_query($connection, $post);
    ?>
</body>
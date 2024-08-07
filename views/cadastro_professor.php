<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/logo-proz.ico" type="image/x-icon">
    <title>Cadastro</title>
    <link rel="stylesheet" href="estilo/cad.css">
</head>
<body>
    <div class="box">
        <div class="img-box">
            <a href="index.php"><img src="../views/imagens/proz.png"></a>
        </div>
        <div class="form-box">
            <h2><a href="index.php">Início</a>
            <form  action="cadastro_professor_action.php" method="post">
                <div class="input-group">
                    <label for="Departamento">Nome</label>
                    <input type="text" id="nome" name="nome" placeholder="Digite o seu Nome" required>
                </div>

                <div class="input-group">
                    <label for="Salário Base">E-mail</label>
                    <input type="int" id="salario" name="email" placeholder="Digite o seu E-mail" required>
                </div>


                <div class="input-group">
                    <label for="Departamento">Departamento</label>
                    <input type="text" id="nome" name="departamento" placeholder="Digite o seu Departamento" required>
                </div>

                <div class="input-group">
                    <label for="Salário Base">Salário Base</label>
                    <input type="int" id="salario" name="salario_base" placeholder="Digite o seu Salário" required>
                </div>

                <div class="input-group w50">
                    <label for="senha">Benefícios</label>
                    <input type="int" id="benefincios" name="beneficios" placeholder="Digite seus benefícios" required>
                </div>

                <div class="input-group w50">
                    <label for="Descontos">Descontos</label>
                    <input type="int" id="Descontos" name="descontos" placeholder="Descontos" required>
                </div>

                <div class="input-group">
                    <button>Adicionar Professor</button>
                </div>

            </form>
        </div>
    </div>
</body>
</html>
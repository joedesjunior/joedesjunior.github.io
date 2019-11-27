<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<style>
    input[type=number] {
        width: 300px;
        margin: 5px auto;
        text-align: center;
        padding: 20px;
    }

    input[type=submit] {
        width: 300px;
        margin: 5px auto;
        text-align: center;
        padding: 20px;
    }
</style>

<body>
    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <h5 class="text-white h4">GX2 Tecnologia</h5>
                <span class="text-muted">Trabalho Técnico</span>
            </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>

    <main>
        <div class="container">
            <div class="row my-5">
                <div class="col">
                    <h1 class="text-center border border-danger">Trabalho Técnico</h1>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <h4>Por favor, selecione o exercício que deseja</h4>
                </div>
            </div>
            <div class="row">
                <div class="col my-4 mx-8">
                    <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">Exercício 01 - Somar</button>
                </div>
                <div class="col my-4 mx-8">
                    <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">Exercício 02 - Subtrair</button>
                </div>
                <div class="col my-4 mx-8">
                    <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3">Exercício 03 - Multiplicar</button>
                </div>
                <div class="col my-4 mx-8">
                    <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample4">Exercício 04 - Dividir</button>
                </div>
            </div>
        </div>

        <div class="collapse text-center" id="collapseExample1">
            <div class="card card-body">
                <h2>Realizar a Soma</h2>
                <p>Somar dois valores digitados pelo usuário. O Após receber os dois valores o programa deverá validar se o usuário<p> digitou
                        dois números válidos, se forem válidos o programa deverá somá-los e mostrar
                        o resultado, caso contrário deverá mostrar uma mensagem de Erro.</p>
                    <form action="exercicioSOMAR.php" method="POST">
                        <div class="form-group col-3 txt-center">
                            <label for="exampleInputEmail1">Informe o primeiro número</label>
                            <input type="number" class="form-control" id="somaA" name="somaA" placeholder="Informe primeiro número" required>
                        </div>
                        <div class="form-group col-3">
                            <label for="exampleInputPassword1">Informe o segundo número</label>
                            <input type="number" class="form-control" id="somaB" name="somaB" placeholder="Informe segundo número" required>
                        </div>
                        <button type="submit" class="btn btn-success">Consulta Resposta</button>
                        <button type="reset" class="btn btn-success">Apagar Resposta</button>
                    </form>
            </div>
        </div>


        <div class="collapse text-center" id="collapseExample2">
            <div class="card card-body">
                <h2>Realizar a Subtração</h2>
                <p>Subtrair dois valores digitados pelo usuário.
                    o Após receber os dois valores o programa deverá validar se o usuário digitou
                    dois números válidos, se forem válidos o programa deverá subtrai-los e
                    mostrar o resultado, caso contrário deverá mostrar uma mensagem de Erro.</p>
                <form action="exercicioSUBTRACAO.php" method="POST">
                    <div class="form-group col-3 txt-center">
                        <label for="exampleInputEmail1">Informe o primeiro número</label>
                        <input type="number" class="form-control" id="subA" name="subA" placeholder="Informe primeiro número" required>
                    </div>
                    <div class="form-group col-3">
                        <label for="exampleInputPassword1">Informe o segundo número</label>
                        <input type="number" class="form-control" id="subB" name="subB" placeholder="Informe segundo número" required>
                    </div>
                    <button type="submit" class="btn btn-success">Consulta Resposta</button>
                    <button type="reset" class="btn btn-success">Apagar Resposta</button>
                </form>
            </div>
        </div>

        <div class="collapse text-center" id="collapseExample3">
            <div class="card card-body">
                <h2>Realizar a Multiplicação</h2>
                <p>Multiplicar dois valores digitados pelo usuário.
                    o Após receber os dois valores o programa deverá validar se o usuário digitou
                    dois números válidos, se forem válidos o programa deverá multiplicá-los e
                    mostrar o resultado, caso contrário deverá mostrar uma mensagem de Erro.</p>
                <form action="exercicioMULTIPLICACAO.php" method="POST">
                    <div class="form-group col-3 txt-center">
                        <label for="exampleInputEmail1">Informe o primeiro número</label>
                        <input type="number" class="form-control" id="multiplicacaoA" name="multiplicacaoA" placeholder="Informe primeiro número" required>
                    </div>
                    <div class="form-group col-3">
                        <label for="exampleInputPassword1">Informe o segundo número</label>
                        <input type="number" class="form-control" id="multiplicacaoB" name="multiplicacaoB" placeholder="Informe segundo número" required>
                    </div>
                    <button type="submit" class="btn btn-success">Consulta Resposta</button>
                    <button type="reset" class="btn btn-success">Apagar Resposta</button>
                </form>
            </div>
        </div>

        <div class="collapse text-center" id="collapseExample4">
            <div class="card card-body">
                <h2>Realizar a Divisão</h2>
                <p>Dividir dois valores digitados pelo usuário.
                    o Se o usuário informar o número ZERO, o programa deverá retornar uma
                    mensagem de Erro e solicitar que o usuário digite novamente.
                    o Após receber os dois valores o programa deverá validar se o usuário digitou
                    dois números válidos, se forem válidos o programa deverá dividi-los e mostrar
                    o resultado, caso contrário deverá mostrar uma mensagem de Erro.</p>
                <form action="exercicioDIVISAO.php" method="POST">
                    <div class="form-group col-3 txt-center">
                        <label for="exampleInputEmail1">Informe o primeiro número</label>
                        <input type="number" class="form-control" id="divisaoA" name="divisaoA" placeholder="Informe primeiro número" required>
                    </div>
                    <div class="form-group col-3">
                        <label for="exampleInputPassword1">Informe o segundo número</label>
                        <input type="number" class="form-control" id="divisaoB" name="divisaoB" placeholder="Informe segundo número" required>
                    </div>
                    <button type="submit" class="btn btn-success">Consulta Resposta</button>
                    <button type="reset" class="btn btn-success">Apagar Resposta</button>
                </form>
            </div>
        </div>
    </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
</body>

</html>
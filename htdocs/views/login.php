<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<html lang="pt-br">
<style>
</style>
<head>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script type="text/javascript" src="../public/javascript/script.js"></script>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
    <header>        
        <h1 style="margin-top:2%; margin-left: 45%;margin-bottom:2%" >Login</h1>
    </header>
    <main >
        <div style = "background-color:#6b6b6b; border-radius: 2%; width:50%"  class="container-sm">
            <form  action="../routers/userRouter.php" method="post" onsubmit="return validateLogin(event);">
                <label class="form-label" for="email" style="font-family:sans;font-weight: bold;font-size:125%" >E-mail</label>
                <br>
                <input class="form-control" type="email" name="email" id="email" required>
                <br>
                <label class="form-label" for="password"style="font-family:sans;font-weight: bold;font-size: 125%;">Senha</label>
                <br>
                <input class="form-control" type="password" name="password" id="password" required>
                <br>
                <br>
                <input type="hidden" name="rota" id="rota" value="login">
                <input class="btn btn-primary" type="submit" value="login" style="width: 30%;margin-left: 35%;cursor: pointer;font-family:sans;" >
            </form>
            <br>
            <a class="btn btn-link" href="./newUser.php" style="margin-left:81%;margin-bottom:2%;font-family:sans;" >Cadastre-se</a>
        </div>
    </main>
</body>
</html>
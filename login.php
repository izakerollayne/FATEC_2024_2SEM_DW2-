<?php
 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    if($_POST['username'] == 'coordenacao' and $_POST['senha'] == 'coordenacao'){
        $_SESSION["username"] = "coordenacao";
        $_SESSION['loggedin'] = TRUE;
         header("location: welcome.php");
    } else if($_POST['username'] == 'tecnicos' and $_POST['senha'] == 'tecnicos'){
        $_SESSION['loggedin'] = TRUE;
         header("location: welcome.php");
         $_SESSION["username"] = "coordenacao";
        
    } else {
        $_SESSION['loggedin'] = FALSE;
    }
}
?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Solicitações</h2>
        <p>Favor inserir login e senha.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>login</label>
                <input type="text" name="username" class="form-control" value="coordenacao">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>senha</label>
                <input type="password" name="senha" class="form-control" value="coordenacao">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Acessar">
            </div>
        </form>
    </div>    
</body>
</html>
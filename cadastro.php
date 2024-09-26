<?php
 
 session_start();

 if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
     header("location: index.php");
     exit;
 }else if($_SESSION["username"]!=="coordenacao"){
    header("location: index.php");
    exit;
 }
 

 if($_SERVER["REQUEST_METHOD"] == "POST"){
   $_SESSION["lab"] = $_POST["lab"];
   $_SESSION["solic"] = $_POST["solic"];
   $_SESSION["data"] = $_POST["data"];
   $_SESSION["curso"] = $_POST["curso"];

if ($_SESSION["curso"]=="DSM"){
   $filename = "dsm.txt";
   if(!file_exists("dsm.txt")){
       $handle = fopen("dsm.txt", "w");
   } else {
       $handle = fopen("dsm.txt", "a");
   }
   
   fwrite($handle,  $_SESSION["lab"]."|".$_SESSION["solic"]."|".$_SESSION["data"]."|".$_SESSION["curso"].PHP_EOL);
   fflush($handle);
   fclose($handle);
   
}else{
        $filename = "ge.txt";
        if(!file_exists("ge.txt")){
            $handle = fopen("ge.txt", "w");
        } else {
            $handle = fopen("ge.txt", "a");
        }
        
        fwrite($handle, $_SESSION['lab']."|".$_SESSION['solic']."|".$_SESSION['data']."|".$_SESSION['curso'].PHP_EOL);
        fflush($handle);
        fclose($handle);
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
<body STYLE="MARGIN-LEFT:10PX">
    <div class="wrapper">
        <h2>Solicitações</h2>
        <h5>Selecione o laboratório:</h5>
    </div>
  
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="col-md">
    <div class="form-floating">
    <label>Selecione o laboratório</label>
      <select class="form-select" name="lab" id="floatingSelectGrid">

        <option value="laboratorio 1">laboratório 1</option>
        <option value="laboratorio 2">laboratório 2</option>
        <option value="laboratorio 3">laboratório 3</option>
      </select>
    </div>

    <div>
        <label>Prazo limite</label>
        <input type="date" name="data" >
    </div>
     
    <div>
    <label>Solicitação</label>
        <input type="text" name="solic" >
    </div>

    <div class="col-md">
    <div class="form-floating">
    <label>Curso atendido</label>
      <select class="form-select" name="curso" id="floatingSelectGrid">

        <option value="DSM">DSM</option>
        <option value="GE">GE</option>
      </select>
    </div>
    <div STYLE="MARGIN-top:10PX">
        
        <input type="submit" value="acessar">


    </div>

</div>
</form>   
</body>
</html>
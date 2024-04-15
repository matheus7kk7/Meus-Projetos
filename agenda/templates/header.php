<?php include_once ("helpers/url.php") ?>
<?php include_once ("classes/database.php") ;?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=$BASE_URL?>css/reset.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous">

    <link rel="stylesheet" href="<?=$BASE_URL?>css/styles.css">
</head>
<body>
    
 <header>  
 <img src="<?=$BASE_URL?>imagens/agenda.png" alt="agenda" width="30" heigth="30" id="img-logo">

<nav id ="navbar">

 <div class="nav">
<ul> 
<a href="index.php" class="nav-li">
    <li>   Agenda </li>  
</a>
<a href="contatos.php" class="nav-li">
    <li>   Listar </li>  
</a>
<a href="cadastro.php" class="nav-li">
    <li>   Cadastro  </li>  
</a>
<a href="excluir.php" class="nav-li">
    <li>   Excluir</li>  
</a>

    
    </ul>
</div>
</nav>
</header>


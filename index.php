<?php
    include("api/functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>AJAX-PHP</title>
    <link rel="shortcut icon" href="assets/img/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
    <div class="d-flex justify-content-center align-items-center mt-5 ms-3 me-3">
        <h3 class="me-3">Pratos <br> muito <br> bonitinhos! <br> 🍔🍣🍽🥗</h3>
        <form action="" method="post" id="form">
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Nome do prato: </span>
                <input type="text" class="form-control" id="prato" aria-label="Sizing example input"
                       aria-describedby="inputGroup-sizing-sm">
            </div>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Preço:</span>
                <input type="text" class="form-control" id="preco" aria-label="Sizing example input"
                       aria-describedby="inputGroup-sizing-sm">
                <span class="input-group-text">€</span>
            </div>
            <input type="submit" class="btn-sm border rounded-3 btn-dark mt-1 text-xs float-end" id="submit"
                   value="Adicionar prato!">
        </form>
    </div>
    <hr>
    
    <div class="text-center">
        <?php selectPratos(); ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="assets/index.js"></script>

</body>
</html>
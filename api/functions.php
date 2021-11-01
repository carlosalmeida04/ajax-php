<?php


function selectPratos(){
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbDatabase = "ajax-php";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbDatabase);

    $sPratos = "SELECT * FROM pratos";
    $rPratos = mysqli_query($conn, $sPratos);

    if(mysqli_num_rows($rPratos) > 0){
        echo '<h3 class="text-center mt-3">Todos os pratos na base de dados!</h3>';
        if(mysqli_num_rows($rPratos) == 1){
            while($rows = mysqli_fetch_assoc($rPratos)){
                echo "<b>🍽:</b> " . $rows['nome'] .
                    "<br><b>Preço:</b> " . $rows['preco'];
            }
        }else{
            $i = 1;
            while($rows = mysqli_fetch_assoc($rPratos)){
                echo "<h4>🍔 ". $i ."</h4>";
                echo "<b>🍽:</b> " . $rows['nome'] .
                     "<br><b>💶:</b> " . $rows['preco'];
                echo "<hr>";
                $i++;
            }
        }
    }else {
        echo '<h3 class="text-center mt-3">Ainda não temos pratos registados na nossa base de dados! 😢</h3>';
    }
    mysqli_close($conn);
}
function insertPratos($prato, $preco){
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbDatabase = "ajax-php";


    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbDatabase);
    $iPratos = "INSERT INTO pratos (nome, preco) VALUES ('$prato', '$preco')";
    $rIpratos = mysqli_query($conn, $iPratos);
    $res = array("Inserido com sucesso!","Prato: $prato", "Preço: $preco", "Status: 200");
    echo json_encode($res, JSON_NUMERIC_CHECK);
    mysqli_close($conn);
}


if(isset($_POST['function']) && isset($_POST['function']) == "insertPratos"){

    $prato = $_POST['pratoP'];
    $preco = $_POST['precoP'];

    insertPratos($prato, $preco);
}




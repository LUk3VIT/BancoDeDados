<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part 2</title>
</head>
<body>
    <h1>FOIIIIII</h1>


    <?php

    include 'src/Repositorio.php';
    $repositorio = new Repositorio();

    ?>


    <p> 
        <?php 
            
            $repositorio->exibirDados();

            $nome = "Lucas";
            
            


            /*if ($result > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "id: " . $row["id_usuario"]. " - Name: " . $row["nome"]. " - Email: " . $row["email"] . " - Senha:" . $row["senha"] ."<br>";
                }
            } else {
                echo "0 results";
            }*/
    
        ?> 
    </p>


</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Estilo.css">
    <title>Tabla de multiplicar</title>
</head>
<body>
    <div class="EntradaDatos">
        <form method="post">
            Ingrese el numero: 
            <input type="text" name="txtNumero" placeholder="0 - 10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" title="Solo numeros" class="txtNumero"><br><br>
            <input type="submit" name="btnCalcular" value="Calcular" class="btnCalcular"><br><br>
        </form>
    </div>

    <div class="Resultados">
        <?php if(isset($_POST["btnCalcular"]) && !empty($_POST["txtNumero"]) && $_POST["txtNumero"] < 11) { ?>
        <h1>Tabla del <?php echo $_POST["txtNumero"] ?></h1>
        <div style="margin-left: 15%;">
            <?php

                for($i = 1; $i < 11; $i++)
                {
                    echo $_POST["txtNumero"]. " x " .$i. " = " . ($_POST["txtNumero"] * $i. "<br>");
                }
            ?>
        </div>
        <?php
        }
        else
        {
            echo "Ingrese un numero entre el 1 y el 10, por favor";
        }
        ?>



    </div>
</body>
</html>
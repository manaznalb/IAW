<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Q4 - Actividad 1</title>
    <style>
        table{
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
        }
        th, td{
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        .nulo{
            background: #000;
        }
        .filcol{
            background-color: #d5d5d5
        }
        .filapar{
            background-color: #F592F1;
        }
        .filaimpar{
            background-color: #F5BAF2;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Q4 - Actividad 1</h1>
    <table>
        <tr>
            <!-- Primera casilla vacía -->
            <td class="nulo"></td>
            <?php
            // Columnas con los valores del 50 al 60, incluido 60
            for ($num = 50; $num <= 60; $num++) {
                echo "<td class='filcol'>$num</td>";
            }
            ?>
        </tr>
        <?php
        // Divisores, si es menor o igual que 60, haz el bucle
        for ($divisor = 1; $divisor <= 60; $divisor++) {
            //Color de la fila según sea par o impar
            $paridad = ($divisor % 2);
            if ($paridad == 0) {
                echo "<tr class='filapar'>";
            } else {
                echo "<tr class='filaimpar'>";
            }
            // Primera columna con el divisor
            echo "<td class='filcol'>$divisor</td>";
            // Filas con "ok" si es divisible o con "-" si no es divisible
            // Repetimos el bucle anterior para tener las operaciones sobre las mismas casillas
            for ($num = 50; $num <= 60; $num++) {
                if (($num % $divisor) == 0) {
                    echo "<td>ok</td>";
                } else {
                    echo "<td>-</td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
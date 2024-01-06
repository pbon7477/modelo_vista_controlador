<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <section class="caja">
        <h2>Datos Usuarios:</h2>
        <br>


        <table>
            <tr>
                <th class="id_table">id</th>
                <th>nombre</th>
                <th>apellido</th>
                <th>dirección</th>
            </tr>

            <?php
            foreach ($matrizUsuarios as $reg) {
                echo "<tr>";
                echo "<td>" . $reg["id"] . "</td>";
                echo "<td>" . $reg["nombre"] . "</td>";
                echo "<td>" . $reg["apellido"] . "</td>";
                echo "<td>" . $reg["direccion"] . "</td>";
                echo "</tr>";
            }

            ?>
        </table>
    </section>
</body>

</html>
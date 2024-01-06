<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section class="caja">
        <h2>Usuarios</h2>
        <br>

        <table>
            <tr>
                <th class="id_table">id</th>
                <th>usuario</th>
                <th>password</th>
            </tr>

            <?php
            foreach ($matrizUsuarios as $reg) {
                echo "<tr>";
                echo "<td>" . $reg["ID"] . "</td>";
                echo "<td>" . $reg["USUARIO"] . "</td>";
                echo "<td>" . $reg["PASSWORD"] . "</td>";
                echo "</tr>";
            }

            ?>
        </table>

    </section>

</body>

</html>
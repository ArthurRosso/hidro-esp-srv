<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Informações do hidrômetro</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

<div class="container">
                    <?php


                    // Error handling
                    ini_set('display_errors', 1);
                    ini_set('display_startup_errors', 1);
                    error_reporting(E_ALL);


                    // Include config file
                    require_once("config.php");

                    $var = $_COOKIE['mac'];
                    $sql = "SELECT * FROM MEDICAO WHERE mac = '$var';";
                    if ($result = pg_query($link, $sql)) {
                        if (pg_num_rows($result) > 0) {
                            echo "<table class='highlight centered responsive-table'>";
                            echo "<thead>";
                            echo "<tr>";
                            echo "<th>id</th>";
                            echo "<th>Litros</th>";
                            echo "<th>Hora</th>";
                            echo "<th>Data</th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while ($row = pg_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['_id'] . "</td>";
                                echo "<td>" . $row['litros'] . "</td>";
                                echo "<td>" . $row['hora'] . "</td>";
                                echo "<td>" . $row['dia'] . "</td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";
                            echo "</table>";

                            pg_free_result($result);
                        } else {
                            echo "<p><em>No records were found.</em></p>";
                        }
                    } else {
                        echo "ERROR: Could not able to execute $sql. ";
                    }

                    // Close connection
                    pg_close($link);
                    ?>
    </div>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>
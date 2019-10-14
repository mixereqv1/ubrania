<?php
    include_once('connect.php');include_once('functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="klienci.min.css">
</head>
<body>
    
    <div class="container">
        <header class="header">Klienci</header>
        <main class="main">
            <table>
                <tr>
                    <th>Imię</th>
                    <th>Nazwisko</th>
                    <th>Data urodzenia</th>
                    <th>Kraj</th>
                </tr>
                <?php
                    $sql = "SELECT * FROM klienci";
                    $query = $mysqli -> query($sql);
                    while($row = $query -> fetch_assoc()) {
                        echo '<tr>';
                        echo '<td>'.$row['imie'].'</td><td>'.$row['nazwisko'].'</td><td>'.$row['data_urodzenia'].'</td><td>'.$row['kraj'].'</td>';
                        echo '</tr>';
                    }
                ?>
            </table>
        </main>
        <footer class="footer"><?php createMenu(); ?></footer>
        <div class="left"></div>
    </div>

</body>
</html>
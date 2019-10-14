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
    <link rel="stylesheet" href="produkty.min.css">
</head>
<body>
    
    <div class="container">
        <header class="header">Produkty</header>
        <div class="right"></div>
        <main class="main">
            <table>
                <tr>
                    <th>Nazwa</th>
                    <th>Cena</th>
                </tr>
                <?php
                    $sql = "SELECT * FROM produkty";
                    $query = $mysqli -> query($sql);
                    while($row = $query -> fetch_assoc()) {
                        echo '<tr>';
                        echo '<td>'.$row['nazwa'].'</td><td>'.$row['koszt'].' zł</td>';
                        echo '</tr>';
                    }
                ?>
            </table>
        </main>
        <footer class="footer">
            <?php createMenu(); ?>
        </footer>
    </div>

</body>
</html>
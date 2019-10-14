<?php
    include_once('connect.php');
    include_once('functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="index.min.css">
</head>
<body>
    
    <div class="container">
        <header class="header">Strona główna</header>
        <div class="left"><?php createMenu(); ?></div>
        <main class="main">
            <table>
                <tr>
                    <th>Data zamówienia</th>
                    <th>Imię klienta</th>
                    <th>Nazwisko klienta</th>
                </tr>
                <?php
                    $sql = "SELECT * FROM zamowienia,klienci WHERE zamowienia.id_klient = klienci.id_klient";
                    $query = $mysqli -> query($sql);
                    while($row = $query -> fetch_assoc()) {
                        echo '<tr>';
                        echo '<td>'.$row['data'].'</td><td>'.$row['imie'].'</td><td>'.$row['nazwisko'].'</td>';
                        echo '</tr>';
                    }
                ?>
            </table>
        </main>
        <footer class="footer"></footer>
    </div>

</body>
</html>
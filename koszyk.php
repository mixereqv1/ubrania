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
    <link rel="stylesheet" href="koszyk.min.css">
</head>
<body>
    
    <div class="container">
        <header class="header">Koszyk</header>
        <main class="main">
            <table>
                <tr>
                    <th>Imię klienta</th>
                    <th>Nazwisko klienta</th>
                    <th>Data zamówienia</th>
                    <th>Produkt</th>
                    <th>Ilość</th>
                    <th>Cena</th>
                </tr>

                <?php
                    $sql = "SELECT * FROM koszyk,klienci,produkty,zamowienia 
                    WHERE koszyk.id_zamowienie = zamowienia.id_zamowienie 
                    AND klienci.id_klient = zamowienia.id_klient 
                    AND koszyk.id_produkt = produkty.id_produkt";
                    $query = $mysqli -> query($sql);
                    while($row = $query -> fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row['imie'] ?></td>
                    <td><?php echo $row['nazwisko'] ?></td>
                    <td><?php echo $row['data'] ?></td>
                    <td><?php echo $row['nazwa'] ?></td>
                    <td><?php echo $row['ilosc'] ?></td>
                    <td><?php echo $row['ilosc'] * $row['koszt'] ?></td>
                </tr>
                <?php } ?>
            </table>
        </main>
        <footer class="footer">
        <?php createMenu(); ?>
        </footer>
    </div>

</body>
</html>
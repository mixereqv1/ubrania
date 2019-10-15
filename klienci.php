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
                ?>
                <tr>
                    <td><?php echo $row['imie'] ?></td>
                    <td><?php echo $row['nazwisko'] ?></td>
                    <td><?php echo $row['data_urodzenia'] ?></td>
                    <td><?php echo $row['kraj'] ?></td>
                </tr>
                <?php } ?>
            </table>
        </main>
        <footer class="footer"><?php createMenu(); ?></footer>
        <div class="left"></div>
    </div>

</body>
</html>
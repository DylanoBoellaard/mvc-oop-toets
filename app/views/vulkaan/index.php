<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC-OOP Toets P3 Vulkaan</title>
    <link rel="stylesheet" href="http://mvc-oop-toets.com/public/css/style.css">
</head>

<body>
    <div class="container">
        <h3><?= $data['title'] . "<br>"; ?></h3>

        <table>
            <thead>
                <th>Naam vulkaan</th>
                <th>Hoogte (m)</th>
                <th>Land</th>
                <th>Laatste uitbarsting</th>
                <th>Aantal slachtoffers</th>
            </thead>
            <tbody>
                <?= $data['rows']; ?>
            </tbody>
        </table>
        <br>
        <a href="/home/index">Ga naar de homepage</a>
    </div>
</body>
</html>
<?php
$PDO = new PDO('mysql:host=127.0.0.1;port=3306;dbname=planets_DB;charset=UTF8', 'root', 'root');
$PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$request = $PDO->prepare('SELECT name, climate, id FROM planets');
$request->execute();
$response = $request->fetchAll();
/*$names = [];
    foreach ($response as $planet) {
        $names[] = $planet["name"];
    };
    echo ($names);*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="wheather app landing page" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <header class="header">
        <div class="starwars">
            <p class="p-starwars">@</p>
        </div>
        <div class="title-div">
            <h2 class="title">Galactic Wheather</h2>
        </div>
    </header>
    <main class="main">
        <div class="container">
            <select>
                <?php
                foreach ($response as $option) {
                    echo '<option value="'.$option["id"].'">'.$option["name"].'</option>';
                    };
                ?>
            </select>
            <input type=" text" class="search-bar-planet" autocomplete="off" placeholder="Search Planet">
                        <input type="text" class="search-bar-city" autocomplete="off" placeholder="Search City">
                        <h1 class="temperature">42°C / 107,6F</h1>
                        <p class="wind">Wind : 18 km/h</p>
                        <p class="humidity">Humitidy : 2%</p>
        </div>
    </main>
    <footer>Star Wars is a trademark and copyright of Lucasfilm and Disney.</footer>
</body>
<script src="back.js"></script>

</html>
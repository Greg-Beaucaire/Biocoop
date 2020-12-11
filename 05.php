<?php
include("backoffice.php");
include("header.php");
?>

<body>
<div class="title">
        <h1>BIOC</h1>
        <h1>O</h1>
        <h1>O</h1>
        <h1>P</h1>
    </div>
    <main>
        <?php
        
        for ($i=0; $i<$arrayLength; $i++) {
            $arrayMois = explode(",", $arrayContentJson[$i]['mois']);
            if(in_array("mai", $arrayMois)){
                echo("
                    <div class='legumeDiv'>
                    <div class='legumeImg' style='background-image: url(".$arrayContentJson[$i]['image'].")'>
                    </div>
                    <p>".$arrayContentJson[$i]['nom']."</p>
                    </div>
                    ");
                }

        }
            echo("
                <div class='mois'>
                <a href='04.php'><img src='img/play.png'></a>
                <h1>mai</h1>
                <a href='06.php'><img src='img/play.png'></a>
                </div>
                ");
        ?>
    </main>
</body>
</html>
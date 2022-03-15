<?php
    require __DIR__ . '/database.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-ajax-dischi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container" id="contenitore-header">
            <div class="header-left">
                <img src="https://pluspng.com/img-png/spotify-logo-png-open-2000.png" alt="icona-spotify">
            </div>

            <div class="header-right"></div>

        </div>
    </header>

    <main>
        <div class="container">
            <div id="contenitore-dischi">

                <?php

                    foreach($database as $disco) {

                        echo "<div class='disc'>";
                        echo "<img src='". $disco ['poster'] ."' >";
                        echo "<h3>".$disco['title']."</h3>";
                        echo "<small>".$disco['author']."</small>";
                        echo "<strong>".$disco['year']."</strong>";
                        echo "</div>";
                    }

                ?>        
                    
                    
                    
                </div>
            </div>
        </div>
    </main>


</body>
</html>
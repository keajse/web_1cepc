<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Components</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->

    <!-- Tradicional de html -->

    <!-- CSS en la cabecera -->

    <!-- https://fezvrasta.github.io/bootstrap-material-design/ -->

    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

</head>

<body>

<div class="alert alert-primary" role="alert">
            Paz y bien...
        </div>
    <div class="container">
        <div class="row">
            <div class='col'>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- <?php
                echo "Prueba"
                ?> -->

        

        <?php

        $nombre = "María Camila PaDi";
        $Mensaje = "Sean santos como vuestro Padre Celestial es Santo. Mt. 5,48";

        $cardTemplate = "<div class='card' style='width: 18rem;'>
       <div class='card-body'>
           <h5 class='card-title'>$nombre</h5>
           <h6 class='card-subtitle mb-2 text-muted'>Card subtitle</h6>
           <p class='card-text'>$Mensaje</p>
           <a href='#' class='card-link'>Card link</a>
           <a href='#' class='card-link'>Another link</a>
       </div>
        </div>";

        // for ($i = 0; $i < 1000; $i++) {
        //     echo "Dios te ama ";
        // }

        for ($i = 0; $i < 7; $i++) {
            echo $cardTemplate;
        }

        ?>
    









    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- JS antes que finalice el body -->
</body>

</html>
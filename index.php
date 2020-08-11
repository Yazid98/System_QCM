<?php

use QCM\QCM;

require_once('QCM.php');
require_once('Question.php');
require_once('Response.php');
?>
<!doctype html>
<html lang="fr">

<head>
    <title>Système de QCM</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="jumbotron">
        <h1 class="display-4">Bienvenue sur le Système de QCM de Lab Event</h1>
        <p class="lead">On a besoin de créer un questionnaire pour une entreprise. <br> <br> Objectif : évaluer son équipe après une formation. </p>
        <hr class="my-4">
    </div>

    <div class="container">

        <?php

        echo 'Salut toi';

        $qcm = new QCM();

        $question1 = new Question("Je m'appelle : ");
        $question1->ajouterReponse(new Response("Yazid", true));
        $question1->setExplication("C'est mon nom de famille");

        $qcm->ajouterQuestion($question1);
        var_dump($question1);















        














        ?>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
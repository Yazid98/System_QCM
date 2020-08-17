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
    <div class="container-fluid">
        <div class="jumbotron">
            <h1 class="display-4">Bienvenue sur le Système de QCM de Lab Event</h1>
            <p class="lead">On a besoin de créer un questionnaire pour une entreprise. <br> <br> Objectif : évaluer son équipe après une formation. </p>
            <hr class="my-4">
        </div>
    </div>
    <div class="container">

        <?php

        $qcm = new QCM();

        $question1 = new Question('Je m\'appelle :');
        $question1->addReponse(new Response("Eric Badarou", true));





















        ?>
        <!--
        <h1>Système d'évaluation de la formation de Lab Event</h1>

        <br>

        <h2>QCM</h2>
        <h3 class="mb-4">Questions : </h3>

        <h4> 1. PHP est un language : </h4>
        <div class="form-check mb-4">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
                Procédural ?
            </label>
        </div>

        <div class="form-check mb-4">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
            <label class="form-check-label" for="defaultCheck2">
                Orienté objet ?
            </label>
        </div>

        <div class="form-check mb-4">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
            <label class="form-check-label" for="defaultCheck3">
                avec l'architecture MVC ?
            </label>
        </div>

        <div class="form-check mb-4">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck4">
            <label class="form-check-label" for="defaultCheck4">
                Facile à apprendre ?
            </label>
        </div>

        <h4> 2. C est un language : </h4>
        <div class="form-check mb-4">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck5">
            <label class="form-check-label" for="defaultCheck5">
                Procédural ?
            </label>
        </div>

        <div class="form-check mb-4">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck6">
            <label class="form-check-label" for="defaultCheck6">
                Orienté objet ?
            </label>
        </div>

        <div class="form-check mb-4">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck7">
            <label class="form-check-label" for="defaultCheck8">
                avec l'architecture MVC ?
            </label>
        </div>

        <div class="form-check mb-4">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck9">
            <label class="form-check-label" for="defaultCheck9">
                Facile à apprendre ?
            </label>
        </div>

        <h4> 3. C++ est un language : </h4>
        <div class="form-check mb-4">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck10">
            <label class="form-check-label" for="defaultCheck10">
                Procédural ?
            </label>
        </div>

        <div class="form-check mb-4">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck11">
            <label class="form-check-label" for="defaultCheck11">
                Orienté objet ?
            </label>
        </div>

        <div class="form-check mb-4">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck12">
            <label class="form-check-label" for="defaultCheck12">
                avec l'architecture MVC ?
            </label>
        </div>

        <div class="form-check mb-4">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck13">
            <label class="form-check-label" for="defaultCheck13">
                Facile à apprendre ?
            </label>
        </div>

        <h4> 4. Java est un language : </h4>
        <div class="form-check mb-4">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck14">
            <label class="form-check-label" for="defaultCheck14">
                Procédural ?
            </label>
        </div>

        <div class="form-check mb-4">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck15">
            <label class="form-check-label" for="defaultCheck15">
                Orienté objet ?
            </label>
        </div>

        <div class="form-check mb-4">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck16">
            <label class="form-check-label" for="defaultCheck16">
                avec l'architecture MVC ?
            </label>
        </div>

        <div class="form-check mb-4">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck17">
            <label class="form-check-label" for="defaultCheck17">
                Facile à apprendre ?
            </label>
        </div>

        <button type="submit" class="btn btn-primary mb-4">Valider le QCM</button> -->

    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
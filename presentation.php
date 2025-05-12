<?php

// Debug mode
ini_set(option: "display_errors", value: 1);
ini_set(option: "display_startup_errors", value: 1);
error_reporting(error_level: E_ALL);

define(constant_name: "BASE_DIR", value: $_SERVER['DOCUMENT_ROOT'] );

require_once( BASE_DIR . '/templates/header.php');
?>

<nav>
    <a href="#qui_suis-je">Qui suis-je</a>
    <a href="#mes_cours">Pourquoi choisir mes cours?</a>
</nav>

<hr>

<div>
    <h2>
        <p id="qui_suis-je">Qui suis-je</p>
    </h2>
    <p>Moi c'est Alexanne ! étudiante en japonais depuis mes 10 ans !
        <!--même si là c'est mon copain qui code le site hihi-->
    </p>
</div>

<div>
    <h2>
        <p id="mes_cours">Pourquoi choisir mes cours</p>
    </h2>
    <p>Car je suis moi-même dyspraxique donc je connais la maladie
        et je peux plus facilement m'adapter aux difficultés et aux différents besoin de mes élèves
        par rapport à un proffesseur qui n'est pas former sur les maladies dys</p>
</div>

<?php require_once( BASE_DIR . '/templates/footer.php'); ?>
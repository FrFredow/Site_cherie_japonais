<?php
/*
// Debug mode
ini_set(option: "display_errors", value: 1);
ini_set(option: "display_startup_errors", value: 1);
error_reporting(error_level: E_ALL);
*/
define(constant_name: "BASE_DIR", value: $_SERVER['DOCUMENT_ROOT'] );

require_once( BASE_DIR . '/templates/header.php');
?>

<div>
    <h1>Les cours de japonais... pour les Dys !</h1>
</div>

<nav>
    <a href="/presentation.php">Présentation</a>
    <a href="/start.php">Pour commencer</a>
    <!-- <a href="">test</a>
    <a href="">test</a> -->
</nav>


<hr>

<div>
    <p>Bienvenue sur ce premier site de cours de japonais spécialement fait pour les personne atteintes de troubles
        "dys" !</p>

    <p>Mais avant, qu'est-ce que les personnes dys?

        Par personne atteintes de troubles dys en entend par la toutes les maladies commencant par le préfixe "dys"
    </p>

    <p>
        Petite définition provenant de wikipédia pour vous éviter de longues recherches !
    </p>

    <p>Définition : Les troubles dys ou dys- sont des troubles spécifiques durables, qui concernent les
        dysfonctionnements, plus ou moins sévères, des fonctions cognitives du cerveau relatives au langage, à
        l'écriture, au calcul, aux gestes et à l'attention. Les personnes qui en souffrent n'ont pas de déficience
        intellectuelle globale. Ces troubles apparaissent au cours du développement de l'enfant et persistent à
        l'âge adulte. Environ 40 % des enfants concernés par un trouble des apprentissages en présentent plusieurs.
        Bien qu'ils concernent directement les apprentissages et ont donc un impact sur la vie scolaire, ces
        troubles ont également une incidence sur la vie sociale et professionnelle de la personne concernée. </p>
</div>
<p>Les différents troubles Dys (source : Wikipédia)

<div>
    <ul>
        <li>Dyscalculie : trouble dans les apprentissages numériques.</li>
        <li>Dysgraphie : difficulté à accomplir les gestes de l'écriture et du dessin.</li>
        <li>Dyslexie : trouble de la lecture.</li>
        <li>Dysorthographie : également appelé trouble de l'acquisition de l'expression écrite.</li>
        <li>Dysphasie : trouble lié au développement du langage oral.</li>
        <li>Dyspraxie : trouble de la capacité à exécuter des mouvements déterminés.</li>
        <li>Dyskinésie : il s'agit d'une activité motrice involontaire, lente et stéréotypée affectant
            préférentiellement la face (langue, lèvres, mâchoire) s’étendant au tronc et aux membres, comme le
            tremblement, la chorée, la dystonie, les myoclonies, l'astérixis, les tics.</li>
        <li>Dysmorphophobie : la crainte obsédante d'être laid ou malformé.</li>
        <li>Dysarthrie : désigne des troubles de la parole liés à des lésions nerveuses.</li>
        <li>Dyslalie : désigne un trouble de la communication caractérisé par des difficultés d'articulation.</li>
        <li>Dyssynchronies : décalage entre les fonctions intellectuelles et les fonctions émotives et sociales,
            souvent observé chez les enfants dits précoces.</li>
        <li>Dys-exécution : trouble affectant une ou plusieurs fonctions exécutives telles que la capacité à
            s'organiser, la planification, la flexibilité mentale, ou encore la gestion de la mémoire de travail. Ce
            trouble « dys » peut notamment se manifester (mais pas exclusivement) à travers le Le trouble déficit de
            l'attention avec ou sans hyperactivité.</li>
    </ul>
</div>
</p>


<div class="centre-texte">
    <img src="assets/images/portail.jpg" alt="Image">
    <div class="texte-sur-image">いらっしゃいませ !</div>
</div>

<?php require_once( BASE_DIR . '/templates/footer.php'); ?>
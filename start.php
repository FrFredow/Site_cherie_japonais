<?php
// Debug mode
ini_set(option: "display_errors", value: 1);
ini_set(option: "display_startup_errors", value: 1);
error_reporting(error_level: E_ALL);

define(constant_name: "BASE_DIR", value: $_SERVER['DOCUMENT_ROOT'] );

require_once( BASE_DIR . '/templates/header.php');
?>



<div>
    <p>D'abord les bases !</p>

    <p>Il y a 3 alphabets dans la langue japonaise qui sont les :
        <a href="#hiragana">Hiragana,</a>
        <a href="#katakana">Katakana</a> et les Kanji</p>


    <a href="#hiragana">Les Hiragana</a>
</div>

<img id="hiragana" src="/assets/images/hiragana.png" alt="">
<div>
    <a href="#katakana">Les Katakana</a>
</div>
<img id="katakana" src="/assets/images/katakana.png" alt="">
<div><p>Et enfin les Kanji ! (mais ce sont des cas à part, on reviendra dessus plus tard ne vous en faites pas !) </p></div>

<?php require_once( BASE_DIR . '/templates/footer.php'); ?>
<?php

// Nustatome pagr. $page masyvui
// vertes atitinkamai pagal tai, ką daro mūsų puslapis

$page['title'] = 'Showcase !';
$page['show_footer'] = false;
$page['show_header'] = false;

// Visus 'content' skiltyje esančius kintamuosius
// nustatome pasirinktinai pagal tai, kaip suformavome
// template į kurį juos spausdinsime.
$page['content']['title'] = 'Calculator3000';
$page['content']['subtitle'] = '';


if (isset($_POST['submit'])) {
    $x = $_POST['num1'];
    $y = $_POST['num2'];
    
    $page['content']['suma'] = "Addition of two numbers is: " . ($x + $y);
    $page['content']['atimti'] = "Substraction of two numbers is: " . ($x - $y);
    $page['content']['daugyba'] = "Multiplication of two numbers is: " . ($x * $y);
    $page['content']['dalyba'] = "Division of two numbers is: " . ($x / $y);
}


// Index.php esame nurodę išspausdinti 'rendered' indekso
// turinį iš 'content'. Todėl šiam indeksui priskiriame
// sugeneruotą HTML kodą, gaunamą iš render_page funkcijos
// Funkcija render_page, $page masyvą perduoda į template, kurią
// nurodome antrame parametre. 
$page['content']['rendered'] = render_page($page, 'page-showcase');

<?php

// Nustatome pagr. $page masyvui
// vertes atitinkamai pagal tai, ką daro mūsų puslapis

$page['title'] = 'First page';
$page['show_footer'] = false;
$page['show_header'] = false;

// Visus 'content' skiltyje esančius kintamuosius
// nustatome pasirinktinai pagal tai, kaip suformavome
// template į kurį juos spausdinsime.
$page['content']['title'] = 'Welcome';
$page['content']['subtitle'] = 'Please login';

$msg = '';

if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {

    if ($_POST['username'] == 'donatasj' && $_POST['password'] == '12345') {
        $_SESSION['valid'] = true;
        $_SESSION['username'] = 'donatasj';
        $_SESSION['password'] = '12345';
        

        $msg = 'You have successfully logged in.';
    } else {
        $msg = 'Wrong username or password';
    }
}
$page['content']['msg'] = $msg;


// Index.php esame nurodę išspausdinti 'rendered' indekso
// turinį iš 'content'. Todėl šiam indeksui priskiriame
// sugeneruotą HTML kodą, gaunamą iš render_page funkcijos
// Funkcija render_page, $page masyvą perduoda į template, kurią
// nurodome antrame parametre. 
$page['content']['rendered'] = render_page($page, 'page-home');

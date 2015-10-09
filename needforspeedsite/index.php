<?php

// Gebruikersnaam, wachtwoord van de database etc ophalen
require 'includes/config.php' ;
// Laad de Smarty bibliotheek in
require_once 'libs/smarty/Smarty.class.php';
// Voer instellingen uit en stel template parser in
require 'includes/bootstrap.php' ;
// Maak de database connectie
require_once 'includes/database.php' ;

// Koppel de waarde van de paginatitel aan te smarty tag 'title'
$templateParser->assign('title', 'need for speed');
// Toon de template: output html
$templateParser->display('head.tpl');

$templateParser->display('header.tpl');

$page=isset($_GET['page'])?$_GET['page']:'home';
$templateParser->assign('page',$page);
$templateParser->display('active.tpl');

switch($page){

    case 'home':
        //lees de page number uit
        $page_nr=isset($_GET['page_nr'])?$_GET['page_nr']:1;
        $templateParser->assign('number',$page_nr);
        $templateParser->display('active.tpl');
// Haal de nieuws artikelen op
        require 'logic/select_newsarticles.php';
        require 'logic/select_pages.php';
        $templateParser->assign('pages',$amountpage);
        $templateParser->display('pagination.tpl');

        $templateParser->display('counter.tpl');
        $templateParser->assign('data', $data);
        $templateParser->display('newsarticles.tpl');
        break;
    case 'cars':
        $templateParser->display('cars.tpl');
        break;
    case 'games':
        $page_nr=isset($_GET['page_nr'])?$_GET['page_nr']:1;
        $templateParser->assign("number",$page_nr);
        $templateParser->assign("pages",5);
        require'logic/select_games.php';
        $templateParser->assign('result', $result);
        $templateParser->display('games.tpl');
        $templateParser->display('active.tpl');
        break;
    case 'search':
        $templateParser->display('search.tpl');
        if (isset($_POST['submit'])) {
            $searchval = $_POST['searchval'];
            require 'logic/search.php';
            $templateParser->assign('searchval',$searchval);
            $templateParser->assign('result',$result);
            $templateParser->assign('page',$page);
            $templateParser->display('searchres.tpl');
        }
        break;
    default:
        //defealt
}

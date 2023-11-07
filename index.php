<?php

require_once "vendor/autoload.php";

use Projectp6\Answer;
use Projectp6\Category;
use Projectp6\CategoryList;
use Projectp6\Play;
use Projectp6\Question;
use Projectp6\Player;

session_start();

$play = $_SESSION['play'] ?? new Play(); // vul hier nog de $player en $category in
$action = $_GET['action'] ?? null;


switch($action)
{
    case "addPlayer":

        break;
    case "addCategory":

        break;
    default:

}



















$_SESSION['play'] = $play;
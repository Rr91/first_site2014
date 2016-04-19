<?php
    //error_reporting(E_ALL);
    mb_internal_encoding("UTF-8");
    require_once "lib/database_class.php";
    require_once "lib/frontpagecontent_class.php";
    require_once "lib/sectioncontent_class.php";
    require_once "lib/articlecontent_class.php";
    require_once "lib/regcontent_class.php";
    require_once "lib/messagecontent_class.php";
    require_once "lib/searchcontent_class.php";
    require_once "lib/notfoundcontent_class.php";
    require_once "lib/pollcontent_class.php";
    
    $db = new DataBase();
    if(isset($_GET["view_"])) $_GET["view"] = substr($_GET["view_"], 1);
    $view = $_GET["view"];
    switch($view){
        case "":
            $content = new FrontPageContent($db);
            break;
        case "section":
            $content = new SectionContent($db);
            break;
        case "article":
            $content = new ArticleContent($db);
            break;
        case "reg":
            $content = new RegContent($db);
            break;
        case "message":
            $content = new MessageContent($db);
            break;
        case "search":
            $content = new SearchContent($db);
            break;
        case "notfound":
            $content = new NotFoundContent($db);
            break;
        case "poll":
            $content = new PollContent($db);
            break;
        default:  $content = new NotFoundContent($db);;
    }
    echo $content->getContent(); 
?>
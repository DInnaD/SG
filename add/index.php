
<?php
    header("Content-Type: text/html; charset=utf-8");
    require_once("../database.php");
    require_once("../models/articles.php");
    
    
    
    $link = db_connect();

    if (isset($_GET['action']))
        $action = $_GET['action'];
    else
        $action ="";

    if ($action == "add"){
        if (!empty($_POST)){
                        article_new($link, $_POST['title'], $_POST['category'], $_POST['status'], $_POST['date'], $_POST['content_tizer'], $_POST['content']);
            header("Location: index.php");
        }
        include("../views/article_add.php");    
    }
    else if ($action == "edit"){
        if (!isset($_GET['id']))
            header("Location: index.php");
        $id = (int)$_GET['id'];
        
        if (!empty($_POST) && $id > 0){
            article_edit($link, $id, $_POST['title'], $_POST['category'], $_POST['status'], $_POST['date'], $_POST['content_tizer'], $_POST['content']);
            header("Location: index.php");
        }
         $article = article_get($link, $id);//if post dates empty
        include("../views/article_edit.php");
        
    } else if ($action == "delete"){
        $id = $_GET['id'];
        article_delete($link, $id);
        header("Location: index.php");
    }
   
    /* else if ($action == "page"){
        $id = $_GET['id'];
        $articles = article_all($link, $id);
        header("Location: index.php");
    }*/


    else{

        $articles = articles_all($link);
        include("../views/articles_all.php");
    }
    
?>

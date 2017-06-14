<?php
    header("Content-Type: text/html; charset=utf-8");
    require_once("../database.php");
    require_once("../models/articles.php");
    
    
    
    $link = db_connect();

    /*$per_page = 10;
    $sql = mysqli_query("SELECT count(`id`) FROM articles WHERE id= '' ");
    $rows = mysqli_num_rows($sql);
    $tot_pages = ceil($articles / $per_page);
    
    if(isset($_GET['page'])) {
        $x = ($_GET['page'] - 1) * $per_page;
        $sql = mysqli_query(" SELECT * FROM articles WHERE id= '' limit $x, $per_page");
    }*/

    /*$per_page = 10;
    $sql = mysqli_query("SELECT count(`id`) FROM articles WHERE id= '' ");
    $rows = mysqli_num_rows($sql);
    $tot_pages = ceil($rows / $per_page);
    
    if(isset($_GET['page'])) {
        $x = ($_GET['page'] - 1) * $per_page;
        $sql = mysqli_query(" SELECT * FROM articles WHERE id= '' limit $x, $per_page");
    }*/
        
    

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
         $article = article_get($link, $id);
        include("../views/article_edit.php");
        
    } else if ($action == "delete"){
        $id = $_GET['id'];
        article_delete($link, $id);
        header("Location: index.php");
    }
    else{

        $articles = articles_all($link);
        include("../views/articles_main.php");
    }
    
?>


<?php
/*
function page_pag($tot_pages, $cur_page,$min){
    $temp = '';
    if($cur_page > 1){
       $temp = '<a href="?page='.($cur_page - 1).'">&laguo; prev</a>'; 
    }
    
    for($i=($cur_page - $min);$i < $cur_page;$i++){
        if ($i > 0 )
            $temp = '<a href="?page='.$i.'">'.$i.'</a>'; 
        
      
    }
    
    if($cur_page < $tot_pages ){
        $temp = ' .. ';
    }  
       
    for($i=($cur_page + 1);$i <= $cur_page + $min;$i++){
        if ($i <= $tot_pages ){
           $temp = '<a href="?page='.$i.'">'.$i.'</a>';  
        }
        
    if($cur_page < $tot_pages){
       $temp = '<a href="?page='.($cur_page + 1).'">next&raguo; </a>'; 
    }
    
    return $temp;
    
}


/*?>
<?php*/
    
    function d($value = null, $die = 1){
    echo 'Debug: <br /><pre>';
    print_r($value);
    echo '</pre>';
    if($die) die;
}
  
    function articles_all($link){

        // Запрос
        $query = "SELECT * FROM `articles` ORDER BY id DESC LIMIT 0,10 ";
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));
        
        // Извлечение из БД
        $n = mysqli_num_rows($result);
        $articles = array();
        
        for ($i = 0; $i < $n; $i++){
            $row = mysqli_fetch_assoc($result);
            $articles[] =$row;
        }
        
        return $articles;
    }

    function article_get($link, $id_article){
        // Запрос
        $query = "SELECT * FROM `articles` WHERE id=".(int)$id_article;
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));

        $article = mysqli_fetch_assoc($result);
        
        return $article;
    }

    function article_new($link, $title, $category, $status, $date, $content_tizer, $content){
        // Подготовка
        $title = trim($title);
        $category = trim($category); 
        $status = trim($status); 
        $content_tizer = trim($content_tizer);         
        $content = trim($content);
        // Проверка
        if ($title == '')
            return false;
        // Запрос
        $t = "INSERT INTO articles (title, category, status, date, content_tizer, content) VALUE ('%s', '%s', '%s', '%s', '%s', '%s')";
        
        $query = sprintf($t, mysqli_real_escape_string($link, $title), mysqli_real_escape_string($link, $category), mysqli_real_escape_string($link, $status), mysqli_real_escape_string($link, $date), mysqli_real_escape_string($link, $content_tizer), mysqli_real_escape_string($link, $content));
        
        $result = mysqli_query($link, $query);;
        if (!$result)
            die(mysqli_error($link));
            
        return true;
    }

function article_edit($link, $id, $title, $category, $status, $date, $content_tizer, $content){
        // Подготовка
        $title = trim($title);
        $category = trim($category); 
        $status = trim($status); 
        $date = trim($date); 
        $content_tizer = trim($content_tizer);         
        $content = trim($content);
        $id = (int)$id;
        // Проверка
        if ($title == '')
            return false;
        
        // Запрос
        $sql = "UPDATE  `articles` SET `title`='%s', `category`='%s', `status`='%s', `date`='%s', `content_tizer`='%s', `content`='%s' WHERE `id` = ".(int)$id;
       
        //d($sql);
        $query = sprintf($sql, mysqli_real_escape_string($link, $title), mysqli_real_escape_string($link, $category), mysqli_real_escape_string($link, $status), mysqli_real_escape_string($link, $date), mysqli_real_escape_string($link, $content_tizer), mysqli_real_escape_string($link, $content), $id);
        
        
        
        
        
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));
            
       return  mysqli_affected_rows($link);
        
        
        
        
        
        
        
    }

    function article_delete($link, $id){
        // Подготовка
        $id = (int)$id;
        
        // Проверка
        if ($id == '')
            return false;
        
        $query = sprintf("DELETE FROM articles WHERE id=%d", (int)$id);
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));

        return mysqli_affected_rows($link);        
    }

    function article_intro($text, $len = 500){
        return mb_substr($text, 0, $len);
    }

?>

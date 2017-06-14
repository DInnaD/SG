<?php require('header.php') ?>
<!DOCTYPE html>
<html lang="ru">
    <?php $tot_pages = 15;
$min_links = 5;
$cur_page = 1;
$temp = '';

if(isset($_GET['page'])){
    $cur_page = $_GET['page'];
    if($cur_page > 1){
       $temp .= '<a href="?page='.($cur_page - 1).'">&laquo; prev</a>'; 
    }
    
    
    
    
    
    for($i=($cur_page - $min_links);$i < $cur_page;$i++){
        if (($i > 0 )&&($i <= $tot_pages ))
            $temp .= ' <a href="?page='.$i.'">'.$i.'</a>'; 
        
      
    }
    
    if($cur_page < $tot_pages ){
        $temp .= ' .. ';
    }  

        
    for($i=($cur_page +1);$i <= $cur_page+ $min_links;$i++){
        if (($i > 0 )&&($i <= $tot_pages ))
            $temp .= ' <a href="?page='.$i.'">'.$i.'</a>'; 
        
      
    }
    
        
            
    if($cur_page < $tot_pages){
       $temp .= '<a href="?page='.($cur_page + 1).'"> next &raquo; </a>'; 
    }     
   
}?>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
        <title>IT Компания высокого уровня</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   </head>
 
    <body>
   <div class="my_container">
       <section class="active">
        <div class="container">
			<div class="row">
				<div class="col-md-12"> 
				      <div class="right_aside">	
                          <nav class="maian_mnu clearfix">
						    <button class="main_mnu_button hidden-md hidden-lg"><i class="fa fa-bars"></i></button>
<!--div id="content">
<div id="left">
</div>
<!--left>
<div id="right">
 
</div>
                              <!--right>
</div>
                          <!--content--> 
    <div class="content">                          
            <ul> 
            <h3><a href="index.php?action=add<?=isset($_GET['action']) ? html($_GET['action']) : ''?>&id=<?=isset($_GET['id'])  ? html($_GET['id']) : ''?>">Добавить статью</a></h3>    
             
     <!--?php $articles = article_get($link, $id_article)   ?-->   
    <?php if(isset($articles) && $articles !=NULL)  
    
     foreach($articles as $a): ?>
                <div class="article">
                    <h3><a href="index_article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
                    <p><em><?=$a['category']?></em></p>
                    <p><?=article_intro($a['content_tizer'])?></p>
                    <span><em><?=$a['status']?></em></span>
                    <span><em><?=$a['date']?></em></span>
                    
                    <a href="index.php?action=edit&id=<?=$a['id']?>">Редактировать</a>
                        
                            <a href="index.php?action=delete&id=<?=$a['id']?>">Удалить</a>
                    <p><?=article_intro($a['content'])?></p>
                    
                </div>
                <?php endforeach ?>
    
  
                
          
            
        </ul> </div>                  
        
<div class="pages">
        
  <ul><strong>Pages:<?=$cur_page;?></strong></ul>      
  <ul><strong><?=$temp;?></strong></ul>

</div>
       
        
                          </nav>
                    </div>
                   </div>
               </div>							
           </div>
       			
</section>  
            

                      
            
<?php require('footer.php') ?>
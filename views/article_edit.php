<?php require('header.php') ?>  
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
        <title>IT Компания высокого уровня</title>
        <link rel="stylesheet" type="text/css" href="../style.css">
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
       <section class="active">
        <div class="container">
                   
        <div class="container">
                  
        <div class="container">
           
            <div>
                <form class="form-horizontal" method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
                    <div class="form-group">
            <h3>Форма редактирования статьи</h3>
            </div>
                    <div>
                <input type="hidden" name="id" value="<?=$id?>" />
    <div class="form-group">
    <label>
                    <div class="form-group">
                    <label>
                        Название
                        <input type="text" name="title" value="<?=$article['title']?>" class="form-control" autofocus required>
                    </label>
                    </div>
                    <div class="form-group">
                    <label>
                        Название категории
                        <input type="text" name="category" value="<?=$article['category']?>" class="form-control" autofocus required>                     
                    </label>
                    </div>
                    <div class="form-group">
                    <label>
                      
                         Дата
                        <input type="date" name="date" value="<?=$article['date']?>" class="form-control" required>
                    </label>
                    </div>
                    <div class="form-group">
                    <label>
                        Статус: "Опубликовано"
                        <input type="text" name="status" value="<?=$article['status']?>" class="form-control" autofocus required> 
                        
                    </label>
                    </div>
                    <div class="form-group">
                    <label>
                        Краткое содержимое
                        <textarea name="content_tizer" class="form-control" required><?=$article['content_tizer']?></textarea>
                    </label>
                    </div>
                    <div class="form-group">
                    <label>
                        Cодержимое
                        <textarea name="content" class="form-control" required><?=$article['content']?></textarea>
                    </label>
                    </div>
                        
                        <div>
                    <section class="active">
                    <div class="container">
                        
                    <div class="container">
                    <input type="submit" value="Сохранить" class="btn">
                     </div> 
                    <div class="container">
                        </div>
                    </div> 
                    </section>
                    </div>
        </label></div></div>
                </form>
            </div>
            </div>
            </div>
           </div>
                              </section>
                          </nav>
                    </div>
                </div>
            </div>
                  </div>
        


<?php require('footer.php') ?>
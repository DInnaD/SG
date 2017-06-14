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
            
            <div>
                 <section class="active">
        <div class="container">
                <div class="article">
                     <h3><?=$article['title'] ?></h3>
                    <em><?=$article['category']?></em>
                    <p><?=$article['content_tizer']?></p>
                    <em><?=$article['status'] ?></em>
                    <em><?=$article['date']?></em>
                    <p><?=$article['content']?></p>
                    
                </div>
          
            </div>
                </section>
                              </div>
        
                          </nav>
                    </div>
                   </div>
               </div>							
           </div>
       			
</section>  
            
             
            
<?php require('footer.php') ?>               
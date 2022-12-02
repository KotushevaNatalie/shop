<head>
    <meta charset="UTF-8">
      <link rel = 'stylesheet' href='style.css'> 
       <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">

    
  </head>
  <body bgcolor="#7fc7ff">


      
      <div class='header'>
        
          <div class='container'>
             <div class='header-line'>
             <img  src="logo.png" width="70" height="70">
            
                
                    <a class="button" href="<?php 

                        $name='Войти'; 
                        $link='autorization.php'; 
                        $current_page=true; 

                        echo $link; ?>">
                        <?php 

                        if($current_page) 
                            echo $name;?></a>


                
                 <div class='nav'>
                    
                    <!-- a class="nav-item" href="index.php">Главная</a -->
                    <a class="nav-item" href="<?php	

                        $name='Главная'; 
                        $link='index.php';	
                        $current_page=true;	

                        echo $link;	

                    ?>"><?php	

                        if( $current_page )	
                            echo $name;

                    ?></a>

                    <!-- a class="nav-item" href="catalog.php">Каталог</a -->
                    <a class="nav-item" href="<?php	

                        $name='Каталог';
                        $link='catalog.php';	
                        $current_page=true;	

                        echo $link;	

                    ?>"><?php	

                        if( $current_page )	
                            echo $name;

                    ?></a><a class="nav-item" href="<?php	

                    $name='Контакты';
                    $link='contact.php';	
                    $current_page=true;	

                    echo $link;	

                ?>"><?php	

                    if( $current_page )	
                        echo $name;

                ?></a>
                
                     

                 </div>
                 
             </div>
      
         </div>
         
        <main>
            <div class="start">
                <form>
                    <big class='condition'>WoWBaby</big>
                    <p class='condition'>WoWBaby - это интернет-магазин с огромным ассортиментом модной детской одежды от известных 
                    <p class='condition'>и люксовых брендов. WowBaby был основан 2 декабря 2022 года, эта сеть магазин есть в
                    <p class='condition'>таких городах как Москва, Санкт-Петербург, Новосибирск, Владивосток и многих других 
                    <p class='condition'>городах России. Наш интернет магазин это впервую очередь знаменитые бренды, качествен-
                    <p class='condition'>ная одежда, низкие цены. ЗДесь вы сможетет найти одежду для мальчиков и для девочек.
                     
                    <p class='condition'>У нас вы сможетет найти такеи наряды как:
                    <li class='condition'>Повседневные</li>
                    <li class='condition'>Школльные</li>
                    <li class='condition'>Спортивные</li>
                    <li class='condition'>А также наряды для самых маленьких</li>
                   

                    <p class='condition'>Доставка осуществляется по всей России.   
                

                </form>
            </div>
        </main>




    </body>
    
    <footer>
        <div class='foot'>
            <a class = 'footer'>Почта WoWBaby@gmail.com</a>
            <a class = 'footer'>Телефон +7(950)994-30-74</a>
 
        </div>
    </footer>


 </html>
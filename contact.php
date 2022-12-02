<head>
    <meta charset="UTF-8">
      <link rel = 'stylesheet' href='contact.css'> 
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
           <p class="condition">Если у вас возник вопрос, напишите нам</p>
           <p><a class="connect" href="<?php 

                        $name='Обратная связь'; 
                        $link='connection.php'; 
                        $current_page=true; 

                        echo $link; ?>"><?php 

                        if($current_page) 
                            echo $name;?></a></p>
            
            <big class="condition">Официальные запросы</big>
            <p class="condition">Для отправки или получения деловой документации напишите на почту sales@wowbaby.ru
            <p><big class="condition">Правообладателям</big>
            <p class="condition">Претензии по нарушению прав на интеллектуальную собственность связывайтесь с нами по почте my@wowbaby.ru
            <p><big class="condition">Партнерам</big>
            <p><a class="condition" >Узнайте подробные условия для сотрудничества </a>
            <p><big class="condition"> Пресс-служба</big>
            <p class="condition">Для запросов СМИ и на участие в мероприятиях свяжитесь с нами по почте pr@wowbaby.ru
            <p><big class="condition"> Юридический адрес</big>
            <p class="condition">142181, Московская область, г. Подольск, деревня Коледино, Территория Индустриальный парк Коледино, д. 6, стр. 1

        </main>




    </body>
    
    <footer>
        <div class='foot'>
            <a class = 'footer'>Почта WoWBaby@gmail.com</a>
            <a class = 'footer'>Телефон +7(950)994-30-74</a>
 
        </div>
    </footer>


 </html>
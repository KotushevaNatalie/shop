<head>
    <meta charset="UTF-8">
      <link rel = 'stylesheet' href='style.css'> 
       <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">

    
  </head>
  <body bgcolor = "#d8e1e7">


      
      <div class='header'>
        
          <div class='container'>
             <div class='header-line'>
             
            
                
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

                        $name='Библиотека';
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
                    <p class='condition'>Название - портал, где содержатся рефераты и полные тексты научных статей и изданий.</p>
                    <p class='condition'>Среди них также есть большое количество журналов, которые имеют открытый доступ. Наша</p>
                    <p class='condition'>библиотека хранит литературу, с которой может ознакомиться каждый желающий.
                    <p class='condition'>Чаще всего к ресурсу обращаются молодые ученые, научные сотрудники, студенты,
                    <p class='condition'>аспиранты и преподаватели вузов. На портале много полезного для менеджеров, управлен-
                    <p class='condition'>цев, медицинских работников, представителей наукоемких секторов бизнеса.</p>
                    <p class='condition'>На сайте можно изучать:
                    <li class='condition'>Журналы</li>
                    <li class='condition'>Монографии</li>
                    <li class='condition'>Сборники конференций</li>
                    <li class='condition'>Диссертации и авторефераты</li>
                    <li class='condition'>Патенты</li>

                    <p class='condition'>Библиотека Название содержит огромное число научно-технических исследователь-
                    <p class='condition'>ских работ с полностью или частично свободным доступом. Среди них можно найти публикации по любой теме, 
                    <p class='condition'>которая будет касаться исследуемой вами проблемы.
                    <p class='condition'>
                      
                   


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
<head>
    <meta charset="UTF-8">
      <link rel = 'stylesheet' href='clothe.css'>
       <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">

    
  </head>
  <body bgcolor="#d8e1e7">
      
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

        <div class="header-down">
         
            <?php 
            require('database.php');
            $id = $_GET['id'];

            $sql = mysqli_query($conn, "SELECT * FROM `literature` WHERE `id`=".$id);
            while ($result = mysqli_fetch_array($sql)) {
                echo '<h1>'.$result['name'].'</h1>'.
                '<h2><br>'.$result['author'].
                '</h2><h3><br>Год: '.$result['year'].
                '</h3><br><h4> '.$result['type'].
                '</h4><br><h5>Описание: '.$result['description'].'</h5>'.
                '<a href="'.$result['link'].'">Ознакомиться</a>';
            }
            
            ?>


    </div>
    </div>







    </body>
    
    <footer>
        <div class='foot'>
            <a class = 'footer'>Почта WoWBaby@gmail.com</a>
            <a class = 'footer'>Телефон +7(950)994-30-74</a>
 
        </div>
    </footer>


 </html>
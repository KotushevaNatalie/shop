<head>
    <meta charset="UTF-8">
      <link rel = 'stylesheet' href='catalog.css'>
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

                    ?></a>

                     
                     <a class="nav-item" href="<?php	

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
         
        <main>

        <div class="header-down">
         
        <?php 
        require('database.php');
        $id = $_GET['id'];

        $sql = mysqli_query($conn, "SELECT * FROM `shop` WHERE `id`=".$id);
        while ($result = mysqli_fetch_array($sql)) {
            echo '<h1>'.$result['Название'].'</h1><br>'.'<img src="'.$result['Товар'].'" width="350" height="500"><br>'.'<h2>Описание: '
            .$result['Описание товара'].'</h2><br><h3>Цена: '.$result['Цена'].'</h3><br><h4>Осталось в магазине: '.$result['Кол-во'].'</h4>';
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
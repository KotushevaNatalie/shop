<head>
    <meta charset="UTF-8">
      <link rel = 'stylesheet' href='catalog.css'>
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

    


       

        <body>

        <form action="#">
            <input type="text" id="elastic">
            <input type="submit"  value="Poisk" class="submitFrom">
        </form>

        <div class = "col-lg-22">
            <ul class="elastic">
                <li>Lorem</li>
                <li>dolor</li>
                <li>sit</li>
                <li>amet</li>
                <li>consectetur</li>
                <li>adipliscing</li>
                <li>elit</li>
                <li>do</li>
                <li>elusmod</li>
                <li>tempor</li>
                <li>incididunt</li>
                <li>labore</li>
                
               
            </ul>
        </div>

        <a href="https://urait.ru/viewer/administrativno-pravovoe-regulirovanie-finansovo-ekonomicheskoy-deyatelnosti-509852#page/1">скачать файл</a>


<div class="card">
    <div class="card2">
     <span>Black</span>   

    </div>
</div>
<div class="card">
    <div class="card2">
        <span>Red</span>

    </div>
</div>
<div class="card">
    <div class="card2">
        <span>White</span>

    </div>
</div>


        <script type="text/javascript">
            const elastic = document.querySelector('#elastic')

            elastic.addEventListener('input', (ev) => {
                const value = ev.target.value.trim()
                const elasticItems = document.querySelectorAll('.card')
                const searchRegExp = new RegExp(value, 'gi')

                if (value === '') {
                    elasticItems.forEach((el) => {
                        el.classList.remove('hide')
                    })
                    return
                }

                elasticItems.forEach((el) => {
                    const innerCard = el.querySelector('.card2')
                    const elementText = innerCard.textContent
                    const isContainsSearchRequest = searchRegExp.test(elementText)
                    if (!isContainsSearchRequest) {
                        el.classList.add('hide')
                    } else {
                        el.classList.remove('hide')
                    }
                })
            })
        </script>



        <table border="4px" bordercolor = "black" bgcolor = "#d8e1e7" width = "1300" align="center" class="table" id = "achieve">
            <?php require "table.php"; ?>
        </table>
        </main>




    </body>
    
    <footer>
        <div class='foot'>
            <a class = 'footer'>Почта WoWBaby@gmail.com</a>
            <a class = 'footer'>Телефон +7(950)994-30-74</a>
 
        </div>
    </footer>


 </html>
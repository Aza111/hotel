<!DOCTYPE html>
<html>
    <head>
        <title>Главная</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
        <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
    </head>
    <body>
    <div class="header">
    <nav>
        <ul>
            <a href="https://aza111.github.io/hotel"><li>Главная</li></a>
                    <a href="https://aza111.github.io/elbrus/"><li>О горе Эльбрус</li></a>
                    <a href="https://aza111.github.io/client/"><li>Аккаунт</li></a>
                    <a href="https://aza111.github.io/contacts/"><li>Контакты</li></a>
        </ul>
    </nav>    
    </div>
    <div class="main">
        <iframe width="1200" height="720" src="https://www.youtube.com/embed/DWWDXVRCrAY"  frameborder="0" allowfullscreen ></iframe>
            <div class="info" id="inf1">
            <h1>ВЫСОКОГОРНЫЙ ПРИЮТ LEAPRUS 3912 м</h1>
            <h3>Комфортабельный высокогорный приют LEAPRUS, расположенный на южном склоне горы Эльбрус на высоте 3912 метров над уровнем моря между Гарабаши и Приютом 11, возобновит свою работу в мае 2017 года после технического перерыва, сделанного для проведения комплекса ремонтных и наладочных работ, направленных на благоустройство территории и качественного улучшения сервиса обслуживания клиентов.</h3>
        </div>
        <div class="info" id="inf2">
            <h1>ПРОЕЗД</h1>
            <h3>Проезд: самолетом – до аэропорта Минеральные Воды или Нальчик, далее – маршрутным или частным такси до с. Терскол. Поездом – до Минеральных Вод, Нальчика, Пятигорска или Прохладного, далее – маршрутным или частным такси до с. Терскол. На автомобиле в Приэльбрусье можно приехать через Краснодар или же через Ростов-на-Дону, а затем – Пятигорск, Баксан, Эльбрус, Тегенекли.</h3>
        </div>
      

</h3>
        </div>


        <div class="slider">
          <img class="slide" src="img/1.jpg">
          <img class="slide" src="img/2.jpg">
          <img class="slide" src="img/3.jpg">
          <img class="slide" src="img/4.jpg">
          <img class="slide" src="img/6.png">
        </div>
        <div class="book">
                    <h>Приезд</h>
                    <input type="date" name="calendar" class="date">
                    <h>Отъезд</h>
                    <input type="date" name="calendar" class="date">
                    <a href="https://aza111.github.io/hotel-order/">Запрос</a>
        </div>
    

    </div>
    
        
        
        
        
        
        
        
        
    <script>
      var index = 0;
            
            autoSlide()
           //Функция для слайда 
            function autoSlide()
            {
                // Объявляем картинки 
                 var x = document.getElementsByClassName("slide");
                // Перемещаем выбор картинки 
                index++;
                // Когда картинки закончатся 
                if(index>=x.length-1)
                   {
                   index=0;
                   }
                // Все картинки невидимые 
                for(i=0; i<x.length-1; i++)
                {
                    x[i].style.opacity="0";
                }
                // Выбранная картинка видима 
                 x[index].style.opacity="1";
                setTimeout(autoSlide, 4000);
            }
                
         y();
        // Функция для правильности выбора дат 
        function y()
            {
           var x = document.getElementsByName("calendar");
          x[1].min=x[0].value;
          x[0].max=x[1].value;
        setTimeout(y, 500);
                }
    </script>
    
    </body>
</html>
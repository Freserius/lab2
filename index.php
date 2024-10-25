<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php $name = "IvanFediunin";
  echo "<title>$name</title>";?>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
    rel="stylesheet">
</head>

<body>

  <header>
    <h2>
    <a href="<?php	// начинаем первый PHP скрипт

      $name='Главная'; // переменная с текстом ссылки
      $link='index.php';	// переменная с адресом ссылки
      $current_page=true;	// переменная, определяющая активность пункта меню

      echo $link;	// выводим адрес ссылки

      ?>"><?php	// начинаем второй PHP скрипт

      if( $current_page )	// если пункт меню активный
      //echo ' class="selected_menu"'; // выводим соответствующий класс 
      echo $name;	// выводим текст ссылки
      ?>
  </a>
  </h2>
  <h2>
    <a href="<?php	// начинаем первый PHP скрипт

      $name='Проекты'; // переменная с текстом ссылки
      $link='';	// переменная с адресом ссылки
      $current_page=true;	// переменная, определяющая активность пункта меню

      echo $link;	// выводим адрес ссылки

      ?>"><?php	// начинаем второй PHP скрипт

      if( $current_page )	// если пункт меню активный
      //echo ' class="selected_menu"'; // выводим соответствующий класс 
      echo $name;	// выводим текст ссылки
      ?>
      
    </a>
  </h2>
  <h2>
    <a href="<?php	// начинаем первый PHP скрипт

      $name='Обучение'; // переменная с текстом ссылки
      $link='';	// переменная с адресом ссылки
      $current_page=true;	// переменная, определяющая активность пункта меню

      echo $link;	// выводим адрес ссылки

      ?>"><?php	// начинаем второй PHP скрипт

      if( $current_page )	// если пункт меню активный
      //echo ' class="selected_menu"'; // выводим соответствующий класс 
      echo $name;	// выводим текст ссылки
      ?>
    </a>
</h2>
<h2>
    <a href="<?php	// начинаем первый PHP скрипт

      $name='Авторизация'; // переменная с текстом ссылки
      $link='/lab1/forma/forma.php';	// переменная с адресом ссылки
      $current_page=true;	// переменная, определяющая активность пункта меню

      echo $link;	// выводим адрес ссылки

      ?>"><?php	// начинаем второй PHP скрипт

      if( $current_page )	// если пункт меню активный
      // echo ' class="selected_menu"'; // выводим соответствующий класс 
      echo $name;	// выводим текст ссылки
      ?>
      
    </a>
    </h2>
    <h2>
    <a href="<?php	// начинаем первый PHP скрипт

      $name='Обратнная связь'; // переменная с текстом ссылки
      $link='/lab1/subpage/back_cal.php';	// переменная с адресом ссылки
      $current_page=true;	// переменная, определяющая активность пункта меню

      echo $link;	// выводим адрес ссылки

      ?>"><?php	// начинаем второй PHP скрипт

      if( $current_page )	// если пункт меню активный
      // echo ' class="selected_menu"'; // выводим соответствующий класс 
      echo $name;	// выводим текст ссылки
      ?>
    </a>
    </h2>

    <!-- <h2><a href="/lab1/index.html"></a></h2>
    <h2><a href="">Проекты</a></h2>
    <h2><a href="">Обучение</a></h2>
    <h2><a href="/lab1/forma/forma.html">Авторизация</a></h2>
    <h2><a href="/lab1/subpage/back_cal.html">Обратнная связь</a></h2> -->
  </header>

  <div class="main_text">
    <div>
      <h2 class="title">
        Федюнин Иван Максимович
      </h2>
      <h3 class="title">
        <?php
        $titels=array('Студент ','Мужщина ','Закончавший школу ','Переживший 1-й курс');
        foreach ($titels as $title) {
          echo $title;
        } 
        ?>
        2 курса Московского политехнического университета, будущий специалист по корпоративным информационным
        технологиям.
      </h3>
    </div><?php
    if( date('s') % 2 === 0 ) // если секунда четная
    $name='1673965959_flomaster-club-p-programmist-risunok-krasivo-3.jpg';	// имя файла содержит "1"
    else	// иначе
    $name='fd88589ea5879ce797d805c9995bbb43.jpg';	// имя файла содержит "2"
    echo '<img src='.$name.' alt="Меняющаяся фотография">';
    ?>
  </div>

  <div class="table_place">
    <table>
      <tr>
        <th>Предмет</th>
        <th>Преподователь</th>
        <th>Ожидаемая/Полученная оценка</th>
      </tr>
      <tr>
        <td>Электронный документо оборот</td>
        <td>Смернова и Кулибаба В.С.</td>
        <td>5</td>
      </tr>
      <tr>
        <td>Основы тестирования</td>
        <td>Логачём М.С.</td>
        <td>5</td>
      </tr>
      <tr>
        <td>Основы пректирования бизнес процессов</td>
        <td>Логачём М.С.</td>
        <td>5</td>
      </tr>
      <tr>
        <td>Математический анализ</td>
        <td>Да</td>
        <td>5</td>
      </tr>
    </table>

  </div>
  <footer>
    <h3><?php
    $date = date("m.d.y");
    $time = date('H-m:s');
    echo "Сформировано $date в $time";
    ?></h3>
    <h3 class="text">
      <li><a href="tel:+79626776139">+7 (962) 677-61-39</a></li>
    </h3>
    <h3 class="text">
      <li><a href="mailto:ivan@fediunin.ru">ivan@fediunin.ru</a></li>
    </h3>
  </footer>
</body>

</html>
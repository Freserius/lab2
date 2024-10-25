<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back words</title>
    <link rel="stylesheet" href="/lab1/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
</head>

<body class="back_call">
    <header>
        <h2>
        <a href="<?php	// начинаем первый PHP скрипт
    
          $name='Главная'; // переменная с текстом ссылки
          $link='/lab1/index.php';	// переменная с адресом ссылки
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

    <form action="/lab1/subpage/again_baccal.php" method="Post" class="meseg">
        <p><input type="text" id="name" name="name" <?php if(isset($_GET["n"])){ echo "value =".$_GET['n'];}?> placeholder="ФИО.." required> </p>
        <p><input type="email" id="email" name="email" <?php if(isset($_GET["e"])){ echo "value =".$_GET['e'] ;}?> placeholder="Email.." required></p>
        <p> От-куда узнали о этом сайте? </p>
        <p><input type="radio" name="from" value="frends" <?php if (isset($_GET["f"])){if ($_GET['f'] == "frends"){ echo "checked";}}?>> От друзей </p>
        <p><input type="radio" name="from" value="social_net"  <?php if (isset($_GET["f"])){if ($_GET['f'] == "social_net"){ echo "checked";}}?>> В социальных сетях </p>
        <p><input type="radio" name="from" value="adversting"  <?php if(isset($_GET["f"])){if ($_GET['f'] == "adversting"){ echo "checked";}}?>> В рекламе</p>
        <select name = "category">
            <option value="1"> Пожелание </option>
            <option value="2"> Жалоба </option>
        </select>
        <p> Текст обращения: </p>
        <p><textarea name = "mesage" rows="10" cols="45"></textarea></p>
        <p><input id = "attachment" name = "attachment" type="file">
        <p><input type="checkbox" id="remember" name="remember" value="Yes">Согласен на обработку персональных данных
        </p>
        <input type="submit" value="Send">
        <input type="hidden" name="user_id" value="6">
    </form>
    <footer>
        <h3>Контакнные данные:</h3>
        <h3 class="text">
            <li><a href="tel:+79626776139">+7 (962) 677-61-39</a></li>
        </h3>
        <h3 class="text">
            <li><a href="mailto:ivan@fediunin.ru">ivan@fediunin.ru</a></li>
        </h3>
    </footer>
</body>
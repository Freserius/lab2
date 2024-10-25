<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма обратной связи</title>
    <link rel="stylesheet" href="/lab1/style.css">
</head>
<body class = "masage_system">
    <div class = "meseg">
    <?php
    //include 'D:\vs_code\vebTechnologi\lab1\subpage\back_cal.php'
    ?>
    <?php 
    if(isset($_GET['name'])){
        $name=$_GET['name'];
        $email=$_GET['email'];
        $from=$_GET['from'];
        $category=$_GET['category'];
    }
    echo '<p> Здравствуйте, '.$_POST['name'].'</p>';//выводим ФИО
  if ($_POST['category'] == '1'){ //проверяем тип обращения
         echo '<p>Спасибо за ваше предложение:</p>';
         echo '<p><textarea>'.$_POST['mesage'].'</textarea></p>';//вывод текста сообщения
  }else{
         echo '<p>Мы рассмотрим Вашу жалобу:</p>';
         echo '<p><textarea>'.$_POST['mesage'].'</textarea><p>';
  }
  if (isset($_POST['attachment']) & $_POST['attachment'] != '') echo 'Вы приложили следующий файл: '.$_POST['attachment'];
  echo '<p><a class="btn" href="/lab1/subpage/back_cal.php?n='.$_POST['name'].'&e='.$_POST['email'].'&f='.$_POST['from'].'">Заполнить снова</a><p>';

?>
</div>
</body>
</html>
<?
if((isset($_POST['brand'])&&$_POST['brand']!="")&&(isset($_POST['tel'])&&$_POST['tel']!="")&&(isset($_POST['model'])&&$_POST['model']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'd.derkach93@gmail.com , 9953@ukr.net'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Заявка "Узнать стоимость своего авто в пару кликов"'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Марка: '.$_POST['brand_name'].'</p>
                        <p>Модель: '.$_POST['model_name'].'</p>
                        <p>Год: '.$_POST['year'].'</p>
                        <p>Телефон: '.$_POST['tel'].'</p>                        
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Отправитель <from@example.com>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}
?>
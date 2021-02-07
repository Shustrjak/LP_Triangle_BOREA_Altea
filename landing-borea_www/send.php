<?php 

if(isset($_POST['submit'])){
    $to = "example@example.com"; // Здесь нужно написать e-mail, куда будут приходить письма
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $phone= $_POST['phone'];
    $email= $_POST['email'];
    $subject = "Форма отправки сообщений с сайта";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " оставил сообщение:" . "\n\n" . $first_name . "\n\n" . $phone . "\n\n" . $email . "\n\n" . "Покупка AlteaBorea" ;
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
	
    mail($to,$subject,$message,$headers);
   // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender - Отключено!
    $content = "<div class='php-list'> Сообщение отправлено. Спасибо Вам, $first_name, мы скоро свяжемся с Вами.<br><br><a href='http://alteaborea.ru/'>Вернуться на сайт.</a></div> <style>.php-list{
        @font-face {
            font-family: Gilroy-Light; 
            src: local('Gilroy-Light'); 
            url('../fonts/Gilroy-Light.otf');
                    } 
        font-family: Gilroy-Light; 
        font-size:24px; 
        text-align: center;
        pading: 50%;
        margin-top:400px;
    }</style>";
    echo $content;
}

?>
<!--Переадресация на главную страницу сайта, через 3 секунды-->
<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="http://alteaborea.ru/");}
window.setTimeout("changeurl();",5000);
</script>
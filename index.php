<?php include "blocks/header.php" ?>

<div class="scroll-wrapper">
    <section class='section-1'>
        <div class="section-content">
            <img src="src/image/1.png" alt="">
            <div class="section-text">
                <h1>Сервис психологического тестирования для образовательных учреждений</h1>
                <div class="section-describe">
                    <p>✔ Тщательно составленные тесты</p>
                    <p>✔ Расшифровки тестов в личном кабинете</p>
                    <p>✔ Подробный анализ тестирования</p>
                    <p>✔ Отслеживание результатов сотрудников</p>
                    <p>✔ Прохождение тестирования дистанционно</p>
                </div>
            </div>
        </div>
    </section>
    <section class='section-2'>
        <div class="section-content">
                <img src="src/image/2.png" alt="">
                <div class="section-text">
                    <h1>Удобно. Бесплатно. Безопасно.</h1>
                    <div class="section-describe">
                        <p>Использование сервиса бесплатно. Заполнив простую форму, Вы станете участником программы психологического тестирования сотрудников.</p>
                    </div>
                </div>
            </div>
    </section>
    <section class='section-3' id='beMember'>
        <h1>Стать участником программы</h1>
        <div class="section-form">
            <p>Заполните форму, чтобы стать партнёром программы психологического тестирования сотрудников. Мы свяжемся с Вами в ближайшее время для уточнения правил использования сервиса.</p>
        </div>
        <div class="section-content">
            <img src="src/image/2.png" alt="">
            <div class="section-getUse">
                <form method="POST">
                    <div class="form__get">
                        <label for="">Ваше имя:</label>
                        <input type="text" name='name'>
                    </div>
                    <div class="form__get">
                        <label for="">Ваш e-mail:</label>
                        <input type="email" name='email'>
                    </div>
                    <div class="form__get">
                        <label for="">Организация, которую Вы представляете:</label>
                        <input type="textarea" name='company'>
                    </div>
                    <input type="submit" class="main-btn btn-primary" value="Отправить" name='send'>
                </form>

            </div>
        </div>
    </section>
</div>

<?php 
     if ( $_POST['send'] )
     {
        ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
         $from =  $_POST['email'] ;
         $to = "vasilyeva-yulia.work@yandex.ru";
         $company = $_POST['company'];
         $name = $_POST['name'];
         $headers = "From:" . $from;
         mail($to,$company,$name, $headers);
         echo "<script>alert('Запрос отправлен')</script>";
     }
 
?>

<?php include "blocks/footer.php" ?>
<?php include "blocks/header.php" ?>

<section class="login">
    <div class="login-content">
        <h1>Авторизация</h1>
        <form method="POST">
            <div class="form__label">
                <label for="">Введите логин:</label>
                <input type="text" name='login'>
            </div>
            <div class="form__label">
                <label for="">Введите пароль:</label>
                <input type="password" name='password'>
            </div>
            <input type="submit" class="main-btn btn-primary" value="Войти" name='authBtn'>
        </form>
    </div>
    <a href="index.php#beMember" class='login-beMember'>Стать участником программы</a>
</section>

<?php include "blocks/footer.php" ?>


<?php
    if (isset($_POST['authBtn'])) {
        $userLogin = $_POST['login'];
        $userPassword = $_POST['password'];
        if ($userLogin == '') unset($userLogin);
        if ($userPassword =='') unset($userPassword);
        if (empty($userLogin) or empty($userPassword)) {
            echo "<script>alert('Вы ввели не всю информацию, вернитесь назад и заполните все поля!');</script>";
        } else {
            $query = mysqli_query($link, "SELECT * FROM users WHERE login='".$userLogin."'");
            //извлекаем из базы все данные о пользователе с введенным логином
            $myrow = mysqli_fetch_array($query);
            if (empty($myrow['password'])) {
                echo "<script>alert('Неправильно введен логин или пароль. Попробуйте еще раз!');</script>";
            } else {
                if ($myrow['password']==$userPassword) {
                    setcookie('login',$myrow['login']); 
                    setcookie('userID',$myrow['userID']);
                    setcookie('auth', '1');
                    header ('Location: index.php');
                }
            else {
            //если пароли не сошлись
            exit ("Извините, введённый вами login или пароль неверный.");
            }
            }
        }
    }

?>
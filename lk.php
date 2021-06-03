<?php include "blocks/header.php" ?>

<section class="lk">
    <div class="lk__wrapper">
        <h1>Персональные данные</h1>
        <div class="info">
            <div class="column">
                <div class="info__field">
                    <p class='info__label'>ФИО</p>
                    <p class='info__text'>Васильева Юлия Юрьевна</p>
                </div>
                <div class="info__field">
                    <p class='info__label'>Организация</p>
                    <p class='info__text'>ГУАП</p>
                </div>
                <div class="info__field">
                    <p class='info__label'>Должность</p>
                    <p class='info__text'>Преподаватель</p>
                </div>
            </div>
            <div class="column">
                <div class="info__field">
                    <p class='info__label'>Почта</p>
                    <p class='info__text'>test@test.ru</p>
                </div>
                <div class="info__field">
                    <p class='info__label'>Телефон</p>
                    <p class='info__text'>+7 (981) 123 78 56</p>
                </div>
                <div class="info__field">
                    <p class='info__label'>Дата последнего тестирования</p>
                    <p class='info__text'>01 июня 2021</p>
                </div>
            </div>
            <div class="column">
                <a href="javascript://" class="main-btn btn-primary">Изменить данные</a>
            </div>
        </div>
        <div class="tabs">
            <a href="javascript://" class='tab tab-1 active'>История тестирований</a>
            <a href="javascript://" class='tab tab-2'>Доступные тесты</a>
        </div>
        <div class="tab__content">
            <div class="tab__content--1">
                <table>
                    <tr>
                        <th>Дата прохождения</th>
                        <th>Название теста</th>
                    </tr>
                    <tr>
                        <td>29.05.2021</td>
                        <td>Тест 1</td>
                    </tr>
                    <tr>
                        <td>29.05.2021</td>
                        <td>Тест 1</td>
                    </tr>
                    <tr>
                        <td>29.05.2021</td>
                        <td>Тест 1</td>
                    </tr>
                </table>
            </div>
            <div class="tab__content--2">
                <?php 
                    $query = mysqli_query($link, 'SELECT * FROM tests');
                    while ($res = mysqli_fetch_array($query)) {
                ?>
                <div class="test">
                    <div class="test__name"><?php echo $res['nameTest'] ?></div>
                    <a href="javascript://" class="main-btn btn-primary" data-id=<?php echo $res['testID'] ?>>Пройти тест</a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>


<?php include "blocks/footer.php" ?>

<?php include "blocks/header.php" ?>

<?php 
            $query = mysqli_query($link, 'SELECT * FROM tests WHERE testID=' . $_COOKIE['testID']);
            $res = mysqli_fetch_array($query);
        ?>


<section class="testStart">
    <div class="name-describe">
    <h1><?php echo $res['nameTest'] ?></h1>
    <p><?php echo $res['describeTest'] ?></p>
    </div>
    <div class="rules">
    <h1>Инструкция по прохождению тестирования:</h1>
    <p><?php echo $res['guide'] ?></p>
    </div>
    <a href="test.php" class="main-btn btn-primary">Начать тестирование</a>
</section>


<?php include "blocks/footer.php" ?>


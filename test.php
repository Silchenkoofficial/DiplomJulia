<?php include "blocks/header.php" ?>

<?php 
    $queryQuestions = mysqli_query($link, 'SELECT * FROM questions WHERE testID=' . $_COOKIE['testID']);
    $count = mysqli_num_rows($queryQuestions);
    setcookie('countOfQuestion', $count);
?>

<section class="questions">
    <h1 id='count'></h1>
    <?php 
        while ($res = mysqli_fetch_array($queryQuestions)) {
    ?>
    <div class="question" data-id=<?php echo $res['questionID']; ?> data-key=<?php echo $res['keyID']; ?>>
        <p><?php echo $res['nameQuestion']; ?></p>
        <?php
            $queryAnswers = mysqli_query($link, "SELECT * FROM answers WHERE questionID=" . $res['questionID']);
            while ($answer = mysqli_fetch_array($queryAnswers)) { ?>
                <div class="answer main-btn btn-primary" data-id=<?php echo $answer['answerID'] ?>>
                    <p data-value=<?php echo $answer['valueAnswer'] ?>><?php echo $answer['nameAnswer']; ?></p>
                </div>
                <?php } ?>
    </div>
    <?php } ?>
    <div class="question result">
        <h1>Поздравляем, тест завершён!</h1>
        <p>Нажмите на "Посмотреть результат", чтобы увидеть подробный анализ пройденного тестирования.</p>
        <a href="testResult.php" class="main-btn btn-primary">Посмотреть результаты</a>
    </div>
</section>

<script src="src/js/testing.js"></script>
<?php include "blocks/footer.php" ?>

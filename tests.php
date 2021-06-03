<?php include "blocks/header.php" ?>
<section class="tests">
    <h1>Пройти онлайн-тестирование</h1>
    <div class="cards">

        <?php 
            $query = mysqli_query($link, 'SELECT * FROM tests');
            while ($res = mysqli_fetch_array($query)) {
                $imgIndex = random_int(1,6);
        ?>
            <div class="card" data-id=<?php echo $res['testID'] ?>>
                <img src=<?php echo 'src/image/icons/face' . $imgIndex . '.png'; ?> alt="">
                <p><?php echo $res['nameTest'] ?></p>
            </div>
        <?php } ?>
    </div>
</section>


<?php include "blocks/footer.php" ?>

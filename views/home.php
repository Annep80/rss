<section class="container-fluid">
    <div class="row ">
        <div class="firstSubject col-12 col-md-4">
            <h2><?=$choice1?></h2>
            <?php
            include __DIR__ . '/choice1.php';
            ?>
        </div>
        <div class="secondSubject  col-12 col-md-4">
            <h2><?=$choice2?></h2>
            <?php
            include __DIR__ . '/choice2.php';
            ?>
        </div>
        <div class="thirdSubject col-12 col-md-4 ">
            <h2><?=$choice3?></h2>
            <?php
            include __DIR__ . '/choice3.php';
            ?>
        </div>
</section>
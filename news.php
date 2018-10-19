<?php
for ($i = 0; $i < count($news); $i++) {
    ?>
    <div class="card">
        <div class="card-header">
            <?= $news[$i]['theme'] ?>
        </div>
        <div class="card-body">
            <h5 class="card-title"><?= $news[$i]['title'] ?></h5>
            <p class="card-text"><?= $news[$i]['text'] ?></p>
        </div>
    </div>
    <?php
}
?>

<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbName = 'site';

$link = mysqli_connect($host, $user, $password, $dbName);
mysqli_query($link, "SET NAMES 'utf8'");

$query = "SELECT * FROM `news`";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$user = mysqli_fetch_assoc($result);

$query = "SELECT * FROM `news`";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$news = [];
while ($row = mysqli_fetch_assoc($result)) {
    $news[] = $row;
}
?>
<?php
for($i = 0; $i < count($news); $i++) {
    ?>
    <div class="card">
        <div class="card-header">
            <?=$news[$i]['theme']?>
        </div>
        <div class="card-body">
            <h5 class="card-title"><?=$news[$i]['title']?></h5>
            <p class="card-text"><?=$news[$i]['text']?></p>
        </div>
    </div>
    <?php
}
    ?>

<?php
require 'inc/header.php';

if (empty($_SESSION['login'])) {
    header('Location: index.php');
}
?>
    <section class="cookies container-fluid">
        <div class="row">
            <?php

            if (!empty($_COOKIE['cookie1'])) {
                echo $_COOKIE['cookie1'] . "<br>";
            }
            if (!empty($_COOKIE['cookie2'])) {
                echo $_COOKIE['cookie2'] . "<br>";
            }
            if (!empty($_COOKIE['cookie3'])) {
                echo $_COOKIE['cookie3'] . "<br>";
            }
            if (!empty($_COOKIE['cookie4'])) {
                echo $_COOKIE['cookie4'] . "<br>";
            }
            ?>
        </div>
    </section>
<?php require 'inc/footer.php'; ?>
<?php
if(isset($_SESSION['message'])){
    ?>
    <h4><?= $_SESSION['message']; ?></h4>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Hey!</strong> <?= $_SESSION['message']; ?>
    </div>
    <?php
        unset($_SESSION['message']);
}

?>
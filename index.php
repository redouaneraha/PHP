

<form action="addUser.php" method="POST">
    <input type="text" name="names">
    <input type="text" name="color">
    <input type="number" name="age">
    <input type="submit" name="userSubmit">
</form>

<a href="UsersView.php">Show Users</a>

<?php if(isset($_GET['addUser'])): ?>
    <p><?php echo $msg?></p>
    <?php endif;?>

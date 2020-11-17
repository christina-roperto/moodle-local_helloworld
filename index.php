<html>
<body>

<?php if ($_SERVER['REQUEST_METHOD'] == "POST"): ?>
    <h1>Hello <?php echo $_POST["name"]; ?></h1>
    <ul>
        <li><a href="/">Go to the site front page</a></li>
        <li><a href="index.php">Back to the Hello world main page</a></li>
    </ul>

<?php else: ?>

    <h1>Hello world!</h1>
    <form action="index.php" method="post">
        What is your name? <input type="text" name="name"><br>
        <input type="submit">
    </form>

<?php endif; ?>


</body>
</html>

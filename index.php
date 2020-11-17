<?php
require_once('../../config.php');
?>

<html>
<body>

<?php if ($_SERVER['REQUEST_METHOD'] == "POST"): ?>

    <?php
    $home = new moodle_url('/');
    $hello_world = new moodle_url('/local/helloworld');
    $name = optional_param("name", "x", PARAM_NOTAGS);
    ?>
    <h1>Hello <?php echo $name; ?></h1>
    <ul>
        <li><a href="<?php echo $home->out(); ?>">Go to the site front page</a></li>
        <li><a href="<?php echo $hello_world->out(); ?>">Back to the Hello world main page</a></li>
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

<?php
//$score = 50;
//if ($score > 40) {
//    echo 'high score';
//} else {
//    echo 'low score';
//}
//$val = $score > 40 ? 'high score' : 'low score';
//echo $val;
//echo $_SERVER['SERVER_NAME'] . '<br />';
//echo $_SERVER['REQUEST_METHOD'] . '<br />';
//echo $_SERVER['SCRIPT_FILENAME'] . '<br />';
//echo $_SERVER['PHP_SELF'] . '<br />';

if (isset($_POST['submit'])){

    session_start();

    $_SESSION['name'] = $_POST['name'];

    echo $_SESSION['name'];

    header('location: index.php');


};

?>
<!doctype html>
<html lang="en">
<head>
    <title>test</title>
</head>
<body>
<!--<p>--><?php //echo $score > 30 ? 'high score' : 'low score'; ?><!--</p>-->

<form action="<?php echo $_SERVER['PHP_SELF'] ; ?> " method="POST">
    <input type="text" name="name">
    <input type="submit" name="submit" value="submit">
</form>

</body>
</html>


<?php
//define('NAME','yoshi');
//
////$name = "nice";
//$age = 30;
//
////$name= "mario"
//$stringOne = 'my email is';
//$stringOne = 'meloo@what.com';
//echo $stringOne
//$name = 'meloo';

//echo "the people screams \"whaat\"";
//echo 'the people screams "whaat"';
//echo str_replace('m','w',$name);
//$radius = 25;
//$pi = 3.14;
//echo  $pi * $radius**2;
//echo 2 *(4+3)/2;
//echo $radius++;
//echo $radius;
// $age =20;
// $age *=2;
// echo $age
//$people = ['hey','you','yaay'];
//for ($i = 0; $i < count($people); $i++) {
//    echo $people[$i] . '<br />';
//}
//foreach ($people as $person) {
//    echo $person .'<br />';
//}
//$price = 900;
//if ($price > 1000) {
//    echo 'the condition is more than 1000';
//}else{
//    echo 'the condition is less than 1000';
//}
//function sayhello($name = 'world')
//{
//echo "Hello $name";
//}
//sayhello('people');
//function formatproduct($product){
//    echo "{$product['name']}";
//}
//formatproduct(['name'=> 'gold star'])

//if (isset($_GET['submit'])){
//    echo $_GET['email'];
//    echo $_GET['title'];
//    echo $_GET['ingredients'];
//}
$title = $email = $ingredients = '';
$errors = array('email'=>'', 'title'=> '', 'ingredients'=>'');
if (isset($_POST['submit'])) {
//    echo htmlspecialchars($_POST['email']);
//    echo htmlspecialchars($_POST['title']);
//    echo htmlspecialchars($_POST['ingredients']);
    if (empty($_POST['email'])) {
        $errors['email'] = "Email is required <br />";
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Invalid Email <br />";
        }
    }
    if (empty($_POST['title'])) {
        $errors['title'] = "Title is required <br />";
    } else {
        $title = $_POST['title'];
        if (!preg_match("/^[a-zA-Z\s ]+$/", $title)) {
            $errors['title'] = "Only letters and white space allowed";
        }
    }
    if (empty($_POST['ingredients'])) {
        $errors['ingredients'] = "Ingredients is required <br />";
    } else {
        $ingredients = $_POST['ingredients'];
        if (!preg_match("/^[a-zA-Z\s ]+$/", $ingredients)) {
            $errors['ingredients'] = "Only letters and white space allowed";
        }
    }

    if(array_filter($errors)){
        echo "There was an error";
    }else{
//        echo "Thank you!";
        header('location: index.php');
    }
}
?>

<!DOCTYPE html>
<html>

<?php include('templates/header.php'); ?>
<section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>
    <form action="add.php" method="POST" class="white">
        <label for="">Your Email</label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
        <div class="red-text"><?php echo $errors['email'];?></div>
        <label for="">Pizza Title</label>
        <input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
        <div class="red-text"><?php echo $errors['title'];?></div>
        <label for="">Ingredients (comma separated);</label>
        <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients)   ?>">
        <div class="red-text"><?php echo $errors['ingredients'];?></div>
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>

    </form>
</section>
<?php include('templates/footer.php'); ?>

</html>
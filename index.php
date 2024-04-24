<?php
global $conn;
include ('config/dp_connect.php');
//connect to database
// write query for all pizzas
$sql = "SELECT title, ingredients, id FROM pizzas ORDER BY created_at";
// make query & get result
$result = mysqli_query($conn, $sql);
// fetch the resulting rows as an array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);
//print_r($pizzas);

// to make ingredients arrays
//explode(',', $pizzas[0]['ingredients']);
?>

<!DOCTYPE html>
<html>

<?php include('templates/header.php'); ?>

<h4 class="center grey-text">Pizzas!</h4>

<div class="container">
    <div class="row">
        <?php foreach ($pizzas as $pizza) { ?>
            <div class="col s6 md">
                <div class="card z-depth-0">
                    <img src="img/pizza.svg" class="pizza">
                    <div class="card-content center">
                        <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
                        <ul>
                            <?php foreach (explode(',', $pizza['ingredients']) as $ing) { ?>
                                <li><?php echo htmlspecialchars($ing) ?></li>
                            <?php } ?>
                        </ul>

                    </div>
                    <div class="card-action right-align">
                        <a href="details.php?id=<?php echo  $pizza['id']?>" class="brand-text">more info</a>
                    </div>
                </div>
            </div>
        <?php } ?>
        <?php if (count($pizzas) >= 3) { ?>
            <p>There are 2 or more pizzas</p>
        <?php } else { ?>
            <p>There are less than 3 pizzas</p>
        <?php } ?>
    </div>
</div>
<?php include('templates/footer.php'); ?>

</html>
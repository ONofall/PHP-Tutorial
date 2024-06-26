<?php
session_start();
if($_SERVER['QUERY_STRING'] == 'noname'){
    session_unset();
};
$name = $_SESSION['name'] ?? 'Guest';
//header('location: index.php');
$gender = $_COOKIE['gender'];
?>

<head>
    <title>Nofal's Pizza</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style type="text/css">
        .brand{
            background: #cbb09c !important;
        }
        .brand-text{
            color: #cbb09c !important;
        }
        form{
            max-width: 460px;
            margin: 20px auto;
            padding: 20px;
        }
        .pizza{
            width: 100px;
            margin: 40px auto -30px;
            display: block;
            position: relative;
            top: -30px;
        }
    </style>
</head>
<body class="grey lighten-4">
<nav class="white z-depth-0">
    <div class="container">
        <a href="/index.php" class="brand-logo brand-text">Nofal Pizza</a>
        <ul id="nav-mobile" class="right hide-on-small-and-down">
            <li > <a  class="grey-text" href='/sandbox.php'>Hello (<?php echo htmlspecialchars($name) ?> <?php echo htmlspecialchars($gender) ?>)</a></li>
            <!--          <li class="grey-text">(--><?php //echo htmlspecialchars($gender) ?><!--)</li>-->

            <li><a href="/add.php" class="btn brand z-depth-0">Add a Pizza</a></li>
        </ul>
    </div>
</nav>
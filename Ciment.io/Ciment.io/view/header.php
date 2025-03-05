<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title><?="Hi"?></title>
    <script src="../script.js" defer></script>
</head>
<body>
<header>
    <nav class="visitor">
        <a href="header.php"><img src="../assets/bar_logo.png" class="logo-bar" alt=""></a>
        
        <div>
        <a href="home.php">Home</a>
        <a href="product.php">Product</a>
        <a href="home.php">Pricing</a>
        <a href="login.php" class="btn-white">Login</a>
        <a href="signup.php" class="btn-blue">Sign up</a>
        </div>

    </nav>
    <nav class="connected"></nav>

</header>


<?php include("bloc-1-home.php"); ?>
<?php include("bloc-2-home.php"); ?>
</body>
</html>




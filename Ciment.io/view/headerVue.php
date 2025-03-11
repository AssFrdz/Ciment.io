
<header>

<?php if(empty($_session["id"])):?>

<nav class="visitor">
        <a href="index.php?page=0"><img src="./assets/bar_logo.png" class="logo-bar" alt=""></a>
        
        <div>
        <a href="index.php?page=0">Home</a>
        <a href="index.php?page=1">Product</a>
        <a href="index.php?page=2">Pricing</a>
        <a href="index.php?page=3" class="btn-white">Login</a>
        <a href="index.php?page=4" class="btn-blue">Sign up</a>
        </div>

    </nav>

    <nav class="connected">
</nav>

<?php else: ?>

<nav class="connected">
    <a href="header.php"><img src="./assets/bar_logo.png" class="logo-bar" alt=""></a>

   
    <div class="account">
        <a href="#"><img src="./assets/settings.svg" alt=""></a>
        <a href="#" class="logo-acc">A</a>
    </div>
    
</nav>

<?php endif; ?>

</header>
<?php
    session_start();

    include ("sql/bdd.php");
?>


<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Ciment.io</title>
</head>

<body>
    <?php
        require_once("view/headerVue.php");
        if (isset($_GET['page'])) 
        {
            $page =  $_GET['page'];
        }else
        {
            echo '<script>window.location.href="index.php?page=0"</script>';
        }
    
        if(empty($_session["id"])){ 
        switch($page)
        {
            case 0: require_once('view/bloc-1-home.php');
            require_once('view/bloc-2-home.php');
            break;


            case 1: require_once('view/product.php');
            require_once('view/product.php');
            break;

            case 2: require_once('view/pricing.php');
            break;

            case 3: require_once('view/login.php');
            break;

            case 4: require_once('view/signup.php');
            break;

            default: require_once('view/bloc-1-home.php'); 
            require_once('view/bloc-2-home.php');
            break;

        }};

        if(!empty($_session["id"])){
            switch($page)
            {
                case 5: require_once('view/bloc-1-home.php');
                require_once('view/bloc-2-home.php');
                break;

            }
        }

        require_once("view/footerVue.php");
        
    ?>
</body>
</html>
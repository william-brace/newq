<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">

    <!--icons-->
    <script type="module" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.js"></script>

    <!--fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>


    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/WorkOutLog/topNav.html.php";
    include_once($path); ?>
    
    <div class="flex-container">
        <div class="white-box max-width">
            <a href="#" class="add-icon-link">
                <ion-icon class="add-icon-link__icon" name="add-circle-sharp"></ion-icon>                
                <span class="add-icon-link__text">ADD NEW WORKOUT</span>
            </a>
        </div>

        <div class="white-box max-width">
            <a href="#" class="add-icon-link">
                <ion-icon class="add-icon-link__icon" name="add-circle-sharp"></ion-icon>                
                <span class="add-icon-link__text">ADD WORKOUT</span>
            </a>
        </div>

        
    </div>

    <!-- <nav class="nav">
        <a href="#" class="nav__link nav__link--active">
            <ion-icon class="nav__icon" name="person-sharp"></ion-icon>
            <span class="nav__text">PROFILE</span>
        </a>
    
        <a href="#" class="nav__link">
            <ion-icon class="nav__icon" name="add-circle-sharp"></ion-icon>                
            <span class="nav__text">ADD WORKOUT</span>
        </a>
  
        <a href="#" class="nav__link">
            <ion-icon class="nav__icon" name="bar-chart-sharp"></ion-icon>                
            <span class="nav__text">STATISTICS</span>
        </a>
    </nav> -->

    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/WorkOutLog/bottomNav.html.php";
    include_once($path); ?>
    
</body>
</html>
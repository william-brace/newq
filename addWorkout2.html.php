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
    
    <div class="title-and-input flex-col-center">
        <div class="flex-row">
            <h3 class="title-and-input__title" >Workout1  </h3>
            <ion-icon class="title-and-input__icon" name="create-sharp"></ion-icon>
        </div>
        
        <input type="date" class="title-and-input__input"></input>
    </div>

    <div class="flex-container">
        

        <div class="white-box max-width">
            <a href="#" class="add-icon-link">
                <ion-icon class="add-icon-link__icon" name="add-circle-sharp"></ion-icon>                
                <span class="add-icon-link__text">ADD EXERCISES</span>
            </a>
        </div>
    </div>

    <div class=flex-container>
        <a href=# class="btn btn--blue"> Finish Workout </a>
        <a href=# class="btn btn--red"> Cancel Workout </a>
    </div>

    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/WorkOutLog/bottomNav.html.php";
    include_once($path); ?>
    
</body>
</html>
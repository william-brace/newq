<?php
session_start();
?>

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
    
    <div class="title-and-input">
        <div class="flex-container">
            <h3 class="title-and-input__title" >Welcome, <?php echo $_SESSION['username'] ?></h3>
            <a href=# class="btn btn--red  title-and-input__btn card__btn">Sign Out</a>
        </div>
        <div class="flex-row">
            <span>View by</span>
            <input type=text class="title-and-input__input title-and-input__input--workout"></input>
        </div>
    </div>

    <div class="flex-container">
    
            <div class=card>
                <div class="card__title card__title--workout">
                    <span>27/06/20</span>
                    <span>Workout1</span>
                    <a href="#" class="card__icon-link " >
                        <ion-icon class="card__icon--workout card__icon--close-circle" name="close-circle-sharp"></ion-icon>
                    </a>
                </div>
                <div class="card__slot card__slot--workout">
                    <p class="card__exercise-title">Bench Press</p>
                    <p>3 sets x 10 reps at 140kg</p>
                </div>
                <div class="card__slot card__slot--workout">
                    <p>Pull up</p>
                    <p>2 sets x 10 reps +</p>
                    <p>1 set x 8 reps</p>
                </div>
                <div class="card__slot card__slot--workout">
                    <p>Running</p>
                    <p>1 set x 10km in 36:00</p>
                </div>
                <a href=# class="btn btn--green card__btn card__btn--workout"> Edit Workout </a>
            </div>

            <div class=card>
                <div class="card__title card__title--workout">
                    <span>27/06/20</span>
                    <span>Workout1</span>
                    <a href="#" class="card__icon-link " >
                        <ion-icon class="card__icon--workout card__icon--close-circle" name="close-circle-sharp"></ion-icon>
                    </a>
                </div>
                <div class="card__slot card__slot--workout">
                    <p>Bench Press</p>
                    <p>3 sets x 10 reps at 140kg</p>
                </div>
                <div class="card__slot card__slot--workout">
                    <p>Pull up</p>
                    <p>2 sets x 10 reps +</p>
                    <p>1 set x 8 reps</p>
                </div>
                <div class="card__slot card__slot--workout">
                    <p>Running</p>
                    <p>1 set x 10km in 36:00</p>
                </div>
                <a href=# class="btn btn--green card__btn card__btn--workout"> Edit Workout </a>
            </div>

            <div class=card>
                <div class="card__title card__title--workout">
                    <span>27/06/20</span>
                    <span>Workout1</span>
                    <a href="#" class="card__icon-link " >
                        <ion-icon class="card__icon--workout card__icon--close-circle" name="close-circle-sharp"></ion-icon>
                    </a>
                </div>
                <div class="card__slot card__slot--workout">
                    <p>Bench Press</p>
                    <p>3 sets x 10 reps at 140kg</p>
                </div>
                <div class="card__slot card__slot--workout">
                    <p>Pull up</p>
                    <p>2 sets x 10 reps +</p>
                    <p>1 set x 8 reps</p>
                </div>
                <div class="card__slot card__slot--workout">
                    <p>Running</p>
                    <p>1 set x 10km in 36:00</p>
                </div>
                <a href=# class="btn btn--green card__btn card__btn--workout"> Edit Workout </a>
            </div>

            <div class=card>
                <div class="card__title card__title--workout">
                    <span>27/06/20</span>
                    <span>Workout1</span>
                    <a href="#" class="card__icon-link " >
                        <ion-icon class="card__icon--workout card__icon--close-circle" name="close-circle-sharp"></ion-icon>
                    </a>
                </div>
                <div class="card__slot card__slot--workout">
                    <p>Bench Press</p>
                    <p>3 sets x 10 reps at 140kg</p>
                </div>
                <div class="card__slot card__slot--workout">
                    <p>Pull up</p>
                    <p>2 sets x 10 reps +</p>
                    <p>1 set x 8 reps</p>
                </div>
                <div class="card__slot card__slot--workout">
                    <p>Running</p>
                    <p>1 set x 10km in 36:00</p>
                </div>
                <a href=# class="btn btn--green card__btn card__btn--workout"> Edit Workout </a>
            </div>

            <div class=card>
                <div class="card__title card__title--workout">
                    <span>27/06/20</span>
                    <span>Workout1</span>
                    <a href="#" class="card__icon-link " >
                        <ion-icon class="card__icon--workout card__icon--close-circle" name="close-circle-sharp"></ion-icon>
                    </a>
                </div>
                <div class="card__slot card__slot--workout">
                    <p>Bench Press</p>
                    <p>3 sets x 10 reps at 140kg</p>
                </div>
                <div class="card__slot card__slot--workout">
                    <p>Pull up</p>
                    <p>2 sets x 10 reps +</p>
                    <p>1 set x 8 reps</p>
                </div>
                <div class="card__slot card__slot--workout">
                    <p>Running</p>
                    <p>1 set x 10km in 36:00</p>
                </div>
                <a href=# class="btn btn--green card__btn card__btn--workout"> Edit Workout </a>
            </div>

            
    </div>

    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/WorkOutLog/bottomNav.html.php";
    include_once($path); ?>
    
</body>
</html>
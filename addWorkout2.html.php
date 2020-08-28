<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css?id=1234">

    <!--icons-->
    <script type="module" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.js"></script>

    <!--fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">

    <!-- javascript -->
    <script type='module' src="/WorkOutLog/src/controllers/workoutController.js" ></script>
    <script type='module' src="/WorkoutLog/src/search-list.js" ></script>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous" defer></script>
    <script src="./lib/datedropper.pro.min.js" defer></script>
    <link rel="stylesheet" href="./lib/datepicker-theme.css">
    



    <title>Document</title>
</head>
<body>

    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/WorkOutLog/topNav.html.php";
    include_once($path); ?>
    
    <form>
    <div class="title-and-input flex-col-center">
        <div class="flex-row">
            <input type=text class="title-and-input__input--big" placeholder="Workout1" ></input>
            <ion-icon class="title-and-input__icon" name="create-sharp"></ion-icon>
        </div>
        
        <input type=text class="title-and-input__input" id=usr1 data-datedropper data-dd-theme="datepicker-theme" data-dd-large="true" placeholder="Select a date!"></input>
    </div>
    <div class="flex-container" id="exercise-container">
        <div class=card>
                    <div class="card__title">
                        <span>Bench Press</span>
                    </div>
                    <div class="card__slot">
                        <div class="flex-col-center">
                            <span>Set</span>
                            <input class="card__input input" type="number" >
                        </div>
                        <span class="card__text">X</span>
                        <div class="flex-col-center">
                            <span>Reps</span>
                            <input class="card__input" type="number" >
                        </div>
                        <span class="card__text">at</span>
                        <div class="flex-col-center">
                            <span>Weight</span>
                            <input class="card__input" type="number">
                        </div>
                        <a href="#" class="card__icon-link">
                            <ion-icon class="card__icon card__icon--checkmark" name="checkmark-circle-sharp"></ion-icon>
                        </a>
                        <a href="#" class="card__icon-link">
                            <ion-icon class="card__icon card__icon--close-circle" name="close-circle-sharp"></ion-icon>
                        </a>
                    </div>
                    <div class="card__slot">
                        <div class="flex-col-center">
                            <span>Set</span>
                            <input class="card__input" type="number">
                        </div>
                        <span class="card__text">X</span>
                        <div class="flex-col-center">
                            <span>Reps</span>
                            <input class="card__input" type="number">
                        </div>
                        <span class="card__text">at</span>
                        <div class="flex-col-center">
                            <span>Weight</span>
                            <input class="card__input" type="number">
                        </div>
                        <a href="#" class="card__icon-link">
                            <ion-icon class="card__icon card__icon--checkmark" name="checkmark-circle-sharp"></ion-icon>
                        </a>
                        <a href="#" class="card__icon-link">
                            <ion-icon class="card__icon card__icon--close-circle" name="close-circle-sharp"></ion-icon>
                        </a>
                    </div>
                    <div class="card__slot">
                        <div class="flex-col-center">
                            <span>Set</span>
                            <input class="card__input" type="number">
                        </div>
                        <span class="card__text">X</span>
                        <div class="flex-col-center">
                            <span>Reps</span>
                            <input class="card__input" type="number">
                        </div>
                        <span class="card__text">at</span>
                        <div class="flex-col-center">
                            <span>Weight</span>
                            <input class="card__input" type="number">
                        </div>
                        <a href="#" class="card__icon-link">
                            <ion-icon class="card__icon card__icon--checkmark" name="checkmark-circle-sharp"></ion-icon>
                        </a>
                    
                    </div>
                    <a href=# class="btn btn--green card__btn"> Add Set </a>
                </div>
            </div>

    <div class="flex-row">
        <div class="search-list" id="search-list">
            <!-- <div class="white-box max-width">
                <a href="#" class="add-icon-link">
                    <ion-icon class="add-icon-link__icon" name="add-circle-sharp"></ion-icon>                
                    <span class="add-icon-link__text">ADD EXERCISES</span>
                </a>
            </div> -->

            <input class="search-list__input" type="text" id="myInput" placeholder="Search for exercise..">

            <ul class=search-list__list id="myUL">
                <li class="search-list__item weightlifting"  >Bench Press</li>
                <li class="search-list__item bodyweight">Pull up</li>
                <li class="search-list__item cardio">Running</li>
                <!-- <li class="search-list__item">Bob</li>
                <li class="search-list__item">Calvin</li>
                <li class="search-list__item">Christina</li>
                <li class="search-list__item">Cindy</li> -->
            </ul>
            <button class="search-list__btn btn--green" id='btn-add-exercises' >Add Exercises</button>
        </div>
    </div>

    <div class=flex-container>
        <a href=# class="btn btn--blue"> Finish Workout </a>
        <a href=# class="btn btn--red"> Cancel Workout </a>
    </div>

    </form>

    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/WorkOutLog/bottomNav.html.php";
    include_once($path); ?>
    
</body>
</html>
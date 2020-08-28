import * as workoutModal from '../models/workoutModel.js';
import * as workoutView from '../views/workoutView.js';
let uniqid = require('uniqid');

(function(window, document, undefined){

    // code that should be taken care of right away
    console.log('penis');
    
    window.onload = init;
    
    //code that should be taked care of after page is fully loaded
    function init(){
        

        const createNewWorkout = document.getElementById('create-new-workout');
        
        
        //if stat5ement for all buttons on all pages to launch event listeners
        if (createNewWorkout) {
            console.log(createNewWorkout);

            createNewWorkout.addEventListener('click', () => {

                //Creates new blank workout and saves its values to local storage
                workoutModal.createNewBlankWorkout();
            });
        }
        
        /*
        Workout process:

        ON page 1:
        When create new workout button is pressed, create new blank workout and save it to local storage and send
        user to page 2.

        On page 2: 
        1.  listen for click on add exercises button on the bottom of exercises search field which will which will 
        add blank exercise cards for the exercises selected above the search menu
         */
        
        const addExercisesBtn = document.querySelector('#btn-add-exercises');

        //if on addWorkout2 page
        if (addExercisesBtn) {
            window.onload = workoutView.createExerciseCards();

            let editIcon = document.querySelector('.title-and-input__icon').addEventListener('click', () => {
                document.querySelector('.title-and-input__input--big').focus();
            })

            addExercisesBtn.addEventListener('click', workoutView.createExerciseCards);
        }

        // 2. Use event delegation to listen to clicks of buttons within exercise cards, when green tick is pressed,
        // workout object is updated and pushed to local storage, when red button is pressed set it caneled and removed
        // from workout and local storage.

        // 2. listen for click on finish workout and cancel workout buttons
        // If finish workout is clicked and no exercises have been selected or filled out, give prompt and dont allow
        //  to finish, otherwise take user to 


       
        
        
    }
    
    })(window, document, undefined);

   
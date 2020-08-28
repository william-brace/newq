export const clearExercises = () => {
    document.getElementById('exercise-container').innerHTML = "";
}

//Make this function so that instead of always creating empty cards, it creates cards based on what is in 
//local storage so that page resets or adding exercises doesnt wipe the slate clean

//Do do by looping through exercise pattern and looping through sets, appluing values as such, creating a dynamic html
//markup in the proccess which is displayed at the end
export const createExerciseCards = () => {
    console.log('This is working');

    let workout = JSON.parse(localStorage.getItem('workout'));

    let allExercises = workout.exercises;

    console.log(allExercises);
    clearExercises();

    allExercises.forEach(exercise => {

        const listItems = document.querySelectorAll('.search-list__item');

        if (listItems) {
            listItems.forEach(item => {
                if (exercise.name == item.innerText)
                {
                    console.log('match');

                    if (item.classList.contains('weightlifting')) {
                        var markup = `<div class=card>
                        <div class="card__title">
                            <span>${exercise.name}</span>
                        </div>
                        <div class="card__slot">
                            <div class="flex-col-center">
                                <span>Set</span>
                                <input class="card__input input" type="number">
                            </div>
                            <span class="card__text">X</span>
                            <div class="flex-col-center">
                                <span>Reps</span>
                                <input class="card__input" type="number" min=0 oninput="validity.valid||(value='');">
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
                            <a href=# class="btn btn--green card__btn"> Add Set </a>
                        </div>
                    </div>`;
                    }

                    if (item.classList.contains('bodyweight')) {
                        var markup = `<div class=card>
                        <div class="card__title">
                            <span>${exercise.name}</span>
                        </div>
                        <div class="card__slot">
                            <div class="flex-col-center">
                                <span>Set</span>
                                <input class="card__input input" type="number">
                            </div>
                            <span class="card__text">X</span>
                            <div class="flex-col-center">
                                <span>Reps</span>
                                <input class="card__input" type="number">
                            </div>
                            <span class="card__text"></span>
                                <a href="#" class="card__icon-link">
                                    <ion-icon class="card__icon card__icon--checkmark" name="checkmark-circle-sharp"></ion-icon>
                                </a>
                                <a href="#" class="card__icon-link">
                                    <ion-icon class="card__icon card__icon--close-circle" name="close-circle-sharp"></ion-icon>
                                </a>
                        </div>
                            <a href=# class="btn btn--green card__btn"> Add Set </a>
                        </div>
                    </div>`;
                    }

                    if (item.classList.contains('cardio')) {
                        var markup = `<div class=card>
                        <div class="card__title">
                            <span>${exercise.name}</span>
                        </div>
                        <div class="card__slot">
                            <div class="flex-col-center">
                                <span>Set</span>
                                <input class="card__input input" type="number">
                            </div>
                            <span class="card__text">for</span>
                            <div class="flex-col-center">
                                <span>Distance</span>
                                <input class="card__input" type="number">
                            </div>
                            <span class="card__text">in</span>
                            <div class="flex-col-center">
                                <span>Time</span>
                                <input class="card__input" type="number">
                            </div>
                                <a href="#" class="card__icon-link">
                                    <ion-icon class="card__icon card__icon--checkmark" name="checkmark-circle-sharp"></ion-icon>
                                </a>
                                <a href="#" class="card__icon-link">
                                    <ion-icon class="card__icon card__icon--close-circle" name="close-circle-sharp"></ion-icon>
                                </a>
                        </div>
                            <a href=# class="btn btn--green card__btn"> Add Set </a>
                        </div>
                    </div>`;
                    }
                    
                    document.getElementById('exercise-container').insertAdjacentHTML('beforeend', markup);
                }
            });
        }  
    });
}


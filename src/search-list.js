

const input = document.querySelector('#myInput');
const listItems = document.querySelectorAll('.search-list__item');
const addExercisesBtn = document.querySelector('#btn-add-exercises');




input.addEventListener('input', filter);

function filter() {
	let search = input.value.toLowerCase();

	listItems.forEach(function(li) {
		let text = li.innerHTML.toLowerCase();
		let found = text.indexOf(search);
		if (search == '' || found != -1) {
			li.style.display = 'block';
		}else {
        li.style.display = 'none';
        }
	});
}

//Allow list multiple list items to be selected by adding "selected" class which gives them a background color
//to show they are selected. They can then be identified as selected by this same class
listItems.forEach(item => {
    item.addEventListener('click', () => {
        item.classList.toggle("search-list__item--selected");
    });
});

//addExercisesBtn.addEventListener('click', addExercises(listItems));


//Give uniqid to every exercise that is created and store it in local storage
//with the rest of the exerside data

//When user clicks green check to submit a set, id of specific card, which is dynamically placed into 
//div card, is checked and local storage for workout exercise is looped through until id matches, where then 
//the set is added/deleted and the view is updated (view update must be done without reloading all the card
//in order to make adding and deleteing sets a good user experience.) Try just reloading the 
//sets section of the card, Need a submit sets function,a de-submit sets function and a clear sets function, 
//as well as a delete sets function.

//Need a delete card button as well 

// Also, when any input in a set is changed, de-submit a set
addExercisesBtn.addEventListener('click', () => {


    listItems.forEach(item => {

        
        if (item.classList.contains("search-list__item--selected")) {
            let workout = localStorage.getItem('workout');
            console.log('found one selected');
            
            if (workout){
                workout = JSON.parse(workout);
                console.log(`This is parsed workout ${workout}`);
                
                if (item.classList.contains('weightlifting')) {
                    var exercise = {
                        name: item.innerText,
                        sets: [{set:"1",reps:"", weight: ""}]
                    }
                }
                else if (item.classList.contains('bodyweight')) {
                    var exercise = {
                        name: item.innerText,
                        sets: [{set:"1",reps:""}]
                    }
                }
                else if (item.classList.contains('cardio')) {
                    var exercise = {
                        name: item.innerText,
                        sets: [{set:"1",distance:"", time:""}]
                    }
                }
                

                workout.exercises.push(exercise);
                workout = JSON.stringify(workout);

                localStorage.setItem('workout', workout);
            }
        }
    })
});




function addExercises(searchItems) {
    
    
}


//give uniqid to every workout that is created
export const createNewBlankWorkout = () => {
    console.log('clicked!');

    var workout = {
        title:'Workout1',
        date: 'today',
        exercises: []
    };

    localStorage.setItem('workout', JSON.stringify(workout));
    console.log(JSON.parse(localStorage.getItem('workout')));
}

export const addExercises = searchItems => {
    
    
}
    
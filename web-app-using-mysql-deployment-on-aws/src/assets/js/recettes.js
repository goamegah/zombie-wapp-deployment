const mealDetailsContent = document.querySelector('.meal-details-content')
const recipeCloseBtn = document.getElementById('recipe-close-btn')
const mealList = document.getElementById('meal')

console.log(mealDetailsContent);
console.log(recipeCloseBtn);
console.log(mealList);
//fetch('http://localhost:8080/item.php');

mealList.addEventListener("click", getMealRecipe)
recipeCloseBtn.addEventListener("click", ()=>{
    recipeCloseBtn.parentElement.classList.remove("showRecipe");
});

// get recipe of meal

function getMealRecipe(e){
    e.preventDefault();
    //console.log(e.target);
    if (e.target.classList.contains("recipe-btn")){
        let mealItem = e.target.parentElement.parentElement;
        //console.log(mealItem);
        fetch('./../../meal.php')
            .then(response => response.json())
            .then(data => mealRecipeModal(data, mealItem.dataset.id));
    }
}

function mealRecipeModal(meal, id){
    //console.log(meal);
    //console.log(id)
    meal = meal[id-1];
    console.log(meal)
    let html =
        `    <h2 class="recipe-title"> ${meal.title}</h2>
             <p class="recipe-author"> ${meal.username}</p>
             <div class="recipe-instruct">
                <h3> Instructions : </h3>
                <p> ${meal.descript}</p>
             </div> 
        `;
    mealDetailsContent.innerHTML = html;
    mealDetailsContent.parentElement.classList.add('showRecipe');
}




// overwrite le display:none; de la modale après click sur .btn-add-todo
// pour permettre son affichage
const $addButton = document.querySelector('.btn-add-todo');

$addButton.addEventListener('click', function () {
    $addButton.parentNode.parentNode.children[2].style = "display: flex;";
    console.log($addButton.parentNode.parentNode.children[2]);
})

// remet la modale en display:none; après click sur .icon-close
const $closeModal = document.querySelector('.icon-close');

$closeModal.addEventListener('click', function () {
  $closeModal.parentNode.parentNode.style = "display: none;";
  console.log($closeModal.parentNode.parentNode)
})

/* Pour chaque élément de la table todolist : 
    eleve le display:none; au formulaire is-hidden et met le 
    display:none; a .todo--title lors du click sur élément .update-icon
    Fait l'inverse si click une deuxième fois sur .update-icon
    */
const $updateTodo = document.querySelectorAll('.update-icon');

$updateTodo.forEach(function (button){
    button.parentNode.addEventListener('click', function() {
        this.parentNode.children[0].classList.toggle('is-hidden');
        this.parentNode.children[1].classList.toggle('is-hidden');
        console.log(this.parentNode.children[1].classList);
    })
})
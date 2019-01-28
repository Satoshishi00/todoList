const $addButton = document.querySelector('.btn-add-todo');

$addButton.addEventListener('click', function () {
    $addButton.parentNode.parentNode.children[2].style = "display: flex;";
    console.log("bip");
    console.log($addButton.parentNode.parentNode.children[2]);
})

const $closeModal = document.querySelector('.icon-close');

$closeModal.addEventListener('click', function () {
  $closeModal.parentNode.parentNode.style = "display: none;";
  console.log($closeModal.parentNode.parentNode)
})

const $updateTodo = document.querySelectorAll('.update-icon');

$updateTodo.forEach(function (button){
    button.parentNode.addEventListener('click', function() {
        this.parentNode.children[0].classList.toggle('is-hidden');
        this.parentNode.children[1].classList.toggle('is-hidden');
        console.log(this.parentNode.children[1].classList);
    })
})
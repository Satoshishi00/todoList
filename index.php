<?php

    require('serveur/Todo.php');

    $todo = new Todo();
    
    // création de la liste $todos constituée des objets de la table todolist
    $todos = $todo->getTodos();

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <title>TODO LIST</title>
    </head>
    <body>
    
        <!-- Header -->
        <div class="div-content">
            <h1>Liste des membres de la bibliothèque</h1>

            <button class="btn btn-add-todo">AJOUTER UN NOUVEL INSCRIT</button>
        </div>

        <!--Liste des éléments de la table todolist
            On obtient au affichage seulement s'il y a 
            un élément dans la table  -->
        <div class="container">
            <div class="todo--container">
                <?php foreach($todos as $todo): ?>
                <div class="todo">
                    <p class="todo--title"><?= $todo->todo ?></p>
                    <form class="todo--update-form is-hidden" action="requetes/update.php" method="POST">
                        <input type="hidden" name="id" value=<?= $todo->id ?>>
                        <input type="text" name="title" class="saisi-update" placeholder="<?= $todo->todo?>">
                        <button type="submit" class="button update-btn">EDIT</button>
                    </form>
                    <span class="icon">
                        <i class="fas fa-pencil-alt update-icon"></i>
                    </span>
                    <a href="requetes/delete.php?id=<?= $todo->id ?>" class="icon">
                        <i class="fas fa-trash-alt delete-icon"></i>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Modale : s'affiche après le sur button.btn-add-todo (voir js) -->
        <div class="modal--component">
            <div class="modal--content">
                <div class="icon icon-close">
                        <i class="fas fa-times"></i>
                </div>            
                <h2 class="title-modal">Ajouter un nouveau membre</h2>
                <form method="" class="form-modal" action="requetes/addTodo.php">
                    <input class="input-modal" type="text" name="todo" placeholder="Prénom Nom">
                    <button class="add-new-todo" type="submit">Ajouter</button>
                </form>
            </div>
        </div>
        <script src="js/main.js"></script>
    </body>
</html>
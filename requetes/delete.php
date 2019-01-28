<?php

    require('../serveur/Todo.php');

    $todo = new Todo();

    $todo->delete($_GET['id']);

    echo $_GET['id'];

    header('Location: ../index.php');


?>
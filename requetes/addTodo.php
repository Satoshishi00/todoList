<?php

    require('../serveur/Todo.php');

    $todo = new Todo();

    $todo->add($_GET["todo"]);

    header('Location: ../index.php');

?>
<?php

    require('serveur/Todo.php');

    $todo = new Todo();

    $todo->update($_POST);

    header('Location: index.php');
?>
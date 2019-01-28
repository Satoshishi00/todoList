<?php

    require 'Database.php';

    class Todo {
        
        private $bdd;

        public function __construct() {
            $this->bdd = new Database();
        }

        public function getTodos() {
            $this->bdd->query('SELECT * FROM todolist');
            return $this->bdd->resultSet();
        }

        public function add($data) {
            $this->bdd->query('INSERT INTO todolist (todo) VALUES (:todo)');
            $this->bdd->bind(':todo', $data,);
            $this->bdd->execute();
        }

        public function delete($id) {
            $this->bdd->query('DELETE FROM todolist WHERE id = :id');
            $this->bdd->bind(':id', $id);
            $this->bdd->execute();
            echo "bip";
        }

        public function update($data) {
            $this->bdd->query('UPDATE todolist SET todo=:todo WHERE id = :id');
            $this->bdd->bind(':todo', $data['title']);
            $this->bdd->bind(':id', $data['id']);
            return $this->bdd->execute();
        }
    }

?>
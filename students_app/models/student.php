<?php

class Student {
    public $Id;
    public $Name;

    public function __construct($id, $name) {
        $this->Id = $id;
        $this->Name = $name;
    }

    public static function getAll() {
        // Simuler des données d'étudiants (sans base de données pour l'instant)
        return [
            new Student(1, "Alice"),
            new Student(2, "Bob"),
            new Student(3, "Charlie")
        ];
    }
}
<?php

require 'models/Student.php';

// Simuler l'action de lister les étudiants
$students = Student::getAll();

// Inclure la vue pour afficher la liste
include 'views/student_list.php';
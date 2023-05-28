<?php

if ($_SERVER['REQUEST_METHOD'] !==  'POST') {
    echo 'Only Server Request is allowed';
    die();
}

include_once '.\vendor\autoload.php';
use \mannan\controllers\Student;

$student = new Student;
$student->store($_POST);
header('Location: index.php');



?>
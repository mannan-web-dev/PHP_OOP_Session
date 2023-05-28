<?php 
 namespace mannan\controllers;

Class Student
{
        public $id;
        public $name;
    public function store($data)
    {
        session_start();
        $_SESSION['students'][] = $data;
      
        echo '<pre>';
        print_r($_SESSION);
    }
}

?>
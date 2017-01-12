<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('student.php');

        $students = array();

        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;

        $myself = new Student();
        $myself->surname = "Kang";
        $myself->first_name = "Terry";
        $myself->add_email('home','terrykang7848@gmail.com');
        $myself->add_email('school','tkang25@my.bcit.ca');
        $myself->add_grade(96);
        $myself->add_grade(89);
        $myself->add_grade(96);
        $myself->add_grade(97);
        $myself->add_grade(88);
        $myself->add_grade(85);
        $myself->add_grade(83);
        $students['a00937143'] = $myself;
        


        ksort($students); // one of the many sort functions

        foreach($students as $student)
            echo $student->toString();
        ?>
    </body>
</html>
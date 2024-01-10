<?php

    declare(strict_types=1);

    require_once 'Student.php';

    $groupOne = [
        ['name' => 'Emi' , 'grade' => 90],
        ['name' => 'Yolei' , 'grade' => 0],
        ['name' => 'Ara' , 'grade' => 60],
        ['name' => 'Lycoris' , 'grade' => 60],
        ['name' => 'Daffodil' , 'grade' => 80],
        ['name' => 'Vam' , 'grade' => 90],
        ['name' => 'Silvio' , 'grade' => 0],
        ['name' => 'Archie' , 'grade' => 20],
        ['name' => 'Dewy' , 'grade' => 20],
        ['name' => 'Kira' , 'grade' => 70],
    ];

    $groupTwo = [
        ['name' => 'Zephyus' , 'grade' => 100],
        ['name' => 'Arabella' , 'grade' => 70],
        ['name' => 'Sylph' , 'grade' => 0],
        ['name' => 'Elowen' , 'grade' => 30],
        ['name' => 'Selwyn' , 'grade' => 60],
        ['name' => 'Neveah' , 'grade' => 60],
        ['name' => 'Elizabeth' , 'grade' => 100],
        ['name' => 'Balthazar' , 'grade' => 60],
        ['name' => 'Dizad' , 'grade' => 120],
        ['name' => 'Meyfire' , 'grade' => 0],
    ];

    $students= [];
    foreach($groupOne as $studentList) {
        $student = new Student($studentList['name'], $studentList['grade']);
        $students[]= $student; 
    }

    $groupOneTotal = 0;
    foreach($students as $student) {
        $groupOneTotal += $student->getGrade();
    }

    $numberOfStudentsInGroupOne = count($groupOne);
    if ($numberOfStudentsInGroupOne > 0) {
        $averageScore = $groupOneTotal / $numberOfStudentsInGroupOne;
        echo "The average score of group one is " . $averageScore;
    } else {
        echo "No students in group one";
    }


/* 
There's two groups, both of 10 students.
Every student has a name (even Jaqen) and gets a grade.
You can have some fun coming up with the content here :-)

Provide an easy way to calculate the average score of a group.
Add a function to move a student from one group to another.
Show the average score of both groups.
Move the top student from one group with the lowest scoring student from another.
Show the averages again - how were these affected?*/
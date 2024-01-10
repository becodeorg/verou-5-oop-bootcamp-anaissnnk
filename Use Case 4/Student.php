<?php
    declare(strict_types=1);

    class Student
    {
        private $name;
        private $grade;

        public function __construct(string $name, int $grade) {
            $this->name = $name;
            $this->grade = $grade;
        }

        public function getName() {
            return $this->name;
        }

        public function getGrade() {
            return $this->grade;
        }
    }


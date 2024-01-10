<?php

declare(strict_types=1);
require_once 'Content.php';

class Vacancies extends Content {
    public function showTitle() {
        echo $this->getTitle() . " - Apply now!";
    }
}
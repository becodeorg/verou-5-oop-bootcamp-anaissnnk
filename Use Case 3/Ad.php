<?php

declare(strict_types=1);

require_once 'Content.php';

class Ad extends Content
{
    public function showTitle() {
        echo strtoupper($this->getTitle());
    }

}
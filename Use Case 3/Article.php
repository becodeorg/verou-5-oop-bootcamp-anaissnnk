<?php

declare(strict_types=1);

require_once 'Content.php';

class Article extends Content
{
    public function showTitle() {
        echo $this->getTitle();
    }

}
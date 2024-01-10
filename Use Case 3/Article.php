<?php

declare(strict_types=1);

require_once 'Content.php';

class Article extends Content
{
    private $isBreakingNews;
    public function __construct (string $title, string $content, bool $isBreakingNews) {
        parent:: __construct($title, $content);
        $this->isBreakingNews = $isBreakingNews;
    }   

    public function showBreakingNews() {
        if($this->isBreakingNews === true) {
            echo "Breaking News! ";
        }
    }

    public function showTitle() {
        echo $this->getTitle();
    }

}
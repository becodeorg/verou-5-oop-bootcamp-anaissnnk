<?php

declare(strict_types=1);

class Article
{
    private $title;
    private $content;

    public function __construct (string $title, string $content) 
    {
        $this->title = $title;
        $this->content = $content;

    }

    public function getTitle() {
        return $this->title;
    }

    public function getContent() {
        return $this->content;
    }

    public function generateTitle() {
        //code to execute
    }
}




/*
We are preparing three types of content for a website:

Articles
Ads
Vacancies

All of those have a title and text. When showing the title, they are modified as follows:
    articles remain as they are, ads are shown in all caps and vacancies are appended with " - apply now!".
    The original title should still be retrievable, so no modification is permanent.

Have an array with two articles, one ad and one vacancy. Use this array to show all content types (title + text).

Bonus: an article can be marked as "breaking news".
If this is the case, the title is prepended with "BREAKING: ".
Extra bonus: display all the content with the appropriate html tags.
*/
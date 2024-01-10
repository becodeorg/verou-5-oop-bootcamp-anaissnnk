<?php

declare(strict_types=1);

require_once 'Article.php';
require_once 'Ad.php';
require_once 'Vacancies.php';


//Article
$article = new Article ('This is the article title', 'This is the article content', true);
echo $article ->showBreakingNews() . $article->getTitle() . "<br>" . $article->getContent();
echo "<br>" . "<br>";
//Ad
$ad = new Ad ('This is the Ad title', 'This is the ad content');
echo $ad->getTitle() . "<br>" . $ad->getContent();
echo "<br>" . "<br>";
//Vacancies
$vacancies = new Vacancies ('This is the vacancies title', 'This is the vacancies content');
echo $vacancies->showTitle() . "<br>" . $vacancies->getContent();
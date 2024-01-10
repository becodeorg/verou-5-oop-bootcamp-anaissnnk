<?php

declare(strict_types=1);

require_once 'Article.php';
require_once 'Ad.php';


//Article
$article = new Article ('This is the article title', 'This is the article content');
echo $article->getTitle() . "<br>" . $article->getContent();
echo "<br>" . "<br>";
//Ad
$ad = new Ad ('This is the Ad title', 'This is the ad content');
echo $ad->getTitle() . "<br>" . $ad->getContent();
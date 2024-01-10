<?php

declare(strict_types=1);

require_once 'Article.php';

$article = new Article ('This is the title', 'This is the content');
echo $article->getTitle() . "<br>" . $article->getContent();
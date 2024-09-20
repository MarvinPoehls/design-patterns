<?php

require "NewsPublisher.php";
require "EmailSubscriber.php";
require "SmsSubscriber.php";

$newsPublisher = new NewsPublisher();
$emailSubscriber = new EmailSubscriber();
$smsSubscriber = new SmsSubscriber();

$newsPublisher->attach($emailSubscriber);
$newsPublisher->attach($smsSubscriber);

$emailSubscriber->subscribe("poehls.marvin@test.de");
$emailSubscriber->subscribe("test@test.de");
$emailSubscriber->subscribe("example@example.de");

$smsSubscriber->subscribe("1234567890");

$news = getRequestParameter('news');
if ($news) {
    $newsPublisher->addNews($news);
}

include "view.php";

function getRequestParameter($key, $default = null) {
    if (isset($_REQUEST[$key])) {
        $value = trim($_REQUEST[$key]);

        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }
    return $default;
}

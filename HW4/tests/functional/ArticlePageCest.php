<?php

class ArticlePageCest
{
    // tests
    public function checkArticlePageThroughTheList(FunctionalTester $I)
    {
        $I->amOnPage('');
        $I->seeElement('#navbar-links > li:nth-child(2) > a');
        $I->click('#navbar-links > li:nth-child(2) > a');
        $I->seeElement('#post_558802 > article > h2 > a');

        codecept_debug($I->grabTextFrom('#post_558802 > article > h2 > a'));
        
        $I->click('#post_558802 > article > h2 > a');
        $I->seeElement('#post_558802 > div.post__wrapper');
    }
}

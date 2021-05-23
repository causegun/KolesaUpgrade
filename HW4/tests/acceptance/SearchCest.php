<?php

class SearchCest
{
    /**
     * Проверить поиск по тексту и количество найденных элементов
     */
    public function checkSearchByTextTest(AcceptanceTester $I)
    {
        $I->amOnPage('');
        $I->waitForElementVisible('#search-form-btn');
        $I->click('#search-form-btn');
        $I->waitForElementVisible('#search-form-field');
        $I->fillField('#search-form-field', 'codeception');
        $I->pressKey('#search-form-field', \Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->seeNumberOfElements('article', 20);
    }
}

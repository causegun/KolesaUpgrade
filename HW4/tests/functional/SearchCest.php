<?php

class ItemsCountCest
{
    /**
     * Проверить вывод списка товаров по запросу
     */
    public function checkItemsPageThroughTheList(FunctionalTester $I)
    {
        $I->amOnPage('');
        $I->seeElement('#search_query_top');
        $I->fillField('#search_query_top', 'Printed dress');
        $I->seeElement('#searchbox > button');
        $I->click('#searchbox > button');
        $I->seeNumberOfElements('.ajax_block_product', 5);
    }
}
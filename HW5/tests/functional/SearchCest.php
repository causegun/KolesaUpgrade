<?php

class SearchtCest
{
    /**
     * Проверить вывод списка товаров по запросу
     */
    public function checkItemsPageThroughTheList(FunctionalTester $I)
    {
        $searchQueryCss = '#search_query_top';
        $searchQueryXPath = '//input[@id="search_query_top"]';

        $searchButtonCss = '#searchbox > button';
        $searchButtonXPath = '//form[@id="searchbox"]/button';

        $productBlocksCss = '.ajax_block_product';
        $productBlocksXPath = '//ul[@class = "product_list grid row"]/li';
        
        $I->amOnPage('');
        $I->seeElement('#search_query_top');
        $I->fillField('#search_query_top', 'Printed dress');
        $I->seeElement('#searchbox > button');
        $I->click('#searchbox > button');
        $I->seeNumberOfElements('.ajax_block_product', 5);
    }
}

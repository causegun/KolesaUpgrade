<?php

use Page\Acceptance\SearchPage;

/**
 * Класс для проверки функции поиска
 */
class SearchCest
{
    /**
     * Проверить смену раскладки результатов поиска
     */
    public function checkSearchView(AcceptanceTester $I)
    {
        $searchPage = new SearchPage($I);

        $I->amOnPage(SearchPage::$URL);

        $searchPage->searchSummerDresses()
            ->checkDefaultGrid()
            ->checkGridView()
            ->clickListView()
            ->checkListView();
    }
}
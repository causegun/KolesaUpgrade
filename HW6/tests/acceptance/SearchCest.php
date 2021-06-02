<?php

use Page\Acceptance\MainPage;
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
        $mainPage = new MainPage($I);
        $searchPage = new SearchPage($I);

        $I->amOnPage(MainPage::$URL);

        $mainPage->searchSummerDresses();
        
        $searchPage->checkDefaultGrid()
            ->checkGridView()
            ->clickListView()
            ->checkListView();
    }
}
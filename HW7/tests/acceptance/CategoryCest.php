<?php

use Codeception\Example;
use Page\Acceptance\PostsPage;

/**
 * Класс для проверки соответствия заголовка выбранной категории
 */
class CategoryCest
{
    /**
     * Проверить соответствие текста заголовка названию выбранной категории постов и URL страницы
     * @param Example $data
     * @dataProvider getDataForCheckHeaderAndUrlEquality
     */
    public function checkHeaderAndUrlEquality(AcceptanceTester $I, Example $data)
    {
        $mainPage = new PostsPage($I);

        $I->amOnPage(PostsPage::$URL);

        $I->waitForElementClickable(PostsPage::$categoryList);
        
        $randomCategoryLink = sprintf(PostsPage::$categoryLinkFromList, $data['categoryType']);
        $I->click($randomCategoryLink);
        $I->seeInCurrentUrl($data['url']);

        $categoryText = $I->grabTextFrom($randomCategoryLink);
        $I->see($categoryText, PostsPage::$categoryHeader);
    }

    /**
     * Возвращает два рандомных массива с данными
     */
    private function getDataForCheckHeaderAndUrlEquality() 
    {
        $dataArray = array(
            ['categoryType' => 1, 'url' => 'top'],
            ['categoryType' => 2, 'url' => 'develop'],
            ['categoryType' => 3, 'url' => 'admin'],
            ['categoryType' => 4, 'url' => 'design'],
            ['categoryType' => 5, 'url' => 'management'],
            ['categoryType' => 6, 'url' => 'marketing'],
            ['categoryType' => 7, 'url' => 'popsci']
        );

        return [$dataArray[array_rand($dataArray)], $dataArray[array_rand($dataArray)]];
    }
}
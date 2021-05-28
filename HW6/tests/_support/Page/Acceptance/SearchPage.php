<?php
namespace Page\Acceptance;

class SearchPage
{
    /**
     * URL главной страницы
     */
    public static $URL = '';

    /**
     * Селектор ссылки на Dresses в каталоге
     */
    public static $dressesLink = '//div[@id="block_top_menu"]/ul/li[2]/a';

    /**
     * Селектор ссылки на Summer Dresses в каталоге
     */
    public static $summerDressesLink = '//div[@id="block_top_menu"]/ul/li[2]/ul/li[3]/a';

    /**
     * Селектор раскладки Grid при выборе раскладки Grid
     */
    public static $gridViewOnItem = '//li[@id="grid" and @class="selected"]';
    
    /**
     * Селектор раскладки Grid при выборе раскладки List
     */
    public static $gridViewOffItem = '//li[@id="grid"]';

    /**
     * Селектор раскладки List при выборе раскладки List
     */
    public static $listViewOnItem = '//li[@id="list" and @class="selected"]';
    
    /**
     * Селектор раскладки List при выборе раскладки Grid
     */
    public static $listViewOffItem = '//li[@id="list"]';

    /**
     * Селектор списка товаров при раскладке Grid
     */
    public static $gridViewProductList = '//ul[contains(@class, "grid")]';

    /**
     * Селектор списка товаров при раскладке List
     */
    public static $listViewProductList = '//ul[contains(@class, "list")]';

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    /**
     * Конструктор SearchPage
     */
    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

    /**
     * Находит Summer Dresses через каталог Dresses
     */
    public function searchSummerDresses()
    {
        $this->acceptanceTester->moveMouseOver(self::$dressesLink);
        $this->acceptanceTester->click(self::$summerDressesLink);

        return $this;
    }

    /**
     * Проверяет выбор раскладки Grid по умолчанию
     */
    public function checkDefaultGrid()
    {
        $this->acceptanceTester->waitForElement(self::$gridViewOnItem);
        $this->acceptanceTester->waitForElement(self::$listViewOffItem);

        return $this;
    }

    /**
     * Проверяет отображение раскладки Grid
     */
    public function checkGridView()
    {
        $this->acceptanceTester->waitForElement(self::$gridViewProductList);

        return $this;
    }

    /**
     * Проверяет отображение раскладки List
     */
    public function checkListView()
    {
        $this->acceptanceTester->waitForElement(self::$listViewProductList);
    }

    /**
     * Нажимает на раскладку List
     */
    public function clickListView()
    {
        $this->acceptanceTester->click(self::$listViewOffItem);

        return $this;
    }
}
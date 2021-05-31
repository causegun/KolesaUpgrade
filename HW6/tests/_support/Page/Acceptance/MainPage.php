<?php
namespace Page\Acceptance;

class MainPage
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
    }
}
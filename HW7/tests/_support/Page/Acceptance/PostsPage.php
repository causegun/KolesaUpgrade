<?php
namespace Page\Acceptance;

class PostsPage
{
    /**
     * URL главной страницы
     */
    public static $URL = '';

    /**
     * Локатор списка категорий постов
     */
    public static $categoryList = '//li[@class="nav-links__item"]';
    
    /**
     * Локатор ссылки на одну из категорий постов из списка
     */
    public static $categoryLinkFromList = '//li[@class="nav-links__item" and position()=%d]';

    /**
     * Локатор заголовка категории
     */
    public static $categoryHeader = '//div[contains(@class, "page-header")]';

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    /**
     * Конструктор PostsPage
     */
    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

}
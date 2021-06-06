<?php
namespace Page\Acceptance;

/**
 * Класс главной страницы
 */
class MainPage
{
    /**
     * URL главной страницы
     */
    public static $url = '';

    /**
     * Локатор ссылки на логин (Sign In)
     */
    public static $signInButton = '//a[@class="login"]';

    /**
     * Локатор ссылки на личный кабинет
     */
    public static $myAccountLink = '//a[@class="account"]';

    /**
     * Локатор блока первого товара из списка
     */
    public static $nthProductBlock = '//*[@id="homefeatured"]/li[%d]/div/div[2]/h5/a';

    /**
     * Локатор кнопки Quick View первого товара из списка
     */
    public static $nthProductQuickViewButton = '//*[@id="homefeatured"]/li[%d]/div/div[1]/div/a[2]';

}
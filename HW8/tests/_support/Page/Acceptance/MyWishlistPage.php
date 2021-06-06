<?php
namespace Page\Acceptance;

/**
 * Класс страницы с избранным
 */
class MyWishlistPage
{
    /**
     * Локатор столбца с количеством добавленного в избранное
     */
    public static $quantityColumn = '//td[@class="bold align_center"]';

    /**
     * Локатор иконки удаления товаров из избранного
     */
    public static $deleteFromWishlistIcon = '//a[@class="icon"]';

    /**
     * Локатор ссылки на выход из учетной записи
     */
    public static $signOutLink = '//a[@class="logout"]';

}
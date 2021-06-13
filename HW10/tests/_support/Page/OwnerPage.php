<?php
namespace Page;

class OwnerPage 
{
    /**
     * Локатор кнопки Snap //li[1]/b
     */
    public static $snapButton = '//*[@id="snap"]';

    /**
     * Локатор элементов списка
     */
    public static $li = '//li';

    /**
     * Локатор имен элементов списка
     */
    public static $userName = '//b';

    /**
     * Локатор текста с количеством оставшихся записей
     */
    public static $countSpan = '//span';
}
<?php
namespace Page\Acceptance;

/**
 * Класс iframe-страницы
 */
class FramePage
{
    /**
     * Локатор iframe
     */
    public static $productIframe = '//*[@class="fancybox-iframe"]';

    /**
     * Локатор кнопки Add to wishlist
     */
    public static $addToWishlistButton = '//*[@id="wishlist_button"]';

    /**
     * Локатор плашки об успешном добавлении
     */
    public static $addSuccessParagraph = '//p[@class="fancybox-error"]';

    /**
     * Локатор кнопки закрытия плашки об успешном добавлении
     */
    public static $addSuccessParagraphCloseButton = '//*[@id="product"]/div[2]/div/div/a';

    /**
     * Локатор кнопки закрытия iframe
     */
    public static $productIframeCloseButton = '//*[@title="Close"]';
    
}
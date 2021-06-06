<?php

use Page\Acceptance\LoginPage;
use Page\Acceptance\MainPage;
use Page\Acceptance\MyAccountPage;
use Page\Acceptance\MyWishlistPage;

/**
 * Класс для проверки добавления товара в избранное
 */
class WishListCest
{
    /**
     * Количество проверяемых товаров
     */
    public const PRODUCT_NMB = 2;

    /**
     * Выполняет логин
     */
    public function _before(AcceptanceTester $I)
    {
        $loginPage = new LoginPage($I);

        $I->amOnPage(MainPage::$url);
        $I->click(MainPage::$signInButton);
        
        $loginPage->fillLoginFieldsWith('kolesa@mail.com', 'kolesa');
        $I->click(LoginPage::$signInButton);
        
        $I->click(MyAccountPage::$mainPageLink);
    }

    /**
     * Очищает избраное и выходит из учетной записи
     */
    public function _after(AcceptanceTester $I)
    {
        $I->click(MyWishlistPage::$deleteFromWishlistIcon);
        $I->acceptPopup();
        $I->click(MyWishlistPage::$signOutLink);
    }

    /**
     * Проверяет количество добавленных товаров в избранное
     */
    public function checkMyWishlistProductsQuantity(\Step\Acceptance\AddToWishlistStep $I)
    {
        $I->addProductToWishlist(self::PRODUCT_NMB);
        
        $I->waitForElementClickable(MainPage::$myAccountLink);
        $I->click(MainPage::$myAccountLink);
        $I->click(MyAccountPage::$wishListLink);
        
        $actualQuantity = $I->grabTextFrom(MyWishlistPage::$quantityColumn);
        $I->assertEquals(self::PRODUCT_NMB, $actualQuantity, "checks quantities equality");
    }
}

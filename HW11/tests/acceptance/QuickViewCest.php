<?php

class QuickViewCest
{
    /**
     * Проверить текст товара в окне Quick View
     */
    public function checkItemTextTest(AcceptanceTester $I)
    {
        $I->amOnPage('');
        
        $I->see('Blouse', 'a.product-name');
        $I->moveMouseOver('#homefeatured > li:nth-child(2) > div > div.right-block > h5 > a');
        $I->waitForElementVisible('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view');
        $I->click('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view');

        $I->switchToIFrame('.fancybox-iframe');
        $I->see('Blouse', '#product > div > div > div.pb-center-column.col-xs-12.col-sm-4 > h1');
        
        $I->switchToIFrame();
    }
}

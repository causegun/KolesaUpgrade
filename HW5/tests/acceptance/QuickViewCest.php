<?php

class QuickViewCest
{
    /**
     * Проверить текст товара в окне Quick View
     */
    public function checkItemTextTest(AcceptanceTester $I)
    {
        $blouseLabelCss = '.ajax_block_product:nth-child(2) .product-name';
        $blouseLabelXPath = '//ul[@id="homefeatured"]/li[position()=2]//a[@class="product-name"]';
        
        $quickViewLinkCss = '#homefeatured .ajax_block_product:nth-child(2) a.quick-view';
        $quickViewLinkXPath = '//ul[@id="homefeatured"]/li[position()=2]//a[@class="quick-view"]';
        
        $iframeCss = '.fancybox-iframe';
        $iframeXPath = '//iframe[@class = "fancybox-iframe"]';
        
        $productLabelInIframeCss = '#product [itemprop="name"]';
        $productLabelInIframeXPath = '//body[@id="product"]//h1[@itemprop="name"]';

        $I->amOnPage('');
        
        $I->see('Blouse', 'a.product-name');
        $I->moveMouseOver('//ul[@id="homefeatured"]/li[position()=2]//a[@class="product-name"]');
        $I->waitForElementVisible('//ul[@id="homefeatured"]/li[position()=2]//a[@class="quick-view"]');
        $I->click('//ul[@id="homefeatured"]/li[position()=2]//a[@class="quick-view"]');

        $I->switchToIFrame('//iframe[@class = "fancybox-iframe"]');
        $I->see('Blouse', '//body[@id="product"]//h1[@itemprop="name"]');
        
        $I->switchToIFrame();
    }
}

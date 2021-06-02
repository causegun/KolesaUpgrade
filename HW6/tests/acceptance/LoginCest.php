<?php

use Page\Acceptance\LoginPage;

/**
 * Класс для проверки авторизации
 */
class LoginCest
{
    /**
     * Проверить отображение и закрытие блока ошибки авторизации при логине заблокированным юзернэймом
     */
    public function checkAuthErrorBoxTest(AcceptanceTester $I)
    {
        $loginPage = new LoginPage($I);

        $I->amOnPage(LoginPage::$URL);

        $loginPage->fillUsernameField(LoginPage::LOCKED_USERNAME)
            ->fillPasswordField()
            ->clickLoginButton()
            ->waitForAuthErrorBlockVisible()
            ->closeAuthErrorBlock()
            ->waitForAuthErrorBlockNotVisible();
    }
}

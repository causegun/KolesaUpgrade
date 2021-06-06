<?php
namespace Page\Acceptance;

/**
 * Класс страницы логина
 */
class LoginPage
{
    /**
     * Локатор поля ввода эл.почты
     */
    public static $emailInput = '//input[@id="email"]';
    
    /**
     * Локатор поля ввода пароля
     */
    public static $passwordInput = '//input[@id="passwd"]';

    /**
     * Локатор кнопки логина (Sign In)
     */
    public static $signInButton = '//button[@id="SubmitLogin"]';

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    /**
     * Конструктор LoginPage
     */
    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

    /**
     * Заполняет поля введеными эл.почтой и паролем
     */
    public function fillLoginFieldsWith(string $email, string $password)
    {
        $this->acceptanceTester->fillField(self::$emailInput, $email);
        $this->acceptanceTester->fillField(self::$passwordInput, $password);
    }
}
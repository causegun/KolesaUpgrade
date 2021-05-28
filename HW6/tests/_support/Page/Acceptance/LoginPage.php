<?php
namespace Page\Acceptance;

class LoginPage
{
    /** 
     * URL страницы авторизации
     */ 
    public static $URL = '';

    /**
     * Имя заблокированного пользователя
     */
    public const LOCKED_USERNAME = 'locked_out_user';

    /**
     * Стандартный пароль
     */
    public const PASSWORD = 'secret_sauce';

    /**
     * Селектор поля ввода имени пользователя
     */
    public static $usernameField = '#user-name';

    /**
     * Селектор поля ввода пароля
     */
    public static $passwordField = '#password';

    /**
     * Селектор кнопки Login
     */
    public static $loginButton = '#login-button';

    /**
     * Селектор блока ошибки авторизации
     */
    public static $authErrorBlock = '.error-message-container';

    /**
     * Селектор кнопки закрытия блока ошибки авторизации
     */
    public static $authErrorBlockCloseButton = '.error-button';

    /**
     * Селектор заголовка блока ошибки авторизации
     */
    public static $authErrorBlockHeading = '.error-message-container h3';

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
     * Заполняет поле ввода имени пользователя
     */
    public function fillUsernameField($param)
    {
        $this->acceptanceTester->fillField(self::$usernameField, $param);

        return $this;
    }

    /**
     * Заполняет поле ввода пароля
     */
    public function fillPasswordField()
    {
        $this->acceptanceTester->fillField(self::$passwordField, self::PASSWORD);

        return $this;
    }

    /**
     * Нажимает на кнопку Login
     */
    public function clickLoginButton() 
    {
        $this->acceptanceTester->click(self::$loginButton);

        return $this;
    }

    /**
     * Ожидает появление блока ошибки авторизации
     */
    public function waitForAuthErrorBlockVisible()
    {
        $this->acceptanceTester->waitForElement(self::$authErrorBlock);

        return $this;
    }

    /**
     * Закрывает блок ошибки авторизации
     */
    public function closeAuthErrorBlock()
    {
        $this->acceptanceTester->click(self::$authErrorBlockCloseButton);

        return $this;
    }

    /**
     * Ожидает скрытие блока ошибки авторизации
     */
    public function waitForAuthErrorBlockNotVisible()
    {
        $this->acceptanceTester->waitForElementNotVisible(self::$authErrorBlockHeading, 5);
    }
}

<?php
namespace Page\Acceptance;

class FormPage 
{
    /**
     * URL страницы
     */
    public static $URL = '';

    /**
     * Локатор поля имени
     */
    public static $firstNameField = '//*[@id = "firstName"]';

    /**
     * Локатор поля фамилии
     */
    public static $lastNameField = '//*[@id = "lastName"]';

    /**
     * Локатор поля эл.почты
     */
    public static $emailField = '//*[@type = "email"]';

    /**
     * Локатор поля номера телефона
     */
    public static $phoneNumberField = '//*[@id = "phoneNumber"]';

    /**
     * Локатор поля адреса
     */
    public static $addressField = '//*[@id = "address"]';

    /**
     * Локатор поля города
     */
    public static $cityField = '//*[@id = "city"]';

    /**
     * Локатор поля региона
     */
    public static $stateField = '//*[@id = "state"]';

    /**
     * Локатор поля почтового индекса
     */
    public static $postalField = '//*[@id = "postal"]';

    /**
     * Локатор переключателя метода оплаты карточкой
     */
    public static $cardPaymentMethodRadioButton = '//input[@id="input_32_paymentType_credit"]';

    /**
     * Локатор формы заполнениия данных карты оплаты
     */
    public static $cardTable ='//table[@id="creditCardTable"]';

    /**
     * Локатор поля имени в форме заполнения данных карты оплаты
     */
    public static $firstNameInCardFormField = '//input[@id="input_32_cc_firstName"]'; 

    /**
     * Локатор поля фамилии в форме заполнения данных карты оплаты
     */
    public static $lastNameInCardFormField = '//input[@id="input_32_cc_lastName"]';
    
    /**
     * Локатор поля номера карты оплаты
     */
    public static $creditCardNumberField = '//input[@id="input_32_cc_number"]';

    /**
     * Локатор поля кода безопасности
     */
    public static $creditCardSecurityCodeField = '//input[@id="input_32_cc_ccv"]';

    /**
     * Локатор поля выбора месяца истечения карты
     */
    public static $expirationMonthSelect = '//select[@id="input_32_cc_exp_month"]';

    /**
     * Локатор поля выбора года истечения карты
     */
    public static $expirationYearSelect = '//select[@id="input_32_cc_exp_year"]';

    /**
     * Локатор одного из месяцев истечения карты
     */
    public static $expirationMonthOption = '//select[@id="input_32_cc_exp_month"]/option[%d]';

    /**
     * Локатор одного из годов истечения карты
     */
    public static $expirationYearOption = '//select[@id="input_32_cc_exp_year"]/option[%d]';

    /**
     * Локатор поля адреса в форме заполнения данных карты оплаты
     */
    public static $addressInCardFormField = '//input[@id="input_32_addr_line1"]';

    /**
     * Локатор поля города в форме заполнения данных карты оплаты
     */
    public static $cityInCardFormField = '//input[@id="input_32_city"]';

    /**
     * Локатор поля региона в форме заполнения данных карты оплаты
     */
    public static $stateInCardFormField = '//input[@id="input_32_state"]';

    /**
     * Локатор поля почтового индекса в форме заполнения данных карты оплаты
     */
    public static $postalCodeInCardFormField = '//input[@id="input_32_postal"]';

    /**
     * Локатор кнопки регистрации
     */
    public static $registerButton = '//*[@type = "submit"]';

    /**
     * Локатор поля выбора страны в форме заполнения данных карты оплаты
     */
    public static $countryInCardFormSelect = '//select[@id="input_32_country"]';

    /**
     * Локатор одной из страны в поле выбора страны в форме заполнения данных карты оплаты
     */
    public static $countryInCardFormOption = '//select[@id="input_32_country"]/option[%d]';

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    /**
     * Конструктор FormPage
     */
    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

    /**
     * Функция выбора случайного месяца истечения карты
     */
    public function getRandomExpirationMonth() {
        return sprintf(self::$expirationMonthOption, rand(2,13));
    }

     /**
     * Функция выбора случайного года истечения карты
     */
    public function getRandomExpirationYear() {
        return sprintf(self::$expirationYearOption, rand(2,11));
    }

    /**
     * Функция выбора случайной страны
     */
    public function getRandomCountry() {
        return sprintf(self::$countryInCardFormOption, rand(2,237));
    }
}
<?php

use Page\Acceptance\FormPage;

/**
 * Класс для тестирования формы
 */
class FillFieldsCest 
{
    /**
     * Тест на проверку заполнения полей с помощью фейкера
     */
    public function checkFillField(AcceptanceTester $I) 
    {
        $firstName = $I->getFaker()->firstName;
        $lastName = $I->getFaker()->lastName;
        $email = $I->getFaker()->email;
        $phoneNumber = $I->getFaker()->phoneNumber;
        $address = $I->getFaker()->streetAddress;
        $city = $I->getFaker()->city;
        $state = $I->getFaker()->region;
        $postalCode= $I->getFaker()->postcode;
        $firstNameInCardForm = $I->getFaker()->firstName;
        $lastNameInCardForm = $I->getFaker()->lastName;
        $cardNumber = $I->getFaker()->getCreditCardNumber;
        $securityCode = $I->getFaker()->getCreditCardSecurityCode;
        $addressInCardForm = $I->getFaker()->address;
        $cityInCardForm = $I->getFaker()->city;
        $stateInCardForm = $I->getFaker()->region;
        $postalInCardForm = $I->getFaker()->postcode;
        
        $I->amOnPage('');

        $formPage = new FormPage($I);
        
        $I->fillField(FormPage::$firstNameField, $firstName);
        $I->fillField(FormPage::$lastNameField, $lastName);
        $I->fillField(FormPage::$emailField, $email);
        $I->fillField(FormPage::$phoneNumberField, $phoneNumber);
        $I->fillField(FormPage::$addressField, $address);
        $I->fillField(FormPage::$cityField, $city);
        $I->fillField(FormPage::$stateField, $state);
        $I->fillField(FormPage::$postalField, $postalCode);

        $I->click(FormPage::$cardPaymentMethodRadioButton);
        $I->waitForElementVisible(FormPage::$cardTable);

        $I->fillField(FormPage::$firstNameInCardFormField, $firstNameInCardForm);
        $I->fillField(FormPage::$lastNameInCardFormField, $lastNameInCardForm);
        $I->fillField(FormPage::$creditCardNumberField, $cardNumber);
        $I->fillField(FormPage::$creditCardSecurityCodeField, $securityCode);
        $I->click(FormPage::$expirationMonthSelect);
        $I->click($formPage->getRandomExpirationMonth());
        $I->click(FormPage::$expirationYearSelect);
        $I->click($formPage->getRandomExpirationYear());
        $I->fillField(FormPage::$addressInCardFormField, $addressInCardForm);
        $I->fillField(FormPage::$cityInCardFormField, $cityInCardForm);
        $I->fillField(FormPage::$stateInCardFormField, $stateInCardForm);
        $I->fillField(FormPage::$postalCodeInCardFormField, $postalInCardForm);
        $I->click(FormPage::$countryInCardFormSelect);
        $I->click($formPage->getRandomCountry());

        $I->click(FormPage::$registerButton);

        $I->waitForText('Good job');
    }
}
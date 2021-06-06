<?php
 
 namespace Helper;

use Faker\Provider\Base;

class CustomFakerProvider extends Base 
{
    protected $creditCardNumbers = [
        '378282246310005',
        '6011111111111117',
        '5555555555554444',
        '4111111111111111'
    ];

    protected $creditCardSecurityCodes = [
        '117',
        '233',
        '964',
        '215'
    ];

    public function getCreditCardNumber() 
    {
        return $this->creditCardNumbers[array_rand($this->creditCardNumbers)];
    }

    public function getCreditCardSecurityCode()
    {
        return $this->creditCardSecurityCodes[array_rand($this->creditCardSecurityCodes)];
    }
}
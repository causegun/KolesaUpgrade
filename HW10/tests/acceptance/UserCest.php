<?php

use Page\OwnerPage;

/**
 * Класс для работы с юзером
 */
class UserCest 
{
    /**
     * Кол-во создаваемых записей
     */
    protected $userCount = 10;

    /**
     * Проверка соответствия кол-ва удаленных записей в БД и на сайте
     */
    public function checkUserSnap(\Step\Acceptance\CreateRandomUsersStep $I) 
    {
        $ownerName = $I->sendRandomUsers($this->userCount);
        var_dump($ownerName);
        $I->amOnPage('?owner='.$ownerName);
        $I->waitForElementVisible(OwnerPage::$li);
        $I->seeNumberOfElements(OwnerPage::$li, $this->userCount);
        $I->click(OwnerPage::$snapButton);
        $I->dontSeeInCollection('people', array('canBeKilledBySnap' => 'true'));    
        
        for ($n = 1; $n <= (int)preg_replace('/[Count: ]/', '', $I->grabTextFrom(OwnerPage::$countSpan)); $n++)
        {
            $userNotSnapedSelector = OwnerPage::$li.'['.$n.']';
            $userNameData = $I->grabTextFrom($userNotSnapedSelector.OwnerPage::$userName);
            $user = $I->grabFromCollection('people', array('name' => $userNameData));
            $I->assertEquals($user['canBeKilledBySnap'], false);
        }       
    }
}
<?php

/**
 * Класс для работы с юзером
 */
class UserCest 
{
    /**
     * Тест на создание, изменение и удаление юзера
     */
    public function checkUserCreateUpdateDelete(FunctionalTester $I) 
    {
        $defaultSchema = [
            "_id" => 'string',
            "email" => 'string',
            "superhero" => 'boolean',
            "name" => 'string',
            "owner" => 'string'
        ];
        
        $userData = [
            'email' => $I->getFaker()->email,
            'owner' => $I->getFaker()->name.'rshekish',
            'job'   => $I->getFaker()->company,
            'name'  => $I->getFaker()->name
        ];

        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPost('human', $userData);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContainsJson(['status' => 'ok']);
        $I->sendGet('people', $userData);
        $I->seeResponseMatchesJsonType($defaultSchema);
        $userIdArray = $I->grabDataFromResponseByJsonPath('$.._id');
        $userId = $userIdArray[sizeof($userIdArray)-1];
        $I->sendPut('/human?_id=' . $userId, array('job' => 'Krysha'));
        $I->seeResponseContainsJson(['nModified' => 1]);
        $I->sendGet('people', $userData);
        $I->seeResponseContainsJson(['job' => 'Krysha']);
        $I->sendDelete('/human?_id=' . $userId);
        $I->seeResponseContainsJson(['deletedCount' => 1]);
        $I->sendGet('people', $userData);
        $I->dontSeeResponseContainsJson(['_id' => $userId]);
    }
}
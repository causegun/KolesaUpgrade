<?php
namespace Step\Acceptance;

/**
 * StepObject для генерации рандомных записей людей
 */
class CreateRandomUsersStep extends \AcceptanceTester
{
    /**
     * Данные для создания человека
     */
    protected $data;

    protected $ownerName;

    /**
     * Метод, генерирующий рандомные данные для записи человека
     */
    public function createRandomUserData(string $ownerName)
    {
        $faker = $this->getFaker();
        $this->data = [
            "job"   => $faker->company,
            "superhero" => $faker->boolean(),
            "skill" => $faker->word,
            "email" => $faker->email,
            "name" => $faker->name,
            "DOB" => $faker->date("Y-m-d"),
            "avatar" => $faker->imageUrl(),
            "canBeKilledBySnap" => $faker->boolean(),
            "created_at" => $faker->date("Y-m-d"),
            "owner" => $ownerName,
        ];
    }

    /**
     * Отправляет в базу указанное кол-во записей
     */
    public function sendRandomUsers(int $numberOfUsers) 
    {
        $faker = $this->getFaker();
        $this->ownerName = 'shekishr'.$faker->name;
        
        for ($n = 0; $n < $numberOfUsers; $n++) 
        {
            $this->createRandomUserData($this->ownerName);
            var_dump($this->data);
            $this->haveInCollection('people', $this->data);
        }

        return $this->ownerName;
    }
}
<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../noyau/model.php';
require_once __DIR__ . '/../modules/models/inscriptionModel.php';

class DbInsertionUserTest extends TestCase
{
    public function testInsertionUser(): void
    {
        $reussite = InscriptionModel::register(
            'jambon beurre',
            'Jean',
            'Boris',
            'jambonbon.salami@test.fr',
            '3petitcochon',
            '0601020304',
            '10 rue de la boucherie'
        );

        $this->assertTrue($reussite);
    }
}
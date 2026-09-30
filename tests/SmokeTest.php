<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../noyau/model.php';
require_once __DIR__ . '/../modules/models/authentificationModel.php';
require_once __DIR__ . '/../modules/models/inscriptionModel.php';

class SmokeTest extends TestCase
{
    public function testPhpUnitRuns(): void
    {
        $this->assertTrue(true);
    }

    public function testProjectAutoloaderWorks(): void
    {
        // Remplace par une vraie classe du projet
        $this->assertTrue(class_exists(\modules\controllers\accueilController::class));
    }

    public function testModelConnection(): void
    {
        Model::checkConnection();

        $this->assertTrue(true);
    }

    public function testAuthentificationModelConnection(): void
    {
        AuthentificationModel::checkConnection();

        $this->assertTrue(true);
    }

    public function testInscriptionModelConnection(): void
    {
        InscriptionModel::checkConnection();

        $this->assertTrue(true);
    }

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


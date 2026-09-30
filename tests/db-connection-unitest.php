<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../noyau/model.php';
require_once __DIR__ . '/../modules/models/authentificationModel.php';
require_once __DIR__ . '/../modules/models/inscriptionModel.php';

class DbConnectionTest extends TestCase
{
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
}
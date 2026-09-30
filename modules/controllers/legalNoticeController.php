<?php

class LegalNoticeController 
{
    public function show(): void 
    {
        $companyName = "Qui est-ce";
        $address = "413 avenue Gaston Berger, Aix-En-Provence 13100";
        $contactEmail = "";

        $hostName = "";
        $hostAddress = "";

        require_once __DIR__ . '/../views/legalNoticeView.php';
    }
}
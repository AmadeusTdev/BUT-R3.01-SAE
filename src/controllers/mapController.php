<?php

class mapController 
{
    public function show(): void 
    {
        $pages = [
            [
                'title' => 'Accueil',
                'url'   => 'index.php'
            ],
            [
                'title' => 'S\'inscrire',
                'url'   => 'index.php?action=signUp'
            ],
            [
                'title' => 'Se connecter',
                'url'   => 'index.php?action=login'
            ],
         
            [
                'title' => 'À propos',
                'url'   => 'index.php?action=about'
            ],
            [
                'title' => 'Contact',
                'url'   => 'index.php?action=contact'
            ],
            [
                'title' => 'Mentions Légales',
                'url'   => 'index.php?action=legal'
            ]
        ];

        
        require_once __DIR__ . '/../views/mapView.php';
    }
}

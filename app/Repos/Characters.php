<?php

namespace App\Repos;

use App\Collections\Character;
use Config\Services\CharactersService;


class Characters implements Character
{
    /**
     * Implementing Intereface method
     * @param array $searchParams
     * @return false
     */
    public function getCharacters($searchParams = [])
    {
        $characterObj = new CharactersService();
        $rawResponseObj = $characterObj->getCharacterData($searchParams);
        $responseObj = json_decode($rawResponseObj);
        if (isset($responseObj->data)) {
            return $responseObj->data;
        }
        return false;
    }
}
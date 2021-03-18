<?php

namespace App\Repos;

use App\Collections\Character;
use Config\Services\CharactersService;


class Characters implements Character
{
    public function getCharacters($searchParams=[])
    {

        $characterObj=new CharactersService();
       $rawResponseObj= $characterObj->getCharacterData($searchParams);
        $responseObj=json_decode($rawResponseObj);
        if(isset($responseObj->data)){
            return $responseObj->data;
        }
        return false;


    }
}
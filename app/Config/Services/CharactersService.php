<?php

namespace Config\Services;

use CodeIgniter\Config\BaseService;
use CodeIgniter\API\ResponseTrait;


class CharactersService extends BaseService
{
    use ResponseTrait;
    private $url = 'https://rickandmortyapi.com/api/character';
    private $segment = 1;

    /**
     * Validates url rule existence
     * @return bool
     */
    public function getCharacterData($serachFilters=[])
    {
        try {
            $searchString = '';
            if (isset($serachFilters) && !empty($serachFilters)) {
                $searchString = "/?" . http_build_query($serachFilters);
            }
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_URL, $this->url . $searchString);
            $result = curl_exec($ch);
            curl_close($ch);
            return json_encode(['data'=>$result]);

        }catch(\Exception $e){
           return json_encode(['exception'=>$e]);

        }
    }


}
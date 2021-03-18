<?php

namespace App\Models;

use App\Repos\Characters;
use CodeIgniter\Model;

class CharactersModel extends Model
{
    protected $useAutoIncrement = true;
    protected $returnType = 'object';
    protected $deletedField = false;
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

    /**
     * Process raw post
     * @param array $searchPar
     * @return false
     */
    public function retrieveCharacterInfo(
        $searchPar = []
    ) {
        $searchArr = [];
        if (isset($searchPar[0])) {
            foreach ($searchPar[0] as $key => $val) {
                if ($val != '') {
                    $searchArr[$key] = trim(urldecode($val));
                }
            }
        }
        // Call service
        $charObj = new Characters();
        return $charObj->getCharacters($searchArr);

    }


}

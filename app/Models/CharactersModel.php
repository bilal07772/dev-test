<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Repos\Characters;

class CharactersModel extends Model
{
    protected $useAutoIncrement = true;
    protected $returnType = 'object';
    protected $deletedField = false;
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    public function retrieveCharacterInfo($searchPar=[],
        $orderBy = false,
        $limit = false,
        $offset = false,
        $count = false
    ) {
        $searchArr=[];
        if(isset($searchPar[0])) {
            foreach ($searchPar[0] as $key => $val) {
                if ($val != '') {
                    $searchArr[$key] = trim(urldecode($val));
                }
            }
        }
       // Call service
        $charObj=new Characters();
        return $charObj->getCharacters($searchArr);

    }





}

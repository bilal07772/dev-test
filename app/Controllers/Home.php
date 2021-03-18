<?php

namespace App\Controllers;

use App\Controllers\Core\BaseGlobalController;
use App\Models\CharactersModel;
use CodeIgniter\API\ResponseTrait;

class Home extends BaseGlobalController
{
    use ResponseTrait;
    public function __construct()
    {

    }

    public function index()
    {
        $charModelObj = new CharactersModel();
        $charactDataObj = json_decode($charModelObj->retrieveCharacterInfo());
        $data['characters'] = $charactDataObj;
        $data['page']=1;
        return view("welcome_message", $data);
    }


    function ajaxBasicPaginationResponse()
    {
        $paginatedObj = new CharactersModel();
        $searchArr = [];
        array_push($searchArr, $_GET);
        $charactDataObj = json_decode($paginatedObj->retrieveCharacterInfo($searchArr));
        $data['characters'] = $charactDataObj;
        $data1['view'] =  view("load_more_view", $data);
        return $this->setResponseFormat('json')->respond(['error' => false,'data'=>$data1['view']]);
    }


}

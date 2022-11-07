<?php

namespace app\controller;

use app\model\StorageProgressModel;
use app\core\Controller;

use app\classes\Input;

class StorageProgressController extends Controller{
    private $storageProgressModel;

    public function __construct() {
        $this->storageProgressModel = new StorageProgressModel();
    }

     // AJAX Controller
     public function fetchAll() {

        // $typelist = Input::get('typelist');

        $result = $this->storageProgressModel->fetchAll();
        console_log($result);
        return;

        // if(is_array($result)){
        //     switch ($typelist) {
        //        case "1":
        //            return $this->load("components/list", [
        //                'classes' => $result
        //            ]);       
        //        break;
        //        case "2":
        //            return $this->load("components/list", [
        //                'classes_type2' => $result
        //            ]);
                
        //        break;
        //        default:
        //            return $this->load("components/list", [
        //                'classes' => $result
        //            ]);    
        //        break;
        //    }
        // }
        
        // return  $this->showMessage('Erro para buscar progresso', $result, BASE);
    }

     // AJAX Controller
     public function fetchById() {
        $id = $_SESSION['extra']->id;

        $result = $this->storageProgressModel->fetchById($id);


        console_log($result);
        return;

        // if(is_array($result)){
        //     return $this->load("components/item", [
        //         'class' => $result
        //     ]);
        //  }

        // return  $this->showMessage('Erro para buscar progresso pelo ID', $result, BASE);
    }

    public function register(){
        $exam = (object)[
            'id'           => $_SESSION['extra']->id,
            'module1_score'       => Input::post('teachers'),
        ];

        console_log($exam);

        return "Funcionou";

        // $result = $this->storageProgressModel->register($exam);

        // if (!is_array($result)) {
        //     $this->showMessage(
        //         'Erro para salvar resultado da avaliação', 
        //         $result,
        //     );

        //     die();
        // }

        // $this->showMessage(
        //     'Sucesso ao realizar a avaliação!', 
        //     'O resultado poderá ser analisado na aba de progresso do curso',
        //     BASE . 'dashboard',
        //     200
        // );
            
        // die();

    }

}
<?php

require_once 'PromotionsController.php';

class PromotionController extends PromotionsController
{
    function index(){
        $this->request->controller = 'promotions';
        parent::index();
    }
}

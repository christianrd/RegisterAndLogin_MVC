<?php

/*
 * @author: Christian D. Rodriguez
 * @date: 18/08/2015
 */

class Index extends Controller {
    function __construct() {
        parent::__construct();
    }
    
    function index(){
        $this->view->render($this,'index');
    }
    
    function killWithfire() {
        Session::destroy();
    }
}

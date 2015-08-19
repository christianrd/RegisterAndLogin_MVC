<?php

/*
 * @author: Christian D. Rodriguez
 * @date: 18/08/2015
 */

class View{
    function render($controller, $view) {
        $controller = get_class($controller);
        //views/user/index.php
        require './views/'.$controller.'/'.$view.'.php';
    }
}

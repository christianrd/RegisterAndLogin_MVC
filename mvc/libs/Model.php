<?php

/*
 * @author: Christian D. Rodriguez
 * @date: 18/08/2015
 */

class Model {

    function __construct() {
        $this->db = new MySQLiManager(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }

}

<?php

/**
 * class for performing all contact assign to Approvify related data abstraction
 * 
 * @author:   AnkkSoft.com
 * @Copyright: AnkkSoft 2020
 * @Website:   https://www.ankksoft.com
 * @CodeCanyon User:  https://codecanyon.net/user/codeloop 
 */

class Request extends AppModel
{
 /**
     * Modal name used in application
     *
     * @var object
     */

     
    public $name = 'Request';

    /**
     * Table name in database
     *
     * @var object
     */
    var $useTable = 'approvify_requests';  
}
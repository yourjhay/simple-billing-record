<?php

use Simple\Routing\Router;

Router::set('',['controller' => 'home', 'action' => 'index']);
/** ---------------------------------------------
* Router::auth() is the routes for authentication
*/
Router::auth();

Router::set('dashboard/{action}/{tab?}',[
    'controller' => 'dashboard'
]);

Router::set('biller/{action:\bstore}',[
    'controller' => 'biller'
]);

Router::set('encode/{action:show}/{billerid:\w+}',[
    'controller' => 'encode'
]);

Router::set('encode/{action:showcolumn}/{billerid:\w+}',[
    'controller' => 'encode'
]);

Router::set('encode/{action:column}/{method}',[
    'controller' => 'encode'
]);

Router::set('encode/{action:storeBill}',[
    'controller' => 'encode'
]);
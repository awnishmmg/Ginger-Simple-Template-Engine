<?php

$request = basename($_SERVER['REQUEST_URI']);

foreach($controllers as $key => $value){
    if($request==basename(__DIR__)){
        die("<b> GINGER_JINGA Template Engine by awnish kumar &copy; awisoft.net {{PHP}} </b><hr noshade>
        <samp style='color:blue;font-size:13px;font-family:rockwell'>Welcome to <b><mark>jinja Template Engine</mark></b> set up home template in <mark> public/xyz.html </mark> and add url and you are ready to rock.</samp>");
    }
    if(in_array($request,array_keys($controllers))){
        require_once $request.'.controller.php';
        break;
    }else{
        require 'public/404.php';
        exit;
    }
}
?>
<?php
$dalTableRequestor = array();
$dalTableRequestor["userId"] = array("type"=>3,"varname"=>"userId", "name" => "userId", "autoInc" => "0");
$dalTableRequestor["name"] = array("type"=>200,"varname"=>"name", "name" => "name", "autoInc" => "0");
$dalTableRequestor["typeRequestor"] = array("type"=>200,"varname"=>"typeRequestor", "name" => "typeRequestor", "autoInc" => "0");
$dalTableRequestor["address"] = array("type"=>200,"varname"=>"address", "name" => "address", "autoInc" => "0");
$dalTableRequestor["phone"] = array("type"=>200,"varname"=>"phone", "name" => "phone", "autoInc" => "0");
$dalTableRequestor["email"] = array("type"=>200,"varname"=>"email", "name" => "email", "autoInc" => "0");
$dalTableRequestor["userId"]["key"]=true;

$dal_info["pqrsf_at_localhost__Requestor"] = &$dalTableRequestor;
?>
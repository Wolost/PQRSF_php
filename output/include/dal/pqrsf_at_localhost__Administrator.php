<?php
$dalTableAdministrator = array();
$dalTableAdministrator["adminId"] = array("type"=>3,"varname"=>"adminId", "name" => "adminId", "autoInc" => "0");
$dalTableAdministrator["user"] = array("type"=>200,"varname"=>"user", "name" => "user", "autoInc" => "0");
$dalTableAdministrator["email"] = array("type"=>200,"varname"=>"email", "name" => "email", "autoInc" => "0");
$dalTableAdministrator["password"] = array("type"=>200,"varname"=>"password", "name" => "password", "autoInc" => "0");
$dalTableAdministrator["adminId"]["key"]=true;

$dal_info["pqrsf_at_localhost__Administrator"] = &$dalTableAdministrator;
?>
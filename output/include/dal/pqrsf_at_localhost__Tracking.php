<?php
$dalTableTracking = array();
$dalTableTracking["trackingId"] = array("type"=>3,"varname"=>"trackingId", "name" => "trackingId", "autoInc" => "0");
$dalTableTracking["dependency"] = array("type"=>200,"varname"=>"dependency", "name" => "dependency", "autoInc" => "0");
$dalTableTracking["date"] = array("type"=>200,"varname"=>"date", "name" => "date", "autoInc" => "0");
$dalTableTracking["operator"] = array("type"=>200,"varname"=>"operator", "name" => "operator", "autoInc" => "0");
$dalTableTracking["trackingId"]["key"]=true;

$dal_info["pqrsf_at_localhost__Tracking"] = &$dalTableTracking;
?>
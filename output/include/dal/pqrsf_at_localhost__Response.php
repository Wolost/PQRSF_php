<?php
$dalTableResponse = array();
$dalTableResponse["responseId"] = array("type"=>3,"varname"=>"responseId", "name" => "responseId", "autoInc" => "0");
$dalTableResponse["replyDate"] = array("type"=>7,"varname"=>"replyDate", "name" => "replyDate", "autoInc" => "0");
$dalTableResponse["responseTimeHours"] = array("type"=>3,"varname"=>"responseTimeHours", "name" => "responseTimeHours", "autoInc" => "0");
$dalTableResponse["responseDocumentId"] = array("type"=>200,"varname"=>"responseDocumentId", "name" => "responseDocumentId", "autoInc" => "0");
$dalTableResponse["responseId"]["key"]=true;

$dal_info["pqrsf_at_localhost__Response"] = &$dalTableResponse;
?>
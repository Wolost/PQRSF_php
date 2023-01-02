<?php
require_once(getabspath("classes/cipherer.php"));



$tdatadashboard = array();
$tdatadashboard[".ShortName"] = "dashboard";

$tdatadashboard[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"dashboard\"]}" );
$tdatadashboard[".originalPagesByType"] = $tdatadashboard[".pagesByType"];
$tdatadashboard[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"]}" ) );
$tdatadashboard[".originalPages"] = $tdatadashboard[".pages"];
$tdatadashboard[".defaultPages"] = my_json_decode( "{\"dashboard\":\"dashboard\"}" );
$tdatadashboard[".originalDefaultPages"] = $tdatadashboard[".defaultPages"];


//	field labels
$fieldLabelsdashboard = array();
$pageTitlesdashboard = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdashboard["Spanish"] = array();
	$fieldLabelsdashboard["Spanish"]["requestor_userId"] = "User Id";
	$fieldLabelsdashboard["Spanish"]["requestor_name"] = "Name";
	$fieldLabelsdashboard["Spanish"]["requestor_typeRequestor"] = "Type Requestor";
	$fieldLabelsdashboard["Spanish"]["requestor_address"] = "Address";
	$fieldLabelsdashboard["Spanish"]["requestor_phone"] = "Phone";
	$fieldLabelsdashboard["Spanish"]["requestor_email"] = "Email";
	$fieldLabelsdashboard["Spanish"]["Pchart_pqrsfId"] = "Pqrsf Id";
	$fieldLabelsdashboard["Spanish"]["Pchart_nuv"] = "Nuv";
	$fieldLabelsdashboard["Spanish"]["Pchart_entryDate"] = "Entry Date";
	$fieldLabelsdashboard["Spanish"]["Pchart_expirationDate"] = "Expiration Date";
	$fieldLabelsdashboard["Spanish"]["Pchart_type"] = "Type";
	$fieldLabelsdashboard["Spanish"]["Pchart_subject"] = "Subject";
	$fieldLabelsdashboard["Spanish"]["Pchart_name"] = "Name";
	$fieldLabelsdashboard["Spanish"]["Pchart_isDisabled"] = "Is Disabled";
	$fieldLabelsdashboard["Spanish"]["Pchart_replyDate"] = "Reply Date";
	$fieldLabelsdashboard["Spanish"]["Pchart_requestingIds"] = "Requesting Ids";
	$fieldLabelsdashboard["Spanish"]["Pchart_documentId"] = "Document Id";
	$fieldLabelsdashboard["Spanish"]["Pchart_respondeDocumentId"] = "Responde Document Id";
	$fieldLabelsdashboard["Spanish"]["Pchart_trackingIds"] = "Tracking Ids";
	$fieldLabelsdashboard["Spanish"]["Pchart_responseId"] = "Response Id";
	$fieldLabelsdashboard["Spanish"]["baseprocedure_pqrsfId"] = "Pqrsf Id";
	$fieldLabelsdashboard["Spanish"]["baseprocedure_nuv"] = "Nuv";
	$fieldLabelsdashboard["Spanish"]["baseprocedure_entryDate"] = "Entry Date";
	$fieldLabelsdashboard["Spanish"]["baseprocedure_expirationDate"] = "Expiration Date";
	$fieldLabelsdashboard["Spanish"]["baseprocedure_type"] = "Type";
	$fieldLabelsdashboard["Spanish"]["baseprocedure_subject"] = "Subject";
	$fieldLabelsdashboard["Spanish"]["baseprocedure_name"] = "Name";
	$fieldLabelsdashboard["Spanish"]["baseprocedure_isDisabled"] = "Is Disabled";
	$fieldLabelsdashboard["Spanish"]["baseprocedure_replyDate"] = "Reply Date";
	$fieldLabelsdashboard["Spanish"]["baseprocedure_requestingIds"] = "Requesting Ids";
	$fieldLabelsdashboard["Spanish"]["baseprocedure_documentId"] = "Document Id";
	$fieldLabelsdashboard["Spanish"]["baseprocedure_respondeDocumentId"] = "Responde Document Id";
	$fieldLabelsdashboard["Spanish"]["baseprocedure_trackingIds"] = "Tracking Ids";
	$fieldLabelsdashboard["Spanish"]["baseprocedure_responseId"] = "Response Id";
	$fieldLabelsdashboard["Spanish"]["Rchart_responseId"] = "Response Id";
	$fieldLabelsdashboard["Spanish"]["Rchart_replyDate"] = "Reply Date";
	$fieldLabelsdashboard["Spanish"]["Rchart_responseTimeHours"] = "Response Time Hours";
	$fieldLabelsdashboard["Spanish"]["Rchart_responseDocumentId"] = "Response Document Id";
}

/*
//	search fields
$tdatadashboard[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"requestor", "field"=>"userId" );
$tdatadashboard[".searchFields"]["requestor_userId"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"requestor", "field"=>"name" );
$tdatadashboard[".searchFields"]["requestor_name"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"requestor", "field"=>"typeRequestor" );
$tdatadashboard[".searchFields"]["requestor_typeRequestor"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"requestor", "field"=>"address" );
$tdatadashboard[".searchFields"]["requestor_address"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"requestor", "field"=>"phone" );
$tdatadashboard[".searchFields"]["requestor_phone"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"requestor", "field"=>"email" );
$tdatadashboard[".searchFields"]["requestor_email"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"baseprocedure", "field"=>"pqrsfId" );
$tdatadashboard[".searchFields"]["baseprocedure_pqrsfId"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"baseprocedure", "field"=>"nuv" );
$tdatadashboard[".searchFields"]["baseprocedure_nuv"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"baseprocedure", "field"=>"entryDate" );
$tdatadashboard[".searchFields"]["baseprocedure_entryDate"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"baseprocedure", "field"=>"expirationDate" );
$tdatadashboard[".searchFields"]["baseprocedure_expirationDate"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"baseprocedure", "field"=>"type" );
$tdatadashboard[".searchFields"]["baseprocedure_type"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"baseprocedure", "field"=>"subject" );
$tdatadashboard[".searchFields"]["baseprocedure_subject"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"baseprocedure", "field"=>"name" );
$tdatadashboard[".searchFields"]["baseprocedure_name"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"baseprocedure", "field"=>"isDisabled" );
$tdatadashboard[".searchFields"]["baseprocedure_isDisabled"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"baseprocedure", "field"=>"replyDate" );
$tdatadashboard[".searchFields"]["baseprocedure_replyDate"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"baseprocedure", "field"=>"requestingIds" );
$tdatadashboard[".searchFields"]["baseprocedure_requestingIds"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"baseprocedure", "field"=>"documentId" );
$tdatadashboard[".searchFields"]["baseprocedure_documentId"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"baseprocedure", "field"=>"respondeDocumentId" );
$tdatadashboard[".searchFields"]["baseprocedure_respondeDocumentId"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"baseprocedure", "field"=>"trackingIds" );
$tdatadashboard[".searchFields"]["baseprocedure_trackingIds"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"baseprocedure", "field"=>"responseId" );
$tdatadashboard[".searchFields"]["baseprocedure_responseId"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Pchart", "field"=>"pqrsfId" );
$tdatadashboard[".searchFields"]["Pchart_pqrsfId"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Pchart", "field"=>"nuv" );
$tdatadashboard[".searchFields"]["Pchart_nuv"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Pchart", "field"=>"entryDate" );
$tdatadashboard[".searchFields"]["Pchart_entryDate"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Pchart", "field"=>"expirationDate" );
$tdatadashboard[".searchFields"]["Pchart_expirationDate"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Pchart", "field"=>"type" );
$tdatadashboard[".searchFields"]["Pchart_type"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Pchart", "field"=>"subject" );
$tdatadashboard[".searchFields"]["Pchart_subject"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Pchart", "field"=>"name" );
$tdatadashboard[".searchFields"]["Pchart_name"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Pchart", "field"=>"isDisabled" );
$tdatadashboard[".searchFields"]["Pchart_isDisabled"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Pchart", "field"=>"replyDate" );
$tdatadashboard[".searchFields"]["Pchart_replyDate"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Pchart", "field"=>"requestingIds" );
$tdatadashboard[".searchFields"]["Pchart_requestingIds"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Pchart", "field"=>"documentId" );
$tdatadashboard[".searchFields"]["Pchart_documentId"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Pchart", "field"=>"respondeDocumentId" );
$tdatadashboard[".searchFields"]["Pchart_respondeDocumentId"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Pchart", "field"=>"trackingIds" );
$tdatadashboard[".searchFields"]["Pchart_trackingIds"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Pchart", "field"=>"responseId" );
$tdatadashboard[".searchFields"]["Pchart_responseId"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Rchart", "field"=>"responseId" );
$tdatadashboard[".searchFields"]["Rchart_responseId"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Rchart", "field"=>"replyDate" );
$tdatadashboard[".searchFields"]["Rchart_replyDate"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Rchart", "field"=>"responseTimeHours" );
$tdatadashboard[".searchFields"]["Rchart_responseTimeHours"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Rchart", "field"=>"responseDocumentId" );
$tdatadashboard[".searchFields"]["Rchart_responseDocumentId"] = $dashField;

// all search fields
$tdatadashboard[".allSearchFields"] = array();
$tdatadashboard[".allSearchFields"][] = "requestor_userId";
$tdatadashboard[".allSearchFields"][] = "requestor_name";
$tdatadashboard[".allSearchFields"][] = "requestor_typeRequestor";
$tdatadashboard[".allSearchFields"][] = "requestor_address";
$tdatadashboard[".allSearchFields"][] = "requestor_phone";
$tdatadashboard[".allSearchFields"][] = "requestor_email";
$tdatadashboard[".allSearchFields"][] = "baseprocedure_pqrsfId";
$tdatadashboard[".allSearchFields"][] = "baseprocedure_nuv";
$tdatadashboard[".allSearchFields"][] = "baseprocedure_entryDate";
$tdatadashboard[".allSearchFields"][] = "baseprocedure_expirationDate";
$tdatadashboard[".allSearchFields"][] = "baseprocedure_type";
$tdatadashboard[".allSearchFields"][] = "baseprocedure_subject";
$tdatadashboard[".allSearchFields"][] = "baseprocedure_name";
$tdatadashboard[".allSearchFields"][] = "baseprocedure_isDisabled";
$tdatadashboard[".allSearchFields"][] = "baseprocedure_replyDate";
$tdatadashboard[".allSearchFields"][] = "baseprocedure_requestingIds";
$tdatadashboard[".allSearchFields"][] = "baseprocedure_documentId";
$tdatadashboard[".allSearchFields"][] = "baseprocedure_respondeDocumentId";
$tdatadashboard[".allSearchFields"][] = "baseprocedure_trackingIds";
$tdatadashboard[".allSearchFields"][] = "baseprocedure_responseId";
$tdatadashboard[".allSearchFields"][] = "Pchart_pqrsfId";
$tdatadashboard[".allSearchFields"][] = "Pchart_nuv";
$tdatadashboard[".allSearchFields"][] = "Pchart_entryDate";
$tdatadashboard[".allSearchFields"][] = "Pchart_expirationDate";
$tdatadashboard[".allSearchFields"][] = "Pchart_type";
$tdatadashboard[".allSearchFields"][] = "Pchart_subject";
$tdatadashboard[".allSearchFields"][] = "Pchart_name";
$tdatadashboard[".allSearchFields"][] = "Pchart_isDisabled";
$tdatadashboard[".allSearchFields"][] = "Pchart_replyDate";
$tdatadashboard[".allSearchFields"][] = "Pchart_requestingIds";
$tdatadashboard[".allSearchFields"][] = "Pchart_documentId";
$tdatadashboard[".allSearchFields"][] = "Pchart_respondeDocumentId";
$tdatadashboard[".allSearchFields"][] = "Pchart_trackingIds";
$tdatadashboard[".allSearchFields"][] = "Pchart_responseId";
$tdatadashboard[".allSearchFields"][] = "Rchart_responseId";
$tdatadashboard[".allSearchFields"][] = "Rchart_replyDate";
$tdatadashboard[".allSearchFields"][] = "Rchart_responseTimeHours";
$tdatadashboard[".allSearchFields"][] = "Rchart_responseDocumentId";

// good like search fields
$tdatadashboard[".googleLikeFields"] = array();
*/

/*
$tdatadashboard[".dashElements"] = array();

	$dbelement = array( "elementName" => "Pchart_chart", "table" => "Pchart",
		 "pageName" => "","type" => 1);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;


	$tdatadashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Rchart_chart", "table" => "Rchart",
		 "pageName" => "","type" => 1);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;


	$tdatadashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Dashboard_snippet", "table" => "Dashboard",
		 "pageName" => "","type" => 7);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	$dbelement["snippetId"] = "Dashboard_snippet";


	$tdatadashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Dashboard_snippet1", "table" => "Dashboard",
		 "pageName" => "","type" => 7);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	$dbelement["snippetId"] = "Dashboard_snippet1";


	$tdatadashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Dashboard_snippet2", "table" => "Dashboard",
		 "pageName" => "","type" => 7);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	$dbelement["snippetId"] = "Dashboard_snippet2";


	$tdatadashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Dashboard_snippet3", "table" => "Dashboard",
		 "pageName" => "","type" => 7);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	$dbelement["snippetId"] = "Dashboard_snippet3";


	$tdatadashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "requestor_grid", "table" => "requestor",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatadashboard[".dashElements"][] = $dbelement;
*/
$tdatadashboard[".shortTableName"] = "dashboard";
$tdatadashboard[".entityType"] = 4;








include_once(getabspath("include/dashboard_events.php"));
$tdatadashboard[".hasEvents"] = true;


$tdatadashboard[".tableType"] = "dashboard";


	
$tdatadashboard[".addPageEvents"] = false;

$tdatadashboard[".isUseAjaxSuggest"] = true;

$tables_data["Dashboard"]=&$tdatadashboard;
$field_labels["Dashboard"] = &$fieldLabelsdashboard;
$page_titles["Dashboard"] = &$pageTitlesdashboard;

?>
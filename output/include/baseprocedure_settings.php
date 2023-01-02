<?php
$tdatabaseprocedure = array();
$tdatabaseprocedure[".searchableFields"] = array();
$tdatabaseprocedure[".ShortName"] = "baseprocedure";
$tdatabaseprocedure[".OwnerID"] = "";
$tdatabaseprocedure[".OriginalTable"] = "baseprocedure";


$tdatabaseprocedure[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatabaseprocedure[".originalPagesByType"] = $tdatabaseprocedure[".pagesByType"];
$tdatabaseprocedure[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatabaseprocedure[".originalPages"] = $tdatabaseprocedure[".pages"];
$tdatabaseprocedure[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatabaseprocedure[".originalDefaultPages"] = $tdatabaseprocedure[".defaultPages"];

//	field labels
$fieldLabelsbaseprocedure = array();
$fieldToolTipsbaseprocedure = array();
$pageTitlesbaseprocedure = array();
$placeHoldersbaseprocedure = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbaseprocedure["Spanish"] = array();
	$fieldToolTipsbaseprocedure["Spanish"] = array();
	$placeHoldersbaseprocedure["Spanish"] = array();
	$pageTitlesbaseprocedure["Spanish"] = array();
	$fieldLabelsbaseprocedure["Spanish"]["pqrsfId"] = "Pqrsf Id";
	$fieldToolTipsbaseprocedure["Spanish"]["pqrsfId"] = "";
	$placeHoldersbaseprocedure["Spanish"]["pqrsfId"] = "";
	$fieldLabelsbaseprocedure["Spanish"]["nuv"] = "Nuv";
	$fieldToolTipsbaseprocedure["Spanish"]["nuv"] = "";
	$placeHoldersbaseprocedure["Spanish"]["nuv"] = "";
	$fieldLabelsbaseprocedure["Spanish"]["entryDate"] = "Entry Date";
	$fieldToolTipsbaseprocedure["Spanish"]["entryDate"] = "";
	$placeHoldersbaseprocedure["Spanish"]["entryDate"] = "";
	$fieldLabelsbaseprocedure["Spanish"]["expirationDate"] = "Expiration Date";
	$fieldToolTipsbaseprocedure["Spanish"]["expirationDate"] = "";
	$placeHoldersbaseprocedure["Spanish"]["expirationDate"] = "";
	$fieldLabelsbaseprocedure["Spanish"]["type"] = "Type";
	$fieldToolTipsbaseprocedure["Spanish"]["type"] = "";
	$placeHoldersbaseprocedure["Spanish"]["type"] = "";
	$fieldLabelsbaseprocedure["Spanish"]["subject"] = "Subject";
	$fieldToolTipsbaseprocedure["Spanish"]["subject"] = "";
	$placeHoldersbaseprocedure["Spanish"]["subject"] = "";
	$fieldLabelsbaseprocedure["Spanish"]["name"] = "Name";
	$fieldToolTipsbaseprocedure["Spanish"]["name"] = "";
	$placeHoldersbaseprocedure["Spanish"]["name"] = "";
	$fieldLabelsbaseprocedure["Spanish"]["isDisabled"] = "Is Disabled";
	$fieldToolTipsbaseprocedure["Spanish"]["isDisabled"] = "";
	$placeHoldersbaseprocedure["Spanish"]["isDisabled"] = "";
	$fieldLabelsbaseprocedure["Spanish"]["replyDate"] = "Reply Date";
	$fieldToolTipsbaseprocedure["Spanish"]["replyDate"] = "";
	$placeHoldersbaseprocedure["Spanish"]["replyDate"] = "";
	$fieldLabelsbaseprocedure["Spanish"]["requestingIds"] = "Requesting Ids";
	$fieldToolTipsbaseprocedure["Spanish"]["requestingIds"] = "";
	$placeHoldersbaseprocedure["Spanish"]["requestingIds"] = "";
	$fieldLabelsbaseprocedure["Spanish"]["documentId"] = "Document Id";
	$fieldToolTipsbaseprocedure["Spanish"]["documentId"] = "";
	$placeHoldersbaseprocedure["Spanish"]["documentId"] = "";
	$fieldLabelsbaseprocedure["Spanish"]["respondeDocumentId"] = "Responde Document Id";
	$fieldToolTipsbaseprocedure["Spanish"]["respondeDocumentId"] = "";
	$placeHoldersbaseprocedure["Spanish"]["respondeDocumentId"] = "";
	$fieldLabelsbaseprocedure["Spanish"]["trackingIds"] = "Tracking Ids";
	$fieldToolTipsbaseprocedure["Spanish"]["trackingIds"] = "";
	$placeHoldersbaseprocedure["Spanish"]["trackingIds"] = "";
	$fieldLabelsbaseprocedure["Spanish"]["responseId"] = "Response Id";
	$fieldToolTipsbaseprocedure["Spanish"]["responseId"] = "";
	$placeHoldersbaseprocedure["Spanish"]["responseId"] = "";
	if (count($fieldToolTipsbaseprocedure["Spanish"]))
		$tdatabaseprocedure[".isUseToolTips"] = true;
}


	$tdatabaseprocedure[".NCSearch"] = true;



$tdatabaseprocedure[".shortTableName"] = "baseprocedure";
$tdatabaseprocedure[".nSecOptions"] = 0;

$tdatabaseprocedure[".mainTableOwnerID"] = "";
$tdatabaseprocedure[".entityType"] = 0;
$tdatabaseprocedure[".connId"] = "pqrsf_at_localhost";


$tdatabaseprocedure[".strOriginalTableName"] = "baseprocedure";

	



$tdatabaseprocedure[".showAddInPopup"] = false;

$tdatabaseprocedure[".showEditInPopup"] = false;

$tdatabaseprocedure[".showViewInPopup"] = false;

$tdatabaseprocedure[".listAjax"] = false;
//	temporary
//$tdatabaseprocedure[".listAjax"] = false;

	$tdatabaseprocedure[".audit"] = false;

	$tdatabaseprocedure[".locking"] = false;


$pages = $tdatabaseprocedure[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabaseprocedure[".edit"] = true;
	$tdatabaseprocedure[".afterEditAction"] = 1;
	$tdatabaseprocedure[".closePopupAfterEdit"] = 1;
	$tdatabaseprocedure[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabaseprocedure[".add"] = true;
$tdatabaseprocedure[".afterAddAction"] = 1;
$tdatabaseprocedure[".closePopupAfterAdd"] = 1;
$tdatabaseprocedure[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabaseprocedure[".list"] = true;
}



$tdatabaseprocedure[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabaseprocedure[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabaseprocedure[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabaseprocedure[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabaseprocedure[".printFriendly"] = true;
}



$tdatabaseprocedure[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabaseprocedure[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabaseprocedure[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabaseprocedure[".isUseAjaxSuggest"] = true;



															

$tdatabaseprocedure[".ajaxCodeSnippetAdded"] = false;

$tdatabaseprocedure[".buttonsAdded"] = false;

$tdatabaseprocedure[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabaseprocedure[".isUseTimeForSearch"] = false;


$tdatabaseprocedure[".badgeColor"] = "778899";


$tdatabaseprocedure[".allSearchFields"] = array();
$tdatabaseprocedure[".filterFields"] = array();
$tdatabaseprocedure[".requiredSearchFields"] = array();

$tdatabaseprocedure[".googleLikeFields"] = array();
$tdatabaseprocedure[".googleLikeFields"][] = "pqrsfId";
$tdatabaseprocedure[".googleLikeFields"][] = "nuv";
$tdatabaseprocedure[".googleLikeFields"][] = "entryDate";
$tdatabaseprocedure[".googleLikeFields"][] = "expirationDate";
$tdatabaseprocedure[".googleLikeFields"][] = "type";
$tdatabaseprocedure[".googleLikeFields"][] = "subject";
$tdatabaseprocedure[".googleLikeFields"][] = "name";
$tdatabaseprocedure[".googleLikeFields"][] = "isDisabled";
$tdatabaseprocedure[".googleLikeFields"][] = "replyDate";
$tdatabaseprocedure[".googleLikeFields"][] = "requestingIds";
$tdatabaseprocedure[".googleLikeFields"][] = "documentId";
$tdatabaseprocedure[".googleLikeFields"][] = "respondeDocumentId";
$tdatabaseprocedure[".googleLikeFields"][] = "trackingIds";
$tdatabaseprocedure[".googleLikeFields"][] = "responseId";



$tdatabaseprocedure[".tableType"] = "list";

$tdatabaseprocedure[".printerPageOrientation"] = 0;
$tdatabaseprocedure[".nPrinterPageScale"] = 100;

$tdatabaseprocedure[".nPrinterSplitRecords"] = 40;

$tdatabaseprocedure[".geocodingEnabled"] = false;










$tdatabaseprocedure[".pageSize"] = 20;

$tdatabaseprocedure[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabaseprocedure[".strOrderBy"] = $tstrOrderBy;

$tdatabaseprocedure[".orderindexes"] = array();


$tdatabaseprocedure[".sqlHead"] = "SELECT *";
$tdatabaseprocedure[".sqlFrom"] = "FROM baseprocedure";
$tdatabaseprocedure[".sqlWhereExpr"] = "";
$tdatabaseprocedure[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabaseprocedure[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabaseprocedure[".arrGroupsPerPage"] = $arrGPP;

$tdatabaseprocedure[".highlightSearchResults"] = true;

$tableKeysbaseprocedure = array();
$tableKeysbaseprocedure[] = "pqrsfId";
$tdatabaseprocedure[".Keys"] = $tableKeysbaseprocedure;


$tdatabaseprocedure[".hideMobileList"] = array();




//	pqrsfId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "pqrsfId";
	$fdata["GoodName"] = "pqrsfId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("baseprocedure","pqrsfId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "pqrsfId";

		$fdata["sourceSingle"] = "pqrsfId";

		$fdata["FullName"] = "pqrsfId";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabaseprocedure["pqrsfId"] = $fdata;
		$tdatabaseprocedure[".searchableFields"][] = "pqrsfId";
//	nuv
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nuv";
	$fdata["GoodName"] = "nuv";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("baseprocedure","nuv");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nuv";

		$fdata["sourceSingle"] = "nuv";

		$fdata["FullName"] = "nuv";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabaseprocedure["nuv"] = $fdata;
		$tdatabaseprocedure[".searchableFields"][] = "nuv";
//	entryDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "entryDate";
	$fdata["GoodName"] = "entryDate";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("baseprocedure","entryDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "entryDate";

		$fdata["sourceSingle"] = "entryDate";

		$fdata["FullName"] = "entryDate";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabaseprocedure["entryDate"] = $fdata;
		$tdatabaseprocedure[".searchableFields"][] = "entryDate";
//	expirationDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "expirationDate";
	$fdata["GoodName"] = "expirationDate";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("baseprocedure","expirationDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "expirationDate";

		$fdata["sourceSingle"] = "expirationDate";

		$fdata["FullName"] = "expirationDate";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabaseprocedure["expirationDate"] = $fdata;
		$tdatabaseprocedure[".searchableFields"][] = "expirationDate";
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("baseprocedure","type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "type";

		$fdata["sourceSingle"] = "type";

		$fdata["FullName"] = "type";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabaseprocedure["type"] = $fdata;
		$tdatabaseprocedure[".searchableFields"][] = "type";
//	subject
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "subject";
	$fdata["GoodName"] = "subject";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("baseprocedure","subject");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "subject";

		$fdata["sourceSingle"] = "subject";

		$fdata["FullName"] = "subject";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabaseprocedure["subject"] = $fdata;
		$tdatabaseprocedure[".searchableFields"][] = "subject";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("baseprocedure","name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "name";

		$fdata["sourceSingle"] = "name";

		$fdata["FullName"] = "name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabaseprocedure["name"] = $fdata;
		$tdatabaseprocedure[".searchableFields"][] = "name";
//	isDisabled
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "isDisabled";
	$fdata["GoodName"] = "isDisabled";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("baseprocedure","isDisabled");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "isDisabled";

		$fdata["sourceSingle"] = "isDisabled";

		$fdata["FullName"] = "isDisabled";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabaseprocedure["isDisabled"] = $fdata;
		$tdatabaseprocedure[".searchableFields"][] = "isDisabled";
//	replyDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "replyDate";
	$fdata["GoodName"] = "replyDate";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("baseprocedure","replyDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "replyDate";

		$fdata["sourceSingle"] = "replyDate";

		$fdata["FullName"] = "replyDate";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabaseprocedure["replyDate"] = $fdata;
		$tdatabaseprocedure[".searchableFields"][] = "replyDate";
//	requestingIds
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "requestingIds";
	$fdata["GoodName"] = "requestingIds";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("baseprocedure","requestingIds");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "requestingIds";

		$fdata["sourceSingle"] = "requestingIds";

		$fdata["FullName"] = "requestingIds";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabaseprocedure["requestingIds"] = $fdata;
		$tdatabaseprocedure[".searchableFields"][] = "requestingIds";
//	documentId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "documentId";
	$fdata["GoodName"] = "documentId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("baseprocedure","documentId");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "documentId";

		$fdata["sourceSingle"] = "documentId";

		$fdata["FullName"] = "documentId";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabaseprocedure["documentId"] = $fdata;
		$tdatabaseprocedure[".searchableFields"][] = "documentId";
//	respondeDocumentId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "respondeDocumentId";
	$fdata["GoodName"] = "respondeDocumentId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("baseprocedure","respondeDocumentId");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "respondeDocumentId";

		$fdata["sourceSingle"] = "respondeDocumentId";

		$fdata["FullName"] = "respondeDocumentId";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabaseprocedure["respondeDocumentId"] = $fdata;
		$tdatabaseprocedure[".searchableFields"][] = "respondeDocumentId";
//	trackingIds
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "trackingIds";
	$fdata["GoodName"] = "trackingIds";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("baseprocedure","trackingIds");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "trackingIds";

		$fdata["sourceSingle"] = "trackingIds";

		$fdata["FullName"] = "trackingIds";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabaseprocedure["trackingIds"] = $fdata;
		$tdatabaseprocedure[".searchableFields"][] = "trackingIds";
//	responseId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "responseId";
	$fdata["GoodName"] = "responseId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("baseprocedure","responseId");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "responseId";

		$fdata["sourceSingle"] = "responseId";

		$fdata["FullName"] = "responseId";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabaseprocedure["responseId"] = $fdata;
		$tdatabaseprocedure[".searchableFields"][] = "responseId";


$tables_data["baseprocedure"]=&$tdatabaseprocedure;
$field_labels["baseprocedure"] = &$fieldLabelsbaseprocedure;
$fieldToolTips["baseprocedure"] = &$fieldToolTipsbaseprocedure;
$placeHolders["baseprocedure"] = &$placeHoldersbaseprocedure;
$page_titles["baseprocedure"] = &$pageTitlesbaseprocedure;


changeTextControlsToDate( "baseprocedure" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["baseprocedure"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["baseprocedure"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="tracking";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tracking";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tracking";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["baseprocedure"][0] = $masterParams;
				$masterTablesData["baseprocedure"][0]["masterKeys"] = array();
	$masterTablesData["baseprocedure"][0]["masterKeys"][]="trackingId";
				$masterTablesData["baseprocedure"][0]["detailKeys"] = array();
	$masterTablesData["baseprocedure"][0]["detailKeys"][]="trackingIds";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="requestor";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="requestor";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "requestor";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["baseprocedure"][1] = $masterParams;
				$masterTablesData["baseprocedure"][1]["masterKeys"] = array();
	$masterTablesData["baseprocedure"][1]["masterKeys"][]="name";
				$masterTablesData["baseprocedure"][1]["detailKeys"] = array();
	$masterTablesData["baseprocedure"][1]["detailKeys"][]="name";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="response";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="response";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "response";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["baseprocedure"][2] = $masterParams;
				$masterTablesData["baseprocedure"][2]["masterKeys"] = array();
	$masterTablesData["baseprocedure"][2]["masterKeys"][]="responseId";
				$masterTablesData["baseprocedure"][2]["detailKeys"] = array();
	$masterTablesData["baseprocedure"][2]["detailKeys"][]="responseId";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="document";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="document";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "document";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["baseprocedure"][3] = $masterParams;
				$masterTablesData["baseprocedure"][3]["masterKeys"] = array();
	$masterTablesData["baseprocedure"][3]["masterKeys"][]="documentId";
				$masterTablesData["baseprocedure"][3]["detailKeys"] = array();
	$masterTablesData["baseprocedure"][3]["detailKeys"][]="documentId";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_baseprocedure()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "*";
$proto0["m_strFrom"] = "FROM baseprocedure";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto6["m_sql"] = "*";
$proto6["m_srcTableName"] = "baseprocedure";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "baseprocedure";
$proto9["m_srcTableName"] = "baseprocedure";
$proto9["m_columns"] = array();
$proto9["m_columns"][] = "pqrsfId";
$proto9["m_columns"][] = "nuv";
$proto9["m_columns"][] = "entryDate";
$proto9["m_columns"][] = "expirationDate";
$proto9["m_columns"][] = "type";
$proto9["m_columns"][] = "subject";
$proto9["m_columns"][] = "name";
$proto9["m_columns"][] = "isDisabled";
$proto9["m_columns"][] = "replyDate";
$proto9["m_columns"][] = "requestingIds";
$proto9["m_columns"][] = "documentId";
$proto9["m_columns"][] = "respondeDocumentId";
$proto9["m_columns"][] = "trackingIds";
$proto9["m_columns"][] = "responseId";
$obj = new SQLTable($proto9);

$proto8["m_table"] = $obj;
$proto8["m_sql"] = "baseprocedure";
$proto8["m_alias"] = "";
$proto8["m_srcTableName"] = "baseprocedure";
$proto10=array();
$proto10["m_sql"] = "";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

$proto8["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto8);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="baseprocedure";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_baseprocedure = createSqlQuery_baseprocedure();


	
		;

														

$tdatabaseprocedure[".sqlquery"] = $queryData_baseprocedure;



$tdatabaseprocedure[".hasEvents"] = false;

?>
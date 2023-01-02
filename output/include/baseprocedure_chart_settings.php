<?php
$tdatabaseprocedure_chart = array();
$tdatabaseprocedure_chart[".searchableFields"] = array();
$tdatabaseprocedure_chart[".ShortName"] = "baseprocedure_chart";
$tdatabaseprocedure_chart[".OwnerID"] = "";
$tdatabaseprocedure_chart[".OriginalTable"] = "baseprocedure";


$tdatabaseprocedure_chart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatabaseprocedure_chart[".originalPagesByType"] = $tdatabaseprocedure_chart[".pagesByType"];
$tdatabaseprocedure_chart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatabaseprocedure_chart[".originalPages"] = $tdatabaseprocedure_chart[".pages"];
$tdatabaseprocedure_chart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatabaseprocedure_chart[".originalDefaultPages"] = $tdatabaseprocedure_chart[".defaultPages"];

//	field labels
$fieldLabelsbaseprocedure_chart = array();
$fieldToolTipsbaseprocedure_chart = array();
$pageTitlesbaseprocedure_chart = array();
$placeHoldersbaseprocedure_chart = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbaseprocedure_chart["Spanish"] = array();
	$fieldToolTipsbaseprocedure_chart["Spanish"] = array();
	$placeHoldersbaseprocedure_chart["Spanish"] = array();
	$pageTitlesbaseprocedure_chart["Spanish"] = array();
	$fieldLabelsbaseprocedure_chart["Spanish"]["pqrsfId"] = "Pqrsf Id";
	$fieldToolTipsbaseprocedure_chart["Spanish"]["pqrsfId"] = "";
	$placeHoldersbaseprocedure_chart["Spanish"]["pqrsfId"] = "";
	$fieldLabelsbaseprocedure_chart["Spanish"]["nuv"] = "Nuv";
	$fieldToolTipsbaseprocedure_chart["Spanish"]["nuv"] = "";
	$placeHoldersbaseprocedure_chart["Spanish"]["nuv"] = "";
	$fieldLabelsbaseprocedure_chart["Spanish"]["entryDate"] = "Entry Date";
	$fieldToolTipsbaseprocedure_chart["Spanish"]["entryDate"] = "";
	$placeHoldersbaseprocedure_chart["Spanish"]["entryDate"] = "";
	$fieldLabelsbaseprocedure_chart["Spanish"]["expirationDate"] = "Expiration Date";
	$fieldToolTipsbaseprocedure_chart["Spanish"]["expirationDate"] = "";
	$placeHoldersbaseprocedure_chart["Spanish"]["expirationDate"] = "";
	$fieldLabelsbaseprocedure_chart["Spanish"]["type"] = "Type";
	$fieldToolTipsbaseprocedure_chart["Spanish"]["type"] = "";
	$placeHoldersbaseprocedure_chart["Spanish"]["type"] = "";
	$fieldLabelsbaseprocedure_chart["Spanish"]["subject"] = "Subject";
	$fieldToolTipsbaseprocedure_chart["Spanish"]["subject"] = "";
	$placeHoldersbaseprocedure_chart["Spanish"]["subject"] = "";
	$fieldLabelsbaseprocedure_chart["Spanish"]["name"] = "Name";
	$fieldToolTipsbaseprocedure_chart["Spanish"]["name"] = "";
	$placeHoldersbaseprocedure_chart["Spanish"]["name"] = "";
	$fieldLabelsbaseprocedure_chart["Spanish"]["isDisabled"] = "Is Disabled";
	$fieldToolTipsbaseprocedure_chart["Spanish"]["isDisabled"] = "";
	$placeHoldersbaseprocedure_chart["Spanish"]["isDisabled"] = "";
	$fieldLabelsbaseprocedure_chart["Spanish"]["replyDate"] = "Reply Date";
	$fieldToolTipsbaseprocedure_chart["Spanish"]["replyDate"] = "";
	$placeHoldersbaseprocedure_chart["Spanish"]["replyDate"] = "";
	$fieldLabelsbaseprocedure_chart["Spanish"]["requestingIds"] = "Requesting Ids";
	$fieldToolTipsbaseprocedure_chart["Spanish"]["requestingIds"] = "";
	$placeHoldersbaseprocedure_chart["Spanish"]["requestingIds"] = "";
	$fieldLabelsbaseprocedure_chart["Spanish"]["documentId"] = "Document Id";
	$fieldToolTipsbaseprocedure_chart["Spanish"]["documentId"] = "";
	$placeHoldersbaseprocedure_chart["Spanish"]["documentId"] = "";
	$fieldLabelsbaseprocedure_chart["Spanish"]["respondeDocumentId"] = "Responde Document Id";
	$fieldToolTipsbaseprocedure_chart["Spanish"]["respondeDocumentId"] = "";
	$placeHoldersbaseprocedure_chart["Spanish"]["respondeDocumentId"] = "";
	$fieldLabelsbaseprocedure_chart["Spanish"]["trackingIds"] = "Tracking Ids";
	$fieldToolTipsbaseprocedure_chart["Spanish"]["trackingIds"] = "";
	$placeHoldersbaseprocedure_chart["Spanish"]["trackingIds"] = "";
	$fieldLabelsbaseprocedure_chart["Spanish"]["responseId"] = "Response Id";
	$fieldToolTipsbaseprocedure_chart["Spanish"]["responseId"] = "";
	$placeHoldersbaseprocedure_chart["Spanish"]["responseId"] = "";
	if (count($fieldToolTipsbaseprocedure_chart["Spanish"]))
		$tdatabaseprocedure_chart[".isUseToolTips"] = true;
}


	$tdatabaseprocedure_chart[".NCSearch"] = true;

	$tdatabaseprocedure_chart[".ChartRefreshTime"] = 0;


$tdatabaseprocedure_chart[".shortTableName"] = "baseprocedure_chart";
$tdatabaseprocedure_chart[".nSecOptions"] = 0;

$tdatabaseprocedure_chart[".mainTableOwnerID"] = "";
$tdatabaseprocedure_chart[".entityType"] = 3;
$tdatabaseprocedure_chart[".connId"] = "pqrsf_at_localhost";


$tdatabaseprocedure_chart[".strOriginalTableName"] = "baseprocedure";

	



$tdatabaseprocedure_chart[".showAddInPopup"] = false;

$tdatabaseprocedure_chart[".showEditInPopup"] = false;

$tdatabaseprocedure_chart[".showViewInPopup"] = false;

$tdatabaseprocedure_chart[".listAjax"] = false;
//	temporary
//$tdatabaseprocedure_chart[".listAjax"] = false;

	$tdatabaseprocedure_chart[".audit"] = false;

	$tdatabaseprocedure_chart[".locking"] = false;


$pages = $tdatabaseprocedure_chart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabaseprocedure_chart[".edit"] = true;
	$tdatabaseprocedure_chart[".afterEditAction"] = 1;
	$tdatabaseprocedure_chart[".closePopupAfterEdit"] = 1;
	$tdatabaseprocedure_chart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabaseprocedure_chart[".add"] = true;
$tdatabaseprocedure_chart[".afterAddAction"] = 1;
$tdatabaseprocedure_chart[".closePopupAfterAdd"] = 1;
$tdatabaseprocedure_chart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabaseprocedure_chart[".list"] = true;
}



$tdatabaseprocedure_chart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabaseprocedure_chart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabaseprocedure_chart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabaseprocedure_chart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabaseprocedure_chart[".printFriendly"] = true;
}



$tdatabaseprocedure_chart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabaseprocedure_chart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabaseprocedure_chart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabaseprocedure_chart[".isUseAjaxSuggest"] = true;



			

$tdatabaseprocedure_chart[".ajaxCodeSnippetAdded"] = false;

$tdatabaseprocedure_chart[".buttonsAdded"] = false;

$tdatabaseprocedure_chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabaseprocedure_chart[".isUseTimeForSearch"] = false;


$tdatabaseprocedure_chart[".badgeColor"] = "00C2C5";


$tdatabaseprocedure_chart[".allSearchFields"] = array();
$tdatabaseprocedure_chart[".filterFields"] = array();
$tdatabaseprocedure_chart[".requiredSearchFields"] = array();

$tdatabaseprocedure_chart[".googleLikeFields"] = array();
$tdatabaseprocedure_chart[".googleLikeFields"][] = "pqrsfId";
$tdatabaseprocedure_chart[".googleLikeFields"][] = "nuv";
$tdatabaseprocedure_chart[".googleLikeFields"][] = "entryDate";
$tdatabaseprocedure_chart[".googleLikeFields"][] = "expirationDate";
$tdatabaseprocedure_chart[".googleLikeFields"][] = "type";
$tdatabaseprocedure_chart[".googleLikeFields"][] = "subject";
$tdatabaseprocedure_chart[".googleLikeFields"][] = "name";
$tdatabaseprocedure_chart[".googleLikeFields"][] = "isDisabled";
$tdatabaseprocedure_chart[".googleLikeFields"][] = "replyDate";
$tdatabaseprocedure_chart[".googleLikeFields"][] = "requestingIds";
$tdatabaseprocedure_chart[".googleLikeFields"][] = "documentId";
$tdatabaseprocedure_chart[".googleLikeFields"][] = "respondeDocumentId";
$tdatabaseprocedure_chart[".googleLikeFields"][] = "trackingIds";
$tdatabaseprocedure_chart[".googleLikeFields"][] = "responseId";



$tdatabaseprocedure_chart[".tableType"] = "chart";

$tdatabaseprocedure_chart[".printerPageOrientation"] = 0;
$tdatabaseprocedure_chart[".nPrinterPageScale"] = 100;

$tdatabaseprocedure_chart[".nPrinterSplitRecords"] = 40;

$tdatabaseprocedure_chart[".geocodingEnabled"] = false;



// chart settings
$tdatabaseprocedure_chart[".chartType"] = "2DColumn";
// end of chart settings








$tstrOrderBy = "";
$tdatabaseprocedure_chart[".strOrderBy"] = $tstrOrderBy;

$tdatabaseprocedure_chart[".orderindexes"] = array();


$tdatabaseprocedure_chart[".sqlHead"] = "SELECT pqrsfId,  	nuv,  	entryDate,  	expirationDate,  	`type`,  	subject,  	name,  	isDisabled,  	replyDate,  	requestingIds,  	documentId,  	respondeDocumentId,  	trackingIds,  	responseId";
$tdatabaseprocedure_chart[".sqlFrom"] = "FROM BaseProcedure";
$tdatabaseprocedure_chart[".sqlWhereExpr"] = "";
$tdatabaseprocedure_chart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabaseprocedure_chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabaseprocedure_chart[".arrGroupsPerPage"] = $arrGPP;

$tdatabaseprocedure_chart[".highlightSearchResults"] = true;

$tableKeysbaseprocedure_chart = array();
$tableKeysbaseprocedure_chart[] = "pqrsfId";
$tdatabaseprocedure_chart[".Keys"] = $tableKeysbaseprocedure_chart;


$tdatabaseprocedure_chart[".hideMobileList"] = array();




//	pqrsfId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "pqrsfId";
	$fdata["GoodName"] = "pqrsfId";
	$fdata["ownerTable"] = "baseprocedure";
	$fdata["Label"] = GetFieldLabel("baseprocedure_Chart","pqrsfId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "pqrsfId";

		$fdata["sourceSingle"] = "pqrsfId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pqrsfId";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatabaseprocedure_chart["pqrsfId"] = $fdata;
		$tdatabaseprocedure_chart[".searchableFields"][] = "pqrsfId";
//	nuv
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nuv";
	$fdata["GoodName"] = "nuv";
	$fdata["ownerTable"] = "baseprocedure";
	$fdata["Label"] = GetFieldLabel("baseprocedure_Chart","nuv");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nuv";

		$fdata["sourceSingle"] = "nuv";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nuv";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% ya existe", "messageType" => "Text");

	
//	End validation

	
	
	
		$edata["denyDuplicates"] = true;

	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatabaseprocedure_chart["nuv"] = $fdata;
		$tdatabaseprocedure_chart[".searchableFields"][] = "nuv";
//	entryDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "entryDate";
	$fdata["GoodName"] = "entryDate";
	$fdata["ownerTable"] = "baseprocedure";
	$fdata["Label"] = GetFieldLabel("baseprocedure_Chart","entryDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "entryDate";

		$fdata["sourceSingle"] = "entryDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "entryDate";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatabaseprocedure_chart["entryDate"] = $fdata;
		$tdatabaseprocedure_chart[".searchableFields"][] = "entryDate";
//	expirationDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "expirationDate";
	$fdata["GoodName"] = "expirationDate";
	$fdata["ownerTable"] = "baseprocedure";
	$fdata["Label"] = GetFieldLabel("baseprocedure_Chart","expirationDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "expirationDate";

		$fdata["sourceSingle"] = "expirationDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "expirationDate";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatabaseprocedure_chart["expirationDate"] = $fdata;
		$tdatabaseprocedure_chart[".searchableFields"][] = "expirationDate";
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "baseprocedure";
	$fdata["Label"] = GetFieldLabel("baseprocedure_Chart","type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "type";

		$fdata["sourceSingle"] = "type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`type`";

	
	
			
//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatabaseprocedure_chart["type"] = $fdata;
		$tdatabaseprocedure_chart[".searchableFields"][] = "type";
//	subject
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "subject";
	$fdata["GoodName"] = "subject";
	$fdata["ownerTable"] = "baseprocedure";
	$fdata["Label"] = GetFieldLabel("baseprocedure_Chart","subject");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "subject";

		$fdata["sourceSingle"] = "subject";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "subject";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatabaseprocedure_chart["subject"] = $fdata;
		$tdatabaseprocedure_chart[".searchableFields"][] = "subject";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "baseprocedure";
	$fdata["Label"] = GetFieldLabel("baseprocedure_Chart","name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "name";

		$fdata["sourceSingle"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatabaseprocedure_chart["name"] = $fdata;
		$tdatabaseprocedure_chart[".searchableFields"][] = "name";
//	isDisabled
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "isDisabled";
	$fdata["GoodName"] = "isDisabled";
	$fdata["ownerTable"] = "baseprocedure";
	$fdata["Label"] = GetFieldLabel("baseprocedure_Chart","isDisabled");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "isDisabled";

		$fdata["sourceSingle"] = "isDisabled";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isDisabled";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatabaseprocedure_chart["isDisabled"] = $fdata;
		$tdatabaseprocedure_chart[".searchableFields"][] = "isDisabled";
//	replyDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "replyDate";
	$fdata["GoodName"] = "replyDate";
	$fdata["ownerTable"] = "baseprocedure";
	$fdata["Label"] = GetFieldLabel("baseprocedure_Chart","replyDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "replyDate";

		$fdata["sourceSingle"] = "replyDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "replyDate";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatabaseprocedure_chart["replyDate"] = $fdata;
		$tdatabaseprocedure_chart[".searchableFields"][] = "replyDate";
//	requestingIds
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "requestingIds";
	$fdata["GoodName"] = "requestingIds";
	$fdata["ownerTable"] = "baseprocedure";
	$fdata["Label"] = GetFieldLabel("baseprocedure_Chart","requestingIds");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "requestingIds";

		$fdata["sourceSingle"] = "requestingIds";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "requestingIds";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "requestor";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "userId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "userId";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatabaseprocedure_chart["requestingIds"] = $fdata;
		$tdatabaseprocedure_chart[".searchableFields"][] = "requestingIds";
//	documentId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "documentId";
	$fdata["GoodName"] = "documentId";
	$fdata["ownerTable"] = "baseprocedure";
	$fdata["Label"] = GetFieldLabel("baseprocedure_Chart","documentId");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "documentId";

		$fdata["sourceSingle"] = "documentId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "documentId";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "document";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "documentId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "documentId";

	

	
	$edata["LookupOrderBy"] = "documentId";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatabaseprocedure_chart["documentId"] = $fdata;
		$tdatabaseprocedure_chart[".searchableFields"][] = "documentId";
//	respondeDocumentId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "respondeDocumentId";
	$fdata["GoodName"] = "respondeDocumentId";
	$fdata["ownerTable"] = "baseprocedure";
	$fdata["Label"] = GetFieldLabel("baseprocedure_Chart","respondeDocumentId");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "respondeDocumentId";

		$fdata["sourceSingle"] = "respondeDocumentId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "respondeDocumentId";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "response";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "responseDocumentId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "responseDocumentId";

	

	
	$edata["LookupOrderBy"] = "responseDocumentId";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatabaseprocedure_chart["respondeDocumentId"] = $fdata;
		$tdatabaseprocedure_chart[".searchableFields"][] = "respondeDocumentId";
//	trackingIds
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "trackingIds";
	$fdata["GoodName"] = "trackingIds";
	$fdata["ownerTable"] = "baseprocedure";
	$fdata["Label"] = GetFieldLabel("baseprocedure_Chart","trackingIds");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "trackingIds";

		$fdata["sourceSingle"] = "trackingIds";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "trackingIds";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tracking";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "trackingId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "trackingId";

	

	
	$edata["LookupOrderBy"] = "trackingId";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatabaseprocedure_chart["trackingIds"] = $fdata;
		$tdatabaseprocedure_chart[".searchableFields"][] = "trackingIds";
//	responseId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "responseId";
	$fdata["GoodName"] = "responseId";
	$fdata["ownerTable"] = "baseprocedure";
	$fdata["Label"] = GetFieldLabel("baseprocedure_Chart","responseId");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "responseId";

		$fdata["sourceSingle"] = "responseId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "responseId";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "response";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "responseId";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "responseId";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatabaseprocedure_chart["responseId"] = $fdata;
		$tdatabaseprocedure_chart[".searchableFields"][] = "responseId";

$tdatabaseprocedure_chart[".chartLabelField"] = "type";
$tdatabaseprocedure_chart[".chartSeries"] = array();
$tdatabaseprocedure_chart[".chartSeries"][] = array(
	"field" => "pqrsfId",
	"total" => ""
);
	$tdatabaseprocedure_chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">baseprocedure Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdatabaseprocedure_chart[".chartXml"] .= '<attr value="0">
			<attr value="name">pqrsfId</attr>';
	$tdatabaseprocedure_chart[".chartXml"] .= '</attr>';
	$tdatabaseprocedure_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">type</attr>
	</attr>';
	$tdatabaseprocedure_chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatabaseprocedure_chart[".chartXml"] .= '<attr value="head">'.xmlencode("").'</attr>
<attr value="foot">'.xmlencode("").'</attr>
<attr value="y_axis_label">'.xmlencode("pqrsfId").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">false</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdatabaseprocedure_chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatabaseprocedure_chart[".chartXml"] .= '<attr value="0">
		<attr value="name">pqrsfId</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("baseprocedure_Chart","pqrsfId")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatabaseprocedure_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">nuv</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("baseprocedure_Chart","nuv")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatabaseprocedure_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">entryDate</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("baseprocedure_Chart","entryDate")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatabaseprocedure_chart[".chartXml"] .= '<attr value="3">
		<attr value="name">expirationDate</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("baseprocedure_Chart","expirationDate")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatabaseprocedure_chart[".chartXml"] .= '<attr value="4">
		<attr value="name">type</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("baseprocedure_Chart","type")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatabaseprocedure_chart[".chartXml"] .= '<attr value="5">
		<attr value="name">subject</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("baseprocedure_Chart","subject")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatabaseprocedure_chart[".chartXml"] .= '<attr value="6">
		<attr value="name">name</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("baseprocedure_Chart","name")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatabaseprocedure_chart[".chartXml"] .= '<attr value="7">
		<attr value="name">isDisabled</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("baseprocedure_Chart","isDisabled")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatabaseprocedure_chart[".chartXml"] .= '<attr value="8">
		<attr value="name">replyDate</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("baseprocedure_Chart","replyDate")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatabaseprocedure_chart[".chartXml"] .= '<attr value="9">
		<attr value="name">requestingIds</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("baseprocedure_Chart","requestingIds")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatabaseprocedure_chart[".chartXml"] .= '<attr value="10">
		<attr value="name">documentId</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("baseprocedure_Chart","documentId")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatabaseprocedure_chart[".chartXml"] .= '<attr value="11">
		<attr value="name">respondeDocumentId</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("baseprocedure_Chart","respondeDocumentId")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatabaseprocedure_chart[".chartXml"] .= '<attr value="12">
		<attr value="name">trackingIds</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("baseprocedure_Chart","trackingIds")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatabaseprocedure_chart[".chartXml"] .= '<attr value="13">
		<attr value="name">responseId</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("baseprocedure_Chart","responseId")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatabaseprocedure_chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">baseprocedure Chart</attr>
<attr value="short_table_name">baseprocedure_chart</attr>
</attr>

</chart>';

$tables_data["baseprocedure Chart"]=&$tdatabaseprocedure_chart;
$field_labels["baseprocedure_Chart"] = &$fieldLabelsbaseprocedure_chart;
$fieldToolTips["baseprocedure_Chart"] = &$fieldToolTipsbaseprocedure_chart;
$placeHolders["baseprocedure_Chart"] = &$placeHoldersbaseprocedure_chart;
$page_titles["baseprocedure_Chart"] = &$pageTitlesbaseprocedure_chart;


changeTextControlsToDate( "baseprocedure Chart" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["baseprocedure Chart"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["baseprocedure Chart"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_baseprocedure_chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "pqrsfId,  	nuv,  	entryDate,  	expirationDate,  	`type`,  	subject,  	name,  	isDisabled,  	replyDate,  	requestingIds,  	documentId,  	respondeDocumentId,  	trackingIds,  	responseId";
$proto0["m_strFrom"] = "FROM BaseProcedure";
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
			$obj = new SQLField(array(
	"m_strName" => "pqrsfId",
	"m_strTable" => "baseprocedure",
	"m_srcTableName" => "baseprocedure Chart"
));

$proto6["m_sql"] = "pqrsfId";
$proto6["m_srcTableName"] = "baseprocedure Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nuv",
	"m_strTable" => "baseprocedure",
	"m_srcTableName" => "baseprocedure Chart"
));

$proto8["m_sql"] = "nuv";
$proto8["m_srcTableName"] = "baseprocedure Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "entryDate",
	"m_strTable" => "baseprocedure",
	"m_srcTableName" => "baseprocedure Chart"
));

$proto10["m_sql"] = "entryDate";
$proto10["m_srcTableName"] = "baseprocedure Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "expirationDate",
	"m_strTable" => "baseprocedure",
	"m_srcTableName" => "baseprocedure Chart"
));

$proto12["m_sql"] = "expirationDate";
$proto12["m_srcTableName"] = "baseprocedure Chart";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "baseprocedure",
	"m_srcTableName" => "baseprocedure Chart"
));

$proto14["m_sql"] = "`type`";
$proto14["m_srcTableName"] = "baseprocedure Chart";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "subject",
	"m_strTable" => "baseprocedure",
	"m_srcTableName" => "baseprocedure Chart"
));

$proto16["m_sql"] = "subject";
$proto16["m_srcTableName"] = "baseprocedure Chart";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "baseprocedure",
	"m_srcTableName" => "baseprocedure Chart"
));

$proto18["m_sql"] = "name";
$proto18["m_srcTableName"] = "baseprocedure Chart";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "isDisabled",
	"m_strTable" => "baseprocedure",
	"m_srcTableName" => "baseprocedure Chart"
));

$proto20["m_sql"] = "isDisabled";
$proto20["m_srcTableName"] = "baseprocedure Chart";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "replyDate",
	"m_strTable" => "baseprocedure",
	"m_srcTableName" => "baseprocedure Chart"
));

$proto22["m_sql"] = "replyDate";
$proto22["m_srcTableName"] = "baseprocedure Chart";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "requestingIds",
	"m_strTable" => "baseprocedure",
	"m_srcTableName" => "baseprocedure Chart"
));

$proto24["m_sql"] = "requestingIds";
$proto24["m_srcTableName"] = "baseprocedure Chart";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "documentId",
	"m_strTable" => "baseprocedure",
	"m_srcTableName" => "baseprocedure Chart"
));

$proto26["m_sql"] = "documentId";
$proto26["m_srcTableName"] = "baseprocedure Chart";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "respondeDocumentId",
	"m_strTable" => "baseprocedure",
	"m_srcTableName" => "baseprocedure Chart"
));

$proto28["m_sql"] = "respondeDocumentId";
$proto28["m_srcTableName"] = "baseprocedure Chart";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "trackingIds",
	"m_strTable" => "baseprocedure",
	"m_srcTableName" => "baseprocedure Chart"
));

$proto30["m_sql"] = "trackingIds";
$proto30["m_srcTableName"] = "baseprocedure Chart";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "responseId",
	"m_strTable" => "baseprocedure",
	"m_srcTableName" => "baseprocedure Chart"
));

$proto32["m_sql"] = "responseId";
$proto32["m_srcTableName"] = "baseprocedure Chart";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "baseprocedure";
$proto35["m_srcTableName"] = "baseprocedure Chart";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "pqrsfId";
$proto35["m_columns"][] = "nuv";
$proto35["m_columns"][] = "entryDate";
$proto35["m_columns"][] = "expirationDate";
$proto35["m_columns"][] = "type";
$proto35["m_columns"][] = "subject";
$proto35["m_columns"][] = "name";
$proto35["m_columns"][] = "isDisabled";
$proto35["m_columns"][] = "replyDate";
$proto35["m_columns"][] = "requestingIds";
$proto35["m_columns"][] = "documentId";
$proto35["m_columns"][] = "respondeDocumentId";
$proto35["m_columns"][] = "trackingIds";
$proto35["m_columns"][] = "responseId";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "BaseProcedure";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "baseprocedure Chart";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="baseprocedure Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_baseprocedure_chart = createSqlQuery_baseprocedure_chart();


	
		;

														

$tdatabaseprocedure_chart[".sqlquery"] = $queryData_baseprocedure_chart;



$tdatabaseprocedure_chart[".hasEvents"] = false;

?>
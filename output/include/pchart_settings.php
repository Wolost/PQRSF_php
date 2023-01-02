<?php
$tdatapchart = array();
$tdatapchart[".searchableFields"] = array();
$tdatapchart[".ShortName"] = "pchart";
$tdatapchart[".OwnerID"] = "";
$tdatapchart[".OriginalTable"] = "baseprocedure";


$tdatapchart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatapchart[".originalPagesByType"] = $tdatapchart[".pagesByType"];
$tdatapchart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatapchart[".originalPages"] = $tdatapchart[".pages"];
$tdatapchart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatapchart[".originalDefaultPages"] = $tdatapchart[".defaultPages"];

//	field labels
$fieldLabelspchart = array();
$fieldToolTipspchart = array();
$pageTitlespchart = array();
$placeHolderspchart = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspchart["Spanish"] = array();
	$fieldToolTipspchart["Spanish"] = array();
	$placeHolderspchart["Spanish"] = array();
	$pageTitlespchart["Spanish"] = array();
	$fieldLabelspchart["Spanish"]["pqrsfId"] = "Pqrsf Id";
	$fieldToolTipspchart["Spanish"]["pqrsfId"] = "";
	$placeHolderspchart["Spanish"]["pqrsfId"] = "";
	$fieldLabelspchart["Spanish"]["nuv"] = "Nuv";
	$fieldToolTipspchart["Spanish"]["nuv"] = "";
	$placeHolderspchart["Spanish"]["nuv"] = "";
	$fieldLabelspchart["Spanish"]["entryDate"] = "Entry Date";
	$fieldToolTipspchart["Spanish"]["entryDate"] = "";
	$placeHolderspchart["Spanish"]["entryDate"] = "";
	$fieldLabelspchart["Spanish"]["expirationDate"] = "Expiration Date";
	$fieldToolTipspchart["Spanish"]["expirationDate"] = "";
	$placeHolderspchart["Spanish"]["expirationDate"] = "";
	$fieldLabelspchart["Spanish"]["type"] = "Type";
	$fieldToolTipspchart["Spanish"]["type"] = "";
	$placeHolderspchart["Spanish"]["type"] = "";
	$fieldLabelspchart["Spanish"]["subject"] = "Subject";
	$fieldToolTipspchart["Spanish"]["subject"] = "";
	$placeHolderspchart["Spanish"]["subject"] = "";
	$fieldLabelspchart["Spanish"]["name"] = "Name";
	$fieldToolTipspchart["Spanish"]["name"] = "";
	$placeHolderspchart["Spanish"]["name"] = "";
	$fieldLabelspchart["Spanish"]["isDisabled"] = "Is Disabled";
	$fieldToolTipspchart["Spanish"]["isDisabled"] = "";
	$placeHolderspchart["Spanish"]["isDisabled"] = "";
	$fieldLabelspchart["Spanish"]["replyDate"] = "Reply Date";
	$fieldToolTipspchart["Spanish"]["replyDate"] = "";
	$placeHolderspchart["Spanish"]["replyDate"] = "";
	$fieldLabelspchart["Spanish"]["requestingIds"] = "Requesting Ids";
	$fieldToolTipspchart["Spanish"]["requestingIds"] = "";
	$placeHolderspchart["Spanish"]["requestingIds"] = "";
	$fieldLabelspchart["Spanish"]["documentId"] = "Document Id";
	$fieldToolTipspchart["Spanish"]["documentId"] = "";
	$placeHolderspchart["Spanish"]["documentId"] = "";
	$fieldLabelspchart["Spanish"]["respondeDocumentId"] = "Responde Document Id";
	$fieldToolTipspchart["Spanish"]["respondeDocumentId"] = "";
	$placeHolderspchart["Spanish"]["respondeDocumentId"] = "";
	$fieldLabelspchart["Spanish"]["trackingIds"] = "Tracking Ids";
	$fieldToolTipspchart["Spanish"]["trackingIds"] = "";
	$placeHolderspchart["Spanish"]["trackingIds"] = "";
	$fieldLabelspchart["Spanish"]["responseId"] = "Response Id";
	$fieldToolTipspchart["Spanish"]["responseId"] = "";
	$placeHolderspchart["Spanish"]["responseId"] = "";
	if (count($fieldToolTipspchart["Spanish"]))
		$tdatapchart[".isUseToolTips"] = true;
}


	$tdatapchart[".NCSearch"] = true;

	$tdatapchart[".ChartRefreshTime"] = 0;


$tdatapchart[".shortTableName"] = "pchart";
$tdatapchart[".nSecOptions"] = 0;

$tdatapchart[".mainTableOwnerID"] = "";
$tdatapchart[".entityType"] = 3;
$tdatapchart[".connId"] = "pqrsf_at_localhost";


$tdatapchart[".strOriginalTableName"] = "baseprocedure";

	



$tdatapchart[".showAddInPopup"] = false;

$tdatapchart[".showEditInPopup"] = false;

$tdatapchart[".showViewInPopup"] = false;

$tdatapchart[".listAjax"] = false;
//	temporary
//$tdatapchart[".listAjax"] = false;

	$tdatapchart[".audit"] = false;

	$tdatapchart[".locking"] = false;


$pages = $tdatapchart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapchart[".edit"] = true;
	$tdatapchart[".afterEditAction"] = 1;
	$tdatapchart[".closePopupAfterEdit"] = 1;
	$tdatapchart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapchart[".add"] = true;
$tdatapchart[".afterAddAction"] = 1;
$tdatapchart[".closePopupAfterAdd"] = 1;
$tdatapchart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapchart[".list"] = true;
}



$tdatapchart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapchart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapchart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapchart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapchart[".printFriendly"] = true;
}



$tdatapchart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapchart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapchart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapchart[".isUseAjaxSuggest"] = true;



			

$tdatapchart[".ajaxCodeSnippetAdded"] = false;

$tdatapchart[".buttonsAdded"] = false;

$tdatapchart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapchart[".isUseTimeForSearch"] = false;


$tdatapchart[".badgeColor"] = "DC143C";


$tdatapchart[".allSearchFields"] = array();
$tdatapchart[".filterFields"] = array();
$tdatapchart[".requiredSearchFields"] = array();

$tdatapchart[".googleLikeFields"] = array();
$tdatapchart[".googleLikeFields"][] = "pqrsfId";
$tdatapchart[".googleLikeFields"][] = "nuv";
$tdatapchart[".googleLikeFields"][] = "entryDate";
$tdatapchart[".googleLikeFields"][] = "expirationDate";
$tdatapchart[".googleLikeFields"][] = "type";
$tdatapchart[".googleLikeFields"][] = "subject";
$tdatapchart[".googleLikeFields"][] = "name";
$tdatapchart[".googleLikeFields"][] = "isDisabled";
$tdatapchart[".googleLikeFields"][] = "replyDate";
$tdatapchart[".googleLikeFields"][] = "requestingIds";
$tdatapchart[".googleLikeFields"][] = "documentId";
$tdatapchart[".googleLikeFields"][] = "respondeDocumentId";
$tdatapchart[".googleLikeFields"][] = "trackingIds";
$tdatapchart[".googleLikeFields"][] = "responseId";



$tdatapchart[".tableType"] = "chart";

$tdatapchart[".printerPageOrientation"] = 0;
$tdatapchart[".nPrinterPageScale"] = 100;

$tdatapchart[".nPrinterSplitRecords"] = 40;

$tdatapchart[".geocodingEnabled"] = false;



// chart settings
$tdatapchart[".chartType"] = "Line";
// end of chart settings








$tstrOrderBy = "";
$tdatapchart[".strOrderBy"] = $tstrOrderBy;

$tdatapchart[".orderindexes"] = array();


$tdatapchart[".sqlHead"] = "SELECT *";
$tdatapchart[".sqlFrom"] = "FROM baseprocedure";
$tdatapchart[".sqlWhereExpr"] = "";
$tdatapchart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapchart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapchart[".arrGroupsPerPage"] = $arrGPP;

$tdatapchart[".highlightSearchResults"] = true;

$tableKeyspchart = array();
$tableKeyspchart[] = "pqrsfId";
$tdatapchart[".Keys"] = $tableKeyspchart;


$tdatapchart[".hideMobileList"] = array();




//	pqrsfId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "pqrsfId";
	$fdata["GoodName"] = "pqrsfId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pchart","pqrsfId");
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


	$tdatapchart["pqrsfId"] = $fdata;
		$tdatapchart[".searchableFields"][] = "pqrsfId";
//	nuv
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nuv";
	$fdata["GoodName"] = "nuv";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pchart","nuv");
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


	$tdatapchart["nuv"] = $fdata;
		$tdatapchart[".searchableFields"][] = "nuv";
//	entryDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "entryDate";
	$fdata["GoodName"] = "entryDate";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pchart","entryDate");
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


	$tdatapchart["entryDate"] = $fdata;
		$tdatapchart[".searchableFields"][] = "entryDate";
//	expirationDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "expirationDate";
	$fdata["GoodName"] = "expirationDate";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pchart","expirationDate");
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


	$tdatapchart["expirationDate"] = $fdata;
		$tdatapchart[".searchableFields"][] = "expirationDate";
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pchart","type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "type";

		$fdata["sourceSingle"] = "type";

		$fdata["FullName"] = "type";

	
	
			
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
	$edata["LookupTable"] = "baseprocedure";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "type";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "type";

	

	
	$edata["LookupOrderBy"] = "type";

	
	
	
	

	
	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "pqrsfId";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapchart["type"] = $fdata;
		$tdatapchart[".searchableFields"][] = "type";
//	subject
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "subject";
	$fdata["GoodName"] = "subject";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pchart","subject");
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


	$tdatapchart["subject"] = $fdata;
		$tdatapchart[".searchableFields"][] = "subject";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pchart","name");
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


	$tdatapchart["name"] = $fdata;
		$tdatapchart[".searchableFields"][] = "name";
//	isDisabled
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "isDisabled";
	$fdata["GoodName"] = "isDisabled";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pchart","isDisabled");
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


	$tdatapchart["isDisabled"] = $fdata;
		$tdatapchart[".searchableFields"][] = "isDisabled";
//	replyDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "replyDate";
	$fdata["GoodName"] = "replyDate";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pchart","replyDate");
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


	$tdatapchart["replyDate"] = $fdata;
		$tdatapchart[".searchableFields"][] = "replyDate";
//	requestingIds
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "requestingIds";
	$fdata["GoodName"] = "requestingIds";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pchart","requestingIds");
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


	$tdatapchart["requestingIds"] = $fdata;
		$tdatapchart[".searchableFields"][] = "requestingIds";
//	documentId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "documentId";
	$fdata["GoodName"] = "documentId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pchart","documentId");
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


	$tdatapchart["documentId"] = $fdata;
		$tdatapchart[".searchableFields"][] = "documentId";
//	respondeDocumentId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "respondeDocumentId";
	$fdata["GoodName"] = "respondeDocumentId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pchart","respondeDocumentId");
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


	$tdatapchart["respondeDocumentId"] = $fdata;
		$tdatapchart[".searchableFields"][] = "respondeDocumentId";
//	trackingIds
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "trackingIds";
	$fdata["GoodName"] = "trackingIds";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pchart","trackingIds");
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


	$tdatapchart["trackingIds"] = $fdata;
		$tdatapchart[".searchableFields"][] = "trackingIds";
//	responseId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "responseId";
	$fdata["GoodName"] = "responseId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pchart","responseId");
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


	$tdatapchart["responseId"] = $fdata;
		$tdatapchart[".searchableFields"][] = "responseId";

$tdatapchart[".groupChart"] = true;
$tdatapchart[".chartLabelInterval"] = 0;
$tdatapchart[".chartLabelField"] = "type";
$tdatapchart[".chartSeries"] = array();
$tdatapchart[".chartSeries"][] = array(
	"field" => "pqrsfId",
	"total" => "COUNT"
);
	$tdatapchart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">Pchart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">line</attr>
		</attr>

		<attr value="parameters">';
	$tdatapchart[".chartXml"] .= '<attr value="0">
			<attr value="name">pqrsfId</attr>';
	$tdatapchart[".chartXml"] .= '</attr>';
	$tdatapchart[".chartXml"] .= '<attr value="1">
		<attr value="name">type</attr>
	</attr>';
	$tdatapchart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatapchart[".chartXml"] .= '<attr value="head">'.xmlencode("Peticiones").'</attr>
<attr value="foot">'.xmlencode("").'</attr>
<attr value="y_axis_label">'.xmlencode("pqrsfId").'</attr>


<attr value="slegend">false</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
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
$tdatapchart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatapchart[".chartXml"] .= '<attr value="0">
		<attr value="name">pqrsfId</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Pchart","pqrsfId")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapchart[".chartXml"] .= '<attr value="1">
		<attr value="name">nuv</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Pchart","nuv")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapchart[".chartXml"] .= '<attr value="2">
		<attr value="name">entryDate</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Pchart","entryDate")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapchart[".chartXml"] .= '<attr value="3">
		<attr value="name">expirationDate</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Pchart","expirationDate")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapchart[".chartXml"] .= '<attr value="4">
		<attr value="name">type</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Pchart","type")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapchart[".chartXml"] .= '<attr value="5">
		<attr value="name">subject</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Pchart","subject")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapchart[".chartXml"] .= '<attr value="6">
		<attr value="name">name</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Pchart","name")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapchart[".chartXml"] .= '<attr value="7">
		<attr value="name">isDisabled</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Pchart","isDisabled")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapchart[".chartXml"] .= '<attr value="8">
		<attr value="name">replyDate</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Pchart","replyDate")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapchart[".chartXml"] .= '<attr value="9">
		<attr value="name">requestingIds</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Pchart","requestingIds")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapchart[".chartXml"] .= '<attr value="10">
		<attr value="name">documentId</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Pchart","documentId")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapchart[".chartXml"] .= '<attr value="11">
		<attr value="name">respondeDocumentId</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Pchart","respondeDocumentId")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapchart[".chartXml"] .= '<attr value="12">
		<attr value="name">trackingIds</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Pchart","trackingIds")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapchart[".chartXml"] .= '<attr value="13">
		<attr value="name">responseId</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Pchart","responseId")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatapchart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">Pchart</attr>
<attr value="short_table_name">pchart</attr>
</attr>

</chart>';

$tables_data["Pchart"]=&$tdatapchart;
$field_labels["Pchart"] = &$fieldLabelspchart;
$fieldToolTips["Pchart"] = &$fieldToolTipspchart;
$placeHolders["Pchart"] = &$placeHolderspchart;
$page_titles["Pchart"] = &$pageTitlespchart;


changeTextControlsToDate( "Pchart" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Pchart"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Pchart"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_pchart()
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
$proto6["m_srcTableName"] = "Pchart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "baseprocedure";
$proto9["m_srcTableName"] = "Pchart";
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
$proto8["m_srcTableName"] = "Pchart";
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
$proto0["m_srcTableName"]="Pchart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pchart = createSqlQuery_pchart();


	
		;

														

$tdatapchart[".sqlquery"] = $queryData_pchart;



$tdatapchart[".hasEvents"] = false;

?>
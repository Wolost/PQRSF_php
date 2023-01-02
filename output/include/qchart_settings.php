<?php
$tdataqchart = array();
$tdataqchart[".searchableFields"] = array();
$tdataqchart[".ShortName"] = "qchart";
$tdataqchart[".OwnerID"] = "";
$tdataqchart[".OriginalTable"] = "baseprocedure";


$tdataqchart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdataqchart[".originalPagesByType"] = $tdataqchart[".pagesByType"];
$tdataqchart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdataqchart[".originalPages"] = $tdataqchart[".pages"];
$tdataqchart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdataqchart[".originalDefaultPages"] = $tdataqchart[".defaultPages"];

//	field labels
$fieldLabelsqchart = array();
$fieldToolTipsqchart = array();
$pageTitlesqchart = array();
$placeHoldersqchart = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsqchart["Spanish"] = array();
	$fieldToolTipsqchart["Spanish"] = array();
	$placeHoldersqchart["Spanish"] = array();
	$pageTitlesqchart["Spanish"] = array();
	$fieldLabelsqchart["Spanish"]["pqrsfId"] = "Pqrsf Id";
	$fieldToolTipsqchart["Spanish"]["pqrsfId"] = "";
	$placeHoldersqchart["Spanish"]["pqrsfId"] = "";
	$fieldLabelsqchart["Spanish"]["nuv"] = "Nuv";
	$fieldToolTipsqchart["Spanish"]["nuv"] = "";
	$placeHoldersqchart["Spanish"]["nuv"] = "";
	$fieldLabelsqchart["Spanish"]["entryDate"] = "Entry Date";
	$fieldToolTipsqchart["Spanish"]["entryDate"] = "";
	$placeHoldersqchart["Spanish"]["entryDate"] = "";
	$fieldLabelsqchart["Spanish"]["expirationDate"] = "Expiration Date";
	$fieldToolTipsqchart["Spanish"]["expirationDate"] = "";
	$placeHoldersqchart["Spanish"]["expirationDate"] = "";
	$fieldLabelsqchart["Spanish"]["type"] = "Type";
	$fieldToolTipsqchart["Spanish"]["type"] = "";
	$placeHoldersqchart["Spanish"]["type"] = "";
	$fieldLabelsqchart["Spanish"]["subject"] = "Subject";
	$fieldToolTipsqchart["Spanish"]["subject"] = "";
	$placeHoldersqchart["Spanish"]["subject"] = "";
	$fieldLabelsqchart["Spanish"]["name"] = "Name";
	$fieldToolTipsqchart["Spanish"]["name"] = "";
	$placeHoldersqchart["Spanish"]["name"] = "";
	$fieldLabelsqchart["Spanish"]["isDisabled"] = "Is Disabled";
	$fieldToolTipsqchart["Spanish"]["isDisabled"] = "";
	$placeHoldersqchart["Spanish"]["isDisabled"] = "";
	$fieldLabelsqchart["Spanish"]["replyDate"] = "Reply Date";
	$fieldToolTipsqchart["Spanish"]["replyDate"] = "";
	$placeHoldersqchart["Spanish"]["replyDate"] = "";
	$fieldLabelsqchart["Spanish"]["requestingIds"] = "Requesting Ids";
	$fieldToolTipsqchart["Spanish"]["requestingIds"] = "";
	$placeHoldersqchart["Spanish"]["requestingIds"] = "";
	$fieldLabelsqchart["Spanish"]["documentId"] = "Document Id";
	$fieldToolTipsqchart["Spanish"]["documentId"] = "";
	$placeHoldersqchart["Spanish"]["documentId"] = "";
	$fieldLabelsqchart["Spanish"]["respondeDocumentId"] = "Responde Document Id";
	$fieldToolTipsqchart["Spanish"]["respondeDocumentId"] = "";
	$placeHoldersqchart["Spanish"]["respondeDocumentId"] = "";
	$fieldLabelsqchart["Spanish"]["trackingIds"] = "Tracking Ids";
	$fieldToolTipsqchart["Spanish"]["trackingIds"] = "";
	$placeHoldersqchart["Spanish"]["trackingIds"] = "";
	$fieldLabelsqchart["Spanish"]["responseId"] = "Response Id";
	$fieldToolTipsqchart["Spanish"]["responseId"] = "";
	$placeHoldersqchart["Spanish"]["responseId"] = "";
	if (count($fieldToolTipsqchart["Spanish"]))
		$tdataqchart[".isUseToolTips"] = true;
}


	$tdataqchart[".NCSearch"] = true;

	$tdataqchart[".ChartRefreshTime"] = 0;


$tdataqchart[".shortTableName"] = "qchart";
$tdataqchart[".nSecOptions"] = 0;

$tdataqchart[".mainTableOwnerID"] = "";
$tdataqchart[".entityType"] = 3;
$tdataqchart[".connId"] = "pqrsf_at_localhost";


$tdataqchart[".strOriginalTableName"] = "baseprocedure";

	



$tdataqchart[".showAddInPopup"] = false;

$tdataqchart[".showEditInPopup"] = false;

$tdataqchart[".showViewInPopup"] = false;

$tdataqchart[".listAjax"] = false;
//	temporary
//$tdataqchart[".listAjax"] = false;

	$tdataqchart[".audit"] = false;

	$tdataqchart[".locking"] = false;


$pages = $tdataqchart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataqchart[".edit"] = true;
	$tdataqchart[".afterEditAction"] = 1;
	$tdataqchart[".closePopupAfterEdit"] = 1;
	$tdataqchart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataqchart[".add"] = true;
$tdataqchart[".afterAddAction"] = 1;
$tdataqchart[".closePopupAfterAdd"] = 1;
$tdataqchart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataqchart[".list"] = true;
}



$tdataqchart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataqchart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataqchart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataqchart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataqchart[".printFriendly"] = true;
}



$tdataqchart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataqchart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataqchart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataqchart[".isUseAjaxSuggest"] = true;



			

$tdataqchart[".ajaxCodeSnippetAdded"] = false;

$tdataqchart[".buttonsAdded"] = false;

$tdataqchart[".addPageEvents"] = false;

// use timepicker for search panel
$tdataqchart[".isUseTimeForSearch"] = false;


$tdataqchart[".badgeColor"] = "DC143C";


$tdataqchart[".allSearchFields"] = array();
$tdataqchart[".filterFields"] = array();
$tdataqchart[".requiredSearchFields"] = array();

$tdataqchart[".googleLikeFields"] = array();
$tdataqchart[".googleLikeFields"][] = "pqrsfId";
$tdataqchart[".googleLikeFields"][] = "nuv";
$tdataqchart[".googleLikeFields"][] = "entryDate";
$tdataqchart[".googleLikeFields"][] = "expirationDate";
$tdataqchart[".googleLikeFields"][] = "type";
$tdataqchart[".googleLikeFields"][] = "subject";
$tdataqchart[".googleLikeFields"][] = "name";
$tdataqchart[".googleLikeFields"][] = "isDisabled";
$tdataqchart[".googleLikeFields"][] = "replyDate";
$tdataqchart[".googleLikeFields"][] = "requestingIds";
$tdataqchart[".googleLikeFields"][] = "documentId";
$tdataqchart[".googleLikeFields"][] = "respondeDocumentId";
$tdataqchart[".googleLikeFields"][] = "trackingIds";
$tdataqchart[".googleLikeFields"][] = "responseId";



$tdataqchart[".tableType"] = "chart";

$tdataqchart[".printerPageOrientation"] = 0;
$tdataqchart[".nPrinterPageScale"] = 100;

$tdataqchart[".nPrinterSplitRecords"] = 40;

$tdataqchart[".geocodingEnabled"] = false;



// chart settings
$tdataqchart[".chartType"] = "Line";
// end of chart settings








$tstrOrderBy = "";
$tdataqchart[".strOrderBy"] = $tstrOrderBy;

$tdataqchart[".orderindexes"] = array();


$tdataqchart[".sqlHead"] = "SELECT *";
$tdataqchart[".sqlFrom"] = "FROM baseprocedure";
$tdataqchart[".sqlWhereExpr"] = "";
$tdataqchart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataqchart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataqchart[".arrGroupsPerPage"] = $arrGPP;

$tdataqchart[".highlightSearchResults"] = true;

$tableKeysqchart = array();
$tableKeysqchart[] = "pqrsfId";
$tdataqchart[".Keys"] = $tableKeysqchart;


$tdataqchart[".hideMobileList"] = array();




//	pqrsfId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "pqrsfId";
	$fdata["GoodName"] = "pqrsfId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("QChart","pqrsfId");
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


	$tdataqchart["pqrsfId"] = $fdata;
		$tdataqchart[".searchableFields"][] = "pqrsfId";
//	nuv
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nuv";
	$fdata["GoodName"] = "nuv";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("QChart","nuv");
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


	$tdataqchart["nuv"] = $fdata;
		$tdataqchart[".searchableFields"][] = "nuv";
//	entryDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "entryDate";
	$fdata["GoodName"] = "entryDate";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("QChart","entryDate");
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


	$tdataqchart["entryDate"] = $fdata;
		$tdataqchart[".searchableFields"][] = "entryDate";
//	expirationDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "expirationDate";
	$fdata["GoodName"] = "expirationDate";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("QChart","expirationDate");
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


	$tdataqchart["expirationDate"] = $fdata;
		$tdataqchart[".searchableFields"][] = "expirationDate";
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("QChart","type");
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

				$edata["LookupWhere"] = "type = 'Peticion'";


	
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


	$tdataqchart["type"] = $fdata;
		$tdataqchart[".searchableFields"][] = "type";
//	subject
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "subject";
	$fdata["GoodName"] = "subject";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("QChart","subject");
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


	$tdataqchart["subject"] = $fdata;
		$tdataqchart[".searchableFields"][] = "subject";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("QChart","name");
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


	$tdataqchart["name"] = $fdata;
		$tdataqchart[".searchableFields"][] = "name";
//	isDisabled
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "isDisabled";
	$fdata["GoodName"] = "isDisabled";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("QChart","isDisabled");
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


	$tdataqchart["isDisabled"] = $fdata;
		$tdataqchart[".searchableFields"][] = "isDisabled";
//	replyDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "replyDate";
	$fdata["GoodName"] = "replyDate";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("QChart","replyDate");
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


	$tdataqchart["replyDate"] = $fdata;
		$tdataqchart[".searchableFields"][] = "replyDate";
//	requestingIds
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "requestingIds";
	$fdata["GoodName"] = "requestingIds";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("QChart","requestingIds");
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


	$tdataqchart["requestingIds"] = $fdata;
		$tdataqchart[".searchableFields"][] = "requestingIds";
//	documentId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "documentId";
	$fdata["GoodName"] = "documentId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("QChart","documentId");
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


	$tdataqchart["documentId"] = $fdata;
		$tdataqchart[".searchableFields"][] = "documentId";
//	respondeDocumentId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "respondeDocumentId";
	$fdata["GoodName"] = "respondeDocumentId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("QChart","respondeDocumentId");
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


	$tdataqchart["respondeDocumentId"] = $fdata;
		$tdataqchart[".searchableFields"][] = "respondeDocumentId";
//	trackingIds
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "trackingIds";
	$fdata["GoodName"] = "trackingIds";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("QChart","trackingIds");
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


	$tdataqchart["trackingIds"] = $fdata;
		$tdataqchart[".searchableFields"][] = "trackingIds";
//	responseId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "responseId";
	$fdata["GoodName"] = "responseId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("QChart","responseId");
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


	$tdataqchart["responseId"] = $fdata;
		$tdataqchart[".searchableFields"][] = "responseId";

$tdataqchart[".chartLabelField"] = "type";
$tdataqchart[".chartSeries"] = array();
$tdataqchart[".chartSeries"][] = array(
	"field" => "pqrsfId",
	"total" => ""
);
	$tdataqchart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">QChart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">line</attr>
		</attr>

		<attr value="parameters">';
	$tdataqchart[".chartXml"] .= '<attr value="0">
			<attr value="name">pqrsfId</attr>';
	$tdataqchart[".chartXml"] .= '</attr>';
	$tdataqchart[".chartXml"] .= '<attr value="1">
		<attr value="name">type</attr>
	</attr>';
	$tdataqchart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdataqchart[".chartXml"] .= '<attr value="head">'.xmlencode("Peticion").'</attr>
<attr value="foot">'.xmlencode("").'</attr>
<attr value="y_axis_label">'.xmlencode("pqrsfId").'</attr>


<attr value="slegend">true</attr>
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
$tdataqchart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataqchart[".chartXml"] .= '<attr value="0">
		<attr value="name">pqrsfId</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("QChart","pqrsfId")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataqchart[".chartXml"] .= '<attr value="1">
		<attr value="name">nuv</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("QChart","nuv")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataqchart[".chartXml"] .= '<attr value="2">
		<attr value="name">entryDate</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("QChart","entryDate")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataqchart[".chartXml"] .= '<attr value="3">
		<attr value="name">expirationDate</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("QChart","expirationDate")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataqchart[".chartXml"] .= '<attr value="4">
		<attr value="name">type</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("QChart","type")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataqchart[".chartXml"] .= '<attr value="5">
		<attr value="name">subject</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("QChart","subject")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataqchart[".chartXml"] .= '<attr value="6">
		<attr value="name">name</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("QChart","name")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataqchart[".chartXml"] .= '<attr value="7">
		<attr value="name">isDisabled</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("QChart","isDisabled")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataqchart[".chartXml"] .= '<attr value="8">
		<attr value="name">replyDate</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("QChart","replyDate")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataqchart[".chartXml"] .= '<attr value="9">
		<attr value="name">requestingIds</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("QChart","requestingIds")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataqchart[".chartXml"] .= '<attr value="10">
		<attr value="name">documentId</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("QChart","documentId")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataqchart[".chartXml"] .= '<attr value="11">
		<attr value="name">respondeDocumentId</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("QChart","respondeDocumentId")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataqchart[".chartXml"] .= '<attr value="12">
		<attr value="name">trackingIds</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("QChart","trackingIds")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataqchart[".chartXml"] .= '<attr value="13">
		<attr value="name">responseId</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("QChart","responseId")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataqchart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">QChart</attr>
<attr value="short_table_name">qchart</attr>
</attr>

</chart>';

$tables_data["QChart"]=&$tdataqchart;
$field_labels["QChart"] = &$fieldLabelsqchart;
$fieldToolTips["QChart"] = &$fieldToolTipsqchart;
$placeHolders["QChart"] = &$placeHoldersqchart;
$page_titles["QChart"] = &$pageTitlesqchart;


changeTextControlsToDate( "QChart" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["QChart"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["QChart"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_qchart()
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
$proto6["m_srcTableName"] = "QChart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "baseprocedure";
$proto9["m_srcTableName"] = "QChart";
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
$proto8["m_srcTableName"] = "QChart";
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
$proto0["m_srcTableName"]="QChart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_qchart = createSqlQuery_qchart();


	
		;

														

$tdataqchart[".sqlquery"] = $queryData_qchart;



$tdataqchart[".hasEvents"] = false;

?>
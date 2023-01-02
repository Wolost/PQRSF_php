<?php
$tdataschart = array();
$tdataschart[".searchableFields"] = array();
$tdataschart[".ShortName"] = "schart";
$tdataschart[".OwnerID"] = "";
$tdataschart[".OriginalTable"] = "baseprocedure";


$tdataschart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdataschart[".originalPagesByType"] = $tdataschart[".pagesByType"];
$tdataschart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdataschart[".originalPages"] = $tdataschart[".pages"];
$tdataschart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdataschart[".originalDefaultPages"] = $tdataschart[".defaultPages"];

//	field labels
$fieldLabelsschart = array();
$fieldToolTipsschart = array();
$pageTitlesschart = array();
$placeHoldersschart = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsschart["Spanish"] = array();
	$fieldToolTipsschart["Spanish"] = array();
	$placeHoldersschart["Spanish"] = array();
	$pageTitlesschart["Spanish"] = array();
	$fieldLabelsschart["Spanish"]["pqrsfId"] = "Pqrsf Id";
	$fieldToolTipsschart["Spanish"]["pqrsfId"] = "";
	$placeHoldersschart["Spanish"]["pqrsfId"] = "";
	$fieldLabelsschart["Spanish"]["nuv"] = "Nuv";
	$fieldToolTipsschart["Spanish"]["nuv"] = "";
	$placeHoldersschart["Spanish"]["nuv"] = "";
	$fieldLabelsschart["Spanish"]["entryDate"] = "Entry Date";
	$fieldToolTipsschart["Spanish"]["entryDate"] = "";
	$placeHoldersschart["Spanish"]["entryDate"] = "";
	$fieldLabelsschart["Spanish"]["expirationDate"] = "Expiration Date";
	$fieldToolTipsschart["Spanish"]["expirationDate"] = "";
	$placeHoldersschart["Spanish"]["expirationDate"] = "";
	$fieldLabelsschart["Spanish"]["type"] = "Type";
	$fieldToolTipsschart["Spanish"]["type"] = "";
	$placeHoldersschart["Spanish"]["type"] = "";
	$fieldLabelsschart["Spanish"]["subject"] = "Subject";
	$fieldToolTipsschart["Spanish"]["subject"] = "";
	$placeHoldersschart["Spanish"]["subject"] = "";
	$fieldLabelsschart["Spanish"]["name"] = "Name";
	$fieldToolTipsschart["Spanish"]["name"] = "";
	$placeHoldersschart["Spanish"]["name"] = "";
	$fieldLabelsschart["Spanish"]["isDisabled"] = "Is Disabled";
	$fieldToolTipsschart["Spanish"]["isDisabled"] = "";
	$placeHoldersschart["Spanish"]["isDisabled"] = "";
	$fieldLabelsschart["Spanish"]["replyDate"] = "Reply Date";
	$fieldToolTipsschart["Spanish"]["replyDate"] = "";
	$placeHoldersschart["Spanish"]["replyDate"] = "";
	$fieldLabelsschart["Spanish"]["requestingIds"] = "Requesting Ids";
	$fieldToolTipsschart["Spanish"]["requestingIds"] = "";
	$placeHoldersschart["Spanish"]["requestingIds"] = "";
	$fieldLabelsschart["Spanish"]["documentId"] = "Document Id";
	$fieldToolTipsschart["Spanish"]["documentId"] = "";
	$placeHoldersschart["Spanish"]["documentId"] = "";
	$fieldLabelsschart["Spanish"]["respondeDocumentId"] = "Responde Document Id";
	$fieldToolTipsschart["Spanish"]["respondeDocumentId"] = "";
	$placeHoldersschart["Spanish"]["respondeDocumentId"] = "";
	$fieldLabelsschart["Spanish"]["trackingIds"] = "Tracking Ids";
	$fieldToolTipsschart["Spanish"]["trackingIds"] = "";
	$placeHoldersschart["Spanish"]["trackingIds"] = "";
	$fieldLabelsschart["Spanish"]["responseId"] = "Response Id";
	$fieldToolTipsschart["Spanish"]["responseId"] = "";
	$placeHoldersschart["Spanish"]["responseId"] = "";
	if (count($fieldToolTipsschart["Spanish"]))
		$tdataschart[".isUseToolTips"] = true;
}


	$tdataschart[".NCSearch"] = true;

	$tdataschart[".ChartRefreshTime"] = 0;


$tdataschart[".shortTableName"] = "schart";
$tdataschart[".nSecOptions"] = 0;

$tdataschart[".mainTableOwnerID"] = "";
$tdataschart[".entityType"] = 3;
$tdataschart[".connId"] = "pqrsf_at_localhost";


$tdataschart[".strOriginalTableName"] = "baseprocedure";

	



$tdataschart[".showAddInPopup"] = false;

$tdataschart[".showEditInPopup"] = false;

$tdataschart[".showViewInPopup"] = false;

$tdataschart[".listAjax"] = false;
//	temporary
//$tdataschart[".listAjax"] = false;

	$tdataschart[".audit"] = false;

	$tdataschart[".locking"] = false;


$pages = $tdataschart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataschart[".edit"] = true;
	$tdataschart[".afterEditAction"] = 1;
	$tdataschart[".closePopupAfterEdit"] = 1;
	$tdataschart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataschart[".add"] = true;
$tdataschart[".afterAddAction"] = 1;
$tdataschart[".closePopupAfterAdd"] = 1;
$tdataschart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataschart[".list"] = true;
}



$tdataschart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataschart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataschart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataschart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataschart[".printFriendly"] = true;
}



$tdataschart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataschart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataschart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataschart[".isUseAjaxSuggest"] = true;



			

$tdataschart[".ajaxCodeSnippetAdded"] = false;

$tdataschart[".buttonsAdded"] = false;

$tdataschart[".addPageEvents"] = false;

// use timepicker for search panel
$tdataschart[".isUseTimeForSearch"] = false;


$tdataschart[".badgeColor"] = "3CB371";


$tdataschart[".allSearchFields"] = array();
$tdataschart[".filterFields"] = array();
$tdataschart[".requiredSearchFields"] = array();

$tdataschart[".googleLikeFields"] = array();
$tdataschart[".googleLikeFields"][] = "pqrsfId";
$tdataschart[".googleLikeFields"][] = "nuv";
$tdataschart[".googleLikeFields"][] = "entryDate";
$tdataschart[".googleLikeFields"][] = "expirationDate";
$tdataschart[".googleLikeFields"][] = "type";
$tdataschart[".googleLikeFields"][] = "subject";
$tdataschart[".googleLikeFields"][] = "name";
$tdataschart[".googleLikeFields"][] = "isDisabled";
$tdataschart[".googleLikeFields"][] = "replyDate";
$tdataschart[".googleLikeFields"][] = "requestingIds";
$tdataschart[".googleLikeFields"][] = "documentId";
$tdataschart[".googleLikeFields"][] = "respondeDocumentId";
$tdataschart[".googleLikeFields"][] = "trackingIds";
$tdataschart[".googleLikeFields"][] = "responseId";



$tdataschart[".tableType"] = "chart";

$tdataschart[".printerPageOrientation"] = 0;
$tdataschart[".nPrinterPageScale"] = 100;

$tdataschart[".nPrinterSplitRecords"] = 40;

$tdataschart[".geocodingEnabled"] = false;



// chart settings
$tdataschart[".chartType"] = "Line";
// end of chart settings








$tstrOrderBy = "";
$tdataschart[".strOrderBy"] = $tstrOrderBy;

$tdataschart[".orderindexes"] = array();


$tdataschart[".sqlHead"] = "SELECT pqrsfId,  	nuv,  	entryDate,  	expirationDate,  	`type`,  	subject,  	name,  	isDisabled,  	replyDate,  	requestingIds,  	documentId,  	respondeDocumentId,  	trackingIds,  	responseId";
$tdataschart[".sqlFrom"] = "FROM BaseProcedure";
$tdataschart[".sqlWhereExpr"] = "";
$tdataschart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataschart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataschart[".arrGroupsPerPage"] = $arrGPP;

$tdataschart[".highlightSearchResults"] = true;

$tableKeysschart = array();
$tableKeysschart[] = "pqrsfId";
$tdataschart[".Keys"] = $tableKeysschart;


$tdataschart[".hideMobileList"] = array();




//	pqrsfId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "pqrsfId";
	$fdata["GoodName"] = "pqrsfId";
	$fdata["ownerTable"] = "baseprocedure";
	$fdata["Label"] = GetFieldLabel("SChart","pqrsfId");
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


	$tdataschart["pqrsfId"] = $fdata;
		$tdataschart[".searchableFields"][] = "pqrsfId";
//	nuv
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nuv";
	$fdata["GoodName"] = "nuv";
	$fdata["ownerTable"] = "baseprocedure";
	$fdata["Label"] = GetFieldLabel("SChart","nuv");
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


	$tdataschart["nuv"] = $fdata;
		$tdataschart[".searchableFields"][] = "nuv";
//	entryDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "entryDate";
	$fdata["GoodName"] = "entryDate";
	$fdata["ownerTable"] = "baseprocedure";
	$fdata["Label"] = GetFieldLabel("SChart","entryDate");
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


	$tdataschart["entryDate"] = $fdata;
		$tdataschart[".searchableFields"][] = "entryDate";
//	expirationDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "expirationDate";
	$fdata["GoodName"] = "expirationDate";
	$fdata["ownerTable"] = "baseprocedure";
	$fdata["Label"] = GetFieldLabel("SChart","expirationDate");
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


	$tdataschart["expirationDate"] = $fdata;
		$tdataschart[".searchableFields"][] = "expirationDate";
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "baseprocedure";
	$fdata["Label"] = GetFieldLabel("SChart","type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "type";

		$fdata["sourceSingle"] = "type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`type`";

	
	
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

				$edata["LookupWhere"] = "type = 'Sugerencia'";


	
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


	$tdataschart["type"] = $fdata;
		$tdataschart[".searchableFields"][] = "type";
//	subject
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "subject";
	$fdata["GoodName"] = "subject";
	$fdata["ownerTable"] = "baseprocedure";
	$fdata["Label"] = GetFieldLabel("SChart","subject");
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


	$tdataschart["subject"] = $fdata;
		$tdataschart[".searchableFields"][] = "subject";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "baseprocedure";
	$fdata["Label"] = GetFieldLabel("SChart","name");
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


	$tdataschart["name"] = $fdata;
		$tdataschart[".searchableFields"][] = "name";
//	isDisabled
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "isDisabled";
	$fdata["GoodName"] = "isDisabled";
	$fdata["ownerTable"] = "baseprocedure";
	$fdata["Label"] = GetFieldLabel("SChart","isDisabled");
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


	$tdataschart["isDisabled"] = $fdata;
		$tdataschart[".searchableFields"][] = "isDisabled";
//	replyDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "replyDate";
	$fdata["GoodName"] = "replyDate";
	$fdata["ownerTable"] = "baseprocedure";
	$fdata["Label"] = GetFieldLabel("SChart","replyDate");
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


	$tdataschart["replyDate"] = $fdata;
		$tdataschart[".searchableFields"][] = "replyDate";
//	requestingIds
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "requestingIds";
	$fdata["GoodName"] = "requestingIds";
	$fdata["ownerTable"] = "baseprocedure";
	$fdata["Label"] = GetFieldLabel("SChart","requestingIds");
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


	$tdataschart["requestingIds"] = $fdata;
		$tdataschart[".searchableFields"][] = "requestingIds";
//	documentId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "documentId";
	$fdata["GoodName"] = "documentId";
	$fdata["ownerTable"] = "baseprocedure";
	$fdata["Label"] = GetFieldLabel("SChart","documentId");
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


	$tdataschart["documentId"] = $fdata;
		$tdataschart[".searchableFields"][] = "documentId";
//	respondeDocumentId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "respondeDocumentId";
	$fdata["GoodName"] = "respondeDocumentId";
	$fdata["ownerTable"] = "baseprocedure";
	$fdata["Label"] = GetFieldLabel("SChart","respondeDocumentId");
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


	$tdataschart["respondeDocumentId"] = $fdata;
		$tdataschart[".searchableFields"][] = "respondeDocumentId";
//	trackingIds
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "trackingIds";
	$fdata["GoodName"] = "trackingIds";
	$fdata["ownerTable"] = "baseprocedure";
	$fdata["Label"] = GetFieldLabel("SChart","trackingIds");
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


	$tdataschart["trackingIds"] = $fdata;
		$tdataschart[".searchableFields"][] = "trackingIds";
//	responseId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "responseId";
	$fdata["GoodName"] = "responseId";
	$fdata["ownerTable"] = "baseprocedure";
	$fdata["Label"] = GetFieldLabel("SChart","responseId");
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


	$tdataschart["responseId"] = $fdata;
		$tdataschart[".searchableFields"][] = "responseId";

$tdataschart[".chartLabelField"] = "type";
$tdataschart[".chartSeries"] = array();
$tdataschart[".chartSeries"][] = array(
	"field" => "pqrsfId",
	"total" => ""
);
	$tdataschart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">SChart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">line</attr>
		</attr>

		<attr value="parameters">';
	$tdataschart[".chartXml"] .= '<attr value="0">
			<attr value="name">pqrsfId</attr>';
	$tdataschart[".chartXml"] .= '</attr>';
	$tdataschart[".chartXml"] .= '<attr value="1">
		<attr value="name">type</attr>
	</attr>';
	$tdataschart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdataschart[".chartXml"] .= '<attr value="head">'.xmlencode("Sugerencia").'</attr>
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
$tdataschart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataschart[".chartXml"] .= '<attr value="0">
		<attr value="name">pqrsfId</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("SChart","pqrsfId")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataschart[".chartXml"] .= '<attr value="1">
		<attr value="name">nuv</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("SChart","nuv")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataschart[".chartXml"] .= '<attr value="2">
		<attr value="name">entryDate</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("SChart","entryDate")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataschart[".chartXml"] .= '<attr value="3">
		<attr value="name">expirationDate</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("SChart","expirationDate")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataschart[".chartXml"] .= '<attr value="4">
		<attr value="name">type</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("SChart","type")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataschart[".chartXml"] .= '<attr value="5">
		<attr value="name">subject</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("SChart","subject")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataschart[".chartXml"] .= '<attr value="6">
		<attr value="name">name</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("SChart","name")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataschart[".chartXml"] .= '<attr value="7">
		<attr value="name">isDisabled</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("SChart","isDisabled")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataschart[".chartXml"] .= '<attr value="8">
		<attr value="name">replyDate</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("SChart","replyDate")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataschart[".chartXml"] .= '<attr value="9">
		<attr value="name">requestingIds</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("SChart","requestingIds")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataschart[".chartXml"] .= '<attr value="10">
		<attr value="name">documentId</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("SChart","documentId")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataschart[".chartXml"] .= '<attr value="11">
		<attr value="name">respondeDocumentId</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("SChart","respondeDocumentId")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataschart[".chartXml"] .= '<attr value="12">
		<attr value="name">trackingIds</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("SChart","trackingIds")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataschart[".chartXml"] .= '<attr value="13">
		<attr value="name">responseId</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("SChart","responseId")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataschart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">SChart</attr>
<attr value="short_table_name">schart</attr>
</attr>

</chart>';

$tables_data["SChart"]=&$tdataschart;
$field_labels["SChart"] = &$fieldLabelsschart;
$fieldToolTips["SChart"] = &$fieldToolTipsschart;
$placeHolders["SChart"] = &$placeHoldersschart;
$page_titles["SChart"] = &$pageTitlesschart;


changeTextControlsToDate( "SChart" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["SChart"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["SChart"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_schart()
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
	"m_srcTableName" => "SChart"
));

$proto6["m_sql"] = "pqrsfId";
$proto6["m_srcTableName"] = "SChart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nuv",
	"m_strTable" => "baseprocedure",
	"m_srcTableName" => "SChart"
));

$proto8["m_sql"] = "nuv";
$proto8["m_srcTableName"] = "SChart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "entryDate",
	"m_strTable" => "baseprocedure",
	"m_srcTableName" => "SChart"
));

$proto10["m_sql"] = "entryDate";
$proto10["m_srcTableName"] = "SChart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "expirationDate",
	"m_strTable" => "baseprocedure",
	"m_srcTableName" => "SChart"
));

$proto12["m_sql"] = "expirationDate";
$proto12["m_srcTableName"] = "SChart";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "baseprocedure",
	"m_srcTableName" => "SChart"
));

$proto14["m_sql"] = "`type`";
$proto14["m_srcTableName"] = "SChart";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "subject",
	"m_strTable" => "baseprocedure",
	"m_srcTableName" => "SChart"
));

$proto16["m_sql"] = "subject";
$proto16["m_srcTableName"] = "SChart";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "baseprocedure",
	"m_srcTableName" => "SChart"
));

$proto18["m_sql"] = "name";
$proto18["m_srcTableName"] = "SChart";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "isDisabled",
	"m_strTable" => "baseprocedure",
	"m_srcTableName" => "SChart"
));

$proto20["m_sql"] = "isDisabled";
$proto20["m_srcTableName"] = "SChart";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "replyDate",
	"m_strTable" => "baseprocedure",
	"m_srcTableName" => "SChart"
));

$proto22["m_sql"] = "replyDate";
$proto22["m_srcTableName"] = "SChart";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "requestingIds",
	"m_strTable" => "baseprocedure",
	"m_srcTableName" => "SChart"
));

$proto24["m_sql"] = "requestingIds";
$proto24["m_srcTableName"] = "SChart";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "documentId",
	"m_strTable" => "baseprocedure",
	"m_srcTableName" => "SChart"
));

$proto26["m_sql"] = "documentId";
$proto26["m_srcTableName"] = "SChart";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "respondeDocumentId",
	"m_strTable" => "baseprocedure",
	"m_srcTableName" => "SChart"
));

$proto28["m_sql"] = "respondeDocumentId";
$proto28["m_srcTableName"] = "SChart";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "trackingIds",
	"m_strTable" => "baseprocedure",
	"m_srcTableName" => "SChart"
));

$proto30["m_sql"] = "trackingIds";
$proto30["m_srcTableName"] = "SChart";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "responseId",
	"m_strTable" => "baseprocedure",
	"m_srcTableName" => "SChart"
));

$proto32["m_sql"] = "responseId";
$proto32["m_srcTableName"] = "SChart";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "baseprocedure";
$proto35["m_srcTableName"] = "SChart";
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
$proto34["m_srcTableName"] = "SChart";
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
$proto0["m_srcTableName"]="SChart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_schart = createSqlQuery_schart();


	
		;

														

$tdataschart[".sqlquery"] = $queryData_schart;



$tdataschart[".hasEvents"] = false;

?>
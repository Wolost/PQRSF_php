<?php
$tdatarequestor = array();
$tdatarequestor[".searchableFields"] = array();
$tdatarequestor[".ShortName"] = "requestor";
$tdatarequestor[".OwnerID"] = "";
$tdatarequestor[".OriginalTable"] = "requestor";


$tdatarequestor[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatarequestor[".originalPagesByType"] = $tdatarequestor[".pagesByType"];
$tdatarequestor[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatarequestor[".originalPages"] = $tdatarequestor[".pages"];
$tdatarequestor[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatarequestor[".originalDefaultPages"] = $tdatarequestor[".defaultPages"];

//	field labels
$fieldLabelsrequestor = array();
$fieldToolTipsrequestor = array();
$pageTitlesrequestor = array();
$placeHoldersrequestor = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsrequestor["Spanish"] = array();
	$fieldToolTipsrequestor["Spanish"] = array();
	$placeHoldersrequestor["Spanish"] = array();
	$pageTitlesrequestor["Spanish"] = array();
	$fieldLabelsrequestor["Spanish"]["userId"] = "User Id";
	$fieldToolTipsrequestor["Spanish"]["userId"] = "";
	$placeHoldersrequestor["Spanish"]["userId"] = "";
	$fieldLabelsrequestor["Spanish"]["name"] = "Name";
	$fieldToolTipsrequestor["Spanish"]["name"] = "";
	$placeHoldersrequestor["Spanish"]["name"] = "";
	$fieldLabelsrequestor["Spanish"]["typeRequestor"] = "Type Requestor";
	$fieldToolTipsrequestor["Spanish"]["typeRequestor"] = "";
	$placeHoldersrequestor["Spanish"]["typeRequestor"] = "";
	$fieldLabelsrequestor["Spanish"]["address"] = "Address";
	$fieldToolTipsrequestor["Spanish"]["address"] = "";
	$placeHoldersrequestor["Spanish"]["address"] = "";
	$fieldLabelsrequestor["Spanish"]["phone"] = "Phone";
	$fieldToolTipsrequestor["Spanish"]["phone"] = "";
	$placeHoldersrequestor["Spanish"]["phone"] = "";
	$fieldLabelsrequestor["Spanish"]["email"] = "Email";
	$fieldToolTipsrequestor["Spanish"]["email"] = "";
	$placeHoldersrequestor["Spanish"]["email"] = "";
	if (count($fieldToolTipsrequestor["Spanish"]))
		$tdatarequestor[".isUseToolTips"] = true;
}


	$tdatarequestor[".NCSearch"] = true;



$tdatarequestor[".shortTableName"] = "requestor";
$tdatarequestor[".nSecOptions"] = 0;

$tdatarequestor[".mainTableOwnerID"] = "";
$tdatarequestor[".entityType"] = 0;
$tdatarequestor[".connId"] = "pqrsf_at_localhost";


$tdatarequestor[".strOriginalTableName"] = "requestor";

	



$tdatarequestor[".showAddInPopup"] = false;

$tdatarequestor[".showEditInPopup"] = false;

$tdatarequestor[".showViewInPopup"] = false;

$tdatarequestor[".listAjax"] = false;
//	temporary
//$tdatarequestor[".listAjax"] = false;

	$tdatarequestor[".audit"] = false;

	$tdatarequestor[".locking"] = false;


$pages = $tdatarequestor[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatarequestor[".edit"] = true;
	$tdatarequestor[".afterEditAction"] = 1;
	$tdatarequestor[".closePopupAfterEdit"] = 1;
	$tdatarequestor[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatarequestor[".add"] = true;
$tdatarequestor[".afterAddAction"] = 1;
$tdatarequestor[".closePopupAfterAdd"] = 1;
$tdatarequestor[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatarequestor[".list"] = true;
}



$tdatarequestor[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatarequestor[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatarequestor[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatarequestor[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatarequestor[".printFriendly"] = true;
}



$tdatarequestor[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatarequestor[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatarequestor[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatarequestor[".isUseAjaxSuggest"] = true;



			

$tdatarequestor[".ajaxCodeSnippetAdded"] = false;

$tdatarequestor[".buttonsAdded"] = false;

$tdatarequestor[".addPageEvents"] = false;

// use timepicker for search panel
$tdatarequestor[".isUseTimeForSearch"] = false;


$tdatarequestor[".badgeColor"] = "E8926F";


$tdatarequestor[".allSearchFields"] = array();
$tdatarequestor[".filterFields"] = array();
$tdatarequestor[".requiredSearchFields"] = array();

$tdatarequestor[".googleLikeFields"] = array();
$tdatarequestor[".googleLikeFields"][] = "userId";
$tdatarequestor[".googleLikeFields"][] = "name";
$tdatarequestor[".googleLikeFields"][] = "typeRequestor";
$tdatarequestor[".googleLikeFields"][] = "address";
$tdatarequestor[".googleLikeFields"][] = "phone";
$tdatarequestor[".googleLikeFields"][] = "email";



$tdatarequestor[".tableType"] = "list";

$tdatarequestor[".printerPageOrientation"] = 0;
$tdatarequestor[".nPrinterPageScale"] = 100;

$tdatarequestor[".nPrinterSplitRecords"] = 40;

$tdatarequestor[".geocodingEnabled"] = false;










$tdatarequestor[".pageSize"] = 20;

$tdatarequestor[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatarequestor[".strOrderBy"] = $tstrOrderBy;

$tdatarequestor[".orderindexes"] = array();


$tdatarequestor[".sqlHead"] = "SELECT userId,  	name,  	typeRequestor,  	address,  	phone,  	email";
$tdatarequestor[".sqlFrom"] = "FROM Requestor";
$tdatarequestor[".sqlWhereExpr"] = "";
$tdatarequestor[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatarequestor[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarequestor[".arrGroupsPerPage"] = $arrGPP;

$tdatarequestor[".highlightSearchResults"] = true;

$tableKeysrequestor = array();
$tableKeysrequestor[] = "userId";
$tdatarequestor[".Keys"] = $tableKeysrequestor;


$tdatarequestor[".hideMobileList"] = array();




//	userId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "userId";
	$fdata["GoodName"] = "userId";
	$fdata["ownerTable"] = "requestor";
	$fdata["Label"] = GetFieldLabel("requestor","userId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "userId";

		$fdata["sourceSingle"] = "userId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "userId";

	
	
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


	$tdatarequestor["userId"] = $fdata;
		$tdatarequestor[".searchableFields"][] = "userId";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "requestor";
	$fdata["Label"] = GetFieldLabel("requestor","name");
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


	$tdatarequestor["name"] = $fdata;
		$tdatarequestor[".searchableFields"][] = "name";
//	typeRequestor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "typeRequestor";
	$fdata["GoodName"] = "typeRequestor";
	$fdata["ownerTable"] = "requestor";
	$fdata["Label"] = GetFieldLabel("requestor","typeRequestor");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "typeRequestor";

		$fdata["sourceSingle"] = "typeRequestor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "typeRequestor";

	
	
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


	$tdatarequestor["typeRequestor"] = $fdata;
		$tdatarequestor[".searchableFields"][] = "typeRequestor";
//	address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "address";
	$fdata["GoodName"] = "address";
	$fdata["ownerTable"] = "requestor";
	$fdata["Label"] = GetFieldLabel("requestor","address");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "address";

		$fdata["sourceSingle"] = "address";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address";

	
	
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


	$tdatarequestor["address"] = $fdata;
		$tdatarequestor[".searchableFields"][] = "address";
//	phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "phone";
	$fdata["GoodName"] = "phone";
	$fdata["ownerTable"] = "requestor";
	$fdata["Label"] = GetFieldLabel("requestor","phone");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "phone";

		$fdata["sourceSingle"] = "phone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "phone";

	
	
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


	$tdatarequestor["phone"] = $fdata;
		$tdatarequestor[".searchableFields"][] = "phone";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "requestor";
	$fdata["Label"] = GetFieldLabel("requestor","email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email";

		$fdata["sourceSingle"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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


	$tdatarequestor["email"] = $fdata;
		$tdatarequestor[".searchableFields"][] = "email";


$tables_data["requestor"]=&$tdatarequestor;
$field_labels["requestor"] = &$fieldLabelsrequestor;
$fieldToolTips["requestor"] = &$fieldToolTipsrequestor;
$placeHolders["requestor"] = &$placeHoldersrequestor;
$page_titles["requestor"] = &$pageTitlesrequestor;


changeTextControlsToDate( "requestor" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["requestor"] = array();
//	baseprocedure
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="baseprocedure";
		$detailsParam["dOriginalTable"] = "baseprocedure";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "baseprocedure";
	$detailsParam["dCaptionTable"] = GetTableCaption("baseprocedure");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["requestor"][$dIndex] = $detailsParam;

	
		$detailsTablesData["requestor"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["requestor"][$dIndex]["masterKeys"][]="name";

				$detailsTablesData["requestor"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["requestor"][$dIndex]["detailKeys"][]="name";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["requestor"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_requestor()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "userId,  	name,  	typeRequestor,  	address,  	phone,  	email";
$proto0["m_strFrom"] = "FROM Requestor";
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
	"m_strName" => "userId",
	"m_strTable" => "requestor",
	"m_srcTableName" => "requestor"
));

$proto6["m_sql"] = "userId";
$proto6["m_srcTableName"] = "requestor";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "requestor",
	"m_srcTableName" => "requestor"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "requestor";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "typeRequestor",
	"m_strTable" => "requestor",
	"m_srcTableName" => "requestor"
));

$proto10["m_sql"] = "typeRequestor";
$proto10["m_srcTableName"] = "requestor";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "address",
	"m_strTable" => "requestor",
	"m_srcTableName" => "requestor"
));

$proto12["m_sql"] = "address";
$proto12["m_srcTableName"] = "requestor";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "phone",
	"m_strTable" => "requestor",
	"m_srcTableName" => "requestor"
));

$proto14["m_sql"] = "phone";
$proto14["m_srcTableName"] = "requestor";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "requestor",
	"m_srcTableName" => "requestor"
));

$proto16["m_sql"] = "email";
$proto16["m_srcTableName"] = "requestor";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "requestor";
$proto19["m_srcTableName"] = "requestor";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "userId";
$proto19["m_columns"][] = "name";
$proto19["m_columns"][] = "typeRequestor";
$proto19["m_columns"][] = "address";
$proto19["m_columns"][] = "phone";
$proto19["m_columns"][] = "email";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "Requestor";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "requestor";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="requestor";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_requestor = createSqlQuery_requestor();


	
		;

						

$tdatarequestor[".sqlquery"] = $queryData_requestor;



$tdatarequestor[".hasEvents"] = false;

?>
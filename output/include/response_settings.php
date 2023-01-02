<?php
$tdataresponse = array();
$tdataresponse[".searchableFields"] = array();
$tdataresponse[".ShortName"] = "response";
$tdataresponse[".OwnerID"] = "";
$tdataresponse[".OriginalTable"] = "response";


$tdataresponse[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataresponse[".originalPagesByType"] = $tdataresponse[".pagesByType"];
$tdataresponse[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataresponse[".originalPages"] = $tdataresponse[".pages"];
$tdataresponse[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataresponse[".originalDefaultPages"] = $tdataresponse[".defaultPages"];

//	field labels
$fieldLabelsresponse = array();
$fieldToolTipsresponse = array();
$pageTitlesresponse = array();
$placeHoldersresponse = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsresponse["Spanish"] = array();
	$fieldToolTipsresponse["Spanish"] = array();
	$placeHoldersresponse["Spanish"] = array();
	$pageTitlesresponse["Spanish"] = array();
	$fieldLabelsresponse["Spanish"]["responseId"] = "Response Id";
	$fieldToolTipsresponse["Spanish"]["responseId"] = "";
	$placeHoldersresponse["Spanish"]["responseId"] = "";
	$fieldLabelsresponse["Spanish"]["replyDate"] = "Reply Date";
	$fieldToolTipsresponse["Spanish"]["replyDate"] = "";
	$placeHoldersresponse["Spanish"]["replyDate"] = "";
	$fieldLabelsresponse["Spanish"]["responseTimeHours"] = "Response Time Hours";
	$fieldToolTipsresponse["Spanish"]["responseTimeHours"] = "";
	$placeHoldersresponse["Spanish"]["responseTimeHours"] = "";
	$fieldLabelsresponse["Spanish"]["responseDocumentId"] = "Response Document Id";
	$fieldToolTipsresponse["Spanish"]["responseDocumentId"] = "";
	$placeHoldersresponse["Spanish"]["responseDocumentId"] = "";
	if (count($fieldToolTipsresponse["Spanish"]))
		$tdataresponse[".isUseToolTips"] = true;
}


	$tdataresponse[".NCSearch"] = true;



$tdataresponse[".shortTableName"] = "response";
$tdataresponse[".nSecOptions"] = 0;

$tdataresponse[".mainTableOwnerID"] = "";
$tdataresponse[".entityType"] = 0;
$tdataresponse[".connId"] = "pqrsf_at_localhost";


$tdataresponse[".strOriginalTableName"] = "response";

	



$tdataresponse[".showAddInPopup"] = false;

$tdataresponse[".showEditInPopup"] = false;

$tdataresponse[".showViewInPopup"] = false;

$tdataresponse[".listAjax"] = false;
//	temporary
//$tdataresponse[".listAjax"] = false;

	$tdataresponse[".audit"] = false;

	$tdataresponse[".locking"] = false;


$pages = $tdataresponse[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataresponse[".edit"] = true;
	$tdataresponse[".afterEditAction"] = 1;
	$tdataresponse[".closePopupAfterEdit"] = 1;
	$tdataresponse[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataresponse[".add"] = true;
$tdataresponse[".afterAddAction"] = 1;
$tdataresponse[".closePopupAfterAdd"] = 1;
$tdataresponse[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataresponse[".list"] = true;
}



$tdataresponse[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataresponse[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataresponse[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataresponse[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataresponse[".printFriendly"] = true;
}



$tdataresponse[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataresponse[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataresponse[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataresponse[".isUseAjaxSuggest"] = true;



			

$tdataresponse[".ajaxCodeSnippetAdded"] = false;

$tdataresponse[".buttonsAdded"] = false;

$tdataresponse[".addPageEvents"] = false;

// use timepicker for search panel
$tdataresponse[".isUseTimeForSearch"] = false;


$tdataresponse[".badgeColor"] = "DB7093";


$tdataresponse[".allSearchFields"] = array();
$tdataresponse[".filterFields"] = array();
$tdataresponse[".requiredSearchFields"] = array();

$tdataresponse[".googleLikeFields"] = array();
$tdataresponse[".googleLikeFields"][] = "responseId";
$tdataresponse[".googleLikeFields"][] = "replyDate";
$tdataresponse[".googleLikeFields"][] = "responseTimeHours";
$tdataresponse[".googleLikeFields"][] = "responseDocumentId";



$tdataresponse[".tableType"] = "list";

$tdataresponse[".printerPageOrientation"] = 0;
$tdataresponse[".nPrinterPageScale"] = 100;

$tdataresponse[".nPrinterSplitRecords"] = 40;

$tdataresponse[".geocodingEnabled"] = false;










$tdataresponse[".pageSize"] = 20;

$tdataresponse[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataresponse[".strOrderBy"] = $tstrOrderBy;

$tdataresponse[".orderindexes"] = array();


$tdataresponse[".sqlHead"] = "SELECT responseId,  	replyDate,  	responseTimeHours,  	responseDocumentId";
$tdataresponse[".sqlFrom"] = "FROM Response";
$tdataresponse[".sqlWhereExpr"] = "";
$tdataresponse[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataresponse[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataresponse[".arrGroupsPerPage"] = $arrGPP;

$tdataresponse[".highlightSearchResults"] = true;

$tableKeysresponse = array();
$tableKeysresponse[] = "responseId";
$tdataresponse[".Keys"] = $tableKeysresponse;


$tdataresponse[".hideMobileList"] = array();




//	responseId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "responseId";
	$fdata["GoodName"] = "responseId";
	$fdata["ownerTable"] = "response";
	$fdata["Label"] = GetFieldLabel("response","responseId");
	$fdata["FieldType"] = 3;


	
	
			

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


	$tdataresponse["responseId"] = $fdata;
		$tdataresponse[".searchableFields"][] = "responseId";
//	replyDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "replyDate";
	$fdata["GoodName"] = "replyDate";
	$fdata["ownerTable"] = "response";
	$fdata["Label"] = GetFieldLabel("response","replyDate");
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


	$tdataresponse["replyDate"] = $fdata;
		$tdataresponse[".searchableFields"][] = "replyDate";
//	responseTimeHours
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "responseTimeHours";
	$fdata["GoodName"] = "responseTimeHours";
	$fdata["ownerTable"] = "response";
	$fdata["Label"] = GetFieldLabel("response","responseTimeHours");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "responseTimeHours";

		$fdata["sourceSingle"] = "responseTimeHours";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "responseTimeHours";

	
	
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


	$tdataresponse["responseTimeHours"] = $fdata;
		$tdataresponse[".searchableFields"][] = "responseTimeHours";
//	responseDocumentId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "responseDocumentId";
	$fdata["GoodName"] = "responseDocumentId";
	$fdata["ownerTable"] = "response";
	$fdata["Label"] = GetFieldLabel("response","responseDocumentId");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "responseDocumentId";

		$fdata["sourceSingle"] = "responseDocumentId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "responseDocumentId";

	
	
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


	$tdataresponse["responseDocumentId"] = $fdata;
		$tdataresponse[".searchableFields"][] = "responseDocumentId";


$tables_data["response"]=&$tdataresponse;
$field_labels["response"] = &$fieldLabelsresponse;
$fieldToolTips["response"] = &$fieldToolTipsresponse;
$placeHolders["response"] = &$placeHoldersresponse;
$page_titles["response"] = &$pageTitlesresponse;


changeTextControlsToDate( "response" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["response"] = array();
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


		
	$detailsTablesData["response"][$dIndex] = $detailsParam;

	
		$detailsTablesData["response"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["response"][$dIndex]["masterKeys"][]="responseId";

				$detailsTablesData["response"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["response"][$dIndex]["detailKeys"][]="responseId";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["response"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_response()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "responseId,  	replyDate,  	responseTimeHours,  	responseDocumentId";
$proto0["m_strFrom"] = "FROM Response";
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
	"m_strName" => "responseId",
	"m_strTable" => "response",
	"m_srcTableName" => "response"
));

$proto6["m_sql"] = "responseId";
$proto6["m_srcTableName"] = "response";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "replyDate",
	"m_strTable" => "response",
	"m_srcTableName" => "response"
));

$proto8["m_sql"] = "replyDate";
$proto8["m_srcTableName"] = "response";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "responseTimeHours",
	"m_strTable" => "response",
	"m_srcTableName" => "response"
));

$proto10["m_sql"] = "responseTimeHours";
$proto10["m_srcTableName"] = "response";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "responseDocumentId",
	"m_strTable" => "response",
	"m_srcTableName" => "response"
));

$proto12["m_sql"] = "responseDocumentId";
$proto12["m_srcTableName"] = "response";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "response";
$proto15["m_srcTableName"] = "response";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "responseId";
$proto15["m_columns"][] = "replyDate";
$proto15["m_columns"][] = "responseTimeHours";
$proto15["m_columns"][] = "responseDocumentId";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "Response";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "response";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="response";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_response = createSqlQuery_response();


	
		;

				

$tdataresponse[".sqlquery"] = $queryData_response;



$tdataresponse[".hasEvents"] = false;

?>
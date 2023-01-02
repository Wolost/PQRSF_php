<?php
$tdatatracking = array();
$tdatatracking[".searchableFields"] = array();
$tdatatracking[".ShortName"] = "tracking";
$tdatatracking[".OwnerID"] = "";
$tdatatracking[".OriginalTable"] = "tracking";


$tdatatracking[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatracking[".originalPagesByType"] = $tdatatracking[".pagesByType"];
$tdatatracking[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatracking[".originalPages"] = $tdatatracking[".pages"];
$tdatatracking[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatracking[".originalDefaultPages"] = $tdatatracking[".defaultPages"];

//	field labels
$fieldLabelstracking = array();
$fieldToolTipstracking = array();
$pageTitlestracking = array();
$placeHolderstracking = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstracking["Spanish"] = array();
	$fieldToolTipstracking["Spanish"] = array();
	$placeHolderstracking["Spanish"] = array();
	$pageTitlestracking["Spanish"] = array();
	$fieldLabelstracking["Spanish"]["trackingId"] = "Tracking Id";
	$fieldToolTipstracking["Spanish"]["trackingId"] = "";
	$placeHolderstracking["Spanish"]["trackingId"] = "";
	$fieldLabelstracking["Spanish"]["dependency"] = "Dependency";
	$fieldToolTipstracking["Spanish"]["dependency"] = "";
	$placeHolderstracking["Spanish"]["dependency"] = "";
	$fieldLabelstracking["Spanish"]["date"] = "Date";
	$fieldToolTipstracking["Spanish"]["date"] = "";
	$placeHolderstracking["Spanish"]["date"] = "";
	$fieldLabelstracking["Spanish"]["operator"] = "Operator";
	$fieldToolTipstracking["Spanish"]["operator"] = "";
	$placeHolderstracking["Spanish"]["operator"] = "";
	if (count($fieldToolTipstracking["Spanish"]))
		$tdatatracking[".isUseToolTips"] = true;
}


	$tdatatracking[".NCSearch"] = true;



$tdatatracking[".shortTableName"] = "tracking";
$tdatatracking[".nSecOptions"] = 0;

$tdatatracking[".mainTableOwnerID"] = "";
$tdatatracking[".entityType"] = 0;
$tdatatracking[".connId"] = "pqrsf_at_localhost";


$tdatatracking[".strOriginalTableName"] = "tracking";

	



$tdatatracking[".showAddInPopup"] = false;

$tdatatracking[".showEditInPopup"] = false;

$tdatatracking[".showViewInPopup"] = false;

$tdatatracking[".listAjax"] = false;
//	temporary
//$tdatatracking[".listAjax"] = false;

	$tdatatracking[".audit"] = false;

	$tdatatracking[".locking"] = false;


$pages = $tdatatracking[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatracking[".edit"] = true;
	$tdatatracking[".afterEditAction"] = 1;
	$tdatatracking[".closePopupAfterEdit"] = 1;
	$tdatatracking[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatracking[".add"] = true;
$tdatatracking[".afterAddAction"] = 1;
$tdatatracking[".closePopupAfterAdd"] = 1;
$tdatatracking[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatracking[".list"] = true;
}



$tdatatracking[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatracking[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatracking[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatracking[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatracking[".printFriendly"] = true;
}



$tdatatracking[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatracking[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatracking[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatracking[".isUseAjaxSuggest"] = true;



			

$tdatatracking[".ajaxCodeSnippetAdded"] = false;

$tdatatracking[".buttonsAdded"] = false;

$tdatatracking[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatracking[".isUseTimeForSearch"] = false;


$tdatatracking[".badgeColor"] = "CFAE83";


$tdatatracking[".allSearchFields"] = array();
$tdatatracking[".filterFields"] = array();
$tdatatracking[".requiredSearchFields"] = array();

$tdatatracking[".googleLikeFields"] = array();
$tdatatracking[".googleLikeFields"][] = "trackingId";
$tdatatracking[".googleLikeFields"][] = "dependency";
$tdatatracking[".googleLikeFields"][] = "date";
$tdatatracking[".googleLikeFields"][] = "operator";



$tdatatracking[".tableType"] = "list";

$tdatatracking[".printerPageOrientation"] = 0;
$tdatatracking[".nPrinterPageScale"] = 100;

$tdatatracking[".nPrinterSplitRecords"] = 40;

$tdatatracking[".geocodingEnabled"] = false;










$tdatatracking[".pageSize"] = 20;

$tdatatracking[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatracking[".strOrderBy"] = $tstrOrderBy;

$tdatatracking[".orderindexes"] = array();


$tdatatracking[".sqlHead"] = "SELECT trackingId,  	dependency,  	`date`,  	`operator`";
$tdatatracking[".sqlFrom"] = "FROM Tracking";
$tdatatracking[".sqlWhereExpr"] = "";
$tdatatracking[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatracking[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatracking[".arrGroupsPerPage"] = $arrGPP;

$tdatatracking[".highlightSearchResults"] = true;

$tableKeystracking = array();
$tableKeystracking[] = "trackingId";
$tdatatracking[".Keys"] = $tableKeystracking;


$tdatatracking[".hideMobileList"] = array();




//	trackingId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "trackingId";
	$fdata["GoodName"] = "trackingId";
	$fdata["ownerTable"] = "tracking";
	$fdata["Label"] = GetFieldLabel("tracking","trackingId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "trackingId";

		$fdata["sourceSingle"] = "trackingId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "trackingId";

	
	
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


	$tdatatracking["trackingId"] = $fdata;
		$tdatatracking[".searchableFields"][] = "trackingId";
//	dependency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "dependency";
	$fdata["GoodName"] = "dependency";
	$fdata["ownerTable"] = "tracking";
	$fdata["Label"] = GetFieldLabel("tracking","dependency");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "dependency";

		$fdata["sourceSingle"] = "dependency";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dependency";

	
	
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


	$tdatatracking["dependency"] = $fdata;
		$tdatatracking[".searchableFields"][] = "dependency";
//	date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "date";
	$fdata["GoodName"] = "date";
	$fdata["ownerTable"] = "tracking";
	$fdata["Label"] = GetFieldLabel("tracking","date");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "date";

		$fdata["sourceSingle"] = "date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`date`";

	
	
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


	$tdatatracking["date"] = $fdata;
		$tdatatracking[".searchableFields"][] = "date";
//	operator
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "operator";
	$fdata["GoodName"] = "operator";
	$fdata["ownerTable"] = "tracking";
	$fdata["Label"] = GetFieldLabel("tracking","operator");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "operator";

		$fdata["sourceSingle"] = "operator";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`operator`";

	
	
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


	$tdatatracking["operator"] = $fdata;
		$tdatatracking[".searchableFields"][] = "operator";


$tables_data["tracking"]=&$tdatatracking;
$field_labels["tracking"] = &$fieldLabelstracking;
$fieldToolTips["tracking"] = &$fieldToolTipstracking;
$placeHolders["tracking"] = &$placeHolderstracking;
$page_titles["tracking"] = &$pageTitlestracking;


changeTextControlsToDate( "tracking" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tracking"] = array();
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


		
	$detailsTablesData["tracking"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tracking"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tracking"][$dIndex]["masterKeys"][]="trackingId";

				$detailsTablesData["tracking"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tracking"][$dIndex]["detailKeys"][]="trackingIds";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tracking"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tracking()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "trackingId,  	dependency,  	`date`,  	`operator`";
$proto0["m_strFrom"] = "FROM Tracking";
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
	"m_strName" => "trackingId",
	"m_strTable" => "tracking",
	"m_srcTableName" => "tracking"
));

$proto6["m_sql"] = "trackingId";
$proto6["m_srcTableName"] = "tracking";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "dependency",
	"m_strTable" => "tracking",
	"m_srcTableName" => "tracking"
));

$proto8["m_sql"] = "dependency";
$proto8["m_srcTableName"] = "tracking";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "tracking",
	"m_srcTableName" => "tracking"
));

$proto10["m_sql"] = "`date`";
$proto10["m_srcTableName"] = "tracking";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "operator",
	"m_strTable" => "tracking",
	"m_srcTableName" => "tracking"
));

$proto12["m_sql"] = "`operator`";
$proto12["m_srcTableName"] = "tracking";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "tracking";
$proto15["m_srcTableName"] = "tracking";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "trackingId";
$proto15["m_columns"][] = "dependency";
$proto15["m_columns"][] = "date";
$proto15["m_columns"][] = "operator";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "Tracking";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "tracking";
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
$proto0["m_srcTableName"]="tracking";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tracking = createSqlQuery_tracking();


	
		;

				

$tdatatracking[".sqlquery"] = $queryData_tracking;



$tdatatracking[".hasEvents"] = false;

?>
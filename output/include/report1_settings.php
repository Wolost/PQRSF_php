<?php
$tdatareport1 = array();
$tdatareport1[".searchableFields"] = array();
$tdatareport1[".ShortName"] = "report1";
$tdatareport1[".OwnerID"] = "";
$tdatareport1[".OriginalTable"] = "report";


$tdatareport1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatareport1[".originalPagesByType"] = $tdatareport1[".pagesByType"];
$tdatareport1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatareport1[".originalPages"] = $tdatareport1[".pages"];
$tdatareport1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatareport1[".originalDefaultPages"] = $tdatareport1[".defaultPages"];

//	field labels
$fieldLabelsreport1 = array();
$fieldToolTipsreport1 = array();
$pageTitlesreport1 = array();
$placeHoldersreport1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsreport1["Spanish"] = array();
	$fieldToolTipsreport1["Spanish"] = array();
	$placeHoldersreport1["Spanish"] = array();
	$pageTitlesreport1["Spanish"] = array();
	$fieldLabelsreport1["Spanish"]["reportId"] = "Report Id";
	$fieldToolTipsreport1["Spanish"]["reportId"] = "";
	$placeHoldersreport1["Spanish"]["reportId"] = "";
	if (count($fieldToolTipsreport1["Spanish"]))
		$tdatareport1[".isUseToolTips"] = true;
}


	$tdatareport1[".NCSearch"] = true;



$tdatareport1[".shortTableName"] = "report1";
$tdatareport1[".nSecOptions"] = 0;

$tdatareport1[".mainTableOwnerID"] = "";
$tdatareport1[".entityType"] = 0;
$tdatareport1[".connId"] = "pqrsf_at_localhost";


$tdatareport1[".strOriginalTableName"] = "report";

	



$tdatareport1[".showAddInPopup"] = false;

$tdatareport1[".showEditInPopup"] = false;

$tdatareport1[".showViewInPopup"] = false;

$tdatareport1[".listAjax"] = false;
//	temporary
//$tdatareport1[".listAjax"] = false;

	$tdatareport1[".audit"] = false;

	$tdatareport1[".locking"] = false;


$pages = $tdatareport1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatareport1[".edit"] = true;
	$tdatareport1[".afterEditAction"] = 1;
	$tdatareport1[".closePopupAfterEdit"] = 1;
	$tdatareport1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatareport1[".add"] = true;
$tdatareport1[".afterAddAction"] = 1;
$tdatareport1[".closePopupAfterAdd"] = 1;
$tdatareport1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatareport1[".list"] = true;
}



$tdatareport1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatareport1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatareport1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatareport1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatareport1[".printFriendly"] = true;
}



$tdatareport1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatareport1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatareport1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatareport1[".isUseAjaxSuggest"] = true;



			

$tdatareport1[".ajaxCodeSnippetAdded"] = false;

$tdatareport1[".buttonsAdded"] = false;

$tdatareport1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareport1[".isUseTimeForSearch"] = false;


$tdatareport1[".badgeColor"] = "4682B4";


$tdatareport1[".allSearchFields"] = array();
$tdatareport1[".filterFields"] = array();
$tdatareport1[".requiredSearchFields"] = array();

$tdatareport1[".googleLikeFields"] = array();
$tdatareport1[".googleLikeFields"][] = "reportId";



$tdatareport1[".tableType"] = "list";

$tdatareport1[".printerPageOrientation"] = 0;
$tdatareport1[".nPrinterPageScale"] = 100;

$tdatareport1[".nPrinterSplitRecords"] = 40;

$tdatareport1[".geocodingEnabled"] = false;










$tdatareport1[".pageSize"] = 20;

$tdatareport1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatareport1[".strOrderBy"] = $tstrOrderBy;

$tdatareport1[".orderindexes"] = array();


$tdatareport1[".sqlHead"] = "SELECT reportId";
$tdatareport1[".sqlFrom"] = "FROM report";
$tdatareport1[".sqlWhereExpr"] = "";
$tdatareport1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareport1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareport1[".arrGroupsPerPage"] = $arrGPP;

$tdatareport1[".highlightSearchResults"] = true;

$tableKeysreport1 = array();
$tableKeysreport1[] = "reportId";
$tdatareport1[".Keys"] = $tableKeysreport1;


$tdatareport1[".hideMobileList"] = array();




//	reportId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "reportId";
	$fdata["GoodName"] = "reportId";
	$fdata["ownerTable"] = "report";
	$fdata["Label"] = GetFieldLabel("report","reportId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "reportId";

		$fdata["sourceSingle"] = "reportId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reportId";

	
	
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


	$tdatareport1["reportId"] = $fdata;
		$tdatareport1[".searchableFields"][] = "reportId";


$tables_data["report"]=&$tdatareport1;
$field_labels["report"] = &$fieldLabelsreport1;
$fieldToolTips["report"] = &$fieldToolTipsreport1;
$placeHolders["report"] = &$placeHoldersreport1;
$page_titles["report"] = &$pageTitlesreport1;


changeTextControlsToDate( "report" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["report"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["report"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_report1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "reportId";
$proto0["m_strFrom"] = "FROM report";
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
	"m_strName" => "reportId",
	"m_strTable" => "report",
	"m_srcTableName" => "report"
));

$proto6["m_sql"] = "reportId";
$proto6["m_srcTableName"] = "report";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "report";
$proto9["m_srcTableName"] = "report";
$proto9["m_columns"] = array();
$proto9["m_columns"][] = "reportId";
$obj = new SQLTable($proto9);

$proto8["m_table"] = $obj;
$proto8["m_sql"] = "report";
$proto8["m_alias"] = "";
$proto8["m_srcTableName"] = "report";
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
$proto0["m_srcTableName"]="report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_report1 = createSqlQuery_report1();


	
		;

	

$tdatareport1[".sqlquery"] = $queryData_report1;



$tdatareport1[".hasEvents"] = false;

?>
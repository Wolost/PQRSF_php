<?php
$tdatatracking_chart = array();
$tdatatracking_chart[".searchableFields"] = array();
$tdatatracking_chart[".ShortName"] = "tracking_chart";
$tdatatracking_chart[".OwnerID"] = "";
$tdatatracking_chart[".OriginalTable"] = "tracking";


$tdatatracking_chart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatatracking_chart[".originalPagesByType"] = $tdatatracking_chart[".pagesByType"];
$tdatatracking_chart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatatracking_chart[".originalPages"] = $tdatatracking_chart[".pages"];
$tdatatracking_chart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatatracking_chart[".originalDefaultPages"] = $tdatatracking_chart[".defaultPages"];

//	field labels
$fieldLabelstracking_chart = array();
$fieldToolTipstracking_chart = array();
$pageTitlestracking_chart = array();
$placeHolderstracking_chart = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstracking_chart["English"] = array();
	$fieldToolTipstracking_chart["English"] = array();
	$placeHolderstracking_chart["English"] = array();
	$pageTitlestracking_chart["English"] = array();
	$fieldLabelstracking_chart["English"]["trackingId"] = "Tracking Id";
	$fieldToolTipstracking_chart["English"]["trackingId"] = "";
	$placeHolderstracking_chart["English"]["trackingId"] = "";
	$fieldLabelstracking_chart["English"]["dependency"] = "Dependency";
	$fieldToolTipstracking_chart["English"]["dependency"] = "";
	$placeHolderstracking_chart["English"]["dependency"] = "";
	$fieldLabelstracking_chart["English"]["date"] = "Date";
	$fieldToolTipstracking_chart["English"]["date"] = "";
	$placeHolderstracking_chart["English"]["date"] = "";
	$fieldLabelstracking_chart["English"]["operator"] = "Operator";
	$fieldToolTipstracking_chart["English"]["operator"] = "";
	$placeHolderstracking_chart["English"]["operator"] = "";
	if (count($fieldToolTipstracking_chart["English"]))
		$tdatatracking_chart[".isUseToolTips"] = true;
}


	$tdatatracking_chart[".NCSearch"] = true;

	$tdatatracking_chart[".ChartRefreshTime"] = 0;


$tdatatracking_chart[".shortTableName"] = "tracking_chart";
$tdatatracking_chart[".nSecOptions"] = 0;

$tdatatracking_chart[".mainTableOwnerID"] = "";
$tdatatracking_chart[".entityType"] = 3;
$tdatatracking_chart[".connId"] = "pqrsf_at_localhost";


$tdatatracking_chart[".strOriginalTableName"] = "tracking";

	



$tdatatracking_chart[".showAddInPopup"] = false;

$tdatatracking_chart[".showEditInPopup"] = false;

$tdatatracking_chart[".showViewInPopup"] = false;

$tdatatracking_chart[".listAjax"] = false;
//	temporary
//$tdatatracking_chart[".listAjax"] = false;

	$tdatatracking_chart[".audit"] = false;

	$tdatatracking_chart[".locking"] = false;


$pages = $tdatatracking_chart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatracking_chart[".edit"] = true;
	$tdatatracking_chart[".afterEditAction"] = 1;
	$tdatatracking_chart[".closePopupAfterEdit"] = 1;
	$tdatatracking_chart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatracking_chart[".add"] = true;
$tdatatracking_chart[".afterAddAction"] = 1;
$tdatatracking_chart[".closePopupAfterAdd"] = 1;
$tdatatracking_chart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatracking_chart[".list"] = true;
}



$tdatatracking_chart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatracking_chart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatracking_chart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatracking_chart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatracking_chart[".printFriendly"] = true;
}



$tdatatracking_chart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatracking_chart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatracking_chart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatracking_chart[".isUseAjaxSuggest"] = true;



			

$tdatatracking_chart[".ajaxCodeSnippetAdded"] = false;

$tdatatracking_chart[".buttonsAdded"] = false;

$tdatatracking_chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatracking_chart[".isUseTimeForSearch"] = false;


$tdatatracking_chart[".badgeColor"] = "E8926F";


$tdatatracking_chart[".allSearchFields"] = array();
$tdatatracking_chart[".filterFields"] = array();
$tdatatracking_chart[".requiredSearchFields"] = array();

$tdatatracking_chart[".googleLikeFields"] = array();
$tdatatracking_chart[".googleLikeFields"][] = "trackingId";
$tdatatracking_chart[".googleLikeFields"][] = "dependency";
$tdatatracking_chart[".googleLikeFields"][] = "date";
$tdatatracking_chart[".googleLikeFields"][] = "operator";



$tdatatracking_chart[".tableType"] = "chart";

$tdatatracking_chart[".printerPageOrientation"] = 0;
$tdatatracking_chart[".nPrinterPageScale"] = 100;

$tdatatracking_chart[".nPrinterSplitRecords"] = 40;

$tdatatracking_chart[".geocodingEnabled"] = false;



// chart settings
$tdatatracking_chart[".chartType"] = "2DColumn";
// end of chart settings








$tstrOrderBy = "";
$tdatatracking_chart[".strOrderBy"] = $tstrOrderBy;

$tdatatracking_chart[".orderindexes"] = array();


$tdatatracking_chart[".sqlHead"] = "SELECT trackingId,  	dependency,  	`date`,  	`operator`";
$tdatatracking_chart[".sqlFrom"] = "FROM Tracking";
$tdatatracking_chart[".sqlWhereExpr"] = "";
$tdatatracking_chart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatracking_chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatracking_chart[".arrGroupsPerPage"] = $arrGPP;

$tdatatracking_chart[".highlightSearchResults"] = true;

$tableKeystracking_chart = array();
$tableKeystracking_chart[] = "trackingId";
$tdatatracking_chart[".Keys"] = $tableKeystracking_chart;


$tdatatracking_chart[".hideMobileList"] = array();




//	trackingId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "trackingId";
	$fdata["GoodName"] = "trackingId";
	$fdata["ownerTable"] = "tracking";
	$fdata["Label"] = GetFieldLabel("tracking_Chart","trackingId");
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


	$tdatatracking_chart["trackingId"] = $fdata;
		$tdatatracking_chart[".searchableFields"][] = "trackingId";
//	dependency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "dependency";
	$fdata["GoodName"] = "dependency";
	$fdata["ownerTable"] = "tracking";
	$fdata["Label"] = GetFieldLabel("tracking_Chart","dependency");
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


	$tdatatracking_chart["dependency"] = $fdata;
		$tdatatracking_chart[".searchableFields"][] = "dependency";
//	date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "date";
	$fdata["GoodName"] = "date";
	$fdata["ownerTable"] = "tracking";
	$fdata["Label"] = GetFieldLabel("tracking_Chart","date");
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


	$tdatatracking_chart["date"] = $fdata;
		$tdatatracking_chart[".searchableFields"][] = "date";
//	operator
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "operator";
	$fdata["GoodName"] = "operator";
	$fdata["ownerTable"] = "tracking";
	$fdata["Label"] = GetFieldLabel("tracking_Chart","operator");
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


	$tdatatracking_chart["operator"] = $fdata;
		$tdatatracking_chart[".searchableFields"][] = "operator";

$tdatatracking_chart[".chartLabelField"] = "dependency";
$tdatatracking_chart[".chartSeries"] = array();
$tdatatracking_chart[".chartSeries"][] = array(
	"field" => "trackingId",
	"total" => ""
);
	$tdatatracking_chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">tracking Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdatatracking_chart[".chartXml"] .= '<attr value="0">
			<attr value="name">trackingId</attr>';
	$tdatatracking_chart[".chartXml"] .= '</attr>';
	$tdatatracking_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">dependency</attr>
	</attr>';
	$tdatatracking_chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatatracking_chart[".chartXml"] .= '<attr value="head">'.xmlencode("tracking Chart").'</attr>
<attr value="foot">'.xmlencode("Legend Title").'</attr>
<attr value="y_axis_label">'.xmlencode("trackingId").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">None</attr>
<attr value="cview">Column</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdatatracking_chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatatracking_chart[".chartXml"] .= '<attr value="0">
		<attr value="name">trackingId</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("tracking_Chart","trackingId")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatracking_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">dependency</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("tracking_Chart","dependency")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatracking_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">date</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("tracking_Chart","date")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatracking_chart[".chartXml"] .= '<attr value="3">
		<attr value="name">operator</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("tracking_Chart","operator")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatatracking_chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">tracking Chart</attr>
<attr value="short_table_name">tracking_chart</attr>
</attr>

</chart>';

$tables_data["tracking Chart"]=&$tdatatracking_chart;
$field_labels["tracking_Chart"] = &$fieldLabelstracking_chart;
$fieldToolTips["tracking_Chart"] = &$fieldToolTipstracking_chart;
$placeHolders["tracking_Chart"] = &$placeHolderstracking_chart;
$page_titles["tracking_Chart"] = &$pageTitlestracking_chart;


changeTextControlsToDate( "tracking Chart" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tracking Chart"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tracking Chart"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tracking_chart()
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
	"m_srcTableName" => "tracking Chart"
));

$proto6["m_sql"] = "trackingId";
$proto6["m_srcTableName"] = "tracking Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "dependency",
	"m_strTable" => "tracking",
	"m_srcTableName" => "tracking Chart"
));

$proto8["m_sql"] = "dependency";
$proto8["m_srcTableName"] = "tracking Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "tracking",
	"m_srcTableName" => "tracking Chart"
));

$proto10["m_sql"] = "`date`";
$proto10["m_srcTableName"] = "tracking Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "operator",
	"m_strTable" => "tracking",
	"m_srcTableName" => "tracking Chart"
));

$proto12["m_sql"] = "`operator`";
$proto12["m_srcTableName"] = "tracking Chart";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "tracking";
$proto15["m_srcTableName"] = "tracking Chart";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "trackingId";
$proto15["m_columns"][] = "dependency";
$proto15["m_columns"][] = "date";
$proto15["m_columns"][] = "operator";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "Tracking";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "tracking Chart";
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
$proto0["m_srcTableName"]="tracking Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tracking_chart = createSqlQuery_tracking_chart();


	
		;

				

$tdatatracking_chart[".sqlquery"] = $queryData_tracking_chart;



$tdatatracking_chart[".hasEvents"] = false;

?>
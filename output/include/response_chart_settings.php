<?php
$tdataresponse_chart = array();
$tdataresponse_chart[".searchableFields"] = array();
$tdataresponse_chart[".ShortName"] = "response_chart";
$tdataresponse_chart[".OwnerID"] = "";
$tdataresponse_chart[".OriginalTable"] = "response";


$tdataresponse_chart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdataresponse_chart[".originalPagesByType"] = $tdataresponse_chart[".pagesByType"];
$tdataresponse_chart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdataresponse_chart[".originalPages"] = $tdataresponse_chart[".pages"];
$tdataresponse_chart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdataresponse_chart[".originalDefaultPages"] = $tdataresponse_chart[".defaultPages"];

//	field labels
$fieldLabelsresponse_chart = array();
$fieldToolTipsresponse_chart = array();
$pageTitlesresponse_chart = array();
$placeHoldersresponse_chart = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsresponse_chart["English"] = array();
	$fieldToolTipsresponse_chart["English"] = array();
	$placeHoldersresponse_chart["English"] = array();
	$pageTitlesresponse_chart["English"] = array();
	$fieldLabelsresponse_chart["English"]["responseId"] = "Response Id";
	$fieldToolTipsresponse_chart["English"]["responseId"] = "";
	$placeHoldersresponse_chart["English"]["responseId"] = "";
	$fieldLabelsresponse_chart["English"]["replyDate"] = "Reply Date";
	$fieldToolTipsresponse_chart["English"]["replyDate"] = "";
	$placeHoldersresponse_chart["English"]["replyDate"] = "";
	$fieldLabelsresponse_chart["English"]["responseTimeHours"] = "Response Time Hours";
	$fieldToolTipsresponse_chart["English"]["responseTimeHours"] = "";
	$placeHoldersresponse_chart["English"]["responseTimeHours"] = "";
	$fieldLabelsresponse_chart["English"]["responseDocumentId"] = "Response Document Id";
	$fieldToolTipsresponse_chart["English"]["responseDocumentId"] = "";
	$placeHoldersresponse_chart["English"]["responseDocumentId"] = "";
	if (count($fieldToolTipsresponse_chart["English"]))
		$tdataresponse_chart[".isUseToolTips"] = true;
}


	$tdataresponse_chart[".NCSearch"] = true;

	$tdataresponse_chart[".ChartRefreshTime"] = 0;


$tdataresponse_chart[".shortTableName"] = "response_chart";
$tdataresponse_chart[".nSecOptions"] = 0;

$tdataresponse_chart[".mainTableOwnerID"] = "";
$tdataresponse_chart[".entityType"] = 3;
$tdataresponse_chart[".connId"] = "pqrsf_at_localhost";


$tdataresponse_chart[".strOriginalTableName"] = "response";

	



$tdataresponse_chart[".showAddInPopup"] = false;

$tdataresponse_chart[".showEditInPopup"] = false;

$tdataresponse_chart[".showViewInPopup"] = false;

$tdataresponse_chart[".listAjax"] = false;
//	temporary
//$tdataresponse_chart[".listAjax"] = false;

	$tdataresponse_chart[".audit"] = false;

	$tdataresponse_chart[".locking"] = false;


$pages = $tdataresponse_chart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataresponse_chart[".edit"] = true;
	$tdataresponse_chart[".afterEditAction"] = 1;
	$tdataresponse_chart[".closePopupAfterEdit"] = 1;
	$tdataresponse_chart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataresponse_chart[".add"] = true;
$tdataresponse_chart[".afterAddAction"] = 1;
$tdataresponse_chart[".closePopupAfterAdd"] = 1;
$tdataresponse_chart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataresponse_chart[".list"] = true;
}



$tdataresponse_chart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataresponse_chart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataresponse_chart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataresponse_chart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataresponse_chart[".printFriendly"] = true;
}



$tdataresponse_chart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataresponse_chart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataresponse_chart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataresponse_chart[".isUseAjaxSuggest"] = true;



			

$tdataresponse_chart[".ajaxCodeSnippetAdded"] = false;

$tdataresponse_chart[".buttonsAdded"] = false;

$tdataresponse_chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdataresponse_chart[".isUseTimeForSearch"] = false;


$tdataresponse_chart[".badgeColor"] = "00C2C5";


$tdataresponse_chart[".allSearchFields"] = array();
$tdataresponse_chart[".filterFields"] = array();
$tdataresponse_chart[".requiredSearchFields"] = array();

$tdataresponse_chart[".googleLikeFields"] = array();
$tdataresponse_chart[".googleLikeFields"][] = "responseId";
$tdataresponse_chart[".googleLikeFields"][] = "replyDate";
$tdataresponse_chart[".googleLikeFields"][] = "responseTimeHours";
$tdataresponse_chart[".googleLikeFields"][] = "responseDocumentId";



$tdataresponse_chart[".tableType"] = "chart";

$tdataresponse_chart[".printerPageOrientation"] = 0;
$tdataresponse_chart[".nPrinterPageScale"] = 100;

$tdataresponse_chart[".nPrinterSplitRecords"] = 40;

$tdataresponse_chart[".geocodingEnabled"] = false;



// chart settings
$tdataresponse_chart[".chartType"] = "2DColumn";
// end of chart settings








$tstrOrderBy = "";
$tdataresponse_chart[".strOrderBy"] = $tstrOrderBy;

$tdataresponse_chart[".orderindexes"] = array();


$tdataresponse_chart[".sqlHead"] = "SELECT responseId,  	replyDate,  	responseTimeHours,  	responseDocumentId";
$tdataresponse_chart[".sqlFrom"] = "FROM Response";
$tdataresponse_chart[".sqlWhereExpr"] = "";
$tdataresponse_chart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataresponse_chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataresponse_chart[".arrGroupsPerPage"] = $arrGPP;

$tdataresponse_chart[".highlightSearchResults"] = true;

$tableKeysresponse_chart = array();
$tableKeysresponse_chart[] = "responseId";
$tdataresponse_chart[".Keys"] = $tableKeysresponse_chart;


$tdataresponse_chart[".hideMobileList"] = array();




//	responseId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "responseId";
	$fdata["GoodName"] = "responseId";
	$fdata["ownerTable"] = "response";
	$fdata["Label"] = GetFieldLabel("response_Chart","responseId");
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


	$tdataresponse_chart["responseId"] = $fdata;
		$tdataresponse_chart[".searchableFields"][] = "responseId";
//	replyDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "replyDate";
	$fdata["GoodName"] = "replyDate";
	$fdata["ownerTable"] = "response";
	$fdata["Label"] = GetFieldLabel("response_Chart","replyDate");
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


	$tdataresponse_chart["replyDate"] = $fdata;
		$tdataresponse_chart[".searchableFields"][] = "replyDate";
//	responseTimeHours
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "responseTimeHours";
	$fdata["GoodName"] = "responseTimeHours";
	$fdata["ownerTable"] = "response";
	$fdata["Label"] = GetFieldLabel("response_Chart","responseTimeHours");
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


	$tdataresponse_chart["responseTimeHours"] = $fdata;
		$tdataresponse_chart[".searchableFields"][] = "responseTimeHours";
//	responseDocumentId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "responseDocumentId";
	$fdata["GoodName"] = "responseDocumentId";
	$fdata["ownerTable"] = "response";
	$fdata["Label"] = GetFieldLabel("response_Chart","responseDocumentId");
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


	$tdataresponse_chart["responseDocumentId"] = $fdata;
		$tdataresponse_chart[".searchableFields"][] = "responseDocumentId";

$tdataresponse_chart[".chartLabelField"] = "responseDocumentId";
$tdataresponse_chart[".chartSeries"] = array();
$tdataresponse_chart[".chartSeries"][] = array(
	"field" => "responseId",
	"total" => ""
);
	$tdataresponse_chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">response Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdataresponse_chart[".chartXml"] .= '<attr value="0">
			<attr value="name">responseId</attr>';
	$tdataresponse_chart[".chartXml"] .= '</attr>';
	$tdataresponse_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">responseDocumentId</attr>
	</attr>';
	$tdataresponse_chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdataresponse_chart[".chartXml"] .= '<attr value="head">'.xmlencode("response Chart").'</attr>
<attr value="foot">'.xmlencode("Legend Title").'</attr>
<attr value="y_axis_label">'.xmlencode("responseId").'</attr>


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
$tdataresponse_chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataresponse_chart[".chartXml"] .= '<attr value="0">
		<attr value="name">responseId</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("response_Chart","responseId")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataresponse_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">replyDate</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("response_Chart","replyDate")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataresponse_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">responseTimeHours</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("response_Chart","responseTimeHours")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataresponse_chart[".chartXml"] .= '<attr value="3">
		<attr value="name">responseDocumentId</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("response_Chart","responseDocumentId")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataresponse_chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">response Chart</attr>
<attr value="short_table_name">response_chart</attr>
</attr>

</chart>';

$tables_data["response Chart"]=&$tdataresponse_chart;
$field_labels["response_Chart"] = &$fieldLabelsresponse_chart;
$fieldToolTips["response_Chart"] = &$fieldToolTipsresponse_chart;
$placeHolders["response_Chart"] = &$placeHoldersresponse_chart;
$page_titles["response_Chart"] = &$pageTitlesresponse_chart;


changeTextControlsToDate( "response Chart" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["response Chart"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["response Chart"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_response_chart()
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
	"m_srcTableName" => "response Chart"
));

$proto6["m_sql"] = "responseId";
$proto6["m_srcTableName"] = "response Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "replyDate",
	"m_strTable" => "response",
	"m_srcTableName" => "response Chart"
));

$proto8["m_sql"] = "replyDate";
$proto8["m_srcTableName"] = "response Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "responseTimeHours",
	"m_strTable" => "response",
	"m_srcTableName" => "response Chart"
));

$proto10["m_sql"] = "responseTimeHours";
$proto10["m_srcTableName"] = "response Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "responseDocumentId",
	"m_strTable" => "response",
	"m_srcTableName" => "response Chart"
));

$proto12["m_sql"] = "responseDocumentId";
$proto12["m_srcTableName"] = "response Chart";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "response";
$proto15["m_srcTableName"] = "response Chart";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "responseId";
$proto15["m_columns"][] = "replyDate";
$proto15["m_columns"][] = "responseTimeHours";
$proto15["m_columns"][] = "responseDocumentId";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "Response";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "response Chart";
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
$proto0["m_srcTableName"]="response Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_response_chart = createSqlQuery_response_chart();


	
		;

				

$tdataresponse_chart[".sqlquery"] = $queryData_response_chart;



$tdataresponse_chart[".hasEvents"] = false;

?>
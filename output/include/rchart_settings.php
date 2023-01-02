<?php
$tdatarchart = array();
$tdatarchart[".searchableFields"] = array();
$tdatarchart[".ShortName"] = "rchart";
$tdatarchart[".OwnerID"] = "";
$tdatarchart[".OriginalTable"] = "response";


$tdatarchart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatarchart[".originalPagesByType"] = $tdatarchart[".pagesByType"];
$tdatarchart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatarchart[".originalPages"] = $tdatarchart[".pages"];
$tdatarchart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatarchart[".originalDefaultPages"] = $tdatarchart[".defaultPages"];

//	field labels
$fieldLabelsrchart = array();
$fieldToolTipsrchart = array();
$pageTitlesrchart = array();
$placeHoldersrchart = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsrchart["Spanish"] = array();
	$fieldToolTipsrchart["Spanish"] = array();
	$placeHoldersrchart["Spanish"] = array();
	$pageTitlesrchart["Spanish"] = array();
	$fieldLabelsrchart["Spanish"]["responseId"] = "Response Id";
	$fieldToolTipsrchart["Spanish"]["responseId"] = "";
	$placeHoldersrchart["Spanish"]["responseId"] = "";
	$fieldLabelsrchart["Spanish"]["replyDate"] = "Reply Date";
	$fieldToolTipsrchart["Spanish"]["replyDate"] = "";
	$placeHoldersrchart["Spanish"]["replyDate"] = "";
	$fieldLabelsrchart["Spanish"]["responseTimeHours"] = "Response Time Hours";
	$fieldToolTipsrchart["Spanish"]["responseTimeHours"] = "";
	$placeHoldersrchart["Spanish"]["responseTimeHours"] = "";
	$fieldLabelsrchart["Spanish"]["responseDocumentId"] = "Response Document Id";
	$fieldToolTipsrchart["Spanish"]["responseDocumentId"] = "";
	$placeHoldersrchart["Spanish"]["responseDocumentId"] = "";
	if (count($fieldToolTipsrchart["Spanish"]))
		$tdatarchart[".isUseToolTips"] = true;
}


	$tdatarchart[".NCSearch"] = true;

	$tdatarchart[".ChartRefreshTime"] = 0;


$tdatarchart[".shortTableName"] = "rchart";
$tdatarchart[".nSecOptions"] = 0;

$tdatarchart[".mainTableOwnerID"] = "";
$tdatarchart[".entityType"] = 3;
$tdatarchart[".connId"] = "pqrsf_at_localhost";


$tdatarchart[".strOriginalTableName"] = "response";

	



$tdatarchart[".showAddInPopup"] = false;

$tdatarchart[".showEditInPopup"] = false;

$tdatarchart[".showViewInPopup"] = false;

$tdatarchart[".listAjax"] = false;
//	temporary
//$tdatarchart[".listAjax"] = false;

	$tdatarchart[".audit"] = false;

	$tdatarchart[".locking"] = false;


$pages = $tdatarchart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatarchart[".edit"] = true;
	$tdatarchart[".afterEditAction"] = 1;
	$tdatarchart[".closePopupAfterEdit"] = 1;
	$tdatarchart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatarchart[".add"] = true;
$tdatarchart[".afterAddAction"] = 1;
$tdatarchart[".closePopupAfterAdd"] = 1;
$tdatarchart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatarchart[".list"] = true;
}



$tdatarchart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatarchart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatarchart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatarchart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatarchart[".printFriendly"] = true;
}



$tdatarchart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatarchart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatarchart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatarchart[".isUseAjaxSuggest"] = true;



			

$tdatarchart[".ajaxCodeSnippetAdded"] = false;

$tdatarchart[".buttonsAdded"] = false;

$tdatarchart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatarchart[".isUseTimeForSearch"] = false;


$tdatarchart[".badgeColor"] = "4169E1";


$tdatarchart[".allSearchFields"] = array();
$tdatarchart[".filterFields"] = array();
$tdatarchart[".requiredSearchFields"] = array();

$tdatarchart[".googleLikeFields"] = array();
$tdatarchart[".googleLikeFields"][] = "responseId";
$tdatarchart[".googleLikeFields"][] = "replyDate";
$tdatarchart[".googleLikeFields"][] = "responseTimeHours";
$tdatarchart[".googleLikeFields"][] = "responseDocumentId";



$tdatarchart[".tableType"] = "chart";

$tdatarchart[".printerPageOrientation"] = 0;
$tdatarchart[".nPrinterPageScale"] = 100;

$tdatarchart[".nPrinterSplitRecords"] = 40;

$tdatarchart[".geocodingEnabled"] = false;



// chart settings
$tdatarchart[".chartType"] = "Line";
// end of chart settings








$tstrOrderBy = "";
$tdatarchart[".strOrderBy"] = $tstrOrderBy;

$tdatarchart[".orderindexes"] = array();


$tdatarchart[".sqlHead"] = "SELECT *";
$tdatarchart[".sqlFrom"] = "FROM response";
$tdatarchart[".sqlWhereExpr"] = "";
$tdatarchart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatarchart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarchart[".arrGroupsPerPage"] = $arrGPP;

$tdatarchart[".highlightSearchResults"] = true;

$tableKeysrchart = array();
$tableKeysrchart[] = "responseId";
$tdatarchart[".Keys"] = $tableKeysrchart;


$tdatarchart[".hideMobileList"] = array();




//	responseId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "responseId";
	$fdata["GoodName"] = "responseId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Rchart","responseId");
	$fdata["FieldType"] = 3;


	
	
			

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


	$tdatarchart["responseId"] = $fdata;
		$tdatarchart[".searchableFields"][] = "responseId";
//	replyDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "replyDate";
	$fdata["GoodName"] = "replyDate";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Rchart","replyDate");
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


	$tdatarchart["replyDate"] = $fdata;
		$tdatarchart[".searchableFields"][] = "replyDate";
//	responseTimeHours
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "responseTimeHours";
	$fdata["GoodName"] = "responseTimeHours";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Rchart","responseTimeHours");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "responseTimeHours";

		$fdata["sourceSingle"] = "responseTimeHours";

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


	$tdatarchart["responseTimeHours"] = $fdata;
		$tdatarchart[".searchableFields"][] = "responseTimeHours";
//	responseDocumentId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "responseDocumentId";
	$fdata["GoodName"] = "responseDocumentId";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Rchart","responseDocumentId");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "responseDocumentId";

		$fdata["sourceSingle"] = "responseDocumentId";

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


	$tdatarchart["responseDocumentId"] = $fdata;
		$tdatarchart[".searchableFields"][] = "responseDocumentId";

$tdatarchart[".chartLabelField"] = "responseDocumentId";
$tdatarchart[".chartSeries"] = array();
$tdatarchart[".chartSeries"][] = array(
	"field" => "responseId",
	"total" => "COUNT"
);
	$tdatarchart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">Rchart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">line</attr>
		</attr>

		<attr value="parameters">';
	$tdatarchart[".chartXml"] .= '<attr value="0">
			<attr value="name">responseId</attr>';
	$tdatarchart[".chartXml"] .= '</attr>';
	$tdatarchart[".chartXml"] .= '<attr value="1">
		<attr value="name">responseDocumentId</attr>
	</attr>';
	$tdatarchart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatarchart[".chartXml"] .= '<attr value="head">'.xmlencode("Respuestas").'</attr>
<attr value="foot">'.xmlencode("").'</attr>
<attr value="y_axis_label">'.xmlencode("responseId").'</attr>


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
$tdatarchart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatarchart[".chartXml"] .= '<attr value="0">
		<attr value="name">responseId</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Rchart","responseId")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatarchart[".chartXml"] .= '<attr value="1">
		<attr value="name">replyDate</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Rchart","replyDate")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatarchart[".chartXml"] .= '<attr value="2">
		<attr value="name">responseTimeHours</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Rchart","responseTimeHours")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatarchart[".chartXml"] .= '<attr value="3">
		<attr value="name">responseDocumentId</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Rchart","responseDocumentId")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatarchart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">Rchart</attr>
<attr value="short_table_name">rchart</attr>
</attr>

</chart>';

$tables_data["Rchart"]=&$tdatarchart;
$field_labels["Rchart"] = &$fieldLabelsrchart;
$fieldToolTips["Rchart"] = &$fieldToolTipsrchart;
$placeHolders["Rchart"] = &$placeHoldersrchart;
$page_titles["Rchart"] = &$pageTitlesrchart;


changeTextControlsToDate( "Rchart" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Rchart"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Rchart"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_rchart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "*";
$proto0["m_strFrom"] = "FROM response";
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
$proto6["m_srcTableName"] = "Rchart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "response";
$proto9["m_srcTableName"] = "Rchart";
$proto9["m_columns"] = array();
$proto9["m_columns"][] = "responseId";
$proto9["m_columns"][] = "replyDate";
$proto9["m_columns"][] = "responseTimeHours";
$proto9["m_columns"][] = "responseDocumentId";
$obj = new SQLTable($proto9);

$proto8["m_table"] = $obj;
$proto8["m_sql"] = "response";
$proto8["m_alias"] = "";
$proto8["m_srcTableName"] = "Rchart";
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
$proto0["m_srcTableName"]="Rchart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_rchart = createSqlQuery_rchart();


	
		;

				

$tdatarchart[".sqlquery"] = $queryData_rchart;



$tdatarchart[".hasEvents"] = false;

?>
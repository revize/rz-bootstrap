/*-----------------------------------------------------------------------------------

	Theme Name: Birmingham Shopping District
	Theme URI: http://www.enjoybirmingham.com/
	Description: Custom website design for Birmingham Shopping District
	Author: Designed by Samir Alley & HTML/CSS by Tom Gooden | tom@revize.com
	Author URI: http://www.revize.com/

	Version: 1.2 / June 10,2014
		- Added Mega Menu

	Version: 1.1 / June 2,2014
		- Added twitter feed

	Version: 1 / JAN 9,2014

	Table of content
	#Mega Menu
	#Responsive Nav
	#Flexslider
	#Responsive Tables
	#Twitter Feed

/* -----------------------------------------

#Responsive Tables

-----------------------------------------*/
$( "table" ).wrap( "<div id='dataTable' class='table-responsive'></div>" );

//--------------------DCO 10-14-2014--------------------\\
// The plugin function for adding a new filtering routine
if (document.getElementById('dateRange') != null)
{
	var dataTableWrap = document.getElementById('dataTable')
	$.fn.dataTableExt.afnFiltering.push(
		function(oSettings, aData, iDataIndex)
		{
			var dateStart = parseDateValue($("#dateStart").val());
			var dateEnd = parseDateValue($("#dateEnd").val());
			// aData represents the table structure as an array of columns, so the script access the date value
			// in the first column of the table via aData[0]
			var evalDate= parseDateValue(aData[5]);

			if (evalDate >= dateStart && evalDate <= dateEnd) {
				return true;
			}
			else {
				return false;
			}
		}
	);

	// Function for converting a mm/dd/yyyy date value into a numeric string for comparison (example 08/12/2010 becomes 20100812
	function parseDateValue(rawDate) {
		var dateArray= rawDate.split("/");
		var parsedDate= dateArray[2] + dateArray[0] + dateArray[1];
		return parsedDate;
	}

	$(function() {
		// Implements the dataTables plugin on the HTML table
		var $dTable= $("table.table").dataTable();

		// The dataTables plugin creates the filtering and pagination controls for the table dynamically, so these
		// lines will clone the date range controls currently hidden in the baseDateControl div and append them to
		// the feedbackTable_filter block created by dataTables
		$dateControls= $("#baseDateControl").children("div").clone();
		$("#feedbackTable_filter").prepend($dateControls);

		// Create event listeners that will filter the table whenever the user types in either date range box or
		// changes the value of either box using the Datepicker pop-up calendar
		$("#dateStart").keyup ( function() { $dTable.fnDraw(); } );
		$("#dateStart").change( function() { $dTable.fnDraw(); } );
		$("#dateEnd").keyup ( function() { $dTable.fnDraw(); } );
		$("#dateEnd").change( function() { $dTable.fnDraw(); } );
	});
}
//--------------------DCO 10-14-2014--------------------//

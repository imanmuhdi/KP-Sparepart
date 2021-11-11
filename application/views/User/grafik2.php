<!DOCTYPE HTML>
<html>
<head>  
<script type="text/javascript">
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "Laporan Down Time Mesin Weaving"
	},
	axisY: {
		title: "Jam",
		includeZero: true
	},
	legend: {
		cursor:"pointer",
		itemclick : toggleDataSeries
	},
	toolTip: {
		shared: true,
		content: toolTipFormatter
	},
	data: [{
		type: "column",
		showInLegend: true,
		name: "Jam Operasi",
		color: "gold",
		dataPoints: [
		<?php foreach($tb_mesin->result() as $r ){
			echo "{ y: ".$r->jam_op.", label: ".'"'.$r->id_mesin.'"'." }";
			if ($r->id_mesin == NULL) {
    		
    		}else{
    			echo ",";
    		}
		} ?>
			
		]
	},
	{
		type: "column",
		showInLegend: true,
		name: "Down Time",
		color: "silver",
		dataPoints: [
			<?php foreach($tb_mesin->result() as $r ){
			echo "{ y: ".$r->down_time.", label: ".'"'.$r->id_mesin.'"'." }";
			if ($r->id_mesin == NULL) {
    		}else{
    			echo ",";
    		}
    	} ?> 
			
		]
	}]
});
chart.render();

function toolTipFormatter(e) {
	var str = "";
	var total = 0 ;
	var str3;
	var str2 ;
	for (var i = 0; i < e.entries.length; i++){
		var str1 = "<span style= \"color:"+e.entries[i].dataSeries.color + "\">" + e.entries[i].dataSeries.name + "</span>: <strong>"+  e.entries[i].dataPoint.y + "</strong> <br/>" ;
		total = (e.entries[i].dataPoint.y/total)*100 ;
		str = str.concat(str1);
	}
	str2 = "<strong>" + e.entries[0].dataPoint.label + "</strong> <br/>";
	str3 = "<span style = \"color:Tomato\">Persentase: </span><strong>" + total+"%" + "</strong><br/>";
	return (str2.concat(str)).concat(str3);
}

function toggleDataSeries(e) {
	if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else {
		e.dataSeries.visible = true;
	}
	chart.render();
}

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 720px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>
<html>
<head>
	<script src="RGraph.common.core.js"></script>
	<script src="RGraph.bar.js"></script>
	<title>grafico</title>
</head>
<body>
	<div style="padding: 15px">
    <canvas id="cvs" width="450" height="250">[No canvas support]</canvas>
	</div>

<script>
    new RGraph.Bar({
        id: 'cvs',
        data: [12,18,10,9,6,20,18],
        options: {
            labels: ['Monday\n(urgh!)','Tuesday','Wednesday','Thursday','Friday\n(yay!)','Saturday','Sunday'],
            unitsPost: 'k',
            shadow: false,
            colors: ['red'],
            strokestyle: 'rgba(0,0,0,0)',
            textSize: 8,
            textAccessible: true,
            title: 'A basic Bar chart using DOM text',
            numyticks: 5,
            noxaxis: true,
            gutterLeft: 50,
            scaleZerostart: true
        }                
    }).draw();
</script>
</body>
</html>
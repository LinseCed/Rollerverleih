<!DOCTYPE html>
<html>
<meta charset="ISO-8859-1">
<title>Cedrics Rollerverleih</title>
<style>

body {
	margin: 0;
	padding: 0;
	overflow: hidden;
	font-family: 'Segoe UI', Helvetica, Arial, Sans-Serif;
}

.fas fa-bars {
	position: absolute;
	z-index: 22;
	}

.cedrics_buttons {
	width: 600px;
	border: none;
	color: black;
	background-color: #FFFF00;
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 45px;
	border-radius: 8px;
	border: none;
	position: absolute;
	z-index: 3;
	font-family: 'Segoe UI', Helvetica, Arial, Sans-Serif;
	margin-top: 20px;
}

.cedrics_auswählen_button {
	position: absolute;
	margin-top: 20px;
	margin-left: 270px;
	width: 400px;
}

.cedrics_beginnen_button {
	width: 113.33px;
	margin-top: 13px;
	position: absolute;
	z-index: 3;
}

.cedrics_beginnen_button1 {
	margin-left: 115px;
	}
	
.cedrics_beginnen_button2 {
	margin-left: 238.33px;
	}
.cedrics_beginnen_button3 {
	margin-left: 361.66px;
	}
.cedrics_beginnen_button4 {
	margin-left: 484.99px;
	}

	.cedrics_beginnen_button5 {
	margin-left: 608.32px;
}

.cedrics_beginnen_button6 {
	margin-left: 731.65px;
	}

.cedrics_start_button {
	background-color: #4CAF50;
	display: none;
}

.cedrics_beenden_button {
	background-color: #ff9900;
	display: none;
	margin-left: 270px;
	width: 400px;
	margin-top: 2px;
	z-index: 4;
}

.cedrics_sezp_ausblenden {
	display: inline-block;
}

.weisse_box {
	position: absolute;
	z-index: 2;
	background-color: white;
	margin-left: 265px;
	margin-top: 15px;
	width: 410px;
	height: 150px;
	display: none;
}
	
#printoutPanel {
	position: absolute;
	z-index: 2;
}

#table {
	position: absolute;
	z-index: 4;
	margin-left: 270px;
	margin-top: 43px;
	width: 410px;
	font-size: 35px;
}

#los {
	position: absolute;
	z-index: 3;
}

div {
	z-index: 1;
}

#x_position {
	position: absolute;
	z-index: 3;
	margin-top: 790px;
}

#y_position {
	position: absolute;
	z-index: 3;
	margin-top: 800px;
}

#roller_id {
	position: absolute;
	z-index: 3;
	margin-top: 810px;
	}

#benutzername {
	display: none;
}

#beginnen_button {
	position: absolute;
	z-index: 2;
	display: none;
}

#beginnen_button2 {
	position: absolute;
	z-index: 2;
	display: none;
}

#beginnen_button3 {
	position: absolute;
	z-index: 2;
	display: none;
}

#beginnen_button4 {
	position: absolute;
	z-index: 2;
	display: none;
}

#beginnen_button5 {
	position: absolute;
	z-index: 2;
	display: none;
}

#beginnen_button6 {
	position: absolute;
	z-index: 2;
	display: none;
}

#beenden_button {
	margin-top: 20px;
}

#startzei {
	display: none;
}

#startzeit {
	display: none;
}

#endzei {
	display: none;
}

#time {
	display: none;
}

#prei {
	display: none;
}
</style>
<script src="https://kit.fontawesome.com/19b5923dd2.js"></script>
<body>
	<div id='printoutPanel'></div>

	<div id='myMap' style='width: 100vw; height: 100vh;'>
	
	

		<button type="button" id="auswaehlen_button"
			class="cedrics_buttons cedrics_auswählen_button"
			onclick="Fahrt_Auswaehlen();">choose Scooter</button>

		<button type="button" id="beginnen_button"
			class="cedrics_buttons cedrics_beginnen_button cedrics_beginnen_button1"
			onclick="Fahrt_Starten(); Roller_Id1();">1</button>
			
					<button type="button" id="beginnen_button2"
			class="cedrics_buttons cedrics_beginnen_button cedrics_beginnen_button2"
			onclick="Fahrt_Starten(); Roller_Id2();">2</button>
			
					<button type="button" id="beginnen_button3"
			class="cedrics_buttons cedrics_beginnen_button cedrics_beginnen_button3"
			onclick="Fahrt_Starten(); Roller_Id3();">3</button>
			
					<button type="button" id="beginnen_button4"
			class="cedrics_buttons cedrics_beginnen_button cedrics_beginnen_button4"
			onclick="Fahrt_Starten(); Roller_Id4();">4</button>
			
					<button type="button" id="beginnen_button5"
			class="cedrics_buttons cedrics_beginnen_button cedrics_beginnen_button5"
			onclick="Fahrt_Starten(); Roller_Id5();">5</button>
			
					<button type="button" id="beginnen_button6"
			class="cedrics_buttons cedrics_beginnen_button cedrics_beginnen_button6"
			onclick="Fahrt_Starten(); Roller_Id6();">6</button>
			
			
		<button type="button" id="weissebox"
			class="cedrics_buttons weisse_box"></button>




		<script type="text/javascript">
var letzte_startzeit = new Date();
var letzte_ende_zeit = new Date();

var verstricheneZeit

var interval;
                                               
function loadMapScenario() {                                                                  //function loadMapScenario()
	var map = new Microsoft.Maps.Map(document.getElementById('myMap'), {});
	navigator.geolocation.getCurrentPosition(function(position) {
		var loc = new Microsoft.Maps.Location(position.coords.latitude,
			position.coords.longitude);
			

		var pin = new Microsoft.Maps.Pushpin(loc);
		map.entities.push(pin);

		map.setView({
			center : loc,
			zoom : 100
		});
	});	
    var center = new Microsoft.Maps.Location(48.80007, 9.0629);
    var pushpin = new Microsoft.Maps.Pushpin(new Microsoft.Maps.Location(48.80007, 9.0629), null);
    var infobox1 = new Microsoft.Maps.Infobox(center, { title: 'Scooter 1', description: '0.20EUR + 1EUR bei Start', visible: false });
    infobox1.setMap(map);
    Microsoft.Maps.Events.addHandler(pushpin, 'click', function () {
        infobox1.setOptions({ visible: true });
    });
    map.entities.push(pushpin);
	infobox_pv = new Microsoft.Maps.Infobox(map.getCenter(), {
	    title: 'Hier ist das parken verboten!',
	    description: 'Bei wiederholtem Parken in Sperrzonen wird ihr Account gesperrt ',
	    visible: true
		});
	    var center_pv = new Microsoft.Maps.Location(48.783735, 9.063818);
	    var infobox_pv = new Microsoft.Maps.Infobox(center_pv, { title: 'Hier ist das Parken verboten!', description: 'Wiederholtes Parken in Sperrzonen kommt es zu einer Sperrung ihres Accounts', visible: false });
	    infobox_pv.setMap(map);

	//Create a sample polygon.
	var shape = new Microsoft.Maps.Polygon([
	new Microsoft.Maps.Location(center_pv.latitude + 0.003, center_pv.longitude + 0.003),
	new Microsoft.Maps.Location(center_pv.latitude + 0.003, center_pv.longitude - 0.0062),
	new Microsoft.Maps.Location(center_pv.latitude + 0.0045, center_pv.longitude - 0.0062),
	new Microsoft.Maps.Location(center_pv.latitude + 0.0055, center_pv.longitude - 0.0025),
	new Microsoft.Maps.Location(center_pv.latitude + 0.00625, center_pv.longitude - 0.0025),
	new Microsoft.Maps.Location(center_pv.latitude + 0.008, center_pv.longitude - 0.001),
	new Microsoft.Maps.Location(center_pv.latitude + 0.0085, center_pv.longitude - 0.0035),
	new Microsoft.Maps.Location(center_pv.latitude + 0.011, center_pv.longitude + 0.000),
	new Microsoft.Maps.Location(center_pv.latitude + 0.0117, center_pv.longitude - 0.0005),
	new Microsoft.Maps.Location(48.795276, 9.062879), //1
	new Microsoft.Maps.Location(48.796104, 9.061985), //2
	new Microsoft.Maps.Location(48.796135, 9.061291), //3
	new Microsoft.Maps.Location(48.795021, 9.059213), //4
	new Microsoft.Maps.Location(48.795862, 9.058549), //4.1
	//new Microsoft.Maps.Location(48.796050, 9.058600), //5
	new Microsoft.Maps.Location(48.796090, 9.058562),
	new Microsoft.Maps.Location(48.796654, 9.059085), //6
	new Microsoft.Maps.Location(48.797709, 9.059428), //7
	new Microsoft.Maps.Location(48.798119, 9.060005), //8
	new Microsoft.Maps.Location(48.798359, 9.060358),
	new Microsoft.Maps.Location(48.799783, 9.059093), //9
	new Microsoft.Maps.Location(48.799844, 9.058970), //10
	new Microsoft.Maps.Location(48.800243, 9.059343), //11
	new Microsoft.Maps.Location(48.800596, 9.059767), //12
	new Microsoft.Maps.Location(48.800900, 9.060266), //13
	new Microsoft.Maps.Location(48.801093, 9.060819), //14
	new Microsoft.Maps.Location(48.801532, 9.061744), //15
	new Microsoft.Maps.Location(48.801773, 9.062318), //16
	new Microsoft.Maps.Location(48.803682, 9.064038), //17
	new Microsoft.Maps.Location(48.802924, 9.065537), //18
	new Microsoft.Maps.Location(48.803157, 9.065770),
	new Microsoft.Maps.Location(48.803233, 9.066679),
	new Microsoft.Maps.Location(48.803753, 9.067808),
	new Microsoft.Maps.Location(48.803379, 9.068223),
	new Microsoft.Maps.Location(48.803692, 9.069513),
	new Microsoft.Maps.Location(48.803674, 9.069746),
	new Microsoft.Maps.Location(48.803529, 9.070020),
	new Microsoft.Maps.Location(48.804084, 9.070859),
	new Microsoft.Maps.Location(48.803512, 9.071727),
	new Microsoft.Maps.Location(48.804756, 9.073894),
	new Microsoft.Maps.Location(48.805745, 9.072826),
	new Microsoft.Maps.Location(48.806891, 9.070851),
	new Microsoft.Maps.Location(48.807085, 9.070883),
	new Microsoft.Maps.Location(48.806559, 9.072103),
	new Microsoft.Maps.Location(48.807764, 9.073665),
	new Microsoft.Maps.Location(48.806772, 9.074748),
	new Microsoft.Maps.Location(48.806867, 9.075033),
	new Microsoft.Maps.Location(48.805927, 9.075462),
	new Microsoft.Maps.Location(48.805927, 9.075462),
	new Microsoft.Maps.Location(48.804657, 9.074314),
	new Microsoft.Maps.Location(48.803565, 9.075013),
	new Microsoft.Maps.Location(48.802604, 9.075828),
	new Microsoft.Maps.Location(48.801752, 9.076404),
	new Microsoft.Maps.Location(48.801419, 9.076490),
    new Microsoft.Maps.Location(48.801485, 9.076914),
	new Microsoft.Maps.Location(48.801326, 9.076946),
	new Microsoft.Maps.Location(48.801307, 9.076611),
	new Microsoft.Maps.Location(48.800368, 9.076724),
	new Microsoft.Maps.Location(48.800362, 9.075158),
    new Microsoft.Maps.Location(48.800494, 9.073021),
	new Microsoft.Maps.Location(48.800535, 9.072460),
	new Microsoft.Maps.Location(48.800849, 9.071204),
	new Microsoft.Maps.Location(48.800844, 9.070700),
	new Microsoft.Maps.Location(48.800393, 9.070889),
	new Microsoft.Maps.Location(48.800446, 9.071176),
	new Microsoft.Maps.Location(48.800341, 9.071196),
	new Microsoft.Maps.Location(48.800292, 9.070909),
	new Microsoft.Maps.Location(48.799829, 9.071102),
	new Microsoft.Maps.Location(48.798405, 9.071859),
	new Microsoft.Maps.Location(48.797687, 9.072235),
	new Microsoft.Maps.Location(48.797437, 9.070798),
	new Microsoft.Maps.Location(48.797349, 9.070296),
	new Microsoft.Maps.Location(48.796805, 9.065614),
	new Microsoft.Maps.Location(48.796575, 9.065622),
	new Microsoft.Maps.Location(48.795831, 9.064877),
	new Microsoft.Maps.Location(48.794968, 9.064811),
	new Microsoft.Maps.Location(48.794626, 9.064424),
	new Microsoft.Maps.Location(48.792877, 9.062435),
	new Microsoft.Maps.Location(48.792942, 9.063768),
	new Microsoft.Maps.Location(48.794041, 9.065692),
	new Microsoft.Maps.Location(48.793696, 9.067529),
	new Microsoft.Maps.Location(48.793232, 9.067258),
    new Microsoft.Maps.Location(48.793238, 9.066885),
	new Microsoft.Maps.Location(48.790861, 9.063912),
	new Microsoft.Maps.Location(48.790258, 9.062847),
	new Microsoft.Maps.Location(48.790233, 9.065176),
	new Microsoft.Maps.Location(48.789482, 9.065924),
	new Microsoft.Maps.Location(48.789387, 9.066156),
	new Microsoft.Maps.Location(48.789192, 9.066109),
	new Microsoft.Maps.Location(48.788855, 9.066364),
	new Microsoft.Maps.Location(48.788595, 9.067458),
	//new Microsoft.Maps.Location(48.783735, 9.063818),
	//new Microsoft.Maps.Location(),
	//new Microsoft.Maps.Location(),
	//new Microsoft.Maps.Location(),
	//new Microsoft.Maps.Location(),
	//new Microsoft.Maps.Location(),
	//new Microsoft.Maps.Location(),
	//new Microsoft.Maps.Location(),
	//new Microsoft.Maps.Location(),
	//new Microsoft.Maps.Location(),
	//new Microsoft.Maps.Location(),
	//new Microsoft.Maps.Location(48.797964, 9.059743),
	//new Microsoft.Maps.Location(48.797964, 9.059743),
//	new Microsoft.Maps.Location(48.799783, 9.059093),
	//new Microsoft.Maps.Location(48.799844, 9.058970),
	//new Microsoft.Maps.Location(48.800243, 9.059343),
	//new Microsoft.Maps.Location(48.800596, 9.059767),
	//new Microsoft.Maps.Location(48.800900, 9.060266),
	//new Microsoft.Maps.Location(48.801093, 9.060819),
	//new Microsoft.Maps.Location(48.801254, 9.061366),
	//new Microsoft.Maps.Location(48.801443, 9.061830),

	], null); //B
	Microsoft.Maps.Events.addHandler(shape, 'click', polygonClicked);
	//Add the polygon to the map.
	map.entities.push(shape);
	function polygonClicked(e) {
	    infobox_pv.setOptions({
	        //Use the location of where the mouse was clicked to position the infobox.
	        location: e.location,
	        visible: true
	    });

	    
	}
	

	var roller_positionen = [ 
		<?php
		$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "rollerverleih";
		
		// Create connection
		$conn = new mysqli ( $servername, $username, $password, $dbname );
		// Check connection
		if ($conn->connect_error) {
			die ( "Connection failed: " . $conn->connect_error );
		}
		
		$sql = "SELECT * FROM rollerverleih.rollerstandort";
		$result = $conn->query ( $sql );
		// rint mysqli_error($conn);
		// rint "Anzahl ergebnisse: " . $result->num_rows . "\n";
		
		while ( $row = $result->fetch_assoc () ) {
			
			// rint"<tr><TD>benutzer_id:" . $row["benutzer_id"]. "</TD><TD> - email: " . $row["email"]. "</TD><TD> " . $row["name"]. "</TD></tr>";
			print "[" . $row ["id_roller_standort"] . "," . $row ["x_position"] . "," . $row ["y_position"] . "],";
		}
		
		$sql = "SELECT * FROM rollerverleih.rollerstandort";
		/*
		 * $result = $conn->query ( $sql ); while($row = $result->fetch_assoc()) { print"[". $row["idRollerStandort"]. "," . $row["x-Position"]. "," . $row["y-Position"]. "],"; }
		 */
		

		?>
		];
		
		for ( roller_index = 0; roller_index < roller_positionen.length ; roller_index++ ) {
			var einzelner_roller = roller_positionen[roller_index];

			//alert (" Der Roller " + einzelner_roller[0] + " ist bei X-Position: " + einzelner_roller[1] );

			var roller_ort = new Microsoft.Maps.Location(einzelner_roller[1], einzelner_roller[2]); 
			var roller_pushpin = new Microsoft.Maps.Pushpin(roller_ort, null);

			map.entities.push(roller_pushpin);

			map.setView({
				center : roller_ort,
				zoom : 30
			});		
		}	
}

		
		//function ermittlePosition() {
		  //  if (navigator.geolocation) {
		    //    navigator.geolocation.getCurrentPosition(zeigePosition);
		      //  alert("l");
		    //} else { 
		      //  alert("Ihr Browser unterstützt keine Geolocation.");
		    //}
		//}

		//function zeigePosition(position) {
			//var x_position_elem = position.coords.latitude;
			//x_position_elem = document.getElementById("x_position");
		//	alert("?");	
			//var y_position_elem = position.coords.longitude;
		//	y_position_elem = document.getElementById("y_position");
			      
		//}
		

  function parken_verboten() {                                                                                                          //standort wird gesetzt

	infobox_pv = new Microsoft.Maps.Infobox(map.getCenter(), {
    title: 'Hier ist das parken verboten!',
    description: 'Bei wiederholtem Parken in Sperrzonen wird ihr Account gesperrt ',
    visible: true
	});
    var center_pv = new Microsoft.Maps.Location(47.80007, 9.0629);
    var infobox_pv = new Microsoft.Maps.Infobox(center_pv, { title: 'Hier ist das Parken verboten!', description: 'Wiederholtes Parken in Sperrzonen führt zu einer Sperrung ihres Accounts', visible: false });
    infobox_pv.setMap(map);

//Create a sample polygon.
var shape = Microsoft.Maps.TestDataGenerator.getPolygons(1, map.getBounds());
//Add an click event handler to the polygon.
Microsoft.Maps.Events.addHandler(shape, 'click', polygonClicked);
//Add the polygon to the map.
map.entities.push(shape);
function polygonClicked(e) {
    infobox_pv.setOptions({
        //Use the location of where the mouse was clicked to position the infobox.
        location: e.location,
        visible: true
    });
}
  }

function Fahrt_Starten() {                                                                              //function Fahrt_Starten()
	aktuelle_start_zeit = new Date();

	//alert("Die Zeit:" + aktuelle_start_zeit.getHours()  + ":" + aktuelle_start_zeit.getMinutes()   );

	var startzeit_anzeige_text = aktuelle_start_zeit.getHours() + ":"
			+ aktuelle_start_zeit.getMinutes() + ":"
					+ aktuelle_start_zeit.getSeconds();

	var beginnen_button_elem = document.getElementById("beginnen_button");

	beginnen_button_elem.style.display = "none";            

	var beginnen_button2_elem = document.getElementById("beginnen_button2");

	beginnen_button2_elem.style.display = "none";        

	var beginnen_button3_elem = document.getElementById("beginnen_button3");

	beginnen_button3_elem.style.display = "none";        

	var beginnen_button4_elem = document.getElementById("beginnen_button4");

	beginnen_button4_elem.style.display = "none"; 

	var beginnen_button5_elem = document.getElementById("beginnen_button5");

	beginnen_button5_elem.style.display = "none";        

	var beginnen_button6_elem = document.getElementById("beginnen_button6");

	beginnen_button6_elem.style.display = "none";               
	                     //none

	var beenden_button_elem = document.getElementById("beenden_button");

	beenden_button_elem.style.display = "inline-block";                          //inline-block

	var startzeit_elem = document.getElementById("startzeit");

	startzeit_elem.innerHTML = startzeit_anzeige_text;

	letzte_startzeit = aktuelle_start_zeit;

	var weisse_box_elem = document.getElementById("weissebox");
	weisse_box_elem.style.display = "inline-block";

	timer();
}

function Fahrt_Beenden() {                                                                       

	//alert('Anfang fahrt beenden');
	aktuelle_ende_zeit = new Date();

	// alert("Die Zeit:" + aktuelle_ende_zeit.getHours()  + ":" + aktuelle_ende_zeit.getMinutes()   );

	var endezeit_anzeige_text = aktuelle_ende_zeit.getHours() + ":"
			+ aktuelle_ende_zeit.getMinutes() + ":"
					+ aktuelle_ende_zeit.getSeconds();

	var beenden_button_elem = document.getElementById("beenden_button");

	//beenden_button_elem.style.display = "none";                                           //none

	var start_button_elem = document.getElementById("start_button");
	//alert('start_button_elem');
	// start_button_elem.style.display = "none";                                       //inline-block

	//.cedrics_sezp_ausblenden.style.display ="none";

	//var ende_zeit_elem = document.getElementById("endzeit");

	//ende_zeit_elem.innerHTML = endezeit_anzeige_text;
	//alert('Ende endezeit_anzeige_text');
	clearInterval(interval);

	 //alert('Ende fahrt beenden');
}

function Fahrt_Auswaehlen() {
	var auswaehlen_button_elem = document.getElementById("auswaehlen_button"); auswaehlen_button_elem.style.display = "none";                                     //none

	var start_button_elem = document.getElementById("beginnen_button"); start_button_elem.style.display = "inline-block";

	var start_button2_elem = document.getElementById("beginnen_button2"); start_button2_elem.style.display = "inline-block";

	var start_button3_elem = document.getElementById("beginnen_button3"); start_button3_elem.style.display = "inline-block";

	var start_button4_elem = document.getElementById("beginnen_button4"); start_button4_elem.style.display = "inline-block";

	var start_button5_elem = document.getElementById("beginnen_button5"); start_button5_elem.style.display = "inline-block";

	var start_button6_elem = document.getElementById("beginnen_button6"); start_button6_elem.style.display = "inline-block";
	
}

function timer() {                                                                               //function timer()
	var startTime = Date.now();

	interval = setInterval(
	function() {
		verstricheneZeit = Date.now() - (startTime);

		verstricheneZeit_in_sec = Math
		.floor(verstricheneZeit / 1000);
		verstricheneZeit_in_min = verstricheneZeit / 60000;

		verstricheneZeit_in_min = Math
		.floor(verstricheneZeit_in_min);

		var stunde_minute_sekunde = (verstricheneZeit / 1000)
		.toFixed(1);

		var verstrichene_minuten_sekunden = 60 * verstricheneZeit_in_min;

		var laufende_sekunden_der_minute = verstricheneZeit_in_sec
		- verstrichene_minuten_sekunden;

		var minutenzeige = verstricheneZeit_in_min.toString();

		if (verstricheneZeit_in_min < 10) {
			minutenzeige = '0' + minutenzeige;
		}

		var sekundenanzeige = laufende_sekunden_der_minute
		.toString();

		if (laufende_sekunden_der_minute < 10) {
			sekundenanzeige = '0' + sekundenanzeige;
		}
		var anzeige_verstrichene_zeit = minutenzeige + ':'
				+ sekundenanzeige;

		document.getElementById("timer").innerHTML = anzeige_verstrichene_zeit;
		Preis_berechnen();

	}, 100);
}

function Preis_berechnen() {                                                                      //function Preis_berechnen()

	var gesamtpreis;

	var grundpreis = 1;

	var minutenpreis = 0.15;

	var verstrichene_minuten_abgeschnitten = Math
	.ceil(verstricheneZeit_in_min);

	 //alert ( 'verstrichen:' +  verstrichene_minuten_abgeschnitten ) ;

	gesamtpreis = (grundpreis + minutenpreis
	* verstrichene_minuten_abgeschnitten).toFixed(2);

	var gesamtpreis_anzeige = gesamtpreis.toString();

	gesamtpreis_anzeige = gesamtpreis_anzeige.replace('.', ',') + " EUR";

	// alert("Preis ist:" + gesamtpreis);

	document.getElementById("preis").innerHTML = gesamtpreis_anzeige;
}

function auswert() {                                                                              //function auswert()
	nutzername = document.form5.namensfeld.value;
	if (document.form5.namensfeld.value == "Den am Roller klebenden Code hier eingeben")
		alert("Faulheit wird bestraft werden!");

	else
		var start_button_elem = document.getElementById("start_button");
	start_button_elem.style.display = "none";
	if (document.form5.namensfeld.value == "1")
		alert("Ihre Fahrt startet!");
	var start_button_elem = document.getElementById("start_button");
	start_button_elem.style.display = "inline-block";
	document.getElementById("benutzername").innerHTML = nutzername;

}

var ausgabe = document.getElementById('ausgabe');

function sleep(milliseconds) {
	  var start = new Date().getTime();
	  for (var i = 0; i < 1e7; i++) {
	    if ((new Date().getTime() - start) > milliseconds){
	      break;
	    }
	  }
	}
	
function ermittlePosition() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(zeigePosition);
        //while ( document.forms.pos_speichern_form.x.value == -1 ) {
       // 	sleep(10);
        //}
    } else { 
        ausgabe.innerHTML = 'Ihr Browser unterstützt keine Geolocation.';
    }
}

function zeigePosition(position) {
    positionx_elem = document.getElementById("x_position");
    positionx_elem.value = position.coords.latitude;
    positiony_elem = document.getElementById("y_position");
    positiony_elem.value = position.coords.longitude;
}

function myFunction() {
	  var x = document.getElementById("myForm").elements.length;
	  document.getElementById("demo").innerHTML = "Found " + x + " elements in the form.";
	}

function Roller_Id1() {
    rollerid_elem = document.getElementById("roller_id");
    rollerid_elem.value = '1';
}

function Roller_Id2() {
    rollerid_elem = document.getElementById("roller_id");
    rollerid_elem.value = '2';
}

function Roller_Id3() {
    rollerid_elem = document.getElementById("roller_id");
    rollerid_elem.value = '3';
}

function Roller_Id4() {
    rollerid_elem = document.getElementById("roller_id");
    rollerid_elem.value = '4';
}

function Roller_Id5() {
    rollerid_elem = document.getElementById("roller_id");
    rollerid_elem.value = '5';
}

function Roller_Id6() {
    rollerid_elem = document.getElementById("roller_id");
    rollerid_elem.value = '6';
}



function beenden_gedrueckt () {

	
	Fahrt_Beenden(); 
	//alert('Hallo 1:' + document.forms.pos_speichern_form.x.value );
	//zeigePosition();
	ermittlePosition();
	//alert('Hallo 2'  + document.forms.pos_speichern_form.x.value);
	while ( document.forms.pos_speichern_form.x.value == -1 ) {
		//sleep(10);
		//document.forms.pos_speichern_form.x.focus();
		alert('Scooter geparkt?');
	}
	
	//	return false;
	//} else {
	return true;
	//}
	
} // beenden_gedrueckt

	
</script>

		<script type='text/javascript'
			src='https://www.bing.com/api/maps/mapcontrol?key=AuQQA0uqR5gHSRUuM_Bu3Yhomxx0C7ZcrNc1sn7ZRHuNIHHiN2VCzxvbEdnAKc4A&callback=loadMapScenario'
			async defer></script>

		</head>
		<form name="pos_speichern_form" action="start.php" method="post" onsubmit="return beenden_gedrueckt();">
			<button type="submit" id="beenden_button"
				class="cedrics_buttons cedrics_beenden_button"
				id="absendenbutton">Fahrt Beenden</button>
			<input type="text" id="x_position" name="x" value="-1" /><br /> 
			<input type="text" id="y_position" name="y" value="-1" /><br />
			<input type="text" id="roller_id" name="id" /><br />
		</form>
		<table id="table" border=0>
			<tr>
				<td id="startzei" class="cedrics_sezp_ausblenden">Startzeit:</td>
				<td><section id="startzeit"></section></td>
			</tr>
			<tr>
				<td id="endzei" class="cedrics_sezp_ausblenden">Endzeit:</td>
				<td><section id="endzeit"></section></td>
			</tr>
			<tr>
				<td id="time" class="cedrics_sezp_ausblenden">Zeit:</td>
				<td><section id="timer"></section></td>
				<td id="prei" class="cedrics_sezp_ausblenden">Preis:</td>
				<td><section id="preis"></section></td>
			</tr>
		</table>

</body>
</html>
<?php 
sleep(4);
$x_position = $_POST['x'];
$y_position = $_POST['y'];
$roller_id = $_POST['id'];

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "rollerverleih";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE rollerverleih.rollerstandort 
SET x_position = $x_position, y_position = $y_position
WHERE id_roller_standort = $roller_id";

if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
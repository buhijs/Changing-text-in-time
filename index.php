<html>
<head>
<!-- JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
 <script>

$(document).ready(function(){
	function iegut_datus(div,lru){ // funkcija datu iegusanai - funkcija(kur,noKurienes)
		var data = {}; // datu objekts
		data.id = div.id; // lauks
		$.ajax({ // ajax metodes sakums
			url: lru,	// adrese ir padota adrese
			data: data, // dati ir iegutie dati
			success: function(data, textStatus, jqXHR){ // izvada datus uz formas
				$(div).html(data); // izvada div laukaa datus html formata
			},
			complete: function(){
				setTimeout(function(){ // uzstada laika pauzi - dati tiek atjaunoti pec 3s laika posma
					this.dat = Math.floor(Math.random() * 6);
					//console.log(dat);

					iegut_datus(div,"./sendCode.php?dataa="+dat);

				}, 6000);
			}
		});
	}

iegut_datus("#all","./sendCode.php?dataa=");

});
</script>
<div id="all"></div>

</html>
</body>
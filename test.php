<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no"/>
		<meta name="description" content="Rubik’s Cube">
		<meta name="keywords" content="Erno Rubik’s Cube">
		<link rel="stylesheet" type="text/css" href="styles/cube.css">
		<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="styles/cardinal.css">
		<link rel="stylesheet" type="text/css" href="styles/styles.css">
		<link rel="icon" type="image/png" href="media/cuber-favicon-0064x0064.png">
		<link rel="apple-touch-icon" href="media/cuber-favicon-0144x0144.png">
		<style>
			html, body, #container{
				margin: 0px;
				padding: 0px;
				width: 100%;
				height: 100%;
			}

			#container{
				background: #fff;
			}
		</style>
		<title>JG Cuber - Home Test</title>
	</head>
	<body>

		<div class="container">
			<div class="row">
				<!-- virtual cube -->
				<div class="col-lg-8">
					<div id='container' style="height: 100vh;"></div>
				</div>	
				<div class="col-lg-4">
					<center>
						<h1 class="lang" key="title">JANJI CUBE SOLVING</h1> <!-- class="header" was taken out to accomodate lang change -->
						<!-- navigation bar -->
						<div id="page links">
							<div class="dropdown">
					            <button class="dropbtn"><a href="#">HOME</a></button>
					        </div>

					        <div class="dropdown">
					            <button class="dropbtn"><a href="#">MODES</a></button>
					              <div class="dropdown-content">
					                <a href="modes/solver.php" >Janji Solver</a>
					                <a href="modes/learn.php" >Learn to solve</a>
					                <a href="modes/free.php" >Free solve</a>
					              </div>
					        </div>

					        <div class="dropdown">
					            <button class="dropbtn"><a href="#">ALGORITHMS</a></button>
					              <div class="dropdown-content">
					                <a href="algorithms/algorithms.php" target="_blank">Algorithm Page</a>
					                <a href="#">Help</a>
					              </div>
					        </div>

					        <div class="dropdown">
					          <button class="dropbtn"><a href="#">ABOUT JANJI SOLVER</a></button>
					            <div class="dropdown-content">
					              <a href="#">How it works</a>
					              <a href="#">Who its for</a>
					              <a href="#">About Janji</a>
					            </div>
					        </div>
					    </div>

					    	<!-- language switch buttons -->
					        <center>
				                <button class="translate" id="en">English</button>
				                <button class="translate" id="fr">Francais</button>
				                <button class="translate" id="sp">Espanyol</button>
												<button class="translate" id="jp">Hausawa</button>
												<button id="test"><a href="modes/learn.php" target="_blank">File</a></button>
				          </center>
				        
					    <!-- message body -->
				        <p class="lang" key="message">Click and drag on the Virtual Rubiks cube to Scramble or Regroup colors.</p>
				        <strong>(Best done with a mouse)</strong><br><br>
				        <div>
				        	Select a mode of play.<br><br>
				        	<li><button class="dropbtn"><a href="modes/solver.php">Janji Solver</a></button>(Demo Rubik's cube solver)<br></li>
				        	<li><button class="dropbtn"><a href="modes/learn.php">Learn to Solve</a></button> Rubik's cube<br></li>
				        	<li>Or Show of your solving skills in the <button class="dropbtn"><a href="modes/free.php">Free Solve</a></button> environment.<br><br></li>
						</div>
				  </center>
				</div>
			</div>
		</div>
		
		<!-- javascript -->
		<script type="text/javascript" src="js/jquery.js"></script>
  		<script type="text/javascript" src="js/responsivevoice.js"></script>
		<script src='js/cube/cuber.min.js'></script>
		<script src='js/photon.js'></script>
		<script src='js/jg.js'></script>
		<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
		<script type="text/javascript" src="/js/jquery-1.11.3.min.js"></script>
		
		<script>
			var container 	= document.querySelector( '#container' ),
				cube 		= new ERNO.Cube();
				light 		= new Photon.Light( 10, 0, 100 );
			container.appendChild( cube.domElement );
		</script>

		<script type="text/javascript">
			function googleTranslateElementInit() {
			  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
			}
		</script>

<script type="text/javascript">
    var arrLang = {
      'en': {
        'title': "JANJI CUBE SOLVING",
        'message': "Click and drag on the Virtual Rubiks cube to Scramble or Regroup colors."
      },
      'fr': {
        'title': "JANJI CUBE DE RÉSOLUTION",
        'message': "Clicke le dragee au virtuale rubik cubee scarmlee au regroupee coloree."
      },
      'sp': {
        'title': "JANJI CUBO DE RESOLUCIÓN",
        'message': "Haga clic para ampliar el cubo de Rubiks a los colores Scramble o Reagrupar."
      },
      'jp': {
        'title': "JANJI MAGANIN CUBE",
        'message': "Danna kuma ja a kan Shirye-shiryen rubutun na Rubutun na Rubiks zuwa Scramble ko Sauya launuka."
      },
      
    };

    $(function(){

      $('.translate').click(function(){
        var lang = $(this).attr('id');

          $('.lang').each(function(index,element){
            $(this).text(arrLang[lang][$(this).attr('key')]);
          });
      });
    });
</script>
	</body>
</html>

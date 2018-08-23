<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="Vergil D. Kelley">

  <!--<link href="css/styles.css" type="text/css" rel="stylesheet"/>-->

   <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>-->

    
</head>
	<title>Virgie</title>

	<style>

		body{
			color:#fff;
			font-family: 'Nunito Semibold', sans-serif;
			text-align: center;
			margin:0;
			padding: 0;
		}

		h3{
			position: absolute;
			top:15%;
			left:50%;
			transform: translate(-50%, -50%);
			font-size: 3rem;
			z-index: 3;
			color: #fff;
		}

		#day{
			position: absolute;
			top:52%;
			left:50%;
			transform: translate(-50%, -50%);
			font-size: 3.5rem;
			z-index: 3;
			color: #fff;
		}

		h1{
			position: absolute;
			top:30%;
			left:50%;
			transform: translate(-50%, -50%);
			font-size: 6rem;
			font-style: italic;
			z-index: 3;
			color: #fff;
		}

		#lp-overlay{
			position: absolute;
			background-color: rgba(0, 0, 0, 0.5);
  			background-size: cover;
  			top: 0;
  			bottom: 0;
  			height: 100%;
  			width: 100vw;
  			z-index: 2;
		}
		
		#wrapper{
			grid-template-columns: repeat(6, 1fr);
			grid-auto-rows: minmax(30px, 50px);
			/*grid-gap: 10px;*/
			display: grid; 
			/*margin:0 auto;*/
			/*max-width: 260px;*/
			max-width: 25vw;
			position: relative;
			float: left;

		}

		#wrapper div{
			background: #333;
			
		}
		
		.one{
			grid-column: 1/3;
			grid-row:1/5;
		}

		.two{
			grid-column: 3/7;
			grid-row: 1/3;
		}

		.three{
			grid-column: 3/5;
			grid-row: 3/5;
		}

		.four{
			grid-column: 5/7;
			grid-row: 3/7;
		}

		.five{
			grid-column: 1/5;
			grid-row: 5/7;
		}

		/*#wrapper{
			transform: rotateZ(45deg) scale(0.3);
		}*/

		.pic {
			height: 100%;
			width: 100%;
		}

	/*****************************wrapper2******************************/
		#wrapper2{
			grid-template-columns: repeat(6, 1fr);
			grid-auto-rows: minmax(30px, 50px);
			/*grid-gap: 10px;*/
			display: grid; 
			/*margin:0 auto;*/
			/*max-width: 260px;*/
			max-width: 25vw;
			position: relative;
			float: left;
		}

		#wrapper2 div{
			background: #333;
			
		}
		
		.one{
			grid-column: 1/3;
			grid-row:1/5;
		}

		.two{
			grid-column: 3/7;
			grid-row: 1/3;
		}

		.three{
			grid-column: 3/5;
			grid-row: 3/5;
		}

		.four{
			grid-column: 5/7;
			grid-row: 3/7;
		}

		.five{
			grid-column: 1/5;
			grid-row: 5/7;
		}

		/*#wrapper{
			transform: rotateZ(45deg) scale(0.3);
		}*/

		.pic {
			height: 100%;
			width: 100%;
		}


		/************************wrapper3*********************************/
		#wrapper3{
			grid-template-columns: repeat(6, 1fr);
			grid-auto-rows: minmax(30px, 50px);
			/*grid-gap: 10px;*/
			display: grid; 
			/*margin:0 auto;*/
			/*max-width: 260px;*/
			max-width: 25vw;
			position: relative;
			float: left;
		}


		#wrapper3 div{
			background: #333;
			
		}
		
		.one{
			grid-column: 1/3;
			grid-row:1/5;
		}

		.two{
			grid-column: 3/7;
			grid-row: 1/3;
		}

		.three{
			grid-column: 3/5;
			grid-row: 3/5;
		}

		.four{
			grid-column: 5/7;
			grid-row: 3/7;
		}

		.five{
			grid-column: 1/5;
			grid-row: 5/7;
		}

		/*#wrapper{
			transform: rotateZ(45deg) scale(0.3);
		}*/

		.pic {
			height: 100%;
			width: 100%;
		}

		/*******************************wrapper4**************************/
		#wrapper4{
			grid-template-columns: repeat(6, 1fr);
			grid-auto-rows: minmax(30px, 50px);
			/*grid-gap: 10px;*/
			display: grid; 
			/*margin:0 auto;*/
			/*max-width: 260px;*/
			max-width: 25vw;
			position: relative;
		}

		#wrapper4 div{
			background: #333;
			
		}
		
		.one{
			grid-column: 1/3;
			grid-row:1/5;
		}

		.two{
			grid-column: 3/7;
			grid-row: 1/3;
		}

		.three{
			grid-column: 3/5;
			grid-row: 3/5;
		}

		.four{
			grid-column: 5/7;
			grid-row: 3/7;
		}

		.five{
			grid-column: 1/5;
			grid-row: 5/7;
		}

		/*#wrapper{
			transform: rotateZ(45deg) scale(0.3);
		}*/

		.pic {
			height: 100%;
			width: 100%;
		}

		footer{
			color:#fff;
			background-color: #000;
			text-align: center;
			font-size: 15px;
			padding:5px;
			width: 100vw;
		}

		a{
			text-decoration: none
			color:#fff;
		}
	</style>
</head>
<body>
			<div id="lp-overlay"></div>
			<h3>National</h3>
			<h1>Gray Hair</h1>
			<p id="day">Day</p>

			<!---------------------------top section------------------------------>
			<div id="wrapper">

			<div class="one"><img class="pic" src="img/longgrey2.jpg"></div>

			<div class="two"><img class="pic" src="img/Straight-hair.jpg"></div>

			<div class="three"><img class="pic" src="img/longgrey.jpg"></div>

			<div class="four"><img class='pic' src="img/v-Pierce2.jpg"></div>

			<div class="five"><img class="pic" src="img/curlygrey.jpg"></div>
		</div>
			


			<!--<input type="checkbox">-->
				
			<div id="wrapper2">

			<div class="one"><img class="pic" src="img/alphaball.jpg"></div>

			<div class="two"><img class="pic" src="img/Arnettame.jpg"></div>

			<div class="three"><img class="pic" src="img/bwphoto.jpg"></div>

			<div class="four"><img class='pic' src="img/crimped.jpg"></div>

			<div class="five"><img class="pic" src="img/friends.jpg"></div>
		</div>

			<div id="wrapper3">

			<div class="one"><img class="pic" src="img/curly3.jpg"></div>

			<div class="two"><img class="pic" src="img/longhair2.jpg"></div>

			<div class="three"><img class="pic" src="img/purplesweater.jpg"></div>

			<div class="four"><img class='pic' src="img/VirgieGregory.jpg"></div>

			<div class="five"><img class="pic" src="img/ifyou50.jpg"></div>
			</div>


			<!--<input type="checkbox">-->
				
			<div id="wrapper4">

			<div class="one"><img class="pic" src="img/BeautifulGray.jpg"></div>

			<div class="two"><img class="pic" src="img/medanny.jpg"></div>

			<div class="three"><img class="pic" src="img/Memom.jpg"></div>

			<div class="four"><img class='pic' src="img/NYEface.jpg"></div>

			<div class="five"><img class="pic" src="img/ggme.jpg">
			</div>
		</div>
		<!---------------------------bottom section-------------------------------->
		<div id="wrapper">

			<div class="one"><img class="pic" src="img/BeautifulGray.jpg"></div>

			<div class="two"><img class="pic" src="img/medanny.jpg"></div>

			<div class="three"><img class="pic" src="img/Memom.jpg"></div>

			<div class="four"><img class='pic' src="img/NYEface.jpg"></div>

			<div class="five"><img class="pic" src="img/ggme.jpg">
			</div>
		</div>

		<div id="wrapper2">

			<div class="one"><img class="pic" src="img/curly3.jpg"></div>

			<div class="two"><img class="pic" src="img/longhair2.jpg"></div>

			<div class="three"><img class="pic" src="img/purplesweater.jpg"></div>

			<div class="four"><img class='pic' src="img/VirgieGregory.jpg"></div>

			<div class="five"><img class="pic" src="img/ifyou50.jpg"></div>
			</div>

			<div id="wrapper3">

			<div class="one"><img class="pic" src="img/alphaball.jpg"></div>

			<div class="two"><img class="pic" src="img/Arnettame.jpg"></div>

			<div class="three"><img class="pic" src="img/bwphoto.jpg"></div>

			<div class="four"><img class='pic' src="img/crimped.jpg"></div>

			<div class="five"><img class="pic" src="img/friends.jpg"></div>
		</div>

		<div id="wrapper4">

			<div class="one"><img class="pic" src="img/longgrey2.jpg"></div>

			<div class="two"><img class="pic" src="img/Straight-hair.jpg"></div>

			<div class="three"><img class="pic" src="img/longgrey.jpg"></div>

			<div class="four"><img class='pic' src="img/v-Pierce2.jpg"></div>

			<div class="five"><img class="pic" src="img/curlygrey.jpg"></div>
		</div>



		

		<footer>
			<p><a href="https://vergilkellley.github.io/" target="_blank">Vergil Kelley Web Design</a> &copy; 2018</p>
		</footer>
	
			
</body>
</html>
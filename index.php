<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<style type="text/css">
			h1, h2, h3, h4, h5, h6, p {
				margin: 0;
				padding: 0;
			}
	
			h1#title {
				font-size: 4em;
			}

			#title-block {
				text-align: center;
				margin-top: 50px;
			}
			
			#title-block h1 {
				color: #0066cc;
			}
			
			#browser-screenshots {
				padding-top: 70px;
				width: 75%;
				margin: 0 auto;
			}

			#browser-screenshots img {
				width: 50%;
				float: left;
				margin-top: 50px;
			}

			#browser-screenshots::after {
				content: '';
				display: block;
				clear: both;
			}

			#browser-screenshots img.main {
				width: 60%;
				margin-left: -30%;
				margin-right: -50%;
				margin-top: -10px;
				position: relative;
			}

			p#download-text {
				text-align: center;
			}
		</style>
	</head>
	<body>
		<div id="title-block">
			<h1 id="title">Bunting Browser</h1>
			<h3>The worlds most unfavorate browser.</h3>
		</div>
		
		<div id="browser-screenshots">
			<img src="img/screenshots/screenshot1.png">
			<img class="main" src="img/screenshots/screenshot2.png">
			<img src="img/screenshots/screenshot3.png">
		</div>	

		<p id="download-text"><br><br><a href="https://github.com/sambunting/BuntingBrowser/archive/master.zip">DOWNLOAD NOW!!</a><br><br><small>I'll make a proper download button soon. Promise.</small></p>
	</body>
</html>
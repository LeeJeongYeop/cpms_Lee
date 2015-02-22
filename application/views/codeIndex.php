<!doctype html>
<html>
<head>
	<title>CODE FACTORIAL</title>
	<meta charset="UTF-8">
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script>

		var cadi=false;
		var cadiw=false;
		var cadib=false;
		var cadie=false;
		$(document).ready(function(){
			$('#cadi').hide();
			$('#cadiw').hide();
			$('#cadib').hide();
			$('#cadie').hide();
			var middle=(screen.width-$('#login').width())/2;
			$('#login,#logo').css("left",middle+"px");
			var fMiddle=(screen.width-$('#footer').width())/2;
			$('#footer').css("left",fMiddle+"px");
			$('#header').css("min-width",screen.width+"px");

			$('body').click(function(event){
				
				if(event.target==this){

					$('#cadi').hide();
					$('#cadiw').hide();
					$('#cadib').hide();
					$('#cadie').hide();
					$('#cadiLogo').show();
					$('#cadiwLogo').show();
					$('#cadibLogo').show();
					$('#cadieLogo').show();
					cadi=false;
					cadiw=false;
					cadib=false;
					cadie=false;
					
				}
			
			})
			


		})
		function mOver(target){

			$('#'+target).show();
			$('#'+target+'Logo').hide();
		}
		function mOut(target){

			if((target=='cadi') && cadi){

				return;
			}
			else if((target=='cadiw') && cadiw){
				
				return;
			}
			if((target=='cadib') && cadib){
				
				return;
			}
			if((target=='cadie') && cadie){

				return;
			}
			else{
				$('#'+target).hide();
				$('#'+target+'Logo').show();
				
			}
			

		}
		
		function fixed(target){
			cadi=false;
			cadiw=false;
			cadib=false;
			cadie=false;
			if(target=='cadi'){
				$('#cadiw').hide();
				$('#cadiwLogo').show();
				$('#cadib').hide();
				$('#cadibLogo').show();
				$('#cadie').hide();
				$('#cadieLogo').show();
				cadi=true;
			}
			else if(target=='cadiw'){
				$('#cadi').hide();
				$('#cadiLogo').show();
				$('#cadib').hide();
				$('#cadibLogo').show();
				$('#cadie').hide();
				$('#cadieLogo').show();
				cadiw=true;
			}
			else if(target=='cadib'){
				$('#cadi').hide();
				$('#cadiLogo').show();
				$('#cadiw').hide();
				$('#cadiwLogo').show();
				$('#cadie').hide();
				$('#cadieLogo').show();
				cadib=true;
			}
			else{
				$('#cadi').hide();
				$('#cadiLogo').show();
				$('#cadiw').hide();
				$('#cadiwLogo').show();
				$('#cadib').hide();
				$('#cadibLogo').show();
				cadie=true;
			}



		}


	</script>
	<link rel='stylesheet' href='http://fonts.googleapis.com/earlyaccess/nanumgothic.css'>
	<link rel="stylesheet" hrdf="./style.css">
	<style>

		body{
			background:rgb(26, 26, 26);
			font-family: 'Nanum Gothic', sans-serif;
			color:gray;
		}
		#header{
			margin:-8px;
			background:rgb(26, 26, 26);
			border-bottom:2px solid white;
		}
		#nav{
			position:absolute;
			min-width:1300px;
			
		}
		#login{
			width:1200px;
			position:absolute;
			top: 200px;
		}
		#login li{
			padding-top:75px;
		}
		#logo{
			width:1200px;
			position:absolute;
			top: 200px;
		}

		#nav ul li{

			width:270px;
			height:200px;
			list-style:none;
			float:left;
			color:white;
			border-radius:50px;
			margin:5px;
			

		}
		#nav ul li:hover{
			background:rgba(63, 55, 55, 0.72);
			cursor:hand;
			cursor:pointer;
			color:white;
		}
		
		#footer{
			position:absolute;
			top:600px;
			width: 1300px;

		}

	</style>
</head>
<body>
	<div id="header">
		<img src="/assets/image/codefactorial.jpg" alt="codefactorial">
	</div>
	
	<div id="nav">
		<div id="logo" align="center">
			<ul>
				<li><div id="cadiLogo"><img src="/assets/image/cadi.jpg"><br>CONVERGGENCE APP DEVELOPMENT CLUB</div></li>
				<li><div id="cadiwLogo"><img src="/assets/image/cadi-w.jpg"><br>WEB DEVELOPMENT SHORT PROJECT CLUB</div></li>
				<li><div id="cadibLogo"><img src="/assets/image/cadi-b.jpg"><br>BASIC LANGUAGE SHORT STUDY CLUB</div></li>
				<li><div id="cadieLogo"><img src="/assets/image/cadi-e.jpg"><br>EMBEDDED I.O.T CLUB</div></li>
			</ul>
		</div>
		<div id="login" align="center">
			<ul>
				<li onmouseover="mOver('cadi')" onmouseout="mOut('cadi')" onclick="fixed('cadi')">
					<div id="cadi" >
						<form action="#" method="post" id="cadiForm">
							<table>
								<tr>
									<th colspan="2" align="center">CADI</th>
								</tr>
								<tr>
									<th>ID</th>
									<td><input type="text" name="id"></td>
								</tr>
								<tr>
									<th>PW</th>
									<td><input type="password" name="pw"></td>
								</tr>
								<tr>
									<td colspan="2" align="center"><input type="submit" value="LOG-IN"></td>
								</tr>
							</table>
						</form>
					</div>
				</li>

				<li onmouseover="mOver('cadiw')" onmouseout="mOut('cadiw')"  onclick="fixed('cadiw')">
					<div id="cadiw">
						<form action="code/login" method="post">
							<table>
								<tr>
									<th colspan="2" align="center">CADI-W</th>
								</tr>
								<tr>
									<th>ID</th>
									<td><input type="text" name="id"></td>
								</tr>
								<tr>
									<th>PW</th>
									<td><input type="password" name="pw"></td>
								</tr>
								<tr>
									<td colspan="2" align="center"><input type="submit" value="LOG-IN"></td>
								</tr>
							</table>
						</form>
					</div>
				</li>
				<li onmouseover="mOver('cadib')" onmouseout="mOut('cadib')" onclick="fixed('cadib')">
					<div id="cadib" >
						<form action="#" method="post">
							<table>
								<tr>
									<th colspan="2" align="center">CADI-B</th>
								</tr>
								<tr>
									<th>ID</th>
									<td><input type="text" name="id"></td>
								</tr>
								<tr>
									<th>PW</th>
									<td><input type="password" name="pw"></td>
								</tr>
								<tr>
									<td colspan="2" align="center"><input type="submit" value="LOG-IN"></td>
								</tr>
							</table>
						</form>
					</div>
				</li>
				<li onmouseover="mOver('cadie')" onmouseout="mOut('cadie')"  onclick="fixed('cadie')">
					<div id="cadie">
						<form action="#" method="post">
							<table>
								<tr>
									<th colspan="2" align="center">CADI-E</th>
								</tr>
								<tr>
									<th>ID</th>
									<td><input type="text" name="id"></td>
								</tr>
								<tr>
									<th>PW</th>
									<td><input type="password" name="pw"></td>
								</tr>
								<tr>
									<td colspan="2" align="center"><input type="submit" value="LOG-IN"></td>
								</tr>
							</table>
						</form>
					</div>
				</li>
			</ul>
		</div>
		
	</div>
	<div id="footer" align="center">
		
		CADI Project Management SNS<br>
		member : Gloria YG TOM Y<BT>

	</div>
</body>

</html>
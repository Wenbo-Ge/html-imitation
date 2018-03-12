<!DOCTYPE html>
<html>
<head>
	<title>HTML Practice</title>
	<style type="text/css">
		*{
			padding:0;
			margin: 0;
		}
		.main {
			width: 100vw;
			height:100vh;
			background-image: url('2.png');
			background-size: cover;
			background-position: center;
		}
		.mengban {
			width: 100vw;
			height: 100vh;
			position: absolute;
			top: 0;
			left: 0
			background-color:black;
			opacity: 0.3;
		}
		.container {
			width: 70%;
			margin:0 auto;
			position: relative;
		}
		.pencil { 
			position: absolute;
			top: 20px;
			left: 0px;
		}
		.content {
			position: absolute;
			top: 50vh;
			left: 0;
			color: white;
			margin-top: -4.5rem

		}
		.content h2 {
			font-size: 2rem;
		}
		.content p {
			font-size: 1rem;
		}
		/*.test {
			background-color: blue;
			position: absolute;
			top: 50vh;
			left: 50%;
			width: 100px;
			height: 100px;
			margin-top: -50px;
			margin-left: -50px;
		}*/
	</style>
</head>
<body>
	<div class="main">
		<div class="container">
			<img src="1.png" alt="pencil btn" width="70" class="pencil">

			<div class="test">
				
			</div>

			<div class="content">
				<h2>
					A PASSIONATE PIXEL PUNCHING PROBLEM SOLVING PERFECTIONIST
				</h2>
				<p>The Design & Art Direction of Brad James.
				Complete website coming soon.
				</p>
			</div>
		</div>
	</div>
	<div class="mengban"></div>
</body>
</html>
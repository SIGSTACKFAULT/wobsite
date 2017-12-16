<!doctype html>
<html>
<head>
	<title>BREAK THE NET</title>
	<style>
		body {
			background: black;
			text-align: center;
			rot: 13;
		}
		#box {
			border: 3px solid red;
			display: inline-block;
			color: red;
			padding: 10px;
			font-family: Futura,  monospace;
			font-size: 2em;
			font-weight: bold;
			position: absolute;
			  top: 40%;
			  left: 50%;
			min-height: 1.25em;
			min-width: 1em;
			max-width: 40%;
			transform: translate(-50%, -40%);
		}
		#actual {
			color: grey;
			position: absolute;
			bottom: 5px;
			text-align: center;
			width: 99%;
			font-size: 8px;
		}
		#actual a {
			color: grey;
		}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
	<script>
		var n=0,p,I,V = [
			"#SAVENETNEUTRALITY",
			"#STOPTHEFCC"
		];
		function W(s) {
			var S=s.split(""),i=0,tmp="";
			I = setInterval(function() {
				tmp += S[i++]
				if(S[i] == ' '){
					tmp += S[i++]
				}
				p.html(tmp);
				if(i>=S.length) clearInterval(I);
			}, 100);
		}
		$(document).ready(function(){
			p = $("#box");
			W("BREAK THE NET");
			setInterval(function(){
				p.html("");
				n++; n = n%2;
				clearInterval(I);
				W(V[n]);
			}, 7000);
		});
	</script>
</head>

<body>
	<p id="box">BREAK THE NET</p>
	<p id="actual"><a href="_index.php">Actual website</a></p>
</body>

<!DOCTYPE html>
<html>
<head>
	<title>layout</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
	label{
		color: #DB1528;
		font-style: italic;
	}
	.subjudul{
		text-align: center;
		font-weight: bolder;

	}
	body {
		background-color: #92a8d1;
	}

	#menu
	{
		margin-right: 40px !important;
		float:right;
	}

	#rumah
	{
		background-image: url(home.png);
		display: block;
		width: 23px;
		height: 23px;
		background-repeat: no-repeat;
	}

</style>
<!--Start of Zendesk Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?66AyPGTFC7gao4wx8TQh5hwBSqsxqiq6";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zendesk Chat Script-->
</head>
<body>
	<div class="wrap">
		<div class="header">			
			<h1>Judul Halaman</h1>
			<p>Latihan membuat layout sederhana using CSS</p>
		</div>
		<div class="menu">
			<ul>
				<li><a href="index.php" id="rumah"></a></li>
				<li><a href="#">Menu2</a></li>
				<li><a href="#">Menu3</a></li>
				<li><a href="#">Menu4</a></li>
				<li><a href="#">Menu5</a></li>
				<li><a href="logout.php">logout</a></li>	
				<p class="subjudul">MENU</p>			
			</ul>

		</div>
		
		
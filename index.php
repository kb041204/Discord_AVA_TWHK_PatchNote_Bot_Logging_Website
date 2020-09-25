<HTML>
<HEAD>
<TITLE>Discord AVA BOT Log</TITLE>
<meta name="viewport" content="width=device-width, initial-scale=1">
<STYLE>
body {
	background-color: black;
	padding: 10px;
}
h1, p {
	color: white;
}
.log_entries {
	border: 5px solid DarkGrey;
	display: inline-block;
	padding: 15px;
}
.log_title {
	color: white;
	font-size: 1.5em;
}
.log {
	font-family: "Lucida Console", Courier, monospace;
	color: white;
}
.log_normal {
	color: Chartreuse;
}
.log_error {
	color: red;
}
.log_posted {
	color: cyan;
}
.links {
	padding-top: 15px;
}
.links a:link, a:visited {
	text-align: center;
	color: black;
	display: inline-block;
	text-decoration: none;
	background-color: Chartreuse;
	padding: 10px 24px;
}
.links a:hover, a:active {
	text-decoration: none;
	background-color: #66cc00;
}
span.time {
	margin-left: 30px;
}
span.log_time {
	color:LightGrey;
	font-size:1.15em;
}
@media only screen and (max-width: 1440px) {
	body {
		padding: 5px;
	}
	h1 {
		font-size: 1.25em;
	}
	p {
		font-size: 0.75em;
	}
	.log_entries {
		border: 2px solid DarkGrey;
		padding: 5px;
	}
	.log_title {
		font-size: 1em;
	}
	.log {
		font-size: x-small;
	}
	.links a {
		font-size: small;
	}
	.links a:link, a:visited {
		padding: 5px 12px;
	}
	span.log_time {
		font-size: 0.75em;
	}
}
</STYLE>
<script type="text/Javascript">
function AutoRefresh() {
	setTimeout("location.reload(true);", 60000);
}
</script>
</HEAD>
<BODY onload = "JavaScript:AutoRefresh();">
<H1>AVA TW/HK Update News Bot log entry</H1>
<P>This page reloads itself every 60 seconds</P>
<div class="log_entries">
<span class="log_time">Time shown here are all in GMT, GMT time now: <span id="time_UTC">Please enable JavaScript to see this line</span></span><br><br>
<span class="log_title">Last line of log</span><br>
<span id="last_line" class="log">Please enable javascript to see this line</span><br><br>
<span class="log_title">All logs</span><br>
<div class="log">
<?php
	$path = "/home/kingshade_server/Discord_AVA_TWHK_PatchNote_Bot/log.txt";
	$file = fopen($path, "r");
	if ($file) {
		while(($line = fgets($file)) !== false) {
			if(strpos($line, '[Error]') !== false) {
				echo "<div class='log_error'>" . $line . "</div>";
			} else if(strpos($line, 'Posted in discord:') !== false or strpos($line, 'Edited post in discord:') !== false) {
				echo "<div class='log_posted'>" . $line . "</div>";
			} else {
				echo "<div class='log_normal'>" . $line . "</div>";
			}
		}

		//Retrieve last log
		$last_line = trim(implode("", array_slice(file($path), -1)));
		echo "<script>document.getElementById('last_line').innerHTML = \"" . $last_line . "\";</script>";
		fclose($file);
	}
?>
</div>
</div>
<BR>
<P>GMT now: <span id="time_UTC_bottom" class="time">Please enable JavaScript to see this line</span></P>
<P>Your time now: <span id="your_time" class="time">Please enable JavaScript to see this line</span></P>
<script type="text/JavaScript">
var date = new Date();
document.getElementById('time_UTC').innerHTML = date.toUTCString();
document.getElementById('time_UTC_bottom').innerHTML = date.toUTCString();
document.getElementById('your_time').innerHTML = date.toString();
</script>
<div class="links">
<a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_BLANK">GCP account information</A>
</div>
<div style="border: 2px Solid Chartreuse; display: inline-block; margin-top: 10px;">
<img src="duck.png">
</div>
</BODY>
</HTML>

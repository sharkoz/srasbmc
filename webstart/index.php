<html>
<head>
<title>XBMC start/stop</title>
</head>
<body bgcolor="black" text="white">
<center>
<img style="max-width: 100%;" src="./xbmc.png">
<p><h1>XBMC current status :
<?
if(isset($_GET["action"])) {
if ($_GET["action"] == "stop") exec ('sudo /sbin/initctl stop xbmc');

if ($_GET["action"] == "start") exec ('sudo /sbin/initctl start xbmc');
}
$status = exec ('sudo /sbin/initctl status xbmc');
if (strpos($status, "running") == 11)
    echo '<font color="green">Running</font></h1></br></br><a href="index.php?action=stop"><img style="max-width: 50%;" src="1.png" onmouseover="this.src=\'0.png\';" onmouseout="this.src=\'1.png\';" /></a>';
else
    echo '<font color="red">Stopped</font></h1></br></br><a href="index.php?action=start"><img style="max-width: 50%;" src="0.png" onmouseover="this.src=\'1.png\';" onmouseout="this.src=\'0.png\';" /></a>';
?></p>

</body></html>

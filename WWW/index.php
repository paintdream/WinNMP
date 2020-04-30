<?php
    /**


    DO NOT MODIFY THIS FILE!
    This file will be overwritten when WT-NMP is updated!
    /////////////////////////////////////////////////////


    Customizing the TOOLS menu:
    ///////////////////////////

    create a new file 'admin.php' in WWW dir. A link will be shown in the Tools menu pointing to it.
    create a new file 'admin.html' in WWW dir with content like: <li><a href="tools/link"><B>Custom tool 1</B></a></li> <li><a href="link/to/tool2">Custom Tool 2</a></li>
    You can find examples of this 2 files in WT-NMP/src



    */







    $projectsListIgnore = array ('.','..','tools','images');



    $info=$tools=$extra=$extraCss='';






    //DO NOT MODIFY THIS FILE!
    //This file will be overwritten when WT-NMP is updated!
    ///////////////////////////////////////////////////////



    // images
    $pngFolder = <<< EOFILE
iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAA3NCSVQICAjb4U/gAAABhlBMVEX//v7//v3///7//fr//fj+/v3//fb+/fT+/Pf//PX+/Pb+/PP+/PL+/PH+/PD+++/+++7++u/9+vL9+vH79+r79+n79uj89tj89Nf889D88sj78sz78sr58N3u7u7u7ev777j67bL67Kv46sHt6uP26cns6d356aP56aD56Jv45pT45pP45ZD45I324av344r344T14J734oT34YD13pD24Hv03af13pP233X025303JL23nX23nHz2pX23Gvn2a7122fz2I3122T12mLz14Xv1JPy1YD12Vz02Fvy1H7v04T011Py03j011b01k7v0n/x0nHz1Ejv0Hnuz3Xx0Gvz00buzofz00Pxz2juz3Hy0TrmznzmzoHy0Djqy2vtymnxzS3xzi/kyG3jyG7wyyXkwJjpwHLiw2Liw2HhwmDdvlXevVPduVThsX7btDrbsj/gq3DbsDzbrT7brDvaqzjapjrbpTraojnboTrbmzrbmjrbl0Tbljrakz3ajzzZjTfZijLZiTJdVmhqAAAAgnRSTlP///////////////////////////////////////8A////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////9XzUpQAAAAlwSFlzAAALEgAACxIB0t1+/AAAAB90RVh0U29mdHdhcmUATWFjcm9tZWRpYSBGaXJld29ya3MgOLVo0ngAAACqSURBVBiVY5BDAwxECGRlpgNBtpoKCMjLM8jnsYKASFJycnJ0tD1QRT6HromhHj8YMOcABYqEzc3d4uO9vIKCIkULgQIlYq5haao8YMBUDBQoZWIBAnFtAwsHD4kyoEA5l5SCkqa+qZ27X7hkBVCgUkhRXcvI2sk3MCpRugooUCOooWNs4+wdGpuQIlMDFKiWNbO0dXTx9AwICVGuBQqkFtQ1wEB9LhGeAwDSdzMEmZfC0wAAAABJRU5ErkJggg==
EOFILE;
    $pngFolderGo = <<< EOFILE
iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAJISURBVDjLpZPLS5RhFIef93NmnMIRSynvgRF5KWhRlmWbbotwU9sWLupfCBeBEYhQm2iVq1oF0TKIILIkMgosxBaBkpFDmpo549y+772dFl5bBIG/5eGch9+5KRFhOwrYpmIAk8+OjScr29uV2soTotzXtLOZLiD6q0oBUDjY89nGAJQErU3dD+NKKZDVYpTChr9a5sdvpWUtClCWqBRxZiE/9+o68CQGgJUQr8ujn/dxugyCSpRKkaw/S33n7QQigAfxgKCCitqpp939mwCjAvEapxOIF3xpBlOYJ78wQjxZB2LAa0QsYEm19iUQv29jBihJeltCF0F0AZNbIdXaS7K6ba3hdQey6iBWBS6IbQJMQGzHHqrarm0kCh6vf2AzLxGX5eboc5ZLBe52dZBsvAGRsAUgIi7EFycQl0VcDrEZvFlGXBZshtCGNNa0cXVkjEdXIjBb1kiEiLd4s4jYLOKy9L1+DGLQ3qKtpW7XAdpqj5MLC/Q8uMi98oYtAC2icIj9jdgMYjNYrznf0YsTj/MOjzCbTXO48RR5XaJ35k2yMBCoGIBov2yLSztNPpHCpwKROKHVOPF8X5rCeIv1BuMMK1GOI02nyZsiH769DVcBYXRneuhSJ8I5FCmAsNomrbPsrWzGeocTz1x2ht0VtXxKj/Jl+v1y0dCg/vVMl4daXKg12mtCq9lf0xGcaLnA2Mw7hidfTGhL5+ygROp/v/HQQLB4tPlMzcjk8EftOTk7KHr1hP4T0NKvFp0vqyl5F18YFLse/wPLHlqRZqo3CAAAAABJRU5ErkJggg==
EOFILE;

    $pngPlugin = <<< EOFILE
iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsSAAALEgHS3X78AAAABGdBTUEAALGOfPtRkwAAACBjSFJNAAB6JQAAgIMAAPn/AACA6QAAdTAAAOpgAAA6mAAAF2+SX8VGAAABmklEQVR42mL4//8/AyUYIIDAxK5du1BwXEb3/9D4FjBOzZ/wH10ehkF6AQIIw4B1G7b+D09o/h+X3gXG4YmteA0ACCCsLghPbPkfm9b5PzK5439Sdg9eAwACCEyANMBwaFwTGIMMAOEQIBuGA6Mb/qMbABBAEAOQnIyMo1M74Tgiqf2/b3gVhgEAAQQmQuKa/8ekdYMxyLCgmEYMHJXc9t87FNMAgACCGgBxIkgzyDaQU5FxQGQN2AUBUXX/vULKwdgjsOQ/SC9AAKEEYlB03f+oFJABdSjYP6L6P0guIqkVjt0DisEGAAQQigEgG0AhHxBVi4L9wqvBBiEHtqs/xACAAAIbEBBd/x+Eg2ObwH4FORmGfYCaQRikCUS7B5YBNReBMUgvQABBDADaAtIIwsEx9f/Dk9pQsH9kHTh8XANKMAIRIIDAhF9ELTiQQH4FaQAZCAsskPNhyRpkK7oBAAEEMSC8GsVGkEaYIlBghcU3gbGzL6YBAAEEJnzCgP6EYs/gcjCGKQI5G4Z9QiswDAAIIAZKszNAgAEAHgFgGSNMTwgAAAAASUVORK5CYII=
EOFILE;
    $pngWrench = <<< EOFILE
iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAA3NCSVQICAjb4U/gAAABO1BMVEXu7u7n5+fk5OTi4uLg4ODd3d3X19fV1dXU1NTS0tLPz8+7z+/MzMy6zu65ze65zu7Kysq3zO62zO3IyMjHx8e1yOiyyO2yyOzFxcXExMSyxue0xuexxefDw8OtxeuwxOXCwsLBwcGuxOWsw+q/v7+qweqqwuqrwuq+vr6nv+qmv+m7u7ukvumkvemivOi5ubm4uLicuOebuOeat+e0tLSYtuabtuaatuaXteaZteaatN6Xs+aVs+WTsuaTsuWRsOSrq6uLreKoqKinp6elpaWLqNijo6OFpt2CpNyAo92BotyAo9+dnZ18oNqbm5t4nt57nth7ntp4nt15ndp3nd6ZmZmYmJhym956mtJzm96WlpaVlZVwmNyTk5Nvl9lultuSkpKNjY2Li4uKioqIiIiHh4eGhoZQgtVKfNFdha6iAAAAaXRSTlMA//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////914ivwAAAACXBIWXMAAAsSAAALEgHS3X78AAAAH3RFWHRTb2Z0d2FyZQBNYWNyb21lZGlhIEZpcmV3b3JrcyA4tWjSeAAAAKFJREFUGJVjYIABASc/PwYkIODDxBCNLODEzGiQgCwQxsTlzJCYmAgXiGKVdHFxYEuB8dkTOIS1tRUVocaIWiWI8IiIKKikaoD50kYWrpwmKSkpsRC+lBk3t2NEMgtMu4wpr5aeuHcAjC9vzadjYyjn7w7lK9kK6tqZK4d4wBQECenZW6pHesEdFC9mbK0W7otwsqenqmpMILIn4tIzgpG4ADUpGMOpkOiuAAAAAElFTkSuQmCC
EOFILE;



    if (isset($_GET['img']))
    {
        switch ($_GET['img'])
        {
            case 'pngFolder' :
                header("Content-type: image/png");
                echo base64_decode($pngFolder);
                exit();

            case 'pngFolderGo' :
                header("Content-type: image/png");
                echo base64_decode($pngFolderGo);
                exit();

            case 'pngPlugin' :
                header("Content-type: image/png");
                echo base64_decode($pngPlugin);
                exit();

            case 'pngWrench' :
                header("Content-type: image/png");
                echo base64_decode($pngWrench);
                exit();
        }
    }



	function sanitizeDomainName($name) {
		return $name;
	}



    $curdir=dirname(__FILE__);
    $handle=opendir($curdir);
    $projects = '';
	$domainsDir=dirname(session_save_path())."/conf/domains.d";
    while ($file = readdir($handle)) {
        if ($file!='..' && $file!='.')
            if (is_dir("$curdir/$file") && !in_array($file,$projectsListIgnore)) {				
				$localVirtual=file_exists("$domainsDir/$file.conf");
				//die("$domainsDir/$file.conf =".$localVirtual);
                if ($localVirtual) $projects .= "<li><a class=\"local\" href=\"http://".sanitizeDomainName($file).".local\">$file</a></li>";
                else $projects .= '<li><a href="/'.$file.'">'.$file.'</a></li>';
            }
    }
    closedir($handle);
    if (empty($projects)) $projects = "No Projects!";



    //Custom TOOLS Menu:
    if (file_exists(__DIR__.'/admin.php')) $tools.="<li><a class='admin' href='admin.php'><b><i>Admin</i></b></a></li>";
    if (file_exists(__DIR__.'/admin.html')) $tools.=file_get_contents(__DIR__.'/admin.html');

    //Customized adminer:
    if (file_exists(__DIR__.'/tools/adminer-custom.php')) $adminer='adminer-custom';
    else $adminer='adminer';

    $phpVersion = "PHP/".PHP_VERSION;
    $nginxVersion = ucfirst($_SERVER["SERVER_SOFTWARE"]);

    $mysqlVersionC = explode(' - ',ucfirst(mysqli_get_client_info()));
    $mysqlVersionC=reset($mysqlVersionC);
    $link = @mysqli_connect("p:127.0.0.1", "root", "");
    if (!$link) $mysqlVersionS="<small>Unable to connect to server<small>";
    else {
        $mysqlVersionS="Server: ".mysqli_get_server_info($link);
        mysqli_close($link);
    }



    if (isset($_GET['phpinfo'])) {
        ob_start();
        phpinfo();
        $body = ob_get_contents();
        ob_end_clean();
        if (preg_match("/<body[^>]*>(.*)<\/body>/msi",$body,$m)) $body=$m[1];
        $extra = "<div id=\"phpinfo\">$body</div>";
        $extraCss="

        #phpinfo td, #phpinfo th, #phpinfo h1, #phpinfo h2 {font-family: sans-serif;}
        #phpinfo pre {margin: 0px; font-family: monospace;}
        #phpinfo a:link {color: #000099; text-decoration: none; background-color: #ffffff;}
        #phpinfo a:hover {text-decoration: underline;}
        #phpinfo table {border-collapse: collapse; min-width:800px;}
        #phpinfo .center {text-align: center;}
        #phpinfo .center table, #phpinfo .center hr { margin-left: auto; margin-right: auto; text-align: left;}
        #phpinfo .center th { text-align: center !important; }
        #phpinfo td, #phpinfo th { border: 1px solid #000000; vertical-align: baseline; padding: 2px; }
        #phpinfo h1 {font-size: 18px;}
        #phpinfo h2 {font-size: 16px;}
        #phpinfo .p {text-align: left;}
        #phpinfo .e {background-color: #ccccff; font-weight: bold; color: #000000; text-align:right; width: 25%; white-space:nowrap;}
        #phpinfo .h {background-color: #9999cc; font-weight: bold; color: #000000;}
        #phpinfo .v {background-color: #cccccc; color: #000000; max-width:300px; white-space:normal; word-wrap: break-word; }
        #phpinfo .vr {background-color: #cccccc; text-align: right; color: #000000;}
        #phpinfo img {float: right; border: 0px;}
        #phpinfo hr {width: 800px; background-color: #cccccc; border: 0px; height: 1px; color: #000000;} ";
    }


    function longTail($file, $numLines = 100, $reverse=false)
    {
        if (!$file) return;
        $fp = fopen($file, "r");
        $chunk = 4096;
        $fs = sprintf("%u", filesize($file));
        $max = (intval($fs) == PHP_INT_MAX) ? PHP_INT_MAX : filesize($file);
        $data='';

        for ($len = 0; $len < $max; $len += $chunk) {
            $seekSize = ($max - $len > $chunk) ? $chunk : $max - $len;

            fseek($fp, ($len + $seekSize) * -1, SEEK_END);
            $data = fread($fp, $seekSize). $data;

            if (substr_count($data, "\n") >= $numLines + 1) {
                if (preg_match("!(.*?\n){".($numLines)."}$!", $data, $match)) {
                    fclose($fp);
                    return $match[0];
                }
            }
        }
        fclose($fp);
        return $data;
    }


    function reverseLines($text) {
        $data=preg_split("/[\v\n\r]+/i",$text);
        return implode("\n",array_reverse($data));
    }

    if (isset($_REQUEST['sendmail'])) {

        $mailinfo="sendmail_path = ".ini_get('sendmail_path');

        $from=isset($_POST['from']) ? $_POST['from'] : 'wtnmp@localhost';
        $to=isset($_POST['to']) ? $_POST['to'] : '';
        $subject=isset($_POST['subject']) ? $_POST['subject'] : 'Test Email using WTNMP`s PHP + MSMTP';
        $text=isset($_POST['text']) ? $_POST['text'] : "Test Email using WTNMP`s PHP + MSMTP\n\n$mailinfo";

        if (isset($_POST['sendmail'])) {
            if (!$to) $mailinfo.="<BR><sman style='color:red;'>Error ! Invalid 'To:' email recipient</span>";
            elseif (mail($to,$subject,$text,"From: $from") ) $mailinfo.="<BR><sman style='color:green;'>Sent ! - Check wtnmp/log/msmtp.log for details</span>";
            else $mailinfo.="<BR><sman style='color:red;'>Error !</span>";
        }

        $extra .= <<< EOPAGE
  <h2>Send a test email:</h2>
<form id="form1" name="form1" method="post" action="?sendmail=1">
  <p>$mailinfo</p>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <th scope="row"><label for="from">From</label></th>
      <td><input name="from" type="text" id="from" value="$from" /></td>
    </tr>
    <tr>
      <th scope="row"><label for="to">To</label></th>
      <td><input name="to" type="text" id="to" value="$to" /></td>
    </tr>
    <tr>
      <th scope="row"><label for="subject">Subject</label></th>
      <td><input type="text" name="subject" id="subject" value="$subject" /></td>
    </tr>
    <tr>
      <th scope="row"><label for="text">Text</label></th>
      <td><textarea name="text" id="text" cols="45" rows="5">$text</textarea></td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td><input type="submit" name="sendmail" id="sendmail" value="Submit" class="button" /></td>
    </tr>
  </table>
</form>
EOPAGE;
    }

    if (isset($_GET['errorLog'])) {
        $log=ini_get('error_log');
        $extra.="<div id='errorLog'>";
        $extra.="<h2>PHP Error Log:</h2><h4>Last 50 errors from $log:</h4>";
        if (file_exists($log)) $extra.= nl2br( reverseLines( longTail($log,50) ) );
        $extra.="</div>";
    } elseif (isset($_GET['mailLog'])) {
        $log=ini_get('mail.log');
        $extra.="<div id='errorLog'>";
        $extra.="<h2>PHP Mail Log:</h2><h4>Last 30 errors from $log:</h4>";
        if (file_exists($log)) $extra.= nl2br( reverseLines( longTail($log,30) ) );
        $extra.="</div>";
        $log=dirname(ini_get('mail.log')).'/msmtp.log';
        $extra.="<div id='errorLog'>";
        $extra.="<h2>MSMTP Mail Log:</h2><h4>Last 30 errors from $log:</h4>";
        if (file_exists($log)) $extra.= nl2br( reverseLines( longTail($log,30) ) );
        $extra.="</div>";

    }


    $pageContents = <<< EOPAGE
<!DOCTYPE html><html>
<head>
	<title>WT-NMP - Wtriple Development Stack of Nginx, Mysql, Php for Windows</title>
	<meta http-equiv="Content-Type" content="txt/html; charset=utf-8" />
	<meta charset="utf-8" />
	<meta http-equiv="Content-Language" content="en" />
	<meta name="language" content="en" />
	<link rel="icon" href="tools/logo32.png" type="image/png" />
	<link rel="shortcut icon" href="tools/logo32.png" type="image/png" />


	<style type="text/css">
* {
	margin: 0;
	padding: 0;
	border: 0;
}

html {
	background: #ddd;
}
body {
	margin: 1em 8%;
	padding: 1em 3em;
	font: 80%/1.4 tahoma, arial, helvetica, lucida sans, sans-serif;
	border: 1px solid #999;
	background: #eee;
	position: relative;
	min-width:600px;
}

.utility {
	position: absolute;
	right: 4em;
	top: 145px;
	font-size: 0.85em;
}
.utility li {
	display: inline;
}

input, textarea {
	border: 1px solid #134134;
	margin: 5px;
	width: 100%;
	background: #DDD;
	padding: 1px;
}


ul {
	list-style: none;
	margin: 0;
	padding: 0;
}
#head ul li, dl ul li, #foot li {
	list-style: none;
	display: inline;
	margin: 0;
	padding: 0 0.2em;
}
ul.aliases, ul.projects, ul.tools {
	list-style: none;
	line-height: 25px;
}
ul.aliases a, ul.projects a{
	padding-left: 24px;    
	padding-bottom: 5px;
    padding-top: 5px;
	background: url(/tools/subdir.png) 0 100% no-repeat;
}

ul.projects a.local {
	background-image:url(/tools/home.png);
}
ul.tools a, ul.tools li.admin a {
    padding-right: 22px;
	background: url(index.php?img=pngWrench) right center no-repeat;
	font-weight: normal;
}
ul.aliases a, input.button, ul.tools li.admin a {
	background: url(index.php?img=pngFolderGo) 0 100% no-repeat;
}
ul.tools li.adminer a {
    background-image: url(/tools/adminer24.png);
    padding-right: 30px;
    line-height: 30px;
}
ul.tools a, ul.tools li.admin a {
	background-position: right center;
}

input.button {
    width:120px;
    cursor: pointer;
}
dl {
	margin: 0;
	padding: 0;
}
dt {
	font-weight: bold;
	text-align: right;
	width: 11em;
	clear: both;
}
dd {
	margin: -1.35em 0 0 12em;
	padding-bottom: 0.4em;
	overflow: auto;
}
h2 {
	margin: 0.8em 0 0 0;
	/*padding: 0 20 0 0px;
	background: url(index.php?img=pngPlugin) right 50% no-repeat;
	line-height: 1.6;*/
}
a {
	color: #024378;
	font-weight: bold;
	text-decoration: none;
}
a:hover {
	color: #04569A;
	text-decoration: underline;
}
#foot{
	margin-top: 1.8em;
	border-top: 1px solid #999;
	padding-top: 1em;
	font-size: 0.85em;
}
#phpinfo, #errorLog {

    margin-bottom: 1em;
    border-bottom: 1px solid #999;
    padding-bottom: 1.8em;
}

#foot th {
	text-align: right;
}
#foot a {
	font-weight: normal;
}
#foot th img {
	vertical-align:middle;
	margin-right:5px;
	margin-left:25px;
}
#foot td {
	white-space:nowrap;
}


$extraCss


</style>

</head>

<body>

    $extra
<table width="100%" border="0" cellspacing="5"><tr><td align="left" valign="top">
	<h2>My Projects</h2>
	<ul class="projects">$projects</ul>
</td><td align="right" valign="top">
	<h2>Tools</h2>
	<ul class="tools">
		<li class='adminer'><a href="tools/$adminer.php?server=localhost&username=root"><B>Adminer Database Manager</B></a></li>
        <li><a href="tools/reg.php"><B>Regular Expressions Tester</B></a></li>
        <li><a href="?phpinfo=1"><b>phpinfo()</b></a></li>
		<li><a href="?errorLog=1">PHP Error Log</a></li>
        <li><a href="?mailLog=1">PHP Mail Log</a></li>
        <li><a href="tools/xcache/"><i>PHP XCache Stats</i></a></li>
        <li><a href="?sendmail=1"><i>Test mail()</i></a></li>
		$tools
	</ul>
</td></tr></table>
	$info
<table id="foot" width="100%" border="0" cellspacing="0" cellpadding="0"><tr>
		<th><a href="http://wtriple.com/wtnmp?wtSrc=index" title="WT-NMP"><img src="tools/wtripleLogo48.png" /></a></th>
		<td><a href="http://wtriple.com/wtnmp?wtSrc=index">WT-NMP Project</a><br>
		<a href="http://wtriple.com/hosting?wtSrc=index">Managed Nginx Hosting</a><br>
		<a href="http://wtriple.com/wtcms/donate.php">Donate</a>
		</td>
		<th><a href="http://nginx.com" title="Nginx"><img src="tools/nginx32.png" /></a></th>
		<td>$nginxVersion</td>
		<th><a href="http://mysql.com" title="MySQL"><img src="tools/mysql32.png" /></a></th>
		<td>$mysqlVersionC<br \>$mysqlVersionS</td>
		<th><a href="http://php.net" title="PHP"><img src="tools/php32.png" /></a></th>
		<td>$phpVersion</td>
		<th style="width:25px;">&nbsp;</th>
</tr></table>

</body>
</html>
EOPAGE;

    echo $pageContents;
?>

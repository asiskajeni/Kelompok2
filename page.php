<!DOCTYPE html>
<html>
<head>
	<title>LPBD Sistem Informasi UNAND</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel='shortcut icon' href='themes/favicon.ico' />
    <title> :: LPBDSI :: </title>
	<link rel="stylesheet" href="themes/screen.css" type="text/css"/>
    <script type="text/javascript" src="jscripts/jquery-1.3.2.min.js"></script>
    <link rel="stylesheet" href="./page/menu/gaya.css" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="./page/menu/notifikasi.js"></script>

    
</head>

<body>
	<div id="header">
		<a href="index.php"><img src="images/logo2.png" alt="Logo"></a><nav>
        <?php include './page/menu/admin_menu.php';?>
    </nav>
	</div>
    
<div id="body">
		<div>
<div id="home"> 
      </div>
            	
    <div class="title-content">
    <div id="pencarian">
    <div class="content"> <center>
    <?php if (!empty($page)) { include($page);}?> </center>
    </div>
    </div>
				</div>
		  </div>
	  </div>
	</div>
	<div id="footer">
		<p>
			LPBDSI UNAND &copy; Copyright 2014. All rights reserved.
		</p>
	</div>
</body>

</body>
</html>
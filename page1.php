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
<script type="text/javascript" src="./page/menu/notifikasi.js"></script>
    
</head>

<body>

<div id="wrapper">
	<header>
		<h1>Laboratorium Perancangan Basis Data</h1>

	</header>
    
    <nav>
        <?php include './page/menu/admin_menu.php';?>
    </nav>
    <div class="title-content">
    <div id="pencarian">
    <div class="content">
    <?php if (!empty($page)) { include($page);}?>
    </div>
    </div>
    </div>
	<div id="footer">
	<p>Copyright &copy; LPBD SI UNAND 2014, all rights reserved.</p>
	</div>
</div>

</body>
</html>
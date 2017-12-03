<?php
ini_set('display_errors', 0);
?>
<html>
<head>
<title>Short URL - background management</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../assets/admin.css" />
<script type="text/javascript" src="../assets/admin.js"></script>
<style type="text/css">
.style2 {
	font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
}
</style>
</head>
<body>

<?php if (is_admin_login()): ?>

<div class="header"><a class="lank" href="index.php">Dasboard</a> <a href="/">Home</a>丨<a href="logout.php">Logout</a></div>
<?php
$updateurl = "https://git.karula.org/ShortUrl/update.txt";
$fh = fopen($updateurl, 'r');
$version = fread($fh, 3);
fclose($fh);
$current = SHORTURL_NUMERICVERSION;
if ($version > $current && $version !== $current) {
echo "<center><p style=\"color:green;\">A new version ShortUrl Already usable，Please go to download： <a href=\"https://github.com/CollageTomato/ShortUrl\">https://github.com/CollageTomato/ShortUrl</a></p></center><hr/>";
} 
elseif ($version < $current && $version !== $current) {
echo "<center><p style=\"color:blue;\">You are using a development version ShortUrl，We look forward to your feedback</p></center><hr/>";

}
?>
<div id="search">
<div class="search_left left">
<h2>Find the link</h2>
<form method="get" action="index.php">
	<p><span>Search by suffix：</span><input placeholder="Query by short code or custom code." type="text" name="search_alias" size="30" value="<?php echo @htmlentities($_GET['search_alias']) ?>" /></p>
	<p><span>Find by link：</span><input placeholder="Through the real part of the link you can query." type="text" name="search_url" size="30" value="<?php echo @htmlentities($_GET['search_url']) ?>" /></p>
	<p><input type="submit" value="Find" /></p>
</form>
</div>
<div class="search_right">
	<h2>Modify the link</h2>
<form method="get" action="index.php?type=up">
	<p><span>The original address is：</span><input type="text" name="old_url" placeholder="Here for the address ID" value="<?php echo @htmlentities($_GET['old_id']) ?>" /></p>
	<p><span>The new address is：</span><input type="text" name="new_url" placeholder="Fill in the new address here" value="" /></p>
	<p><input type="submit" value="Modify" /></p>
</form>
</div>
</div>
<?php endif; ?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/gallery.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
		<?php include("config.php"); ?>
	</head>
	<body>
		<div id="entirepage">
			<?php include("header.php") ?>
			<main>
				<div id="gallery">
					<h2>GALLERY</h2>
					<?php
$folder_path = 'uploadedfiles/'; //image's folder path

$num_files = glob($folder_path . "*.{JPG,jpg,gif,png,bmp}", GLOB_BRACE);

$folder = opendir($folder_path);
 
if($num_files > 0)
{
 while(false !== ($file = readdir($folder))) 
 {
  $file_path = $folder_path.$file;
  $extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));
  if($extension=='jpg' || $extension =='png' || $extension == 'gif' || $extension == 'bmp') 
  {
   ?>
            <a href="<?php echo $file_path; ?>"><img src="<?php echo $file_path; ?>"  height="100" /></a>
            <?php
  }
 }
}
else
{
 echo "the folder was empty !";
}
closedir($folder);
?>
				</div>
			</main>
			<?php include("footer.php") ?>
		</div>
	</body>
</html>


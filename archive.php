<?php
require 'include/connect.inc.php';
require 'include/core.inc.php';
require 'include/bangla.inc.php';
require 'include/myfunction.inc.php';
require 'include/time.inc.php';
require 'include/query.inc.php';



$current_file = $_SERVER['SCRIPT_NAME'];

$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


if( strpos($actual_link, '&', 0) ){
$edit_actual_link = substr ($actual_link, 0, strpos($actual_link, '&'));
}else{
$edit_actual_link = $actual_link;
}

$categoryalias_actual_link = substr ($actual_link, 0, strpos($actual_link, '='));

if($_GET['newsdate']){
$getdate = $_GET['newsdate'];

	if(isset($_GET['pageno'])){
		$pageno = $_GET['pageno'];
		
		if($pageno=='last'){
			
			$sql_catpage_art = "SELECT articles.id, articles.head, images.imagename, articles.details, articles.category, articles.publishdate, articles.modifytime FROM `articles` INNER JOIN images ON articles.id=images.articleid WHERE articles.publishdate='$getdate' AND articles.status='1' AND articles.id<4 ORDER BY articles.id DESC LIMIT 3";
			$sql_catpage_art_run = mysqli_query($conn, $sql_catpage_art);
		}else if($pageno=='1'){
			$sql_catpage_art = "SELECT articles.id, articles.head, images.imagename, articles.details, articles.category, articles.publishdate, articles.modifytime FROM `articles` INNER JOIN images ON articles.id=images.articleid WHERE articles.publishdate='$getdate' AND articles.status='1' ORDER BY articles.id DESC LIMIT 3";
			$sql_catpage_art_run = mysqli_query($conn, $sql_catpage_art);
		}else{

			//know last id of category
			$limit = ($pageno-1)*3;

			$cat_lid_sql = "SELECT * FROM articles WHERE publishdate='$getdate' ORDER BY id DESC LIMIT $limit";
			$cat_lid_sql_run = $conn->query($cat_lid_sql);
			while($cat_lid_row = mysqli_fetch_array($cat_lid_sql_run)){
				$cat_last_id = $cat_lid_row['id'];
			}
			
			 $cat_last_id;

			// $lid_sql = "SELECT * FROM articles WHERE category=$getcategory ORDER BY id DESC";
			// $lid_sql_run = $conn->query($lid_sql);
			// $lid_row = mysqli_fetch_row($lid_sql_run);
			
			// $lid = $lid_row[0];

			// $showartno = $lid-(($pageno-1)*3);

			$sql_catpage_art = "SELECT articles.id, articles.head, images.imagename, articles.details, articles.category, articles.publishdate, articles.modifytime FROM `articles` INNER JOIN images ON articles.id=images.articleid WHERE articles.publishdate='$getdate' AND articles.status='1' AND articles.id<$cat_last_id ORDER BY articles.id DESC LIMIT 3";
			$sql_catpage_art_run = mysqli_query($conn, $sql_catpage_art);
		}

	}else{
		$sql_catpage_art = "SELECT articles.id, articles.head, images.imagename, articles.details, articles.category, articles.publishdate, articles.modifytime FROM `articles` INNER JOIN images ON articles.id=images.articleid WHERE articles.publishdate='$getdate' AND articles.status='1' ORDER BY articles.id DESC LIMIT 3";
		$sql_catpage_art_run = mysqli_query($conn, $sql_catpage_art);
	}
	

$sql_catpage_list_art = "SELECT articles.id, articles.head, images.imagename, articles.details, articles.category, articles.publishdate, articles.modifytime FROM `articles` INNER JOIN images ON articles.id=images.articleid WHERE articles.status='1' ORDER BY articles.id DESC LIMIT 20";
$sql_catpage_list_art_run = mysqli_query($conn, $sql_catpage_list_art);

// $sql_getdate = "SELECT `id`, `publishdate` FROM `category` WHERE `publishdate`=$getcategory ";
// $sql_getdate_run = mysqli_query($conn, $sql_getdate);

// $usergetdate = mysqli_fetch_assoc($sql_getdate_run);
// $user_get_date = $usergetdate['publishdate'];

?>

<!DOCTYPE html>
<html>
<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>আর্কাইভ | <?php echo $getdate; ?> | সমকালীন বাংলাদেশ</title>
		
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="refresh" content="1200">
		<meta name="language" content="bn_BD">

		<meta name="robots" content="index, follow">
		<meta name="revisit-after" content="1 days">

		<!--<meta name="publisher" content="" />-->
		<meta name="author" content="সমকালীন বাংলাদেশ">
		<meta name="copyright" content="© samakalinbd 2015 (www.samakalinbd.com)">

		<meta name="title" content="<?php echo $category_category; ?> | সমকালীন বাংলাদেশ">
		<meta name="keywords" content="<?php echo $details_metakeyword ?>">
		<meta name="description" content="<?php echo $details_metadescription ?>">

		<!-- Google Plus -->
		<meta itemprop="name" content="<?php echo $category_category; ?> | সমকালীন বাংলাদেশ">
		<meta itemprop="description" content="<?php echo $details_metadescription; ?>">
		<meta itemprop="image" content="http://www.samakalinbd.com/images/introimage/<?php echo $details_image; ?>">

		<!-- Twitter -->
		<meta name="twitter:card" content="summary">  <!-- Card type -->
		<meta name="twitter:site" content="সমকালীন বাংলাদেশ (www.samakalinbd.com)">
		<meta name="twitter:title" content="<?php echo $category_category; ?> | সমকালীন বাংলাদেশ">
		<meta name="twitter:description" content="<?php echo $details_metadescription ?>">
		<meta name="twitter:creator" content="সমকালীন বাংলাদেশ">
		<meta name="twitter:image:src" content="http://www.samakalinbd.com/images/introimage/<?php echo $details_image; ?>">
		<meta name="twitter:domain" content="http://www.samakalinbd.com/">

		<!-- Facebook -->
		<meta property='og:locale' content='en_US'/>
		<meta property="og:type" content="article">
		<meta property="og:title" content="<?php echo $category_category; ?> | সমকালীন বাংলাদেশ">
		<meta property="og:description" content="<?php echo $details_metadescription; ?>">
		<meta property="og:image" content="http://www.samakalinbd.com/images/introimage/<?php echo $details_image; ?>">
		<meta property="og:url" content="http://www.samakalinbd.com/details.php?article=<?php echo $details_id ?>">
		<meta property="og:site_name" content="<?php echo $category_category; ?> | সমকালীন বাংলাদেশ">
		<meta property="article:author" content="http://www.samakalinbd.com" />
		<meta property="fb:app_id" content="146447062223990"> <!-- meta tags -->
		
		<link rel="shortcut icon" type="image/x-icon" href="http://www.samakalinbd.com/assets/favicon.ico" />
		
		
		<!-- bootstrap css -->
        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="css/custom.css">

        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
        <link rel="stylesheet" href="vendor/css/demo.css"/>
        <link rel="stylesheet" href="vendor/css/theme1.css"/>
        
        <!-- font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- javascript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.js"></script>
        

	</head>
	<body>
		<!-- top bar -->
        <?php include 'include/topbar.php' ?>
        <!-- end top bar -->
        <!-- logo bar -->
        <?php include 'include/logobanner.inc.php' ?>
        <!-- end logo bar -->

        <!-- navbar -->
        <?php include 'include/menu.inc.php' ?>
        <!-- end navbar -->
        <!-- news body content -->
        <div class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 mt-4">
						<?php //echo translatedatetime ($getdate) ?>
						
						<?php
							while($catpage_art = mysqli_fetch_assoc($sql_catpage_art_run)){
							$catpage_art_id = $catpage_art['id'];
							$catpage_art_head = $catpage_art['head'];
							$catpage_art_image = $catpage_art['imagename'];
							$catpage_art_details = $catpage_art['details'];
							$catpage_art_publishdate = $catpage_art['publishdate'];

							$catpage_art_details_limit = strip_tags($catpage_art_details);
							if(strlen($catpage_art_details) > 200 ){
								$stringCut = substr($catpage_art_details_limit, 0, 600);
								$catpage_art_details_limit = substr($stringCut, 0, strrpos($stringCut, ' ') );
							}
						?>
						
						<div class="row p-4 mb-4 bg-light rounded">
							<a href="details.php?article=<?php echo $catpage_art_id ?>" class="text-body text-decoration-none">
								<div class="container p-0 m-0">
									<img src="images/<?php echo $catpage_art_image ?>" class="img-thumbnail w-50 mr-4 float-left">
									<h3><?php echo $catpage_art_head ?></h3>
									<div class="container-fluid p-0 m-0"><?php echo $catpage_art_details_limit ?></div>
									<h6 class="mt-4 text-muted">পাবলিশ : <?php echo translatedatetime($catpage_art_publishdate) ?></h6>
								</div>
							</a>
						</div>
							<?php } ?>
						<div class="m-0 p-0">
							<div class="d-flex justify-content-end">
							<?php archivepagination ($getdate) ?>
							</div>
						</div>
					</div>
					<div class="col-lg-4 mt-4">
						<div class="container px-1 pt-2">
							<div class="container">
								<?php include 'phpcalendar/calendar.php' ?>
							</div>
                            <div class="container pt-3">
								<p class="bg-secondary text-white rounded m-0 py-2 text-center">সর্বশেষ</p>
								<ul class="list-group px-2" >
									<?php
										while($catpage_list_art = mysqli_fetch_assoc($sql_catpage_list_art_run)){
										$catpage_list_art_id = $catpage_list_art['id'];
										$catpage_list_art_head = $catpage_list_art['head'];
									?>
									<a href="details.php?article=<?php echo $catpage_list_art_id ?>" class="text-body text-decoration-none">
										<li class="list-group-item border-top-0 border-left-0 border-right-0 py-1 my-1 px-0"><?php echo $catpage_list_art_head ?></li>
									</a>
										<?php } ?>
								</ul>
							</div>
						</div>
                        <div class="container">
                            <!-- calendar -->
                        </div>
					</div>
				</div>
			</div>
		</div>

        <!-- copyright bar -->
		<?php include 'include/copyright.inc.php' ?>
		<!-- end copyright bar -->
        <script src="vendor/js/calendar.js"></script>
        <script src="vendor/js/demo.js"></script>
    </body>
</html>

<?php 
}
?>
<?php 
require 'include/connect.inc.php';
require 'include/bangla.inc.php';
require 'include/time.inc.php';
require 'include/myfunction.inc.php';

if($_GET){
$getarticle = $_GET['article'];
} else {
echo 'not id';
}

$sql_details = "SELECT articles.id, articles.head, images.imagename, articles.details, articles.category, articles.publishdate, articles.publishtime, articles.modifydate, articles.modifytime, articles.writer, articles.metakeyword, articles.metadescription, articles.hits FROM `articles` INNER JOIN images ON articles.id=images.articleid WHERE articles.id='$getarticle' AND articles.status='1' ORDER BY articles.id DESC";
$sql_details_run = mysqli_query($conn, $sql_details);

$details = mysqli_fetch_assoc($sql_details_run);
$details_id = $details['id'];
$details_head = $details['head'];
$details_image = $details['imagename'];
$details_details = $details['details'];
$details_category = $details['category'];
$details_publishdate = $details['publishdate'];
$details_publishtime = $details['publishtime'];
$details_modifydate = $details['modifydate'];
$details_modifytime = $details['modifytime'];
$details_writer = $details['writer'];
$details_hits = $details['hits'];
$details_metakeyword = $details['metakeyword'];
$details_metadescription = $details['metadescription'];
								
$sql_details_latest_article = "SELECT `id`, `head` FROM `articles` WHERE `category`='".$details_category."' AND `status`='1' ORDER BY `id` DESC LIMIT 20 ";
$sql_details_latest_article_run = mysqli_query($conn, $sql_details_latest_article);

//category sql

$sql_category = "SELECT * FROM `category` ORDER BY id ASC";
$sql_category_run = mysqli_query($conn, $sql_category);

$sql_breadcrumb_category = "SELECT * FROM `category` ORDER BY id ASC";
$sql_breadcrumb_category_run = mysqli_query($conn, $sql_breadcrumb_category);

$breadcrumb_category_array = array();

while($breadcrumb_category_item = mysqli_fetch_array($sql_breadcrumb_category_run)){
	$breadcrumb_category_id = $breadcrumb_category_item['id'];
	$breadcrumb_category_name = $breadcrumb_category_item['category_name'];

	$breadcrumb_category_array[$breadcrumb_category_id] = $breadcrumb_category_name;
}

//hit counter
$update_details_hits = $details_hits+1;
$sql_hits = "UPDATE `articles` SET `hits`='".$update_details_hits."'  WHERE `id`='".$details_id."' ";
$sql_hits_run = mysqli_query($conn, $sql_hits);


?>




<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $details_head; ?> | সমকালীন বাংলাদেশ</title>
		
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

		<meta name="title" content="<?php echo $details_head; ?> | সমকালীন বাংলাদেশ">
		<meta name="keywords" content="<?php echo $details_metakeyword ?>">
		<meta name="description" content="<?php echo $details_metadescription ?>">

		<!-- Google Plus -->
		<meta itemprop="name" content="<?php echo $details_head; ?> | সমকালীন বাংলাদেশ">
		<meta itemprop="description" content="<?php echo $details_metadescription; ?>">
		<meta itemprop="image" content="http://www.samakalinbd.com/images/introimage/<?php echo $details_image; ?>">

		<!-- Twitter -->
		<meta name="twitter:card" content="summary">  <!-- Card type -->
		<meta name="twitter:site" content="সমকালীন বাংলাদেশ (www.samakalinbd.com)">
		<meta name="twitter:title" content="<?php echo $details_head; ?> | সমকালীন বাংলাদেশ">
		<meta name="twitter:description" content="<?php echo $details_metadescription ?>">
		<meta name="twitter:creator" content="সমকালীন বাংলাদেশ">
		<meta name="twitter:image:src" content="http://www.samakalinbd.com/images/introimage/<?php echo $details_image; ?>">
		<meta name="twitter:domain" content="http://www.samakalinbd.com/">

		<!-- Facebook -->
		<meta property='og:locale' content='en_US'/>
		<meta property="og:type" content="article">
		<meta property="og:title" content="<?php echo $details_head; ?> | সমকালীন বাংলাদেশ">
		<meta property="og:description" content="<?php echo $details_metadescription; ?>">
		<meta property="og:image" content="http://www.samakalinbd.com/images/introimage/<?php echo $details_image; ?>">
		<meta property="og:url" content="http://www.samakalinbd.com/details.php?article=<?php echo $details_id ?>">
		<meta property="og:site_name" content="<?php echo $details_head; ?> | সমকালীন বাংলাদেশ">
		<meta property="article:author" content="http://www.samakalinbd.com" />
		<meta property="fb:app_id" content="146447062223990"> <!-- meta tags -->
		
		<link rel="shortcut icon" type="image/x-icon" href="assets/favicon.ico" />
		
		
		<!-- bootstrap css -->
        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="css/custom.css">
        
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
					<div class="col-lg-8">
						<div class="mt-3">
							<div class="m-0 px-2 pb-2 my-0">
								<span class="text-muted h6">আপনি আছেন : <a href="index.php" class="text-muted text-decoration-none"> হোম </a> > </span>
								<span class="text-muted h6"> <a href="category.php?category=<?php echo $details_category ?>" class="text-muted text-decoration-none"> <?php echo $breadcrumb_category_array[$details_category]; ?> </a> ></span>
								<span class="text-muted h6"><?php echo $details_head ?> </span>
							</div>
							<h1 class="m-0 px-2 py-1 my-0 border-top border-bottom "><?php echo $details_head ?></h1>
							<div class="m-0 px-2 py-1 my-0 border-bottom">
								<span class="text-muted">পাবলিশড : <?php echo translatedatetime($details_publishdate).' '.translatedatetime($details_publishtime) ?> |  </span>
								<?php if(!empty($details_modifydate)){ ?>
									<span class="text-muted">আপডেট : <?php echo translatedatetime($details_modifydate).' '.translatedatetime($details_modifytime) ?>  | </span>
								<?php } ?>
								<span class="text-muted">ভিজিট : <?php echo translatedatetime($details_hits); ?>  </span>
							</div>
							<div class="container m-0">
								<img src="images/<?php echo $details_image ?>" class="w-100 my-3">
							</div>
							<div class="container mt-2">
								<?php echo $details_details ?>
							</div>
						</div>
					</div>
					<div class="col-lg-4 mt-4">
						<div class="container px-1">
							<div class="container">
									<?php banner(13); ?>
							</div>
							<div class="container">
								<p class="bg-secondary text-white rounded m-0 py-2 text-center">এ বিভাগের সর্বশেষ</p>
									<ul class="list-group px-2" >
										<?php
											while($details_latest_article = mysqli_fetch_assoc($sql_details_latest_article_run)){
											$details_latest_article_id = $details_latest_article['id'];
											$details_latest_article_head = $details_latest_article['head'];
										?>
										<a href="details.php?article=<?php echo $details_latest_article_id ?>" class="text-body text-decoration-none">
											<li class="list-group-item border-top-0 border-left-0 border-right-0 py-1 my-1 px-0"><?php echo $details_latest_article_head ?></li>
										</a>
											<?php } ?>
									</ul>
							</div>
							<div class="container">
									<?php banner(14); ?>
							</div>
						</div>
						<div class="container px-0 mx-2">
							<?php include 'phpcalendar/calendar.php' ?>
						</div>
					</div>
				</div>
			</div>
		</div>

        <!-- copyright bar -->
		<?php include 'include/copyright.inc.php' ?>
		<!-- end copyright bar -->
	</body>
</html>
<?php
    require 'include/connect.inc.php';
    require 'include/query.inc.php';
    require 'include/time.inc.php';
    require 'include/myfunction.inc.php';
    require 'include/bangla.inc.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>সমকালীন বাংলাদেশ | Samakalinbd.com</title>
		
		<meta charset="utf-8">

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
            <div class="container bg-white">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="row">
                            <!-- lead -->
                                <?php
                                    // $lead = mysqli_fetch_assoc($sql_lead_run);
                                    // $lead_id = $lead['id'];
                                    // $lead_head = $lead['head'];
                                    // $lead_image = $lead['image'];
                                ?>
                            <div class="col-lg-9 mt-3">
                                <a href="details.php?article=<?php echo $lead_id ?>" class="text-body text-decoration-none">
                                    <img src="images/<?php echo $lead_image ?>" class="w-100">
                                    <h2 class="mt-3"><?php echo $lead_head ?> </h2>
                                </a>
                            </div>
                            <!-- end lead -->
                            <!-- 2nd lead -->
                            <div class="col-lg-3 mt-3 p-0">
                                <?php
                                    while($second_lead = mysqli_fetch_array($sql_second_lead_run)){
                                        $second_lead_id = $second_lead['id'];
                                        $second_lead_head = $second_lead['head'];
                                        $second_lead_image = $second_lead['imagename'];
                                    
                                ?>
                                <div class="container-fluid">
                                    <a href="details.php?article=<?php echo $second_lead_id ?>" class="text-body text-decoration-none">
                                        <img src="images/<?php echo $second_lead_image ?>" class="w-100">
                                        <h5 class="mt-2"><?php echo $second_lead_head ?> </h5>
                                    </a>
                                </div>
                                    <?php } ?>
                            </div>
                            <!--end  2nd lead -->
                        </div>
                        <div class="row">
                            <?php
                                while($feature_news = mysqli_fetch_assoc($sql_feature_news_run)){
                                    $feature_news_id = $feature_news['id'];
                                    $feature_news_head = $feature_news['head'];
                                    $feature_news_image = $feature_news['imagename'];
                            ?>
                            <div class="col-lg-4 mt-3">
                                <a href="details.php?article=<?php echo $feature_news_id ?>" class="text-body text-decoration-none">
                                    <img src="images/<?php echo $feature_news_image ?>" class="w-100">
                                    <h5 class="mt-2"><?php echo $feature_news_head ?> </h5>
                                </a>
                            </div>
                                <?php } ?>
                        </div>
                    </div>
                    
                    <!-- latest news -->
                    <div class="col-lg-3">
                        <div class="container-fluid mt-3 p-0">
                            <h4 class=" bg-secondary px-0 py-2 text-white text-center rounded">সর্বশেষ</h4>
                            <ul class="list-group px-2">
                            <?php 
                                    while($latest_news = mysqli_fetch_assoc($sql_latest_news_run)){
                                    $latest_news_id = $latest_news['id'];
                                    $latest_news_head = $latest_news['head'];
                                ?>
                                <a href="details.php?article=<?php echo $latest_news_id ?>" class="text-body text-decoration-none">
                                    <li class="list-group-item border-top-0 border-left-0 border-right-0 py-1 my-0 px-2"><?php echo $latest_news_head ?> </li>
                                </a>
                                    <?php } ?>
                            </ul>
                        </div>
                        <class class="container-fulid">
                                <?php banner(8) ?>
                        </class>
                    </div>
                    <!-- end latest news -->
                </div>
            </div>
        </div>
        <!-- end news body content -->

        <!-- category list news -->
        <div class="container-fluid mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 p-0">
                        <div class="mx-2 p-0">
                            <h3 class="teg-border px-2 text-danger"><?php echo hometegname('1'); ?></h3>
                        </div>
                        <div class="container mt-3 px-2">
                            <a href="details.php?article=<?php echo $national_cat_lead_id ?>" class="text-body text-decoration-none">
                                    <img src="images/<?php echo $national_cat_lead_image ?>" class="img-fluid">
                                    <h3 class="mt-3"><?php echo $national_cat_lead_head ?></h3>
                            </a>
                            <ul class="list-group" >
                                <?php
                                while($national_cat_list = mysqli_fetch_assoc($sql_national_cat_list_run)){
                                    $national_cat_list_id = $national_cat_list['id'];
                                    $national_cat_list_head = $national_cat_list['head'];
                                ?>
                                    
                                <a href="details.php?article=<?php echo $national_cat_list_id ?>" class="text-body text-decoration-none">
                                    <li class="list-group-item border-top-0 border-left-0 border-right-0 py-1 my-0 px-2"><?php echo $national_cat_list_head ?> </li>
                                </a>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 px-2">
                        <div class="mx-2 p-0">
                            <h3 class="teg-border px-2 text-danger"><?php echo hometegname('2'); ?></h3>
                        </div>
                        <div class="container mt-3  px-2">
                            <a href="details.php?article=<?php echo $politics_cat_lead_id ?>" class="text-body text-decoration-none">
                                    <img src="images/<?php echo $politics_cat_lead_image ?>" class="img-fluid">
                                    <h3 class="mt-3"><?php echo $politics_cat_lead_head ?></h3>
                            </a>
                            <ul class="list-group" >
                                <?php
                                while($politics_cat_list = mysqli_fetch_assoc($sql_politics_cat_list_run)){
                                    $politics_cat_list_id = $politics_cat_list['id'];
                                    $politics_cat_list_head = $politics_cat_list['head'];
                                ?>
                                    
                                <a href="details.php?article=<?php echo $politics_cat_list_id ?>" class="text-body text-decoration-none">
                                    <li class="list-group-item border-top-0 border-left-0 border-right-0 py-1 my-0 px-2"><?php echo $politics_cat_list_head ?> </li>
                                </a>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 p-0">
                        <div class="mx-2 p-0">
                            <h3 class="teg-border px-2 text-danger"><?php echo hometegname('3'); ?></h3>
                        </div>
                        <div class="container mt-3 px-2">
                            <a href="details.php?article=<?php echo $international_cat_lead_id ?>" class="text-body text-decoration-none">
                                    <img src="images/<?php echo $international_cat_lead_image ?>" class="img-fluid">
                                    <h3 class="mt-3"><?php echo $international_cat_lead_head ?></h3>
                            </a>
                            <ul class="list-group" >
                                <?php
                                while($international_cat_list = mysqli_fetch_assoc($sql_international_cat_list_run)){
                                    $international_cat_list_id = $international_cat_list['id'];
                                    $international_cat_list_head = $international_cat_list['head'];
                                ?>
                                    
                                <a href="details.php?article=<?php echo $international_cat_list_id ?>" class="text-body text-decoration-none">
                                    <li class="list-group-item border-top-0 border-left-0 border-right-0 py-1 my-0 px-2"><?php echo $international_cat_list_head ?> </li>
                                </a>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end category list news -->

        <!--category news Sports -->
		<div class="container mt-3 px-0">
			<div class="mx-2 p-0">
                <h3 class="teg-border px-2 text-danger"><?php echo hometegname('4'); ?></h3>
			</div>
			<div class="container-fluid mt-3">
				<div class="row">
					<div class="col-lg-9">
						<div class="container-fluid px-2">
							<div class="row">
								<div class="col-lg-7 p-0">
									<!-- Sports category lead -->
									<a href="details.php?article=<?php echo $sports_lead_id ?>" class="text-body text-decoration-none">
										<img src="images/<?php echo $sports_lead_image; ?>" class="img-fluid">
										<h3 class="pt-2"><?php echo $sports_lead_head; ?></h3>
									</a>
								</div>
								<div class="col-lg-5 px-2">
									<div class="container-fluid">
										<div class="row">
										<!-- Sports category thumb -->
                                            <?php
                                                while($sports_cat = mysqli_fetch_array($sql_sports_cat_run)){
                                                    $sports_cat_id = $sports_cat['id'];
                                                    $sports_cat_head = $sports_cat['head'];
                                                    $sports_cat_image = $sports_cat['imagename'];
                                            ?>
											<div class="col-lg-6 px-2">
                                                <a href="details.php?article=<?php echo $sports_cat_id ?>" class="text-body text-decoration-none">
													<img src="images/<?php echo $sports_cat_image ?>" class="img-fluid">
													<h5 class="pt-2"><?php echo $sports_cat_head ?></h5>
												</a>
                                            </div>
                                                <?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 p-0">
					<!-- Sports category list -->
                    <ul class="list-group" >
                            <?php
                               while($sports_cat_list = mysqli_fetch_assoc($sql_sports_cat_list_run)){
                                $sports_cat_list_id = $sports_cat_list['id'];
                                $sports_cat_list_head = $sports_cat_list['head'];
                            ?>
                                
                            <a href="details.php?article=<?php echo $sports_cat_list_id ?>" class="text-body text-decoration-none">
                                <li class="list-group-item border-top-0 border-left-0 border-right-0 py-1 my-0 px-2"><?php echo $sports_cat_list_head ?> </li>
                            </a>
                               <?php } ?>
                        </ul>
					</div>
				</div>
			</div>
		</div>
        <!--end category news Sports -->

        <!--category news Entertainment -->
		<div class="container mt-3 px-0">
			<div class="mx-2 p-0">
                <h3 class="teg-border px-2 text-danger"><?php echo hometegname('5'); ?></h3>
			</div>
			<div class="container-fluid mt-3">
				<div class="row">
					<div class="col-lg-9">
						<div class="container-fluid px-2">
							<div class="row">
								<div class="col-lg-7 p-0">
									<!-- Sports category lead -->
									<a href="details.php?article=<?php echo $entertainment_lead_id ?>" class="text-body text-decoration-none">
										<img src="images/<?php echo $entertainment_lead_image; ?>" class="img-fluid">
										<h3 class="pt-2"><?php echo $entertainment_lead_head; ?></h3>
									</a>
								</div>
								<div class="col-lg-5 px-2">
									<div class="container-fluid">
										<div class="row">
										<!-- Sports category thumb -->
                                            <?php
                                                while($entertainment_cat = mysqli_fetch_array($sql_entertainment_cat_run)){
                                                    $entertainment_cat_id = $entertainment_cat['id'];
                                                    $entertainment_cat_head = $entertainment_cat['head'];
                                                    $entertainment_cat_image = $entertainment_cat['imagename'];
                                            ?>
											<div class="col-lg-6 px-2">
                                                <a href="details.php?article=<?php echo $entertainment_cat_id ?>" class="text-body text-decoration-none">
													<img src="images/<?php echo $entertainment_cat_image ?>" class="img-fluid">
													<h5 class="pt-2"><?php echo $entertainment_cat_head ?></h5>
												</a>
                                            </div>
                                                <?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 p-0">
					<!-- Sports category list -->
                    <ul class="list-group" >
                            <?php
                               while($entertainment_cat_list = mysqli_fetch_assoc($sql_entertainment_cat_list_run)){
                                $entertainment_cat_list_id = $entertainment_cat_list['id'];
                                $entertainment_cat_list_head = $entertainment_cat_list['head'];
                            ?>
                                
                            <a href="details.php?article=<?php echo $entertainment_cat_list_id ?>" class="text-body text-decoration-none">
                                <li class="list-group-item border-top-0 border-left-0 border-right-0 py-1 my-0 px-2"><?php echo $entertainment_cat_list_head ?> </li>
                            </a>
                               <?php } ?>
                        </ul>
					</div>
				</div>
			</div>
		</div>
        <!--end category news Entertainment -->
        
        <!--category news International&Education -->
		<div class="container mt-3 px-0">
			<div class="row">
				<!-- international -->
				<div class="col-lg-4">
					<div class="mx-2 p-0">
                        <h3 class="teg-border px-2 text-danger"><?php echo hometegname('6'); ?></h3>
					</div>
					<div class="container-fluid">
                    <div class="row">
							<!-- education thumb -->
							<div class="col-lg-6 pt-2 pl-2 pr-3">
                                <?php
                                    while($arround_country_cat = mysqli_fetch_array($sql_arround_country_cat_run)){
                                        $arround_country_cat_id = $arround_country_cat['id'];
                                        $arround_country_cat_head = $arround_country_cat['head'];
                                        $arround_country_cat_image = $arround_country_cat['imagename'];
                                ?>
								<a href="details.php?article=<?php echo $arround_country_cat_id ?>" class="text-body text-decoration-none">
									<img src="images/<?php echo $arround_country_cat_image ?>" class="img-fluid">
									<h4 class="mt-2"><?php echo $arround_country_cat_head ?></h4>
                                </a>
                                    <?php } ?>
							</div>
							<div class="col-lg-6 pt-2 px-0">
                                <ul class="list-group" >
                                    <?php
                                    while($arround_country_cat_list = mysqli_fetch_assoc($sql_arround_country_cat_list_run)){
                                        $arround_country_cat_list_id = $arround_country_cat_list['id'];
                                        $arround_country_cat_list_head = $arround_country_cat_list['head'];
                                    ?>
                                        
                                    <a href="details.php?article=<?php echo $arround_country_cat_list_id ?>" class="text-body text-decoration-none">
                                        <li class="list-group-item border-top-0 border-left-0 border-right-0 py-1 my-0 px-2"><?php echo $arround_country_cat_list_head ?> </li>
                                    </a>
                                    <?php } ?>
                                </ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 pr-0">
					<div class="mx-2 p-0">
                        <h3 class="teg-border px-2 text-danger"><?php echo hometegname('7'); ?></h3>
					</div>
					<div class="container-fluid">
                    <div class="row">
							<!-- education thumb -->
							<div class="col-lg-7 pt-2 pl-2 pr-3">
                                <?php
                                    while($education_cat = mysqli_fetch_array($sql_education_cat_run)){
                                        $education_cat_id = $education_cat['id'];
                                        $education_cat_head = $education_cat['head'];
                                        $education_cat_image = $education_cat['imagename'];
                                ?>
								<a href="details.php?article=<?php echo $education_cat_id ?>" class="text-body text-decoration-none">
									<img src="images/<?php echo $education_cat_image ?>" class="img-fluid">
									<h4 class="mt-2"><?php echo $education_cat_head ?></h4>
                                </a>
                                    <?php } ?>
							</div>
							<div class="col-lg-5 pt-2 px-0">
                                <ul class="list-group" >
                                    <?php
                                    while($education_cat_list = mysqli_fetch_assoc($sql_education_cat_list_run)){
                                        $education_cat_list_id = $education_cat_list['id'];
                                        $education_cat_list_head = $education_cat_list['head'];
                                    ?>
                                        
                                    <a href="details.php?article=<?php echo $education_cat_list_id ?>" class="text-body text-decoration-none">
                                        <li class="list-group-item border-top-0 border-left-0 border-right-0 py-1 my-0 px-2"><?php echo $education_cat_list_head ?> </li>
                                    </a>
                                    <?php } ?>
                                </ul>
							</div>
						</div>
					</div>
                </div>
                <div class="col-lg-4">
                    <div class="container">
                        <div class="mx-2 p-0">
                            <h3 class="teg-border px-2 text-danger">আর্কাইভ</h3>
                        </div>
                        <?php include 'phpcalendar/calendar.php' ?>
                    </div>
                </div>
			</div>
		</div>
        <!--end category news International&Education -->
        
        <!-- category lead & list news -->
        <div class="container px-0">
            <div class="container px-0">
                <div class="row">
                    <div class="col-lg-3 px-2 mt-4">
                        <div class="mx-2 p-0">
                            <h3 class="teg-border px-2 text-danger"><?php echo hometegname('8'); ?></h3>
                        </div>
                            <div class="container px-2 mt-3">
                                <a href="details.php?article=<?php echo $health_cat_lead_id ?>" class="text-body text-decoration-none">
                                        <img src="images/<?php echo $health_cat_lead_image ?>" class="img-fluid">
                                        <h4 class="mt-2"><?php echo $health_cat_lead_head ?></h4>
                                </a>
                                <ul class="list-group" >
                                    <?php
                                    while($health_cat_list = mysqli_fetch_assoc($sql_health_cat_list_run)){
                                        $health_cat_list_id = $health_cat_list['id'];
                                        $health_cat_list_head = $health_cat_list['head'];
                                    ?>
                                        
                                    <a href="details.php?article=<?php echo $health_cat_list_id ?>" class="text-body text-decoration-none">
                                        <li class="list-group-item border-top-0 border-left-0 border-right-0 py-1 my-0 px-2"><?php echo $health_cat_list_head ?> </li>
                                    </a>
                                    <?php } ?>
                                </ul>
                            </div>
                    </div>
                    <div class="col-lg-3 px-2 mt-4">
                        <div class="mx-2 p-0">
                            <h3 class="teg-border px-2 text-danger"><?php echo hometegname('9'); ?></h3>
                        </div>
                            <div class="container px-2 mt-3">
                                <a href="details.php?article=<?php echo $commerce_cat_lead_id ?>" class="text-body text-decoration-none">
                                        <img src="images/<?php echo $commerce_cat_lead_image ?>" class="img-fluid">
                                        <h4 class="mt-2"><?php echo $commerce_cat_lead_head ?></h4>
                                </a>
                                <ul class="list-group" >
                                    <?php
                                    while($commerce_cat_list = mysqli_fetch_assoc($sql_commerce_cat_list_run)){
                                        $commerce_cat_list_id = $commerce_cat_list['id'];
                                        $commerce_cat_list_head = $commerce_cat_list['head'];
                                    ?>
                                        
                                    <a href="details.php?article=<?php echo $commerce_cat_list_id ?>" class="text-body text-decoration-none">
                                        <li class="list-group-item border-top-0 border-left-0 border-right-0 py-1 my-0 px-2"><?php echo $commerce_cat_list_head ?> </li>
                                    </a>
                                    <?php } ?>
                                </ul>
                            </div>
                    </div>
                    <div class="col-lg-3 px-2 mt-4">
                        <div class="mx-2 p-0">
                            <h3 class="teg-border px-2 text-danger"><?php echo hometegname('10'); ?></h3>
                        </div>
                            <div class="container px-2 mt-3">
                                <a href="details.php?article=<?php echo $lifestyle_cat_lead_id ?>" class="text-body text-decoration-none">
                                        <img src="images/<?php echo $lifestyle_cat_lead_image ?>" class="img-fluid">
                                        <h4 class="mt-2"><?php echo $lifestyle_cat_lead_head ?></h4>
                                </a>
                                <ul class="list-group" >
                                    <?php
                                    while($lifestyle_cat_list = mysqli_fetch_assoc($sql_lifestyle_cat_list_run)){
                                        $lifestyle_cat_list_id = $lifestyle_cat_list['id'];
                                        $lifestyle_cat_list_head = $lifestyle_cat_list['head'];
                                    ?>
                                        
                                    <a href="details.php?article=<?php echo $lifestyle_cat_list_id ?>" class="text-body text-decoration-none">
                                        <li class="list-group-item border-top-0 border-left-0 border-right-0 py-1 my-0 px-2"><?php echo $lifestyle_cat_list_head ?> </li>
                                    </a>
                                    <?php } ?>
                                </ul>
                            </div>
                    </div>
                    <div class="col-lg-3 px-2 mt-4">
                        <div class="mx-2 p-0">
                            <h3 class="teg-border px-2 text-danger"><?php echo hometegname('11'); ?></h3>
                        </div>
                            <div class="container px-2 mt-3">
                                <a href="details.php?article=<?php echo $science_cat_lead_id ?>" class="text-body text-decoration-none">
                                        <img src="images/<?php echo $science_cat_lead_image ?>" class="img-fluid">
                                        <h4 class="mt-2"><?php echo $science_cat_lead_head ?></h4>
                                </a>
                                <ul class="list-group" >
                                    <?php
                                    while($science_cat_list = mysqli_fetch_assoc($sql_science_cat_list_run)){
                                        $science_cat_list_id = $science_cat_list['id'];
                                        $science_cat_list_head = $science_cat_list['head'];
                                    ?>
                                        
                                    <a href="details.php?article=<?php echo $science_cat_list_id ?>" class="text-body text-decoration-none">
                                        <li class="list-group-item border-top-0 border-left-0 border-right-0 py-1 my-0 px-2"><?php echo $science_cat_list_head ?> </li>
                                    </a>
                                    <?php } ?>
                                </ul>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end category lead & list news -->

        <!-- gallery -->
        <div class="container-fulid mt-3 px-0">
            <div class="container px-0">
                <div class="mx-2 p-0">
                    <h3 class="teg-border px-2 text-danger">গ্যালারি</h3>
                </div>
                <div class="container px-2">
                    <div class="row">
                        <div class="col-lg-8 pt-2">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="images/slide-1.jpg" alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <p></p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="images/slide-2.jpg" alt="Second slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <p></p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="images/slide-3.jpg" alt="Third slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <p></p>
                                    </div>
                                </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="images/slide-4.jpg" alt="Third slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <p></p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="images/slide-5.jpg" alt="Third slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <p></p>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 pt-2">
                            <img src="images/lead.jpg" class="w-100 mb-3">
                            <img src="images/Jamalpur_Flood-3.jpg" class="w-100 mb-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end gallery -->

        <!-- copyright bar -->
		<?php include 'include/copyright.inc.php' ?>
		<!-- end copyright bar -->
    </body>
</html>
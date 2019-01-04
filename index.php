<!DOCTYPE html>
<?php
	include "connection.php";
   // banner part
  {	$background_link_banner = "upload/dapat_diupdate.jpg";
	$tulisan_atas = "Welcome to";
	$tulisan_tengah_1 = "Real";
	$tulisan_tengah_2 = "Factory";
	$tulisan_bawah = "Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas sed diam eget risus varius blandit sit amet non.";
	
	$sql = mysqli_query($connection,"SELECT * FROM banner");
	$productCount = mysqli_num_rows($sql); // count the output amount
	if ($productCount > 0) {
		while($row = mysqli_fetch_array($sql)){ 
				 $background_link_banner = $row["background_path"];
				 $tulisan_atas = $row["tulisan_teratas"];
				 $tulisan_tengah_1 = $row["tulisan_tengah_1"];
				 $tulisan_tengah_2 = $row["tulisan_tengah_2"];
				 $tulisan_bawah  = $row["tulisan_bawah"];
		}
	} else {
		echo "You have no data for change";
	}
  }
	
	
  // bagian TOP A
  {
	 class Kotak
	 {
		 private $background_path ;
		 public $tulisan_atas ;
		 public $tulisan_bawah ;
	 }
	 
	 $kotak_1 = new Kotak;
	 $kotak_2 = new Kotak;
	 $kotak_3 = new Kotak;
	 

	 $kotak_1->$tulisan_atas = "Punctual Delivery Time";
	 $kotak_1->$tulisan_bawah = "99% Delivered On Time";
	 $kotak_1_background_path = "upload/service-1.jpg";
	 
	 $kotak_2->$tulisan_atas = "High Technology Factory";
	 $kotak_2->$tulisan_bawah = "& Environment Friednly";
	 $kotak_2_background_path = "upload/service-2.jpg";
	 
	 $kotak_3->$tulisan_atas = "High Standard Labors";
	 $kotak_3->$tulisan_bawah = "99% QC Passed";
	 $kotak_3_background_path = "upload/service-3-1.jpg";
	 
	 
	$sql = mysqli_query($connection,"SELECT * FROM top_a");// sampai disini errornya
	$productCount = mysqli_num_rows($sql); // count the output amount
	$index = 1 ;
	if ($productCount > 0) {
		while($row = mysqli_fetch_array($sql)){ 
				if($index == 1){
				 $kotak_1->$tulisan_atas = $row['tulisan_atas'];
				 $kotak_1->$tulisan_bawah = $row['tulisan_bawah'];
				 $kotak_1_background_path = $row['background_link'];
				}
				else if($index == 2 )
				{
				 $kotak_2->$tulisan_atas = $row['tulisan_atas'];
				 $kotak_2->$tulisan_bawah = $row['tulisan_bawah'];
				 $kotak_2_background_path = $row['background_link'];
				}
				else
				{
				 $kotak_3->$tulisan_atas = $row['tulisan_atas'];
				 $kotak_3->$tulisan_bawah = $row['tulisan_bawah'];
				 $kotak_3_background_path = $row['background_link'];
				}
				
				$index ++ ;
		}
	} else {
		$product_list = "You have no data for change";
	}
  }
  
  // bagian top B
  {
	  $top_b_judul ="Real Factory’s Story";
	  $top_b_icon_path = "";
	  $top_b_tulisan_dibawah = "Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus. Aenean lacinia. Donec ullamcorper nulla non metus auctor fringilla. Donec ullamcorper nulla non metus auctor fringilla. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Aenean lacinia bibendum nulla sed consectetur.";
		
		$sql = mysqli_query($connection,"SELECT * FROM top_b") or die ("fail to open top_b table");
		$productCount = mysqli_num_rows($sql); // count the output amount
		if ($productCount > 0) {
			while($row = mysqli_fetch_array($sql)){ 
					 $top_b_judul = $row["judul"];
					 $top_b_icon_path = $row["path_icon"];
					 $top_b_tulisan_dibawah = $row["tulisan_dibawah"];
			}
		} else {
			echo "You have no data for change";
			//exit();
		}

  }

 // bagian top C 
	{
	 $top_c_tulisan = "We Won Many Factory Awards & Got Many Ceritificates Since 2001-2016" ;
	 $top_c_background_path = "upload/CTA-bg-2.jpg";
	 
		$sql = mysqli_query($connection,"SELECT * FROM top_c");
		$productCount = mysqli_num_rows($sql); // count the output amount
		if ($productCount > 0) {
			while($row = mysqli_fetch_array($sql)){ 
					  $top_c_background_path = $row["background_path"];
					 $top_c_tulisan = $row["tulisan"];
			}
		} else {
			echo "You have no data for change";
			
		}
    }
 
 
 ?>
 
 <?php 

	// bagian top D
	class kotak_top_d{
		public $background_path ;
		public $judul ;
		public $tulisan;
		public $link;
		public $judul_teratas;
		public $id;
	}
	
	//ambil data di top_d table
	$sql = mysqli_query($connection,"SELECT * FROM top_d");
	$jumlah_item = mysqli_num_rows($sql); // count the output amount
	
	$kotak_top_d = array();
	for($i = 0 ; $i < $jumlah_item ; $i++)
	{
		$kotak_top_d[$i] = new kotak_top_d();
	}
	
	
	if ($jumlah_item > 0) {
		$i = 0 ;
		while($row = mysqli_fetch_array($sql)){ 
				 $kotak_top_d[$i]->id = $row["id"];
				 $kotak_top_d[$i]->background_path = $row["background_path"];
				 $kotak_top_d[$i]->judul = $row["judul"];
				 $kotak_top_d[$i]->tulisan = $row["tulisan"];
				 $kotak_top_d[$i]->link = "product.php";//$row["link"];
				 if($i == 0)
				 {
					 $kotak_top_d[0]->judul_teratas = $row["judul_teratas"];
					
				 }
				 $i++ ;			 
		}
	} else {
		echo "You have no data for change";
	}
	//exit();
	

 ?>
 
 
 <?php 
	// bagian top E		
	class kotak_top_e{
		public $background_path = "upload/landmark-bridge-metal-architecture-500x625.jpg";
		public $tulisan_di_dalam_kotak = "tulisan_di_dalam_kotak" ;
		public $judul_tulisan_di_bawah_kotak = "judul_tulisan_di_bawah_kotak";
		public $tulisan_di_bawah_kotak_1 = "tulisan_di_bawah_kotak_1";
		public $tulisan_di_bawah_kotak_2 = "tulisan_di_bawah_kotak_2";
		public $link;
		public $id;
	}
	
	 class kotak_sebelah_kiri_top_e {
		 public $background_path = "upload/port-desc-bg-1.jpg";
		 public $judul = "Featured EPC Works";
		 public $tulisan = "We don’t only sell products or parts but we are also a well known EPC contractor in the region.";		 
	 }
	 
	 $kotak_sebelah_kiri = new kotak_sebelah_kiri_top_e();
	 
	 
	 $kotak = array();
	 
	 // pengambilan data kotak
	$sql = mysqli_query($connection,"SELECT * FROM top_e")or die("gagal akses database");
	$Count = mysqli_num_rows($sql); // count the output amount
	
	for($i = 0 ; $i < $Count ; $i++)
	{
		$kotak[$i] = new kotak_top_e();
	}
	
	$jumlah_item_top_e = $Count ;
	$index = 0 ;
	if ($Count > 0) {
		while($row = mysqli_fetch_array($sql)){ 
				 $kotak[$index]->background_path = $row["background_path"];
				 $kotak[$index]->tulisan_di_dalam_kotak = $row["tulisan_di_dalam_kotak"];
				 $kotak[$index]->judul_tulisan_di_bawah_kotak = $row["judul_tulisan_di_bawah_kotak"];
				 $kotak[$index]->tulisan_di_bawah_kotak_1  = $row["tulisan_di_bawah_kotak_1"];
				 $kotak[$index]->tulisan_di_bawah_kotak_2  = $row["tulisan_di_bawah_kotak_2"];
				 $kotak[$index]->link  = $row["link"];
				 $kotak[$index]->id = $row["id"];
				 $index++;
		}
	} 
	else {
		echo "You have no data for change";
	}
  
	 
	 
	 
	 
	 //pengambilan_data_kotak_kiri
	 
	 $sql = mysqli_query($connection,"SELECT * FROM top_e_kotak_kiri")or die("gagal akses database");
	$productCount = mysqli_num_rows($sql); // count the output amount
	if ($productCount > 0) {
		while($row = mysqli_fetch_array($sql)){ 
				 $kotak_sebelah_kiri->background_path = $row["background_path"];
				 $kotak_sebelah_kiri->judul = $row["judul"];
				 $kotak_sebelah_kiri->tulisan  = $row["tulisan"];
		}
	} 
	else {
		echo "You have no data for change";
	}
	 
?>
 
 <?php 
	//Bagian Top F 
	
	class kontainer
	{
		public $tulisan_kecil ;
		public $tulisan_besar ;
		public $image_path ;
		
		public function __construct(){
			
		}
	}
	// bagian kotak kiri
	{
			class kotak_top_f_kiri extends kontainer
			{
				
				public $kontainer = array();
				
				public function __construct()
				{	
					for($i = 0 ; $i < 3 ; $i++){
					$this->kontainer[$i] = new kontainer();	
					}
				}
			}	
			$kotak_top_f_kiri = new kotak_top_f_kiri();
			
			$sql = mysqli_query($connection,"SELECT * FROM top_f_kotak_kiri")or die("gagal akses database");
			$productCount = mysqli_num_rows($sql); // count the output amount
			$index = 0 ;
			if ($productCount > 0) {
				while($row = mysqli_fetch_array($sql)){ 
						 $kotak_top_f_kiri->tulisan_besar = $row["tulisan_besar"];
						 $kotak_top_f_kiri->tulisan_kecil = $row["tulisan_kecil"];
						 $kotak_top_f_kiri->kontainer[0]->tulisan_besar = $row["tulisan_besar_kotak_1"];
						 $kotak_top_f_kiri->kontainer[0]->tulisan_kecil = $row["tulisan_kecil_kotak_1"];
						 $kotak_top_f_kiri->kontainer[1]->tulisan_besar = $row["tulisan_besar_kotak_2"];
						 $kotak_top_f_kiri->kontainer[1]->tulisan_kecil = $row["tulisan_kecil_kotak_2"];
						 $kotak_top_f_kiri->kontainer[2]->tulisan_besar = $row["tulisan_besar_kotak_3"];
						 $kotak_top_f_kiri->kontainer[2]->tulisan_kecil = $row["tulisan_kecil_kotak_3"];
						 
						 
				}
			} 
			else {
				echo "You have no data for change";
			}
			
			
				class top_f_news
			{
				public $id;
				public $isi_berita ;
				public $judul ;
				public $link ;
				public $tanggal;
				public $tempat;
				public $pengarang;
				public $image_path;
			}
			
			$sql = mysqli_query($connection,"SELECT * FROM top_f_kotak_kiri_news")or die("gagal akses database");
			$Count = mysqli_num_rows($sql); // count the output amount
			
			$top_f_news = array();
			
			for($i = 0 ; $i < $Count ; $i++)
			{
				$top_f_news[$i] = new top_f_news();
			}
			
			
			if ($Count > 0) {
				$i = 0 ;
				while($row = mysqli_fetch_array($sql)){ 
					$top_f_news[$i]->id = $row["id"];
					$top_f_news[$i]->isi_berita = $row["isi"];
					$top_f_news[$i]->judul = $row["judul"];
					$top_f_news[$i]->link = $row["link"];
					$top_f_news[$i]->tempat = $row["tempat"];
					$top_f_news[$i]->tanggal =  strftime("%b %d %Y", strtotime($row["tanggal"]));
					$top_f_news[$i]->pengarang = $row["pengarang"];
					$top_f_news[$i]->image_path = $row["image_path"];
					$i++;
				}
			} 
			else {
				echo "You have no data for change";
				//exit();
			}
					
			}		
	// bagian kotak tengah
	{	
		class kotak_top_f_tengah extends kontainer {
			public $kontainer = array();
				public function __construct()
			{	
				for($i = 0 ; $i < 3 ; $i++){
				$this->kontainer[$i] = new kontainer();	
				}
			}
		}
		$kotak_top_f_tengah = new kotak_top_f_tengah();
		
		$sql = mysqli_query($connection,"SELECT * FROM top_f_kotak_tengah")or die("gagal akses database");
		$productCount = mysqli_num_rows($sql); // count the output amount
		$index = 0 ;
		if ($productCount > 0) {
			while($row = mysqli_fetch_array($sql)){ 
					
				$kotak_top_f_tengah->tulisan_besar = $row["tulisan_besar"]; 
				$kotak_top_f_tengah->image_path = $row["image_path"];
				$kotak_top_f_tengah->kontainer[0]->tulisan_kecil = $row["tulisan_kecil_kotak_1"];
				$kotak_top_f_tengah->kontainer[1]->tulisan_kecil = $row["tulisan_kecil_kotak_2"];
				$kotak_top_f_tengah->kontainer[2]->tulisan_kecil = $row["tulisan_kecil_kotak_3"];
			}
		} 
		else {
			echo "You have no data for change";
		}
	}
	
	
	// bagian kotak kanan
	{	
		class kotak_top_f_kanan extends kontainer
		{
		public $tulisan_di_tombol ;
		public function __construct(){
		}
		}
		$kotak_top_f_kanan = new kotak_top_f_kanan();
	
		$sql = mysqli_query($connection,"SELECT * FROM top_f_kotak_kanan")or die("gagal akses database");
		$productCount = mysqli_num_rows($sql); // count the output amount
		if ($productCount > 0) {
			while($row = mysqli_fetch_array($sql)){ 
				$kotak_top_f_kanan->tulisan_besar = $row["tulisan_besar"];
				$kotak_top_f_kanan->tulisan_kecil = $row["tulisan_kecil"];
				$kotak_top_f_kanan->image_path = $row["image_path"];
				$kotak_top_f_kanan->tulisan_di_tombol = $row["tulisan_di_tombol"];
			}
		} 
		else {
			echo "You have no data for change";
		}
	}	
	
	
	
	

	?>

<?php 
	
	class top_g 
	{
		public $judul ;
		public $isi = array();
		public $image_path ;
		public $url_video = array();
		//public $kontainer_bawah = array();
		public function __construct()
		{
			for($i = 0 ; $i < 3 ; $i++)
			{
				$this->isi[$i]="";
				$this->url_video[$i]="";
				//$this->kontainer_bawah[$i] = new kontainer();
			}
		}
	}
	
		$top_g = new top_g();
	// tabel top g sudah dibuat jadi tingggal ambil data saja
		$sql = mysqli_query($connection,"SELECT * FROM top_g")or die("gagal akses database");
		$productCount = mysqli_num_rows($sql); // count the output amount
		if ($productCount > 0) {
			while($row = mysqli_fetch_array($sql)){ 
				$top_g->judul = $row["judul"];
				$top_g->image_path = $row["image_path"];
				$top_g->isi[0] = $row["isi_1"];
				$top_g->isi[1] = $row["isi_2"];
				$top_g->isi[2] = $row["isi_3"];
				$top_g->url_video[0] = $row["url_video_1"];
				$top_g->url_video[1] = $row["url_video_2"];
				$top_g->url_video[2] = $row["url_video_3"];
				
			}
		} 
		else {
			echo "You have no data for change";
		}
?>	


	
<html lang="en-US" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Real Factory &#8211; HTML Template For Factory / Industry / Construction</title>
    

    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Hind%3A300%2Cregular%2C500%2C600%2C700&#038;subset=latin%2Clatin-ext%2Cdevanagari&#038;ver=4.9.7' type='text/css' media='all'>

    <link rel='stylesheet' href='plugins/revslider/public/assets/css/settings.css' type='text/css' media='all'>
    <link rel='stylesheet' href='css/style-core.css' type='text/css' media='all'>
    <link rel='stylesheet' href='css/rftr-style-custom.css' type='text/css' media='all'>
    <link rel='stylesheet' href='plugins/goodlayers-core/plugins/combine/style.css' type='text/css' media='all'>
    <link rel='stylesheet' href='plugins/goodlayers-core/include/css/page-builder.css' type='text/css' media='all'>


</head>

<body data-rsssl="1" class="home page-template-default page page-id-2039 gdlr-core-body woocommerce-no-js realfactory-body realfactory-body-front realfactory-full  realfactory-with-sticky-navigation gdlr-core-link-to-lightbox">
    <div class="realfactory-mobile-header-wrap">
        <div class="realfactory-mobile-header realfactory-header-background realfactory-style-slide" id="realfactory-mobile-header">
            <div class="realfactory-mobile-header-container realfactory-container">
                <div class="realfactory-logo  realfactory-item-pdlr">
                    <div class="realfactory-logo-inner">
                        <a href="index.html"><img src="images/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="realfactory-mobile-menu-right">
                    <div class="realfactory-main-menu-search" id="realfactory-mobile-top-search"><i class="fa fa-search"></i></div>
                    <div class="realfactory-top-search-wrap">
                        <div class="realfactory-top-search-close"></div>
                        <div class="realfactory-top-search-row">
                            <div class="realfactory-top-search-cell">
                                <form role="search" method="get" class="search-form" action="index.html">
                                    <input type="text" class="search-field realfactory-title-font" placeholder="Search..." value="" name="s">
                                    <div class="realfactory-top-search-submit"><i class="fa fa-search"></i></div>
                                    <input type="submit" class="search-submit" value="Search">
                                    <div class="realfactory-top-search-close"><i class="icon_close"></i></div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="realfactory-mobile-menu"><a class="realfactory-mm-menu-button realfactory-mobile-menu-button realfactory-mobile-button-hamburger-with-border" href="#realfactory-mobile-menu"><i class="fa fa-bars"></i></a>
                        <div class="realfactory-mm-menu-wrap realfactory-navigation-font" id="realfactory-mobile-menu" data-slide="right">
                            <ul id="menu-main-navigation" class="m-menu">
                                <li class="menu-item menu-item-has-children"><a href="index.html">Home</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="index.html">Homepage 1</a></li>
                                        <li class="menu-item"><a href="homepage-2.html">Homepage 2</a></li>
                                        <li class="menu-item"><a href="homepage-3.html">Homepage 3</a></li>
                                        <li class="menu-item"><a href="homepage-4.html">Homepage 4</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children"><a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-has-children"><a href="#">About</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="about-us.html">About Us</a></li>
                                                <li class="menu-item"><a href="about-us-2.html">About Us 2</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children"><a href="#">Contact</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="contact.html">Contact</a></li>
                                                <li class="menu-item"><a href="contact-2.html">Contact 2</a></li>
                                                <li class="menu-item"><a href="contact-3.html">Contact 3</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children"><a href="#">Team</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="team-plain-style.html">Team / Plain Style</a></li>
                                                <li class="menu-item"><a href="team-thumbnail-style.html">Team / Thumbnail Style</a></li>
                                                <li class="menu-item"><a href="team-frame-style.html">Team / Frame Style</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item"><a href="price-table.html">Price Table</a></li>
                                        <li class="menu-item"><a href="maintenance.html">Maintenance</a></li>
                                        <li class="menu-item"><a href="coming-soon.html">Coming Soon</a></li>
                                        <li class="menu-item"><a href="404.html">404 Page</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children"><a href="market-sectors.html">Market Sectors</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="automotive-parts-system.html">Automotive Parts &#038; System</a></li>
                                        <li class="menu-item"><a href="construction-engineering.html">Construction &#038; Engineering</a></li>
                                        <li class="menu-item"><a href="power-energy.html">Power &#038; Energy</a></li>
                                        <li class="menu-item"><a href="aero-space.html">Aero Space</a></li>
                                        <li class="menu-item"><a href="ship-building-insudtry.html">Ship Building Industry</a></li>
                                        <li class="menu-item"><a href="railway.html">Railway</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children"><a href="portfolio-3-columns.html">Portfolio</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-has-children"><a href="#">Portfolio Grid</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="portfolio-2-columns.html">Portfolio 2 Columns</a></li>
                                                <li class="menu-item"><a href="portfolio-3-columns.html">Portfolio 3 Columns</a></li>
                                                <li class="menu-item"><a href="portfolio-4-columns.html">Portfolio 4 Columns</a></li>
                                                <li class="menu-item"><a href="portfolio-5-columns.html">Portfolio 5 Columns</a></li>
                                                <li class="menu-item"><a href="portfolio-2-columns-no-space.html">Portfolio 2 Columns No Space</a></li>
                                                <li class="menu-item"><a href="portfolio-3-columns-no-space.html">Portfolio 3 Columns No Space</a></li>
                                                <li class="menu-item"><a href="portfolio-4-columns-no-space.html">Portfolio 4 Columns No Space</a></li>
                                                <li class="menu-item"><a href="portfolio-5-columns-no-space.html">Portfolio 5 Columns No Space</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children"><a href="#">Portfolio Modern</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="portfolio-modern-2-columns.html">Portfolio Modern 2 Columns</a></li>
                                                <li class="menu-item"><a href="portfolio-modern-3-columns.html">Portfolio Modern 3 Columns</a></li>
                                                <li class="menu-item"><a href="portfolio-modern-4-columns.html">Portfolio Modern 4 Columns</a></li>
                                                <li class="menu-item"><a href="portfolio-modern-5-columns.html">Portfolio Modern 5 Columns</a></li>
                                                <li class="menu-item"><a href="portfolio-modern-2-columns-no-space.html">Portfolio Modern 2 Columns No Space</a></li>
                                                <li class="menu-item"><a href="portfolio-modern-3-columns-no-space.html">Portfolio Modern 3 Columns No Space</a></li>
                                                <li class="menu-item"><a href="portfolio-modern-4-columns-no-space.html">Portfolio Modern 4 Columns No Space</a></li>
                                                <li class="menu-item"><a href="portfolio-modern-5-columns-no-space.html">Portfolio Modern 5 Columns No Space</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children"><a href="#">Portfolio Side Thumbnail</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="portfolio-left-right-large-thumbnail.html">Portfolio Left &#038; Right Large Thumbnail</a></li>
                                                <li class="menu-item"><a href="portfolio-left-large-thumbnail.html">Portfolio Left Large Thumbnail</a></li>
                                                <li class="menu-item"><a href="portfolio-right-large-thumbnail.html">Portfolio Right Large Thumbnail</a></li>
                                                <li class="menu-item"><a href="portfolio-left-right-small-thumbnail.html">Portfolio Left &#038; Right Small Thumbnail</a></li>
                                                <li class="menu-item"><a href="portfolio-left-small-thumbnail.html">Portfolio Left Small Thumbnail</a></li>
                                                <li class="menu-item"><a href="portfolio-right-small-thumbnail.html">Portfolio Right Small Thumbnail</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children"><a href="blog-full-right-sidebar-with-frame.html">Blog</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-has-children"><a href="blog-full-right-sidebar-with-frame.html">Blog Full</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="blog-full-right-sidebar-with-frame.html">Blog Full Right Sidebar With Frame</a></li>
                                                <li class="menu-item"><a href="blog-full-left-sidebar-with-frame.html">Blog Full Left Sidebar With Frame</a></li>
                                                <li class="menu-item"><a href="blog-full-both-sidebar-with-frame.html">Blog Full Both Sidebar With Frame</a></li>
                                                <li class="menu-item"><a href="blog-full-right-sidebar.html">Blog Full Right Sidebar</a></li>
                                                <li class="menu-item"><a href="blog-full-left-sidebar.html">Blog Full Left Sidebar</a></li>
                                                <li class="menu-item"><a href="blog-full-both-sidebar.html">Blog Full Both Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children"><a href="blog-3-columns-with-frame.html">Blog Columns</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="blog-2-columns-with-frame.html">Blog 2 Columns With Frame</a></li>
                                                <li class="menu-item"><a href="blog-3-columns-with-frame.html">Blog 3 Columns With Frame</a></li>
                                                <li class="menu-item"><a href="blog-4-columns-with-frame.html">Blog 4 Columns With Frame</a></li>
                                                <li class="menu-item"><a href="blog-2-columns.html">Blog 2 Columns</a></li>
                                                <li class="menu-item"><a href="blog-3-columns.html">Blog 3 Columns</a></li>
                                                <li class="menu-item"><a href="blog-4-columns.html">Blog 4 Columns</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children"><a href="blog-grid-3-columns-no-space.html">Blog Grid</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="blog-grid-2-columns.html">Blog Grid 2 Columns</a></li>
                                                <li class="menu-item"><a href="blog-grid-3-columns.html">Blog Grid 3 Columns</a></li>
                                                <li class="menu-item"><a href="blog-grid-4-columns.html">Blog Grid 4 Columns</a></li>
                                                <li class="menu-item"><a href="blog-grid-2-columns-no-space.html">Blog Grid 2 Columns No Space</a></li>
                                                <li class="menu-item"><a href="blog-grid-3-columns-no-space.html">Blog Grid 3 Columns No Space</a></li>
                                                <li class="menu-item"><a href="blog-grid-4-columns-no-space.html">Blog Grid 4 Columns No Space</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children"><a href="#">Features</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-has-children"><a href="#">Mega 1</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="accordions-toggles.html">Accordions &#038; Toggles</a></li>
                                                <li class="menu-item"><a href="alert-box.html">Alert Box</a></li>
                                                <li class="menu-item"><a href="blockquotes.html">Blockquotes</a></li>
                                                <li class="menu-item"><a href="buttons.html">Buttons</a></li>
                                                <li class="menu-item"><a href="call-to-action.html">Call To Action</a></li>
                                                <li class="menu-item"><a href="column-services.html">Column Services</a></li>
                                                <li class="menu-item"><a href="columns.html">Columns</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children"><a href="#">Mega 2</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="counters.html">Counters</a></li>
                                                <li class="menu-item"><a href="count-down.html">Count Down</a></li>
                                                <li class="menu-item"><a href="dividers.html">Dividers</a></li>
                                                <li class="menu-item"><a href="dropcaps.html">Dropcaps</a></li>
                                                <li class="menu-item"><a href="featured-boxes.html">Featured Boxes</a></li>
                                                <li class="menu-item"><a href="flip-boxes.html">Flip Boxes</a></li>
                                                <li class="menu-item"><a href="icon-list.html">Icon Lists</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children"><a href="#">Mega 3</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="icons.html">Icons</a></li>
                                                <li class="menu-item"><a href="images.html">Images</a></li>
                                                <li class="menu-item"><a href="team-plain-style.html">Personnel</a></li>
                                                <li class="menu-item"><a href="price-table.html">Price Table</a></li>
                                                <li class="menu-item"><a href="promo-boxes.html">Promo Boxes</a></li>
                                                <li class="menu-item"><a href="skill-bar.html">Skill Bar</a></li>
                                                <li class="menu-item"><a href="skill-circle.html">Skill Circle</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children"><a href="#">Mega 4</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="social-shares.html">Social Shares</a></li>
                                                <li class="menu-item"><a href="stunning-texts.html">Stunning Texts</a></li>
                                                <li class="menu-item"><a href="tabs-horizontal.html">Tabs Horizontal</a></li>
                                                <li class="menu-item"><a href="tabs-vertical.html">Tabs Vertical</a></li>
                                                <li class="menu-item"><a href="testimonial.html">Testimonial</a></li>
                                                <li class="menu-item"><a href="titles.html">Titles</a></li>
                                                <li class="menu-item"><a href="typography.html">Typography</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="realfactory-body-outer-wrapper ">
        <div class="realfactory-body-wrapper clearfix  realfactory-with-transparent-navigation realfactory-with-frame">
            <div class="realfactory-navigation-bar-wrap  realfactory-style-transparent realfactory-sticky-navigation realfactory-sticky-navigation-height realfactory-style-left  realfactory-style-fixed realfactory-without-placeholder">
                <div class="realfactory-navigation-background"></div>
                <div class="realfactory-navigation-container clearfix  realfactory-container">
                    <div class="realfactory-navigation realfactory-item-pdlr clearfix ">
                        <div class="realfactory-main-menu" id="realfactory-main-menu">
                            <ul id="menu-main-navigation-1" class="sf-menu">
                                <li class="menu-item menu-item-home current-menu-item menu-item-has-children realfactory-normal-menu"><a href="index.html" class="sf-with-ul-pre">Home</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item" data-size="60"><a href="index.html">Homepage 1</a></li>
                                        <li class="menu-item" data-size="60"><a href="homepage-2.html">Homepage 2</a></li>
                                        <li class="menu-item" data-size="60"><a href="homepage-3.html">Homepage 3</a></li>
                                        <li class="menu-item" data-size="60"><a href="homepage-4.html">Homepage 4</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children realfactory-normal-menu"><a href="#top_b_scroll" class="sf-with-ul-pre">top_b_scroll</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-has-children" data-size="60"><a href="#" class="sf-with-ul-pre">About</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="about-us.html">About Us</a></li>
                                                <li class="menu-item"><a href="about-us-2.html">About Us 2</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children" data-size="60"><a href="#" class="sf-with-ul-pre">Contact</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="contact.html">Contact</a></li>
                                                <li class="menu-item"><a href="contact-2.html">Contact 2</a></li>
                                                <li class="menu-item"><a href="contact-3.html">Contact 3</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children" data-size="60"><a href="#" class="sf-with-ul-pre">Team</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="team-plain-style.html">Team / Plain Style</a></li>
                                                <li class="menu-item"><a href="team-thumbnail-style.html">Team / Thumbnail Style</a></li>
                                                <li class="menu-item"><a href="team-frame-style.html">Team / Frame Style</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item" data-size="60"><a href="price-table.html">Price Table</a></li>
                                        <li class="menu-item" data-size="60"><a href="maintenance.html">Maintenance</a></li>
                                        <li class="menu-item" data-size="60"><a href="coming-soon.html">Coming Soon</a></li>
                                        <li class="menu-item" data-size="60"><a href="404.html">404 Page</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children realfactory-normal-menu"><a href="market-sectors.html" class="sf-with-ul-pre">Market Sectors</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item" data-size="60"><a href="automotive-parts-system.html">Automotive Parts &#038; System</a></li>
                                        <li class="menu-item" data-size="60"><a href="construction-engineering.html">Construction &#038; Engineering</a></li>
                                        <li class="menu-item" data-size="60"><a href="power-energy.html">Power &#038; Energy</a></li>
                                        <li class="menu-item" data-size="60"><a href="aero-space.html">Aero Space</a></li>
                                        <li class="menu-item" data-size="60"><a href="ship-building-insudtry.html">Ship Building Industry</a></li>
                                        <li class="menu-item" data-size="60"><a href="railway.html">Railway</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children realfactory-mega-menu"><a href="#top_d_scrooll" class="sf-with-ul-pre">Product</a>
                                    <div class="sf-mega sf-mega-full">
                                        <ul class="sub-menu">
                                            <li class="menu-item menu-item-has-children" data-size="20">
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="portfolio-2-columns.html">Portfolio 2 Columns</a></li>
                                                    <li class="menu-item"><a href="portfolio-3-columns.html">Portfolio 3 Columns</a></li>
                                                    <li class="menu-item"><a href="portfolio-4-columns.html">Portfolio 4 Columns</a></li>
                                                    <li class="menu-item"><a href="portfolio-5-columns.html">Portfolio 5 Columns</a></li>
                                                    <li class="menu-item"><a href="portfolio-2-columns-no-space.html">Portfolio 2 Columns No Space</a></li>
                                                    <li class="menu-item"><a href="portfolio-3-columns-no-space.html">Portfolio 3 Columns No Space</a></li>
                                                    <li class="menu-item"><a href="portfolio-4-columns-no-space.html">Portfolio 4 Columns No Space</a></li>
                                                    <li class="menu-item"><a href="portfolio-5-columns-no-space.html">Portfolio 5 Columns No Space</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children" data-size="20">
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="portfolio-modern-2-columns.html">Portfolio Modern 2 Columns</a></li>
                                                    <li class="menu-item"><a href="portfolio-modern-3-columns.html">Portfolio Modern 3 Columns</a></li>
                                                    <li class="menu-item"><a href="portfolio-modern-4-columns.html">Portfolio Modern 4 Columns</a></li>
                                                    <li class="menu-item"><a href="portfolio-modern-5-columns.html">Portfolio Modern 5 Columns</a></li>
                                                    <li class="menu-item"><a href="portfolio-modern-2-columns-no-space.html">Portfolio Modern 2 Columns No Space</a></li>
                                                    <li class="menu-item"><a href="portfolio-modern-3-columns-no-space.html">Portfolio Modern 3 Columns No Space</a></li>
                                                    <li class="menu-item"><a href="portfolio-modern-4-columns-no-space.html">Portfolio Modern 4 Columns No Space</a></li>
                                                    <li class="menu-item"><a href="portfolio-modern-5-columns-no-space.html">Portfolio Modern 5 Columns No Space</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children" data-size="20">
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="portfolio-left-right-large-thumbnail.html">Portfolio Left &#038; Right Large Thumbnail</a></li>
                                                    <li class="menu-item"><a href="portfolio-left-large-thumbnail.html">Portfolio Left Large Thumbnail</a></li>
                                                    <li class="menu-item"><a href="portfolio-right-large-thumbnail.html">Portfolio Right Large Thumbnail</a></li>
                                                    <li class="menu-item"><a href="portfolio-left-right-small-thumbnail.html">Portfolio Left &#038; Right Small Thumbnail</a></li>
                                                    <li class="menu-item"><a href="portfolio-left-small-thumbnail.html">Portfolio Left Small Thumbnail</a></li>
                                                    <li class="menu-item"><a href="portfolio-right-small-thumbnail.html">Portfolio Right Small Thumbnail</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item menu-item-has-children realfactory-normal-menu"><a  class="#top_e_scroll" href="#top_e_scroll">Porfolio</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-has-children" data-size="60"><a href="blog-full-right-sidebar-with-frame.html" class="sf-with-ul-pre">Blog Full</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="blog-full-right-sidebar-with-frame.html">Blog Full Right Sidebar With Frame</a></li>
                                                <li class="menu-item"><a href="blog-full-left-sidebar-with-frame.html">Blog Full Left Sidebar With Frame</a></li>
                                                <li class="menu-item"><a href="blog-full-both-sidebar-with-frame.html">Blog Full Both Sidebar With Frame</a></li>
                                                <li class="menu-item"><a href="blog-full-right-sidebar.html">Blog Full Right Sidebar</a></li>
                                                <li class="menu-item"><a href="blog-full-left-sidebar.html">Blog Full Left Sidebar</a></li>
                                                <li class="menu-item"><a href="blog-full-both-sidebar.html">Blog Full Both Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children" data-size="60"><a href="blog-3-columns-with-frame.html" class="sf-with-ul-pre">Blog Columns</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="blog-2-columns-with-frame.html">Blog 2 Columns With Frame</a></li>
                                                <li class="menu-item"><a href="blog-3-columns-with-frame.html">Blog 3 Columns With Frame</a></li>
                                                <li class="menu-item"><a href="blog-4-columns-with-frame.html">Blog 4 Columns With Frame</a></li>
                                                <li class="menu-item"><a href="blog-2-columns.html">Blog 2 Columns</a></li>
                                                <li class="menu-item"><a href="blog-3-columns.html">Blog 3 Columns</a></li>
                                                <li class="menu-item"><a href="blog-4-columns.html">Blog 4 Columns</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children" data-size="60"><a href="blog-grid-3-columns-no-space.html" class="sf-with-ul-pre">Blog Grid</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="blog-grid-2-columns.html">Blog Grid 2 Columns</a></li>
                                                <li class="menu-item"><a href="blog-grid-3-columns.html">Blog Grid 3 Columns</a></li>
                                                <li class="menu-item"><a href="blog-grid-4-columns.html">Blog Grid 4 Columns</a></li>
                                                <li class="menu-item"><a href="blog-grid-2-columns-no-space.html">Blog Grid 2 Columns No Space</a></li>
                                                <li class="menu-item"><a href="blog-grid-3-columns-no-space.html">Blog Grid 3 Columns No Space</a></li>
                                                <li class="menu-item"><a href="blog-grid-4-columns-no-space.html">Blog Grid 4 Columns No Space</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children realfactory-mega-menu"><a href="#top_f_scroll" class="sf-with-ul-pre">News</a>
                                    <div class="sf-mega sf-mega-full">
                                        <ul class="sub-menu">
                                            <li class="menu-item menu-item-has-children" data-size="15">
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="accordions-toggles.html">Accordions &#038; Toggles</a></li>
                                                    <li class="menu-item"><a href="alert-box.html">Alert Box</a></li>
                                                    <li class="menu-item"><a href="blockquotes.html">Blockquotes</a></li>
                                                    <li class="menu-item"><a href="buttons.html">Buttons</a></li>
                                                    <li class="menu-item"><a href="call-to-action.html">Call To Action</a></li>
                                                    <li class="menu-item"><a href="column-services.html">Column Services</a></li>
                                                    <li class="menu-item"><a href="columns.html">Columns</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children" data-size="15">
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="counters.html">Counters</a></li>
                                                    <li class="menu-item"><a href="count-down.html">Count Down</a></li>
                                                    <li class="menu-item"><a href="dividers.html">Dividers</a></li>
                                                    <li class="menu-item"><a href="dropcaps.html">Dropcaps</a></li>
                                                    <li class="menu-item"><a href="featured-boxes.html">Featured Boxes</a></li>
                                                    <li class="menu-item"><a href="flip-boxes.html">Flip Boxes</a></li>
                                                    <li class="menu-item"><a href="icon-list.html">Icon Lists</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children" data-size="15">
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="icons.html">Icons</a></li>
                                                    <li class="menu-item"><a href="images.html">Images</a></li>
                                                    <li class="menu-item"><a href="team-plain-style.html">Personnel</a></li>
                                                    <li class="menu-item"><a href="price-table.html">Price Table</a></li>
                                                    <li class="menu-item"><a href="promo-boxes.html">Promo Boxes</a></li>
                                                    <li class="menu-item"><a href="skill-bar.html">Skill Bar</a></li>
                                                    <li class="menu-item"><a href="skill-circle.html">Skill Circle</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children" data-size="15">
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="social-shares.html">Social Shares</a></li>
                                                    <li class="menu-item"><a href="stunning-texts.html">Stunning Texts</a></li>
                                                    <li class="menu-item"><a href="tabs-horizontal.html">Tabs Horizontal</a></li>
                                                    <li class="menu-item"><a href="tabs-vertical.html">Tabs Vertical</a></li>
                                                    <li class="menu-item"><a href="testimonial.html">Testimonial</a></li>
                                                    <li class="menu-item"><a href="titles.html">Titles</a></li>
                                                    <li class="menu-item"><a href="typography.html">Typography</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <div class="realfactory-navigation-slide-bar" id="realfactory-navigation-slide-bar"></div>
                        </div>
                        <div class="realfactory-main-menu-right-wrap clearfix ">
                            <div class="realfactory-main-menu-search" id="realfactory-top-search"><i class="fa fa-search"></i></div>
                            <div class="realfactory-top-search-wrap">
                                <div class="realfactory-top-search-close"></div>
                                <div class="realfactory-top-search-row">
                                    <div class="realfactory-top-search-cell">
                                        <form role="search" method="get" class="search-form" action="index.html">
                                            <input type="text" class="search-field realfactory-title-font" placeholder="Search..." value="" name="s">
                                            <div class="realfactory-top-search-submit"><i class="fa fa-search"></i></div>
                                            <input type="submit" class="search-submit" value="Search">
                                            <div class="realfactory-top-search-close"><i class="icon_close"></i></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="realfactory-page-wrapper" id="realfactory-page-wrapper">
                <div class="gdlr-core-page-builder-body">
                    <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 0px 0px;">
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-revolution-slider-item gdlr-core-item-pdlr gdlr-core-item-pdb " style="padding-bottom: 0px;">
                                        <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery" style="margin:0px auto;background:#262626;padding:0px;margin-top:0px;margin-bottom:0px;">
                                            <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.5.1">
                                                <ul>
                                                    <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="upload/slider-1-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description=""> <img src="<?php echo $background_link_banner; ?>" alt="" title="slider-1" width="1800" height="730" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina="">
                                                        <div class="tp-caption   tp-resizeme" id="slide-1-layer-1" data-x="24" data-y="center" data-voffset="-156" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","speed":260,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textalign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 50px; font-weight: 400; color: rgba(248,193,44,1);font-family:Hind;"><?php echo $tulisan_atas; ?></div>
                                                        <div class="tp-caption   tp-resizeme" id="slide-1-layer-2" data-x="17" data-y="center" data-voffset="-49" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"x:-50px;opacity:0;","speed":300,"to":"o:1;","delay":830,"ease":"Power2.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textalign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap; font-size: 130px; font-weight: 700; color: rgba(247,247,247,1);font-family:Hind;"><?php echo $tulisan_tengah_1; ?></div>
                                                        <div class="tp-caption   tp-resizeme" id="slide-1-layer-3" data-x="278" data-y="center" data-voffset="-51" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"x:50px;opacity:0;","speed":300,"to":"o:1;","delay":1150,"ease":"Power2.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textalign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap; font-size: 130px; font-weight: 700; color: rgba(248,193,44,1);font-family:Hind;"><?php echo $tulisan_tengah_2; ?></div>
                                                        <div class="tp-caption   tp-resizeme" id="slide-1-layer-4" data-x="27" data-y="center" data-voffset="44" data-width="['666']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":300,"to":"o:1;","delay":1460,"ease":"Power2.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textalign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8; min-width: 666px; max-width: 666px; white-space: normal; font-size: 20px; line-height: 30px; font-weight: 400; color: rgba(255,255,255,1);font-family:Hind;"><?php echo $tulisan_bawah; ?></div>
                                                        <a href="#"><div class="tp-caption rev-btn " id="slide-1-layer-6" data-x="26" data-y="center" data-voffset="130" data-width="['auto']" data-height="['auto']" data-type="button" data-responsive_offset="on" data-responsive="off" data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":300,"to":"o:1;","delay":1770,"ease":"Power2.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(247,204,86,1);"}]' data-textalign="['left','left','left','left']" data-paddingtop="[17,17,17,17]" data-paddingright="[34,34,34,34]" data-paddingbottom="[17,17,17,17]" data-paddingleft="[34,34,34,34]" style="z-index: 9; white-space: nowrap; font-size: 14px; line-height: 17px; font-weight: 600; color: rgba(10,10,10,1);font-family:Hind;background-color:rgba(248,193,44,1);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Log in</div></a>
                                                    </li>
                                                </ul>
												

                                                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper " style="margin: 0px 0px 0px 0px;padding: 0px 0px 60px 0px;">
                        <div class="gdlr-core-pbf-background-wrap">
                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(upload/about-home-bg.jpg);background-repeat: repeat;background-position: center;" data-parallax-speed="0.2"></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first gdlr-core-hide-in-mobile">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: -100px 0px 0px 0px;padding: 75px 0px 65px 0px;" data-sync-height="height-service-1">
                                        <div class="gdlr-core-pbf-background-wrap">
                                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(<?php echo $kotak_1_background_path; ?>);background-size: cover;background-position: center;" data-parallax-speed="0"></div>
                                        </div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 0px;">
                                                    <div class="gdlr-core-title-item-title-wrap ">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 23px;font-weight: 500;letter-spacing: 0px;text-transform: none;color: #f8c12c;"><?php echo $kotak_1->$tulisan_atas; ?><span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3></div><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 18px;font-weight: 300;font-style: normal;color: #ffffff;"><?php echo $kotak_1->$tulisan_bawah; ?></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-hide-in-mobile">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: -100px 0px 0px 0px;padding: 75px 0px 65px 0px;" data-sync-height="height-service-1">
                                        <div class="gdlr-core-pbf-background-wrap">
                                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(<?php echo $kotak_2_background_path; ?>);background-size: cover;background-position: center;" data-parallax-speed="0"></div>
                                        </div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 0px;">
                                                    <div class="gdlr-core-title-item-title-wrap ">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 23px;font-weight: 300;letter-spacing: 0px;text-transform: none;color: #f8c12c;"><?php echo $kotak_2->$tulisan_atas; ?><span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3></div><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 18px;font-weight: 300;font-style: normal;color: #ffffff;"><?php echo $kotak_2->$tulisan_bawah; ?></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-hide-in-mobile">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: -100px 0px 0px 0px;padding: 75px 0px 65px 0px;" data-sync-height="height-service-1">
                                        <div class="gdlr-core-pbf-background-wrap">
                                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(<?php echo $kotak_3_background_path; ?>);background-size: cover;background-position: center;" data-parallax-speed="0"></div>
                                        </div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 0px;">
                                                    <div class="gdlr-core-title-item-title-wrap ">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 23px;font-weight: 300;letter-spacing: 0px;text-transform: none;color: #f8c12c;"><?php echo $kotak_3->$tulisan_atas; ?><span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3></div><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 18px;font-weight: 300;font-style: normal;color: #ffffff;"><?php echo $kotak_3->$tulisan_bawah; ?></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: 0px 0px 0px -15px;padding: 100px 0px 0px 0px;">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 15px;">
                                                    <div class="gdlr-core-title-item-title-wrap ">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 36px;font-weight: 300;letter-spacing: 0px;text-transform: none;" id="top_b_scroll"><?php echo $top_b_judul; ?><span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-divider-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-divider-item-normal">
                                                    <div class="gdlr-core-divider-container gdlr-core-left-align" style="max-width: 106px;">
                                                        <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #d8a419;border-bottom-width: 2px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-40">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 100px 0px 0px 0px;">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-left-align" style="padding-bottom: 40px;">
                                                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;"><img src="<?php echo $top_b_icon_path; ?>" alt="" width="240" height="62"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 15px;">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 17px;">
                                                        <p><?php echo $top_b_tulisan_dibawah; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"><a class="gdlr-core-button  gdlr-core-button-solid gdlr-core-button-no-border" href="#" style="color: #f8c12c;padding: 15px 30px 15px 30px;margin: 0px 10px 10px 0px;border-radius: 3px;-moz-border-radius: 3px;-webkit-border-radius: 3px;background: #303030 ;"><span class="gdlr-core-content">Learn More</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper " style="padding: 55px 0px 55px 0px;" data-skin="Call to action">
                        <div class="gdlr-core-pbf-background-wrap">
                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(<?php echo $top_c_background_path; ?>);background-size: cover;background-position: center;" data-parallax-speed="0.1"></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-call-to-action-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-style-left-align-right-button" style="padding-bottom: 0px;">
                                        <div class="gdlr-core-call-to-action-item-inner">
                                            <div class="gdlr-core-call-to-action-item-content-wrap">
                                                <h3 class="gdlr-core-call-to-action-item-title" style="font-size: 26px;font-weight: 300;letter-spacing: 0px;"><?php echo $top_c_tulisan; ?></h3></div>
                                            <div class="gdlr-core-call-to-action-item-button"><a class="gdlr-core-button  gdlr-core-button-solid gdlr-core-button-no-border" href="#" style="border-radius: 3px;-moz-border-radius: 3px;-webkit-border-radius: 3px;"><span class="gdlr-core-content">Learn More</span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper " style="padding: 80px 0px 0px 0px;"id ="top_d_scrooll">
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 55px;">
                                        <div class="gdlr-core-title-item-title-wrap  gdlr-core-js-2 gdlr-core-with-divider">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 36px;font-weight: 300;letter-spacing: 0px;text-transform: none;margin-right: 30px;" ><?php echo $kotak_top_d[0]->judul_teratas; ?><span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3>
                                            <div class="gdlr-core-title-item-divider gdlr-core-right gdlr-core-skin-divider"></div>
                                        </div>
                                    </div>
                                </div>
							<?php 
								
								for($i = 0 ; $i < (int)((count($kotak_top_d)-1) / 3)  ; $i++){
									echo '<div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">';
									  echo  '<div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">';
										 echo  '<div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">';
											  echo  '<div class="gdlr-core-pbf-element">';
												  echo  '<div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 35px;">';
													  echo  '<div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-round" style="border-width: 0px;">';
														 echo   '<a href="'.$kotak_top_d[$i*3+1]->link."?id=".$kotak_top_d[$i*3+1]->id.'" target="_self"><img src="'.$kotak_top_d[$i*3+1]->background_path.'" alt="" width="800" height="420"><span class="gdlr-core-image-overlay " style="background: rgba(236, 182, 34, 0.6) ;"><i class="gdlr-core-image-overlay-icon fa fa-link gdlr-core-size-28" style="color: #ffffff;"></i></span></a>';
													  echo '</div>';
												  echo  '</div>';
											  echo  '</div>';
											   echo '<div class="gdlr-core-pbf-element">';
												 echo   '<div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 20px;">';
													echo    '<div class="gdlr-core-title-item-title-wrap ">';
														 echo   '<h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 20px;font-weight: 500;letter-spacing: 0px;text-transform: none;"><a href="'.$kotak_top_d[$i*3+1]->link."?id=".$kotak_top_d[$i*3+1]->id.'" target="_self">'.$kotak_top_d[$i*3+1]->judul.'</a><span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3></div>';
												   echo '</div>';
											   echo '</div>';
											  echo  '<div class="gdlr-core-pbf-element">';
												   echo '<div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 10px;">';
													  echo  '<div class="gdlr-core-text-box-item-content" style="font-size: 16px;">';
														 echo   '<p>'.$kotak_top_d[$i*3+1]->tulisan.'</p>';
													  echo  '</div>';
												   echo '</div>';
											  echo  '</div>';
										  echo  '</div>';
									  echo  '</div>';
								  echo  '</div>';								
								  echo	'<div class="gdlr-core-pbf-column gdlr-core-column-20">';
									  echo	'<div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">';
										  echo	'<div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">';
											  echo	'<div class="gdlr-core-pbf-element">';
												  echo	'<div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 35px;">';
													  echo	'<div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-round" style="border-width: 0px;">';
														 echo	'<a href="'.$kotak_top_d[$i*3+1+1]->link."?id=".$kotak_top_d[$i*3+1+1]->id.'" target="_self"><img src="'.$kotak_top_d[$i*3+1+1]->background_path.'" alt="" width="800" height="420"><span class="gdlr-core-image-overlay " style="background: rgba(236, 182, 34, 0.6) ;"><i class="gdlr-core-image-overlay-icon fa fa-link gdlr-core-size-28" style="color: #ffffff;"></i></span></a>';
													  echo	'</div>';
												 echo	'</div>';
												echo '</div>';
												echo '<div class="gdlr-core-pbf-element">';
												 echo	'<div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 20px;">';
													  echo	'<div class="gdlr-core-title-item-title-wrap ">';
														 echo	'<h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 20px;font-weight: 500;letter-spacing: 0px;text-transform: none;"><a href="'.$kotak_top_d[$i*3+1+1]->link."?id=".$kotak_top_d[$i*3+1+1]->id.'" target="_self">'.$kotak_top_d[$i*3+1+1]->judul.'</a><span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3></div>';
												  echo	'</div>';
												echo '</div>';
												echo '<div class="gdlr-core-pbf-element">';
												 echo	'<div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">';
													 echo	'<div class="gdlr-core-text-box-item-content" style="font-size: 16px;">';
														 echo	'<p>'.$kotak_top_d[$i*3+1+1]->tulisan.'</p>';
													 echo	'</div>';
													echo '</div>';
												echo '</div>';
											echo '</div>';
										echo '</div>';
									echo '</div>';		
									echo '<div class="gdlr-core-pbf-column gdlr-core-column-20">';
										echo '<div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">';
											echo '<div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">';
												echo '<div class="gdlr-core-pbf-element">';
												  echo	'<div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 35px;">';
													 echo	'<div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-round" style="border-width: 0px;">';
														echo	'<a href="'.$kotak_top_d[$i*3+1+2]->link."?id=".$kotak_top_d[$i*3+1+2]->id.'" target="_self"><img src="'.$kotak_top_d[$i*3+1+2]->background_path.'" alt="" width="800" height="420"><span class="gdlr-core-image-overlay " style="background: rgba(236, 182, 34, 0.6) ;"><i class="gdlr-core-image-overlay-icon fa fa-link gdlr-core-size-28" style="color: #ffffff;"></i></span></a>';
													 echo	'</div>';
													echo	'</div>';
												echo	'</div>';
												echo	'<div class="gdlr-core-pbf-element">';
													echo	'<div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 20px;">';
														echo	'<div class="gdlr-core-title-item-title-wrap ">';
															echo	'<h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 20px;font-weight: 500;letter-spacing: 0px;text-transform: none;"><a href="'.$kotak_top_d[$i*3+1+2]->link."?id=".$kotak_top_d[$i*3+1+2]->id.'" target="_self">'.$kotak_top_d[$i*3+1+2]->judul.'</a><span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3></div>';
													echo	'</div>';
												echo	'</div>';
												echo	'<div class="gdlr-core-pbf-element">';
													echo	'<div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">';
														echo	'<div class="gdlr-core-text-box-item-content" style="font-size: 16px;">';
															echo	'<p>'.$kotak_top_d[$i*3+1+2]->tulisan.'</p>';
														echo	'</div>';
													echo	'</div>';
												echo	'</div>';
											echo	'</div>';
										echo	'</div>';
									echo	'</div>';
									
								}
							?>
							
                                
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper " style="padding: 30px 0px 0px 0px;" id="top_e_scroll">
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                                <div class="gdlr-core-pbf-column gdlr-core-column-15 gdlr-core-column-first" data-skin="Dark">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 100px 40px 0px 40px;" data-sync-height="height-port">
                                        <div class="gdlr-core-pbf-background-wrap">
                                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(<?php echo $kotak_sebelah_kiri->background_path; ?>);background-size: cover;background-position: center;" data-parallax-speed="0.2"></div>
                                        </div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content" style="max-width: 300px;">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 15px;">
                                                    <div class="gdlr-core-title-item-title-wrap ">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 24px;font-weight: 500;letter-spacing: 0px;text-transform: none;color: #f8c12c;"><?php echo $kotak_sebelah_kiri->judul; ?><span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-divider-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-divider-item-normal" style="padding-bottom: 40px;">
                                                    <div class="gdlr-core-divider-container gdlr-core-left-align" style="max-width: 93px;">
                                                        <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #f8c12c;border-bottom-width: 2px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align hide-tablet" style="padding-bottom: 10px;">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 16px;">
                                                        <p><?php echo $kotak_sebelah_kiri->tulisan; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                                    <div class="gdlr-core-text-box-item-content">
                                                        <p><a href="#">More <i class="fa fa-long-arrow-right" style="font-size: 16px;color: #fff;margin-left: 10px;"></i></a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-45" data-skin="Portfolio Homepage">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " data-sync-height="height-port">
                                        <div class="gdlr-core-pbf-background-wrap">
                                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(upload/port-bg.jpg);background-size: cover;background-position: center;" data-parallax-speed="0"></div>
                                        </div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content" >
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-portfolio-item gdlr-core-item-pdb clearfix  gdlr-core-portfolio-item-style-grid-no-space gdlr-core-item-pdlr" style="padding-bottom: 10px;">
                                                    <div class="gdlr-core-flexslider flexslider gdlr-core-js-2 " data-type="carousel" data-column="4" data-nav="navigation" data-nav-parent="gdlr-core-portfolio-item" data-disable-autoslide="1">
                                                        <ul class="slides">
															<?php													
															for($i = 0 ; $i < $jumlah_item_top_e ; $i++)
															{
																echo '<li>';
																	echo '<div class="gdlr-core-portfolio-grid  gdlr-core-left-align gdlr-core-style-normal">';
																		echo '<div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image  gdlr-core-style-title-icon">';
																			echo '<div class="gdlr-core-portfolio-thumbnail-image-wrap  gdlr-core-zoom-on-hover"><img src="'.$kotak[$i]->background_path.'" alt="" width="500" height="625"><span class="gdlr-core-image-overlay  gdlr-core-portfolio-overlay gdlr-core-image-overlay-center-icon gdlr-core-js"><span class="gdlr-core-image-overlay-content"><span class="gdlr-core-portfolio-title gdlr-core-title-font"><a href="'.$kotak[$i]->link.'?id='.$kotak[$i]->id.'">'.$kotak[$i]->tulisan_di_dalam_kotak.'</a></span><span class="gdlr-core-portfolio-icon-wrap"><a class="gdlr-core-ilightbox gdlr-core-js " href="'.$kotak[8]->background_path.'" data-ilightbox-group="gdlr-core-img-group-1"><i class="gdlr-core-portfolio-icon icon_zoom-in_alt"></i></a></span></span>';
																				echo '</span>';
																			echo '</div>';
																		echo '</div>';
																		echo '<div class="gdlr-core-portfolio-content-wrap gdlr-core-skin-divider">';
																			echo '<h3 class="gdlr-core-portfolio-title gdlr-core-skin-title" style="font-size: 18px;font-weight: 600;letter-spacing: 0px;text-transform: none;"><a href="'.$kotak[$i]->link.'?id='.$kotak[$i]->id.'">'.$kotak[$i]->judul_tulisan_di_bawah_kotak.'</a></h3><span class="gdlr-core-portfolio-info gdlr-core-portfolio-info-tag gdlr-core-info-font gdlr-core-skin-caption"><a href="'.$kotak[$i]->link.'?id='.$kotak[$i]->id.'" rel="tag">'.$kotak[$i]->tulisan_di_bawah_kotak_1.'</a> <span class="gdlr-core-sep">/</span> <a href="'.$kotak[$i]->link.'?id='.$kotak[$i]->id.'" rel="tag">'.$kotak[$i]->tulisan_di_bawah_kotak_2.'</a></span>';
																		echo '</div>';
																	echo '</div>';
																echo '</li>';
															}
															?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 0px 0px;" id = "top_f_scroll">
                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #ececec ;"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first" data-skin="Grey">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 85px 0px 0px 0px;" data-sync-height="height-financial">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 45px;" id="gdlr-core-title-item-id-27983">
                                                    <div class="gdlr-core-title-item-title-wrap  gdlr-core-js-2 gdlr-core-with-link-text">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 28px;font-weight: 500;letter-spacing: 0px;text-transform: none;color: #141414;" ><?php echo $kotak_top_f_kiri->tulisan_besar; ?><span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3><a href="#" target="_self" class="gdlr-core-title-item-link"><?php echo $kotak_top_f_kiri->tulisan_kecil; ?></a></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-list">
                                                    <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
													
														<?php
														
														for($i = 0 ; $i < Count($top_f_news);$i++){
															echo '<div class="gdlr-core-item-list gdlr-core-blog-list gdlr-core-item-pdlr  gdlr-core-blog-list-with-frame">';
																echo '<div class="gdlr-core-blog-list-frame gdlr-core-skin-e-background">';
																	echo '<div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span class="gdlr-core-blog-info-sep">/</span><a href="#">'.$top_f_news[$i]->tempat.' , '.$top_f_news[$i]->tanggal.'</a></span>';
																	  echo '</div>';
																	   echo '<h3 class="gdlr-core-blog-title gdlr-core-skin-title"><a href="'.$top_f_news[$i]->link.'?id='.$top_f_news[$i]->id.'">'.$top_f_news[$i]->judul.'</a></h3></div>';
																echo '</div>';															
														}
														?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 85px 25px 40px 10px;" data-sync-height="height-financial">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 45px;">
                                                    <div class="gdlr-core-title-item-title-wrap ">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 28px;font-weight: 500;letter-spacing: 0px;text-transform: none;color: #141414;"><?php echo $kotak_top_f_tengah->tulisan_besar; ?><span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 25px;">
                                                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;"><img src="<?php echo $kotak_top_f_tengah->image_path ; ?>" alt="" width="450" height="252"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-with-divider">
                                                    <ul>
                                                        <li class=" gdlr-core-skin-divider gdlr-core-with-hover" style="border-color: #d8d8d8;margin-bottom: 3px;"><a href="#" target="_self"><span class="gdlr-core-icon-list-icon-wrap"><i class="gdlr-core-icon-list-icon-hover icon_check_alt2" style="font-size: 16px;width: 16px;"></i><i class="gdlr-core-icon-list-icon icon_check_alt2" style="font-size: 16px;width: 16px;"></i></span><span class="gdlr-core-icon-list-content" style="font-size: 15px;"><?php echo $kotak_top_f_tengah->kontainer[0]->tulisan_kecil; ?></span></a></li>
                                                        <li class=" gdlr-core-skin-divider gdlr-core-with-hover" style="border-color: #d8d8d8;margin-bottom: 3px;"><a href="#" target="_self"><span class="gdlr-core-icon-list-icon-wrap"><i class="gdlr-core-icon-list-icon-hover icon_check_alt2" style="font-size: 16px;width: 16px;"></i><i class="gdlr-core-icon-list-icon icon_check_alt2" style="font-size: 16px;width: 16px;"></i></span><span class="gdlr-core-icon-list-content" style="font-size: 15px;"><?php echo $kotak_top_f_tengah->kontainer[1]->tulisan_kecil; ?></span></a></li>
                                                        <li class=" gdlr-core-skin-divider gdlr-core-with-hover" style="border-color: #d8d8d8;margin-bottom: 3px;"><a href="#" target="_self"><span class="gdlr-core-icon-list-icon-wrap"><i class="gdlr-core-icon-list-icon-hover icon_check_alt2" style="font-size: 16px;width: 16px;"></i><i class="gdlr-core-icon-list-icon icon_check_alt2" style="font-size: 16px;width: 16px;"></i></span><span class="gdlr-core-icon-list-content" style="font-size: 15px;"><?php echo $kotak_top_f_tengah->kontainer[2]->tulisan_kecil; ?></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-20" data-skin="Dark">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js  gdlr-core-column-extend-right" style="padding: 80px 0px 35px 56px;" data-sync-height="height-financial">
                                        <div class="gdlr-core-pbf-background-wrap">
                                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(<?php echo $kotak_top_f_kanan->image_path; ?>);background-size: cover;background-position: center;" data-parallax-speed="0.2"></div>
                                        </div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 40px;">
                                                    <div class="gdlr-core-title-item-title-wrap ">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 35px;font-weight: 300;letter-spacing: 0px;text-transform: none;color: #f8c12c;"><?php echo $kotak_top_f_kanan->tulisan_besar; ?><span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 18px;">
                                                        <p><?php echo $kotak_top_f_kanan->tulisan_kecil; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"><a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-with-border" href="#" style="font-size: 15px;color: #f8c12c;padding: 15px 28px 15px 28px;border-radius: 3px;-moz-border-radius: 3px;-webkit-border-radius: 3px;border-width: 2px 2px 2px 2px;border-color: #f8c12c;"><span class="gdlr-core-content"><?php echo $kotak_top_f_kanan->tulisan_di_tombol;?></span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper " style="padding: 110px 0px 70px 0px;" data-skin="Dark">
                        <div class="gdlr-core-pbf-background-wrap">
                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(<?php echo $top_g->image_path; ?>);background-size: cover;background-position: center;" data-parallax-speed="0.2"></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container-custom" style="max-width: 655px;">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 20px;">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 36px;font-weight: 300;letter-spacing: 0px;text-transform: none;color: #f8c12c;"><?php echo $top_g->judul; ?><span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3></div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-divider-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-divider-item-normal" style="padding-bottom: 50px;">
                                        <div class="gdlr-core-divider-container gdlr-core-center-align" style="max-width: 87px;">
                                            <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-bottom-width: 2px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-testimonial-item gdlr-core-item-pdb clearfix  gdlr-core-testimonial-style-center gdlr-core-item-pdlr">
                                        <div class="gdlr-core-flexslider flexslider gdlr-core-js-2 gdlr-core-nav-style-middle-large" data-type="carousel" data-column="1" data-nav="bullet" data-vcenter-nav="1">
                                            <ul class="slides">
                                                <li class="gdlr-core-item-mglr">
                                                    <div class="gdlr-core-testimonial clearfix">
                                                        <div class="gdlr-core-testimonial-content-wrap">
                                                            <div class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content" style="font-size: 15px;">
                                                                <p><?php echo $top_g->isi[0]; ?></p>
                                                            </div>
                                                            <div class="gdlr-core-testimonial-quote gdlr-core-quote-font gdlr-core-skin-icon">&#8220;</div>
                                                           
                                                               
                                                               
                                                                    <div class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title" style="color: #ffffff;"> 
																		<iframe width="300" height="150" src="<?php echo $top_g->url_video[0]; ?>"></iframe>
																	</div>
                                                               
                                                              
                                                          
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-core-item-mglr">
                                                    <div class="gdlr-core-testimonial clearfix">
                                                        <div class="gdlr-core-testimonial-content-wrap">
                                                            <div class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content" style="font-size: 15px;">
                                                                <p><?php echo $top_g->isi[1]; ?></p>
                                                            </div>
                                                            <div class="gdlr-core-testimonial-quote gdlr-core-quote-font gdlr-core-skin-icon">&#8220;</div>
                                                             <div class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title" style="color: #ffffff;"> 
																		<iframe width="300" height="150" src="<?php echo $top_g->url_video[1]; ?>"></iframe>
															 </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-core-item-mglr">
                                                    <div class="gdlr-core-testimonial clearfix">
                                                        <div class="gdlr-core-testimonial-content-wrap">
                                                            <div class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content" style="font-size: 15px;">
                                                                <p><?php echo $top_g->isi[2]; ?></p>
                                                            </div>
                                                            <div class="gdlr-core-testimonial-quote gdlr-core-quote-font gdlr-core-skin-icon">&#8220;</div>
                                                             <div class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title" style="color: #ffffff;"> 
																		<iframe width="300" height="150" src="<?php echo $top_g->url_video[2]; ?>"></iframe>
															 </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper " style="padding: 45px 0px 15px 0px;">
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-gallery-item gdlr-core-item-pdb clearfix  gdlr-core-gallery-item-style-grid gdlr-core-item-pdlr ">
                                        <div class="gdlr-core-flexslider flexslider gdlr-core-js-2 " data-type="carousel" data-column="5" data-nav="none" data-nav-parent="gdlr-core-blog-item">
                                            <ul class="slides">
                                                <li class="gdlr-core-item-mglr">
                                                    <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                        <a href="#" target="_self"><img src="upload/top_h_background_1.jpg" alt="" width="420" height="240"></a>
                                                    </div>
                                                </li>
                                                <li class="gdlr-core-item-mglr">
                                                    <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                        <a href="#" target="_self"><img src="upload/top_h_background_2.jpg" alt="" width="420" height="240"></a>
                                                    </div>
                                                </li>
                                                <li class="gdlr-core-item-mglr">
                                                    <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                        <a href="#" target="_self"><img src="upload/top_h_background_3.jpg" alt="" width="420" height="240"></a>
                                                    </div>
                                                </li>
                                                <li class="gdlr-core-item-mglr">
                                                    <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                        <a href="#" target="_self"><img src="upload/top_h_background_4.jpg" alt="" width="420" height="240"></a>
                                                    </div>
                                                </li>
                                                <li class="gdlr-core-item-mglr">
                                                    <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                        <a href="#" target="_self"><img src="upload/top_h_background_5.jpg" alt="" width="420" height="240"></a>
                                                    </div>
                                                </li>
                                                <li class="gdlr-core-item-mglr">
                                                    <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                        <a href="#" target="_self"><img src="upload/top_h_background_6.jpg" alt="" width="420" height="240"></a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                <div class="realfactory-footer-wrapper">
                    <div class="realfactory-footer-container realfactory-container clearfix">
                        
                    </div>
                </div>
                <div class="realfactory-copyright-wrapper">
                    <div class="realfactory-copyright-container realfactory-container">
                        <div class="realfactory-copyright-text realfactory-item-pdlr">Copyright 2018 max-themes, All Right Reserved</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script type='text/javascript' src='js/jquery/jquery.js'></script>
    <script type='text/javascript' src='js/jquery/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js'></script>
    <script type='text/javascript' src='plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js'></script>

    <script type='text/javascript' src='js/jquery/ui/effect.min.js'></script>

    <script type='text/javascript' src='js/script.js'></script>
    <script type='text/javascript' src='plugins/goodlayers-core/plugins/combine/script.js'></script>

    <script type='text/javascript' src='plugins/goodlayers-core/include/js/page-builder.js'></script>


    <script type="text/javascript" src="plugins/revslider/public/assets/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="plugins/revslider/public/assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="plugins/revslider/public/assets/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="plugins/revslider/public/assets/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="plugins/revslider/public/assets/js/extensions/revolution.extension.parallax.min.js"></script>  
    <script type="text/javascript" src="plugins/revslider/public/assets/js/extensions/revolution.extension.actions.min.js"></script> 
    <script type="text/javascript">
        /*<![CDATA[*/
        function setREVStartSize(e) {
            try {
                var i = jQuery(window).width(),
                    t = 9999,
                    r = 0,
                    n = 0,
                    l = 0,
                    f = 0,
                    s = 0,
                    h = 0;
                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                        f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                    }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                    var u = (e.c.width(), jQuery(window).height());
                    if (void 0 != e.fullScreenOffsetContainer) {
                        var c = e.fullScreenOffsetContainer.split(",");
                        if (c) jQuery.each(c, function(e, i) {
                            u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                        }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                    }
                    f = u
                } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                e.c.closest(".rev_slider_wrapper").css({
                    height: f
                })
            } catch (d) {
                console.log("Failure at Presize of Slider:" + d)
            }
        }; /*]]>*/
    </script>
    <script type="text/javascript">
        /*<![CDATA[*/
        function revslider_showDoubleJqueryError(sliderID) {
            var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
            errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
            errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
            errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
            errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
            jQuery(sliderID).show().html(errorMessage);
        } /*]]>*/
    </script>
    <script>
        /*<![CDATA[*/
        var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
        var htmlDivCss = "";
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement("div");
            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
        } /*]]>*/
    </script>
    <script>
        /*<![CDATA[*/
        var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
        var htmlDivCss = "";
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement("div");
            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
        } /*]]>*/
    </script>
    <script type="text/javascript">
        setREVStartSize({
            c: jQuery('#rev_slider_1_1'),
            gridwidth: [1180],
            gridheight: [725],
            sliderLayout: 'auto'
        });
        var revapi1, tpj = jQuery;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_1_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_1_1");
            } else {
                revapi1 = tpj("#rev_slider_1_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "//demo.goodlayers.com/realfactory/wp-content/plugins/revslider/public/assets/js/",
                    sliderLayout: "auto",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "off",
                        arrows: {
                            style: "uranus",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: false,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 20,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 20,
                                v_offset: 0
                            }
                        }
                    },
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: 1180,
                    gridheight: 725,
                    lazyType: "none",
                    shadow: 0,
                    spinner: "off",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
        });
    </script>
    <script>
        /*<![CDATA[*/
        var htmlDivCss = unescape("%23rev_slider_1_1%20.uranus.tparrows%20%7B%0A%20%20width%3A50px%3B%0A%20%20height%3A50px%3B%0A%20%20background%3Argba%28255%2C255%2C255%2C0%29%3B%0A%20%7D%0A%20%23rev_slider_1_1%20.uranus.tparrows%3Abefore%20%7B%0A%20width%3A50px%3B%0A%20height%3A50px%3B%0A%20line-height%3A50px%3B%0A%20font-size%3A40px%3B%0A%20transition%3Aall%200.3s%3B%0A-webkit-transition%3Aall%200.3s%3B%0A%20%7D%0A%20%0A%20%20%23rev_slider_1_1%20.uranus.tparrows%3Ahover%3Abefore%20%7B%0A%20%20%20%20opacity%3A0.75%3B%0A%20%20%7D%0A");
        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement('div');
            htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
            document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
        } /*]]>*/
    </script>

</body>
</html>
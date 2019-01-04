<?php	
	include "connection.php";
	$id = $_GET["id"];
	class kotak_top_e{
		public $background_path = "upload/landmark-bridge-metal-architecture-500x625.jpg";
		public $tulisan_di_dalam_kotak = "tulisan_di_dalam_kotak" ;
		public $judul_tulisan_di_bawah_kotak = "judul_tulisan_di_bawah_kotak";
		public $tulisan_di_bawah_kotak_1 = "tulisan_di_bawah_kotak_1";
		public $tulisan_di_bawah_kotak_2 = "tulisan_di_bawah_kotak_2";
		public $link;
		public $id;
		public $keterangan;
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
	$jumlah_item_top_e = $Count ;
	for($i = 0 ; $i < $Count ; $i++)
	{
		$kotak[$i] = new kotak_top_e();
	}
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
				 $kotak[$index]->keterangan = $row["keterangan"];
				  if($id == $row["id"])
				 {
					 $id = $index + 1 ;
				 }
				
				 $index++;
		}
	} 
	else {
		echo "You have no data for change";
	}
 ?>



<!DOCTYPE html>
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
                                <li class="menu-item menu-item-home menu-item-has-children realfactory-normal-menu"><a href="index.php" class="sf-with-ul-pre">Home</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item" data-size="60"><a href="index.html">Homepage 1</a></li>
                                        <li class="menu-item" data-size="60"><a href="homepage-2.html">Homepage 2</a></li>
                                        <li class="menu-item" data-size="60"><a href="homepage-3.html">Homepage 3</a></li>
                                        <li class="menu-item" data-size="60"><a href="homepage-4.html">Homepage 4</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children realfactory-normal-menu"><a href="#" class="sf-with-ul-pre">Pages</a>
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
                                <li class="menu-item current-menu-item menu-item-has-children realfactory-normal-menu"><a href="market-sectors.html" class="sf-with-ul-pre">Market Sectors</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item" data-size="60"><a href="automotive-parts-system.html">Automotive Parts &#038; System</a></li>
                                        <li class="menu-item" data-size="60"><a href="construction-engineering.html">Construction &#038; Engineering</a></li>
                                        <li class="menu-item" data-size="60"><a href="power-energy.html">Power &#038; Energy</a></li>
                                        <li class="menu-item" data-size="60"><a href="aero-space.html">Aero Space</a></li>
                                        <li class="menu-item" data-size="60"><a href="ship-building-insudtry.html">Ship Building Industry</a></li>
                                        <li class="menu-item" data-size="60"><a href="railway.html">Railway</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children realfactory-mega-menu"><a href="portfolio-3-columns.html" class="sf-with-ul-pre">Portfolio</a>
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
                                <li class="menu-item menu-item-has-children realfactory-normal-menu"><a href="blog-full-right-sidebar-with-frame.html" class="sf-with-ul-pre">Blog</a>
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
                                <li class="menu-item menu-item-has-children realfactory-mega-menu"><a href="#" class="sf-with-ul-pre">Features</a>
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

            <div class="realfactory-page-title-wrap  realfactory-style-custom realfactory-left-align">
                <div class="realfactory-header-transparent-substitute"></div>
                <div class="realfactory-page-title-overlay"></div>
                <div class="realfactory-page-title-container realfactory-container">
                    <div class="realfactory-page-title-content realfactory-item-pdlr">
                        <h1 class="realfactory-page-title"><?php echo $kotak[$id-1]->judul_tulisan_di_bawah_kotak; ?></h1>
                        <div class="realfactory-page-caption">Caption aligned here</div>
                    </div>
                </div>
            </div>
            <div class="realfactory-breadcrumbs">
                <div class="realfactory-breadcrumbs-container realfactory-container">
                    <div class="realfactory-breadcrumbs-item realfactory-item-pdlr"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Real Factory." href="https://demo.goodlayers.com/realfactory" class="home"><span property="name">Home</span></a>
                        <meta property="position" content="1">
                        </span><i class="fa fa-angle-right"></i> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Market Sectors." href="#" class="post post-page"><span property="name">Portfolio</span></a>
                        <meta property="position" content="2">
                        </span><i class="fa fa-angle-right"></i> <span property="itemListElement" typeof="ListItem"><span property="name"><?php echo $kotak[$id-1]->judul_tulisan_di_bawah_kotak; ?></span>
                        <meta property="position" content="3">
                        </span>
                    </div>
                </div>
            </div>
            <div class="realfactory-page-wrapper" id="realfactory-page-wrapper">
                <div class="gdlr-core-page-builder-body">
                    <div class="gdlr-core-pbf-sidebar-wrapper ">
                        <div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
                            <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-45 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-right" style="padding: 60px 0px 30px 30px;">
                                <div class="gdlr-core-pbf-sidebar-content-inner">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 40px;">
                                            <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;">
                                                <a class="gdlr-core-ilightbox gdlr-core-js " href="upload/traffic-car-vehicle-black.jpg"><img src="<?php echo $kotak[$id-1]->background_path; ?>" alt="" width="900" height="280"><span class="gdlr-core-image-overlay "><i class="gdlr-core-image-overlay-icon fa fa-search gdlr-core-size-22"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 10px 0px 0px 0px;">
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                                                        <div class="gdlr-core-title-item-title-wrap ">
                                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 27px;font-weight: 700;letter-spacing: 0px;text-transform: none;color: #181818;"><?php echo $kotak[$id-1]->judul_tulisan_di_bawah_kotak; ?><span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-30">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-right-align"><a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-with-border" href="#" id="gdlr-core-button-id-72391"><i class="gdlr-core-pos-left fa fa-file-word-o"></i><span class="gdlr-core-content">Download Doc</span></a><a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-with-border" href="#" id="gdlr-core-button-id-13183"><i class="gdlr-core-pos-left fa fa-file-pdf-o"></i><span class="gdlr-core-content">Download PDF</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                                        <div class="gdlr-core-text-box-item-content">
                                                            <p><?php echo $kotak[$id-1]->keterangan; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                           
                                    <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-social-share-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-social-share-left-text gdlr-core-item-pdlr">
                                                        <span class="gdlr-core-social-share-wrap">
                                                            <a class="gdlr-core-social-share-facebook" href="#" target="_blank" style="font-size: 18px;"><i class="fa fa-facebook"></i></a>
                                                            <a class="gdlr-core-social-share-linkedin" href="#" target="_blank" style="font-size: 18px;"><i class="fa fa-linkedin"></i></a>
                                                            <a class="gdlr-core-social-share-google-plus" href="#" target="_blank" style="font-size: 18px;"><i class="fa fa-google-plus"></i></a>
                                                            <a class="gdlr-core-social-share-pinterest" href="#" target="_blank" style="font-size: 18px;"><i class="fa fa-pinterest-p"></i></a>
                                                            <a class="gdlr-core-social-share-stumbleupon" href="#" target="_blank" style="font-size: 18px;"><i class="fa fa-stumbleupon"></i></a>
                                                            <a class="gdlr-core-social-share-twitter" href="#" target="_blank" style="font-size: 18px;"><i class="fa fa-twitter"></i></a>
                                                            <a class="gdlr-core-social-share-email" href="#" style="font-size: 18px;"><i class="fa fa-envelope"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-sidebar-left gdlr-core-column-extend-left  realfactory-sidebar-area gdlr-core-column-15 gdlr-core-pbf-sidebar-padding  gdlr-core-line-height" style="padding: 60px 30px 30px 0px;">
                                <div class="gdlr-core-pbf-background-wrap" style="background-color: #f9f9f9 ;"></div>
                                <div class="gdlr-core-sidebar-item">
                                    <div id="nav_menu-2" class="widget widget_nav_menu realfactory-widget">
                                        <h3 class="realfactory-widget-title">Portfolio</h3>
                                        <div class="menu-market-sectors-container">
                                            <ul id="menu-market-sectors" class="menu">
												<?php 
													for($i = 0 ; $i < $jumlah_item_top_e ; $i++)
													{
														echo '<li class="menu-item"><a href="'.$kotak[$i]->link."?id=".$kotak[$i]->id.'">'.$kotak[$i]->judul_tulisan_di_bawah_kotak.'</a></li>';
													}
												?>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="nav_menu-3" class="widget widget_nav_menu realfactory-widget">
                                        <h3 class="realfactory-widget-title">Useful Links</h3>
                                        <div class="menu-useful-links-container">
                                            <ul id="menu-useful-links" class="menu">
                                                <li class="menu-item"><a href="about-us.html">About Us</a></li>
                                                <li class="menu-item"><a href="blog-3-columns-with-frame.html">Recent News</a></li>
                                                <li class="menu-item"><a href="portfolio-3-columns.html">Our Works</a></li>
                                                <li class="menu-item"><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="text-6" class="widget widget_text realfactory-widget">
                                        <div class="textwidget"><a class="gdlr-core-button  gdlr-core-button-solid gdlr-core-button-no-border" href="contact.html" target="_parent" style="margin-right: 20px;border-radius: 3px;-moz-border-radius: 3px;-webkit-border-radius: 3px;background: #222 ;"><span class="gdlr-core-content">Get A Quote</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type='text/javascript' src='js/jquery/jquery.js'></script>
    <script type='text/javascript' src='js/jquery/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='js/jquery/ui/effect.min.js'></script>
    <script type='text/javascript' src='js/script.js'></script>
    <script type='text/javascript' src='plugins/goodlayers-core/plugins/combine/script.js'></script>
    <script type='text/javascript' src='plugins/goodlayers-core/include/js/page-builder.js'></script>
</body>
</html>
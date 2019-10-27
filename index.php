<?php include "header.php" ?>

<?php 
	if(isset($_GET['halaman'])){
		$page = $_GET['halaman'];
 
		switch ($page) {
			case 'home':
				include "home.php";
				break;
			case 'about':
				include "about.php";
				break;
			case 'pricing':
				include "pricing.php";
        		break;  			
      		case 'services':
				include "services.php";
				break;
			case 'sidebar':
				include "sidebar.php";
				break;
			case 'faq':
				include "faq.php";
        		break;  
      		case 'contact':
				include "contact.php";
				break;
			case 'ml':
				include "ml.php";
				break;
			case 'blue1':
				include "BluePET bottleclean.php";
				break;
			case 'blue2':
				include "BluePETbottlenotclean.php";
				break;
			case 'clear1':
				include "ClearPETbottleclean.php";
				break;
			case 'clear2':
				include "ClearPETbottlenotclean.php";
				break;
			case 'graph1':
				include "graph1.php";
				break;
			case 'graph2':
				include "graph2.php";
				break;
			case 'graph3':
				include "graph3.php";
				break;
			case 'graph4':
				include "graph4.php";
				break;						
			case '404':
				include "404.php";
				break;  
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "home.php";
	}
 
	 ?>

<?php include "footer.php" ?>
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
$(function(){
	// init service worker
	 // SW();

	// initial preloader
	loader();

	$(".tabza").DataTable();
	// load menu header
	$(".selectza").selectize();




	// getdata Customer




});


function getDataCustomer(){
	
	$.ajax({
		url: "customer/data",
		success:function(data){
			alert(data);
		}
	})
}

function notify(text,warna){
	$.notify(text,warna);
}




function displayNotification() {
  if (Notification.permission == 'granted') {
    navigator.serviceWorker.getRegistration().then(function(reg) {
      reg.showNotification('Framework F by Fachreza Maulana');
    });
  }
}



function loader(){
	 $(document).pagePreloaders({
			
				//Main Options
				preloaderStyle: 'animation',	// Preloader style: animation, logo
				backgroundColor: '', // Preloader background color
				backgroundOpacity: 0.1, // Preloader background opacity: 0.1 to 1
				animationTime: 1, // Minimum preloader display time in seconds (prevents the preloader from disappearing too fast)

				//Animation Preloader Options
				animationPreloader: '11', // Choose from 11 preload animations. Enter any value from 1 to 11
				animationPreloaderColor: '#21A0DC', // Animation color
				animationPreloaderOpacity: '1', // Animation opacity: 0.1 to 1

				//Logo Preloader Options
				imageURL: '<?php echo site_url() ?>assets/images/logo/logo.png', // Path to your logo image
				logoSize: '150px', // Size of the displayed logo (image proportions will be constrained to retain the quality)
				logoBackgroundColor: 'transparent', // Logo background color
				logoOpacity: '1', // Logo opacity: 0.1 to 1
				logoBorderWidth: '5px', // Logo stroke color width
				logoBorderColor: '#3cf', // Logo stroke color
				logoBorderRadius: '50%', // Logo corner radius
			});

		}


function SW(){

			if ('serviceWorker' in navigator) {   //cek browser support serviceWorker
		    navigator.serviceWorker.register('./sw.js',
		      {scope:'./'}).then(function(reg){
		        //Berhasil terdaftar
		        console.log('Terdaftar pada scope' + reg.scope)
		    }).catch(function(error){
		        //Gagal Terdaftar
		        console.log('Gagal :' + error)
		    });
		}
}

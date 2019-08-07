<?php
session_start();
if(isset($_SESSION['login'])){
?>



<!DOCTYPE html>

<html lang="en">

<head>
<title>Ratu Jawa Weeding Organizer</title>
<base href="http://localhost/ta/member/">
<meta charset="utf-8" />
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta name="description" content="Ratu Jawa" />
<meta name="keywords" content="Ratu Jawa Wedding Organizer">
<meta name="author" content="TA 1910" />
<meta name="MobileOptimized" content="320" />
<link href="images/favicon.ico" rel="icon" type="image/x-icon"/> <!-- favicon -->
<!-- theme style -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/> <!-- bootstrap css -->
<!-- revolution -->   
<link rel="stylesheet" type="text/css" href="revolution/css/settings.css"> <!-- revolution setting css -->
<link rel="stylesheet" type="text/css" href="revolution/css/layers.css">  <!-- revolution layer css --> 
<!-- end revolution -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/> <!-- fontawesome css -->
<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet"> <!-- google fonts -->
<link href="css/menumaker.css" rel="stylesheet" type="text/css"/> <!-- menu css -->
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css"/> <!-- owl carousel css -->
<link href="css/magnific-popup.css" rel="stylesheet" type="text/css"/> <!-- magnify popup css -->
<link href="css/datepicker.css" rel="stylesheet" type="text/css"/> <!-- datepicker css -->
<link href="css/flaticon.css" rel="stylesheet" type="text/css"/> <!-- flaticon css -->
<link href="css/style.css" rel="stylesheet" type="text/css"/> <!-- custom css -->
<link href="css/stucture.css" rel="stylesheet" type="text/css"/> <!-- stucture css -->
<!-- end theme style -->
</head>
<!-- end head -->
<!--body start-->
<body>
<!-- header --> 

<?php include 'asset/header.php' ?>

<?php 
            error_reporting(0);
            if(empty($_GET)){
              include 'content/keranjang.php';
            }else{
              include 'content/keranjang.php';
            }
          
            // if($_GET['page']=='kiriman'){
            //     include 'content/kiriman.php';
            // }
        ?>

        
        <!-- Begin Page Content -->
        <?php include 'asset/content/beranda.php' ?>
        <!-- /.container-fluid -->

      

 <?php include 'asset/footer.php' ?>
<!-- end footer -->
<!-- jquery -->
<script type="text/javascript" src="js/jquery.min.js"></script>  <!-- jquery library js -->
<script type="text/javascript" src="js/bootstrap.min.js"></script> <!-- bootstrap js -->
<script type="text/javascript" src="js/owl.carousel.js"></script> <!-- owl carousel js -->
<script type="text/javascript" src="js/jquery.ajaxchimp.js"></script> <!-- mail chimp js -->
<script type="text/javascript" src="js/smooth-scroll.js"></script> <!-- smooth scroll js -->
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script> <!-- magnify popup js --> 
<script type="text/javascript" src="js/waypoints.min.js"></script> <!-- facts count js required for jquery.counterup.js file -->
<script type="text/javascript" src="js/jquery.counterup.js"></script> <!-- facts count js-->
<script type="text/javascript" src="js/menumaker.js"></script> <!-- menu js--> 
<script type="text/javascript" src="js/jquery.share-tooltip.js"></script> <!-- share tooltip js--> 
<script type="text/javascript" src="js/price-slider.js"></script> <!-- price slider / filter js-->
<script type="text/javascript" src="js/bootstrap-datepicker.js"></script> <!-- datepicker js-->
<!-- revolution js files -->
<script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>  
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<!-- end revolution js files -->
<script type="text/javascript" src="js/theme.js"></script> <!-- custom js -->  
<script type="text/javascript">
  var tpj=jQuery;
  var revapi1066;
  tpj(document).ready(function() {
    if(tpj("#rev_slider_1066_1").revolution == undefined){
      revslider_showDoubleJqueryError("#rev_slider_1066_1");
    }
    else
    {
      revapi1066 = tpj("#rev_slider_1066_1").show().revolution({
      sliderType:"standard",
      jsFileLocation:"//server.local/revslider/wp-content/plugins/revslider/public/assets/js/",
      sliderLayout:"auto",
      delay:9000,
      navigation: {
        keyboardNavigation:"off",
        keyboard_direction: "horizontal",
        mouseScrollNavigation:"off",
        mouseScrollReverse:"default",
        onHoverStop:"off",
        touch:{
          touchenabled:"off",
          swipe_threshold: 75,
          swipe_min_touches: 1,
          swipe_direction: "horizontal",
          drag_block_vertical: false
        },
        arrows: {
          style:"",
          enable:true,
          hide_onmobile:true,              
          hide_onleave:false,
          hide_delay:0,
          hide_delay_mobile:1200,
          hide_under:0,
          hide_over:9999,
          tmp:'',
          rtl:false,
          left : {                              
            h_align:"left",
            v_align:"center",
            h_offset:20,
            v_offset:0, 
            container:"slider",             
          },
          right : {
            h_align:"right",
            v_align:"center",
            h_offset:20,
            v_offset:0,
            container:"slider",
          }
        }
      },
      responsiveLevels:[1240,1024,778,480],
      visibilityLevels:[1240,1024,778,480],
      gridwidth:[1240,1024,778,480],
      gridwidth: 1000,
      gridheight:[868,768,960,720],
      lazyType:"none",
      parallax: {
        type:"mouse",
        origo:"slidercenter",
        speed:2000,
        levels:[2,3,4,5,6,7,12,16,10,50,46,47,48,49,50,55],
        type:"mouse",
        disable_onmobile:"on"
      },
      shadow:0,
      spinner:"off",
      stopLoop:"off",
      stopAfterLoops:1,
      stopAtSlide:0,
      shuffle:"off",
      autoHeight:"off",
      fullScreenAutoWidth:"off",
      fullScreenAlignForce:"off",
      fullScreenOffsetContainer: ".header",
      fullScreenOffset: "60px",
      disableProgressBar:"on",
      hideThumbsOnMobile:"off",
      hideSliderAtLimit:0,
      hideCaptionAtLimit:0,
      hideAllCaptionAtLilmit:0,
      debugMode:false,
      fallbacks: {
        simplifyAll:"off",
        nextSlideOnWindowFocus:"off",
        disableFocusListener:false,
        }
      });
    }
  }); 
</script>
<script type="text/javascript">
  $(function() {
    $(".tanggal").datepicker({
      format: 'dd-mm-yyyy',
      autoclose: true,
      todayHighlight: true,
    });
  });
</script>
<!-- end jquery -->
</body>
<!--body end -->

<!-- Mirrored from thegenius.co/html/weddlist/version-1/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Apr 2019 09:25:49 GMT -->
</html>
<?php } else {
  echo "<script>window.location.replace('login.php')</script>";
}
?>
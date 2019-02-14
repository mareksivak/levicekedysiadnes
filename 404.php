<html>
<head>
<title>404 Page Not Found</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#76D8AC">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<style type="text/css">

    body {
        font-family: 'Open Sans';
        font-weight: 300;
        background: #eca;
        color: #fff;
        color: rgba(255,255,255, 0.65);
        position: relative;
        
        background: -webkit-linear-gradient(130deg, #76D8AC , #4D68E8 ); /* For Safari 5.1 to 6.0 */
        background: -o-linear-gradient(130deg, #76D8AC , #4D68E8 ); /* For Opera 11.1 to 12.0 */
        background: -moz-linear-gradient(130deg, #76D8AC , #4D68E8 ); /* For Firefox 3.6 to 15 */
        background: linear-gradient(130deg, #76D8AC , #4D68E8 ); /* Standard syntax */
    }

    a {
        color: #fff;
        text-decoration: none;
    }
    
    u {
        text-decoration: none;
        border-bottom: 2px solid;
        
        padding-bottom: 0px;
        font-weight: 600;
        color: #fff!important;
        
        -moz-transition: all 0.2s ease-out;
        -webkit-transition: all 0.2s ease-out;
        transition: all 0.2s ease-out;
    }
    
    u:hover {
        border-color: #fff;
        color: #fff!important;
        border-width: 4px;
        padding-bottom: 8px;
        
        -moz-transition: all 0.2s ease-out;
        -webkit-transition: all 0.2s ease-out;
        transition: all 0.2s ease-out;
    }
    

    h1 {
        font-weight: 300;
        font-size: 48px;
    }
    
    h3 {
        font-weight: 300;
        font-size: 24px;
    }
    
    #content {
        text-align: center; 
        position: absolute;
        top:50%;
        left: 0;
        width: 100%;
        -ms-transform:translateY(-50%);
        -webkit-transform: transform:translateY(-50%);
        transform:translateY(-50%);
    }
    
    .animated {
      -webkit-animation-duration: 1.2s;
              animation-duration: 1.2s;
      -webkit-animation-fill-mode: both;
              animation-fill-mode: both;
    }
    
    @-webkit-keyframes fadeInUp {
      0% {
        opacity: 0;
        -webkit-transform: translate3d(0, 50px, 0);
                transform: translate3d(0, 50px, 0);
      }

      100% {
        opacity: 1;
        -webkit-transform: none;
                transform: none;
      }
    }

    @keyframes fadeInUp {
      0% {
        opacity: 0;
        -webkit-transform: translate3d(0, 50px, 0);
                transform: translate3d(0, 50px, 0);
      }

      100% {
        opacity: 1;
        -webkit-transform: none;
                transform: none;
      }
    }

    .fadeInUp {
      -webkit-animation-name: fadeInUp;
              animation-name: fadeInUp;
    }
</style>
</head>
<body>
	<div id="content">
		<h1 id="h1">Ni&#269; tu nie je.</h1>
        <h3 id="h3">Ale <u><a href="https://play.google.com/store/apps/details?id=blowingnose.latin" alt="Nieco mudre">tu</a></u> nie&#269;o je.</h3>
	</div>
    <script>
    var h1 = document.getElementById('h1');
    h1.style.opacity = "0";
    var h3 = document.getElementById('h3');
    h3.style.opacity = "0";
    </script>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    
    <script>
jQuery(window).ready(function(){
    
    setTimeout( function() {
        
        $('h1').css("opacity", "1"); 
        $('h1').addClass('animated fadeInUp');
        
        
        
        $('h1').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',  function()
                                   {
                                         $('h1').removeClass('animated fadeInUp');
                                   });
    }, 800);
    
    setTimeout( function() {
        
        $('h3').css("opacity", "1"); 
        $('h3').addClass('animated fadeInUp');
        
        
        
        $('h3').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',  function()
                                   {
                                         $('h3').removeClass('animated fadeInUp');
                                   });
    }, 1600);

});
    
    </script>
</body>
</html>
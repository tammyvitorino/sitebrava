<!DOCTYPE html>
<html lang="pt-br">
    <head>
    	<!-- Global site tag (gtag.js) - Google Analytics -->
		<script type="text/javascript" src="//gc.ksk.scr.kaspersky-labs.com/6A9E0035-6592-4708-B8E6-6BCC410EB311/main.js" charset="UTF-8">
        </script>
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-20602775-1"></script>
		<script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         gtag('config', 'UA-20602775-1');
        </script>
	    <!-- End Google Analytics tag -->
     
        <?php require('asksuite.php'); ?>


        <title>Pousada BravaClub</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Pousada Brava Club - Site em Português">
		<?php require('metatags.php') ?>
        <link rel="stylesheet" href="style.css" type="text/css" media="all" />
        
        <!-- Código de  Div Flutuante -->
        <style type="text/css">
            #posiciona {
                position: fixed;
                left: 0% ;
                top: 0%;
                width: 100%; 
                height: 100%; 
                margin-left: auto;
                margin-top: auto;
                color: #FF0000;
                background: url(assets/imgs/banners/banner_alta2020.png) no-repeat center center;
                background-size: 100%;
                z-index: 1000; 
            }
            #fechar { font-size: 15px; top: 50%; left: 20%; background-color: #FFFFFF; height: 3% ; width: 60% }
          </style>
          <script>
            function fechar() { 
                document.getElementById("posiciona").style.display = 'none'; 
            }
         </script>
        <!-- Fim do Div Flutuante -->

        <!-- Facebook Pixel Code -->
        <script>
          !function(f,b,e,v,n,t,s)
          {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
          n.callMethod.apply(n,arguments):n.queue.push(arguments)};
          if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
          n.queue=[];t=b.createElement(e);t.async=!0;
          t.src=v;s=b.getElementsByTagName(e)[0];
          s.parentNode.insertBefore(t,s)}(window, document,'script',
          'https://connect.facebook.net/en_US/fbevents.js');
          fbq('init', '927183774294569');
          fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
          src="https://www.facebook.com/tr?id=927183774294569&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Facebook Pixel Code -->    

    </head>
    
    <body class="pg-home">  
    <!-- DIV Flutuante  -->
    <div id="fechar" align=center  class="only_desktop" ><a href="javascript:fechar();"><div id="posiciona" class="only_desktop" ></div></a></div>
<!--     Fim da DIV Flutuante -->
        <div class="wrap">
            <!-- Header -->
            <?php require('header.php'); ?>
            <main>
            <?php require('carroussel-desktop.php'); ?>
            <?php require('carroussel-mobile.php'); ?>
            
            <div></div>
			<?php require('apousada.php'); ?>
			<?php require('acomodacoes.php'); ?>
			<?php require('noticias.php'); ?>
			<?php require('contato.php');?>
            <?php require('pacotes.php'); ?>
            <?php require('agenda.php'); ?>
            </main>
            
        </div>
        <?php require('footer.php'); ?>
       
        <script src="node_modules/jquery/dist/jquery.min.js" type="text/javascript"></script>
        <script src="assets/css/components/pace/pace.min.js" type="text/javascript"></script>
        <script src="assets/css/components/transformicons/transformicons.min.js" type="text/javascript"></script>   
        <script src="node_modules/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
        <script src="node_modules/latinize/latinize.js" type="text/javascript"></script>
        <script src="assets/js/functions.min.js" type="text/javascript"></script>
        <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
        <script type='text/javascript'>
        function init_map(){
            var myOptions = {zoom:15,disableDefaultUI: true,center:new google.maps.LatLng(-22.7561533,-41.8760815), mapTypeId: google.maps.MapTypeId.ROADMAP};
            
            map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
            marker = new google.maps.Marker({
                map: map,position: new google.maps.LatLng(-22.7551533,-41.8735890)
            });
            infowindow = new google.maps.InfoWindow({
                content:'Pousada BravaClub'
            });
            google.maps.event.addListener(marker, 'click', function(){
                infowindow.open(map,marker);
            });
            infowindow.open(map,marker);
        }
        google.maps.event.addDomListener(window, 'load', init_map);
        </script>
        <script>
            transformicons.add('.tcon')
        </script>
    </body>
</html>

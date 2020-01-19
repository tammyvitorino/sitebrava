<!DOCTYPE html>
<html lang="pt-br">
    <head>
	    <?php require('asksuite.php'); ?>
        <title>Pousada BravaClub</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Fotos da pousada Brava Club - site em português">
        <?php require('metatags.php') ?>
        <link rel="stylesheet" href="style.css" type="text/css" media="all" />
    </head>
    <body class="pg-interna">  
        <div class="wrap">
         	<?php require('header.php') ?>
            <main>
            <?php require('carroussel-desktop.php'); ?>
            <?php require('carroussel-mobile.php'); ?>
                <!--  
                <section class="tour-virtual">
                    <div class="container">
                        <h1><h2 class="title">Tour Virtual</h2></h1>
                        <h3>Quer conhecer melhor a nossa pousada? A Brava Club disponibiliza um tour virtual para que você possa passear em cada cantinho antes da sua tão esperada visita</h3>
                        Espaço para o tour virtual 
                        <iframe src="http://bravaclub.360app.com.br/" frameborder="0" style="width: 100%; height:470px; margin:0px 0px 0px 0px;"></iframe>
                        
                        
                    </div>
                </section>-->
                <section class="fotos">
                    <div class="container">
                        <h2 class="title">fotos</h2>
                        <div class="tabs photo-grid">
                            <ul class="tabs-navigation">
                                <li>
                                    <a href="javascript:void(0)" title="Pousada Brava Club">A Pousada</a>
                                </li>
                                   <li>
                                    <a href="javascript:void(0)" title="Silk Beach Club">Silk</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" title="Quartos">Quartos</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" title="Tudo">Tudo</a>
                                </li>
                            </ul>
                            <ul class="tabs-content">
                                <li class="pousada-brava-club">                                
                                    <a class="photo" href="javascript:void(0)" onclick="openModal(this)" title="Pousada Brava Club - Piscina superior" style="background-image:url(assets/imgs/fotos/pousada01.jpg)"></a>
                                </li>
                                <li class="quartos">
                                    <a class="photo" href="javascript:void(0)" onclick="openModal(this)" title="Pousada Brava Club - Suite Luxo" style="background-image:url(assets/imgs/fotos/luxo.jpg)"></a>
                                </li>
                                <li class="quartos">
                                    <a class="photo" href="javascript:void(0)" onclick="openModal(this)" title="Pousada Brava Club - Master Suite" style="background-image:url(assets/imgs/fotos/master.jpg)"></a>
                                </li>                               
                                <li class="pousada-brava-club">
                                    <a class="photo" href="javascript:void(0)" onclick="openModal(this)" title="Pousada Brava Club - Entrada" style="background-image:url(assets/imgs/fotos/pousada02.jpg)"></a>
                                </li>
                                <li class="pousada-brava-club">
                                    <a class="photo" href="javascript:void(0)" onclick="openModal(this)" title="Pousada Brava Club - Área Externa" style="background-image:url(assets/imgs/fotos/pousada03.jpg)"></a>
                                </li>
                                <li class="quartos">
                                    <a class="photo" href="javascript:void(0)" onclick="openModal(this)" title="Pousada Brava Club - Master Suite (Vista ampla)" style="background-image:url(assets/imgs/fotos/master02.jpg)"></a>
                                </li>
                                <li class="quartos">
                                    <a class="photo" href="javascript:void(0)" onclick="openModal(this)" title="Pousada Brava Club - Suite Standard" style="background-image:url(assets/imgs/fotos/standard.jpg)"></a>
                                </li>
                                <li class="pousada-brava-club">
                                    <a class="photo" href="javascript:void(0)" onclick="openModal(this)" title="Pousada Brava Club - Restaurante" style="background-image:url(assets/imgs/fotos/pousada04.jpg)"></a>
                                </li>
                                <li class="quartos">
                                    <a class="photo" href="javascript:void(0)" onclick="openModal(this)" title="Pousada Brava Club - Suite Superior" style="background-image:url(assets/imgs/fotos/superior.jpg)"></a>
                                </li>
                                <li class="pousada-brava-club">
                                    <a class="photo" href="javascript:void(0)" onclick="openModal(this)" title="Pousada Brava Club - Café da Manhã" style="background-image:url(assets/imgs/fotos/pousada05.jpg)"></a>
                                </li>
                                  <li class="silk-beach-club">
                                    <a class="photo" href="javascript:void(0)" onclick="openModal(this)" title="Pousada Brava Club - Silk Beach Club" style="background-image:url(assets/imgs/fotos/silkbeachclub01.jpg)"></a>
                                     <li class="silk-beach-club">
                                    <a class="photo" href="javascript:void(0)" onclick="openModal(this)" title="Pousada Brava Club - Silk Beach Club - Piscina" style="background-image:url(assets/imgs/fotos/silkbeachclub02.jpg)"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
            </main>
        </div>
        <!-- Footer -->
        <footer>
            <!-- <div class="servicos">
                <div class="container">
                    <div class="grid">
                        <div>
                            <h3>Serviços Inclusos</h3>
                            <p>
                                Recepção 24hs.<br>
                                Check in a partir das 14hs e check out até 12hs (meio dia)<br>
                                Translados para o centro todos os dias 20:30 hs. (não busca)<br>
                                Translados para praia saída 10:30 hs volta 16:30hs (segunda-feira praia dos ossos, quarta feira ferradura, sexta feira João Fernandez)<br>
                                Café da manhã de 7:30 ás 10:30hs (tipo buffe)<br>
                                Toalhas para praia/piscina (uma por dia por pessoa)<br>
                                Acceso ao Silk Beach Club e reserva de colchões sem custo com 1 dia de antecedência.
                            </p>
                        </div>
                        <div>
                            <h3>Serviços Extras</h3>
                            <p>
                                RTransfers (regular, especial e privativo)<br>
                                Passeio de escuna<br>
                                Passeio de lancha privada<br>
                                City tours (em buggy ou jardineira)Jet Sky <br>
                                Mergulho (batizmo e credenciados)<br>
                                Passeio de helicóptero<br>
                                Massagem<br>
                                Aluguel de carros, buggys e bicicletas<br>
                                Passeio Arraial do cabo e cabo frio (full Day)<br>
                                City tour rio de janeiro (full Day)<br>
                                Informação de festas e eventos na cidade
                            </p>
                        </div>
                    </div>
                </div>
            </div>  -->
            <div class="copyright">
                <div class="container">
                    <ul>
                        <li><img src="assets/imgs/trip2.png.0x60.png" alt=""></li>
                        <li><img src="assets/imgs/trip1.png.0x60.png" alt=""></li>
                        <li><img src="assets/imgs/booking-1.png.0x60.png" alt=""></li>
                    </ul>
                </div>
            </div>
            <div class="footer">
                <div class="container">
                    <p>produzido por chá de bambu</p>
                    <!-- Template Part Social -->
                    <ul class="social">
                        <li>
                            <a href="" title="Facebook" class="fa fa-facebook"></a>
                        </li>
                        <li>
                            <a href="" title="Instagram" class="fa fa-instagram"></a>
                        </li>                        
                        <li>
                            <a href="" title="Twitter" class="fa fa-twitter"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
        <!-- Modal Dinâmica -->
        <div class="modal">
            <div class="modal-body">
                <a href="javascript:void(0)" onclick="closeModal(this)" class="fa fa-close"></a>
                <div class="modal-content"></div>
            </div>
        </div>
        <script src="node_modules/jquery/dist/jquery.min.js" type="text/javascript"></script>
        <script src="assets/css/components/pace/pace.min.js" type="text/javascript"></script>
        <script src="assets/css/components/transformicons/transformicons.min.js" type="text/javascript"></script>
        <script src="assets/css/components/owlcarousel/owl.carousel.min.js" type="text/javascript"></script>
        <script src="node_modules/latinize/latinize.js" type="text/javascript"></script>
        <script src="assets/js/functions.min.js" type="text/javascript"></script>
        <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
        <script type='text/javascript'>
        function init_map(){
            var myOptions = {zoom:15,disableDefaultUI: true,center:new google.maps.LatLng(-22.7615203,-41.9358735), mapTypeId: google.maps.MapTypeId.ROADMAP};
            
            map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
            marker = new google.maps.Marker({
                map: map,position: new google.maps.LatLng(-22.7615203,-41.9358735)
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

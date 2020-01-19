<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css" media="all" />
<link rel="stylesheet" href="assets/jquery/jquery-ui.css">
<link rel="stylesheet" href="assets/jquery/jquery-ui.min.css">
<script src="assets/jquery/jquery-ui.js"></script>

</head>
<body>
<div class="container">
<h1>RESERVE AGORA</h1>
<div> <input type="text" id="in" name="fechain" class="datepicker" placeholder="Check In" style="margin-right: 10px;"></div>

</div>


<div class="ComboBoxIcon" id="checkinSearchIcon">
<svg x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve" class="beFillSvgButtonTextColor">
<use xlink:href="#icon-checkin"></use>
</svg>
</div>
</div>
<div class="checkout">
<input value="" id="inputCheckOut" name="inputCheckOut" class="dateSelect" readonly="readonly" title="Check-out" />
<div class="ComboBoxIcon" id="checkoutSearchIcon">
<svg x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve" class="beFillSvgButtonTextColor">
<use xlink:href="#icon-checkout"></use>
</svg>
</div>
</div>
<div class="nr_days">
<div class="ComboBoxIconWithNoBackgroundColor margin-top-8-negative">
<svg x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve" class="beFillSvg">
<use xlink:href="#icon-nights"></use>
</svg>
</div>
<p class="beTextColor">
<span></span>
Noite(s)
</p>
</div>
<input type="hidden" id="dhClientID" name="dhClientID" value="3734" />
</div>
<div class="clear">
</div>

<div class="search_bottom" style="padding-top:8px !important;">
<div class="select_rooms searchComboBoxMain margin-right-10">
<div class="select-style" id="selectRoomsStyle">
<select name="ctl00$cphSearch$NewUc_MainSearchascx$selectRooms" id="selectRooms">
<option value="1">1 Apartamento</option>
<option value="2">2 Apartamentos</option>
<option value="3">3 Apartamentos</option>
<option value="4">4 Apartamentos</option>
<option value="5">5 Apartamentos</option>
</select>
</div>
<div class="ComboBoxIcon noAction" id="roomsSearchIcon">
<svg x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve" class="beFillSvgButtonTextColor">
<use xlink:href="#icon-rooms"></use>
</svg>
</div>
</div>

<div class="select_adults searchComboBoxMain margin-right-10">
<div class="mask">
</div>
<div class="select-style" id="selectAdultsStyle">
<select id="selectAdults">
<option value="1" selected="selected">1 Adulto</option>
<option value="2">2 Adultos</option>
<option value="3">3 Adultos</option>
<option value="4">4 Adultos</option>
<option value="5">5 Adultos</option>
<option value="6">6 Adultos</option>
<option value="7">7 Adultos</option>
<option value="8">8 Adultos</option>
<option value="9">9 Adultos</option>
<option value="10">10 Adultos</option>
</select>
</div>
<div class="ComboBoxIcon noAction" id="adultsSearchIcon">
<svg x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve" class="beFillSvgButtonTextColor">
<use xlink:href="#icon-adults"></use>
</svg>
</div>
</div>

<div class="select_children searchComboBoxMain margin-right-10">
<div class="mask">
</div>
<div class="select-style" id="selectChildrenStyle">
<select id="selectChildren" name="selectChildren">
<option value="0" selected="selected">0 Crianças</option>
<option value="1">1 Criança</option>
<option value="2">2 Crianças</option>
<option value="3">3 Crianças</option>
<option value="4">4 Crianças</option>
<option value="5">5 Crianças</option>
<option value="6">6 Crianças</option>
<option value="7">7 Crianças</option>
<option value="8">8 Crianças</option>
<option value="9">9 Crianças</option>
<option value="10">10 Crianças</option>
</select>
</div>
<div class="ComboBoxIcon noAction" id="childrenSearchIcon">
<svg x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve" class="beFillSvgButtonTextColor">
<use xlink:href="#icon-children"></use>
</svg>
</div>
</div>

<div class="clear"></div>
<div id="children_ages_margin_top"></div>
<div class="children_ages disable_ages" style="float:right; margin: 8px 15px 0px 0px;">
<div class="mask">
</div>
<div style="display:none;">
<input type="text" value="-" class="disable" />
<input type="text" class="hide active" value="-" />
</div>
<div id="children_ages_link_main">
<a class="beTextColor" id="children_ages_link">Idades das Crianças</a>
</div>
<div class="select_children_ages">
<div class="drops">
</div>
<div class="clear">
</div>
<div class="save">
<a href="#" class="beBtnBkgColor beButtonTextColor">
Salvar</a></div>
</div>

</div>

</div>
<div class="clear">
</div>

<div class="searchCodesLine"></div>
<div class="searchCodes" style="height:55px !important; padding-top:18px !important;">
<div class="searchCodesHaveCode">
<label class="beTextColor">Tem um código?</label>
</div>
<div class="searchCodesCodeType">
<div class="select-codes-type-style select-style">
<select id="selectCodesType" name="selectCodesType">
<option value="0" selected="selected">Código Promocional</option>
</select>
</div>
</div>
<div class="searchCodesCodeValues">
<input type="text" id="code-clear" name="code-clear" value="O seu código" />
<input type="text" id="promotional_code_value" class="display-none" value="" />
</div>
</div>
<div class="searchCodesLine"></div>
</div>
<div class="btn_advanced" style="top:280px !important;">
<div class="check_periods">
<input type="checkbox" id="check_periods" name="check_periods" />
<label for="check_periods" class="beTextColor" style="margin-top:5px !important;">Períodos Diferentes por Apartamento</label>
</div>
<div class="submit">
<span class="beButtonTextColor">
<input type="submit" id="MainSearchButton" value="Buscar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" onclick="RoomSearch(null,null, 0, '536b8528-5e0d-4da8-afcc-aadaecf929cb'); resetSelectedReservationRooms();  return false;">
</input>
</span>
</div>

</div>

</div>

</div>

</div>

<div class="search_right">
<div id="calendarSearchMainLoading" style="float:left; width:500px; height:342px; line-height:320px; text-align:center; background-color:#EAEDF2;">Carregando...</div>
<div class="calendar" id="calendarSearchMain">

</div>
</div>
<div class="clear">
</div>

<div id="advanced_search">
<div class="center">
<div class="selects">
</div>
<div class="submit advancedsubmit margin-left-280">
<span class="beButtonTextColor">
<input type="submit" value="Buscar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" id="Submit1" name="btn_adv_submit" onclick="RoomSearch(null,null, 0, '536b8528-5e0d-4da8-afcc-aadaecf929cb'); resetSelectedReservationRooms();   return false;">
</input>
</span>
</div>
</div>

</div>
</body>
</html>
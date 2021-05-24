<?php

require_once dirname(__FILE__).'/../config.php';

function getParams(&$kwota,&$lata,&$oprocentowanie){
$kwota = isset($_REQUEST['kwota']) ?  $_REQUEST['kwota'] : null;
$lata = isset($_REQUEST['lata']) ?  $_REQUEST['lata'] : null;
$oprocentowanie = isset($_REQUEST['oprocentowanie']) ?  $_REQUEST['oprocentowanie'] : null;
}


function validate(&$kwota, &$lata,&$oprocentowanie, &$messages){
	if ( ! (isset($kwota) && isset($lata) && isset($oprocentowanie))) {
	return false;
	}


	if ( $kwota == "") {
		$messages [] = 'Nie podano kwoty pozyczki';
	}
	if ( $lata == "") {
		$messages [] = 'Nie podano czasu na jaki została wzięta pozyczka';
	}
	if($oprocentowanie == ""){
		$messages[] = "Nie podano oprocentowania";
	}

		if (count($messages) != 0) return false;
	
			if (! is_numeric($kwota)) {
		$messages [] = 'Kwota pozyczki nie jest liczbą całkowitą';
	}
	
	if (! is_numeric($lata)) {
		$messages [] = 'Okres spłacenia pozyczki nie został podany jako liczba całkowita';
	}
	if(! is_numeric($oprocentowanie)){
		$messages[] = 'Oprocentowanie nie jest wartością całkowitą'; 
	}
	
	if (count ( $messages ) != 0) return false;
	else return true;


}


function process(&$kwota,&$lata,&$oprocentowanie,&$result){
	
	if (empty ($messages)) { 
		$kwota = intval($kwota);
		
		$lata = intval($lata);
		
		$oprocentowanie = floatval($oprocentowanie);
		
		$result = ($kwota + $kwota * $oprocentowanie) / (12 * $lata);
	}
}

$kwota = null;
$lata = null;
$oprocentowanie = null;
$result = null;
$messages = array();

getParams($kwota,$lata,$oprocentowanie);

if(validate($kwota,$lata,$oprocentowanie,$messages)){
	process($kwota,$lata,$oprocentowanie,$result);
}

include 'credit_calc_view.php';
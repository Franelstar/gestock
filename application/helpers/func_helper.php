<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    
	function af_date_date($date, $duree=0){
		if($date != null){
			$b = explode('-',$date);
			if($b[2] == 0){
				$b[2] = 1;
			}
			$c = $b[1].'/'.$b[2].'/'.$b[0];
			$time = strtotime($c);
			$date = date('F Y', strtotime('+'.$duree.' month', $time));
			$date = str_replace("January", "Janvier", $date);
			$date = str_replace("February", "Février", $date);
			$date = str_replace("March", "Mars", $date);
			$date = str_replace("April", "Avril", $date);
			$date = str_replace("May", "Mai", $date);
			$date = str_replace("June", "Juin", $date);
			$date = str_replace("July", "Juillet", $date);
			$date = str_replace("August", "Aôut", $date);
			$date = str_replace("September", "Septembre", $date);
			$date = str_replace("October", "Octobre", $date);
			$date = str_replace("November", "Novembre", $date);
			$date = str_replace("December", "Décembre", $date);
			return $date;
		}else{
			return 'Non livré';
		}
	}
	
	function af_date_date2($date, $duree=0){
		if($date != null){
			$b = explode('-',$date);
			if($b[2] == 0){
				$b[2] = 1;
			}
			$c = $b[1].'/'.$b[2].'/'.$b[0];
			$time = strtotime($c);
			$date = date('Y', strtotime('+'.$duree.' month', $time));
			$date = str_replace("January", "Janvier", $date);
			$date = str_replace("February", "Février", $date);
			$date = str_replace("March", "Mars", $date);
			$date = str_replace("April", "Avril", $date);
			$date = str_replace("May", "Mai", $date);
			$date = str_replace("June", "Juin", $date);
			$date = str_replace("July", "Juillet", $date);
			$date = str_replace("August", "Aôut", $date);
			$date = str_replace("September", "Septembre", $date);
			$date = str_replace("October", "Octobre", $date);
			$date = str_replace("November", "Novembre", $date);
			$date = str_replace("December", "Décembre", $date);
			return $date;
		}else{
			return 'Non livré';
		}
	}
	
	function af_date($date){
		if($date != null){
			$b = explode('-',$date);
			$c = $b[1].'/'.$b[2].'/'.$b[0];
			$time = strtotime($c);
			$date = date("D d F Y",$time);
			$date = str_replace("Mon", "Lundi", $date);
			$date = str_replace("Tue", "Mardi", $date);
			$date = str_replace("Wed", "Mercredi", $date);
			$date = str_replace("Thu", "Jeudi", $date);
			$date = str_replace("Fri", "Vendredi", $date);
			$date = str_replace("Sat", "Samedi", $date);
			$date = str_replace("Sun", "Dimanche", $date);
			$date = str_replace("January", "Janvier", $date);
			$date = str_replace("February", "Février", $date);
			$date = str_replace("March", "Mars", $date);
			$date = str_replace("April", "Avril", $date);
			$date = str_replace("May", "Mai", $date);
			$date = str_replace("June", "Juin", $date);
			$date = str_replace("July", "Juillet", $date);
			$date = str_replace("August", "Aôut", $date);
			$date = str_replace("September", "Septembre", $date);
			$date = str_replace("October", "Octobre", $date);
			$date = str_replace("November", "Novembre", $date);
			$date = str_replace("December", "Décembre", $date);
			return $date;
		}else{
			return 'Non livré';
		}
	} 
	
	function af_date_s($date){
		if($date != null){
			$b = explode('-',$date);
			$c = $b[1].'/'.$b[2].'/'.$b[0];
			$time = strtotime($c);
			$date = date("d F Y",$time);
			$date = str_replace("Mon", "Lundi", $date);
			$date = str_replace("Tue", "Mardi", $date);
			$date = str_replace("Wed", "Mercredi", $date);
			$date = str_replace("Thu", "Jeudi", $date);
			$date = str_replace("Fri", "Vendredi", $date);
			$date = str_replace("Sat", "Samedi", $date);
			$date = str_replace("Sun", "Dimanche", $date);
			$date = str_replace("January", "Janvier", $date);
			$date = str_replace("February", "Février", $date);
			$date = str_replace("March", "Mars", $date);
			$date = str_replace("April", "Avril", $date);
			$date = str_replace("May", "Mai", $date);
			$date = str_replace("June", "Juin", $date);
			$date = str_replace("July", "Juillet", $date);
			$date = str_replace("August", "Aôut", $date);
			$date = str_replace("September", "Septembre", $date);
			$date = str_replace("October", "Octobre", $date);
			$date = str_replace("November", "Novembre", $date);
			$date = str_replace("December", "Décembre", $date);
			return $date;
		}else{
			return 'Non livré';
		}
	} 

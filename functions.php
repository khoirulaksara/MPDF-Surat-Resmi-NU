<?php

function dateid($format, $time = false) { // "Asia/Tokyo"
	$day   = array('Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min');
	$days  = array('Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu');
	$month = array('', 'Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov' ,'Des');
	$months= array('', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November' ,'Desember');
	
	if(!is_a($time, 'DateTime')) {
		if(is_int($time)) {
			$time = new DateTime(date('Y-m-d H:i:s.u',$time));
		}elseif(is_string($time)){
			try {
				$time = new DateTime($time);
			} catch (Exception $e) {
				$time = new DateTime();
			}
		}else{
			$time = new DateTime();
		}
	}
	$ret = '';
	for($i=0;$i<strlen($format);$i++) {
		switch($format[$i]) {
			case 'D' : $ret .= $day[ $time->format('w') ]; break;
			case 'l' : $ret .= $days[ $time->format('w') ]; break;
			case 'M' : $ret .= $month[ $time->format('n') ]; break;
			case 'F' : $ret .= $months[ $time->format('n') ]; break;
			case '\\': $ret .= $format[ $i+1 ]; $i++; break;
			default  : $ret .= $time->format( $format[$i] ); break;
		}
	}
	return $ret;
}

?>
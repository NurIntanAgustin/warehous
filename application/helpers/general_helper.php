<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	function en_month_to_ina($month_number) {
		$month = 0;
		switch ($month_number) {
			case 1: case '01': $month = 'Januari'; break;
			case 2: case '02': $month = 'Februari'; break;
			case 3: case '03': $month = 'Maret'; break;
			case 4: case '04': $month = 'April'; break;
			case 5: case '05': $month = 'Mei'; break;
			case 6: case '06': $month = 'Juni'; break;
			case 7: case '07': $month = 'Juli'; break;
			case 8: case '08': $month = 'Agustus'; break;
			case 9: case '09': $month = 'September'; break;
			case 10: $month = 'Oktober'; break;
			case 11: $month = 'November'; break;
			case 12: $month = 'Desember'; break;
			default: $month = 'tai'; break;
		}
		return $month;
	}
?>
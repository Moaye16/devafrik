<?php

function debug($var){

    if(Conf::$debug > 0){

        $debug = debug_backtrace();

        echo '<p>&nbsp;</p><p><a href="#" onclick="$(this).parent().next(\'ol\').slideToggle(); return false;"><strong>'.$debug[0]['file']. '</strong> 1.'.$debug[0]['line'].'</a></p>';

        echo '<ol style="display: none;">';

        foreach ($debug as $k => $v){

            if($k > 0){

                echo '<li><strong>'.$v['file']. '</strong> 1'.$v['line'].'</li>';

            }

        }

        echo '</ol>';

        echo '<pre>';

        print_r($var);

        echo '</pre>';

    }

}

function dateEnLettre($var){

    $months = array("janvier", "février", "mars", "avril", "mai", "juin",
    "juillet", "août", "septembre", "octobre", "novembre", "décembre");

	list($date) = explode(" ", $var);

	list($year, $month, $day) = explode("-", $date);

	return "$day ".$months[$month-1]." $year";

}

function dateHeure($var){

    $months = array("janvier", "février", "mars", "avril", "mai", "juin",
    "juillet", "août", "septembre", "octobre", "novembre", "décembre");

	list($date, $time) = explode(" ", $var);

	list($year, $month, $day) = explode("-", $date);

    list($hour, $min, $sec) = explode(":", $time);

	return "$day ".$months[$month-1]." $year à ${hour}h${min}m${sec}s";

}

function tokenTruncate($string, $your_desired_width) {
    $parts = preg_split('/([\s\n\r]+)/', $string, null, PREG_SPLIT_DELIM_CAPTURE);
    $parts_count = count($parts);
  
    $length = 0;
    $last_part = 0;
    for (; $last_part < $parts_count; ++$last_part) {
      $length += strlen($parts[$last_part]);
      if ($length > $your_desired_width) { break; }
    }
  
    return implode(array_slice($parts, 0, $last_part));
  }

  function DateUTC(){
      //Current date/time in the specified time zone.
        $date = new DateTime(null, new DateTimeZone('UTC'));
        return $date->format('Y-m-d');
  }
  
<?php

class Other {

    static function sendMail() {
        
    }
    static function formatDateTime($datetime) {
        $month = ["Jan", "Fev", "Mar", "Avr" , "Mai", "Juin" , "Jul" , "Août" , "Sept" , "Oct" , "Nov", "Dec"];
        return date_format($datetime,"") . " " . $month[date_format($datetime, "m")-1] . ". " . date_format($datetime,"H") . "h" .date_format($datetime,"i");
        
        /**
         * 2020-01-03 14:30
         * 3 Jan. 2020 14h30
         */
    }
    static function time_diff($datetime1,$datetime2){
        $interval = $datetime1->diff($datetime2);
        return $interval->format('%H:%i:%s');
    }

}

?>
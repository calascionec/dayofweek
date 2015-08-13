<?php
    class DOW
    {
        function calculateDOW($input)
        {

            $int_date = $this->formatDate($input);
            if ( $int_date ) {
                return jddayofweek($int_date,1);
            } else {
                return "Invalid Date";
            }

        }

        function formatDate($greg_date)
        {

            $greg_array = explode("-", $greg_date);
            $int_array = array();
            foreach($greg_array as $token) {
                array_push($int_array, ((integer) $token));
            }
            if ( ($int_array[2] == 0) || ($int_array[1] == 0) || ($int_array[0] == 0) ) {
                return 0;
            }
            return cal_to_jd(CAL_GREGORIAN, $int_array[1], $int_array[2], $int_array[0]);

        }

    }
?>

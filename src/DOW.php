<?php
    class DOW
    {
        function calculateDOW($input)
        {
            $int_date = $this->formatDate($input);

            return jddayofweek($int_date,1);

        }

        function formatDate($greg_date)
        {

            $greg_array = explode("/", $greg_date);
            $int_array = array();
            foreach($greg_array as $token) {
                array_push($int_array, ((integer) $token));
            }
            return cal_to_jd(CAL_GREGORIAN, $int_array[0], $int_array[1], $int_array[2]);

        }

    }
?>

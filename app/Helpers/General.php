<?php

if (!function_exists('censor')) {

    /**
     * censors input
     *
     * @param string $input
     * @return string
     */
    function censor($input)
    {
		$count = strlen($input) - 7;
		$output = substr_replace($input, str_repeat('*', $count), 4, $count);
		return $output;
    }
}

?>

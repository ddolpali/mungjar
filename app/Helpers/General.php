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

if (!function_exists('startsWith')) {
    /** http://stackoverflow.com/a/834355/7794844
     * Check if string starts with input
     *
     * @param string $haystack
     * @param string $needle
     * @return boolean
     */
    function startsWith($haystack, $needle)
    {
         $length = strlen($needle);
         return (substr($haystack, 0, $length) === $needle);
    }
}

if (!function_exists('endsWith')) {
    /** http://stackoverflow.com/a/834355/7794844
     * Check if string ends with input
     *
     * @param string $haystack
     * @param string $needle
     * @return boolean
     */
    function endsWith($haystack, $needle)
    {
        $length = strlen($needle);
        if ($length == 0) {
            return true;
        }

        return (substr($haystack, -$length) === $needle);
    }
}

?>

<?php
// 1 month
$seconds_to_cache = 2678400;

// 1 month pretty formatted.
$ts = gmdate("D, d M Y H:i:s", time() + $seconds_to_cache) . " GMT"; 


/* 
 * " Set Expires to a minimum of one week, and preferably up to one year, in the future. " 
 * Google 
*/
header("Expires: $ts");

/*
 * " In the ETag header, this can be any value that uniquely identifies a resource (file versions or content hashes are typical). "
 * 
*/
header("ETag: af89o14");

/*
 * " It is important to specify one of Expires or Cache-Control max-age, and one of Last-Modified or ETag, for all cacheable resources. It is redundant to specify both Expires and Cache-Control: max-age, or to specify both Last-Modified and ETag. "
 *
*/
header("Cache-Control: max-age=$seconds_to_cache");

/*
 * " In the Last-Modified header, this is a date. "
*/
header('Last-Modified: '.$ts);

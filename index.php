<?php

function getCode($text)
{
	return preg_match('/\D(\d{4})$/m', $text, $out) ? trim($out[1]) : null;
}

function getPrice($text)
{
	return preg_match('/(\d+,\d{2}|\d+)р./m', $text, $out) ? trim($out[1]) : null;
}

function getNum($text)
{
	return preg_match('/41001\d{8,11}$/m', $text, $out) ? trim($out[0]) : null;
}


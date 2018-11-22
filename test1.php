<?php

error_reporting( E_ALL );

function get_max_profit($stock_price)
{
	$min = min($stock_price);
	$max = max($stock_price);
	return $max-$min;
}

$stock_price = [10,7,5,8,11,9];
echo get_max_profit($stock_price);



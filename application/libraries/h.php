<?php

/**
 * htmlエスケープ処理が行われた文字を得る
 * 
 * @param string $string htmlエスケープ処理を行いたい文字列
 * @return string htmlエスケープ処理を行った文字列
 */
function h($string)
{
	return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
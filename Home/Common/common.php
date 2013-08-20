<?php
/**
 * 获取数组val值中的字段
 * @param Array $arr
 * @param string $field
 * return Array
 */
function getArrayByField(&$arr,$field, $key = '') {
	$aRet = array();
	if ($key !== '') {
		foreach ($arr AS $aVal) {
			$aRet[$aVal[$key]] = $aVal[$field];
		}
	} else {
		foreach ($arr AS $aVal) {
			$aRet[] = $aVal[$field];
		}
	}
	return $aRet;
}

/**
 * 根据Val值，重新排序数组
 * @param Array $arr
 * @param unknown_type $k
 */
function setArrayKey(&$arr,$k) {
	$aRet = array();
	foreach ($arr AS $key=>$val) {
		$aRet[$val[$k]][] = $arr[$key];
	}
	return $aRet;
}

/*
 * 获取request变量
 */
function getRequest($name, $default = '') {
	if (isset($_POST[$name])) {
		return $_POST[$name];
	} elseif (isset($_GET[$name])) {
		return $_GET[$name];
	} else {
		return $default;
	}
}


/*
 * 过滤逗号分割的数字字符串 如 1,2,3
 */
function filterNumList($numlist, $separator = ',') {
	$aNums = explode($separator, $numlist);
	
	foreach ($aNums as &$value) {
		$value = intval($value);
	}
	
	return join($separator, $aNums);
}

?>
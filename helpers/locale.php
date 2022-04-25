<?php

use Juakali\Cookie;

function getBrowserLanguage($available = [], $default = 'en') {
	if (isset($_COOKIE["juakali_locale"])) {
		return $_COOKIE["juakali_locale"];
	}

	if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
		$langs = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);

    if (empty($available)) {
      return substr($langs[0], 0, 2);
    }

		foreach ($langs as $lang){
			$lang = substr($lang, 0, 2);
			if(in_array($lang, $available)) {
				return $lang;
			}
		}
	}
	return $default;
}

function checkLocale($locale = false) {
	if ($locale) {
		option('locale', $locale);
	}
	if(file_exists('./locale/'.option('locale').'.php')) {
		require_once 'locale/' . option('locale') . '.php';
	} else {
		require_once 'locale/en.php';
		option('locale', 'en');
	}

	Cookie::set('locale', option('locale'));
	option('translations', $translations);
}

function getLocale() {
	if(file_exists('./locale/'.option('locale').'.php')) {
		return option('locale');
	}

	return 'en';
}

function getLocales() {
	$files = array_diff(scandir('./locale/'), array('..', '.'));
	$langs = [];
	
	foreach ($files as $file) {
		if($str = strstr($file, '.', true)) {
			if(file_exists('./public/img/langs/' . $str)) {
				$langs[] = $str;
			}
		}
	}
	return $langs;
}

function t($key) {
	if (isset(option('translations')[$key])) {
		return option('translations')[$key];
	}
	
	return $key;
}
?>
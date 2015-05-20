<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/produktsiya/(.+?)/(.+?).html(\\?|\$)#",
		"RULE" => "ELEMENT_CODE=\$2&",
		"ID" => "",
		"PATH" => "/produktsiya/detail.php",
	),
	array(
		"CONDITION" => "#^/produktsiya/(.+?)/(\\?|\$)#",
		"RULE" => "SECTION_CODE=\$1&",
		"ID" => "",
		"PATH" => "/produktsiya/sections.php",
	),
);

?>
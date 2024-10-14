<?php
$arr_tmp = array(
array("id"=>1,"name"=>"zhangsan"),
array("id"=>2,"name"=>"lisi"),
array("id"=>3,"name"=>"wangwu"),
array("id"=>4,"name"=>"niuliu")
);

//print_r($arr_tmp);

function arrayFilterFieldValue(array $data, string $field, $value)
{
	$data = array_filter($data, function($row) use($field,$value) {
		if (isset($row[$field])) {
			return $row[$field] != $value;
		}
	});
	return $data;
}

print_r(arrayFilterFieldValue($arr_tmp,"name","lisi"));

?>

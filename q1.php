<?php
$data = array(
  0 => array(
  'id' => 1,
  'name' => 'Foo', 'image' => array(
  'url' => '/pub/foo.jpg')
  ),
  1 => array(
  'id' => 2,
  'name' => 'Bar', 'image' => array(
  'url' => '/pub/bar.jpg' )
  ),
  2 => array(
  'id' => 3,
  'name' => 'Foo Bar', 'image' => array(
  'url' => '/pub/foobar.jpg' )
  ) 
);

function getUrls($data) {
	$resultArray = array();
    $key='url';
    foreach ($data as $x => $datum) {
    	array_push($resultArray, $datum['image']['url']);
    };
    return $resultArray;
};

print_r(getUrls($data));
// Array ( [0] => /pub/foo.jpg [1] => /pub/bar.jpg [2] => /pub/foobar.jpg )

?>
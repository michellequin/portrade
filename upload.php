<?php

if(is_array($_FILES)) {

$my_array = array(
	0 => array(
		"./images/c_1.jpg", "./images/c_2.jpg", "./images/c_3.jpg"
		),
	1 => array(
		"./images/israel_1.jpg", "./images/israel_2.jpg", "./images/israel_3.jpg"
		),
	2 => array(
		"./images/r_1.jpg", "./images/r_2.jpg", "./images/r_3.jpg"
		),
	3 => array(
		"./images/2.jpg", "./images/3.jpg", "./images/4.jpg"
		),
	4 => array(
		"./images/1.jpg", "./images/5.jpg", "./images/6.jpg"
		),
	5 => array(
		"./images/a.jpg", "./images/b.jpg", "./images/c.jpg"
		),
	6 => array(
		"./images/ch1.jpg", "./images/ch2.jpg", "./images/ch3.jpg"
		),
	7 => array(
		"./images/p1.jpg", "./images/p2.jpg", "./images/p3.jpg"
		),
	8 => array(
		"./images/x.jpg", "./images/y.jpg", "./images/z.jpg"
		),
	9 => array(
		"./images/eng1.jpg", "./images/eng2.jpg", "./images/eng3.jpg"
		),
	);

shuffle($my_array);

?>
<img src="<?=$my_array[0][0];?>" style="width:100%;height:100%;padding-bottom:5%" id="upload-preview1" class="upload-preview" />
<img src="<?=$my_array[0][1];?>" style="width:100%;height:100%;padding-bottom:5%" id="upload-preview2" class="upload-preview" />
<img src="<?=$my_array[0][2];?>" style="width:100%;height:100%" id="upload-preview3" class="upload-preview"/>
<?php
}
?>
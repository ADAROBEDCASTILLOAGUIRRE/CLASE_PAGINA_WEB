<?php

class Mesero extends AppModel
{
	public $validate = array(
			'dpi' => array(
					'rule'=>'notEmpty'
				),
			'nombres' => array(
					'rule'=>'notEmpty'
				),
			'apellidos' => array(
					'rule'=>'notEmpty'
				),
			'nivel' => array(
					'rule'=>'notEmpty'
				)
		);
			
			
}
?>
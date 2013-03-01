<?php

/**
*
*/
class Location extends Elegant
{

	public function report()
	{
		return $this->has_one('Report');
	}

}

 ?>
<?php
namespace Data

require_once("/Enumeration/Enumeration.php");
use Interface;
use Enumeration;

class SingleRoom extends Room
{
	$singleRoomExtras = [
		Extras::TV,
		Extras::AirConditioner ];

	function __construct(
		$roomNumber,
		$price)
	{
		parent::__construct(RoomType::Standart, true, false, 1, $roomNumber, $singleRoomExtras, 99);
	}
}

?>
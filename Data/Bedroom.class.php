<?php
namespace Data

require_once("/Enumeration/Enumeration.php");
use Interface;
use Enumeration;

class Bedroom extends Room
{
	$singleRoomExtras = [
		Extras::TV,
		Extras::AirConditioner,
		Extras::Refrigerator,
		Extras::MiniBar,
		Extras::Bathtub ];

	function __construct(
		$roomNumber,
		$price)
	{
		parent::__construct(RoomType::Gold, true, true, 2, $roomNumber, $singleRoomExtras, 199);
	}
}

?>
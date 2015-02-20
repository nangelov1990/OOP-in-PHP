<?php
namespace Data;

require_once("\Enumeration\Enumeration.php");
use Enumeration;

class Apartment extends Room
{
	$singleRoomExtras = [ 
		Extras::TV,
		Extras::AirConditioner,
		Extras::Refrigerator,
		Extras::KitchenBox,
		Extras::MiniBar,
		Extras::Bathtub,
		Extras::FreeWifi ];

	function __construct(
		$roomNumber,
		$price)
	{
		parent::__construct(RoomType::Diamond, true, true, 4, $roomNumber, $singleRoomExtras, 299);
	}
}

?>
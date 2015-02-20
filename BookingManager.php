<?php
namespace BookingManager;

use Data\Reservation;
use Data\Guest;
use Data\SingleRoom;

function __autoload($className) {
    // $fileName = str_replace('\\', '/', $className);
    // require_once("./" . $fileName . ".class.php");
    include_once($className . ".class.php");
}

$room = new SingleRoom(1408, 99);
$guest = new Guest("Svetlin", "Nakov", 8003224277);
$startDate = strtotime("24.10.2014");
$endDate = strtotime("26.10.2014");
$reservation = new Reservation($startDate, $endDate, $guest);
BookingManager::bookRoom($room, $reservation);

class BookingManager
{
	public static function bookRoom($room, $reservation) 
	{
		try {
			$room->addReservation($reservation);

			echo "$room successfully booked for $reservation";
		} catch (Exception $e) {
			echo "Booking unsuccessful. Error: " . $e->getMessage();
		}
	}
}

?>
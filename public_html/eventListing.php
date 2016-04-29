<?php

$data = '{
	"events": [
	  {
	    "occasion": "Birthday party",
	    "invited_count": 120,
	    "year": 2016,
	    "month": 2,
	    "day": 14
	  },
	  {
	    "occasion": "Technical discussion",
	    "invited_count": 23,
	    "year": 2016,
	    "month": 11,
	    "day": 24
	  },
	  {
	    "occasion": "Press release",
	    "invited_count": 64,
	    "year": 2015,
	    "month": 12,
	    "day": 17,
	    "cancelled": true
	  },
	  {
	    "occasion": "New year party",
	    "invited_count": 55,
	    "year": 2016,
	    "month": 1,
	    "day": 1
	  }
	]
}';

$events = json_decode($data)->events;

$tsEvents = array();

$calendarEvents = array();

foreach($events as $event){
	$tsEvents[mktime(0, 0, 1, $event->month, $event->day, $event->year)] = $event;
}

ksort($tsEvents);

if(empty($_GET['ts'])){
	$monthStart = mktime(0, 0, 0, date("n"), 1);
} else {
	$monthStart = $_GET['ts'];
}

$date = getdate($monthStart);

$monthEnd = mktime(0, 0, -1, $date['mon'] + 1, $date['mday'], $date['year']);

$eventsThisMonth = array();


foreach($tsEvents as $ts => $event){
	$event->displayMonth = date('F Y', $ts);
	$event->displayDate = date('F j<\s\up>S</\s\up> Y', $ts);
	$calendarEvents[$event->year][$event->month][$ts] = $event;	
	if($ts >=  $monthStart && $ts <= $monthEnd){
		$eventsThisMonth[] = $event;
	}
}

$jsEvents = json_encode($calendarEvents);

?>

<html>
	<head>
		<style type="text/css">
			body{
				font-family: verdana;
			}
			.contentHolder{
				width: 618px;
				margin: 0 auto;
			}
			.year{
				border: 1px solid blue;
				display: inline-block;
				width: 200px;
				font-size: 12px;
			}
			.year ul {
				list-style: none;
				margin: 0;
				padding: 0;
			}
			.year li {
				float: left;
				width: 25%;
				text-align: center;
			}
			.year li div{
				margin: 1px;
				border: 1px solid #ddd;
				padding: 2px;
			}
			.year li div.hasEvents{
				border-color: #f00;
				background-color: #fee;
				cursor: pointer;
			}
			.title{
				border-bottom: 1px solid blue;
				text-align: center;
				font-weight: bold;
				padding: 3px;
				background-color: #ddf;
			}
			.this{
				width: 200px;
				font-size: 14px;
			}
			.events {
				margin-top: 20px;
			}
			.eventsTitle {
				text-align: center;
				border: 1px solid #f00;
				background-color: #fee;
				padding: 10px;
			}
			.singleEvent{
				border: 1px solid #ddd;
				margin-top: 10px;
				padding: 10px;
			}
		</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

		<script>
		var events = <?php echo $jsEvents; ?>;
		$( document ).ready(function() {
			$(".year").find("div.hasEvents").each(function(){
				$(this).click(function(){
					var monthEvents = events[$(this).data('year')][$(this).data('month')];

					$('.eventList').html('');
					$.each(monthEvents, function(id, event){
						$('.eventsTitle').html('Events for ' + event.displayMonth);
						$('.eventList').append('<div class="singleEvent">' + event.displayDate + ' - ' + event.occasion + ' (' + event.invited_count + ' invited)');
					})
				})
			})
		})
		</script>
	</head>
	<body>
		<div class="contentHolder">
			<header>
				<div class="year">
					<div class="title"><?php echo $date['year'] - 1; ?></div>
					<div>
						<ul>
							<?php
								$year = $date['year'] - 1;
								for($i = 1; $i <= 12; $i++){
									$class = "";
									if(!empty($calendarEvents[$year][$i])){
										$class = 'hasEvents';
									}
									$dateObj = DateTime::createFromFormat('!m', $i);
									echo '<li><div class="' . $class . '" data-month="' . $i . '" data-year="' . ($date['year'] - 1) . '" data-monthFull="' . $dateObj->format('F') . '">' . 
											$dateObj->format('M') . 
										 '</div></li>';
								}

							?>
						</ul>
					</div>
				</div>
				<div class="year">
					<div class="title"><?php echo $date['year']; ?></div>
					<div>
						<ul>
							<?php
								$year = $date['year'];
								for($i = 1; $i <= 12; $i++){
									$class = "";
									if(!empty($calendarEvents[$year][$i])){
										$class = 'hasEvents';
									}
									$dateObj = DateTime::createFromFormat('!m', $i);
									echo '<li><div class="' . $class . '" data-month="' . $i . '" data-year="' . $date['year'] . '" data-monthFull="' . $dateObj->format('F') . '">' . 
											$dateObj->format('M') . 
										 '</div></li>';
								}
							?>
						</ul>
					</div>
				</div>
				<div class="year">
					<div class="title"><?php echo $date['year'] + 1; ?></div>
					<div>
						<ul>
							<?php
								$year = $date['year'];
								for($i = 1; $i <= 12; $i++){
									$class = "";
									if(!empty($calendarEvents[$year + 1][$i])){
										$class = 'hasEvents';
									}
									$dateObj = DateTime::createFromFormat('!m', $i);
									echo '<li><div class="' . $class . '" data-month="' . $i . '" data-year="' . '" data-monthFull="' . $dateObj->format('F') . '">' . 
											$dateObj->format('M') . 
										 '</div></li>';
								}
							?>
						</ul>
					</div>
				</div>
			</header>
			<div class="events">
				<div class="eventsTitle">Events for <?php echo date( 'F Y', $monthStart); ?></div>
				<div class="eventList">
					<?php
						if(empty($calendarEvents[$date['year']][$date['mon']])){
							echo "No Events found.";
						} else {
							foreach($calendarEvents[$date['year']][$date['mon']] as $ts => $event){
								echo '<div class="singleEvent">' . $event->displayDate . ' - ' . $event->occasion . ' (' . $event->invited_count . ' invited)</div>';
							}
						}
					?>
				</div>
			</div>
		</div>
	</body>
</html>


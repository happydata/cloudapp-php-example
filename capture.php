<?php
include('cors.php');
cors();

$data = json_decode(file_get_contents('php://input'));

// Access tracking data for the tracker1 slot
$tracker1data = $data->experiment->slots->tracker1->data;

$response = array(
	html => '<div class="nui-list">
		<div class="nui-item">
			<div class="nui-item-content">
				<label>Total Tracks</label>
				<p>Wanna Description?</p>
			</div>
			<div class="nui-item-addon">
				'.count($tracker1data).' times
			</div>
		</div>
	</div>',
	title => "Results for ".$data->experiment->info->name->value,
	titleColor => "#db6815"
);


header('ContentType:application/json');
echo json_encode($response);

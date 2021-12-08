<?php
	$title = 'Feedback management';
	$baseUrl = '../';
	require_once('../layouts/header.php');

	$sql = "select * from _Feedback order by status asc, updated_at desc";
	$data = executeResult($sql);
?>

<div class="row" style="margin-top: 20px;">
	<div class="col-md-12 table-responsive">
		<h3>Feedback management</h3>

		<table class="table table-bordered table-hover" style="margin-top: 20px;">
			<thead>
				<tr>
					<th>ID</th>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Phone number</th>
					<th>Email</th>
					<th>Subject</th>
					<th>Content</th>
					<th>Created at</th>
					<th style="width: 120px"></th>
				</tr>
			</thead>
			<tbody>
<?php
	$index = 0;
	foreach($data as $item) {
		echo '<tr>
					<th>'.(++$index).'</th>
					<td>'.$item['firstname'].'</td>
					<td>'.$item['lastname'].'</td>
					<td>'.$item['phone_number'].'</td>
					<td>'.$item['email'].'</td>
					<td>'.$item['subject_name'].'</td>
					<td>'.$item['note'].'</td>
					<td>'.$item['updated_at'].'</td>
					<td style="width: 50px">';
		if($item['status'] == 0) {
			echo '<button onclick="markRead('.$item['id'].')" class="btn btn-danger">Already read</button>';
		}	
		echo '</td>
				</tr>';
	}
?>
			</tbody>
		</table>
	</div>
</div>

<script type="text/javascript">
	function markRead(id) {
		$.post('form_api.php', {
			'id': id,
			'action': 'mark'
		}, function(data) {
			location.reload()
		})
	}
</script>
<?php
	require_once('../layouts/footer.php');
?>
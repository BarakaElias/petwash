<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Laravel</title>

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
		<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

		<!-- Styles -->


		<style>
				body {
						font-family: 'Nunito', sans-serif;
				}
		</style>
</head>
<x-header data="about Component Header"/>
<div class="row g-0">
	<div class="col-md-2">

	</div>
	<div class="col-sm-12 col-md-8">
		<h1 class="text-center p-2">List of orders</h1>
		<table class="table table-striped w-100">
			<tr>
				<th>Owner</th>
				<th>Pet</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Note</th>
				<th>Paid</th>
				<th>Action</th>
			</tr>
			@foreach($orders as $order)
			<tr>
				<td style="padding:10px;">{{$order['owner_name']}}</td>
				<td style="padding:10px;">{{$order['pet']}}</td>
				<td style="padding:10px;">{{$order['owner_email']}}</td>
				<td style="padding:10px;">+{{$order['owner_phone']}}</td>
				<td style="padding:10px;">{{$order['owner_note']}}</td>
				<td style="padding:10px;">{{$order['order_paid']}}</td>
				<td style="padding:10px;"><a href="complete/{{$order['order_id']}}">Mark Completed</a></td>
			</tr>
			@endforeach
		</table>
	</div>
	<div class="col-md-2">

	</div>

</div>

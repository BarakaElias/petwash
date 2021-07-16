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
<div class="row">
		<div class="col-md-2">

		</div>
		<div class="col-md-8 col-sm-12">
			<div class="d-flex justify-content-center">
					<div>
						<form action="verifyotp" method="POST">
							@csrf
							<h3>A verification code has been sent. Check your sms!</h3>
							<div class="mb-3 w-100">
								<label for="code" class="form-label">Verification code</label>
								<input type="text" name="code" class="w-50 form-control" id="code">
							</div>
							<div>
									<button type="submit" id="sendcode" class="w-25 btn btn-primary">Verify</button>
							</div>

						</form>
					</div>
			</div>

		</div>
		<div class="col-md-2">

		</div>
</div>

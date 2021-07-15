<!DOCTYPE html>
<x-header data="about Component Header"/>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
								width: 100%;
								max-width: 100%;
            }
						#landing{
							background-color: #DEF1FF;
							position: absolute;
							z-index: -1;
							clip-path: polygon(30% 0%, 42% 0, 56% 27%, 68% 48%, 100% 64%, 100% 100%, 0 100%, 0 0);
						}
        </style>
    </head>
    <body>
			<span class="w-100 h-100" id="landing">

			</span>
					<div class="row g-0">
							<div class="col-sm-12 col-md-6">
								<div class="d-flex justify-content-center mb-5 p-2">
											<form action="submitbook" method="POST">
												@csrf
												<h3>Make a booking</h3>
												<div class="mb-3 w-100">
													<label for="owner_name" class="form-label">Owner's name</label>
													<input type="text" name="owner_name" class="form-control" id="owner_name" placeholder="Steven Segal">
												</div>
												<div class="mb-3 w-100">
													<label for="pettype">What type of pet:</label>
															<select class="form-select" name="pettype" id="pettype">
															<option value="dog">Dog</option>
															<option value="cat">Cat</option>
															<option value="rabbit">Rubbit</option>
															<option value="bird">Bird</option>
															</select>
												</div>
												<div class="mb-3 w-100">
													<label for="book_date" class="form-label">Pick a Date</label>
													<input type="date" name="book_date" class="form-control" id="book_date">
												</div>
												<div class="mb-3 w-100">
													<label for="exampleFormControlInput1" class="form-label">Email address</label>
													<input type="email" name="owner_email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
												</div>
												<div class="mb-3 w-100">
													<label for="phone_number" class="form-label">Phone number (do not add +)</label>
													<input type="text" name="phone_number" class="form-control" id="phone_number" placeholder="Eg. 255624327900">
												</div>
												<div class="mb-3 w-100">
													<label for="exampleFormControlTextarea1" class="form-label">Note</label>
													<textarea name="owner_note" placeholder="Is there anything you would like us to know?" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
												</div>
												<div class="mb-2">
															<p class="text-secondary text-danger">You will receive a push to insert pincode from  beem</p>
												</div>
												<div class="d-flex align-items-end mb-3 w-50">
													<input type="submit" value="Book" class="form-control btn-primary"/>
												</div>

											</form>
								</div>

							</div>
							<div class="col-sm-12 col-md-6">
										<img class="w-100" src="{{asset('img/dog.png')}}" />
										<p class="text-muted">Photo by Anna Shvets from Pexels.com</p>
										<h1>Let us do the grooming</h1>
										<p>Small animals 10,000/- | Dogs 20,000/-</p>

							</div>
					</div>
					<div class="row g-0">
						<h1 class="text-center text-primary p-5">How it Works</h1>

								<div class="col-sm-12 col-md-4">
										<div class="d-flex flex-column justify-content-center">
													<h3 class="text-center">1. Fill the Form</h3>
													<h5 class="text-center">The number you put in will be used for payment</h5>
										</div>
								</div>
								<div class="col-sm-12 col-md-4">
									<div class="d-flex flex-column justify-content-center">
										<h3 class="text-center">2. Checkout</h3>
										<h5 class="text-center">You will be redirected to the beem checkout page</h5>
									</div>

								</div>
								<div class="col-sm-12 col-md-4">
									<div class="d-flex flex-column justify-content-center">
										<h3 class="text-center">3. Check your Phone</h3>
										<h5 class="text-center">You will receive a prompt to enter your passcode to make payment</h5>
									</div>
								</div>
					</div>
					<div class="row">
						<div class="d-flex flex-column justify-content-center mb-2">
									<h5 class="text-center">Done! Just bring your pet To our washing stations</h5>
						</div>
					</div>

    </body>
</html>

<script type="text/javascript">
				$(document).ready(function(){
					$('#book_date').datetimepicker({
						format: 'MMMM DD, YYYY',
						minDate: 0
					});
				});
</script>

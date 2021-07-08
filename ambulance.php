<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Lifeshine.com</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container-fluid">
    <center><a class="navbar-brand" href="#">LifeShine.com</a></center>
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">A
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="first.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="About.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Contact us</a>
        </li>

      </ul>
      

    </div>
    <form class="d-flex" >
        <input class="form-control mx-1" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>

        <a href="sign.php">
           <button type="button" class="btn btn-outline-light mx-2" >Sign In</button>
        </a>

  </div>
</nav>

<br>
<br>
	<head>
		<title>Book Now</title>


				<meta name="viewport" content="width=device-width, initial-scale=1">

			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


		<style type="text/css">
			*{
			 margin:0;
			 padding:0;
			} 
			body{
				background:url(lifeshine_image/ambu.gif);
				background-size:cover; 
				height:100vh;
				background-position:center;
				font-family:sans-serif;
				
			     }
			.regform{
				width:400px;
				background-color: rgb(0,0,0,0.5);
				margin:auto;
				color:#FFFFFF;
				padding:15px 0px 15px 0px;
				text-align:center;
				border-radius:25px 60px 25px 60px;

			}
			.main{
				background-color: rgb(0,0,0,0.5);
				width:900px;
				margin:auto;

				border-radius:20px 20px 20px 20px;

				}
				form{
					padding: 10px;			
			}
				#name{
					width: 100%;
					height:50px;
			}
			.name{	
				margin-left: 25px;
				margin-top: 25px;
				width: 165px;
				color: white;
				font-size: 15px;
				font-weight: 600;
			}
			.firstname{
				position: relative;
				left: 150px;
				top: -37px;
				line-height: 40px;
				width:499px;
				border-radius:10px;
				padding: 0 22px;
				font-size:16px; 

			}
			
			.address{
				position: relative;
				left: 150px;
				top: -37px;
				line-height: 40px;
				width:499px;
				border-radius:10px;
				padding: 0 22px;
				font-size:16px; 
				color:black;
			}
		
			
			.option{
				position: relative;
				left: 150px;
				top: -37px;
				line-height:40px;
				width:130px;
				height:40px;
				border-radius:10px;
				padding: 0 8px;
				font-size:16px; 
				color:black;
				outline:none;
				overflow:hidden;
			}
			.option option{
				font-sixe: 20px;		
			}
			.option1{
				position: relative;
				left: 150px;
				top: -37px;
				line-height:40px;
				width:499px;
				height:40px;
				border-radius:10px;
				padding: 0 8px;
				font-size:16px; 
				color:black;
				outline:none;
				overflow:hidden;
			}
			.option1 option1{
				font-sixe: 20px;		
			}

			.phone{
				position: relative;
				left: 200px;
				top: -40px;
				line-height: 40px;
				
				border-radius:10px;
				padding: 0 22px;
				font-size:16px; 
				color:#555;

			}
			
			button{
				background-color: white;
				display:block;
				margin: auto;		
				text-align: center;
				border-radius: 360px;
				border: 2px; 
				padding: 20px 30px;
				outline: none;
				color: black;
				cursor: pointer;
				transition: 0.25px;
			
				

			}	
			button:hover{
				background-color: #5390F5;
				color: white;
			}

			
		</style>
	</head>
	<body>
		<div class="regform"><h1><i>Book Now</i></h1></div>

		<br>
		<div class="main">
			<form>

				<div id="name">
					<h2 class="name">Name</h2>
					<input class="firstname" type="text" placeholder="Enter Your Full Name" name="">
					
				
				</div>

				<h2 class="name">Address</h2>
				<input class="address" type="text" placeholder="Enter Your Current Address" name="address">

				


                        	<h2 class="name">Phone</h2>
                        		<select class="option" name="area-code">
						<option disabled="disabled" selected="selected">--Area Code</option>
						<option>+91</option>
					</select>
			      		<input class="phone" type="text" placeholder="9163******" name="phone">


			      		<h2 class="name">Your City</h2>
				<input class="address" type="text" placeholder="Enter Your Current City" name="address">

					

				<h2 class="name">Reason </h2>
				<select class="option1" name="city">
					<option disabled="disabled" selected="selected">-- why are you booking</option>
					<option>Non Covid</option>
					<option>covid</option>
				</select>



				<h2 class="name">Hospital </h2>
				<select class="option1" name="city">
					<option disabled="disabled" selected="selected">-- Choose Hospital </option>
					<option>A</option>
					<option>B</option>
					<option>C</option>
					<option>D</option>
					<option>E</option>
					<option>F</option>
					<option>G</option>
					<option>H</option>
					<option>I</option>
					<option>J</option>
					<option>K</option>
					<option>L</option>
					<option>M</option>
					<option>N</option>
					<option>O</option>
					<option>P</option>
					<option>Q</option>
					<option>R</option>
					<option>S</option>
					<option>T</option>
					<option>U</option>
					<option>V</option>
					<option>W</option>
					<option>X</option>
					<option>Y</option>
					<option>Z</option>
				</select>

				
				<br>

				<button type="submit"><a href="home.html">Book Now</button></a>

					
				
			</form>
		</div>			
	</body>
</html>

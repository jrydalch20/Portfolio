<!DOCTYPE HTML>
<html>
	<head>
	
		<title> Jacob Rydalch | Project Portfolio </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="favicon.png" rel="icon">
		<link href="bootstrap.min.css" rel="stylesheet">
		<link href="pfcustom-styles.css" rel="stylesheet">
		
	</head>
	
	
	<body>
		<nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
			<div class="container-fluid justify-content-center">
				<a href="PFLanding.php" class="navbar-brand">JR</a>

				<ul class="navbar-nav justify-content-center">
					<li class="nav-item">
						<a class="nav-link" href="PFHome.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="ProjectsList.php">Projects</a>
					</li>
				</ul>
			</div>
		</nav>
		
		<a class="btn btn-dark ms-5 mb-2 mt-2" href="ProjectsList.php" role="button">Back</a>
		
		
		<div class="list-container bg-light w-100 p-3 text-center">
			<h2>WebDev & Database Projects</h2>
				<div class="container mb-3 p-3 border-bottom">
					<h6>Portfolio Web Page</h6>
					<p>This web page is, in itself, one of my personal projects! Using skills I picked up during my information systems courses, I've put together this web page to showcase my skills with web development tools. Originally, the landing page required you to input a name and email in order to gain access to the site. It ran through some backend PHP code to insert rows into a database table so I could keep track of who is visiting this site. After some consideration, I removed that feature so that user information is not required to view the rest of the pages. I'm not much of a design guru, so for the most part I used Bootstrap to make the HTML look more presentable. If you want to dive deeper and view the actual code behind this web application, head <a href="https://github.com/jrydalch20/Portfolio/tree/webpage">this way.</a> (don't worry it's just Github)</p>
				</div>
				
				<div class="container mb-3 p-3 border-bottom">
					<h6>Cowboy Property Management Web App</h6>
					<p>This project was done during my Web Development class while I was studying abroad. Essentially the goal of the project was to create a web application to serve a business function for a hypothetical company, in this case Cowboy Property Management. I was required to create an entire database with several tables, and have several instances of Create, Read, Update, and Delete throughout the application. This application uses sessions and authentication as well as assigned roles to users as they navigate through the site. When an account is created, I implemented password hashing for an extra layer of security. Admin roles are able to access their portion of the application to track properties, tenants, rent, maintenance. Renter roles are able to view their lease information, update their contact information, make a rent payment (hashing the credit card info when inserted into the database).  All of this was written in PHP. The Github for all of this code can be found <a href="https://github.com/jrydalch20/WAD-2024/tree/main">here</a> although this was all tested and presented locally on my WAMP server so the database connections will not function properly on a new machine. However, the exported database file is included there as well. This project was never meant for real world implementation, and was had to be completed rather quickly so some elements that could be considered necessary for a real company using this application were obviously left out for time's sake. </p>
			
					<div class="row">
						<div class="col-md-3">
							<img src="CPMScreenshot1.png" class="img-fluid">
						</div>
						<div class="col-md-3">
							<img src="CPMScreenshot2.png" class="img-fluid">
						</div>
						<div class="col-md-3">
							<img src="CPMScreenshot3.png" class="img-fluid">
						</div>
						<div class="col-md-3">
							<img src="CPMScreenshot4.png" class="img-fluid">
						</div>
					</div>
				</div>
				
				<div class="container mb-3 p-3 border-bottom">
					<h6>Carhartt WIP Database Project</h6>
					<p>This project was done during my Database Fundamentals course and tasked me with creating a relational database for a fictional company or recreating what I might think a real company's database might look like. I chose to do it on Carhartt's streetware spinoff brand Carhartt WIP. This didn't require any functionality with an application, and was done exclusively through Microsoft SQL Server 2019 locally on my machine. Although I can't showcase the abilities of the database, I will include the file with the creation of the database and all of the insertions into the tables as well as all of the queries I wrote to pull data out of said tables. Below are a few screenshots from within SQL Server Management Studio of executed queries into the database.</p>
			
					<div class="row">
						<div class="col-md-4">
							<img src="WIPScreenshot1.png" class="img-fluid">
						</div>
						<div class="col-md-4">
							<img src="WIPScreenshot2.png" class="img-fluid">
						</div>
						<div class="col-md-4">
							<img src="WIPScreenshot3.png" class="img-fluid">
						</div>
					</div>
					<a href="WIP_Take2.sql" download="JacobRydalch_CarharttDBproject.sql" class="link-info link-offset-2">Download the SQL file</a>
				</div>
			
			
		</div>
		
		

	
		<footer class="mt-5 py-3 bg-dark text-white">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="mb-0">&copy; 2024 Jacob Rydalch</p>
					</div>
				</div>
			</div>
		</footer>

	</body>
</html>
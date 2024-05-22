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
			<h2>Financial Projects</h2>
				<div class="container mb-3 p-3 border-bottom">
					<h6>Efficient Frontier Model</h6>
					<p>This is a model of an efficient frontier of a portfolio consisting of just a handful of equities. This project showcases my ability to understand quantitative analysis as well as complex Excel functions. It makes use of the data analysis, what-if analysis, and solver tools within Excel. I first calculated the required weights in each equity to achieve a standard deviation of 10%, and then for a StDev of 20%. Using the values from the previous calculation, I set up the Risky-Risky Frontier and plotted it on the graph. Afterwhich, I ran the solver to find me the required weights in order to maximize the Sharpe ratio of the portfolio, giving us the Sharpe tangent. Then followed a similar process to construct the Risky-Riskless Frontier using the risk free rate and plotting it on the graph.</p>
					<a href="EfficientFrontierModel.xlsx" download="EfficientFrontierModel.xlsx" class="link-info link-offset-2">Download the Excel File</a>
				</div>
				
				<div class="container mb-3 p-3 border-bottom">
					<h6>Multi-factor Model</h6>
					<p>This is a model that uses the Fama-French 3 factor model to determine the associated risk of assets over the last 5 years. The assets are simply Vanguard ETFs that track each sector. The model determines intercepts and factor loadings before ultimately calculating the average risk adjusted excess return for each asset. I have also included a solver on the first sheet that will return the portfolio betas and an alpha given certain weights in each asset. For fun I added a single factor model on the CAPM sheet. </p>
					<a href="MultifactorModels.xlsx" download="MultifactorModels.xlsx" class="link-info link-offset-2">Download the Excel File</a>
				</div>
				
				<div class="container mb-3 p-3 border-bottom">
					<h6>Real Estate Cash Flow Analysis</h6>
					<p>This is a Cash Flow analysis/calculator built in Excel that ultimately gives you the after tax IRR for a specific property valuation. The current numbers in the sheet reflect <a href="https://www.loopnet.com/Listing/545-E-300-S-Salt-Lake-City-UT/31379070/" class="link-info link-offset-2">this property</a>. The inputs can be changed to reflect those of a different property, adjust interest, growth, or tax rates, LTV, term, and more. </p>
					<a href="RE_CF_Analysis.xlsx" download="RE_CF_Analysis.xlsx" class="link-info link-offset-2">Download the Excel File</a>
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
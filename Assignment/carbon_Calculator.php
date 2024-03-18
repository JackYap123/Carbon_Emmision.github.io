<!DOCTYPE html>
<html lang="en">
<head>
	<title>Carbon Footprint Calculator</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" href="images/favicon.png">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link  rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" >
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header class="text-gray-700 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-green-500 rounded-full" viewBox="0 0 24 24">
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
      </svg>
      <span class="ml-3 font-bold text-2xl">CO-CAL</span>
    </a>
    <nav class="md:ml-auto flex flex-wrap items-center text-2xl justify-center">
      <a href="index.html" class="mr-5 hover:text-gray-900">Home</a>
      <a href="about.html" class="mr-5 hover:text-gray-900">About</a>
      <a href="contact.html" class="mr-5 hover:text-gray-900">Contact</a>
    </div>
    </header>
</body>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" id="announcement-panel">
				<h1 id="announcement-header">What is your carbon footprint?</h1>
				<h3 id="announcement-subheader">Find out now with this simple calculator</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<section class="text-gray-700 body-font">
					  <div class="container px-5 py-24 mx-auto">
					    <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
					      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-8 h-8 text-gray-400 mb-8" viewBox="0 0 975.036 975.036">
					        <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
					      </svg>
					      <p class="leading-relaxed text-3xl">Sustainable development is the pathway to the future we want for all. It offers a framework to generate economic growth, achieve social justice, exercise environmental stewardship and strengthen governance.</p>
					      <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-8 mb-6"></span>
					      <h2 class="text-gray-900 font-medium title-font tracking-wider text-5xl">Ban Ki-moon</h2>
					      <p class="text-gray-500">South Korean - Leader</p>
					    </div>
					  </div>
					</section>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<div id="form">
					<form>
						<h3 id="home-energy-label"><i class="fa fa-home" aria-hidden="true"></i> Home Energy</h3>	
						<div class="form-group">
							<label for="electric">Monthly electric bill</label>
							<div class="input-group">
								<div class="input-group-addon">₹</div>
								<input class="form-control" id="electric" type="number" min="0" step="0.01">
							</div>
							<span class="help-block">Enter 0 if not applicable. If left blank, will default to 0.</span>
						</div>
						<div class="form-group">
							<label for="gas">Monthly natural gas bill</label>
							<div class="input-group">
								<div class="input-group-addon">₹</div>
								<input class="form-control" id="gas" type="number" min="0" step="0.01">
							</div>
							<span class="help-block">Enter 0 if not applicable. If left blank, will default to 0.</span>
						</div>
						<div class="form-group">
							<label for="oil">Monthly oil bil</label>
							<p><i>Somes homes use oil as a fuel source for heating furnances or boilers, and is often abbreviated as HHO.</i></p>
							<div class="input-group">
								<div class="input-group-addon">₹</div>
								<input class="form-control" id="oil" type="number" min="0" step="0.01">
							</div>
							<span class="help-block">Enter 0 if not applicable. If left blank, will default to 0.</span>
						</div>
						<br/>
						<h3 class="form-section-label" id="travel-label"><i class="fa fa-globe" aria-hidden="true"></i> Travel</h3>
						<div class="form-group">
							<label for="car">Annual miles driven on your car</label>
							<input class="form-control" id="car" type="number" min="0" step="1">
							<span class="help-block">Enter 0 if not applicable. If left blank, will default to 0.</span>
						</div>
						<div class="form-group">
							<label for="flights-4-less">Number of flights taken in the past year (4 hours or less)</label>
							<input class="form-control" id="flights-4-less" type="number" min="0" step="1">
							<span class="help-block">Enter 0 if not applicable. If left blank, will default to 0.</span>
						</div>
						<div class="form-group">
							<label for="flights-4-more">Number of flights taken in the past year (4 hours or more)</label>
							<input class="form-control" id="flights-4-more" type="number" min="0" step="1">
							<span class="help-block">Enter 0 if not applicable. If left blank, will default to 0.</span>
						</div>
						<br/>
						<h3 class="form-section-label" id="waste-label"><i class="fa fa-recycle" aria-hidden="true"></i> Waste</h3>
						<div class="form-group">
							<label>Do you recycle newspaper?</label>
							<div class="alert alert-danger" role="alert" id="newspaper-alert"><strong>Oops!</strong> You need to make a selection.</div>
							<div class="radio">
								<label>
									<input type="radio" name="newspaperOptionsRadios" id="optionsRadio1" value="option1">
									Yes
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="newspaperOptionsRadios" id="optionsRadio2" value="option2">
									No
								</label>
							</div>
						</div>
						<div class="form-group">
							<label>Do you recycle aluminum and tin?</label>
							<div class="alert alert-danger" role="alert" id="alum-tin-alert"><strong>Oops!</strong> You need to make a selection.</div>
							<div class="radio">
								<label>
									<input type="radio" name="alumtinOptionsRadios" id="optionsRadio3" value="option3">
									Yes
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="alumtinOptionsRadios" id="optionsRadio4" value="option4">
									No
								</label>
							</div>
						</div>
						<br/>
						<button id="calculate-btn" type="button" class="btn btn-success btn-lg btn-block">Calculate</button>
					</form>
				</div>

				<div id="results" class="text-center">
					<h1 id="score"></h1>
					<br/>
					<p class="lead">This number represents the amount of greenhouse gases in units of carbon dioxide you emit per year</p>
					<br/>
					<h5 class="bg-success score-info">438,000 or below is EXCELLENT</h5>
					<h5 class="bg-info score-info">438,000 to 1,167,927 is GOOD</h5>
					<h5 class="bg-warning score-info">1,167,927 to 1,606,000 is AVERAGE</h5>
					<h5 class="bg-danger score-info">1,606,000 or above is BAD</h5>
					<br/>
					<br/>
					<br/>
					<button id="recalculate-btn" type="button" class="btn btn-success btn-lg btn-block">Recalculate</button>
			<!---->
        <table class="calcgraph" style="margin: auto;">
          <tbody><tr class="calcgraph">
            <td class="calcgraph"><img src="images/blackfoot2.gif" width="105" height="38" alt="Your footprint is 0.32 metric tons per year"></td>
            <td class="calcgraph"><img src="images/blackfoot1.gif" width="105" height="208" alt="The average footprint for people in India is 1.73 metric tons"></td>
            <td class="calcgraph"><img src="images/blackfoot.gif" width="105" height="240" alt="The worldwide target to combat climate change is 2 metric tons"></td>
       	 </tr>
		<tr class="calcgraph">
            <th class="calcgraph">Your<br>Footprint</th><th class="calcgraph">Country<br>Average</th><th class="calcgraph">World<br>Target</th>
        </tr>
    </tbody>
    </table>
   <div class="resultspic"></div>
    <table class="gentable resultsnotes"><tbody><tr><td>
   <ul class="resultsbullets">
    <li class="resultsbullets">The average footprint for people in India is 1.73 metric tons</li><li class="resultsbullets">The average for the European Union is about 6.4 metric tons</li><li class="resultsbullets">The average worldwide carbon footprint is about 5 metric tons</li><li class="resultsbullets">The worldwide target to combat climate change is 2 metric tons</li>
  </ul>
  </td></tr></tbody></table>
  </div>
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				
			</div>
			
	</div>

	

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="js/script.js" type="text/javascript"></script>
</body>
</html>

<?php
include_once("php/config.php");
  session_start();

  // Retrieve $total_food from session variable
  $food_total = $_SESSION['food_total'];
  $transport_total= $_SESSION['transport_total'];
  $Total_KHW = $_SESSION['Total_KHW'];
  $Total_Time_Span = $_SESSION['Total_Time_Span'];
  $Total_Time_Span_Month = $_SESSION['Total_Time_Span_Month'];

  
  // Display $total_food
  echo "Total Food: $food_total";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Enhanced Columns</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
      color: #444;
    }
    .container {
      margin-top: 40px;
    }
    .card {
      border: none;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }
    .card:hover {
      transform: translateY(-5px);
    }
    .card-img-top {
      border-top-left-radius: 0.25rem;
      border-top-right-radius: 0.25rem;
      object-fit: cover;
      height: 200px;
    }
    .card-body {
      padding: 20px;
      border: 1px solid #f0f0f0;
      border-top: none;
      border-bottom-left-radius: 0.25rem;
      border-bottom-right-radius: 0.25rem;
    }
    .card-title {
      color: #333;
      font-size: 1.5rem;
      font-weight: bold;
      margin-bottom: 10px;
    }
    .card-text {
      color: #666;
      font-size: 1rem;
      margin-bottom: 20px;
    }
    .btn {
      background-color: #007bff;
      border-color: #007bff;
      border-radius: 20px;
      padding: 8px 20px;
      font-size: 1rem;
      transition: background-color 0.3s ease;
    }
    .btn:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }
    footer {
      background-color: #343a40;
      color: #fff;
      padding: 20px 0;
      text-align: center;
      position: fixed;
      bottom: 0;
      width: 100%;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <div class="card">
          <img class="card-img-top" src="https://source.unsplash.com/400x300/?food" alt="Food Image">
          <div class="card-body">
            <h5 class="card-title">Column 1</h5>
            <p class="card-text">Your food carbon emission is total is:<?php echo $food_total ?></p>
            <a href="#" class="btn btn-primary">Button</a>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card">
          <img class="card-img-top" src="https://source.unsplash.com/400x300/?transportation" alt="Food Image">
          <div class="card-body">
            <h5 class="card-title">Column 2</h5>
            <p class="card-text">Your trasportation carbon emission is total is:<?php echo $transport_total ?></p>
            <a href="#" class="btn btn-primary">Button</a>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card">
          <img class="card-img-top" src="https://source.unsplash.com/400x300/?electric" alt="Food Image">
          <div class="card-body">
            <h5 class="card-title">Column 3</h5>
            <p class="card-text">Your electrical carbon emission is total is:<?php echo $Total_KHW ?>
            Your day of electric carbon emission is total is:<?php echo $Total_Time_Span ?>
            Your month carbon emission is total is:<?php echo $Total_Time_Span_Month ?>

          </p>
            <a href="#" class="btn btn-primary">Button</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <p>&copy; 2024 Enhanced Columns. All rights reserved.</p>
  </footer>
</body>
</html>

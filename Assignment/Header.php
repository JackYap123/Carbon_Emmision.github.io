<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="icon" type="image/png" href="logo_Of_Carbon.png">
</head>
<body>

<?php

    $id = $_SESSION['id'];
    $query = mysqli_query($con,"SELECT*FROM users WHERE Id = $id");
    while($result = mysqli_fetch_assoc($query))
    {
        $res_Uname = $result['UserName'];
        $res_Email = $result['Email'];
        $res_Age = $result['Age'];
        $res_id = $result['Id'];

    }
        echo "<a href = 'User_Edit_Profile.php?Id = $res_id'>Change Profile</a>"

    ?>

<a href="php/Logout_Page_User.php"><button class="btn">Log Out</button></a>
<nav class="navbar navbar-expand-lg navbar-light custom-navbar">
      <a class="navbar-brand" href="Main_Page.html"><img src="logo_Of_Carbon.png" alt="Logo Image" class="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"><img src="home_icon.png" alt="home icon" class="icon"><span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Carbon Inform
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Top Rank</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <div>
          <a href="profile_Page.html"><img src="profile_Picture.jpg" alt="Profile Picture" class="profile-picture"></a>
          <div class="profile-name">
            <div class="name"><?php echo $res_Uname?></div><!--limit in 20 word-->
            <div class="nickname">Nickname</div>
          </div>
        </div>
      </div>
    </nav>
</body>
</html>

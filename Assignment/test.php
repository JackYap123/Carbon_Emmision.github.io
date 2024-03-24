
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
        
        <!-- title of site -->
        <title>Directory Landing Page</title>


		<!--flaticon.css-->
        <link rel="stylesheet" href="/Assignment/html/assets/css/flaticon.css">


        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="/Assignment/html/assets/css/bootstrap.min.css">
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="/Assignment/html/assets/css/bootsnav.css" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="/Assignment/html/assets/css/style.css">
        
  
    <title>Document</title>
</head>

<body>
    <?php
        include_once("Header.php");
    ?>
    <section id="list-topics" class="list-topics">
        <div class="container" style="margin-top: 150px;">
            <div class="list-topics-content">
                <ul>
                    <li>
                        <button class="single-list-topics-content" id="button1">
                            <div>
                                <i class="fa-solid fa-utensils" aria-hidden="true"></i>      
                            </div>                     
                            <h2><a href="#">Food</a></h2>
                        </button>
                    </li>
                    <li>
                        <button class="single-list-topics-content" id="button2">
                            <div class="single-list-topics-icon">
                                <i class="flaticon-travel"></i>
                            </div>
                            <h2><a href="#">Breakfast</a></h2>
                        </button>
                    </li>
                    <li>
                        <button class="single-list-topics-content" id="button3">
                            <div class="single-list-topics-icon">
                                <i class="flaticon-building"></i>
                            </div>
                            <h2><a href="#">Lunch</a></h2>
                        </button>
                    </li>
                    <li>
                        <button class="single-list-topics-content" id="button4">
                            <div class="single-list-topics-icon">
                                <i class="flaticon-pills"></i>
                            </div>
                            <h2><a href="#">Dinner</a></h2>
                        </button>
                    </li>
                    <li>
                        <button class="single-list-topics-content" id="button5">
                            <div class="single-list-topics-icon">
                                <i class="flaticon-transport"></i>
                            </div>
                            <h2><a href="#">Other</a></h2>
                        </button>
                    </li>
                </ul>
            </div>
        </div><!--/.container-->

    </section><!--/.list-topics-->
    <script>
        var button1 = document.getElementById("button1");
        var button2 = document.getElementById("button2");
        var button3 = document.getElementById("button3");
       

        button1.addEventListener("click",function(){
            window.location.href = "daily_log_food.php";
        });
        button2.addEventListener("click",function(){
            window.location.href = "daily_log_car.php";
        });
        button3.addEventListener("click",function(){
            window.location.href = "daily_log_trash.php";
        });
       

        
    </script>


   
    
</html>
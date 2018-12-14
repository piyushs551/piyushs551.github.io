<?php
session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
  </style>
  <link rel="stylesheet" type="text/css" href="styles-shop.css">
  <script src="script.js" type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script>
</head>
<body>
<img src="https://static1.squarespace.com/static/5472cb88e4b00abac9723402/t/54740a3de4b03905fd235909/1416890941836/T19_Sky_Sports_Banner.jpg?format=2500w" style="width:100%;">
  
<nav class="navbar navbar-inverse " data-spy="affix" data-offset-top="197">
  <div class="container-fluid">
    <div class="navbar-header">
     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>  
        <span class="icon-bar"></span>
        
      </button>
     <a  href="#"><img src="images/logo.jpg" alt="SportsBase" style="height: 68px;"></a> 
    </div>
     <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
      <li ><a href="main_Shubham_Patel.html">Home</a></li>
      <li>
                    <a href="teams.html" class="dropdown-toggle" data-toggle="dropdown">Teams <b class="caret"></b></a>
                    <ul class="dropdown-menu multi-level">
                                              
                       
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Soccer</a>
                            <ul class="dropdown-menu">
                                <li><a href="manutd.html">Manchester United</a></li>
                                <li><a href="real.html">Real madrid</a></li>
                             
                                
                            </ul>
                        </li>
                        
                        <li class="divider"></li>
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">NBA</a>
                            <ul class="dropdown-menu">
                                <li><a>Boston Celtics </a></li>
                                <li><a>New York Knicks</a></li>
                                </ul>
                        </li>
                        
                        <li class="divider"></li>
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">NFL</a>
                            <ul class="dropdown-menu">
                                <li><a>New England Patriots</a></li>
                                <li><a>Oakland Raiders</a></li>
                             
                                
                            </ul>
                        </li>
                        
                        
                    </ul>
                </li>
                <li>
                
                <li ><a href="Leagues_Shubham.html">Leagues</a></li>
                
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Features <b class="caret"></b></a>
                    <ul class="dropdown-menu multi-level">
                                              
                       <li >
                            <a href="sportsbasequiz.html" >SportsBase Quiz</a>
                           
                        </li>
                        
                        <li class="divider"></li>
                       <li>
                            <a href="sportsbaseblog.html" > SportsBase Blog</a>
                            
                        </li>s
                        <li class="divider"></li>
                        <li>
                            <a href="shop.html" > Shop</a>
                            
                        </li>
                        
                        
                        
                    </ul>
                </li>
                <li>
                
                <li ><a href="news.html">News</a></li>
                 <li ><a href="Analysis.html">Analysis</a>
      
    </ul>
    
    
    
    
    
    
    <ul class="nav navbar-nav navbar-right">
      <li><a data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="cartpage.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
    </ul>
  </div>
  </div>
</nav>



<!-- Modal -->
      <div class="modal fade" id="loginModal" role="dialog">
        <div class="modal-dialog">
    <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">login</h4>
        </div>
        <div class="modal-body">
              <form class="form" action="login.php" method="post">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input id="username" type="text" class="form-control" name="username" placeholder="username">
              </div>
                    
                    <br/>
                    
                    <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input id="password" type="password" class="form-control" name="password" placeholder="password">
              </div>

              <br/>

             <input type="submit" value="Submit" name="login_btn" class="btn btn-default">
            
              </form>
        </div>
        <div class="modal-footer">
        <button class="btn btn-primary" data-toggle="modal" data-target="#registerModal">newUser</button>
          
        </div>
      </div>
    
    </div>
    </div>

    <!-- Modal -->
      <div class="modal fade" id="registerModal" role="dialog">
        <div class="modal-dialog">
    <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Register</h4>
        </div>
        <div class="modal-body">
            <form class="form" action="register.php" method="post">

            <input id="name" type="text" class="form-control" name="name" placeholder="name">
            <br/>

      <input id="email" type="text" class="form-control" name="email" placeholder="email">
      
      <br/>

      <input id="username" type="text" class="form-control" name="username" placeholder="username">
            <br/>

            <input id="pass" type="password" class="form-control" name="pass" placeholder="pass">
            <br/>
      
      <input type="submit" value="submit" name="submit_btn" class="btn btn-default">
            
      </form>
      <br/>
        </div>
        
      </div>
    
    </div>
    </div>



<!-- nav bar end-->

		<!--bootstrap-->

		<div class="row">
		    <div class="col-sm-9 well">
		      
		      <h1>Shopping Cart</h1>
		    
		    
		    

<?php
	

		
		/* Attempt MySQL server connection. Assuming you are running MySQL
		server with default setting (user 'root' with no password) */
		$link = mysqli_connect("localhost", "root", "", "login");
		 
		// Check connection
		if($link === false){
		    die("ERROR: Could not connect. " . mysqli_connect_error());
		}
		 
		// Escape user inputs for security
		

		 
		// attempt insert query execution
		$sql = "select `desc`, price from shop where id in (select itemvalue from cart)";
		$result = mysqli_query($link, $sql);
		$row_cnt = $result->num_rows;
			if ($row_cnt > 0) {
				?>

			    <table class="table table-striped">
			    <thead>
			    <tr>
				    <th>Item</th>
				    <th>Price</th>
				</tr>
			    </thead>
			    <tbody>
			    <?php
			    while( $row = $result->fetch_assoc()){
			        echo "<tr><td>".$row["desc"]."</td><td>$".$row["price"]."</td></tr>";
			    }
			    echo "</tbody></table>";
			}
			else{
				echo "<h2>Your Shopping cart is EMPTY!!!</h2>";
			}
			
		// close connection and empty cart

			
		mysqli_close($link);

?>
</div>
<div class="col-sm-3 well">
		    <h2>Order Summary</h2>
			<?php	
				
		/* Attempt MySQL server connection. Assuming you are running MySQL
		server with default setting (user 'root' with no password) */
		$link = mysqli_connect("localhost", "root", "", "login");
		 
		// Check connection
		if($link === false){
		    die("ERROR: Could not connect. " . mysqli_connect_error());
		}
		 
		// Escape user inputs for security
		

		 
		// attempt insert query execution
		$sql = "select price from shop where id in (select itemvalue from cart)";
		
		$result = mysqli_query($link, $sql);
		$row_cnt = $result->num_rows;
			$temp = 0;
			while( $row = $result->fetch_assoc()){
				$temp = $row["price"] + $temp;
			}

			if ($row_cnt > 0) {
				?>

			    <table class="table table-hover">
			    
			    <?php
			    
			        echo "<tr><td>No. of item(s):</td><td>".$row_cnt."</td></tr>";
			        echo "<tr><td>Total:</td><td>".$temp."</td></tr>";
			    
			    echo "</table>";
			}
			
		// close connection and empty cart
			

?>
			<button id="button" class="btn btn-primary">Finish Order</button>

		    </div>
		</div>


<!--footer starts-->

	<footer style="background-color: black;">

 <div class="container">
    <section>
      <div class="page-header" id="contact">
          <h2>Contact Us.<small> Contact us for more.</small></h2>
        </div><!-- End Page Header -->

       <div class="row">
          <div class="col-lg-4">
            <p>Send us a message, or contact us from the address below</p>


           <address>
              <strong>SportsBase.com</strong></br>
              27, EverShine colony </br>
              Near Sanjana Park</br>
              Indore - 452001</br>
              P: +1 8577015814
            </address>
          </div>
          
         <div class="col-lg-8">
            <form action="" class="form-horizontal">
              <div class="form-group">
                <label for="user-name" class="col-lg-2 control-label">Name</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="user-name" placeholder="Enter you name">
                </div>
              </div><!-- End form group -->

             <div class="form-group">
                <label for="user-email" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="user-email" placeholder="Enter you Email Address">
                </div>
              </div><!-- End form group -->

             <div class="form-group">
                <label for="user-url" class="col-lg-2 control-label">Your Website</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="user-email" placeholder="If you have Any.">
                </div>
              </div><!-- End form group -->

             <div class="form-group">
                <label for="user-message" class="col-lg-2 control-label">Any Message</label>
                <div class="col-lg-10">
                  <textarea name="user-message" id="user-message" class="form-control"
                  cols="20" rows="10" placeholder="Enter your Message"></textarea>
                </div>
              </div><!-- End form group -->

             <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>

           

           </form>
          </div>
        </div><!-- End the row -->

   </section>
  </div>



 
   
       <div class=" text-center">
        

     
        <ul class="list-inline">
          <li><a href="http://www.twitter.com/wiredwiki">Twitter</a></li>
          <li><a href="http://www.facebook.com/askorama">Facebook</a></li>
          <li><a href="http://www.youtube.com/wiredwiki">YouTube</a></li>
        </ul>

       <p>&copy; Copyright @ 2017</p>

     </div>
      

   </footer>
   <script class="js">
   	
   $(document).ready(function(){
   		$("#button").click(function(){

<?php
   			$sql1 = "DELETE FROM cart";
				if ($link->query($sql1) === TRUE) {
				    
				}
			
		mysqli_close($link);
?>
	alert("your order has been placed!!!");
   		});
   });
   		

   </script>

</body>
</html>
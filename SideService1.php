<?php 

if(isset($_GET['code']))
{
    $code=$_GET['code'];
    if($code==1)
    {
         $query="SELECT * FROM inform WHERE category='Services'"; 
        $search_result=filterTable($query);
       
    }
    if($code==2)
    {
        $query1="SELECT * FROM inform where shop_type LIKE '%Driver%'"; 
       $search_result=filterTable($query1); 

    }
    if($code==3)
    {
        $query1="SELECT * FROM inform where shop_type LIKE '%Tailor%'"; 
       $search_result=filterTable($query1); 

    }
    if($code==4)
    {
        $query1="SELECT * FROM inform where shop_type LIKE '%Mechanic%'"; 
       $search_result=filterTable($query1); 

    }
    if($code==5)
    {
        $query1="SELECT * FROM inform where shop_type LIKE '%Bus Agent%'"; 
       $search_result=filterTable($query1); 

    }
    if($code==6)
    {
        $query1="SELECT * FROM inform where shop_type LIKE '%Travel Agent%'"; 
       $search_result=filterTable($query1); 

    }
    if($code==7)
    {
        $query1="SELECT * FROM inform where shop_type LIKE '%Electrician%'"; 
       $search_result=filterTable($query1); 

    }
    if($code==8)
    {
        $query1="SELECT * FROM inform where shop_type LIKE '%Carpenter%'"; 
       $search_result=filterTable($query1); 

    }
    if($code==9)
    {
        $query1="SELECT * FROM inform where shop_type LIKE '%Plumber%'"; 
       $search_result=filterTable($query1); 

    }
    if($code==10)
    {
        $query1="SELECT * FROM inform where shop_type LIKE '%Sweeper%'"; 
       $search_result=filterTable($query1); 

    }
    if($code==11)
    {
        $query1="SELECT * FROM inform where shop_type LIKE '%Painter%'"; 
       $search_result=filterTable($query1); 

    }
    if($code==12)
    {
        $query1="SELECT * FROM inform where shop_type LIKE '%Doctor%'"; 
       $search_result=filterTable($query1); 

    }
    if($code==13)
    {
        $query1="SELECT * FROM inform where shop_type LIKE '%Advocate%'"; 
       $search_result=filterTable($query1); 

    }
    if($code==14)
    {
        $query1="SELECT * FROM inform where shop_type LIKE '%Accountant%'"; 
       $search_result=filterTable($query1); 

    }
    if($code==15)
    {
        $query1="SELECT * FROM inform where shop_type LIKE '%Dry Cleaner%'"; 
       $search_result=filterTable($query1); 

    }
    if($code==16)
    {
        $query1="SELECT * FROM inform where shop_type LIKE '%DTH Cable%'"; 
       $search_result=filterTable($query1); 

    }
    if($code==17)
    {
        $query1="SELECT * FROM inform where shop_type LIKE '%Tiffin Delievery%'"; 
       $search_result=filterTable($query1); 

    }

}
if(isset($_GET['code'])==false)
{

    if(isset($_POST['search']))
    {   
    
    $box= $_POST['box'];
    $query="SELECT * FROM inform WHERE area LIKE '%" .$box. "%'  AND category='Services' ";
//     $query=$query+"AND category = 'Services'";
//    echo $query;
    $search_result=filterTable($query);

    }
    else{
        $query= "SELECT * FROM inform WHERE category='Services' ";
        $search_result=filterTable($query);
    }
    
}
function filterTable($query)
{
    $connect = mysqli_connect("localhost","root","","sanjha");
    $filter_Result=mysqli_query($connect,$query);
    return $filter_Result;
}
?>
<!-- --------------------------------------------------------------- -->
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- <link rel="stylesheet" href="sideservice.css"> -->
</head>
<style>
    /* TEAM */
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box; 
     list-style: none;
    text-decoration: none;
}
.container{
    margin-top: 100px;
    
}
.team{
    background: white;
}
.team .member{
    position: relative;
    box-shadow: 1px 2px 15px rgb(7, 110, 194);
    border-radius: 10px;
    
}

.team .member h4{
    font-weight: bold;
    margin-bottom: 5px;
    font-size: 20px;
    color:black;
}
.team .member span{
    display: block;
    font-size: 15px;
    padding-bottom: 10px;
    position: relative;
    font-weight: bold;
}
.team .member span:after{
    content: "";
    position: absolute;
    display: block;
    width: 50px;
    height: 1px;
    background:rgba(0,0,0 ,0.8);
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
}
.team .member p{
    margin: 10px 0 0 0;
    font-size: 14px;
}
.team .social{
    margin-top: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.social .phone{
    margin: 0px;    
    background: chartreuse;
    color: blue;
    font-size: 12px;
    size: 20px;
    width: 115px;
    
}
.social .mail{
    margin: 0px;    
    background: chartreuse;
    color: blue;
    font-size: 12px;
    size: 20px;
    width: 115px;
    
}
header{
    width: 100%;
    height: 10vh;
    background-color: rgb(162, 225, 230);
    position:fixed;
    z-index: 1;
    margin-top: -100px;
}
header > h1{
    text-align: center;
    margin: 10px 0;
}
header .search-box{
    position: absolute;
    margin-top: -55px;
    margin-left: 800px;
    
    
} 
 .search-btn{
    color: rgb(250, 250, 253);
    float:right;
    width: 70px;
    height: 40px;
    border-radius: 40%;
    background: black;
    display: flex;
    justify-content: center;
    align-items: center;
    
}

input{
    border: 3px solid black;
    height: 40px;
    width: 30vh;
    border-radius: 50px;
    padding: 0 10px;
}
/* .search-box:hover > .search-txt{
    width: 240px;
    padding: 0 6px;
    transition: 1s;
} */

.search-box> .search-btn{
    background: white;
    color: blue;
}
.wrapper{
    display: flex;
    position: fixed;
    margin-top: -20px;
    
}
.wrapper .sidebar{
    
    width: 220px;
    height: 80vh;
    position: fixed;
    padding: 40px 0;
    background-color: rgb(162, 225, 230);
    
}
.wrapper .sidebar h5{
    color:black;
    text-align: center;
    text-transform: uppercase;
    margin-top: -30px;
    margin-bottom: 14px;
    font-size: 23px; 
    
}

.wrapper .sidebar ul li{
    padding: 3px;
    font-size: px;
    border-bottom: 1px solid rgba(20, 15, 15, 0.05);
    border-top: 1px solid rgba(12, 11, 11, 0.05);
}
.wrapper .sidebar ul li a{
    color: rgb(59, 25, 161);
    display: block;
    text-transform: uppercase;
    margin-left: 30px;
    transition: 1s;
    font-size: 13px;
    
}
.wrapper .sidebar ul li a .fas{
    width: 35px;
}
.wrapper .sidebar ul li a .fab{
    width: 35px;
}
.wrapper .sidebar ul li:hover{
    background-color: rgba(88, 82, 82, 0.05);
}
.wrapper .sidebar ul li:hover a{
    color: rgb(19, 15, 15);
}

/* END TEAM */
/* Dropdown Button */
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    position: absolute;
    margin-top: -75px;
    margin-left: 1100px;
  }
  
  /* The container <div> - needed to position the dropdown content */
  .dropdown {
    position: relative;
    display: inline-block;
    transition: .5s;
  }
  
  /* Dropdown Content (Hidden by Default) */
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    position: absolute;
    margin-top: -30px;
    margin-left: 1100px;
    height: 95vh;
    transition: .5s;
    
  }
  
  /* Links inside the dropdown */
  .dropdown-content a {
    color: rgb(105, 182, 226);
    padding: 3px 10px;
    text-decoration: none;
    display: block;
    transition: .5s;

  }
  
  /* Change color of dropdown links on hover */
  .dropdown-content a:hover {background-color: rgb(134, 125, 125);}
  
  /* Show the dropdown menu on hover */
  .dropdown:hover .dropdown-content {display: block;}
  
  /* Change the background color of the dropdown button when the dropdown content is shown */
  .dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>

<body>
    <header>

        <h1>SANJHA.com</h1>
        <form action="SideService1.php" method="post">
        <div class="search-box">
            <input class="search-txt" type="text" name="box" placeholder="search what u want">
            <!-- <a class="search-btn" href="SideService.php" method="post" name="search" type="submit"><i class="fas fa-search"></i></a> -->
            <input class="search-btn" name="search" type="submit" >
        </div>
</form>


    </header>
	
	<frameset cols="20% 80%">

	<frame src="sidebar1.html"> </frame>

	<frame src="main.php"


	</frameset>
    

    <section id="team ">
        <div class="container">
            <div class="row">
            <?php
      
      require 'Database.php';
      $query="select * from inform ";
      $query_run=mysqli_query($connection,$query);
      $check_servi1=mysqli_num_rows($query_run) > 0;
      
     // $search_result=$query_run;
    //   $search_result=null;
     // print_r($search_result); 
    //   echo "Search" . $search_result . "Result";
     
      if($check_servi1)
      {
            while($row = mysqli_fetch_array($search_result))
            {
               // $code=1;
                // $num=$num+1;

                ?>
                <div class="col-lg-3">
                    <div class="section-tittle ">



                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row" >
                        <div class="col-lg-4  mt-lg-1">
                            <div class="member">
                                <div class="image">
                                    <img src="<?php  echo $row['image']; ?>" class="img-fliud" alt="" style="width: 110%; height: 28vh;">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="info" style="margin-top:30px;">
                                <h4> <?php  echo $row['shop_name']; ?></h4>
                                <?php  echo $row['pro_name']; ?>
                                <p> <?php  echo $row['address']; ?></p>
                                <h6> <?php  echo $row['mobile1']; ?>
                                    <?php  echo $row['mobile2']; ?></h6>
                                <h6> <?php  echo $row['email']; ?></h6>
                                <div class="social">
                                    <button class="btn btn-default phone" type="button"><i class="fas fa-phone"></i> Add to phone</button>

                                    <button class="btn btn-default mail" type="button"><i class="fas fa-envelope-square"></i>Send mail</button>

                                </div>
                            </div>

                        </div>

                        <!------------------------------------------------->


                        <!------------------------------------------------->
                    </div>
                </div>
                
                <?php
               
            }
      }
      else{
          echo "No Record Found";
      }
      ?>
            </div>
        </div>

    </section>

    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
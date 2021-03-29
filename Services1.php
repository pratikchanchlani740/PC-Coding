<?php 



if(isset($_GET['code']))
{
    $code=$_GET['code'];
    if($code==1)
    {
         $query="SELECT * FROM inform WHERE category='Information' "; 
        $search_result=filterTable($query);
       
    }
    if($code==2)
    {
        $query1="SELECT * FROM inform where shop_type LIKE '%Auto Mobile%'"; 
       $search_result=filterTable($query1); 

    }
    if($code==3)
    {
        $query1="SELECT * FROM inform where shop_type LIKE '%Shoe Shop%'"; 
        $search_result=filterTable($query1); 

    }
    if($code==4)
    {
        $query1="SELECT * FROM inform where shop_type LIKE '%Hardware%'"; 
        $search_result=filterTable($query1); 

    }
    if($code==5)
    {
        $query1="SELECT * FROM inform where shop_type LIKE '%Cosmetics%'"; 
        $search_result=filterTable($query1); 

    }
    if($code==6)
    {
        $query1="SELECT * FROM inform where shop_type LIKE '%Sports%'"; 
        $search_result=filterTable($query1); 

    }
    if($code==7)
    {
        $query1="SELECT * FROM inform where shop_type LIKE '%Fitness%'"; 
        $search_result=filterTable($query1); 

    }
    if($code==8)
    {
        $query1="SELECT * FROM inform where shop_type LIKE '%Hotels%'"; 
        $search_result=filterTable($query1); 

    }
    if($code==9)
    {
        $query1="SELECT * FROM inform where shop_type LIKE '%Cafe%'"; 
        $search_result=filterTable($query1); 

    }
    if($code==10)
    {
        $query1="SELECT * FROM inform where shop_type LIKE '%Restaurant%'"; 
        $search_result=filterTable($query1); 

    }
    if($code==11)
    {
        $query1="SELECT * FROM inform where shop_type LIKE '%Mobile Shop%'"; 
        $search_result=filterTable($query1); 

    }
    if($code==12)
    {
        $query1="SELECT * FROM inform where shop_type LIKE '%Clothing Shop%'"; 
        $search_result=filterTable($query1); 

    }
    if($code==13)
    {
        $query1="SELECT * FROM inform where shop_type LIKE '%Grocery%'"; 
        $search_result=filterTable($query1); 

    }
    if($code==14)
    {
        $query1="SELECT * FROM inform where shop_type LIKE '%Electronic%'"; 
        $search_result=filterTable($query1); 

    }
    if($code==15)
    {
        $query1="SELECT * FROM inform where shop_type LIKE '%Jwellers%'"; 
        $search_result=filterTable($query1); 

    }
    if($code==16)
    {
        $query1="SELECT * FROM inform where shop_type LIKE '%Medicals%'"; 
        $search_result=filterTable($query1); 

    }
    if($code==17)
    {
        $query1="SELECT * FROM inform where shop_type LIKE '%Bakery%'"; 
        $search_result=filterTable($query1); 

    }
    if($code==18)
    {
        $query1="SELECT * FROM inform where shop_type LIKE '%Furniture%'"; 
        $search_result=filterTable($query1); 

    }

    if($code==23)
    {
        $query1="SELECT * FROM inform where shop_type LIKE '%SteelWorks%'"; 
        $search_result=filterTable($query1); 

    }
    if($code==19)
    {
        $query1="SELECT * FROM inform where shop_type LIKE '%Salon%'"; 
        $search_result=filterTable($query1); 

    }
    if($code==20)
    {
        $query1="SELECT * FROM inform where shop_type LIKE '%Parlour%'"; 
        $search_result=filterTable($query1); 

    }
    if($code==21)
    {
        $query1="SELECT * FROM inform where shop_type LIKE '%Distributor%'"; 
        $search_result=filterTable($query1); 

    }
    if($code==22)
    {
        $query1="SELECT * FROM inform where shop_type LIKE '%Garage%'"; 
        $search_result=filterTable($query1); 

    }

}
if(isset($_GET['code'])==false)
{
    if(isset($_POST['search']))
    {   
    
    $box= $_POST['box'];
    $query="SELECT * FROM inform WHERE area LIKE '%" .$box. "%' AND category='Information' ";
    $search_result=filterTable($query);

    }
    else{

    
    $query= "SELECT * FROM inform WHERE category='Information' ";
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

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/332a215f17.js"crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
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
    float: right;
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
    width: 200px;
    border-radius: 50px;
    padding: 0 10px;
}


.wrapper{
    display: flex;
    position: fixed;
    margin-top: -15px;
    overflow: scroll; 
    
}
.wrapper .sidebar{
    
    width: 220px;
    height: 75vh;
    position: fixed;
    padding: 40px 0;
    background-color: rgb(200, 225, 240);
    
    
}

.wrapper .sidebar h5{
    color:black;
    text-align: center;
    text-transform: uppercase;
    margin-top: -10px;
    margin-bottom: 14px;
    font-size: 20px; 
    
}

.wrapper .sidebar ul li{
    padding: 3px;
    font-size: 12px;
    border-bottom: 1px solid rgba(20, 15, 15, 0.05);
    border-top: 1px solid rgba(12, 11, 11, 0.05);
}
.wrapper .sidebar ul li a{
    color: rgb(117, 103, 158);
    display: block;
    text-transform: uppercase;
    margin-left: 30px;
    transition: 1s;
    
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

  </style>


<body>
<header>
    <h1>SANJHA.com</h1>
   <form action="Services1.php" method="post">
    <div class="search-box" >
        <input class="search-txt" type="text" name="box" placeholder="search what u want"  >
        <input class="search-btn" name="search" type="submit" >
    </div> 
    </form>
</header>
 

<section id="team ">
    <div class="container">
      <div class="row">
      <?php
      
      require 'Database.php';
      $query="select * from inform";
      $query_run=mysqli_query($connection,$query);
      $check_servi1=mysqli_num_rows($query_run) > 0;
      
    
      if($check_servi1)
      {
            while($row = mysqli_fetch_array($search_result))
            {

                ?>
                <div class="col-lg-3">
          <div class="section-title ">
         
          </div>
        </div>
        <div class="col-lg-8">
          <div class="row">
            <div class="col-lg-4  mt-lg-1">
              <div class="member">
                <div class="image">
             
                    
                <img src="<?php  echo $row['image']; ?>" class="img-fliud" alt="" style="width: 110%; height: 28vh;">
                
                </div>
            </div>
            </div>
           
            <div class="col-md-8">
                <div class="info">
                
              

                    <h4>
                        <?php  echo $row['shop_name']; ?>
                    </h4>
                    <?php  echo $row['pro_name']; ?>
                    
                    <p> <?php  echo $row['address']; ?> </p>
                    
                    <h6>
                    <?php  echo $row['mobile1']; ?>
                    <?php  echo $row['mobile2']; ?>
                    </h6>
                    <h6>  <?php  echo $row['email']; ?>
                    </h6>
                    
                      <div class="social">
                          <button class="btn btn-default phone" type="button"><i class="fas fa-phone"></i> Add to phone</button>
                    
                          <button class="btn btn-default mail" type="button"><i class="fas fa-envelope-square"></i><a href="MailDemo1.php?email= <?php echo $row['email']; ?>"> Send mail</a></button>
                        
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

    
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">
        // $(document).ready(function() {
        //     $('.list').click(function() {
        //         const value = $(this).attr('data-filter');
        //         if (value == 'all') {
        //             $('.'+value).show('1000');

        //         } else {
        //             $('.'+value).not('.' + value).hide('1000');
        //             $('.'+value).filter('.' + value).show('1000');
        //         }
        //     })
        // })
    </script>
 </body>

</html>
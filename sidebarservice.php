<?php 
if(isset($_POST['search']))
{   
    
    $box= $_POST['box'];
    $query="SELECT * FROM inform WHERE area LIKE '%" .$box. "%' ";
   // echo $query;
    $search_result=filterTable($query);

}

function filterTable($query)
{
    $connect = mysqli_connect("localhost","root","","sanjha");
    $filter_Result=mysqli_query($connect,$query);
    return $filter_Result;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document1</title>
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   

</head>
<style>
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
    margin-left: 1000px;
    
    
}
.search-btn{
    color: rgb(250, 250, 253);
    float: right;
    width: 100px;
    height: 40px;
    border-radius: 50%;
    background: black;
    display: flex;
    justify-content: center;
    align-items: center;
    
}

input{
    border: 3px solid black;
    height: 40px;
    width: 0px;
    border-radius: 50px;
    padding: 0 10px;
}
.search-box:hover > .search-txt{
    width: 240px;
    padding: 0 6px;
    transition: 1s;
}

.search-box:hover > .search-btn{
    background: white;
    color: blue;
}
/* #d1{
    overflow: scroll;
    color: blue;
} */
.wrapper{
    display: flex;
    position: fixed;
    margin-top: -15px;
    
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
</style>

<body>
    <header>
        <h1>SANJHA.com</h1>
        <form action="sidebarservice.php" method="post">
        <div class="search-box">
            <input class="search-txt" type="text" name="box" placeholder="search what u want">
            <input class="search-btn" name="search" type="submit" ><i class="fas fa-search"></i>
            <!-- <a class="search-btn" href="#"><i class="fas fa-search" type="submit" name="search"></i></a> -->
        </div>
        </form>
    </header>

    <div class="wrapper">
        <div class="sidebar">

            <h5>SERVICES</h5>
            <ul>
                <li>
                    <a href="sidebarservice?code=1"> <i class="fas fa-home"></i>HOME</a>
                </li>
                <li>
                    <a href="sidebarservice?code=2"> <i class="fas fa-car"></i>DRIVER</a>
                </li>
                <li><a href="sidebarservice?code=3"><i class="fas fa-cut"></i>TAILOR</a></li>
                <li><a href="sidebarservice?code=4"><i class="fas fa-cogs"></i>MECHANIC</a></li>
                <li><a href="sidebarservice?code=5"><i class="fas fa-bus-alt"></i>BUS AGENT</a></li>
                <li><a href="sidebarservice?code=6"><i class="fas fa-train"></i>TRAIN AGENT</a></li>
                <li><a href="sidebarservice?code=7"><i class="fas fa-charging-station"></i>ELECTRICIAN</a></li>
                <li><a href="sidebarservice?code=8"><i class="fas fa-ambulance"></i>CARPANTER</a></li>
                <li><a href="sidebarservice?code=9"><i class="fab fa-pied-piper-pp"></i>PLUMBER</a></li>
                <li><a href="sidebarservice?code=10"><i class="fas fa-male"></i>SWEEPER</a></li>
                <li><a href="sidebarservice?code=11"><i class="fas fa-paint-roller"></i>PAINTER</a></li>
                <li><a href="sidebarservice?code=12"><i class="fas fa-user-nurse"></i>DOCTOR</a></li>
                <li><a href="sidebarservice?code=13"><i class="fas fa-user-nurse"></i>ADVOCATE</a></li>
                <li><a href="sidebarservice?code=14"><i class="fas fa-user-alt"></i>ACCOUNTANT</a></li>
                <li><a href="sidebarservice?code=15"><i class="fas fa-hand-sparkles"></i>DRY CLEANER</a></li>
                <li><a href="sidebarservice?code=16"><i class="fas fa-route"></i>DTH CABEL</a></li>
                <li><a href="sidebarservice?code=17"><i class="fas fa-box"></i>TIFFIN DELVERY</a></li>


            </ul>
        </div>

    </div>
    <section id="team ">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="section-tittle ">



                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row" style="margin-top:80px;">
                        <div class="col-lg-4  mt-lg-1">
                            <div class="member">
                                <div class="image">
                                    <img src="D:\project work\image/car1.jpg" class="img-fliud" alt="" style="width: 110%; height: 28vh;">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="info" style="margin-top:30px;">
                                <h4>KP general store</h4>
                                propreitor :- "pratik chanchlani"
                                <p> NEAR TIRUPATI COURIER,sadar bazar,aburoad </p>
                                <h6>7734832123</h6>
                                <h6>pratikchanchlani11@gmail.com</h6>
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
            </div>
        </div>

    </section>

   
   

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   
</body>

</html>
<?php 
if(isset($_POST['search']))
{
    $valueToSearch= $_POST['valueToSearch'];
    $query="SELECT * FROM servi1 WHERE sno LIKE '%" .$valueToSearch. "%' ";
    $search_result=filterTable($query);
}
else{
    $query= "SELECT * FROM servi1";
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
    <title>Document</title>
</head>
<body>
    <form action="Form.php" method="post">

    <input type="text" name="valueToSearch"  placeholder="value to search"> <br> <br>
    <input  type="submit" name="search" value="Filter"> <br> <br>

    <table>
    <tr>
        <th> ID <th>
        <th>Proprietor Name<th>
        <th>ShopName <th>
</tr>
<?php while($row =mysqli_fetch_array($search_result)): ?>
<tr>
<td> <?php echo $row['sno']; ?> </td>
<td> <?php echo $row['pro_name']; ?> </td>
<td> <?php echo $row['shop_name']; ?> </td>

<?php endwhile; ?>
    </table>
    <form>

</body>
</html>
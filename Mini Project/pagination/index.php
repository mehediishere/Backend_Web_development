<?php 

    require_once('config.php');

    if(isset($_GET['page']))
    {
        $page = $_GET['page'];
    }
    else
    {
        $page = 1;
    }

    $num_per_page = 05;
    $start_from = ($page-1)*05;
    
    $query = "select * from employees limit $start_from,$num_per_page";
    $result = mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Pagination</title>
</head>
<body>
    <div class="container">
        <table class="table table-striped">
            <tr>
                <td> User ID </td>
                <td> User Name </td>
                <td> User Email </td>
            </tr>
            <tr>
                <?php 
                    while($row=mysqli_fetch_assoc($result))
                    {
                ?>
                    <td> <?php echo $row['id'] ?> </td>
                    <td> <?php echo $row['name'] ?> </td>
                    <td> <?php echo $row['email'] ?> </td>
                   
            </tr>
         <?php 
                }
                ?>
        </table>

        <?php 
        
                $query = "select * from employees ";
                $result = mysqli_query($con,$query);
                $total_record = mysqli_num_rows($result);
                
                $total_page = ceil($total_record/$num_per_page);

                if($page>1)
                {
                    echo "<a href='index.php?page=".($page-1)."' class='btn btn-primary'>Previous</a>";
                }

                
                for($i=1;$i<$total_page;$i++)
                {
                    echo "<a href='index.php?page=".$i."' class='btn btn-success'>$i</a>";
                }

                if($i>$page)
                {
                    echo "<a href='index.php?page=".($page+1)."' class='btn btn-primary'>Next</a>";
                }
        
        ?>
    </div>

        
</body>
</html>
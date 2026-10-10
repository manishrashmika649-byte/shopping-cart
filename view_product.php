<!-- database connect -->
 <?php include 'connect.php'?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view products-projects</title>
    <!-- css file -->
    <link rel="stylesheet" href="css/style.css">
     <!-- font awesome link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <?php include  'header.php'?>
    <!--container -->
    <div class="container">
        <section class="display_product">
           

                <!--php code-->
                    <?php
$display_product=mysqli_query($conn,"select * from `products`");

if(mysqli_num_rows($display_product)>0){
    $sum=1;
       

  echo"  <table>
                <thead>
                    <th>SI No</th>
                    <th>Product Image</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Action</th>
                </thead>
                <tbody>";

   //logic to fetch data 

     while($row=mysqli_fetch_assoc($display_product)){
        ?>
        <!-- display table-->
            
        
        <tr>
                        <td><?php echo $sum?></td>
                        <td><img src="images/<?php echo $row['image']?>" alt=<?php echo $row['name']?>  ></td>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['price']?></td>
                        <td>
                            <a href="delete.php?delete=<?php echo $row['id']?>"class="delete_product_btn"onclick="return confirm('you want to delete this');"><i class="fas fa-trash"></i></a>
                            <a href=""class="update_product_btn"><i class="fas fa-edit"></i></a>
                        </td>
                     </tr>

        <?php
        $sum++;
     }
      
}else{
    echo "<div class='empty_text'>no Products available</div>";
}


         ?>

                     
                </tbody>    
                
            </table>
        </section>
    </div>

</body>
</html>
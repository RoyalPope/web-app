<?php
include('astart.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylee.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include('nav.php');
    ?>
    <?php
    include('conn.php');

    $id = $_GET['id'];

    $select = "SELECT * from products where pid = '$id'";
    $run = mysqli_query($xonn,$select);
    $row = mysqli_fetch_assoc($run);
    
    ?>
<form action="" method="post">
    <h1>Update Product</h1>
            Product Name: <input type="text" name="pname" value="<?=$row['pname']?>"><br><br>
            Buy Price: <input type="number" name="bprice" value="<?=$row['bprice']?>"><br><br>
            Sell Price: <input type="number" name="sprice" value="<?=$row['sprice']?>"><br><br>
            <input type="submit" value="Submit" name="submit">
    </form>
    <?php
        if(isset($_POST['submit'])){
        $pname = $_POST['pname'];
        $bprice = $_POST['bprice'];
        $sprice = $_POST['sprice'];
            
        $update = "UPDATE products set pname = '$pname',bprice='$bprice',sprice='$sprice' where pid ='$id'";
        $sql = mysqli_query($xonn,$update);

        if($sql){
            echo "<script>
        alert('Product Updated');
        window.location.href='product.php';
    </script>";
        }
        }

    ?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>CRUD Operations in CI</title>
</head>
<body>

<div class="jumbotron">
    <h1 align="center">CRUD Operations in CodeIgniter</h1>
</div>

<div class="container">

    <h1 align="center">Edit Products</h1>

    <form class="form-group" action="<?php echo base_url(); ?>crud_controller/update/<?php echo $singleproduct->id; ?>" method="post">

        <label for="name">Name:</label>
        <input type="text" name="name" placeholder="Enter your name" class="form-control" value="<?php echo $singleproduct->name; ?>" required><br><br>

        <label for="price">Price:</label>
        <input type="text" name="price" placeholder="Enter your price" class="form-control" value="<?php echo $singleproduct->price; ?>"required><br><br>

        <label for="quantity">Quantity:</label>
        <input type="text" name="quantity" placeholder="Enter your quantity" class="form-control" value="<?php echo $singleproduct->quantity; ?>"required><br><br>

        <input type="submit" name="edit" value="update" class="btn-btn-primary">
    </form>
</div>





</body>
</html>

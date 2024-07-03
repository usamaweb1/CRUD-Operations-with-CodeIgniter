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
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      User Login System
    </a>
  </div>
</nav>
<div class="jumbotron">
    <h1 align="center">CRUD Operations in CodeIgniter</h1>
</div>

<div class="container">
    <div class="clearfix">
        <h3 style="float:left">All Products</h3>
        <a href="#" class="btn btn-primary" style="float:right" data-toggle="modal" data-target="#exampleModal">Add Products</a>
    </div>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Product name</th>
                <th>Product Price</th>
                <th>Product Quantity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <!-- data fetch placing -->
        <tbody>
            <?php foreach($products_details as $products): ?>
                <tr>
                    <td><?php echo $products->name;?></td>
                    <td><?php echo $products->price;?></td>
                    <td><?php echo $products->quantity;?></td>
                    <td>
                    <a href="<?php echo base_url();?>crud_controller/editproduct/<?php echo $products->id; ?>" class="btn btn-success" >Edit</a>
                        <a class="btn btn-danger" href="<?php echo base_url();?>crud_controller/deleteproduct/<?php echo $products->id; ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>    
        </tbody>
    </table>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="<?php echo base_url(); ?>crud_controller/addproducts" method="post">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Add form fields for adding new products here -->
            <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" >
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Product Price</label>
            <input type="number" class="form-control" name="price" >
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Product Quantity</label>
            <input type="number" class="form-control"  name="quantity" >
        </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="insert" value="Add Product" class="btn btn-primary">Add products</button>
            </div>
            </form>
        </div>
    </div>
</div>


<?php if($this->session->flashdata('error')):?>
    <div align="center" style= "color:#FFF" class="bg-danger">
    <?php echo $this->session->flashdata('error');?>
    </div>
 <?php endif; ?>

 <?php if($this->session->flashdata('inserted')):?>
    <div align="center" style= "color:#FFF" class="bg-success">
    <?php echo $this->session->flashdata('inserted');?>
    </div>
 <?php endif; ?>

 <?php if($this->session->flashdata('updated')):?>
    <div align="center" style= "color:#FFF" class="bg-success">
    <?php echo $this->session->flashdata('updated');?>
    </div>
 <?php endif; ?>

 <?php if($this->session->flashdata('deleted')):?>
    <div align="center" style= "color:#FFF" class="bg-danger">
    <?php echo $this->session->flashdata('deleted');?>
    </div>
 <?php endif; ?>
<!-- Scripts -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script> -->
</body>
</html>

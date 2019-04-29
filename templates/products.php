<?php include ('includes/header.php');?>

<?php foreach($products as $product) : ?> 
     <div class="col-md-4 game">
        <div class="game-price"><?php echo $product->price;?></div>
         <a href="<?php echo BASE_URI;?>details.php?id=<?php echo $product->id;?>"> <img src="<?php echo BASE_URI;?>assets/images/products/<?php echo $product->image;?>" /></a>
         <div class="game-title"> <?php echo $product->title; ?> </div>
          <div class="game-add">
        <form method="post" action="<?php echo BASE_URI;?>cart/add">
            QTY: <input class="qty" type="text" name="qty" value="1"/><br>
            <input type="hidden" name="item_number" value="<?php echo $product->id;?>"/>
            <input type="hidden" name="price" value="<?php echo $product->price;?>"/>
            <input type="hidden" name="title" value="<?php echo $product->title;?>"/>
           <button class="btn btn-primary" type="submit">Add to Cart</button>
        </form>    
           </div>
      </div>
<?php endforeach; ?>

<?php include ('includes/footer.php');?>



<?php


function get_eng_products(){

$conn = mysqli_connect("localhost", "root", "", "ecom");

if(isset($_POST['add_to_cart'])){
			
			$bid = $_GET['id'];
			$uid=$_POST['user_id'];
			$book_title=$_POST['book_title'];
			$book_author=$_POST['book_author'];
			$book_edition=$_POST['book_edition'];
			$language=$_POST['language'];
			$book_standard=$_POST['book_standard'];
			$book_price=$_POST['book_price'];
			$area=$_POST['area'];
			$city=$_POST['city'];
			$type=$_POST['type'];
			$book_image=$_POST['book_image'];

			$sql1 ="select * from my_cart where u_id='$uid' and book_id='$bid'";

			$res1 =mysqli_query($conn,$sql1);

			if($row = mysqli_fetch_array($res1)){
						 	     echo "<script>
						
						window.location='mycart.php';
					   </script>";

			}else{
					$sql = "insert into my_cart values(null,'$uid','$book_title','$book_author','$book_edition','$language','$book_standard','$book_price','$area','$city','$type','$book_image','$bid')";
				 $res = mysqli_query($conn,$sql);
				 if(!$res){
				 		     echo "<script>
						alert('NOT Added!!');
						
					   </script>".mysqli_error($conn);

				 }else{
				 	     echo "<script>
						alert('Book Added Successfully!!');
				
					   </script>".mysqli_error($conn);

					   
				 }

			} 


			 
		
		}

$u_id = $_SESSION['u_id'];

$sql = "SELECT * FROM book where u_id!='$u_id' and book_standard = 'Engineering';";

$res = mysqli_query($conn, $sql);


while ($row = fetch_array($res)) {

// $product = <<<DELIMETER
?>
<div class="col-sm-4">
			<div class="product-image-wrapper">
					<div class="single-products">
							<div class="productinfo text-center">
								<?php
									$folder='admin/images/';
										if(is_dir($folder))
										{
											if($open =opendir($folder))
											{
												while(($file=readdir($open)) != false)
												{
													if($file == $row['book_image'])
													{
															$img = "admin/images/".$row['book_image'];
															// echo $img;
															// echo $file;
																	?>
																<img src="<?php echo $img; ?>" style="height: 300px; width: 260px;">
																<?php
													}
												}		
											}
										}?>
						<h2> <?php echo $row['book_title']?> </h2>
										<p><?php echo $row['book_price']*0.60 .'.00 <i class="fas fa-rupee-sign"></i>'?> </p>
										<p> <?php echo '<i class="fas fa-map-marker-alt"></i>  ' . $row['area'] ?>, <?php echo $row['city'] ?></p>
										<a href="single.php" class="btn btn-default add-to-cart"><i class="fas fa-book"></i>View Book</a>
							</div>
							<div class="product-overlay">
									<div class="overlay-content">
										<h2> <?php echo $row['book_title']?> </h2>
										<p><?php echo $row['book_price']*0.60 .'.00 <i class="fas fa-rupee-sign"></i>'?> </p>
										<p> <?php echo '<i class="fas fa-map-marker-alt"></i>  ' . $row['area'] ?>, <?php echo $row['city'] ?></p>
										<a href="single.php?id=<?=$row['book_id']?>" class="btn btn-default add-to-cart"><i class="fas fa-book"></i>View Book</a>
									</div>
							</div>
					</div>
					<div class="choose">
							<ul class="nav nav-pills nav-justified">
								<li><form method="post" action="?id=<?=$row['book_id']?>">
										<input type="hidden" name="book_title" value="<?php echo $row['book_title'] ?>">

										<input type="hidden" name="user_id" value="<?php echo $u_id ?>">

										<input type="hidden" name="book_author" value="<?php echo $row['book_author'] ?>">
										
										<input type="hidden" name="book_edition" value="<?php echo $row['book_edition'] ?>">
										
										<input type="hidden" name="language" value="<?php echo $row['language'] ?>">
										
										<input type="hidden" name="book_standard" value="<?php echo $row['book_standard'] ?>">
										
										<input type="hidden" name="book_price" value="<?php echo $row['book_price'] ?>">
										
										<input type="hidden" name="area" value="<?php echo $row['area'] ?>">	
										<input type="hidden" name="city" value="<?php echo $row['city'] ?>">

										<input type="hidden" name="type" value="<?php echo $row['type'] ?>">
										
										<input type="hidden" name="book_image" value="<?php echo $row['book_image'] ?>">

										<input class="btn btn-primary btn-sm" type="submit" name="add_to_cart" value="Add To Cart" style="margin-left: 15px;margin-top: 20px"> 
										</form></li>
								<li><?php echo '<a href="single.php?id='.$row['book_id'].'" ><i class="fas fa-plus-square"></i>View Book details</a>';
								?></li>
							</ul>
					</div>
			</div>
</div>

<?php
}
}

function get_stan_products(){

$conn = mysqli_connect("localhost", "root", "", "ecom");

// $u_id = $_SESSION['u_id'];

if(isset($_POST['add_to_cart'])){
			
			$bid = $_GET['id'];
			$uid=$_POST['user_id'];
			$book_title=$_POST['book_title'];
			$book_author=$_POST['book_author'];
			$book_edition=$_POST['book_edition'];
			$language=$_POST['language'];
			$book_standard=$_POST['book_standard'];
			$book_price=$_POST['book_price'];
			$area=$_POST['area'];
			$city=$_POST['city'];
			$type=$_POST['type'];
			$book_image=$_POST['book_image'];

			$sql1 ="select * from my_cart where u_id='$uid' and book_id='$bid'";

			$res1 =mysqli_query($conn,$sql1);

			if($row = mysqli_fetch_array($res1)){
						 	     echo "<script>
						
						window.location='mycart.php';
					   </script>";

			}else{
					$sql = "insert into my_cart values(null,'$uid','$book_title','$book_author','$book_edition','$language','$book_standard','$book_price','$area','$city','$type','$book_image','$bid')";
				 $res = mysqli_query($conn,$sql);
				 if(!$res){
				 		     echo "<script>
						alert('NOT Added!!');
						
					   </script>".mysqli_error($conn);

				 }else{
				 	     echo "<script>
						alert('Book Added Successfully!!');
				
					   </script>".mysqli_error($conn);

					   
				 }

			} 


			 
		
		}

$u_id = $_SESSION['u_id'];

$sql = "SELECT * FROM book where u_id!='$u_id' and book_standard = '1_to_12';";

$res = mysqli_query($conn, $sql);


while ($row = fetch_array($res)) {

// $product = <<<DELIMETER
?>
<div class="col-sm-4">
			<div class="product-image-wrapper">
					<div class="single-products">
							<div class="productinfo text-center">
								<?php
									$folder='admin/images/';
										if(is_dir($folder))
										{
											if($open =opendir($folder))
											{
												while(($file=readdir($open)) != false)
												{
													if($file == $row['book_image'])
													{
															$img = "admin/images/".$row['book_image'];
															// echo $img;
															// echo $file;
																	?>
																<img src="<?php echo $img; ?>" style="height: 300px; width: 260px;">
																<?php
													}
												}		
											}
										}?>
						<h2> <?php echo $row['book_title']?> </h2>
										<p><?php echo $row['book_price']*0.60 .'.00 <i class="fas fa-rupee-sign"></i>'?> </p>
										<p> <?php echo '<i class="fas fa-map-marker-alt"></i>  ' . $row['area'] ?>, <?php echo $row['city'] ?></p>
										<a href="single.php" class="btn btn-default add-to-cart"><i class="fas fa-book"></i>View Book</a>
							</div>
							<div class="product-overlay">
									<div class="overlay-content">
										<h2> <?php echo $row['book_title']?> </h2>
										<p><?php echo $row['book_price']*0.60 .'.00 <i class="fas fa-rupee-sign"></i>'?> </p>
										<p> <?php echo '<i class="fas fa-map-marker-alt"></i>  ' . $row['area'] ?>, <?php echo $row['city'] ?></p>
										<a href="single.php?id=<?=$row['book_id']?>" class="btn btn-default add-to-cart"><i class="fas fa-book"></i>View Book</a>
									</div>
							</div>
					</div>
					<div class="choose">
							<ul class="nav nav-pills nav-justified">
								<li><form method="post" action="?id=<?=$row['book_id']?>">
										<input type="hidden" name="book_title" value="<?php echo $row['book_title'] ?>">

										<input type="hidden" name="user_id" value="<?php echo $u_id ?>">

										<input type="hidden" name="book_author" value="<?php echo $row['book_author'] ?>">
										
										<input type="hidden" name="book_edition" value="<?php echo $row['book_edition'] ?>">
										
										<input type="hidden" name="language" value="<?php echo $row['language'] ?>">
										
										<input type="hidden" name="book_standard" value="<?php echo $row['book_standard'] ?>">
										
										<input type="hidden" name="book_price" value="<?php echo $row['book_price'] ?>">
										
										<input type="hidden" name="area" value="<?php echo $row['area'] ?>">	
										<input type="hidden" name="city" value="<?php echo $row['city'] ?>">

										<input type="hidden" name="type" value="<?php echo $row['type'] ?>">
										
										<input type="hidden" name="book_image" value="<?php echo $row['book_image'] ?>">

										<input class="btn btn-primary btn-sm" type="submit" name="add_to_cart" value="Add To Cart" style="margin-left: 15px;margin-top: 20px"> 
										</form></li>
								<li><?php echo '<a href="single.php?id='.$row['book_id'].'" ><i class="fas fa-plus-square"></i>View Book details</a>';
								?></li>
							</ul>
					</div>
			</div>
</div>

<?php
}
}


function get_med_products(){

$conn = mysqli_connect("localhost", "root", "", "ecom");

// $u_id = $_SESSION['u_id'];
if(isset($_POST['add_to_cart'])){
			
			$bid = $_GET['id'];
			$uid=$_POST['user_id'];
			$book_title=$_POST['book_title'];
			$book_author=$_POST['book_author'];
			$book_edition=$_POST['book_edition'];
			$language=$_POST['language'];
			$book_standard=$_POST['book_standard'];
			$book_price=$_POST['book_price'];
			$area=$_POST['area'];
			$city=$_POST['city'];
			$type=$_POST['type'];
			$book_image=$_POST['book_image'];

			$sql1 ="select * from my_cart where u_id='$uid' and book_id='$bid'";

			$res1 =mysqli_query($conn,$sql1);

			if($row = mysqli_fetch_array($res1)){
						 	     echo "<script>
						
						window.location='mycart.php';
					   </script>";

			}else{
					$sql = "insert into my_cart values(null,'$uid','$book_title','$book_author','$book_edition','$language','$book_standard','$book_price','$area','$city','$type','$book_image','$bid')";
				 $res = mysqli_query($conn,$sql);
				 if(!$res){
				 		     echo "<script>
						alert('NOT Added!!');
						
					   </script>".mysqli_error($conn);

				 }else{
				 	     echo "<script>
						alert('Book Added Successfully!!');
				
					   </script>".mysqli_error($conn);

					   
				 }

			} 


			 
		
		}

$u_id = $_SESSION['u_id'];

$sql = "SELECT * FROM book where u_id!='$u_id' and book_standard = 'Medical';";

$res = mysqli_query($conn, $sql);


while ($row = fetch_array($res)) {

// $product = <<<DELIMETER
?>
<div class="col-sm-4">
			<div class="product-image-wrapper">
					<div class="single-products">
							<div class="productinfo text-center">
								<?php
									$folder='admin/images/';
										if(is_dir($folder))
										{
											if($open =opendir($folder))
											{
												while(($file=readdir($open)) != false)
												{
													if($file == $row['book_image'])
													{
															$img = "admin/images/".$row['book_image'];
															// echo $img;
															// echo $file;
																	?>
																<img src="<?php echo $img; ?>" style="height: 300px; width: 260px;">
																<?php
													}
												}		
											}
										}?>
						<h2> <?php echo $row['book_title']?> </h2>
										<p><?php echo $row['book_price']*0.60 .'.00 <i class="fas fa-rupee-sign"></i>'?> </p>
										<p> <?php echo '<i class="fas fa-map-marker-alt"></i>  ' . $row['area'] ?>, <?php echo $row['city'] ?></p>
										<a href="single.php" class="btn btn-default add-to-cart"><i class="fas fa-book"></i>View Book</a>
							</div>
							<div class="product-overlay">
									<div class="overlay-content">
										<h2> <?php echo $row['book_title']?> </h2>
										<p><?php echo $row['book_price']*0.60 .'.00 <i class="fas fa-rupee-sign"></i>'?> </p>
										<p> <?php echo '<i class="fas fa-map-marker-alt"></i>  ' . $row['area'] ?>, <?php echo $row['city'] ?></p>
										<a href="single.php?id=<?=$row['book_id']?>" class="btn btn-default add-to-cart"><i class="fas fa-book"></i>View Book</a>
									</div>
							</div>
					</div>
					<div class="choose">
							<ul class="nav nav-pills nav-justified">
								<li><form method="post" action="?id=<?=$row['book_id']?>">
										<input type="hidden" name="book_title" value="<?php echo $row['book_title'] ?>">

										<input type="hidden" name="user_id" value="<?php echo $u_id ?>">

										<input type="hidden" name="book_author" value="<?php echo $row['book_author'] ?>">
										
										<input type="hidden" name="book_edition" value="<?php echo $row['book_edition'] ?>">
										
										<input type="hidden" name="language" value="<?php echo $row['language'] ?>">
										
										<input type="hidden" name="book_standard" value="<?php echo $row['book_standard'] ?>">
										
										<input type="hidden" name="book_price" value="<?php echo $row['book_price'] ?>">
										
										<input type="hidden" name="area" value="<?php echo $row['area'] ?>">	
										<input type="hidden" name="city" value="<?php echo $row['city'] ?>">

										<input type="hidden" name="type" value="<?php echo $row['type'] ?>">
										
										<input type="hidden" name="book_image" value="<?php echo $row['book_image'] ?>">

										<input class="btn btn-primary btn-sm" type="submit" name="add_to_cart" value="Add To Cart" style="margin-left: 15px;margin-top: 20px"> 
										</form></li>
								<li><?php echo '<a href="single.php?id='.$row['book_id'].'" ><i class="fas fa-plus-square"></i>View Book details</a>';
								?></li>
							</ul>
					</div>
			</div>
</div>

<?php
}
}


function get_com_products(){

$conn = mysqli_connect("localhost", "root", "", "ecom");

// $u_id = $_SESSION['u_id'];

if(isset($_POST['add_to_cart'])){
			
			$bid = $_GET['id'];
			$uid=$_POST['user_id'];
			$book_title=$_POST['book_title'];
			$book_author=$_POST['book_author'];
			$book_edition=$_POST['book_edition'];
			$language=$_POST['language'];
			$book_standard=$_POST['book_standard'];
			$book_price=$_POST['book_price'];
			$area=$_POST['area'];
			$city=$_POST['city'];
			$type=$_POST['type'];
			$book_image=$_POST['book_image'];

			$sql1 ="select * from my_cart where u_id='$uid' and book_id='$bid'";

			$res1 =mysqli_query($conn,$sql1);

			if($row = mysqli_fetch_array($res1)){
						 	     echo "<script>
						
						window.location='mycart.php';
					   </script>";

			}else{
					$sql = "insert into my_cart values(null,'$uid','$book_title','$book_author','$book_edition','$language','$book_standard','$book_price','$area','$city','$type','$book_image','$bid')";
				 $res = mysqli_query($conn,$sql);
				 if(!$res){
				 		     echo "<script>
						alert('NOT Added!!');
						
					   </script>".mysqli_error($conn);

				 }else{
				 	     echo "<script>
						alert('Book Added Successfully!!');
				
					   </script>".mysqli_error($conn);

					   
				 }

			} 


			 
		
		}

$u_id = $_SESSION['u_id'];

$sql = "SELECT * FROM book where u_id!='$u_id' and book_standard = 'Commerce';";

$res = mysqli_query($conn, $sql);


while ($row = fetch_array($res)) {

// $product = <<<DELIMETER
?>
<div class="col-sm-4">
			<div class="product-image-wrapper">
					<div class="single-products">
							<div class="productinfo text-center">
								<?php
									$folder='admin/images/';
										if(is_dir($folder))
										{
											if($open =opendir($folder))
											{
												while(($file=readdir($open)) != false)
												{
													if($file == $row['book_image'])
													{
															$img = "admin/images/".$row['book_image'];
															// echo $img;
															// echo $file;
																	?>
																<img src="<?php echo $img; ?>" style="height: 300px; width: 260px;">
																<?php
													}
												}		
											}
										}?>
						<h2> <?php echo $row['book_title']?> </h2>
										<p><?php echo $row['book_price']*0.60 .'.00 <i class="fas fa-rupee-sign"></i>'?> </p>
										<p> <?php echo '<i class="fas fa-map-marker-alt"></i>  ' . $row['area'] ?>, <?php echo $row['city'] ?></p>
										<a href="single.php" class="btn btn-default add-to-cart"><i class="fas fa-book"></i>View Book</a>
							</div>
							<div class="product-overlay">
									<div class="overlay-content">
										<h2> <?php echo $row['book_title']?> </h2>
										<p><?php echo $row['book_price']*0.60 .'.00 <i class="fas fa-rupee-sign"></i>'?> </p>
										<p> <?php echo '<i class="fas fa-map-marker-alt"></i>  ' . $row['area'] ?>, <?php echo $row['city'] ?></p>
										<a href="single.php?id=<?=$row['book_id']?>" class="btn btn-default add-to-cart"><i class="fas fa-book"></i>View Book</a>
									</div>
							</div>
					</div>
					<div class="choose">
							<ul class="nav nav-pills nav-justified">
								<li><form method="post" action="?id=<?=$row['book_id']?>">
										<input type="hidden" name="book_title" value="<?php echo $row['book_title'] ?>">

										<input type="hidden" name="user_id" value="<?php echo $u_id ?>">

										<input type="hidden" name="book_author" value="<?php echo $row['book_author'] ?>">
										
										<input type="hidden" name="book_edition" value="<?php echo $row['book_edition'] ?>">
										
										<input type="hidden" name="language" value="<?php echo $row['language'] ?>">
										
										<input type="hidden" name="book_standard" value="<?php echo $row['book_standard'] ?>">
										
										<input type="hidden" name="book_price" value="<?php echo $row['book_price'] ?>">
										
										<input type="hidden" name="area" value="<?php echo $row['area'] ?>">	
										<input type="hidden" name="city" value="<?php echo $row['city'] ?>">

										<input type="hidden" name="type" value="<?php echo $row['type'] ?>">
										
										<input type="hidden" name="book_image" value="<?php echo $row['book_image'] ?>">

										<input class="btn btn-primary btn-sm" type="submit" name="add_to_cart" value="Add To Cart" style="margin-left: 15px;margin-top: 20px"> 
										</form></li>
								<li><?php echo '<a href="single.php?id='.$row['book_id'].'" ><i class="fas fa-plus-square"></i>View Book details</a>';
								?></li>
							</ul>
					</div>
			</div>
</div>

<?php
}
}


function get_art_products(){

$conn = mysqli_connect("localhost", "root", "", "ecom");

// $u_id = $_SESSION['u_id'];

if(isset($_POST['add_to_cart'])){
			
			$bid = $_GET['id'];
			$uid=$_POST['user_id'];
			$book_title=$_POST['book_title'];
			$book_author=$_POST['book_author'];
			$book_edition=$_POST['book_edition'];
			$language=$_POST['language'];
			$book_standard=$_POST['book_standard'];
			$book_price=$_POST['book_price'];
			$area=$_POST['area'];
			$city=$_POST['city'];
			$type=$_POST['type'];
			$book_image=$_POST['book_image'];

			$sql1 ="select * from my_cart where u_id='$uid' and book_id='$bid'";

			$res1 =mysqli_query($conn,$sql1);

			if($row = mysqli_fetch_array($res1)){
						 	     echo "<script>
						
						window.location='mycart.php';
					   </script>";

			}else{
					$sql = "insert into my_cart values(null,'$uid','$book_title','$book_author','$book_edition','$language','$book_standard','$book_price','$area','$city','$type','$book_image','$bid')";
				 $res = mysqli_query($conn,$sql);
				 if(!$res){
				 		     echo "<script>
						alert('NOT Added!!');
						
					   </script>".mysqli_error($conn);

				 }else{
				 	     echo "<script>
						alert('Book Added Successfully!!');
				
					   </script>".mysqli_error($conn);

					   
				 }

			} 


			 
		
		}

$u_id = $_SESSION['u_id'];

$sql = "SELECT * FROM book where u_id!='$u_id' and book_standard = 'Arts';";

$res = mysqli_query($conn, $sql);


while ($row = fetch_array($res)) {

// $product = <<<DELIMETER
?>
<div class="col-sm-4">
			<div class="product-image-wrapper">
					<div class="single-products">
							<div class="productinfo text-center">
								<?php
									$folder='admin/images/';
										if(is_dir($folder))
										{
											if($open =opendir($folder))
											{
												while(($file=readdir($open)) != false)
												{
													if($file == $row['book_image'])
													{
															$img = "admin/images/".$row['book_image'];
															// echo $img;
															// echo $file;
																	?>
																<img src="<?php echo $img; ?>" style="height: 300px; width: 260px;">
																<?php
													}
												}		
											}
										}?>
						<h2> <?php echo $row['book_title']?> </h2>
										<p><?php echo $row['book_price']*0.60 .'.00 <i class="fas fa-rupee-sign"></i>'?> </p>
										<p> <?php echo '<i class="fas fa-map-marker-alt"></i>  ' . $row['area'] ?>, <?php echo $row['city'] ?></p>
										<a href="single.php" class="btn btn-default add-to-cart"><i class="fas fa-book"></i>View Book</a>
							</div>
							<div class="product-overlay">
									<div class="overlay-content">
										<h2> <?php echo $row['book_title']?> </h2>
										<p><?php echo $row['book_price']*0.60 .'.00 <i class="fas fa-rupee-sign"></i>'?> </p>
										<p> <?php echo '<i class="fas fa-map-marker-alt"></i>  ' . $row['area'] ?>, <?php echo $row['city'] ?></p>
										<a href="single.php?id=<?=$row['book_id']?>" class="btn btn-default add-to-cart"><i class="fas fa-book"></i>View Book</a>
									</div>
							</div>
					</div>
					<div class="choose">
							<ul class="nav nav-pills nav-justified">
								<li><form method="post" action="?id=<?=$row['book_id']?>">
										<input type="hidden" name="book_title" value="<?php echo $row['book_title'] ?>">

										<input type="hidden" name="user_id" value="<?php echo $u_id ?>">

										<input type="hidden" name="book_author" value="<?php echo $row['book_author'] ?>">
										
										<input type="hidden" name="book_edition" value="<?php echo $row['book_edition'] ?>">
										
										<input type="hidden" name="language" value="<?php echo $row['language'] ?>">
										
										<input type="hidden" name="book_standard" value="<?php echo $row['book_standard'] ?>">
										
										<input type="hidden" name="book_price" value="<?php echo $row['book_price'] ?>">
										
										<input type="hidden" name="area" value="<?php echo $row['area'] ?>">	
										<input type="hidden" name="city" value="<?php echo $row['city'] ?>">

										<input type="hidden" name="type" value="<?php echo $row['type'] ?>">
										
										<input type="hidden" name="book_image" value="<?php echo $row['book_image'] ?>">

										<input class="btn btn-primary btn-sm" type="submit" name="add_to_cart" value="Add To Cart" style="margin-left: 15px;margin-top: 20px"> 
										</form></li>
								<li><?php echo '<a href="single.php?id='.$row['book_id'].'" ><i class="fas fa-plus-square"></i>View Book details</a>';
								?></li>
							</ul>
					</div>
			</div>
</div>

<?php
}
}


function get_other_products(){

$conn = mysqli_connect("localhost", "root", "", "ecom");

// $u_id = $_SESSION['u_id'];

if(isset($_POST['add_to_cart'])){
			
			$bid = $_GET['id'];
			$uid=$_POST['user_id'];
			$book_title=$_POST['book_title'];
			$book_author=$_POST['book_author'];
			$book_edition=$_POST['book_edition'];
			$language=$_POST['language'];
			$book_standard=$_POST['book_standard'];
			$book_price=$_POST['book_price'];
			$area=$_POST['area'];
			$city=$_POST['city'];
			$type=$_POST['type'];
			$book_image=$_POST['book_image'];

			$sql1 ="select * from my_cart where u_id='$uid' and book_id='$bid'";

			$res1 =mysqli_query($conn,$sql1);

			if($row = mysqli_fetch_array($res1)){
						 	     echo "<script>
						
						window.location='mycart.php';
					   </script>";

			}else{
					$sql = "insert into my_cart values(null,'$uid','$book_title','$book_author','$book_edition','$language','$book_standard','$book_price','$area','$city','$type','$book_image','$bid')";
				 $res = mysqli_query($conn,$sql);
				 if(!$res){
				 		     echo "<script>
						alert('NOT Added!!');
						
					   </script>".mysqli_error($conn);

				 }else{
				 	     echo "<script>
						alert('Book Added Successfully!!');
				
					   </script>".mysqli_error($conn);

					   
				 }

			} 


			 
		
		}

$u_id = $_SESSION['u_id'];

$sql = "SELECT * FROM book where u_id!='$u_id' and book_standard = 'Other';";

$res = mysqli_query($conn, $sql);


while ($row = fetch_array($res)) {

// $product = <<<DELIMETER
?>
<div class="col-sm-4">
			<div class="product-image-wrapper">
					<div class="single-products">
							<div class="productinfo text-center">
								<?php
									$folder='admin/images/';
										if(is_dir($folder))
										{
											if($open =opendir($folder))
											{
												while(($file=readdir($open)) != false)
												{
													if($file == $row['book_image'])
													{
															$img = "admin/images/".$row['book_image'];
															// echo $img;
															// echo $file;
																	?>
																<img src="<?php echo $img; ?>" style="height: 300px; width: 260px;">
																<?php
													}
												}		
											}
										}?>
						<h2> <?php echo $row['book_title']?> </h2>
										<p><?php echo $row['book_price']*0.60 .'.00 <i class="fas fa-rupee-sign"></i>'?> </p>
										<p> <?php echo '<i class="fas fa-map-marker-alt"></i>  ' . $row['area'] ?>, <?php echo $row['city'] ?></p>
										<a href="single.php" class="btn btn-default add-to-cart"><i class="fas fa-book"></i>View Book</a>
							</div>
							<div class="product-overlay">
									<div class="overlay-content">
										<h2> <?php echo $row['book_title']?> </h2>
										<p><?php echo $row['book_price']*0.60 .'.00 <i class="fas fa-rupee-sign"></i>'?> </p>
										<p> <?php echo '<i class="fas fa-map-marker-alt"></i>  ' . $row['area'] ?>, <?php echo $row['city'] ?></p>
										<a href="single.php?id=<?=$row['book_id']?>" class="btn btn-default add-to-cart"><i class="fas fa-book"></i>View Book</a>
									</div>
							</div>
					</div>
					<div class="choose">
							<ul class="nav nav-pills nav-justified">
								<li><form method="post" action="?id=<?=$row['book_id']?>">
										<input type="hidden" name="book_title" value="<?php echo $row['book_title'] ?>">

										<input type="hidden" name="user_id" value="<?php echo $u_id ?>">

										<input type="hidden" name="book_author" value="<?php echo $row['book_author'] ?>">
										
										<input type="hidden" name="book_edition" value="<?php echo $row['book_edition'] ?>">
										
										<input type="hidden" name="language" value="<?php echo $row['language'] ?>">
										
										<input type="hidden" name="book_standard" value="<?php echo $row['book_standard'] ?>">
										
										<input type="hidden" name="book_price" value="<?php echo $row['book_price'] ?>">
										
										<input type="hidden" name="area" value="<?php echo $row['area'] ?>">	
										<input type="hidden" name="city" value="<?php echo $row['city'] ?>">

										<input type="hidden" name="type" value="<?php echo $row['type'] ?>">
										
										<input type="hidden" name="book_image" value="<?php echo $row['book_image'] ?>">

										<input class="btn btn-primary btn-sm" type="submit" name="add_to_cart" value="Add To Cart" style="margin-left: 15px;margin-top: 20px"> 
										</form></li>
								<li><?php echo '<a href="single.php?id='.$row['book_id'].'" ><i class="fas fa-plus-square"></i>View Book details</a>';
								?></li>
							</ul>
					</div>
			</div>
</div>

<?php
}
}




?>





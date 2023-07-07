<?php 
  session_start();
  include_once "php/config.php";
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
              
            $u_id = $_SESSION['u_id'];
            $sql = mysqli_query($conn, "SELECT * FROM customer WHERE u_id = '$u_id'");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
         <!--  <img src="php/images/" alt=""> -->
          <div class="details">
            <span><?php echo $row['u_name']; ?></span>
            <p><?php  echo $row['status']; ?></p>
          </div>
        </div>
         <a href=".././index.php" class="logout">Home</a>
      </header>
      <div class="search">
       <!--  <span class="text">Select an user to start chat</span> -->
        <input type="text" placeholder="Enter name to search...">
        <button><i class=""></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>

</body>
</html>

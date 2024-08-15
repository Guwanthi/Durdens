<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css"
  rel="stylesheet"
/>
	

</head>
<body>

  <?php
    session_start();
    include './model/db.php';
   
    $uid=0;
    if(isset($_SESSION['uid'])){
      $uid = $_SESSION['uid'];
    }else{
      header("location:./index.php");
    }

    $loged_user_name="";
    $sql="SELECT * from user WHERE user_id= '$uid' ";
$result= mysqli_query($con,$sql);
while ($row = mysqli_fetch_array($result)){
    $loged_user_name = $row['name'];
   
}
    
  ?>
	
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="#">
        <img
          src="img/logo3.webp"
          height="20"
          alt="Durdens Logo"
          loading="lazy"
        />
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-white" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="contactus.php">Contact Us</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

  
      <!-- Avatar -->
      <div class="dropdown">
        <a
          class="dropdown-toggle d-flex align-items-center hidden-arrow"
          href="profile.php"
          id="navbarDropdownMenuAvatar"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
          <img
            src="img/profile.png"
            class="rounded-circle"
            height="25"
            alt="Profile"
            loading="lazy"
          />
        </a>
         
      </div>
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-white" href="logout.php">Log Out</a>
        </li>
      </ul>
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->



</body>
</html>
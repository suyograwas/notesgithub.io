<?php include 'dbconnect.php'; ?>


<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css">
    <!-- CSS only -->
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<title>notes</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Notes</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="addnotes.php">Addnotes</a>
              </li>
              
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      <Div class="header">
        <h1 >Notes</h1>
    </Div>

    <div class="main ">
      <a href="addnotes.php">
        <div class="box bg-light">
          <h3> <i class="fa-solid fa-circle-plus"></i> Add Notes</h3>
        </div>
      </a>
    </div>

    <?php
    $sql = "SELECT * FROM `notes`  ORDER BY `noteid` DESC";
    $res = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($res) > 0) {
      
      while ($data = mysqli_fetch_assoc($res)) {
        ?>
    
    <div class="container1 bg-light">
    <?php $pid=$data['noteid']; ?>
      <a href="edit.php<?php echo'?pid='.$pid ?>">
      <p>Title :</p>
        <div class="title bg-white">
          <h4><?php echo $data['title'];?></h4>
        </div>
        <p>Note :</p>
        <div class="note bg-white ">
        <h5><?php echo $data['note'];?></h5>
           </div>
          </a>
        </div>

        <?php } ?>
      <?php } ?>


      <div class="footer  bg-light">
    <div class="container">
      <div class="row">
        <div class="footer-col-1">
          <h3>Download Our App</h3>
          <p>Download App for Android and ios mobile phone </p>
          <div class="app-logo">
            <img src="image/play-store.png">
            <img src="image/app-store.png">
          </div>
        </div>
        <div class="footer-col-3">
          <h3>Follow us</h3>
          <ul>
            <li>Facebook</li>
            <li>Twitter</li>
            <li>Instagram</li>
            <li>YouTube</li>
          </ul>
        </div>
      </div>
      <hr>
      <p class="copyright">Copyright @ 2022 Sneha | All Rights Reserved </p>
    </div>
  </div>
  
    
</body>
</html>
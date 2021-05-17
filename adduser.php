<?php include 'parts/header.php'; ?>


<?php 
if ($_SERVER["REQUEST_METHOD"]=="POST") {

  $fullname = $_POST['fname'];
  $addr     = $_POST['address'];
  $contact  = $_POST['contact'];
  $pwd  = $_POST['password'];
  $faculty  = $_POST['Faculty'];
  $gender  = $_POST['Gender'];

  $stmt = $con->prepare("INSERT INTO users values(?,?,?,?,?,?,?)"); 
  $stmt->execute(['',$fullname,$addr,$contact,$pwd,$faculty,$gender]);
  header("location:adduser.php?success=true");   
}
?>

<main class="container mt-5">
  <?php if(isset($_GET['success'])) { ?>
    <div class="alert alert-success" role="alert">
     Record has been inserted
    </div>
  <?php } ?>
  
  <h3 class="mt-5">Add a New user</h3>

  <form class="form-control mt-5" method="POST">
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Name</span>
      <input type="text" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1" name="fname">
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Address</span>
      <input type="text" class="form-control" placeholder="Address" aria-label="Address" aria-describedby="basic-addon1" name="address">
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Contact</span>
      <input type="text" class="form-control" placeholder="Contact" aria-label="Contact" aria-describedby="basic-addon1" name="contact'">

    </div>
<div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Password</span>
      <input type="text" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" name="password">
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Faculty</span>
      <input type="text" class="form-control" placeholder="Faculty" aria-label="Faculty" aria-describedby="basic-addon1" name="Faculty">
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Gender</span>
      <input type="text" class="form-control" placeholder="Gender" aria-label="Gender" aria-describedby="basic-addon1" name="Gender">
    </div>

      <div class="input-group mb-3">
      <button class="btn btn-outline-secondary">Save</button>
    </div>
</form>
  </main>
    
<?php include 'parts/footer.php'; ?>
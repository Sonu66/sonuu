<?php include 'parts/header.php'; ?>
<main class="container mt-5">
 

 <?php if(isset($_GET['success'])) { ?>
    <div class="alert alert-success" role="alert">
     Record has been updated successfully
    </div>
  <?php } ?>

  <?php if(isset($_GET['delete'])) { ?>
    <div class="alert alert-danger" role="alert">
     Record has been deleted successfully
    </div>
  <?php } ?>
  <?php 

$sql  = "SELECT * FROM users";
$stmt  =  $con->prepare($sql);
$stmt->execute();


if ($stmt->rowCount()>0) {

 
    ?>
    <table class="table" border="3px" bgcolor="white">;
      <tbody>
        <tr>
          <th>UID</th>
          <th>Name</th>
          <th>Address</th>
          <th>Phone</th>
          <th>Faculty</th>
          <th>Gender</th>
          <th></th>
        </tr>
        <?php  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
          <tr>
            <td><?php echo $row['uid']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['Faculty'];?></td>
            <td><?php echo $row['Gender'];?></td>
            <td> 


              <a href="useredit.php?id=<?php echo $row['uid']; ?>" class="btn btn-info">Edit</a>


               <a href="delete.php?id=<?php echo $row['uid']; ?>" class="btn btn-warning">Delete</a> </td>


          </tr>
          <?php } ?>

      </tbody>      
    </table>
    <?php
   
  
  
}
 ?>


</main>    
<?php include 'parts/footer.php'; ?>
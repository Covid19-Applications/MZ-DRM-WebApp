<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 

?>



<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Hospital Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Hospital Name </label>
                <input type="text" name="name" class="form-control" placeholder="Enter Name">
            </div>
             <div class="form-group">
                <label>Address</label>
                <input type="text" name="add" class="form-control checking_email" placeholder="Enter Address">
                
            </div>
            <div class="form-group">
                <label>Contact No</label>
                <input type="text" name="contact" class="form-control checking_email" placeholder="Enter Contact">
                
            </div>
               <!--          <div class="form-group">
                <label>State</label>
                <input type="text" name="state" class="form-control " placeholder="State">
                
            </div> -->
           
           

            
            <input type="hidden" name="state" value="mizoram" >


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="hospitalbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
       Add Hospital Profile 
</button>

  <div class="card-body">

<?php
if(isset($_SESSION['success']) && $_SESSION['success'] !='')
{

  # code...
  echo '<h2 class="bg-primary text-white">  '.$_SESSION['success'].' </h2>';
  unset( $_SESSION['success']);

}
if(isset($_SESSION['status']) && $_SESSION['status'] != '')
{

  # code...
  echo '<h2 class="bg-danger">  '.$_SESSION['status'].' </h2>';
  unset( $_SESSION['status']);

}

?>

  <div class="table-responsive">
    <?php
        $query = "SELECT * FROM healthcare WHERE state='mizoram'";
        $query_run = mysqli_query($connection, $query);
    ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
              <th> ID </th>
              <th>Hospital Name </th>
              <th>Address</th>
              <th>Contact</th>
              <th>State</th>
              <th>Edit</th>
              <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        <?php
        if(mysqli_num_rows($query_run) > 0)        
        {
            while($row = mysqli_fetch_assoc($query_run))
            {
               ?>
          <tr>
            <td><?php  echo $row['id']; ?></td>
            <td><?php  echo $row['name']; ?></td>
            <td><?php  echo $row['address']; ?></td>
            <td><?php  echo $row['phone']; ?></td>
            <td><?php  echo $row['state']; ?></td>
            <td>
                <form action="healthcare_edit.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">


                    <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
                <form action="#" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                </form>
            </td>
          </tr>
          <?php
            } 
        }
        else {
            echo "No Record Found";
        }
        ?>
        </tbody>
      </table>
    </div>
    
  </div>
</div>

</div>
<!-- /.container-fluid -->


    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>


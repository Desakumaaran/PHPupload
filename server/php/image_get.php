
<?php
include "config.php";

$res = $conn->query("select * from projects_upload");
while ($row = $res->fetch_assoc()) {
?>

<div class="col-md-6 col-sm-6" id="bottom-logo">
                  <div class="panel">
                      <div class="panel-body">
                          <div class="media">
                              <a class="pull-left" href="#">
                                  <img class="thumb media-object" src="<?php echo "uploads/"; echo $row['image'];?>" alt="">
                              </a>
                              <div class="media-body">
                                  <h4><?php echo $row['image']; ?></h4>

                                  

          
                                                                    
        <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
	    <a class="btn btn-danger btn-sm"  onclick="deletedata('<?php echo $row['id']; ?>')" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
	   
                            
                              
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

    
    


<!-- Modal -->
<div class="modal fade" id="myModal<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo $row['id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel<?php echo $row['id']; ?>">Edit User details</h4>
      </div>
      <div class="modal-body">

<form>


  <div class="form-group">
    <label for="image">Uploaded Image</label>
    <input type="text" class="form-control" id="image<?php echo $row['id']; ?>" value="<?php echo $row['image']; ?>" disabled>
  </div>
</form>
<div class="bgColor">
<div class="targetLayerClass" id="targetLayer<?php echo $row['id']; ?>"><img src="<?php echo "uploads/"; echo $row['image'];?>" alt="" border=3 height=40 width=40></div>
<div id="uploadFormLayer">
<label>Upload profile pic:</label><br/>

     <input id="userImage<?php echo $row['id']; ?>" type="file" onchange="imageUpload2('<?php echo $row['id']; ?>')">

</div>
</div>

      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" onclick="updatedata('<?php echo $row['id']; ?>')" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?php
}
?>

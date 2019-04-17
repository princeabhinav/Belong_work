<?php include_once dirname(__FILE__).'/../header.php';?>

<div class="row">

  <div class="col-md-4 col-md-offset-2">
        <h3 style="text-align: center;">Add New Books</h3>
    <hr>
    <form action="<?php echo base_url('admin_controller/insert_item');?>" method= "POST" enctype="multipart/form-data">
  <fieldset>
    
    <div class="form-group">
      <label for="exampleInputEmail1">Book Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Item" name="item_name">
      <?php echo form_error('item_name');?>
     
    </div>
    <?= form_error('item_name');?>
    <div class="form-group">
      <label for="exampleInputEmail1">Price</label>
      <input type="text" class="form-control" id="number" aria-describedby="emailHelp" placeholder="Price(enter numbers)" name="price">
      <?php echo form_error('item_name');?>
   </div>

    <div class="form-group">
      <label for="exampleSelect1">Select Topic</label>
      <select class="form-control" name="brand_id">
        <option value=''>Select Topic</option>
        <?php foreach ($result['brand'] as  $value) {
          $id = $value->id;
          $name = $value->brand_name; ?>
          <option value="<?php echo $id?>"><?php echo $name?> </option>
      <?php  }?>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Link</label>
      <input type="text" class="form-control" id="number" aria-describedby="emailHelp" placeholder="Enter the Link " name="Link">
       <?php echo form_error('item_name');?>
   </div>


   
    <div class="form-group">
      <label for="exampleTextarea">Example textarea</label>
      <textarea class="form-control" id="exampleTextarea" rows="3" name="des"></textarea>
    </div>
    
    <div class="form-group">
      <label for="exampleInputFile">File input</label>
      <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="emailHelp" name="img">
   
    </div>
   
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
  </div>
</div>
<?php include_once dirname(__FILE__).'/../footer.php';?>

<script type="text/javascript">
  $("#number").keypress(function(e){
    if(String.fromCharCode(e.keyCode).match(/[^0-9]/g)) return false; 
  });
</script>
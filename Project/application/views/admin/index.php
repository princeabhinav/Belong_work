<?php include_once('header.php');?>
        <!-- Navigation -->

 <?php 

    if($fetch_data->num_rows() > 0)
    {
       foreach($fetch_data->result() as $row) {

       ?> 


        	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="table-responsive">
			 <table id="mytable" class="table" width="600">
      <tr>
        <th>id</th>
        <th>Url</th>
        <th>H_url</th>
        <th>Date</th>
        <th>Upvote</th>
        <th>Comments</th>
      </tr>
    </thead>
    <tbody>

      <tr>
        <td><?php echo $row->id; ?></td>
        <td><?php echo $row->url; ?></td>
        <td><a href="<?php echo $row->h_url; ?>"><?php echo $row->h_url;?> </a></td>
        <td><?php echo $row->date; ?></td>
        <td><?php echo $row->upvotes; ?></td>
        <td><?php echo $row->comments; ?></td>
      </tr>
      
    </tbody>
  </table>
</div>
</div>
</div>
  
 
  <?php }
   } ?>
       
 <?php include_once('footer.php');?>    

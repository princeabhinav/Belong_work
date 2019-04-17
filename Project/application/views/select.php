
<body bgcolor="#E6E6FA">

<!------ Include the above in your HEAD tag ---------->





<meta name="viewport">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<div class="w3-container" align="center" style="margin-top: 270px">

  
  <div class="w3-panel w3-card w3-#E6E6FA" style= "width: 200px" align="center">
    
<form method = "POST" action="<?php echo base_url('main/answer')?>">

  <input type="radio" name="size" value="Admin" > Admin<br>
  <input type="radio" name="size" value="User"> User<br>
  <button type="submit" class="btn btn-default btn-md">Apply</button>
  
</form>



  </div>
  
</div>
</div>


<!-- <div class="container">

<form method = "POST" action="<?php echo base_url('main/answer')?>">

  <input type="radio" name="size" value="Admin" > Admin<br>
  <input type="radio" name="size" value="User"> User<br>
  <button type="submit" class="btn btn-default btn-md">Apply</button>
  
</form>

</div> -->

</body>




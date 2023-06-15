<?php
require('./include/header.php');

?>
 <div class="container">
    <div class="container" style="margin-top:50px">
				<h3 class="text-center">Even/Odd</h3>
    </div>
    <div class="container" style="margin-top:50px">
    <div class="row">
    <div class="col-sm-4">
	</div>
    <div class="col-sm-4">
    <div class="container bg-light p-4">
    <form action="output.php" method="POST">
		<div class="mt-2 pb-2">
			<label for="number">Number</label>
			<input type="number" name="number" class="form-control" placeholder="Enter Number">	
		</div>
        <div class="mt-1 pb-2">
            <button type="submit" name="submit" class="btn btn-outline-dark">Submit</button>  
        </div>
    </form>
    </div>
						
    </div>
    </div>

</div> 
<?php
require('./include/footer.php');

?>         

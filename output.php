<?php
require('./include/header.php');

?>
 <div class="container">
    <div class="container" style="margin-top:50px">
				<h3 class="text-center">Output</h3>
    </div>
    <div class="container" style="margin-top:50px">
    <div class="row">
    <div class="col-sm-4">
	</div>
    <div class="col-sm-4">
    <div class="container bg-light p-4">
    <?php
                if($_POST['number'] % 2 == 0){
                    echo "Even Number";
                }elseif($_POST['number'] % 2 == 1){
                    echo "Odd Number";
                }
                else
                    
                ?>

    </div>
						
    </div>
    </div>

</div> 


   
			<?php include 'functions.php';?>

            <form action="" method="POST">
                <table>
                    <tr>
                        <td>Enter the First Number:</td>
                        <td><input type="number" name="num1"/></td>

                    </tr>
                    <tr>
                        <td>Enter the second number:</td>
                        <td><input type="number" name="num2"/></td>

                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="calculation"value="Calculate"/></td>

                    </tr>
					
                    

                </table>
				<?php
                if(isset($_POST['calculation'])){
                $numone=$_POST['num1'];
                $numtwo=$_POST['num2'];
                if(empty($numone)or empty($numtwo)){
                echo"<span style='color:red'>Field must not be Empty!<span>";
            }else{
				echo "First number is: ".$numone. " Second number is: ". $numtwo. "<br>";
				$cal=new calculaton;
				$cal->add($numone,$numtwo);
				$cal->sub($numone,$numtwo);
				$cal->mul($numone,$numtwo);
				$cal->div($numone,$numtwo);
            }
			}
			
            ?>
			
				


            </form>
            



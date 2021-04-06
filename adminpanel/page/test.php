<!DOCTYPE html>
<?php
include('config.php');
?>
<html>
<body>
 <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Gender</th>
                                        <th>Mobile</th>
										<th>Address</th>
                                        <th>Cnic</th>
                                        <th>Delivery</th>
                                        <th>Password</th>
                                        <th>Mobile</th>
                                        <th>Status</th>
                                        <th>Delete Status</th>
                                    </tr>
                                </thead>
                                <tbody>
								
								<?php
								//$query = "SELECT * FROM doctor";
								$retval = mysqli_query($conn, "Select * from patient") or die(mysqli_error());
								while($row2 = mysqli_fetch_assoc($retval)) {?>	
								
                                        <td><?php echo $row2['PatientId'];?></td>
                                        <td><?php echo $row2['Name'];?></td>
                                        <td><?php echo $row2['Age'];?></td>
										<td><?php echo $row2['Gender'];?></td>
										<td><?php echo $row2['Mobile'];?></td>
                                        <td><?php echo $row2['Address'];?></td>
                                        <td><?php echo $row2['Cnic'];?></td>
										
                                        <td><?php echo $row2['Delivery'];?></td>
                                        <td><?php echo $row2['Password'];?></td>
										<td><?php echo $row2['Mobile'];?></td>
										<td><?php echo $row2['Status'];?></td>
                                        <td><?php echo $row2['DeleteStatus'];?></td>
                                        <td><?php echo $row2['Rating'];?></td>
                                    
                                <?php }?>
                                </tbody>
                            </table>







</body>
</html>
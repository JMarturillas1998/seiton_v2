<?php

	include './includes/navigation.php';

?>


<div class="row main-content">

				<div class="col-lg-12 welcome">

					<h1> My Leaves </h1>

				</div>


				<div class="row filters">

            	 <div class="row">

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                            <div class="stats">
                            <h1>Available Leaves</h1>
                            <p> 0 </p>
                            </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">

                            <div class="stats">
                            <h1>Approved</h1>
                            <p> 0 </p>
                            </div>

                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">

                            <div class="stats">
                            <h1>Pending</h1>
                            <p> 0 </p>
                            </div>

                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">

                            <div class="stats">
                            <h1>Declined</h1>
                            <p> 0 </p>
                            </div>

                </div>

            </div> 


            <div class="row newLeaves">

                <div class="col">

                    <button type="button" id="btn_leaves" data-bs-toggle="modal" class="btn-hover btn_ntasks"data-bs-target="#myModal"> <i class="fal fa-plus"></i>&nbsp;&nbsp;File a New Leave </buttton>

                </div>

            </div> 


            <div class="row" id="leavesTable" >

        
                <div class="col table-responsive" >


                    <table class="table table-striped table-hover" >

                        <thead>

                           <tr> 

                            <th scope="col">ID</th>
                            <th scope="col">Date Filed</th>
                            <th scope="col">Type</th>
                            <th scope="col">Client</th>
                            <th scope="col">From</th>
                            <th scope="col">To</th>
                            <th scope="col">Hours Per Day</th>
                            <th scope="col">Credits Used</th>
                            <th scope="col">Status</th>
                            <th scope="col">Actions</th>

                           </tr>

                        </thead>
                        
                        <tbody class="table-striped">

                            <tr>

                                <th scope="row"> 1 </th>  

                                    <td>5244</td>
                                    <td>August 25, 2021 </td>
                                    <td>Sick</td>
                                    <td>August 24, 2021 00:00</td>
                                    <td>August 24, 2021 00:00 </td>
                                    <td>Whole Day</td>
                                    <td>1.00</td>
                                    <td>Approved</td>
                                    <td><button id="btn_cancel" class="btn-hover btn_ntasks">Cancel</button></td>

                                </tr>

                                <th scope="row"> 2</th>  

                                    <td>5244</td>
                                    <td>August 25, 2021 </td>
                                    <td>Sick</td>
                                    <td>August 24, 2021 00:00</td>
                                    <td>August 24, 2021 00:00 </td>
                                    <td>Whole Day</td>
                                    <td>1.00</td>
                                    <td>Approved</td>
                                    <td><button id="btn_cancel" class="btn-hover btn_ntasks">Cancel</button></td>

                                </tr>


                                  <th scope="row"> 3</th>  

                                    <td>5244</td>
                                    <td>August 25, 2021 </td>
                                    <td>Sick</td>
                                    <td>August 24, 2021 00:00</td>
                                    <td>August 24, 2021 00:00 </td>
                                    <td>Whole Day</td>
                                    <td>1.00</td>
                                    <td>Approved</td>
                                    <td><button id="btn_cancel" class="btn-hover btn_ntasks">Cancel</button></td>

                                </tr>
                        </tbody>





                    </table>






                </div>

             


            </div>



          </div>



      </div>

       
 <?php

include './modals/new_leave_modal.php';

 ?>

 


</div>
<!-- End of main content -->





<?php

	include './includes/footer.php';

?>

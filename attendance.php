<?php

	include './includes/navigation.php';

?>


<div class="row main-content">

				<div class="col-lg-12 welcome">

					<h1> Attendance Log </h1>

				</div>


				<div class="col-lg-4 filter">
                      <label for="formFileMultiple" class="form-label">Filter</label>
                     <select name="client_filter" id="client_filter" class="form-control" required>
                          <option value="1">Today</option>
                           <option value="2">Yesterday</option>
                            <option value="3">Last 7 days</option>
                            <option value="4">Last month</option>
                            <option value="5">Last 60 days</option>
                            <option value="5">Last 120 days</option>
     
                        </select>
                 </div> 	

        

            <div class="row tasks_table">

            

          


            <div class="row" id="taskstable">

        
                <div class="col table-responsive ">


                    <table class="table table-striped table-hover">

                        <thead>

                           <tr> 

                            <th scope="col">Date</th>
                            <th scope="col">Clock In</th>
                            <th scope="col">Clock Out</th>
                            <th scope="col">Duration</th>
                            <th scope="col">Type</th>
                            <th scope="col">Notes</th>
    
                           </tr>

                        </thead>
                        
                        <tbody class="table-striped ">

                            <tr>

                                <th scope="row"> May 16, 2021 </th>  

                                 
                                    <td>    11:34 </td>
                                    <td>21:19</td>
                                    <td>Medium</td>
                                    <td>9:44</td>
                                    <td>Regular</td>
                                   
                                   


                                </tr>

                                <tr>

                                <th scope="row"> May 16, 2021 </th>  

                                 
                                    <td>    11:34 </td>
                                    <td>21:19</td>
                                    <td>Medium</td>
                                    <td>9:44</td>
                                    <td>Regular</td>
                                   
                                   


                                </tr>
                            
                             <tr>

                                <th scope="row"> May 16, 2021 </th>  

                                 
                                    <td>    11:34 </td>
                                    <td>21:19</td>
                                    <td>Medium</td>
                                    <td>9:44</td>
                                    <td>Regular</td>
                                   
                                   


                                </tr>


                                
                               
                        </tbody>

                    </table>

                </div>


            </div>


          </div>



      </div>

 <?php

 include './modals/Eod_modal.php';

 ?>

</div>
<!-- End of main content -->



<?php

	include './includes/footer.php';

?>

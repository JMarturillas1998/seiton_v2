<?php

	include './includes/navigation.php';

?>


<div class="row main-content">

				<div class="col-lg-12 welcome">

					<h1> EOD Reports </h1>

				</div>


				<div class="row filters">

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


                 	

            </div>

            <div class="row tasks_table">

                <div class="col">

                    <button type="button" class="btn-hover btn_ntasks" id="btn_ntasks" data-bs-toggle="modal" data-bs-target="#myModal3"> <i class="fal fa-plus"></i>&nbsp;&nbsp;New EOD Report </buttton>

                </div>

            </div> 


            <div class="row" id="taskstable">

        
                <div class="col table-responsive ">


                    <table class="table table-striped table-hover">

                        <thead>

                           <tr data-bs-toggle="modal" data-bs-target="#myModal7"> 

                            <th scope="col">Date</th>
                            <th scope="col">VA</th>
                            <th scope="col">Client</th>
                            <th scope="col">Subject</th>
    
                           </tr>

                        </thead>
                        
                        <tbody class="table-striped ">

                            <tr data-bs-toggle="modal" data-bs-target="#myModal7">

                                <th scope="row"> May 16, 2021 </th>  

                                 
                                    <td>jmarturillas@thevirtualhub.com </td>
                                    <td>Edge Lacorte</td>
                                    <td>EOD Report 11/08/2021 Monday for Edge Lacorte Flexible</td>
                                   


                                </tr>

                                <tr data-bs-toggle="modal" data-bs-target="#myModal7">

                                <th scope="row"> May 16, 2021 </th>  

                                 
                                    <td>jmarturillas@thevirtualhub.com </td>
                                    <td>Edge Lacorte</td>
                                    <td>EOD Report 11/08/2021 Monday for Edge Lacorte Flexible</td>
                                   


                                </tr>
                                <tr data-bs-toggle="modal" data-bs-target="#myModal7">

                                <th scope="row"> May 16, 2021 </th>  

                                 
                                    <td>jmarturillas@thevirtualhub.com </td>
                                    <td>Edge Lacorte</td>
                                    <td>EOD Report 11/08/2021 Monday for Edge Lacorte Flexible</td>
                                   


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

<?php

 include './modals/view_eod_modal.php';

 ?>

</div>
<!-- End of main content -->



<?php

	include './includes/footer.php';

?>

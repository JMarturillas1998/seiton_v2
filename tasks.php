<?php

	include './includes/navigation.php';

?>


<div class="row main-content">

				<div class="col-lg-12 welcome">

					<h1> My Tasks </h1>

				</div>


				<div class="row filters">

            	<div class="col-lg-4">
                      <label for="formFileMultiple" class="form-label">Filter by Client</label>
                     <select name="client_filter" id="client_filter" class="form-control " required>
                          <option value="1">Client	1</option>
                           <option value="2">Client 2</option>
                            <option value="3">Client 3</option>
     
                        </select>
                 </div>

                 	<div class="col-lg-4">
                      <label for="formFileMultiple" class="form-label">Sort by</label>
                     <select name="sort_by_filter" id="sort_by_filter" class="form-control " required>
                      
                          <option value="1">Date Created</option>
                           <option value="2">Date Updated</option>
                            <option value="3">Due Date</option>
                             <option value="3">Status</option>
     
                        </select>
                 </div>

                 	<div class="col-lg-4">
                      <label for="formFileMultiple" class="form-label">Filter by Client</label>
                     <select name="task_status" id="task_status" class="form-control " required>
                         
                          <option value="1">Open</option>
                           <option value="2">In Progress</option>
                            <option value="3">Repeating</option>
                            <option value="3">For Approval</option>
                            <option value="3">Completed</option>
                            <option value="3">On Hold</option>
                            <option value="3">All Tasks</option>
     

                        </select>
                 </div>

            </div>

            <div class="row tasks_table">

                <div class="col">

                    <button type="button" class="btn-hover btn_ntasks" id="btn_ntasks" data-bs-toggle="modal" data-bs-target="#myModal"> <i class="fal fa-plus"></i>&nbsp;&nbsp;Add New Task </buttton>

                </div>

            </div> 


            <div class="row" id="taskstable">

        
                <div class="col table-responsive ">


                    <table class="table table-striped table-hover">

                        <thead>

                           <tr> 

                            <th scope="col">Date Created</th>
                            <th scope="col">Status</th>
                            <th scope="col">Summary</th>
                            <th scope="col">Priority</th>
                            <th scope="col">Client</th>
                            <th scope="col">Due Date</th>
                            <th scope="col">Last updated</th>
                            <th scope="col">Task Timer</th>
                         
                       

                           </tr>

                        </thead>
                        
                        <tbody class="table-striped ">

                            <tr data-bs-toggle="modal" data-bs-target="#myModal2">

                                <th scope="row"> May 16, 2021 </th>  

                                 
                                    <td>To do </td>
                                    <td>Status</td>
                                    <td>Medium</td>
                                    <td>The Virtual hub</td>
                                    <td>Apr 20, 2020</td>
                                    <td>Nov 5, 2021</td>
                                    <td><button id="btn_start" class="btn_ntasks btn-hover">Start Timer</button></td>
                                  


                                </tr>

                                <tr data-bs-toggle="modal" data-bs-target="#myModal2">

                                <th scope="row"> May 16, 2021 </th>  

                                    
                                    <td>To do </td>
                                    <td>Status</td>
                                    <td>Medium</td>
                                    <td>The Virtual hub</td>
                                    <td>Apr 20, 2020</td>
                                    <td>Nov 5, 2021</td>
                                    <td><button id="btn_start" class="btn_ntasks btn-hover">Start Timer</button></td>

                                </tr>

                                <tr data-bs-toggle="modal" data-bs-target="#myModal2">

                                <th scope="row"> May 16, 2021</th>  

                                  
                                    <td>To do </td>
                                    <td>Status</td>
                                    <td>Medium</td>
                                    <td>The Virtual hub</td>
                                    <td>Apr 20, 2020</td>
                                    <td>Nov 5, 2021</td>
                                    <td><button id="btn_start" class="btn_ntasks btn-hover">Start Timer</button></td>

                                </tr>

                               
                        </tbody>

                    </table>

                </div>

             


            </div>



          </div>

 <?php

include './modals/edit_task_modal.php';

 ?>

      </div>

       
 <?php

include './modals/new_task_modal.php';

 ?>

 


</div>
<!-- End of main content -->





<?php

	include './includes/footer.php';

?>

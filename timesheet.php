<?php

	include './includes/navigation.php';

?>


<div class="row main-content">

				<div class="col-lg-12 welcome">

					<h1> Timesheet </h1>

				</div>

				 <div class="row filters">

            	<div class="col-lg-6">
                      <label for="formFileMultiple" class="form-label">Filter by Client</label>
                     <select name="client_filter" id="client_filter" class="form-control " required>
                          <option value="1">Client	1</option>
                           <option value="2">Client 2</option>
                            <option value="3">Client 3</option>
     
                        </select>
                 </div>


                 <div class="row" id="timesheet_table">

        
                <div class="table-responsive">


                    <table class="table table-striped">

                        <thead>

                           <tr> 

                            <th scope="col">Date</th>
                            <th scope="col">Client</th>
                            <th scope="col">Start</th>
                            <th scope="col">End</th>
                            <th scope="col">Duration</th>
                            <th scope="col">Task</th>
                           

                           </tr>

                        </thead>
                        
                        <tbody class="table-striped">

                            <tr>

                                <th scope="row"> 11/05/2021 </th>  

                                 
                                    <td>The Virtual Hub</td>
                                    <td>09:14</td>
                                    <td>18:48</td>
                                    <td>TVH</td>
                                    <td>Test Description</td>
                                  

                                </tr>

                                <tr>

                                <th scope="row"> 11/05/2021 </th>  

                                 
                                    <td>The Virtual Hub</td>
                                    <td>09:14</td>
                                    <td>18:48</td>
                                    <td>TVH</td>
                                    <td>Test Description</td>
                                  

                                </tr>

                                <tr>

                                <th scope="row"> 11/05/2021 </th>  

                                 
                                    <td>The Virtual Hub</td>
                                    <td>09:14</td>
                                    <td>18:48</td>
                                    <td>TVH</td>
                                    <td>Test Description</td>
                                  

                                </tr>

                                <tr>

                                <th scope="row"> 11/05/2021 </th>  

                                 
                                    <td>The Virtual Hub</td>
                                    <td>09:14</td>
                                    <td>18:48</td>
                                    <td>TVH</td>
                                    <td>Test Description</td>
                                  

                                </tr>



                                
                        </tbody>





                    </table>






                </div>


            </div>


          </div>
      </div>




            </div>




          </div>
       </div>
 </div>






</div>




<?php

	include './includes/footer.php';

?>

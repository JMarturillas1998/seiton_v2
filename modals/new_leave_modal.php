
        <div class="container">
            <div class="modal" id="myModal">
              <div class="modal-dialog modal-md modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h2 class="modal-title" style=" text-align: center;">New Leave Request</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>

                  <div class="modal-body">
                    <form>


                     <div class="mb-3 leave_announcement">

                        <div class="row">
                        <div class="col-10">
                             <p id="alert-heading" style="color: red; font-weight:500; font-size: 1rem;">NOTICE!</p>
                        </div>

                    
                        </div>

                      <p id="subtitle">You don't have to file leaves separately if the range includes weekends because Seiton now automatically excludes weekends from your leave count deductions. All you have to do is to select the start date and end date of your planned leave as long as the leave type is the same. You can only file one leave type per date range.</p>

                      <div class="d-flex justify-content-md-end">
                          <button class="btn btn-primary" id="leave_close_modal" >I understand</button>
                      </div>
               

                    </div>   

                    <div class="leave_form" id="leave-form">
                  
                    <div class="mb-3">
                      <label for="employee_name" class="form-label">Employee:</label>
                      <p><strong> Barbara Turley </strong></p>
                    </div>
                

                    <div class="mb-3">
                      <label for="client_name" class="form-label"> Client Name:</label>
                      <select name="client_name" id="client_name" class="form-control " required>
                          <option value="Client1">Client1</option>
                          <option value="Client2">Client2</option>
                         
                        </select>
                    </div>

                    <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">Leave Type</label>
                     <select name="leave_type" id="leave_type" class="form-control " required>
                          <option value="vacation_leave">Vacation Leave</option>
                          <option value="sick_leave">Sick Leave</option>
                           <option value="gift_leave">Gift Leave</option>
                            <option value="offset_leave">Offset Leave</option>
                             <option value="paternity_leave">Paternity Leave</option>
                              <option value="birthday_leave">Birthday Leave</option>
                         
                         
                        </select>
                    </div>

                    <hr>

                    <div class="leave_date_container">

                    <div class="mb-3">

                        <label for="leave_date" class="form-label"> <strong>Date of leave</strong></label>
                       <p id="alert-heading"> Important Note:</p>
                        <p id="subtitle"> <em>You need to file your vacation leave at least 4 days in advance</em> </p>

                    </div>

                    <div class="mb-3">

                        <label for="from_date" class="form-label">From:</label>

                        <input type="date" class="form-control"placeholder="Select From Date" name="ftdate" id="ftdate" required>

                    </div>

                    <div class="mb-3">

                        <label for="from_date" class="form-label">To:</label>

                        <input type="date" class="form-control"placeholder="Select To Date" name="tdate" id="tdate" required>

                    </div>

                    <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">How many hours of leave per day:</label>
                     <select name="leave_hours" id="leave_hours" class="form-control " required>
                          <option value="0">Select how many hours</option>
                          <option value="1">8</option>
                           <option value="2">6</option>
                            <option value="3">4</option>
                           
                         
                         
                        </select>
                    </div>

                </div>




                  </div>

                  <div class="modal-footer leaves_footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>

                  </form>


                </div>

              </div>
            </div>





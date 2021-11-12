 <div class="container">
            <div class="modal animated fadeIn" id="myModal">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h2 class="modal-title" style=" text-align: center;">Add New Task</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>

                  <div class="modal-body">

                  
                   
                    <div class="mb-3">
                      <label for="client_name" class="form-label"> Client Name:</label>
                      <select name="client_name" id="client_name" class="form-control " required>
                          <option value="Client1">Client1</option>
                          <option value="Client2">Client2</option>
                         
                        </select>
                    </div>

                    <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">Assignee</label>
                     <select name="task_assignee" id="task_assignee" class="form-control " required>
                          <option value="0">Default</option>
                          <option value="1"></option>

                         
                        </select>
                    </div>

             

                    <div class="mb-3">

                        <label for="summary" class="form-label">Title/Summary</label>

                        <input type="text" class="form-control"placeholder="Summary (150 characters max)" name="ftdate" id="ftdate" required>

                    </div>

                    <div class="mb-3">

                        <label for="formFileMultiple" class="form-label">Categories</label>
                     <select name="categories" id="categories" class="form-control " required>
                          <option value="0">General Admin</option>
                          <option value="1">Social Media</option>
                          <option value="2">Content Management</option>
                           <option value="3">Digital Marketing</option>
                            <option value="4">Systems</option>
                        </select>

                    </div>

                    <div class="mb-3">
                     <label for="formFileMultiple" class="form-label">Status</label>
                     <select name="categories" id="categories" class="form-control " required>
                          <option value="0">To do</option>
                          <option value="1">In Progress</option>
                          <option value="2">For Approval</option>
                           <option value="3">Repeating</option>
                            <option value="4">On Hold</option>
                             <option value="4">Completed</option>
                        </select>
                           
              
                    </div>


                    <div class="mb-3">
                     <label for="formFileMultiple" class="form-label">Status</label>
                     <select name="priority" id="priority" class="form-control " required>
                          <option value="0">Urgent</option>
                          <option value="1">High Priority</option>
                          <option value="2">Medium</option>
                           <option value="3">Low</option>
                           
                        </select>
                          
                         
             
                </div>

		                <div class="mb-3">
		              <label for="ticket_Content" class="form-label">Description/Instructions/Link to resources</label>
		              <textarea class="form-control" id="tasks_content" rows="3" placeholder="Description" required></textarea>
		            </div>

		            <div class="mb-3">

                        <label for="due_date" class="form-label">Due Date</label>

                        <input type="date" class="form-control"placeholder="Select From Date" name="due_date" id="due_date" required>

                    </div>

                    <div class="mb-3">

                        <label for="date_completed" class="form-label">Date Completed</label>

                        <input type="date" class="form-control"placeholder="Select To Date" name="date_completed" id="date_completed" required>

                    </div>




                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>

                  </form>


                </div>

              </div>

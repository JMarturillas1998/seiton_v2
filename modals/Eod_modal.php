 <div class="container">
            <div class="modal" id="myModal3">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h2 class="modal-title" style=" text-align: center;">New EOD</h2>
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
                      <label for="formFileMultiple" class="form-label">Subject</label>

                      <input type="text" class="form-control" placeholder="EOD Report" name="subject" required>
                    
                    </div>
                         
          

		                <div class="mb-3">
		              <label for="eod-message" class="form-label">Description/Instructions/Link to resources</label>
		              <textarea class="form-control" id="eod-message" rows="3" placeholder="" required></textarea>
		            </div>

		            

                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>

                  </form>


                </div>
</div>
</div>

              </div>

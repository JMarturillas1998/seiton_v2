<?php

	include './includes/navigation.php';

?>


<div class="row main-content">

				<div class="col-lg-12 welcome">

					<h1> Dashboard </h1>
					<h5> Welcome back, Barbara! </h5>

				</div>


				<div class="row"> 
					<div class="col-lg-9 announcements-wrapper"> 
						
						<!-- This is where the announcements pop ups should be placed -->

						<div class="announcements-modal">

							<div class="modal-header">
	        					 <i class="fal fa-bullhorn"></i> <h5 class="modal-title">&nbsp; &nbsp;What's New?</h5>
						        <button type="button" class="btn-close" id="btn-Close1" aria-label="Close"></button>
					      	</div>
							
							<div class="modal-body">
					        	<p>iusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					     	 </div>  


						</div>

						<!-- end of announcements modal -->



						<!-- This is where the dashboard stats shows -->

						<div class="row stats-wrapper">

							<div class="col-lg-4">
	        					<div class="stats">
	        					<h1>Leave Credits</h1>
	        					<p> 0 </p>
	        					<h2> Note: 0.5 = 4hrs </h2>
	        					</div>
        					</div>

	        				<div class="col-lg-4">

	        					<div class="stats">
	        					<h1>Upcoming Leaves</h1>
	        					<p> 0 </p>
	        					<h2> You have no upcoming leaves </h2>
	        					</div>

	        				</div>

	        				<div class="col-lg-4">

	        					<div class="stats">
	        					<h1>My Open Tickets</h1>
	        					<p> 0 </p>
	        					<h2> You have no Open Tickets </h2>
	        					</div>

	        				</div>

	        			</div>

	        			<!-- end of dashboard stats -->

	        			<!-- start of social media announcement -->

	        			<div class="row">

	        				<div class="sm-wrapper">

	        				

	        						<div class="sm-header">

	        							<h1><a href="social_media_feed.php"><i class="fal fa-bullhorn"></i> &nbsp;&nbsp;Social Media Feed </a></h1>	

	        						</div>

	        						<!-- Start of SM content wrapper


 -->
 									<div class="sm-content-box">
	        						<div class="sm-content-wrapper">



	        						<div class="sm-author d-flex">

	        							<div class="sm-avatar">

	        								<img src="./resources/barb.png">

	        							</div>

	        							<div>

	        								<div class="author-name">

	        									<p> Barbara Turley </p>

	        								</div>

	        								<div class="p-timestamp">

	        									<p> 5 minutes ago </p>

	        								</div>


	        							</div>


	        						</div>

	        						<div class="sm-content">

	        							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		        						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		        						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	        						</div>



	        						<div class="actions d-flex align-items-center">




	        							

	        							<div class="col heart-action">

	        								<a href="#" class="heart">
	        									<i class="fas fa-heart"></i>&nbsp;&nbsp;Heart
	        								</a>

	        								<a href="#" class="unheart"><i class="fas fa-heart"></i>&nbsp;&nbsp;Unheart</a>


	        							</div>


	        							<div class="col comment-action">

	        								 <a href="#" data-bs-toggle="modal" data-bs-target="#myModal">

	        								 <i class="fas fa-comment"></i>&nbsp;&nbsp;
	        								Comment

	        								</a>

	        							</div>


	        							<div class="col comments-window">

	        								 <a href="">26 Comments  </a>

	        							</div>


	        						</div>


	        					</div>


	        					<div class="sm-content-wrapper">

	        						<div class="sm-author d-flex">

	        							<div class="sm-avatar">

	        								<img src="./resources/barb.png">

	        							</div>

	        							<div>

	        								<div class="author-name">

	        									<p> Barbara Turley </p>

	        								</div>

	        								<div class="p-timestamp">

	        									<p> 5 minutes ago </p>

	        								</div>


	        							</div>


	        						</div>

	        						<div class="sm-content">

	        							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		        						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		        						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	        						</div>



	        						<div class="actions d-flex align-items-center">




	        							

	        							<div class="col heart-action">

	        								<a href="#" class="heart">
	        									<i class="fas fa-heart"></i>&nbsp;&nbsp;Heart
	        								</a>

	        								<a href="#" class="unheart"><i class="fas fa-heart"></i>&nbsp;&nbsp;Unheart</a>


	        							</div>


	        							<div class="col comment-action">

	        								 <a href="#" data-bs-toggle="modal" data-bs-target="#myModal">

	        								 <i class="fas fa-comment"></i>&nbsp;&nbsp;
	        								Comment

	        								</a>

	        							</div>


	        							<div class="col comments-window">

	        								 <a href="">26 Comments  </a>

	        							</div>


	        						</div>


	        					</div>


	        					<div class="sm-content-wrapper">

	        						<div class="sm-author d-flex">

	        							<div class="sm-avatar">

	        								<img src="./resources/barb.png">

	        							</div>

	        							<div>

	        								<div class="author-name">

	        									<p> Barbara Turley </p>

	        								</div>

	        								<div class="p-timestamp">

	        									<p> 5 minutes ago </p>

	        								</div>


	        							</div>


	        						</div>

	        						<div class="sm-content">

	        							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		        						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		        						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	        						</div>



	        						<div class="actions d-flex align-items-center">



	        							<div class="col heart-action">

	        								<a href="#" class="heart">
	        									<i class="fas fa-heart"></i>&nbsp;&nbsp;Heart
	        								</a>

	        								<a href="#" class="unheart"><i class="fas fa-heart"></i>&nbsp;&nbsp;Unheart</a>


	        							</div>


	        							<div class="col comment-action">

	        								 <a href="#" data-bs-toggle="modal" data-bs-target="#myModal">

	        								 <i class="fas fa-comment"></i>&nbsp;&nbsp;
	        								Comment

	        								</a>

	        							</div>


	        							<div class="col comments-window">

	        								 <a href="">26 Comments  </a>

	        							</div>


	        						</div>


	        					</div>
	        				</div>

	        					<!-- End of SM Content wrapper -->

	        				</div>



	        			</div>


	        			<!-- end of social media announcement -->



						</div>

						<!-- End of Column 1 -->

						<!-- start of column 2 -->

					<div class="col-lg-3">

						<div class="row">

							<div class="myNotifications-wrapper">
							
							<div class="row">

								<div class="myNotifs-header d-flex">

									<div class="col-10 tnotifications">
										<h1>Notifications</h1>
									</div>

	      							<div class="col-2 t-bell d-flex justify-content-end"><i class="far fa-bell"></i>
	      							</div>

								</div>


							</div>

						</div>



							<div class="notifications-content-wrapper">

								<div class="row">

									<div class="view-notif">

			        				<p><a href="notifications.php"> View all notifications </a></p>

			        				</div>

								<div class="notifications-content d-flex">

									<div >
			        					<img class="sm-avatar" src="./resources/barb.png">
	        						</div>	

	        						<div>
					        			<div class="author-name">
					        				<p>Barbara Turley</p>
					        			</div>

					        			<div class="p-timestamp">
					        				<p>Barbara liked your post</p>
					        			</div>
					        						   	
					        			<div class="p-time">
					        				<p>5 minutes ago</p>
			        					</div>	

			        				</div>

			        				<div class="col nt-status d-flex align-items-center justify-content-end">

			        				<i class="fas fa-circle"></i>

			        				</div>

			        			</div>

			        			<div class="notifications-content d-flex">

									<div >
			        					<img class="sm-avatar" src="./resources/barb.png">
	        						</div>	

	        						<div>
					        			<div class="author-name">
					        				<p>Barbara Turley</p>
					        			</div>

					        			<div class="p-timestamp">
					        				<p>Barbara liked your post</p>
					        			</div>
					        						   	
					        			<div class="p-time">
					        				<p>5 minutes ago</p>
			        					</div>	

			        				</div>

			        				<div class="col nt-status d-flex align-items-center justify-content-end">

			        				<i class="fas fa-circle"></i>

			        				</div>

			        			</div>

			        			<div class="notifications-content d-flex">

									<div >
			        					<img class="sm-avatar" src="./resources/barb.png">
	        						</div>	

	        						<div>
					        			<div class="author-name">
					        				<p>Barbara Turley</p>
					        			</div>

					        			<div class="p-timestamp">
					        				<p>Barbara liked your post</p>
					        			</div>
					        						   	
					        			<div class="p-time">
					        				<p>5 minutes ago</p>
			        					</div>	

			        				</div>

			        				<div class="col nt-status d-flex align-items-center justify-content-end">

			        				<i class="fas fa-circle"></i>

			        				</div>

			        			</div>

			        			<div class="notifications-content d-flex">

									<div >
			        					<img class="sm-avatar" src="./resources/barb.png">
	        						</div>	

	        						<div>
					        			<div class="author-name">
					        				<p>Barbara Turley</p>
					        			</div>

					        			<div class="p-timestamp">
					        				<p>Barbara liked your post</p>
					        			</div>
					        						   	
					        			<div class="p-time">
					        				<p>5 minutes ago</p>
			        					</div>	

			        				</div>


			        				<div class="col nt-status d-flex align-items-center justify-content-end">

			        				<i class="fas fa-circle"></i>

			        				</div>

			        			</div>

			        			<div class="notifications-content d-flex">

									<div >
			        					<img class="sm-avatar" src="./resources/barb.png">
	        						</div>	

	        						<div>
					        			<div class="author-name">
					        				<p>Barbara Turley</p>
					        			</div>

					        			<div class="p-timestamp">
					        				<p>Barbara liked your post</p>
					        			</div>
					        						   	
					        			<div class="p-time">
					        				<p>5 minutes ago</p>
			        					</div>	

			        				</div>

			        				<div class="col nt-status d-flex align-items-center justify-content-end">

			        				<i class="fas fa-circle"></i>

			        				</div>

			        			</div>

			        			<div class="notifications-content d-flex">

									<div >
			        					<img class="sm-avatar" src="./resources/barb.png">
	        						</div>	

	        						<div>
					        			<div class="author-name">
					        				<p>Barbara Turley</p>
					        			</div>

					        			<div class="p-timestamp">
					        				<p>Barbara liked your post</p>
					        			</div>
					        						   	
					        			<div class="p-time">
					        				<p>5 minutes ago</p>
			        					</div>	

			        				</div>

			        				<div class="col nt-status d-flex align-items-center justify-content-end">

			        				<i class="fas fa-circle"></i>

			        				</div>

			        			</div>



			        		

			        			<div class="notifications-content d-flex">

									<div >
			        					<img class="sm-avatar" src="./resources/barb.png">
	        						</div>	

	        						<div>
					        			<div class="author-name">
					        				<p>Barbara Turley</p>
					        			</div>

					        			<div class="p-timestamp">
					        				<p>Barbara liked your post</p>
					        			</div>
					        						   	
					        			<div class="p-time">
					        				<p>5 minutes ago</p>
			        					</div>	

			        				</div>

			        				<div class="col nt-status d-flex align-items-center justify-content-end">

			        				<i class="fas fa-circle"></i>

			        				</div>

			        			</div>




			        		</div>

			        		</div>

						

					<!-- 	end of notifications	 -->

						


						</div>


						<!-- start of my tasks	 -->

						<div class="row">


							<div class="myTasks-wrapper">

								<div class="row">

								<div class="myTasks-header d-flex">


									<div class="col-10 tasks">
										<h1>My Tasks</h1>
									</div>

	      							<div class="col-2 t-icon d-flex justify-content-end"><i class="fas fa-tasks fa-1x"></i>
	      							</div>

								</div>

							

								<div class=" taskname">

									<h1>Task Name</h1>

								</div>
								<div class="container">
								<div class="row timer1">
									
									<div class="col-lg-6 counter d-flex justify-content-center align-items-center" id="timer-pane">

										<p class="d-flex justify-content-center align-items-center timer-ctdn ">12:56:56</p>

									</div>

									<div class="col-lg-6  stop d-flex justify-content-center align-items-center" id="task-overview">

										<button class="btn-stop btn-hover">STOP</button>

									</div>
								</div>

								</div>
						


								<div class="container">
								<div class="row timer">
									
									<div class="taskList-wrapper">

										<div class="row">

						      			<table class="table table-striped table-hover">

						      			<tr class="table-light" data-bs-toggle="modal" data-bs-target="#myModal2">

						      			<td class="col-10 task_title"><p> Task1 </p></td>
						      			<td class="col-2"><button class="btn-start btn-hover">Start</button></td>

						      			</tr>

						      			<tr class="table-light" data-bs-toggle="modal" data-bs-target="#myModal2">

						      			<td class="col-10 task_title"><p > Task1 </p></td>
						      			<td class="col-2"><button class="btn-start btn-hover">Start</button></td>

						      			</tr>

						      			<tr class="table-light" data-bs-toggle="modal" data-bs-target="#myModal2">

						      			<td class="col-10 task_title"><p > Task1 </p></td>
						      			<td class="col-2"><button class="btn-start btn-hover">Start</button></td>

						      			</tr>

						      			<tr class="table-light" data-bs-toggle="modal" data-bs-target="#myModal2">

						      			<td class="col-10 task_title"><p > Task1 </p></td>
						      			<td class="col-2"><button class="btn-start btn-hover">Start</button></td>

						      			</tr>
						      			<tr class="table-light" data-bs-toggle="modal" data-bs-target="#myModal2">

						      			<td class="col-10 task_title"><p > Task1 </p></td>
						      			<td class="col-2"><button class="btn-start btn-hover">Start</button></td>

						      			</tr>
						      			<tr class="table-light" data-bs-toggle="modal" data-bs-target="#myModal2">

						      			<td class="col-10 task_title"><p > Task1 </p></td>
						      			<td class="col-2"><button class="btn-start btn-hover">Start</button></td>

						      			</tr>

						      			</table>
								</div>
								</div>
								</div>



							</div>



							</div>



						</div>	

						<!-- end of mytasks -->





						</div>


	        			


	        		</div>



					</div>

				</div>



			</div>

<?php

	include './modals/comments_modal.php';
	
?>


	    </div>




<?php

	include './includes/footer.php';

?>

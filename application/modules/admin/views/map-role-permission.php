<style>
	ul,
	#myUL {
		list-style-type: none;
	}

	#myUL {
		margin: 0;
		padding: 0;
	}

	.caret {
		cursor: pointer;
		-webkit-user-select: none;
		/* Safari 3.1+ */
		-moz-user-select: none;
		/* Firefox 2+ */
		-ms-user-select: none;
		/* IE 10+ */
		user-select: none;
	}

	.caret::before {
		content: "\25B6";
		color: #eb4034;
		font-size: 20px;
		display: inline-block;
		margin-right: 6px;
	}

	.nested {
		display: none;
		margin-left: 33px;
	}

	.active {
		display: block;
	}
</style>


<div id="main-content">
	<div class="container-fluid">
		<div class="block-header py-lg-4 py-3">
			<div class="row g-3">
				<div class="col-md-6 col-sm-12">
					<h2 class="m-0 fs-5"><a href="javascript:void(0);" class="btn btn-sm btn-link ps-0 btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Mapping Role & Permission</h2>
					<ul class="breadcrumb mb-0">
						<li class=""><a href="">Home</a>&nbsp;/&nbsp;</li>
						<li class="breadcrumb-item">Mapping Role & Permission</li>

					</ul>
				</div>
				<div class="col-md-6 col-sm-12 text-md-end">
					<div class="d-inline-flex text-start">
						<!-- <div class="me-2">
							<a href="sub-menu-list.php" class="btn btn-primary mt-3">Sub Menu List</a>

						</div> -->
						<span id="bh_visitors"></span>
					</div>


				</div>
			</div>
		</div>
		<div class="col-xl-12 col-lg-7 col-md-12">
			<form autocomplete="off" method="post" action="" enctype="multipart/form-data" id="map_role_form">
				<div class="side-app">
					<!-- CONTAINER -->
					<div class="main-container container-fluid">
						<!-- PAGE-HEADER -->
						<div class="page-header mt-5">

						</div>
						<div class="row">

							<div class="col-lg-6 col-md-6">

								<div class="">
									<div class="main-card mb-3 card">
										<div class="card-body">
											<h5 class="card-title">Mapping Role-Permission</h5>
											<ul id="myUL">
												<li>
													<span class="caret">
														<input type="checkbox" value="1" name="main_menu_id[]">
														User Authentication Master </span>
													<ul class="nested">
														<li>
															<input type="checkbox" value="1$1" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Add Menu
														</li>

														<li>
															<input type="checkbox" value="1$2" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Add Sub Menu
														</li>

														<li>
															<input type="checkbox" value="1$3" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Add Role
														</li>

														<li>
															<input type="checkbox" value="1$4" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Add Permission
														</li>

														<li>
															<input type="checkbox" value="1$5" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Map Role & Permission
														</li>

														<li>
															<input type="checkbox" value="1$57" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Daily Report
														</li>


													</ul>

												</li>

											</ul>

											<ul id="myUL">
												<li>
													<span class="caret">
														<input type="checkbox" value="2" name="main_menu_id[]">
														Settings </span>
													<ul class="nested">
														<li>
															<input type="checkbox" value="2$6" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Add State
														</li>

														<li>
															<input type="checkbox" value="2$7" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Add District
														</li>

														<li>
															<input type="checkbox" value="2$8" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Add Regions
														</li>

														<li>
															<input type="checkbox" value="2$9" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Employee Master
														</li>

														<li>
															<input type="checkbox" value="2$46" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Template Master
														</li>

														<li>
															<input type="checkbox" value="2$49" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Country master
														</li>


													</ul>

												</li>

											</ul>

											<ul id="myUL">
												<li>
													<span class="caret">
														<input type="checkbox" value="3" name="main_menu_id[]">
														Volunteer Zone </span>
													<ul class="nested">
														<li>
															<input type="checkbox" value="3$10" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Enquired Volunteer
														</li>

														<li>
															<input type="checkbox" value="3$11" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Send Registration Request
														</li>

														<li>
															<input type="checkbox" value="3$12" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															On Board Volunteer
														</li>

														<li>
															<input type="checkbox" value="3$13" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Add Task
														</li>

														<li>
															<input type="checkbox" value="3$14" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Task List
														</li>

														<li>
															<input type="checkbox" value="3$15" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Assign Task
														</li>

														<li>
															<input type="checkbox" value="3$16" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Assign Task List
														</li>

														<li>
															<input type="checkbox" value="3$17" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Request For Task
														</li>

														<li>
															<input type="checkbox" value="3$18" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Volunteer Daily Report
														</li>

														<li>
															<input type="checkbox" value="3$19" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Requested Certificate
														</li>

														<li>
															<input type="checkbox" value="3$53" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Self Task Daily Report
														</li>


													</ul>

												</li>

											</ul>

											<ul id="myUL">
												<li>
													<span class="caret">
														<input type="checkbox" value="4" name="main_menu_id[]">
														Intern Zone </span>
													<ul class="nested">
														<li>
															<input type="checkbox" value="4$20" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Applied Candidates
														</li>

														<li>
															<input type="checkbox" value="4$21" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															View Onboarding Candidates
														</li>

														<li>
															<input type="checkbox" value="4$22" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Add Task for Intern
														</li>

														<li>
															<input type="checkbox" value="4$23" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Intern's Task List
														</li>

														<li>
															<input type="checkbox" value="4$24" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Intern's Task Assigned
														</li>

														<li>
															<input type="checkbox" value="4$25" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Intern's Assigned Task List
														</li>

														<li>
															<input type="checkbox" value="4$26" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Intern List
														</li>

														<li>
															<input type="checkbox" value="4$27" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Intern Request For Task
														</li>

														<li>
															<input type="checkbox" value="4$28" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Intern Daily Report
														</li>

														<li>
															<input type="checkbox" value="4$29" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Request Internship Certificate
														</li>

														<li>
															<input type="checkbox" value="4$54" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Submission Reports
														</li>

														<li>
															<input type="checkbox" value="4$55" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Submission Reports
														</li>

														<li>
															<input type="checkbox" value="4$58" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Reject submission report
														</li>


													</ul>

												</li>

											</ul>

											<ul id="myUL">
												<li>
													<span class="caret">
														<input type="checkbox" value="5" name="main_menu_id[]">
														Activity Reports </span>
													<ul class="nested">
														<li>
															<input type="checkbox" value="5$30" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Volunteers Report
														</li>

														<li>
															<input type="checkbox" value="5$31" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Interns Report
														</li>

														<li>
															<input type="checkbox" value="5$32" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Task Report
														</li>

														<li>
															<input type="checkbox" value="5$33" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Self Task Daily Report
														</li>

														<li>
															<input type="checkbox" value="5$34" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Task Report
														</li>

														<li>
															<input type="checkbox" value="5$50" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Volunteer Program Report
														</li>

														<li>
															<input type="checkbox" value="5$51" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Intern Transfer Report
														</li>

														<li>
															<input type="checkbox" value="5$52" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Volunteer Transfer Report
														</li>

														<li>
															<input type="checkbox" value="5$56" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Rate & Review
														</li>


													</ul>

												</li>

											</ul>

											<ul id="myUL">
												<li>
													<span class="caret">
														<input type="checkbox" value="6" name="main_menu_id[]">
														My Task Volunteer </span>
													<ul class="nested">

													</ul>

												</li>

											</ul>

											<ul id="myUL">
												<li>
													<span class="caret">
														<input type="checkbox" value="7" name="main_menu_id[]">
														Find Task Volunteer </span>
													<ul class="nested">

													</ul>

												</li>

											</ul>

											<ul id="myUL">
												<li>
													<span class="caret">
														<input type="checkbox" value="8" name="main_menu_id[]">
														Daily Report Volunteer </span>
													<ul class="nested">
														<li>
															<input type="checkbox" value="8$35" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Add Daily Report
														</li>

														<li>
															<input type="checkbox" value="8$36" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															View Daily Report
														</li>


													</ul>

												</li>

											</ul>

											<ul id="myUL">
												<li>
													<span class="caret">
														<input type="checkbox" value="9" name="main_menu_id[]">
														Clain Certificate Volunteer </span>
													<ul class="nested">

													</ul>

												</li>

											</ul>

											<ul id="myUL">
												<li>
													<span class="caret">
														<input type="checkbox" value="10" name="main_menu_id[]">
														My Task Intern </span>
													<ul class="nested">

													</ul>

												</li>

											</ul>

											<ul id="myUL">
												<li>
													<span class="caret">
														<input type="checkbox" value="11" name="main_menu_id[]">
														Find Task Intern </span>
													<ul class="nested">

													</ul>

												</li>

											</ul>

											<ul id="myUL">
												<li>
													<span class="caret">
														<input type="checkbox" value="12" name="main_menu_id[]">
														Daily Report Intern </span>
													<ul class="nested">
														<li>
															<input type="checkbox" value="12$37" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Add Daily Report
														</li>

														<li>
															<input type="checkbox" value="12$38" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															View Daily Report
														</li>


													</ul>

												</li>

											</ul>

											<ul id="myUL">
												<li>
													<span class="caret">
														<input type="checkbox" value="13" name="main_menu_id[]">
														Claim Certificate Intern </span>
													<ul class="nested">

													</ul>

												</li>

											</ul>

											<ul id="myUL">
												<li>
													<span class="caret">
														<input type="checkbox" value="20" name="main_menu_id[]">
														Template Master </span>
													<ul class="nested">
														<li>
															<input type="checkbox" value="20$39" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Preregistration Template
														</li>

														<li>
															<input type="checkbox" value="20$40" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Orientation Template
														</li>

														<li>
															<input type="checkbox" value="20$41" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Post Registration Template
														</li>

														<li>
															<input type="checkbox" value="20$42" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Send Login Credentials Template
														</li>


													</ul>

												</li>

											</ul>

											<ul id="myUL">
												<li>
													<span class="caret">
														<input type="checkbox" value="21" name="main_menu_id[]">
														Post Registration Form </span>
													<ul class="nested">
														<li>
															<input type="checkbox" value="21$43" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Volunteer Form
														</li>

														<li>
															<input type="checkbox" value="21$44" id="sub_menu_id
																1.1" name="sub_menu_id[]" data-val="1-1-1">
															Intern Form
														</li>


													</ul>

												</li>

											</ul>

											<ul id="myUL">
												<li>
													<span class="caret">
														<input type="checkbox" value="22" name="main_menu_id[]">
														test1 </span>
													<ul class="nested">

													</ul>

												</li>

											</ul>

											<ul id="myUL">
												<li>
													<span class="caret">
														<input type="checkbox" value="23" name="main_menu_id[]">
														Daily Report </span>
													<ul class="nested">

													</ul>

												</li>

											</ul>





										</div>
									</div>
								</div>

							</div>
							<div class="col-lg-6 col-md-6">
								<div class="">
									<div class="main-card mb-3 card">
										<div class="card-body">
											<h5 class="card-title">Mapping Role-Permission</h5>
											<ul id="myUL">
												<div class="form-group col-md-12 mb-3">
													<label class="form-label">Select Role:</label>
													<select class="select2 form-select" data-placeholder="Select Status">
														<option label="Choose one">
														</option>
														<option value="">Select Role</option>


														<option value="1">Admin</option>


														<option value="2">State Manager</option>


														<option value="3">Asst. Admin</option>


														<option value="4">Regional Manager</option>


														<option value="5">Head Office ( HO )</option>


														<option value="6">Customer Service Representative</option>


														<option value="7">Senior Manager</option>


														<option value="8">Manager</option>


														<option value="9">Assistant Manager</option>


														<option value="10">Senior Executive </option>


														<option value="11">General Manager</option>


													</select>
												</div>
											</ul>
											<div class="col-md-6">
												<label>Choose Permissions:</label>

												<div class="checkbox checkbox-primary checkbox-info" style="margin-left:20px">

													<input type="checkbox" value="1" name="Permission[]"><label style="margin-left: 10px;">Create</label>

												</div>


												<div class="checkbox checkbox-primary checkbox-info" style="margin-left:20px">

													<input type="checkbox" value="2" name="Permission[]"><label style="margin-left: 10px;">View</label>

												</div>


												<div class="checkbox checkbox-primary checkbox-info" style="margin-left:20px">

													<input type="checkbox" value="3" name="Permission[]"><label style="margin-left: 10px;">Delete</label>

												</div>


												<div class="checkbox checkbox-primary checkbox-info" style="margin-left:20px">

													<input type="checkbox" value="4" name="Permission[]"><label style="margin-left: 10px;">Update</label>

												</div>


												<div class="checkbox checkbox-primary checkbox-info" style="margin-left:20px">

													<input type="checkbox" value="5" name="Permission[]"><label style="margin-left: 10px;">State Master</label>

												</div>

											</div>
											<input type="submit" value="Submit" class="mt-1 btn btn-primary mt-3 pull-right" id="map_button" />
										</div>
									</div>
								</div>

							</div>

						</div>

			</form>
		</div>

		<div class="row clearfix">


			<div class="col-md-12">
				<div class="card p-4 mb-4">
					<h6 class="card-title mb-4">Role Master</h6>

					<table id="myTable" class="table display dataTable table-hover" style="width:100%">
						<thead>
							<tr>
								<th>Sr.no</th>
								<th>Role Name</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr class="odd">
								<td>1</td>
								<td>Admin</td>
								<td><span class="badge bg-primary  me-1 mb-1 mt-1">Active</span></td>
								<td><a href="#"><i class="fa fa-edit"></i></a></td>
							</tr>


						</tbody>
					</table>
				</div> <!-- .card end -->

			</div>
		</div>
	</div>

</div>
</div>

<script>
	var toggler = document.getElementsByClassName("caret");
	var i;
	for (i = 0; i < toggler.length; i++) {
		toggler[i].addEventListener("click", function() {
			this.parentElement.querySelector(".nested").classList.toggle("active");
			this.classList.toggle("caret-down");
		});
	}
	$(document).ready(function() {
		$("#map_button").click(function() {
			var url = "https://pravasibandhu.org/map-role-permission-form-save"; // the script where you handle the form input.
			$.ajax({
				type: "POST",
				url: url,
				data: $("#map_role_form").serialize(), // serializes the form's elements.
				success: function(data) {
					if (data == 0) {
						$('.alert').css('display', 'block');
						$('.alert').fadeIn().fadeOut(2000);
					}
					if (data == 1) {
						location.reload();
					}
				}
			});
			e.preventDefault(); // avoid to execute the actual submit of the form
		});
	});
</script>



<!-- Mirrored from wrraptheme.com/templates/lucid/hr/bs5/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Nov 2023 09:03:58 GMT -->
<%-- #RevizeProperties USE REVIZE MENU (DOCUMENT PROPERTIES) TO EDIT DATA BELOW:
status=new
options=
server=localhost:80
projectName=
label=
location=
version=
docType=editpage
subType=form
moduleName=
fieldName=
channels=|
description=
--%><%-- #BeginRZ-PageHeader --%><%@
page language="java" %><%
String rzmodule = "imagelink";%><%@
include file="/util/setup_editform_header.jsp"
%><%-- #EndRZ-PageHeader --%>

<%@ include file="/plugins/_editforms_/includes/jobslist-editform/header.jsp"%>
		
		<div id="revize-main">
		
			<form id="rz-form">
			
				<div class="rz-form-title">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
							
								<h1>Edit Job Posting</h1>
								<div id="rz-right-btns" class="clearfix">
									<div class="btn-group rz-btn-group" id="publish-btn-dropdown">
									  <button type="button" class="btn dropdown-toggle btn-primary rz-btn rz-btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    Publish <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu dropdown-menu-right rz-dropdown-menu rz-dropdown-menu-right">
									    <li class="dropdown-header rz-dropdown-header"><span class="h3 rz-h3">Ready to publish?</span> <span class="rz-p">Dot your I's cross your T's then click save</span></li>
									    <li><a href="#">Save</a></li>
									    <li><a href="#">Save as draft</a></li>
									    <li><a href="#">Cancel</a></li>
									  </ul>
									</div>		
									<div id="history-btn">					
										<a href="" class="btn btn-success rz-btn rz-btn-success">History</a>
									</div>
								</div><!-- /#right-btns -->
						
<%@ include file="/plugins/_editforms_/includes/jobslist-editform/tabs.jsp"%>
								
							</div><!-- /.col-md-12 -->
						</div><!-- /.row -->
					</div><!-- /.container -->
				</div><!-- /.rz-form-title -->

				<div class="form-container">
								
					<div class="container">
						<div class="row">
							<div class="col-md-12">
		
							  <div class="tab-content rz-tab-content">
							    <div role="tabpanel" class="tab-pane rz-tab-pane fade in active" id="edit-tab">
								    
								    <div class="edit-form-fields">
									    
										  <div class="form-group form-group-lg rz-form-group rz-form-group-lg" id="title-sequence-group">
											  <div class="row">
												  <div class="col-sm-6">
												    <label for="jobTitle">Job Title <small></small></label>
												    <input type="text" class="form-control rz-form-control" id="jobTitle" placeholder="Enter job title here">
												    <span class="help-block rz-help-block"></span>												    
											    </div><!-- /.col-sm-6 -->
		
												  <div class="col-sm-6">
												    <label for="sequencenumber">Sequence Number</label>
											      <input type="text" class="form-control rz-form-control" id="sequencenumber">
												    <span class="help-block rz-help-block"></span>									      
											    </div><!-- /.col-sm-6 -->
										    </div><!-- /.row -->
										  </div><!-- /.form-group -->	
										  										  										  	
										  <div class="form-group form-group-lg rz-form-group rz-form-group-lg" id="activation-expiration-group">
											  <div class="row">
												  <div class="col-sm-6">
												    <label for="activationondate">Activation Date</label>
												    <div class="input-group form-group-lg rz-input-group rz-form-group-lg" id="activation-group">
														<input type="text" class="form-control datepicker-here rz-datepicker-here rz-form-control" data-timepicker="true" data-language="en" data-inputmask="'alias': 'date'" placeholder="dd/mm/yyyy HH:MM am" readonly="readonly" id="activationondate">
												      <div class="input-group-addon rz-input-group-addon"><label for="activationondate"><img src="../../plugins/_editforms_/images/activation-icon.png" alt="Activation Date"></label></div>
												    </div>
											    </div><!-- /.col-sm-6 -->
		
												  <div class="col-sm-6">
												    <label for="expirationondate">Expiration Date</label>
												    <div class="input-group form-group-lg rz-input-group rz-form-group-lg" id="expiration-group">
												      <input type="text" class="form-control datepicker-here rz-datepicker-here rz-form-control" data-timepicker="true" data-language="en" data-inputmask="'alias': 'date'" placeholder="dd/mm/yyyy HH:MM am" readonly="readonly" id="expirationondate">
												      <div class="input-group-addon rz-input-group-addon"><label for="expirationondate"><img src="../../plugins/_editforms_/images/expiration-icon.png" alt="Expiration Date"></label></div>
												    </div>
											    </div><!-- /.col-sm-6 -->
										    </div><!-- /.row -->
										  </div><!-- /.form-group -->			 

											<div id="activation-expiration-group">									  										  	
											  <div class="row">
												  <div class="col-sm-6">

													  <div class="form-group form-group-lg rz-form-group rz-form-group-lg revize-textarea" id="jobDescription">
													    <label for="jobDescriptionTextarea">Job Description <small></small></label>
													    <!-- replace with revize text editor and keep id="jobDescriptionTextarea" -->
													    <textarea class="form-control form-control" id="jobDescriptionTextarea" rows="20"></textarea>
													    <!-- replace with revize text editor and keep id="jobDescriptionTextarea" -->
													    <span class="help-block rz-help-block"></span>
													  </div>
										  									  												    
											    </div><!-- /.col-sm-6 -->
											    
												  <div class="col-sm-6">

													  <div class="form-group form-group-lg rz-form-group rz-form-group-lg revize-textarea" id="jobContact">
													    <label for="jobContactTextarea">Job Contact <small></small></label>
													    <!-- replace with revize text editor and keep id="jobContactTextarea" -->													    
													    <textarea class="form-control form-control" id="jobContactTextarea" rows="20"></textarea>
													    <!-- replace with revize text editor and keep id="jobContactTextarea" -->													    
													    <span class="help-block rz-help-block"></span>
													  </div>
													  												  
											    </div><!-- /.col-sm-6 -->
										    </div><!-- /.row -->	
									    </div><!-- activation-expiration-group -->
		
								    </div><!-- /.edit-form-fields -->
	
										<div class="rz-action-btns">
											<a href="#" class="btn btn-default rz-btn rz-btn-default rz-btn-save">Save</a>
											<a href="#" class="btn btn-default rz-btn rz-btn-default rz-btn-savedraft">Save As Draft</a>
											<a href="#" class="btn btn-default rz-btn rz-btn-default rz-btn-cancel">Cancel</a>
											<a href="#" class="btn btn-default rz-btn rz-btn-default rz-btn-history">History</a>
										</div><!-- /.buttons -->
										
							    </div><!-- /#edit-tab -->
	
	<%@ include file="/plugins/_editforms_/includes/jobslist-editform/tab-panels.jsp"%>
		
							  </div><!-- /tab-content -->				  
		
					    </div><!-- /.col-md-12 -->
				    </div><!-- /.row -->
			    </div><!-- /.container -->					

				</div><!-- /.form-container -->
											
			</form>

		</div><!-- /#revize-main -->
		
	</div><!-- /#revize-main-wrap -->

<%@ include file="/plugins/_editforms_/includes/jobslist-editform/footer.jsp"%>
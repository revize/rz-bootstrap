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

<%@ include file="/plugins/_editforms_/includes/agenda-minutes-detail-editform/header.jsp"%>
		
		<div id="revize-main">
		
			<form id="rz-form">
			
				<div class="rz-form-title">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
							
								<h1>Agenda Minutes Details</h1>
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
						
<%@ include file="/plugins/_editforms_/includes/agenda-minutes-detail-editform/tabs.jsp"%>
								
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
									    
									    <div class="row">
										    
										    <div class="col-md-6">

												  <div class="form-group form-group-lg rz-form-group rz-form-group-lg">
												    <label for="agendaDate">Date <small></small></label>
												    <input type="text" class="form-control rz-form-control rz-datepicker-here" data-language="en" data-inputmask="'alias': 'date'" placeholder="dd/mm/yyyy" id="agendaDate">
												  </div>
												  
											  </div><!-- /.col-md-6 -->
											  
											  <div class="col-md-6">
											  
												  <div class="form-group form-group-lg rz-form-group rz-form-group-lg">
												    <label for="agendaHeader">Header<small></small></label>
												    <input type="text" class="form-control rz-form-control" id="agendaHeader">
												  </div>
											  
											  </div>
											  
										  </div><!-- /.row -->

									    <div class="row">
										    
										    <div class="col-md-6">

												  <div class="form-group form-group-lg rz-form-group rz-form-group-lg">
												    <label for="agendaUpload">Agenda<small></small></label>
												    <input type="text" class="form-control rz-form-control" id="agendaUpload" readonly>
												    <p class="help-block"><a href="" class="btn btn-link rz-btn rz-btn-purple btn-block">Click here to Upload File</a></p>
												  </div>
												  
											  </div><!-- /.col-md-6 -->
											  
											  <div class="col-md-6">
											  
												  <div class="form-group form-group-lg rz-form-group rz-form-group-lg">
												    <label for="packetUpload">Packet<small></small></label>
												    <input type="text" class="form-control rz-form-control" id="packetUpload" readonly>
												    <p class="help-block"><a href="" class="btn btn-link rz-btn rz-btn-purple btn-block">Click here to Upload File</a></p>
												  </div>
											  
											  </div>
											  
										  </div><!-- /.row -->

									    <div class="row">
										    
										    <div class="col-md-6">

												  <div class="form-group form-group-lg rz-form-group rz-form-group-lg">
												    <label for="minutesUpload">Minutes<small></small></label>
												    <input type="text" class="form-control rz-form-control" id="minutesUpload" readonly>
												    <p class="help-block"><a href="" class="btn btn-link rz-btn rz-btn-purple btn-block">Click here to Upload File</a></p>
												  </div>
												  
											  </div><!-- /.col-md-6 -->
											  
											  <div class="col-md-6">
											  
												  <div class="form-group form-group-lg rz-form-group rz-form-group-lg">
												    <label for="presentationsUpload">Presentations<small></small></label>
												    <input type="text" class="form-control rz-form-control" id="presentationsUpload" readonly>
												    <p class="help-block"><a href="" class="btn btn-link rz-btn rz-btn-purple btn-block">Click here to Upload File</a></p>
												  </div>
											  
											  </div><!-- /.col-md-6 -->
											  											  
										  </div><!-- /.row -->										  

									    <div class="row">
										    
										    <div class="col-md-6">

												  <div class="form-group form-group-lg rz-form-group rz-form-group-lg">
												    <label for="financialsUpload">Financials<small></small></label>
												    <input type="text" class="form-control rz-form-control" id="financialsUpload" readonly>
												    <p class="help-block"><a href="" class="btn btn-link rz-btn rz-btn-purple btn-block">Click here to Upload File</a></p>
												  </div>
												  												  
											  </div><!-- /.col-md-6 -->

										    <div class="col-md-6">
											  
												  <div class="form-group form-group-lg rz-form-group rz-form-group-lg">
												    <label for="videoInput">Video<small></small></label>
												    <input type="text" class="form-control rz-form-control" id="videoInput">
												  </div>

											  </div><!-- /.col-md-6 -->
												  											  
										  </div><!-- /.row -->
			
									    <div class="row">
										    
										    <div class="col-md-12">

												  <div class="form-group form-group-lg rz-form-group rz-form-group-lg revize-textarea">
												    <label for="additionalContent">Additional Content<small></small></label>
												    <!-- replace with revize text editor and keep id="additionalContent" -->
												    <textarea class="form-control form-control" id="additionalContent" rows="10"></textarea>
												    <!-- replace with revize text editor and keep id="additionalContent" -->												    
												  </div>
												  
											  </div><!-- /.col-md-12 -->
											  
										  </div><!-- /.row -->

								    <div class="rz-radio">
								    	
								    	<label>Send Email Notifications</label>
											<label class="radio-inline">
											  <input type="radio" name="inlineRadioOptions" id="inlineRadioYes" value="optionYes"> Yes
											</label>
											<label class="radio-inline">
											  <input type="radio" name="inlineRadioOptions" id="inlineRadioNo" value="optionNo"> No
											</label>
	
									  </div><!-- /.rz-radio -->
									  			
								    </div><!-- /.edit-form-fields -->
	
										<div class="rz-action-btns">
											<a href="#" class="btn btn-default rz-btn rz-btn-default rz-btn-save">Save</a>
											<a href="#" class="btn btn-default rz-btn rz-btn-default rz-btn-draft">Save as Draft</a>
											<a href="#" class="btn btn-default rz-btn rz-btn-default rz-btn-cancel">Cancel</a>
											<a href="#" class="btn btn-default rz-btn rz-btn-default rz-btn-history">History</a>
										</div><!-- /.buttons -->
										
							    </div><!-- /#edit-tab -->
	
<%@ include file="/plugins/_editforms_/includes/agenda-minutes-detail-editform/tab-panels.jsp"%>
		
							  </div><!-- /tab-content -->				  
		
					    </div><!-- /.col-md-12 -->
				    </div><!-- /.row -->
			    </div><!-- /.container -->					

				</div><!-- /.form-container -->
											
			</form>

		</div><!-- /#revize-main -->
		
	</div><!-- /#revize-main-wrap -->

<%@ include file="/plugins/_editforms_/includes/agenda-minutes-detail-editform/footer.jsp"%>
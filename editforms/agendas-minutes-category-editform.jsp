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
description=Image Link Editform
--%><%-- #BeginRZ-PageHeader --%><%@
page language="java" %><%
String rzmodule = "imagelink";%><%@
include file="/util/setup_editform_header.jsp"
%><%-- #EndRZ-PageHeader --%>
<%@ include file="/plugins/_editforms_/includes/agendas-minutes-category-editform/header.jsp"%>
		
		<div id="revize-main">
		
			<form id="rz-form">
			
				<div class="rz-form-title">
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-md-offset-2">

								<h1>Agenda Category</h1>
								<div id="rz-right-btns">
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
										<a href="" class="btn btn-success rz-btn rz-btn-success">Cancel</a>
									</div>
								</div><!-- /#right-btns -->
						
<%@ include file="/plugins/_editforms_/includes/agendas-minutes-category-editform/tabs.jsp"%>
								
							</div><!-- /.col-md-8 -->
						</div><!-- /.row -->
					</div><!-- /.container -->
				</div><!-- /.rz-form-title -->

				<div class="form-container">
								
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
						    		
							  <div class="tab-content rz-tab-content">
							    <div role="tabpanel" class="tab-pane rz-tab-pane fade in active" id="edit-tab">
									    
								    <div class="edit-form-fields">

										  <div class="form-group form-group-lg rz-form-group rz-form-group-lg">
										    <label for="sequenceNumberInput">Sequence Number <small></small></label>
										    <input type="text" class="form-control rz-form-control" id="sequenceNumberInput">
										  </div>
											  			
										  <div class="form-group form-group-lg rz-form-group rz-form-group-lg">
										    <label for="categoryInput">Category Name<small></small></label>
										    <input type="text" class="form-control rz-form-control" id="categoryInput">
										  </div>

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
	
	<%@ include file="/plugins/_editforms_/includes/agendas-minutes-category-editform/tab-panels.jsp"%>
		
							  </div><!-- /tab-content -->				  
		
					    </div><!-- /.col-md-8 -->
				    </div><!-- /.row -->
			    </div><!-- /.container -->					

				</div><!-- /.form-container -->
											
			</form>

		</div><!-- /#revize-main -->
		
	</div><!-- /#revize-main-wrap -->

<%@ include file="/plugins/_editforms_/includes/agendas-minutes-category-editform/footer.jsp"%>
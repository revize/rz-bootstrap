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

<%@ include file="/plugins/_editforms_/includes/business-type-editform/header.jsp"%>
		
		<div id="revize-main">
		
			<form id="rz-form">
			
				<div class="rz-form-title">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-md-offset-3">
							
								<h1 class="clearfix">Add Business Type</h1><br>
								<div class="clearfix"></div>
								<div id="rz-right-btns" class="pull-left">	
									<div id="add-item-btn">					
										<a href="" class="btn btn-success rz-btn rz-btn-primary">Save</a>
									</div>
									<div id="exit-btn">					
										<a href="" class="btn btn-success rz-btn rz-btn-danger">Cancel</a>
									</div>
								</div><!-- /#right-btns -->
						
<%@ include file="/plugins/_editforms_/includes/business-type-editform/tabs.jsp"%>
								
							</div><!-- /.col-md-6 -->
						</div><!-- /.row -->
					</div><!-- /.container -->
				</div><!-- /.rz-form-title -->

				<div class="form-container">
								
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-md-offset-3">
						    		
							  <div class="tab-content rz-tab-content">
							    <div role="tabpanel" class="tab-pane rz-tab-pane fade in active" id="edit-tab">
									    
								    <div class="edit-form-fields">

										  <div class="form-group form-group-lg rz-form-group rz-form-group-lg">
										    <label for="businessType">Business Type <small></small></label>
										    <input type="text" class="form-control rz-form-control" id="businessType">
										  </div>
											  			
								    </div><!-- /.edit-form-fields -->
	
										<div class="rz-action-btns">
											<a href="#" class="btn btn-default rz-btn rz-btn-default rz-btn-save">Save</a>
											<a href="#" class="btn btn-default rz-btn rz-btn-default rz-btn-cancel">Cancel</a>
										</div><!-- /.buttons -->
										
							    </div><!-- /#edit-tab -->
	
	<%@ include file="/plugins/_editforms_/includes/business-type-editform/tab-panels.jsp"%>
		
							  </div><!-- /tab-content -->				  
		
					    </div><!-- /.col-md-12 -->
				    </div><!-- /.row -->
			    </div><!-- /.container -->					

				</div><!-- /.form-container -->
											
			</form>

		</div><!-- /#revize-main -->
		
	</div><!-- /#revize-main-wrap -->

<%@ include file="/plugins/_editforms_/includes/business-type-editform/footer.jsp"%>
<%-- #RevizeProperties USE REVIZE MENU (DOCUMENT PROPERTIES) TO EDIT DATA BELOW:
status=new
options=
server=localhost:80
projectName=
label=
location=
version=
docType=editpage
subType=list
moduleName=
fieldName=
channels=|
description=Image Link Editlist
--%><%-- #BeginRZ-PageHeader --%><%@
page language="java" %><%@
include file="/util/setup_editlist_header.jsp"
%><%-- #EndRZ-PageHeader --%>
<%@ include file="/plugins/_editforms_/includes/business-type-editlist/header.jsp"%>
		
		<div id="revize-main">
		
			<form id="rz-form">
			
				<div class="rz-form-title">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-md-offset-3">
							
								<h1>Business Types List</h1>
								<div id="rz-right-btns" class="clearfix pull-left">	
									<div id="add-item-btn">					
										<a href="" class="btn btn-success rz-btn rz-btn-primary">Add A New Business Type</a>
									</div>
									<div id="exit-btn">					
										<a href="" class="btn btn-success rz-btn rz-btn-danger">Exit Page</a>
									</div>
								</div><!-- /#right-btns -->
						
<%@ include file="/plugins/_editforms_/includes/business-type-editlist/tabs.jsp"%>
								
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
	
									  <div class="rz-editlist">
											<div class="table-responsive">
											  <table class="table table-bordered table-hover rz-table">
												  <thead>
													  <tr>
													    <th>Type of Business</th>
													    <th>Edit</th>
												    </tr>
												  </thead>
												  
												  <tbody>
													  <tr>
													    <td>Human Resources</td>												    													    													    
													    <td class="rz-edit-cell"> 
														    <a href="" class="btn btn-success btn-sm rz-btn rz-btn-success rz-btn-sm rz-btn-round" data-toggle="tooltip" data-placement="top" title="Click to edit this item"><i class="glyphicon glyphicon-pencil"></i></a>
														    <a href="" class="btn btn-danger btn-sm rz-btn rz-btn-danger rz-btn-sm rz-btn-round" data-toggle="tooltip" data-placement="top" title="Click to delete item"><i class="glyphicon glyphicon-remove"></i></a>													    
													    </td>
													  <tr>
													    <td>Human Resources</td>												    													    													    
													    <td class="rz-edit-cell"> 
														    <a href="" class="btn btn-success btn-sm rz-btn rz-btn-success rz-btn-sm rz-btn-round" data-toggle="tooltip" data-placement="top" title="Click to edit this item"><i class="glyphicon glyphicon-pencil"></i></a>
														    <a href="" class="btn btn-danger btn-sm rz-btn rz-btn-danger rz-btn-sm rz-btn-round" data-toggle="tooltip" data-placement="top" title="Click to delete item"><i class="glyphicon glyphicon-remove"></i></a>													    
													    </td>												    
													  <tr>
													    <td>Human Resources</td>												    													    													    
													    <td class="rz-edit-cell"> 
														    <a href="" class="btn btn-success btn-sm rz-btn rz-btn-success rz-btn-sm rz-btn-round" data-toggle="tooltip" data-placement="top" title="Click to edit this item"><i class="glyphicon glyphicon-pencil"></i></a>
														    <a href="" class="btn btn-danger btn-sm rz-btn rz-btn-danger rz-btn-sm rz-btn-round" data-toggle="tooltip" data-placement="top" title="Click to delete item"><i class="glyphicon glyphicon-remove"></i></a>													    
													    </td>
													  </tr>	
												  </tbody>
								  							  
											  </table>
											</div>					    
									  </div><!-- /.rz-editlist -->
						  
										<div class="rz-action-btns">
											<a href="#" class="btn btn-default rz-btn rz-btn-default rz-btn-exit">Exit Page</a>
										</div><!-- /.buttons -->
										
							    </div><!-- /#edit-tab -->
	
	<%@ include file="/plugins/_editforms_/includes/business-type-editlist/tab-panels.jsp"%>
		
							  </div><!-- /tab-content -->				  
		
					    </div><!-- /.col-md-6 -->
				    </div><!-- /.row -->
			    </div><!-- /.container -->		
		    			
				</div><!-- /.form-container -->	
							
			</form>

		</div><!-- /#revize-main -->
		
	</div><!-- /#revize-main-wrap -->

<%@ include file="/plugins/_editforms_/includes/business-type-editlist/footer.jsp"%>
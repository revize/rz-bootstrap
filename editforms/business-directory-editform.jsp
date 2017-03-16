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

<%@ include file="/plugins/_editforms_/includes/business-directory-editform/header.jsp"%>
		
		<div id="revize-main">
		
			<form id="rz-form">
			
				<div class="rz-form-title">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
							
								<h1>Edit Business</h1>
								<div id="rz-right-btns" class="clearfix">	
									<div id="add-item-btn">					
										<a href="" class="btn btn-success rz-btn rz-btn-primary">Save</a>
									</div>
									<div id="exit-btn">					
										<a href="" class="btn btn-success rz-btn rz-btn-danger">Cancel</a>
									</div>
								</div><!-- /#right-btns -->
						
<%@ include file="/plugins/_editforms_/includes/business-directory-editform/tabs.jsp"%>
								
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

										<div class="alert alert-info alert-dismissible rz-alert rz-alert-info fade in">
									    <button type="button" class="close alert-dismiss" data-dismiss="alert" aria-label="Close"><span aria-hidden="true" class="glyphicon glyphicon-remove"></span></button>
									    <div class="alert-image"><img src="../../plugins/_editforms_/images/alert-icon.png" alt="alert"></div><p>All Fields are Mandatory </p>
								    </div>
								    									    
								    <div class="edit-form-fields">
									    
									    <div class="row">
										    
										    <div class="col-md-6">

												  <div class="form-group form-group-lg rz-form-group rz-form-group-lg">
												    <label for="typeofBusiness">Type of Business <small></small></label>
												    <select multiple="" class="rz-select-multiple" id="typeofBusiness">
													    <option>Type 1</option>
													    <option>Type 2</option>
													    <option>Type 3</option>											    											    
												    </select>
												    <span class="help-block rz-help-block">Hold ctrl key down to select or un select multiple types <a href="business-directory-editlist.jsp">Update Types</a></span>
												  </div>
												  
											  </div><!-- /.col-md-6 -->
											  
											  <div class="col-md-6">
											  
												  <div class="form-group form-group-lg rz-form-group rz-form-group-lg">
												    <label for="businessName">Business Name<small></small></label>
												    <input type="text" class="form-control rz-form-control" id="businessName">
												  </div>
											  
											  </div>
											  
										  </div><!-- /.row -->

									    <div class="row">
										    
										    <div class="col-md-6">

												  <div class="form-group form-group-lg rz-form-group rz-form-group-lg">
												    <label for="buildingNumber">Building Number <small></small></label>
												    <input type="text" class="form-control rz-form-control" id="buildingNumber">
												  </div>
												  
											  </div><!-- /.col-md-6 -->
											  
											  <div class="col-md-6">
											  
												  <div class="form-group form-group-lg rz-form-group rz-form-group-lg">
												    <label for="address">Address<small></small></label>
												    <input type="text" class="form-control rz-form-control" id="address">
												  </div>
											  
											  </div>
											  
										  </div><!-- /.row -->

									    <div class="row">
										    
										    <div class="col-md-4">

												  <div class="form-group form-group-lg rz-form-group rz-form-group-lg">
												    <label for="city">City <small></small></label>
												    <input type="text" class="form-control rz-form-control" id="city">
												  </div>
												  
											  </div><!-- /.col-md-4 -->
											  
											  <div class="col-md-4">
											  
												  <div class="form-group form-group-lg rz-form-group rz-form-group-lg">
												    <label for="state">State<small></small></label>
												    <input type="text" class="form-control rz-form-control" id="state">
												  </div>
											  
											  </div><!-- /.col-md-4 -->

											  <div class="col-md-4">
											  
												  <div class="form-group form-group-lg rz-form-group rz-form-group-lg">
												    <label for="zip">Zip<small></small></label>
												    <input type="text" class="form-control rz-form-control" id="zip">
												  </div>
											  
											  </div><!-- /.col-md-4 -->
											  											  
										  </div><!-- /.row -->										  

									    <div class="row">
										    
										    <div class="col-md-6">

												  <div class="form-group form-group-lg rz-form-group rz-form-group-lg">
												    <label for="phone">Phone<small></small></label>
												    <input type="text" class="form-control rz-form-control" id="phone" data-inputmask="'mask': '999-999-9999'">
												  </div>
												  
											  </div><!-- /.col-md-6 -->
											  
											  <div class="col-md-6">
											  
												  <div class="form-group form-group-lg rz-form-group rz-form-group-lg">
												    <label for="fax">fax<small></small></label>
												    <input type="text" class="form-control rz-form-control" id="fax" data-inputmask="'mask': '999-999-9999'">
												  </div>
											  
											  </div>
											  
										  </div><!-- /.row -->

									    <div class="row">
										    
										    <div class="col-md-12">

												  <div class="form-group form-group-lg rz-form-group rz-form-group-lg">
												    <label for="phone">Website URL<small></small></label>
												    <input type="text" class="form-control rz-form-control" id="phone">
												  </div>
												  
											  </div><!-- /.col-md-12 -->
											  
										  </div><!-- /.row -->

									    <div class="row">
										    
										    <div class="col-md-12">

												  <div class="form-group form-group-lg rz-form-group rz-form-group-lg revize-textarea">
												    <label for="description">Description<small></small></label>
												    <!-- replace with revize text editor and keep id="pageContent" -->
												    <textarea class="form-control form-control" id="pageContent" rows="10"></textarea>
												    <!-- replace with revize text editor and keep id="pageContent" -->
												  </div>
												  
											  </div><!-- /.col-md-12 -->
											  
										  </div><!-- /.row -->
			
								    </div><!-- /.edit-form-fields -->
	
										<div class="rz-action-btns">
											<a href="#" class="btn btn-default rz-btn rz-btn-default rz-btn-save">Save</a>
											<a href="#" class="btn btn-default rz-btn rz-btn-default rz-btn-cancel">Cancel</a>
										</div><!-- /.buttons -->
										
							    </div><!-- /#edit-tab -->
	
	<%@ include file="/plugins/_editforms_/includes/business-directory-editform/tab-panels.jsp"%>
		
							  </div><!-- /tab-content -->				  
		
					    </div><!-- /.col-md-12 -->
				    </div><!-- /.row -->
			    </div><!-- /.container -->					

				</div><!-- /.form-container -->
											
			</form>

		</div><!-- /#revize-main -->
		
	</div><!-- /#revize-main-wrap -->

<%@ include file="/plugins/_editforms_/includes/business-directory-editform/footer.jsp"%>
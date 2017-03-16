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

<%@ include file="/plugins/_editforms_/includes/metadata-editform/header.jsp"%>
		
		<div id="revize-main">
		
			<form id="rz-form">
			
				<div class="rz-form-title">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
							
								<h1>Meta Data Options</h1>
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
						
<%@ include file="/plugins/_editforms_/includes/metadata-editform/tabs.jsp"%>
								
							</div><!-- /.col-md-12 -->
						</div><!-- /.row -->
					</div><!-- /.container -->
				</div><!-- /.rz-form-title -->

				<div class="form-container">
								
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
		
							  <div class="tab-content rz-tab-content">
							    <div role="tabpanel" class="tab-pane rz-tab-pane fade in active" id="edit-tab">
								    
								    <div class="edit-form-fields">
									    
										  <div class="form-group form-group-lg rz-form-group rz-form-group-lg" id="rz-page-title-group">
										    <label for="pageMateTitle">Page Title <small></small></label>
										    <input type="text" class="form-control rz-form-control" id="pageMateTitle" placeholder="Enter title here">
										    <span class="help-block rz-help-block">This is the meta page title. Learn more <a href="http://www.w3schools.com/tags/tag_meta.asp" target="_blank">here</a></span>
										  </div>								    	
										  										  	
										  <div class="row">
											  <div class="col-sm-6">

												  <div class="form-group form-group-lg rz-form-group rz-form-group-lg revize-textarea" id="rz-keywords-textarea">
												    <label for="pageKeywords">Keywords <small></small></label>
												    <textarea class="form-control rz-form-control" id="pageKeywords" rows="5"></textarea>
										        <span class="help-block rz-help-block">You can learn more about this <a href="http://www.w3schools.com/tags/tag_meta.asp" target="_blank">here</a></span>
												  </div>
									  												    
										    </div><!-- /.col-sm-6 -->
	
											  <div class="col-sm-6">

												  <div class="form-group form-group-lg rz-form-group rz-form-group-lg revize-textarea" id="rz-description-textarea">
												    <label for="pageDescription">Description <small></small></label>
												    <textarea class="form-control rz-form-control" id="pageDescription" rows="5"></textarea>
										        <span class="help-block rz-help-block">You can learn more about this <a href="http://www.w3schools.com/tags/tag_meta.asp" target="_blank">here</a></span>
												  </div>	
									  
										    </div><!-- /.col-sm-6 -->
									    </div><!-- /.row -->								     

										  <div class="form-group form-group-lg rz-form-group rz-form-group-lg" id="rz-redirect-url">
										    <label for="redirectUrl">Redirect Url <small></small></label>
										    <input type="text" class="form-control rz-form-control" id="redirectUrl" placeholder="Enter Full Live URL Here starting with http://">
										    <span class="help-block rz-help-block"> "Please use the live site URL that starts with http://. Editing server URL can not be entered here " </span>
										  </div>		
										  										  		
								    </div><!-- /.edit-form-fields -->
	
										<div class="rz-action-btns">
											<a href="#" class="btn btn-default rz-btn rz-btn-default rz-btn-save">Save</a>
											<a href="#" class="btn btn-default rz-btn rz-btn-default rz-btn-savedraft">Save As Draft</a>
											<a href="#" class="btn btn-default rz-btn rz-btn-default rz-btn-cancel">Cancel</a>
											<a href="#" class="btn btn-default rz-btn rz-btn-default rz-btn-history">History</a>
										</div><!-- /.buttons -->	
										
							    </div><!-- /#edit-tab -->
	
	<%@ include file="/plugins/_editforms_/includes/metadata-editform/tab-panels.jsp"%>
		
							  </div><!-- /tab-content -->				  
		
					    </div><!-- /.col-md-10 -->
				    </div><!-- /.row -->
			    </div><!-- /.container -->					

				</div><!-- /.form-container -->
											
			</form>

		</div><!-- /#revize-main -->
		
	</div><!-- /#revize-main-wrap -->

<%@ include file="/plugins/_editforms_/includes/metadata-editform/footer.jsp"%>
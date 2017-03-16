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

<%@ include file="/plugins/_editforms_/includes/quick-link-editform/header.jsp"%>
		
		<div id="revize-main">
		
			<form id="rz-form">
			
				<div class="rz-form-title">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
							
								<h1>Edit Item</h1>
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
						
<%@ include file="/plugins/_editforms_/includes/quick-link-editform/tabs.jsp"%>
								
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
									    
										  <div class="form-group form-group-lg rz-form-group rz-form-group-lg">
										    <label for="sequenceNumber">Sequence Number<small></small></label>
										    <input type="text" class="form-control rz-form-control" id="sequenceNumber" placeholder="1">
										    <span class="help-block rz-help-block">The oder in which you would like this item to show up</span>
										  </div>

										  <div class="form-group form-group-lg rz-form-group rz-form-group-lg">
										    <label for="linkItem">Link <small></small></label>
										    <input type="text" class="form-control rz-form-control" id="linkItem" placeholder="http://YourLink.com">
										    <span class="help-block rz-help-block">Add a link to make this item clickable</span>
										  </div>

										  <div class="form-group form-group-lg rz-form-group rz-form-group-lg">
										    <label for="titleItem">Title <small></small></label>
										    <input type="text" class="form-control rz-form-control" id="titleItem" placeholder="Enter title here">
										    <span class="help-block rz-help-block">Title of this item</span>
										  </div>

										  <div class="form-group form-group-lg rz-form-group rz-form-group-lg">
										    <label for="captionItem">Caption/Subtitle <small></small></label>
										    <input type="text" class="form-control rz-form-control" id="captionItem" placeholder="Enter caption here">
										    <span class="help-block rz-help-block">This is the Caption or subtitle of the item</span>
										  </div>

											<div class="alert alert-info alert-dismissible rz-alert rz-alert-info fade in">
										    <button type="button" class="close alert-dismiss" data-dismiss="alert" aria-label="Close"><span aria-hidden="true" class="glyphicon glyphicon-remove"></span></button>
										    <div class="alert-image"><img src="../../plugins/_editforms_/images/alert-icon.png" alt="alert"></div><p><strong>Important: Please upload images of width 1920px and Height 740px.</strong> If you upload any picture that does not conform to this size specification, the picture will not display properly on your website. Therefore, you need to crop/resize your picture on your computer using an image editor tool like PhotoShop or any other free online image resizing tool. Please keep in mind that Revize CMS Software does not automatically crop or resize picture for this image area. Revize provides image cropping service as an additional service.</p>
									    </div>
									    
									    <div id="rz-img" class="clearfix">
										    <div class="rz-image" data-featherlight="../../plugins/_editforms_/images/placeholder.png" style="background:url(../../plugins/_editforms_/images/placeholder.png) center center no-repeat;"><span class="rz-zoom"><i class="glyphicon glyphicon-search
	"></i></span></div>
												<a href="" class="btn btn-success rz-btn rz-btn-success">Change Image</a>
									    </div><!-- /#rz-news-img -->
			
								    </div><!-- /.edit-form-fields -->
	
										<div class="rz-action-btns">
											<a href="#" class="btn btn-default rz-btn rz-btn-default rz-btn-save">Save</a>
											<a href="#" class="btn btn-default rz-btn rz-btn-default rz-btn-savedraft">Save As Draft</a>
											<a href="#" class="btn btn-default rz-btn rz-btn-default rz-btn-cancel">Cancel</a>
											<a href="#" class="btn btn-default rz-btn rz-btn-default rz-btn-history">History</a>
										</div><!-- /.buttons -->
										
							    </div><!-- /#edit-tab -->
	
	<%@ include file="/plugins/_editforms_/includes/quick-link-editform/tab-panels.jsp"%>
		
							  </div><!-- /tab-content -->				  
		
					    </div><!-- /.col-md-12 -->
				    </div><!-- /.row -->
			    </div><!-- /.container -->					

				</div><!-- /.form-container -->
											
			</form>

		</div><!-- /#revize-main -->
		
	</div><!-- /#revize-main-wrap -->

<%@ include file="/plugins/_editforms_/includes/quick-link-editform/footer.jsp"%>
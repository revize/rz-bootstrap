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
<%@ include file="/plugins/_editforms_/includes/quick-links-editlist/header.jsp"%>
		
		<div id="revize-main">
		
			<form id="rz-form">
			
				<div class="rz-form-title">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
							
								<h1>Edit Items</h1>
								<div id="rz-right-btns" class="clearfix">	
									<div id="add-item-btn">					
										<a href="" class="btn btn-success rz-btn rz-btn-primary">Add A New Item</a>
									</div>
									<div id="exit-btn">					
										<a href="" class="btn btn-success rz-btn rz-btn-danger">Exit Page</a>
									</div>
								</div><!-- /#right-btns -->
						
<%@ include file="/plugins/_editforms_/includes/quick-links-editlist/tabs.jsp"%>
								
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
							    
							    <div class="alert alert-info alert-dismissible rz-alert rz-alert-info fade in">
							    <button type="button" class="close alert-dismiss" data-dismiss="alert" aria-label="Close"><span aria-hidden="true" class="glyphicon glyphicon-remove
"></span></button>
							    <div class="alert-image"><img src="../../plugins/_editforms_/images/alert-icon.png" alt="alert"></div><p><strong>Important: Please upload images of width 1920px and Height 740px.</strong> If you upload any picture that does not conform to this size specification, the picture will not display properly on your website. Therefore, you need to crop/resize your picture on your computer using an image editor tool like PhotoShop or any other free online image resizing tool. Please keep in mind that Revize CMS Software does not automatically crop or resize picture for this image area. Revize provides image cropping service as an additional service.</p></div>
	
									  <div class="rz-editlist">
											<div class="table-responsive">
											  <table class="table table-bordered table-hover rz-table">
												  <thead>
													  <tr>
													    <th class="rz-image-col">Image <span class="btn btn-deafult btn-sm rz-btn rz-btn-sm rz-btn-round rz-btn-tooltip" data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="The image to be displayed click the image to view the actual size">?</span></th>
													    <th class="rz-seq-col">Seq <span class="btn btn-deafult btn-sm rz-btn rz-btn-sm rz-btn-round  rz-btn-tooltip" data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="The order in which this item will be displayed">?</span></th>
													    <th class="rz-link-col">Link <span class="btn btn-deafult btn-sm rz-btn rz-btn-sm rz-btn-round rz-btn-tooltip" data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Optional - Add a link and make this item clickable">?</span></th>
													    <th class="rz-title-col">Title <span class="btn btn-deafult btn-sm rz-btn rz-btn-sm rz-btn-round rz-btn-tooltip" data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Title of the item">?</span></th>
													    <th class="rz-caption-col">Caption <span class="btn btn-deafult btn-sm rz-btn rz-btn-sm rz-btn-round rz-btn-tooltip" data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Caption or subtitle">?</span></th>
													    <th class="rz-edit-col">Edit <span class="btn btn-deafult btn-sm rz-btn rz-btn-sm rz-btn-round rz-btn-tooltip" data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Editing options">?</span></th>
												    </tr>
												  </thead>
												  
												  <tbody>
													  <tr>
													    <td class="rz-image-cell">
														    <div class="rz-image" data-featherlight="http://cms.revize.com/revize/repository/jeffersoncountytourism/sliderimage/slider2.jpg" style="background:url(http://cms.revize.com/revize/repository/jeffersoncountytourism/sliderimage/slider2.jpg) center center no-repeat;"><span class="rz-zoom"><i class="glyphicon glyphicon-search
"></i></span></div>
													    </td>
													    <td class="rz-seq-cell">
														    2
													    </td>
													    <td class="rz-link-cell">
														    <a href="">http://cms5.revize.com</a>
													    </td>
													    <td class="rz-title-cell">Title Here</td>
													    <td class="rz-caption-cell">Caption Here</td>
													    <td class="rz-edit-cell"> 
														    <a href="" class="btn btn-success btn-sm rz-btn rz-btn-success rz-btn-sm rz-btn-round" data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Click to edit this item"><i class="glyphicon glyphicon-pencil"></i></a>
														    <a href="" class="btn btn-danger btn-sm rz-btn rz-btn-danger rz-btn-sm rz-btn-round" data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Click to delete item"><i class="glyphicon glyphicon-remove"></i></a>													    
													    </td>
													  </tr>	
													  						  
													  <tr>
													    <td class="rz-image-cell">
														    <div class="rz-image" data-featherlight="http://cms.revize.com/revize/repository/jeffersoncountytourism/sliderimage/slider1.jpg" style="background:url(http://cms.revize.com/revize/repository/jeffersoncountytourism/sliderimage/slider1.jpg) center center no-repeat;"><span class="rz-zoom"><i class="glyphicon glyphicon-search
"></i></span></div>
													    </td>
													    <td class="rz-seq-cell">
														    2
													    </td>
													    <td class="rz-link-cell">
														    <a href="">http://cms5.revize.com/revize/augustame/editforms/quick-links-editlistrevize/augustame/editforms/quick-links-editlist</a>
													    </td>
													    <td class="rz-title-cell">Title Here Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</td>									    
													    <td class="rz-caption-cell">Caption Here Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</td>
													    <td class="rz-edit-cell"> 
														    <a href="" class="btn btn-success btn-sm rz-btn rz-btn-success rz-btn-sm rz-btn-round" data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Click to edit this item"><i class="glyphicon glyphicon-pencil"></i></a>
														    <a href="" class="btn btn-danger btn-sm rz-btn rz-btn-danger rz-btn-sm rz-btn-round" data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Click to delete item"><i class="glyphicon glyphicon-remove"></i></a>													    
													    </td>
													  </tr>	
					
													  <tr>
													    <td class="rz-image-cell">
														    <div class="rz-image" data-featherlight="http://cms.revize.com/revize/repository/jeffersoncountytourism/sliderimage/slider3.jpg" style="background:url(http://cms.revize.com/revize/repository/jeffersoncountytourism/sliderimage/slider3.jpg) center center no-repeat;"><span class="rz-zoom"><i class="glyphicon glyphicon-search
"></i></span></div>
													    </td>
													    <td class="rz-seq-cell">
														    2
													    </td>
													    <td class="rz-link-cell">
														    <a href="">http://cms5.revize.com</a>
													    </td>
													    <td class="rz-title-cell">Title Here</td>									    
													    <td class="rz-caption-cell">Caption Here</td>
													    <td class="rz-edit-cell"> 
														    <a href="" class="btn btn-success btn-sm rz-btn rz-btn-success rz-btn-sm rz-btn-round" data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Click to edit this item"><i class="glyphicon glyphicon-pencil"></i></a>
														    <a href="" class="btn btn-danger btn-sm rz-btn rz-btn-danger rz-btn-sm rz-btn-round" data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Click to delete item"><i class="glyphicon glyphicon-remove"></i></a>													    
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
	
	<%@ include file="/plugins/_editforms_/includes/quick-links-editlist/tab-panels.jsp"%>
		
							  </div><!-- /tab-content -->				  
		
					    </div><!-- /.col-md-10 -->
				    </div><!-- /.row -->
			    </div><!-- /.container -->		
		    			
				</div><!-- /.form-container -->	
							
			</form>

		</div><!-- /#revize-main -->
		
	</div><!-- /#revize-main-wrap -->

<%@ include file="/plugins/_editforms_/includes/quick-links-editlist/footer.jsp"%>
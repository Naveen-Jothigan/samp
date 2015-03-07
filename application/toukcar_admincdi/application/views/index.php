<script src="<?php echo site_url('application/assets/js/jquery.min.js') ?>"></script>

<div id="main" role="main">
	
<div id="content">
<div class="row">
		<!--<div class="col-xs-3 col-sm-7 col-md-7 col-lg-12 text-left" style="padding-bottom: 5px;">
		<a class="btn btn-success" href="adduser.php"><i class="fa  fa-plus" ></i> <span  class="hidden-mobile">Add New User</span></a>								
	</div>-->
</div>

<section id="widget-grid" class="">

	<!-- row -->
	<div class="row">

		<!-- NEW WIDGET START -->
		<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">


			<!-- Widget ID (each widget will need unique ID)-->
			<div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-1" data-widget-deletebutton="false" data-widget-editbutton="false">
				<!-- widget options:
				usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

				data-widget-colorbutton="false"
				data-widget-editbutton="false"
				data-widget-togglebutton="false"
				data-widget-deletebutton="false"
				data-widget-fullscreenbutton="false"
				data-widget-custombutton="false"
				data-widget-collapsed="true"
				data-widget-sortable="false"

				-->
				<header>
					<span class="widget-icon"> <i class="fa fa-user fa-lg"></i></span>
					<h2> Users </h2>
				</header>

				<!-- widget div-->
				<div>

					<!-- widget edit box -->
					<div class="jarviswidget-editbox">
						<!-- This area used as dropdown edit box -->

					</div>
					<!-- end widget edit box -->

					<!-- widget content -->
					<div class="widget-body no-padding">

						<table id="datatable_fixed_column" class="table table-striped table-bordered" width="100%">
	
<!--					        <thead>
								<tr>
									<th class="hasinput" style="width:17%">
										<input type="text" class="form-control" placeholder="User Name" />
									</th>
									
								<th class="hasinput" style="width:18%">
										
											<input class="form-control" placeholder=" Role" type="text">
									</th>
									
									<th class="hasinput" style="width:18%">
									</th>
									
								</tr>
					            <tr>
				                    <th data-class="expand">User Name</th>
						    
				                    
				                    <th data-hide="phone,tablet"> Role</th>
				                    <th data-hide="phone,tablet">Action</th>
					            </tr>
					        </thead>-->
						<thead>
				<tr>
					<th class="hasinput" style="width:5%">
						<input type="text" class="form-control" placeholder="User Name" />
					</th>
					
				<th class="hasinput" style="width:3%">
						
							<input class="form-control" placeholder=" Gender" type="text">
					</th>
				<th class="hasinput" style="width:2%">
						
							<input class="form-control" placeholder=" Email" type="text">
					</th>
				<th class="hasinput" style="width:1%">
						
							<input class="form-control" placeholder="" type="text">
					</th>
				<th class="hasinput" style="width:1%">
						
							<input class="form-control" placeholder="" type="text">
					</th>
				<th class="hasinput" style="width:1%">
						
							<input class="form-control" placeholder="" type="text">
					</th>
				<th class="hasinput" style="width:1%">
						
							<input class="form-control" placeholder="" type="text">
					</th>
				<th class="hasinput" style="width:1%">
						
							<input class="form-control" placeholder="" type="text">
					</th>
				<th class="hasinput" style="width:1%">
						
							<input class="form-control" placeholder="Status" type="text">
					</th>
				
					
					<!--<th class="hasinput" style="width:18%">
					</th>-->
					
				</tr>
		    <tr>
		    <th data-class="expand">User Name</th>
		    
		    
			<th data-hide="phone,tablet">Gender</th>
			<th data-hide="phone,tablet">Email</th>
			<th data-hide="phone,tablet">Email-st</th>
			<th data-hide="phone,tablet">Govt</th>
			<th data-hide="phone,tablet">Licen</th>
			<th data-hide="phone,tablet">RC</th>
			<th data-hide="phone,tablet">Insr</th>
			<th data-hide="phone,tablet">Final Status</th>		
			

		   
		    </tr>
		</thead>


<tbody>
					           <?php
						   $sql="select * from profile";
							$res=mysql_query($sql);
							while($row=mysql_fetch_array($res))		
						    {
							
							$id=$row['id'];
							
							//exit();
							//print_r($row);
						    ?>
						    <tr>
							<td><a data-target="#edit_category" onclick='javascript:editcategory(<?php echo $row['id']; ?>)' data-toggle="modal" ><?php echo $row['p_fname']; ?></a></td>
					                
							<td><?php echo $row['gender']; ?></td>
							<td><?php echo $row['p_email']; ?></td>
							<td><center><?php if($row['status']==1) {; ?>
							<span class="widget-icon"> <i class="fa fa-check fa-lg"></i></span><?php }else{?>
							<span class="widget-icon"> <i class="fa fa-times fa-lg"></i></span>
							<?php }?></center></td>
							
							
							<td><center><?php if($row['govtproof_status']==1) {; ?>
							<span class="widget-icon"> <i class="fa fa-check fa-lg"></i></span><?php }else{?>
							<span class="widget-icon"> <i class="fa fa-times fa-lg"></i></span>
							<?php }?></center></td>
							
							<td><center><?php if($row['licenimg_status']==1) {; ?>
							<span class="widget-icon"> <i class="fa fa-check fa-lg"></i></span><?php }else{?>
							<span class="widget-icon"> <i class="fa fa-times fa-lg"></i></span>
							<?php }?></center></td>
							
							<td><center><?php if($row['rcbkimg_status']==1) {; ?>
							<span class="widget-icon"> <i class="fa fa-check fa-lg"></i></span><?php }else{?>
							<span class="widget-icon"> <i class="fa fa-times fa-lg"></i></span>
							<?php }?></center></td>
							
							<td><center><?php if($row['car_insu_status']==1) {; ?>
							<span class="widget-icon"> <i class="fa fa-check fa-lg"></i></span><?php }else{?>
							<span class="widget-icon"> <i class="fa fa-times fa-lg"></i></span>
							<?php }?></center></td>
							
							
							
							
												
<td><?php  if(($row['status']==1)&&($row['govtproof_status']==1)&&($row['licenimg_status']==1)&&($row['licenimg_status']==1)&&($row['rcbkimg_status']==1)&&($row['car_insu_status']==1))
						{ ?>
		<a class="btn btn-success" href="#edit_category">Active</a>						
						<?php } else { ?>
		<a  href="#edit_category"  class="btn btn-danger">Not active</a>				
								<?php }?></td>
							
					            </tr>
					           <?php }?>
					           
					        </tbody>
					
						</table>

					</div>
					<!-- end widget content -->

				</div>
				<!-- end widget div -->

			</div>
			<!-- end widget -->

			

			

		</article>
		<!-- WIDGET END -->

	</div>

	<!-- end row -->

	<!-- end row -->

</section>
<!-- end widget grid -->
</div>
</div>

 <?php
	$sqld="select * from profile";
	     $result=mysql_query($sqld);
	     while($rowshow=mysql_fetch_array($result))		
	 {
	     
	     $id=$rowshow['id'];
	     
	     //exit();
	     //print_r($row);
	 ?>
<div class="modal fade" id="edit_category" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">	
	<div class="modal-dialog">
		<div class="modal-content">
			<form  id="category-form" class="smart-form" >
				<div class="modal-header" style="border-bottom: 1px solid #e5e5e5; min-height: 16.4286px; padding: 15px;">
					
					<button aria-hidden="true" data-dismiss="modal" class="close" type="button" onClick="onClickHandler(this)">
						<i class="fa  fa-times-circle "></i>
					</button>				
				</div>
				<fieldset>
					<label class="input">
						
						<input type="hidden" name="catid" id="catid" value="">
						<section class="col-lg-3">Govt Proof Image :</section>
						<section class="col-lg-8"  value="">
							<img class="col-lg-6" id="govtphoto" src="" height="150px" width="150px" />
			
							
						</section>
					</label>
					<footer>			
						<button type="button" class="btn btn-default" data-dismiss="modal">
							Cancel
						</button>
						
						<input id="" onclick='javascript:de_govtproof()' type="button" name="" value="Deactivate"  class="btn btn-warning"  />
						<input id="govt_proof" onclick='javascript:govtproof()' type="button" name="editcategory" value="Activate"  class="btn btn-success"  />
					</footer>
				</fieldset>
				<fieldset>
					<label class="input">
						<section class="col-lg-3">License Image :</section>
						<section class="col-lg-8"  value="">
							<img class="col-lg-6" id="licenphoto" src="" height="150px" width="150px">
							
						
							
						</section>
					</label>
					<footer>			
						<button type="button" class="btn btn-default" data-dismiss="modal">
							Cancel
						</button>
						<input id="" onclick='javascript:de_licen()' type="button" name="" value="Deactivate"  class="btn btn-warning"  />
						<input id="govt_proof" onclick='javascript:licenproof()' type="button" name="editcategory" value="Activate"  class="btn btn-success"/>
					</footer>
				</fieldset>
				<fieldset>
					<label class="input">
						<section class="col-lg-3">RC book Image :</section>
						<section class="col-lg-8"  value="">
							<img class="col-lg-6" id="rcphoto" src="" height="150px" width="150px"  />
							
					
							
						</section>
					</label>
				
					<footer>			
						<button type="button" class="btn btn-default" data-dismiss="modal">
							Cancel
						</button>
						<input id="" onclick='javascript:de_rcbook()' type="button" name="" value="Deactivate"  class="btn btn-warning"  />
						<input id="govt_proof" onclick='javascript:rcproof()' type="button" name="editcategory" value="Activate"  class="btn btn-success"  />
					</footer>
				</fieldset>
				<fieldset>
					<label class="input">
						<section class="col-lg-3">Car Insurance Image :</section>
						<section class="col-lg-8"  value="">
							<img class="col-lg-6" id="carphoto" src="" height="150px" width="150px" />
							
						
							
						</section>		
					</label>
				
					<footer>			
						<button type="button" class="btn btn-default" data-dismiss="modal">
							Cancel
						</button>
						<input id="" onclick='javascript:de_carinsu()' type="button" name="" value="Deactivate"  class="btn btn-warning" />
						<input id="govt_proof" onclick='javascript:carproof()' type="button" name="editcategory" value="Activate"  class="btn btn-success"  />
					</footer>
				</fieldset>
			</form>      
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
<?php } ?>



 
 
<script>
	function editcategory(id)
	{
	var catid=id;
	//alert(catid);
	$.ajax({
	type: "POST",
	dataType: "json",
	url: "<?=base_url()?>Toukadmin/show_img",
	data: 'catid='+ catid ,
	success: function (json) {
	
	
	var myImageURL = json.govtprof_img;
	
	document.getElementById("govtphoto").src ="<?=base_url()?>application/assets/upload/"+myImageURL;
	
	var myImageURL1 = json.licen_img;
	document.getElementById("licenphoto").src ="<?=base_url()?>application/assets/upload/"+myImageURL1;
	
	var myImageURL2 = json.rc1bk_img;
	document.getElementById("rcphoto").src ="<?=base_url()?>application/assets/upload/"+ myImageURL2;
	var myImageURL3 = json.car_insu_img;
	document.getElementById("carphoto").src = "<?=base_url()?>application/assets/upload/"+myImageURL3;
	
	$('#catid').val(json.catid);
	
	},
	
	error: function (xhr, ajaxOptions, thrownError) {
	alert(xhr.status);
	alert(thrownError);
	}
	
	});
}

function govtproof(){
		
	var catid=$('#catid').val();
	var cat='govtproof';
	//alert(catid);
	$.ajax({
	type: "POST",
	url: "<?=base_url()?>Toukadmin/status_submit",
	data: { catid: catid, cat: cat },
	success: function (returndata) {
		location.reload();
	//window.location=window.location;
	},
	});
}


function licenproof(){
		
 var catid=$('#catid').val();
 var cat='licenproof';
 $.ajax({
  type: "POST",
  url:"<?=base_url()?>Toukadmin/status_submit",
  data: { catid: catid, cat: cat },
  success: function (returndata) {

location.reload();
        },
 });
}
function rcproof(){
		
 var catid=$('#catid').val();
 var cat='rcproof';
//alert(id);
 $.ajax({
  type: "POST",
  url: "<?=base_url()?>Toukadmin/status_submit",
  data: { catid: catid, cat: cat },
  success: function (returndata) {

location.reload();
        },
 });
}
function carproof(){
		
 var catid=$('#catid').val();
 var cat='carproof';
//alert(id);
 $.ajax({
  type: "POST",
  url: "<?=base_url()?>Toukadmin/status_submit",
  data: { catid: catid, cat: cat },
  success: function (returndata) {

location.reload();
        },
 });
}

//deactive functions here

function de_govtproof(){
		
	var catid=$('#catid').val();
	var cat='degovtproof';
	//alert(catid);
	$.ajax({
	type: "POST",
	url: "<?=base_url()?>Toukadmin/deactive_govtpf",
	data: { catid: catid, cat: cat },
	success: function (returndata) {
		location.reload();
	//window.location=window.location;
	},
	});
}

function de_licen(){
		
	var catid=$('#catid').val();
	var cat='de_licen';
	//alert(catid);
	$.ajax({
	type: "POST",
	url: "<?=base_url()?>Toukadmin/deactive_govtpf",
	data: { catid: catid, cat: cat },
	success: function (returndata) {
		location.reload();
	//window.location=window.location;
	},
	});
}
function de_rcbook(){
		
	var catid=$('#catid').val();
	var cat='de_rcbook';
	//alert(catid);
	$.ajax({
	type: "POST",
	url: "<?=base_url()?>Toukadmin/deactive_govtpf",
	data: { catid: catid, cat: cat },
	success: function (returndata) {
		location.reload();
	//window.location=window.location;
	},
	});
}
function de_carinsu(){
		
	var catid=$('#catid').val();
	var cat='de_carinsu';
	//alert(catid);
	$.ajax({
	type: "POST",
	url: "<?=base_url()?>Toukadmin/deactive_govtpf",
	data: { catid: catid, cat: cat },
	success: function (returndata) {
		location.reload();
	//window.location=window.location;
	},
	});
}

//$("form#category-form").submit(function(event){
//  //disable the default form submission
//  event.preventDefault();
//  //grab all form data  
//  var formData = new FormData($(this)[0]);
//  
//  $.ajax({
//    url: 'ajax_submit.php',
//    type: 'POST',
//    data: formData,
//    async: false,
//    cache: false,
//    contentType: false,
//    processData: false,
//    success: function (returndata) {
//   }
//  });
//  return false;
//});


</script>



<script type="text/javascript">

	/* DO NOT REMOVE : GLOBAL FUNCTIONS!
	 *
	 * pageSetUp(); WILL CALL THE FOLLOWING FUNCTIONS
	 *
	 * // activate tooltips
	 * $("[rel=tooltip]").tooltip();
	 *
	 * // activate popovers
	 * $("[rel=popover]").popover();
	 *
	 * // activate popovers with hover states
	 * $("[rel=popover-hover]").popover({ trigger: "hover" });
	 *
	 * // activate inline charts
	 * runAllCharts();
	 *
	 * // setup widgets
	 * setup_widgets_desktop();
	 *
	 * // run form elements
	 * runAllForms();
	 *
	 ********************************
	 *
	 * pageSetUp() is needed whenever you load a page.
	 * It initializes and checks for all basic elements of the page
	 * and makes rendering easier.
	 *
	 */

	pageSetUp();
	
	/*
	 * ALL PAGE RELATED SCRIPTS CAN GO BELOW HERE
	 * eg alert("my home function");
	 * 
	 * var pagefunction = function() {
	 *   ...
	 * }
	 * loadScript("js/plugin/_PLUGIN_NAME_.js", pagefunction);
	 * 
	 */
	
	// PAGE RELATED SCRIPTS
	
	// pagefunction	
	var pagefunction = function() {
		//console.log("cleared");
		
		/* // DOM Position key index //
		
			l - Length changing (dropdown)
			f - Filtering input (search)
			t - The Table! (datatable)
			i - Information (records)
			p - Pagination (paging)
			r - pRocessing 
			< and > - div elements
			<"#id" and > - div with an id
			<"class" and > - div with a class
			<"#id.class" and > - div with an id and class
			
			Also see: http://legacy.datatables.net/usage/features
		*/	

		/* BASIC ;*/
			var responsiveHelper_dt_basic = undefined;
			var responsiveHelper_datatable_fixed_column = undefined;
			var responsiveHelper_datatable_col_reorder = undefined;
			var responsiveHelper_datatable_tabletools = undefined;
			
			var breakpointDefinition = {
				tablet : 1024,
				phone : 480
			};

			$('#dt_basic').dataTable({
				"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-12 hidden-xs'l>r>"+
					"t"+
					"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
				"autoWidth" : true,
				"preDrawCallback" : function() {
					// Initialize the responsive datatables helper once.
					if (!responsiveHelper_dt_basic) {
						responsiveHelper_dt_basic = new ResponsiveDatatablesHelper($('#dt_basic'), breakpointDefinition);
					}
				},
				"rowCallback" : function(nRow) {
					responsiveHelper_dt_basic.createExpandIcon(nRow);
				},
				"drawCallback" : function(oSettings) {
					responsiveHelper_dt_basic.respond();
				}
			});

		/* END BASIC */
		
		/* COLUMN FILTER  */
	    var otable = $('#datatable_fixed_column').DataTable({
	    	//"bFilter": false,
	    	//"bInfo": false,
	    	//"bLengthChange": false
	    	//"bAutoWidth": false,
	    	//"bPaginate": false,
	    	//"bStateSave": true // saves sort state using localStorage
			"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6 hidden-xs'f><'col-sm-6 col-xs-12 hidden-xs'<'toolbar'>>r>"+
					"t"+
					"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
			"autoWidth" : true,
			"preDrawCallback" : function() {
				// Initialize the responsive datatables helper once.
				if (!responsiveHelper_datatable_fixed_column) {
					responsiveHelper_datatable_fixed_column = new ResponsiveDatatablesHelper($('#datatable_fixed_column'), breakpointDefinition);
				}
			},
			"rowCallback" : function(nRow) {
				responsiveHelper_datatable_fixed_column.createExpandIcon(nRow);
			},
			"drawCallback" : function(oSettings) {
				responsiveHelper_datatable_fixed_column.respond();
			}		
		
	    });
	    	    //$("div.toolbar").html('<div class="text-right"><img src="img/icon_sedar.png" alt="SmartAdmin" style="width: 111px; margin-top: 3px; margin-right: 10px;"></div>');

	    // custom toolbar
	    	   
	    // Apply the filter
	    $("#datatable_fixed_column thead th input[type=text]").on( 'keyup change', function () {
	    	
	        otable
	            .column( $(this).parent().index()+':visible' )
	            .search( this.value )
	            .draw();
	            
	    } );
	    /* END COLUMN FILTER */   
    
		/* COLUMN SHOW - HIDE */
		$('#datatable_col_reorder').dataTable({
			"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-6 hidden-xs'C>r>"+
					"t"+
					"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-sm-6 col-xs-12'p>>",
			"autoWidth" : true,
			"preDrawCallback" : function() {
				// Initialize the responsive datatables helper once.
				if (!responsiveHelper_datatable_col_reorder) {
					responsiveHelper_datatable_col_reorder = new ResponsiveDatatablesHelper($('#datatable_col_reorder'), breakpointDefinition);
				}
			},
			"rowCallback" : function(nRow) {
				responsiveHelper_datatable_col_reorder.createExpandIcon(nRow);
			},
			"drawCallback" : function(oSettings) {
				responsiveHelper_datatable_col_reorder.respond();
			}			
		});
		
		/* END COLUMN SHOW - HIDE */

		/* TABLETOOLS */
		$('#datatable_tabletools').dataTable({
			
			// Tabletools options: 
			//   https://datatables.net/extensions/tabletools/button_options
			"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-6 hidden-xs'T>r>"+
					"t"+
					"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-sm-6 col-xs-12'p>>",
	        "oTableTools": {
	        	 "aButtons": [
	             "copy",
	             "csv",
	             "xls",
	                {
	                    "sExtends": "pdf",
	                    "sTitle": "SmartAdmin_PDF",
	                    "sPdfMessage": "SmartAdmin PDF Export",
	                    "sPdfSize": "letter"
	                },
	             	{
                    	"sExtends": "print",
                    	"sMessage": "Generated by SmartAdmin <i>(press Esc to close)</i>"
                	}
	             ],
	            "sSwfPath": "js/plugin/datatables/swf/copy_csv_xls_pdf.swf"
	        },
			"autoWidth" : true,
			"preDrawCallback" : function() {
				// Initialize the responsive datatables helper once.
				if (!responsiveHelper_datatable_tabletools) {
					responsiveHelper_datatable_tabletools = new ResponsiveDatatablesHelper($('#datatable_tabletools'), breakpointDefinition);
				}
			},
			"rowCallback" : function(nRow) {
				responsiveHelper_datatable_tabletools.createExpandIcon(nRow);
			},
			"drawCallback" : function(oSettings) {
				responsiveHelper_datatable_tabletools.respond();
			}
		});
		
		/* END TABLETOOLS */

	};

	// load related plugins
	
	loadScript("<?php echo base_url('application/assets/js/plugin/datatables/jquery.dataTables.min.js')?>", function(){
		loadScript("<?php echo base_url('application/assets/js/plugin/datatables/dataTables.colVis.min.js') ?>", function(){
			loadScript("<?php echo base_url('application/assets/js/plugin/datatables/dataTables.tableTools.min.js') ?>", function(){
				loadScript("<?php echo base_url('application/assets/js/plugin/datatables/dataTables.bootstrap.min.js') ?>", function(){
					loadScript("<?php echo base_url('application/assets/js/plugin/datatable-responsive/datatables.responsive.min.js') ?>", pagefunction)
				});
			});
		});
	});
</script>




<div id="main" role="main">
<div id="content">
<!--<div class="row">
		<div class="col-xs-3 col-sm-7 col-md-7 col-lg-12 text-left" style="padding-bottom: 5px;">
		<a class="btn btn-success" href="adduser.php"><i class="fa  fa-plus" ></i> <span  class="hidden-mobile">Add New User</span></a>								
	</div>
</div>-->

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
					<span class="widget-icon"> <i class="fa fa-use fa-lg fa-tachometer"></i> </span>
					<h2>Rides offered</h2>

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
	
					        <thead>
								<tr>
								<th class="hasinput" style="width:17%">
										<input type="text" class="form-control" placeholder="User Name" />
									</th>
								<th class="hasinput" style="width:18%">
										
											<input class="form-control" placeholder=" Email" type="text">
									</th>
									
								<th class="hasinput" style="width:18%">
										
											<input class="form-control" placeholder="Ride Type" type="text">
									</th>
								
								<th class="hasinput" style="width:12%">
										
											<input class="form-control" placeholder="Start date" type="text">
									</th>
								<th class="hasinput" style="width:18%">
										
											<input class="form-control" placeholder="Start time" type="text">
									</th>
								<th class="hasinput" style="width:18%">
										
											<input class="form-control" placeholder="Return date" type="text">
									</th>
								<th class="hasinput" style="width:18%">
										
											<input class="form-control" placeholder="Return time" type="text">
									</th>
								<th class="hasinput" style="width:18%">
										
											<input class="form-control" placeholder="Depature" type="text">
									</th>
								<th class="hasinput" style="width:18%">
										
											<input class="form-control" placeholder="Destination" type="text">
									</th>
								<th class="hasinput" style="width:18%">
										
											<input class="form-control" placeholder="Price" type="text">
									</th>
								<th class="hasinput" style="width:18%">
										
											<input class="form-control" placeholder="Available seat" type="text">
									</th>
								<th class="hasinput" style="width:18%">
										
											<input class="form-control" placeholder="Pref-Ladies" type="text">
									</th>
								
									
									<!--<th class="hasinput" style="width:18%">
									</th>-->
									
								</tr>
					            <tr>
				                    <th data-class="expand">User Name</th>
						    <th data-hide="phone,tablet">Email</th>
				                    <th data-hide="phone,tablet">Ride Type</th>				                    
						    <th data-hide="phone,tablet">Start date</th>
						    <th data-hide="phone,tablet">Start time</th>
						    <th data-hide="phone,tablet">Return date</th>
						    <th data-hide="phone,tablet">Return time</th>
						    <th data-hide="phone,tablet">Depature</th>
						    <th data-hide="phone,tablet">Destin</th>
						    <th data-hide="phone,tablet">Price</th>
						    <th data-hide="phone,tablet">Available seat</th>
						    <th data-hide="phone,tablet">Pref-Ladies</th>
					            </tr>
					        </thead>
			
					        <tbody>
					           <?php   
							$sql="SELECT p.p_fname, p.p_lname, p.p_email, r.ride_type, r.start_date, r.start_time, r.return_date, r.return_time, r.depature_text, r.destin_text, r.price, r.no_seat, r.ladies_only
								FROM profile p, rides r
								WHERE p.id = r.user_id";
							
							$res=mysql_query($sql);
							while($row=mysql_fetch_array($res))				    
						    {
						    ?>
						    <tr>
					                <td><?php echo $row['p_fname'].' '.$row['p_lname'];?></td>
							<td><?php echo $row['p_email'];?></td>
							<td><?php echo $row['ride_type'];?></td>							
							<td><?php echo $row['start_date'];?></td>
							<td><?php echo $row['start_time'];?></td>
							<td><?php echo $row['return_date'];?></td>
							<td><?php echo $row['return_time'];?></td>
							<td><?php echo $row['depature_text'];?></td>
							<td><?php echo $row['destin_text'];?></td>
							<td><?php echo $row['price'];?></td>
							<td><?php echo $row['no_seat'];?></td>
							<td><?php echo $row['ladies_only'];?></td>
								
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
	    	    $("div.toolbar").html('<div class="text-right"><img src="img/lo.png" alt="SmartAdmin" style="width: 111px; margin-top: 3px; margin-right: 10px;"></div>');

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
	
	loadScript("application/assests/plugin/datatables/jquery.dataTables.min.js", function(){
		loadScript("application/assests/plugin/datatables/dataTables.colVis.min.js", function(){
			loadScript("application/assests/plugin/datatables/dataTables.tableTools.min.js", function(){
				loadScript("application/assests/plugin/datatables/dataTables.bootstrap.min.js", function(){
					loadScript("application/assests/plugin/datatable-responsive/datatables.responsive.min.js", pagefunction)
				});
			});
		});
	});


</script>

<!--fancy box code--><!--fancy box code--><!--fancy box code--><!--fancy box code--><!--fancy box code-->

<div class="modal fade" id="edit_category" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog">
  <div class="modal-content">
   
    <form action="" id="category-form" class="smart-form" >

    <div class="modal-header">
			<h5 style="color: #E91B23; margin-left: 10px; font-weight: 800; margin-top: 10px; margin-bottom: 10px" class="modal-title" id="myModalLabel">
               Activate User Account<img src="img/log.png" > </h5>
			
			</div>
    
       <fieldset>
       
<!-- form fields -->
		<label class="input">	<section class="col-lg-3">User Name :</section><section class="col-lg-8" name="catname" id="catname" value=""></section>
		<input type="hidden" name="catid" id="catid" value="">
		</label>
		
		<label class="input">	<section class="col-lg-3">User email :</section><section class="col-lg-8" id="useremail" value=""></section>
		
		</label>
		
		<label class="input">	<section class="col-lg-3">User Image :</section><section class="col-lg-8"  value=""> <img class="col-lg-6" id="userphoto" src=""> </section>
		
		</label>
		
		
		<!--<input type="submit" value="Add Category" name="submit" class="btn btn-success">-->
</fieldset>
		<footer>
			
		<button type="button" class="btn btn-default" data-dismiss="modal">
		Cancel
		</button>
		<button type="submit" name="editcategory"  class="btn btn-primary" >
		Activate
		</button>
		</footer>
    </form>      
      

  

  </div><!-- /.modal-content -->
 </div><!-- /.modal-dialog -->


<script>
	function editcategory(id){
		
 var catid=id; 
 $.ajax({
  type: "POST",
  dataType: "json",
  url: "ajax_edit_status.php",
 
  data: 'catid='+ catid ,
  success: function (json) {
	 document.getElementById('catname').innerHTML=json.name;
document.getElementById('useremail').innerHTML=json.email;

 var myImageURL = json.photo;
	       document.getElementById("userphoto").src = myImageURL;

$('#catid').val(json.category_id);

        },
 });
}

$("form#category-form").submit(function(event){
  //disable the default form submission
  event.preventDefault();
  //grab all form data  
  var formData = new FormData($(this)[0]);
  
  $.ajax({
    url: 'ajax_edit_submit_status.php',
    type: 'POST',
    data: formData,
    async: false,
    cache: false,
    contentType: false,
    processData: false,
    success: function (returndata) {
   //alert("category  is successfully updated.... ");
	//location.reload();
	window.location=window.location;
    }
  });
  return false;
});




	
	
</script>


<!-- end widget grid -->
<script>
				
				function tablefn5(tbl){
	    var tabno=tbl; 
          
	   //$('#idid').val(tabno);
	$.ajax({
                type: "GET",
                dataType: "json",
                url: "ajax_vid.php",
                data: 'tnoid='+tabno,
		
		success: function (json) {
			
       
       document.getElementById('vid').innerHTML=json.id;
      
			
        },

			 });
            }
			</script>

<!--fancy box code-->

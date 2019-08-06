<!DOCTYPE html>

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Subject Allocated</title>

<link rel="stylesheet" href="dist/bootstrap.min.css" type="text/css" media="all">

<link href="dist/jquery.bootgrid.css" rel="stylesheet" />

<script src="dist/jquery-1.11.1.min.js"></script>

<script src="dist/bootstrap.min.js"></script>

<script src="dist/jquery.bootgrid.min.js">
</script>

</head>

<body>
	
<div class="container">
      
<div class="">
        
 

<div class="header">
    
<div class="row">
        
<div class="continer">
           
<div id="logo_title">
                
<div id="head_text">
                    
	<h1>
<img id="logo" src="sjplogo.png" alt="logo" height="80" width="100" /> 
                        
	<span>COURSE PLANNING AND TRACKING</span>
</h1>
                
</div>
</div>
            
<div class="clearfix"></div>
            
<span>
<center> S.J(Govt) Polytechnic,Sheshadri Road, Bengaluru-560001 </center>
</span>
        
</div>
</div>
</div>
 
<?php include 'menu2.php';?>
		
		
<table id="employee_grid" class="table table-condensed table-hover table-striped" width="100%" cellspacing="0" data-toggle="bootgrid">
			
<thead>
				
<tr>
					
<th data-column-id="id" data-type="numeric" data-identifier="true">Sl No</th>
										
<th data-column-id="Staff_name">Staff Name</th>
					
<th data-column-id="Staff_id">Staff Id</th>

<th data-column-id="Sem">Sem</th>

<th data-column-id="Course_code">Course Code</th>

<th data-column-id="Year">Year</th>


					
<th data-column-id="commands" data-formatter="commands" data-sortable="false">Commands</th>
				</tr>
			</thead>
		</table>
    </div>
      </div>
    </div>
	
<div id="add_model" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add Employee</h4>
            </div>
            <div class="modal-body">
                <form method="post" id="frm_add">
				<input type="hidden" value="add" name="action" id="action">
                  

<div class="form-group">
                    
<label for="Unit_no" class="control-label">Unit_no:</label>
                    
<input type="text" class="form-control" id="Unit_no" name="Unit_no"/>
                  </div>
<div class="form-group">
                    
<label for="Title_name" class="control-label">Title_name:</label>
                    
<input type="text" class="form-control" id="Title_name" name="Title_name"/>
                  </div>


<div class="form-group">
                    
<label for="Subdivision" class="control-label">Subdivision:</label>
                    
<input type="text" class="form-control" id="Subdivision" name="Subdivision"/>
                  </div>
<div class="form-group">
                    
<label for="Date_planned" class="control-label">Date_planned:</label>
                    
<input type="text" class="form-control" id="Date_planned" name="Date_planned"/>
                  </div>

<div class="form-group">
                    
<label for="Hours" class="control-label">Hours:</label>
                    
<input type="text" class="form-control" id="Hours" name="Hours"/>
                  </div>

<div class="form-group">
                    
<label for="Date_planned" class="control-label">Date_planned:</label>
                    
<input type="text" class="form-control" id="Date_planned" name="Date_planned"/>
                  </div>
<div class="form-group">
                    
<label for="Methodolagy" class="control-label">Methodolagy:</label>
                    
<input type="text" class="form-control" id="Methodolagy" name="Methodolagy"/>
                  </div>
<div class="form-group">
                    
<label for="Learning_outcome" class="control-label">Learning_outcome:</label>
                    
<input type="text" class="form-control" id="Learning_outcome" name="Learning_outcome"/>
                  </div>    </div>
      
<div class="modal-footer">
                
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                
<button type="button" id="btn_add" class="btn btn-primary">Save</button>
            </div>
			
</form>
        </div>
    </div>
</div>

<div id="edit_model" class="modal fade">
    
<div class="modal-dialog">
        
<div class="modal-content">
            
<div class="modal-header">
                
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
<h4 class="modal-title">Edit</h4>
            </div>
            
<div class="modal-body">
                
<form method="post" id="frm_edit">
				
<input type="hidden" value="edit" name="action" id="action">
				
<input type="hidden" value="0" name="edit_id" id="edit_id">
      

<div class="form-group">
                    
<label for="Staff_name" class="control-label">Staff Name:</label>
                    
<input type="text" class="form-control" id="edit_Staff_name" name="edit_Staff_name"/>
                  </div>
<div class="form-group">
                    
<label for="Staff_id" class="control-label">Staff Id:</label>
                    
<input type="text" class="form-control" id="edit_Staff_id" name="edit_Staff_id"/>
                  </div>
<div class="form-group">
                    
<label for="Sem" class="control-label">Sem:</label>
                    
<input type="text" class="form-control" id="edit_Sem" name="edit_Sem"/>
                  </div>
<div class="form-group">
                    
<label for="Course_code" class="control-label">Course Code:</label>
                    
<input type="text" class="form-control" id="edit_Course_code" name="edit_Course_code"/>
                  </div>
<div class="form-group">
                    
<label for="Year" class="control-label">Year:</label>
                    
<input type="text" class="form-control" id="edit_Year" name="edit_Year"/>
                  </div>

        
            </div>
 
           
<div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                
<button type="button" id="btn_edit" class="btn btn-primary">Save</button>
            </div>
			</form>
        </div>
    </div>
</div>

</body>

</html>


<script type="text/javascript">
$( document ).ready(function() {
	
var grid = $("#employee_grid").bootgrid({
		
ajax: true,
		rowSelect: true,
		post: function ()
		{
			
/* To accumulate custom parameter with the request object */
			return {
				id: "b0df282a-0d67-40e5-8558-c9e93b7befed"
			};
		},
		
		url: "response.php",
		formatters: {
		        "commands": function(column, row)
		        {
		            return "<button type=\"button\" class=\"btn btn-xs btn-default command-edit\" data-row-id=\"" + row.id + "\"><span class=\"glyphicon glyphicon-edit\"></span></button> " + 
		                "<button type=\"button\" class=\"btn btn-xs btn-default command-delete\" data-row-id=\"" + row.id + "\"><span class=\"glyphicon glyphicon-trash\"></span></button>";
		        }
		    }
   }).on("loaded.rs.jquery.bootgrid", function()
{
    /* Executes after data is loaded and rendered */
    grid.find(".command-edit").on("click", function(e)
    {
        //alert("You pressed edit on row: " + $(this).data("row-id"));
			var ele =$(this).parent();
			var g_id = $(this).parent().siblings(':first').html();
            var g_name = $(this).parent().siblings(':nth-of-type(2)').html();
console.log(g_id);
                    console.log(g_name);

		
//console.log(grid.data());//
		$('#edit_model').modal('show');
					
if($(this).data("row-id") >0) {
							
                                
// collect the data
                               
 $('#edit_id').val(ele.siblings(':first').html()); 
// in case we're changing the key
                                


$('#edit_Staff_name').val(ele.siblings(':nth-of-type(2)').html());

$('#edit_Staff_id').val(ele.siblings(':nth-of-type(3)').html());

$('#edit_Sem').val(ele.siblings(':nth-of-type(4)').html());

$('#edit_Course_code').val(ele.siblings(':nth-of-type(5)').html());

$('#edit_Year').val(ele.siblings(':nth-of-type(6)').html());


						} else {
					 
alert('Now row selected! First select row, then click edit button');
					
}
    }).end().find(".command-delete").on("click", function(e)
    {
	
		
var conf = confirm('Delete ' + $(this).data("row-id") + ' items?');
					alert(conf);
                    if(conf){
                                $.post('response.php', { id: $(this).data("row-id"), action:'delete'}
                                    , function(){
                                        // when ajax returns (callback), 
										$("#employee_grid").bootgrid('reload');
                                }); 
								//$(this).parent('tr').remove();
								//$("#employee_grid").bootgrid('remove', $(this).data("row-id"))
                    }
    });
});

function ajaxAction(action) {
				data = $("#frm_"+action).serializeArray();
				$.ajax({
				  type: "POST",  
				  url: "response.php",  
				  data: data,
				  dataType: "json",       
				  success: function(response)  
				  {
					$('#'+action+'_model').modal('hide');
					$("#employee_grid").bootgrid('reload');
				  }   
				});
			}
			
			$( "#command-add" ).click(function() {
			  $('#add_model').modal('show');
			});
			$( "#btn_add" ).click(function() {
			  ajaxAction('add');
			});
			$( "#btn_edit" ).click(function() {
			  ajaxAction('edit');
			});
});
</script>

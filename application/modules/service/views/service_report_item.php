<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="shortcut icon" href="<?php echo base_url().'images/fav_icon.png';?>" >
<title> <?php echo isset($title) ? $title : ''; ?>  </title>
<style media="all">
	table{ font-family:"Tahoma", Times, serif; font-size:11px;}
	h4{ font-family:"Tahoma", Times, serif; font-size:14px; font-weight:600;}
	.clear{clear:both;}
	table th{ background-color:#EFEFEF; padding:4px 0px 4px 0px; border-top:1px solid #000000; border-bottom:1px solid #000000;}
    p{ font-family:"Tahoma", Times, serif; font-size:12px; margin:0; padding:0;}
	legend{font-family:"Tahoma", Times, serif; font-size:13px; margin:0; padding:0; font-weight:600;}
	.tablesum{ font-size:13px;}
	.strongs{ font-weight:normal; font-size:12px; border-top:1px dotted #000000; }
	.poder{ border-bottom:0px solid #000000; color:#0000FF;}
    .img_product{ height: 50px; align-content: center;}
</style>

<link rel="stylesheet" href="<?php echo base_url().'js-old/jxgrid/' ?>css/jqx.base.css" type="text/css" />
    
	<script type="text/javascript" src="<?php echo base_url().'js-old/jxgrid/' ?>js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'js-old/jxgrid/' ?>js/jqxcore.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'js-old/jxgrid/' ?>js/jqxdata.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'js-old/jxgrid/' ?>js/jqxbuttons.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'js-old/jxgrid/' ?>js/jqxcheckbox.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'js-old/jxgrid/' ?>js/jqxscrollbar.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'js-old/jxgrid/' ?>js/jqxlistbox.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'js-old/jxgrid/' ?>js/jqxdropdownlist.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'js-old/jxgrid/' ?>js/jqxmenu.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'js-old/jxgrid/' ?>js/jqxgrid.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'js-old/jxgrid/' ?>js/jqxgrid.sort.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'js-old/jxgrid/' ?>js/jqxgrid.filter.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'js-old/jxgrid/' ?>js/jqxgrid.columnsresize.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'js-old/jxgrid/' ?>js/jqxgrid.columnsreorder.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'js-old/jxgrid/' ?>js/jqxgrid.selection.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'js-old/jxgrid/' ?>js/jqxgrid.pager.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'js-old/jxgrid/' ?>js/jqxgrid.aggregates.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'js-old/jxgrid/' ?>js/jqxdata.export.js"></script>
	<script type="text/javascript" src="<?php echo base_url().'js-old/jxgrid/' ?>js/jqxgrid.export.js"></script>
	
    <script type="text/javascript">
	
        $(document).ready(function () {
          
			var rows = $("#table tbody tr");
                // select columns.
                var columns = $("#table thead th");
                var data = [];
                for (var i = 0; i < rows.length; i++) {
                    var row = rows[i];
                    var datarow = {};
                    for (var j = 0; j < columns.length; j++) {
                        // get column's title.
                        var columnName = $.trim($(columns[j]).text());
                        // select cell.
                        var cell = $(row).find('td:eq(' + j + ')');
                        datarow[columnName] = $.trim(cell.text());
                    }
                    data[data.length] = datarow;
                }
                var source = {
                    localdata: data,
                    datatype: "array",
                    datafields:
                    [
                        { name: "No", type: "string" },
						{ name: "Code", type: "string" },
						{ name: "Date", type: "string" },
						{ name: "Passenger", type: "string" },
						{ name: "Period", type: "string" },
                        { name: "Description", type: "string" },
                        { name: "BookCode", type: "string" },
                        { name: "Vendor", type: "string" },
                        { name: "Capital", type: "number" },
                        { name: "Price", type: "number" },
                        { name: "Discount", type: "number" },
                        { name: "Tax", type: "number" },
                        { name: "Amount", type: "number" },
                        { name: "Profit", type: "number" },
                        { name: "Approved", type: "string" }
                    ]
                };
			
            var dataAdapter = new $.jqx.dataAdapter(source);
            $("#jqxgrid").jqxGrid(
            {
                width: '100%',
				source: dataAdapter,
				sortable: true,
				filterable: true,
				pageable: true,
				altrows: true,
				enabletooltips: true,
				filtermode: 'excel',
				autoheight: true,
				columnsresize: true,
				columnsreorder: true,
				showstatusbar: true,
				statusbarheight: 30,
				showaggregates: true,
				autoshowfiltericon: false,
                columns: [
                  { text: 'No', dataField: 'No', width: 50 },
                  { text: 'Code', dataField: 'Code', width : 100 },
				  { text: 'Date', dataField: 'Date', width : 130 },
  				  { text: 'Passenger', dataField: 'Passenger', width : 250 },
				  { text: 'Period', dataField: 'Period', width : 150 },
                  { text: 'Description', dataField: 'Description', width : 250 },
                  { text: 'BookCode', dataField: 'BookCode', width : 120 },
                  { text: 'Vendor', dataField: 'Vendor', width : 200 },
{ text: 'Capital', dataField: 'Capital', width : 100, cellsalign: 'right', cellsformat: 'number', aggregates: ['sum'] },
{ text: 'Price', dataField: 'Price', width : 100, cellsalign: 'right', cellsformat: 'number', aggregates: ['sum'] },
{ text: 'Discount', dataField: 'Discount', width : 100, cellsalign: 'right', cellsformat: 'number', aggregates: ['sum'] },
{ text: 'Tax', dataField: 'Tax', width : 100, cellsalign: 'right', cellsformat: 'number', aggregates: ['sum'] },
{ text: 'Amount', dataField: 'Amount', width : 150, cellsalign: 'right', cellsformat: 'number', aggregates: ['sum'] },
{ text: 'Profit', dataField: 'Profit', width : 150, cellsalign: 'right', cellsformat: 'number', aggregates: ['sum'] },
                  { text: 'Approved', dataField: 'Approved', width : 100 }
                ]
            });
			
			$('#jqxgrid').jqxGrid({ pagesizeoptions: ['1000', '2000', '3000', '5000', '10000', '15000']}); 
			
			$("#bexport").click(function() {
				
				var type = $("#crtype").val();	
				if (type == 0){ $("#jqxgrid").jqxGrid('exportdata', 'html', 'Sales-Summary'); }
				else if (type == 1){ $("#jqxgrid").jqxGrid('exportdata', 'xls', 'Sales-Summary'); }
				else if (type == 2){ $("#jqxgrid").jqxGrid('exportdata', 'pdf', 'Sales-Summary'); }
				else if (type == 3){ $("#jqxgrid").jqxGrid('exportdata', 'csv', 'Sales-Summary'); }
			});
			
			$('#jqxgrid').on('celldoubleclick', function (event) {
     	  		var col = args.datafield;
				var value = args.value;
				var res;
			
				if (col == 'Code')
				{ 			
				   openwindow(value);
				}
 			});
			
			function openwindow(val)
			{
				var site = "<?php echo site_url('sales/invoice/');?>";
				window.open(site+"/"+val+"/code", "", "width=800, height=600"); 
				//alert(site+"/"+val);
			}
			
			$("#table").hide();
			
		// end jquery	
        });
    </script>
</head>

<body>

<div style="width:100%; border:0px solid blue; font-family:Arial, Helvetica, sans-serif; font-size:12px;">
	
	<div style="border:0px solid red; float:left;">
		<table border="0">
			<tr> <td> Period </td> <td> : </td> <td> <?php echo $start.' - '.$end; ?> </td> </tr>
			<tr> <td> Run Date </td> <td> : </td> <td> <?php echo $rundate; ?> </td> </tr>
			<tr> <td> Log </td> <td> : </td> <td> <?php echo $log; ?> </td> </tr>
		</table>
	</div>

	<center>
	   <div style="border:0px solid green; width:230px;">	
	       <h4> <?php echo isset($company) ? $company : ''; ?> <br> Sales Service Report - Transaction Details </h4>
	   </div>
	</center>
	
	<div class="clear"></div>
	
	<div style="width:100%; border:0px solid brown; margin-top:20px; border-bottom:1px dotted #000000; ">
	
    <div id='jqxWidget'>
        <div style='margin-top: 10px;' id="jqxgrid"> </div>
        
        <table style="float:right; margin:5px;">
        <tr>
        <td> <input type="button" id="bexport" value="Export"> - </td>
        <td> 
        <select id="crtype"> <option value="0"> HTML </option> <option value="1"> XLS </option>  <option value="2"> PDF </option> 
        <option value="3"> CSV </option> 
        </select>
        </td>
        </tr>
        </table>
        
    </div>
    
		<table id="table" border="0" width="100%">
		   <thead>
           <tr>
<th> No </th> <th> Code </th> <th> Date </th> <th> Passenger </th> <th> Period </th> <th> Description </th>
<th> BookCode </th> <th> Vendor </th> <th> Capital </th> <th> Price </th> <th> Discount </th>
<th> Tax </th> <th> Amount </th> <th> Profit </th> <th> Approved </th> 
           </tr>
           </thead>
		  
          <tbody> 
		  <?php 
              
              function payment($val)
              {
                  $res = new Payment_lib(); 
                  return strtoupper($res->get_name($val));
              }
              
              function pstatus($val){ if ($val == 0){ return 'N'; }else{ return 'Y'; } }
              
              function profit($hpp,$price,$discount){
                  return floatval($price-$discount-$hpp);
              }
              
              function vendor($val){
                  $lib = new Vendor_lib();
                  return strtoupper($lib->get_vendor_name($val));
              }
			  		  
		      $i=1; 
			  if ($reports_item)
			  {
				foreach ($reports_item as $res)
				{	
				   echo " 
				   <tr> 
				       <td class=\"strongs\">".$i."</td> 
                       <td class=\"strongs\">".$res->code."</td> 
                       <td class=\"strongs\">".tglin($res->dates)."</td> 
                       <td class=\"strongs\">".strtoupper($res->passenger.' - '.$res->idcard)."</td>
                       <td class=\"strongs\">".tglin($res->checkin).' - '.tglin($res->checkout)."</td>
                       <td class=\"strongs\">".$res->description."</td>
                       <td class=\"strongs\">".$res->bookcode."</td>
                       <td class=\"strongs\">".vendor($res->vendor)."</td>
                       <td class=\"strongs\">".$res->hpp."</td>
                       <td class=\"strongs\">".$res->price."</td>
                       <td class=\"strongs\">".$res->discount."</td>
                       <td class=\"strongs\">".$res->tax."</td>
                       <td class=\"strongs\">".$res->amount."</td>
                       <td class=\"strongs\">".profit($res->hpp,$res->price,$res->discount)."</td>
                       <td class=\"strongs\">".pstatus($res->approved)."</td>
				   </tr>";
				   $i++;
				}
			 }  
		  ?>
		</tbody>      
		</table>
        
        </div>
        
        <a style="float:left; margin:10px;" title="Back" href="<?php echo site_url('service'); ?>"> 
          <img src="<?php echo base_url().'images/back.png'; ?>"> 
        </a>
        
	</div>
	

</body>
</html>

  <!-- CSS goes in the document HEAD or added to your external stylesheet -->
<style type="text/css">
table.gridtable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #666666;
	border-collapse: collapse;
}
table.gridtable th {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #dedede;
}
table.gridtable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #ffffff;
}
</style>
<!-- Table goes in the document BODY -->



  <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
	
                  <div class="col-lg-12">
            <section class="panel">
                          <header class="panel-heading">
                              List Menu						  
							  
                          </header>
                          <div class="table-responsive">
						  <form method="POST">
						  <?php $datez=date('d/m/Y'); ?>
		<table border=0 >
                                <tr>
								<th>&nbsp;</th>
          <th>Tanggal</th>
          <th><input type=text name=wdate value=<?=$datez;?>></th>
          <th>&nbsp;</th>
          <th>&nbsp;</th>
		  <th>&nbsp;</th>
         <th>&nbsp;</th>
                                </tr>							  
							  
            <tr>
								<th>&nbsp;</th>
          <th>&nbsp;</th>
          <th><!--input type=text name=wname --></th>
          <th>&nbsp;</th>
          <th>&nbsp;</th>
		  <th>&nbsp;</th>
         <th>&nbsp;</th>
                                </tr>	
</table>								
						  
						  
						  
                            <table class="gridtable">
                              <thead>
							  
                                <tr>
								<th>&nbsp;</th>
          <th>Category</th>
          <th>Name</th>
          <th>Discount</th>
          <th>Description</th>
		  <!--th>Qty</th-->
          <th>Status</th>
                                </tr>
                              </thead>
                              <tbody>
								  
		  <?php
		  foreach($menus as $k => $v) :
		  ?>
                                        <tr>
			<td><input type=checkbox name="mid[]" 
			value="<?php echo $v -> mid.'-'.$v -> mharga.'-'.$v -> mdisc; ?>" ></td>							
          <td><?php echo $v -> cname; ?></td>
          <td><?php echo $v -> mname; ?></td>
          <td><?php echo $v -> mdisc; ?>%</td>
          <td><?php echo substr($v -> mdesc,0,150); ?></td>
		    <!--td><select name="qty[]">
		  <?php for($i=0;$i<30;$i++){ ?>
		  <option><?=$i;?></option>
		  <?php } ?>
		  </select></td-->
          <td><?php echo __get_status($v -> mstatus,1); ?></td>
		  
		
										</tr>
        <?php endforeach; ?>
		<tr><td><input type=submit >
		
		</td></tr>
                              </tbody>
                            </table>
							</form>
                          </div>
                                <div class="box-footer clearfix">
                                    <ul class="pagination pagination-sm no-margin pull-right">
                                        <?php echo $pages; ?>
                                    </ul>
                                </div>

                      </section>
                          </div>

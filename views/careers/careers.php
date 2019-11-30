 <div id="main_content">
            	<section id="page_karir">
		<div class="container-fluid">
	        <h4 class="text-center section_title">All Careers</h4>
	        <div class="row">
	            <div class=" infinite-scroll">
	                <div class=" row"> </div>
	                <div class="row">
	                	<div class="col-md-12 text-center mt-3">
			                <table align="left" style="width: 100%;" border="1" cellspacing="1" cellpadding="1">
						<thead>
							<tr>
								<th scope="col">Position</th>
								<th scope="col">Description</th>
								<th scope="col">Contact</th>
							</tr>
						</thead>
						<tbody>
							<?php echo $this->session->flashdata('info');?>
							<tr>
								<?php foreach ($list as $d) : ?>
								<td><?= $d['position']; ?></td>
								<td><?= $d['deskripsi']; ?></td>
								<td><?= $d['contact']; ?></td>
								
							</tr>
							
							 <?php endforeach ?>
						</tbody>
					</table>
			            </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
        </div>

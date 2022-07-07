<?php get_header();?>

<?php /* Template Name: Career Template */ ?>

  <section id="career-page" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/about.jpg)">
    <div class="text-column" data-aos="fade-up">
      <h1 class="title text-white text-uppercase">careers</h1>
    </div>
  </section>
  <section id="career-content-page" class="section">
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-md-9">
          <div class="row">
						<div class="col-12">
						<?php
								$i = 1;
								$listScroll = get_field('column_list_job', 116);
								if( $listScroll ) {
								foreach( $listScroll as $listScrollX ) { 
							?>
							<div class="" data-bs-toggle="modal" data-bs-target="#modal-<?php echo $i++;?>">
								<h2 class="title"><?php echo $listScrollX['job_title']; ?></h2>
								<p><?php echo $listScrollX['status']; ?></p>
								<p><?php echo $listScrollX['location']; ?></p>
							</div>
								<?php 
									} 
								}
							?>
						</div>
					</div>
        </div>
        
      </div>
    </div>
  </section>

	<?php
		$ii = 1;
		$listScrollb = get_field('column_list_job', 116);
		if( $listScrollb ) {
		foreach( $listScrollb as $listScrollC ) { 
	?>
	<!-- Modal -->
	<div class="modal fade " id="modal-<?php echo $ii++;?>" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"><?php echo $listScrollC['job_title']; ?></h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<p><?php echo $listScrollC['description']; ?></p>
				</div>
			</div>
		</div>
	</div>
	<?php 
			} 
		}
	?>

<?php get_footer();?>  
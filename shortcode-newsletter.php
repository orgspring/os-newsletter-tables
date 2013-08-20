<?php 

/* Custom shortcode for display of Newsletter table in posts / pages */


add_shortcode('newstable', 'newscatlisting');

function newscatlisting (){
	?>
	<table class="newsletter-table sortable">
		<thead>
			<tr>
				<th class="osnt-date">Date</th>
				<th class="osnt-issue">Issue</th>
				<th class="osnt-contents">Contents</th>
				<th class="osnt-download">File Download</th>
			</tr>
		</thead>
		<tbody>
		<?php
		// The Query
		$query = new WP_Query( array(
			'post_type' => array( 'osnt_newsletter' )
		) );
		
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
					?>
				    <tr>
				    	<td class="osnt-date"><?php $date = DateTime::createFromFormat('Ymd', get_field('osnt_date')); echo $date->format('m-d-Y'); ?></td>
				    	<td class="osnt-issue"><?php the_field('osnt_issue');?></td>				
				    	<td class="osnt-contents"><?php the_field('osnt_contents');?></td>				
				    	<td class="osnt-download"><a href="<?php the_field('osnt_download');?>" title="<?php printf( esc_attr__('Download %s', 'osnt'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><img src="<?php the_field('osnt_thumb');?>" alt="thumbnail image for <?php the_title(); ?>" /></a></td>	
				    </tr>			
				    <?php
			}
		}
		/* Restore original Post Data */
		wp_reset_postdata();		
			?>
		</tbody>
	</table>
<?php
}


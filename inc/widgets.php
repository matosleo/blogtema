<?php

/* widgets sidebar functions */
function blog_widget_setup() {

	register_sidebar(
		array(
			'name'  => 'Sidebar',
			'id'    => 'sidebar-1',
			'description' => 'Standart Sidebar',
			'before_widget' => '<section class="categoria">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="titulo-categoria">',
			'after_title'   => '</h2>'
		)
	);	
}
add_action('widgets_init', 'blog_widget_setup');


/*
	Save Posts views
*/
function blog_save_post_views( $postID ) {
	
	$metaKey = 'blog_post_views';
	$views = get_post_meta( $postID, $metaKey, true );
	
	$count = ( empty( $views ) ? 0 : $views );
	$count++;
	
	update_post_meta( $postID, $metaKey, $count );
	
}
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );



/*
	Popular Posts Widget
*/
class Blog_Popular_Posts_Widget extends WP_Widget {
	
	//setup the widget name, description, etc...
	public function __construct() {
		
		$widget_ops = array(
			'classname' => 'blog-popular-posts-widget',
			'description' => 'Popular Posts Widget',
		);
		parent::__construct( 'blog_popular_posts', 'Blog Popular Posts', $widget_ops );
		
	}
	
	// back-end display of widget
	public function form( $instance ) {
		
		$title = ( !empty( $instance[ 'title' ] ) ? $instance[ 'title' ] : 'Popular Posts' );
		$tot = ( !empty( $instance[ 'tot' ] ) ? absint( $instance[ 'tot' ] ) : 4 );
		
		$output = '<p>';
		$output .= '<label for="' . esc_attr( $this->get_field_id( 'title' ) ) . '">Title:</label>';
		$output .= '<input type="text" class="widefat" id="' . esc_attr( $this->get_field_id( 'title' ) ) . '" name="' . esc_attr( $this->get_field_name( 'title' ) ) . '" value="' . esc_attr( $title ) . '"';
		$output .= '</p>';
		
		$output .= '<p>';
		$output .= '<label for="' . esc_attr( $this->get_field_id( 'tot' ) ) . '">Number of Posts:</label>';
		$output .= '<input type="number" class="widefat" id="' . esc_attr( $this->get_field_id( 'tot' ) ) . '" name="' . esc_attr( $this->get_field_name( 'tot' ) ) . '" value="' . esc_attr( $tot ) . '"';
		$output .= '</p>';
		
		echo $output;
		
	}
	
	//update widget
	public function update( $new_instance, $old_instance ) {
		
		$instance = array();
		$instance[ 'title' ] = ( !empty( $new_instance[ 'title' ] ) ? strip_tags( $new_instance[ 'title' ] ) : '' );
		$instance[ 'tot' ] = ( !empty( $new_instance[ 'tot' ] ) ? absint( strip_tags( $new_instance[ 'tot' ] ) ) : 0 );
		
		return $instance;
		
	}

	//front-end display of widget
	public function widget( $args, $instance ) {
		
		$tot = absint( $instance[ 'tot' ] );
		
		$posts_args = array(
			'post_type'			=> 'post',
			'posts_per_page'	=> $tot,
			'meta_key'			=> 'blog_post_views',
			'orderby'			=> 'meta_value_num',
			'order'				=> 'DESC'
		);
		
		$posts_query = new WP_Query( $posts_args );
		
		echo $args[ 'before_widget' ];
		
		if( !empty( $instance[ 'title' ] ) ):
			
			echo $args[ 'before_title' ] . apply_filters( 'widget_title', $instance[ 'title' ] ) . $args[ 'after_title' ];
			
		endif;
		
		if( $posts_query->have_posts() ):
		
			echo '<ul>';
				
				while( $posts_query->have_posts() ): $posts_query->the_post();
					
					echo '<li class="container item-widget">
							<div class="widget-thumbs grid-6">
								<a href="'. get_the_permalink() . '">
									<img src="' . get_the_post_thumbnail_url(null, 'thumbnail') .'" />
								</a>
							</div>
							<div class="widget-info grid-6">
								<a href="'. get_the_permalink() . '">
									<h3>'. get_the_title() .'</h3>
									<p>'. get_the_date() .'</p>
								</a>
							</div>
						 </li>';
					
				endwhile;
				
			echo '</ul>';
		
		endif;
		
		echo $args[ 'after_widget' ];
		
	}

}

add_action( 'widgets_init', function() {
	register_widget( 'Blog_Popular_Posts_Widget' );
} );


function blog_list_categories_output_change( $links ) {
	
	$links = str_replace('</a> (', '</a> <span>', $links);
	$links = str_replace(')', '</span>', $links);
	
	return $links;
	
}
add_filter( 'wp_list_categories', 'blog_list_categories_output_change' );
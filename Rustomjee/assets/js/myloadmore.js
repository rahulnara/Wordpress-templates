jQuery(function($){
	$('.load_more_blog_cta').click(function(){
 		var button = $(this),
		    data = {
			'action': 'loadmore',
			'query': rst_loadmore_params.posts,
            'page' : rst_loadmore_params.current_page,
            'recall': 1,
		};

		$.ajax({
			url : rst_loadmore_params.ajaxurl,
            data : data,
            type : 'POST',
			beforeSend : function ( xhr ) {
				button.text('Loading...');
			},
			success : function( data ){
				if( data ) { 
					button.text( 'Load more' );
					$(data).insertBefore('.load_more_blog_wrap');
					rst_loadmore_params.current_page++;
 
					if ( rst_loadmore_params.current_page == rst_loadmore_params.max_page ) 
						button.remove();
				} else {
					button.remove();
				}
			}
		});
	});
});
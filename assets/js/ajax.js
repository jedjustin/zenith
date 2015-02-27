
	<script>
	$.getJSON('blog/?json=get_recent_posts', function(data)	var output = '<ul class="thumbnails">';
	$.each(data, function(key, val) {
			output += '<li class="span4">';
			output += '<a href="'+ val.posts[O].url +'">';
			output += '<img src="'+ val.posts[O].attatchments[O].url +'" alt="'+ val.posts.title +'" />';
			output += '</a>';
			output += '<h5>'+ val.posts[O].title +'</h5>';
			output += '<p class="SmallFontBy08">'+ val.posts[O].excerpt +'</p>'
			output += '</li>';
		});
		output += '</ul>';
		$('#wordpress') .innerHTML = output;
	}});
</script>

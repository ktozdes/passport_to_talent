$(document).ready(function() {
	$('body')
	.on('click', '.apply-to-job--button', function(){
		let thisLink = $(this);
		console.log(app_urls.apply_to_job, $(this).attr('job-id'));
		$.ajax({
			url: app_urls.apply_to_job+'/'+thisLink.attr('job-id'),
			//headers: {'X-CSRF-TOKEN': token},
			method: 'GET'
		}).done(function(res) {
			if (res.success) {
				thisLink.replaceWith( `<span class="tag is-success is-medium">Applied</span>` );
			}
		});
	})
});
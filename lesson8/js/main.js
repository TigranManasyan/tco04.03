jQuery(document).ready(function($) {
	let showImages = dataImages => {
		if(dataImages.length > 0) {
			let row = '';
			dataImages.forEach( (item, index) => {
				row += `
					<div data-id='${item.id}'>
						<img src = '../images/${item.name}'> 
						<input type='checkbox' class='check'>
						<button class='del'> Delete </button>
					</div>	 
				 `;
				 $("#images").html(row);
			});
		}
	}


	$("#show").on("click", function() {
		$.ajax({
			url:'../controllers/ImagesController.php',
			method:'get',
			dataType:'json',
			data:{action:'show'},
			success:function(d) {
				showImages(d);
			}	
		})
	})
})
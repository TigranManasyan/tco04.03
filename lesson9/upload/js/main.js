jQuery(document).ready(function($) {
	let showImages = dataImages => {
		if(dataImages.length > 0) {
			let row = '';
			dataImages.forEach( (item, index) => {
				row += `
					<div data-id='${item.id}' style='margin:20px;border:solid'>
						<img style='width:200px;' src = '../images/${item.name}'> 
						<input type='checkbox' class='check'>
						<button class='del'> Delete </button>
					</div>	 
				 `;
				 $("#images").html(row);
			});
		}

		$(".check").on("change", function() {
			let id = $(this).parent().attr('data-id');
			let check = $(this).is(":checked");
				$.ajax({
					url:'../controllers/ImagesController.php',
					method:'get', 
					data:{id, check, action:'checkin'},
					success:function() { 
					}	
				})
		});

		$(".del").on("click", function() {
			let id = $(this).parent().attr('data-id');
				$.ajax({
					url:'../controllers/ImagesController.php',
					method:'get', 
					data:{id, action:'delete'},
					success:function() {
						location.reload();  
					}	
				})
		})
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
	});
	$("#delete_checks").on("click", function() {
		$.ajax({
			url:'../controllers/ImagesController.php',
			method:'get', 
			data:{action:'delete_checks'},
			success:function(d) {
				location.reload()
			}	
		})
	})
})
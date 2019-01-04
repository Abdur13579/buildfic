	
	 $(document).ready(function(){
		  $("#tombol_tambahkan").click(function(){
			
		  });
		});
		
		
	function edit_top_d(id)
	{
		var judul = document.getElementById("id_judul_"+id).value;
		var tulisan= document.getElementById("id_tulisan_"+id).value;
		var file_directory = document.getElementById("id_file_gambar_"+id).value;
		var load = "product-edit_top_d.php?id="+id+"&judul="+judul+"&tulisan="+tulisan+"&file="+file_directory ;
		document.getElementById("id_yang_akan_diedit").value = id ;
		
		//window.location.replace("product-edit_top_d.php?id="+id+"&judul="+judul+"&tulisan="+tulisan+"&file="+file_directory);
	}
	
	
	
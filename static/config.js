$(document).ready(function(){ // Ketika halaman sudah siap (sudah selesai di load)
	// Kita sembunyikan dulu untuk loadingnya
	$("#loading").hide();
	
	$("#provinsi").change(function(){ // Ketika user mengganti atau memilih data provinsi
		$("#kota").hide(); // Sembunyikan dulu combobox kota nya
		$("#loading").show(); // Tampilkan loadingnya
	
		$.ajax({
			type: "POST", 
			url: "option_kota.php", 
			data: {provinsi : $("#provinsi").val()}, 
			dataType: "json",
			beforeSend: function(e) {
				if(e && e.overrideMimeType) {
					e.overrideMimeType("application/json;charset=UTF-8");
				}
			},
			success: function(response){ 
				$("#loading").hide(); // Sembunyikan loadingnya

				// set isi dari combobox kota
				// lalu munculkan kembali combobox kotanya
				$("#kota").html(response.data_kota).show();
			},
			error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
				alert(thrownError); // Munculkan alert error
			}
		});
    });
});

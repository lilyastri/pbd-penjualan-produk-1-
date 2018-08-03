function search(){
  $("#loading").show(); 
  
  $.ajax({
        type: "POST", 
        url: "cari_produk.php",
        data: {id_produk : $("#id_produk").val()}, 
        dataType: "json",
        beforeSend: function(e) {
            if(e && e.overrideMimeType) {
                e.overrideMimeType("application/json;charset=UTF-8");
            }
    },
    success: function(response){ 
            $("#loading").hide(); 
            
            if(response.status == "success"){ 
        $("#nama_produk").val(response.nama_produk); 
        $("#harga_produk").val(response.harga_produk); 
      }else{ 
        alert("Data Tidak Ditemukan");
      }
    },
        error: function (xhr, ajaxOptions, thrownError) { 
      alert(xhr.responseText);
        }
    });
}

$(document).ready(function(){
  $("#loading").hide(); 
  
    $("#btn-search").click(function(){ 
        search(); 
    });
    
    $("#id_produk").keyup(function(){ 
    if(event.keyCode == 13){ 
      search(); 
    }
  });
});
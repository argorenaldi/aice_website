<script>
$("#formcontactus").submit(function(e) {
  e.preventDefault();
  var id_kategori = $("#id_kategori").val();
  var nama = $("#nama").val();
  var email = $("#email").val();
  var nohp = $("#nohp").val();
  var pesan = $("#pesan").val();
  
  if(id_kategori == "" || nama == "" || email == ""|| nohp == ""|| pesan == "") {
    $("#error_message").show().html("harap isi semua field");
  } else {
    $("#error_message").html("").hide();
    $.ajax({
      type: "POST",
      url: base_url + "home/tambah",
      data: "id_kategori="+id_kategori+"nama="+nama+"email="+email+"nohp="+nohp+"pesan="+pesan,
      success: function(data){
        $('#success_message').fadeIn().html(data);
        setTimeout(function() {
          $('#success_message').fadeOut("slow");
        }, 2000 );

      }
    });
  }
})
</script> 
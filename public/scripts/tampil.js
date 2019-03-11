$(document).ready(function() {
    selesai();
});
 
function selesai() {
  setTimeout(function() {
    update();
    selesai();
  }, 200);
}
 
function update() {
  $.getJSON("Asesmen/test", function(data) {
    $("ul").empty();
    $.each(data.result, function() {
      $("ul").append("<li>Nama : "+this['no_rm']+"</li><li>Kelas : "+this['poly']+"</li><li>Jurusan : "+this['id_dokter']+"</li><br />");
    });
  });
}
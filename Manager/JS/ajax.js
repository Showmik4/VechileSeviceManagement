
function read() {
    var read = "";
    $.ajax({
        method: "POST",
        url: "all_services_by_ajax_db.php",
        data: { read: read },
        success: function (data) {

            $("#tbody").html(data);
        }



    })



}

  $(".read ").click(function (){

    var category = $("#category").val();
    var cost = $("#cost").val();
  
    var image = $("#image").val();
  
   

    $.ajax({

        method: "POST",
        url: "all_services_by_ajax_db.php",
        data: { category: category, cost:cost,image:image},
        success: function () {
            read();
        }

    });




});








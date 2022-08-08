
function read() {
    var read = "";
    $.ajax({
        method: "POST",
        url: "all_promocode_by_ajax_db.php",
        data: { read: read },
        success: function (data) {

            $("#tbody").html(data);
        }



    })



}

  $(".read ").click(function (){

    var coupon_code = $("#coupon_code").val();
    var discount = $("#discount").val();
  
    var status = $("#status").val();
  
   

    $.ajax({

        method: "POST",
        url: "all_promocode_by_ajax_db.php",
        data: { coupon_code: coupon_code, discount:discount,status:status},
        success: function () {
            read();
        }

    });




});








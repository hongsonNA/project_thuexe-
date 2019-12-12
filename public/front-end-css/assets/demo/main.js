
     $(".changeStatus").click( function () {
         var _token = $('input[name="_token"]').val();
         console.log(_token);
         var  getID = $(this).attr("data-id");
        // console.log(getID);
         if (getID){
             $.ajax({
                type:"post",
                url:'change/'+getID,
                data:{getID:getID, _token:_token},
                 success:function (data) {
                     if (data){
                        alert('chuyen trang thai thanh cong');
                     }
                 }
             });
         }
     })
//     lay trang thai


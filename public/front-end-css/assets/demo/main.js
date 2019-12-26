// datatable
     $(document).ready(function () {
         // console.log('aaa')
         $('#waiting').DataTable({
             // "lengthMenu": true,
             pageLength: 0,
             lengthMenu: [5, 10, 20, 50],
             order: [[0, 'desc']],
             processing: true,
             serverSide: true,
             ajax: {
                 url: '/vehicles/allWaiting',

             },
             columns: [
                 {data: 'id', name: 'id'},
                 {data: 'user_id', name: 'user_id'},
                 {data: 'vehicle_id', name: 'vehicle_id'},
                 {data: 'start_date', name: 'start_date'},
                 {data: 'end_date', name: 'end_date'},
                 {data: 'status', name: 'status', orderable: false, searchable: false, className: "text-right"}
             ]
         });

         $("#see_status").on('change', function() {
             var table = $('#waiting').DataTable();
             table.column(1).
             search($(this).val()).
             draw();
         });

         var table = $('#waiting').DataTable();
         table.on( 'draw', function () {
             $(".changeStatus").on('click', function () {
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
                                 Swal.fire(
                                     'Thay đổi trạng thái thành công!',
                                     '',
                                     'success'
                                 )
                             }
                         }
                     });
                 }
             })
         //
             $(".dangerCar").click(function () {
                 Swal.fire({
                     title: 'Bạn sẽ hủy giao dịch này?',
                     // text: "You won't be able to revert this!",
                     icon: 'warning',
                     showCancelButton: true,
                     confirmButtonColor: '#3085d6',
                     cancelButtonColor: '#d33',
                     cancelButtonText: 'Hủy bỏ',
                     confirmButtonText: 'Đồng ý!'
                 }).then((result) => {
                     if (result.value) {
                         var _token = $('input[name="_token"]').val();
                         console.log(_token);
                         var  getID = $(this).attr("data-id");
                         console.log(getID);
                         $.ajax({
                             type:"post",
                             url:'danger/'+getID,
                             data:{getID:getID, _token:_token},
                             success:function (data) {
                                 if (data){
                                     Swal.fire(
                                         'Đã hủy!',
                                         '',
                                         'success'
                                     )
                                 }
                             }
                         });

                     }
                     //

                 })
             })
         //
         });

     });
//upload multiple  image


//end upload



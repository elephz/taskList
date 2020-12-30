<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>

   <div class="container">
       <div class="row">
           
               <div class="card my-5 mx-auto card-custom">
                   <div class="card-header">
                        <span>Task-List</span>
                   </div>
                   <div class="card-body">
                       <div class="row">
                           <div class="col">
                                <button class="btn btn-custom1 float-right my-2" data-toggle="modal" data-target="#modal_add">เพิ่มงาน</button>
                           </div>
                       </div>
                        <div class="row">
                            <table class='table table-responsive'>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>รายละเอียด</th>
                                        <th>สถานะ</th>
                                        <th>ดำเนินการ</th>
                                    </tr>
                                </thead>
                                <tbody id='tbody'>
                                   
                                </tbody>
                            </table>
                        </div>
                   </div>
               
           </div>
       </div>
        <!-- modal -->
    <div class="modal fade" id="modal_update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> <b>แก้ไขรายละเอียดงาน</b> </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class='w-100 mx-auto'>
                        <div class="form-group">
                            <label for="email">รายละเอียดงาน:</label>
                            <textarea name="task" id="task_edit" class="form-control" cols="50" rows="5"></textarea>
                        </div>
                        <input type="hidden" id='hidden_id' value="">
                        <button  class="btn-custom1 py-2 px-4 float-right save-edit">แก้ไข</button>
                    </form>
                </div>
            </div>
        </div>
    <!-- modal -->
   </div>

   <!-- modal -->
        <div class="modal fade" id="modal_add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> <b>เพิ่มงานใหม่</b> </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class='w-100 mx-auto'>
                        <div class="form-group">
                            <label for="email">รายละเอียดงาน:</label>
                            <textarea name="task" id="task" class="form-control" cols="50" rows="5"></textarea>
                        </div>
                        <button  class="btn-custom1 py-2 px-4 float-right save-btn">บันทึก</button>
                    </form>
                </div>
            </div>
        </div>
    <!-- modal -->
    
   
<script src="assets/jquery/jquery.js"></script>
<script src="assets/bootstrap/js/bootstrap.js"></script>
<script src="assets/script/main.js"></script>
</body>
</html>
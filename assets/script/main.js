$(document).ready(function() {
    console.log('hey');
    getdata();
    $("body").on("click", ".save-btn", function (e) {
        e.preventDefault();
        let val = $("#task").val();
        let data = {val,action:"addTask"};
        $.ajax({
            type: "POST",
            url: "assets/api/api.php",
            data: data,
            dataType: 'json',
            cache: false,
            success: function (result) {
                setTimeout(function () {
                    $("#modal_add").modal('hide');
                }, 300);
                $("#task").val('');
                getdata()
            }
        });
        
    });

// btn success
$("body").on("click", ".btn-success", function (e) { 
    let id = $(this).attr('data-id');
    let data = {id,action:'taskSuccess'}
    let tr = $(this).closest('tr');
    let btn = $(this);
    let detail = tr.find('#status');
    $.ajax({
        type: "POST",
        url: "assets/api/api.php",
        data: data,
        dataType: 'json',
        cache: false,
        success: function (result) {

           detail.html('ดำเนินการเสร็จสิ้น');
           btn.fadeOut('slow');
        }
    });
    
});
// btn set edit
$("body").on("click", ".btn-primary", function (e) { 
    
    let id = $(this).attr('data-id');
   let val = $(this).attr('data-detail');
   $("#task_edit").val(val);
   $("#hidden_id").val(id);
});
//btn save edit
$("body").on("click", ".save-edit", function (e) {
    e.preventDefault();
    let id = $("#hidden_id").val();
    let val = $("#task_edit").val();
    let data = {val,id,action:"editTask"};
    $.ajax({
        type: "POST",
        url: "assets/api/api.php",
        data: data,
        dataType: 'json',
        cache: false,
        success: function (result) {
            $("#modal_update").modal('hide');
            getdata()
        }
    });
    
});
// btn remove
$("body").on("click", ".btn-danger", function (e) { 
    let id = $(this).attr('data-id');
    let data = {id,action:'taskRemove'}
    let tr = $(this).closest('tr');
    
    
    $.ajax({
        type: "POST",
        url: "assets/api/api.php",
        data: data,
        dataType: 'json',
        cache: false,
        success: function (result) {
           tr.fadeOut('slow');
        }
    });
    
});

function getdata(){
 
    let data = {action:"getdata"}
    $.ajax({
        type: "POST",
        url: "assets/api/api.php",
        data: data,
        dataType: 'json',
        cache: false,
        success: function (result) {
            let rows = "";
            let i = 1;
            $.each(result.respond, function (k, v) {
                let status;
                let btnSuccess = '';
                if(v.task_status == '1'){
                    status = 'กำลังดำเนินการ';
                    btnSuccess =  `<button class="btn btn-success" data-id='${v.task_id}'>สำเร็จ</button>`;
                }else{
                    status = 'ดำเนินการเสร็จสิ้น';
                }
                let btnEdit =  `<button class="btn btn-primary" data-toggle="modal" data-target="#modal_update" data-detail='${v.task_detail}' data-id='${v.task_id}'>แก้ไข</button>`;
                let btnRemove =  `<button class="btn btn-danger" data-id='${v.task_id}'>ลบ</button>`;
                
                rows+=
                `
                    <tr>
                        <td id='fetch' >${i++}</td>
                        <td id='detail' >${v.task_detail}</td>
                        <td id='status' >${status}</td>
                        <td id='fetch' > ${btnSuccess} ${btnEdit}  ${btnRemove}</td>
                    </tr>
                `;
               
            });
            
            $("#tbody").empty().append(rows);
            
        }
    });
}
});
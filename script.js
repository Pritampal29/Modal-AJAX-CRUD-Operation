$(document).ready(function() {

    // Show Data in Dashboard

    function loadData(){
        $.ajax({
            url: 'fetch.php',
            type: 'post',
            success: function(data){
                $('#tab-data').html(data);
            }
        });
    }
    loadData();


    // Insert Data Into Database

    $('#subBtn').click(function(){
        var name = $('#uname').val();
        var email = $('#email').val();

        if(name != "" && email != "") {
            $.ajax({
                url: 'backend.php',
                type:'post',
                data: {
                    name:name,
                    email:email
                    },
                success: function(data) {
                    $('#regform').trigger('reset');
                    $(".btn-close").click();
                    loadData();
                }
            });
        }else{
            alert('Fill All Data Before Submit');
        }
    });


    // Delete Data From Database

    $(document).on('click','#dlt-btn',function(){
        if(confirm('Are You Sure ?')){
            var id = $(this).attr('data-did');
            var elem = this;
        
            $.ajax({
                url: 'backend.php',
                type: 'post',
                data: {
                    id:id
                },
                success: function(data) {
                    // $(elem).closest('tr').fadeOut(1000);
                    loadData();
                }
            });
        }
    });


    // Load Data in Modal

    $(document).on('click','#edit-btn',function(){
        $('.addbtn').click();
        var id = $(this).attr('data-eid');

        $.ajax({
            url: 'load_modal_update.php',
            type: 'post',
            data: {
                id:id
            },
            success: function(data) {
                $('.modal-body').html(data);
            }
        });
    });


    // Update Data Within Database

    $(document).on('click','#subBtn',function(){
        var id = $('#u-id').val();
        var name = $('#uname').val();
        var email = $('#email').val();

        $.ajax({
            url: 'update.php',
            type: 'post',
            data: {
                id:id,
                name: name,
                email: email
            },
            success: function(data) {
                $(".btn-close").click();
                loadData();
            }
        });
    });

    

});
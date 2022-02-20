$(function(){
    //Display projects list
    $.ajax({
        url: "includes/view_investments.php",
        type: "POST",
        cache: false,
        success: function(data){
            $('#investmentsList').html(data);
        }
    });

    //Add New Project
    $('#addProject').click(function(){
       let project = $('#projectName').val();
       let deposit = $('#deposit').val();
       $.post('includes/add_project.ini.php',
           {project:project,deposit:deposit}, function(data,status){
               $('#addedProject').show().html(data);
               $('#addInvForm').hide();
               $('#addProjectAgain').show();
               //Refresh projects list
               $.ajax({
                   url: "includes/view_investments.php",
                   type: "POST",
                   cache: false,
                   success: function(data){
                       $('#investmentsList').html(data);
                   }
               });
           });
    });

    $('#addProjectAgain').click(function (){
        $('#addInvForm').show();
        $('#addProjectAgain').hide();
        $('#addedProject').hide();
        $('#projectName').val("");
        $('#deposit').val("");
    });
    //Edit Project By ID
    $("#investmentsList").on("click",$('.btn'),function(e){
        $('#editInvForm').show();

        let id = $(e.target).attr("id");

        if (id === ""){
            alert("Invalid project ID")
        }else if (id === undefined){
            alert("Invalid project id")
        }else{
            $.post('includes/project_info.inc.php',
                {project_id: id}, function (data, status){
                    $('#projectToDelete').show().html(data);
                    $('#projectToUpdate').show().html(data);
                });
        }

        //Delete Project
        $('#deleteProject').off('click').click(function() {

            $('#confirmDeleteProjectBtn').off('click').click(function() {

                $.post('includes/delete.inc.php',
                    {project_id: id}, function (data, status){
                        $('#deletedProject').html(data).show();
                        $('#projectToDelete').hide();
                        $('#confirmDeleteProjectBtn').hide();
                        $.ajax({
                            url: "includes/view_investments.php",
                            type: "POST",
                            cache: false,
                            success: function (data) {
                                $('#investmentsList').html(data);
                            }
                        });
                    });
            });
            $('#closeDeleteModalBtn').click(function (){
                $('#deletedProject').hide();
                $('#projectToDelete').show();
                $('#confirmDeleteProjectBtn').show();
            });
        });

        //Edit Project
        $('#saveEditProject').off('click').click(function() {
            let amount = $('#editProjectAmount').val();
            let option = $('#editProjectAction').find(":selected").val();

            if (option === "" || option === undefined ){

                alert("Please select option");

            }else if (amount === undefined || amount === 0 || amount === "" || isNaN(amount || amount < 0)){

                alert("Please, Enter amount!");

            }else {
                $.post('includes/edit_project.inc.php',
                    {project_id: id, option:option, amount:amount}, function (data, status) {
                        $('#editedProject').show().html(data);
                        $('#editInvForm').hide();
                        $('#editProjectAgain').show();
                        // Refresh projects list
                        $.ajax({
                            url: "includes/view_investments.php",
                            type: "POST",
                            cache: false,
                            success: function (data) {
                                $('#investmentsList').html(data);
                            }
                        });
                    });
            }
        });
    });
    $('#editProjectAgain').click(function (){
        $('#editInvForm').show();
        $('#editProjectAgain').hide();
        $('#editedProject').hide();
        $('#editProjectAmount').val("");
    });

    $('#closeEditModal').click(function (){
        $('#editProjectAgain').hide();
        $('#editedProject').hide();
        $('#editProjectAmount').val("");
    });
});
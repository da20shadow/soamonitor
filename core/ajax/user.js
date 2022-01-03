/* Convert Points Ajax Start Here */
$(function(){
    $('#convertPointsBtn').off('click').click(function(){
        let points = $('#points').val();

        $.post('includes/convert_points.php',
            {points:points}, function(data,status){
                $('#convertedPointsSuccess').html(data);
                //Refresh projects list
                // $.ajax({
                //     url: "includes/account.php",
                //     type: "POST",
                //     cache: false,
                //     success: function(data){
                //         $('#investmentsList').html(data);
                //     }
                // });
            });
    });
});


$( document ).ready(function() {
    $("#btn").click(
        function(){
            var formData = new FormData();
            formData.append('file', $('#file')[0].files[0]);
            $.ajax({
                url:   'processFile',
                type:     "POST",
                processData: false,
                contentType: false,
                dataType: "multipart/form-data",
                data: formData,
                success: function(response) {
                    $('#cards').html(response.responseText);
                },
                error: function(response) { // Данные не отправлены
                    console.log(response.responseText)
                    $('#cards').html(response.responseText);
                }
            });
            return false;
        }
    );
});

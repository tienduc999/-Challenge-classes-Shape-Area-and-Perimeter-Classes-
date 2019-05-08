$(document).ready(function () {
    $('#type').change(function () {
        $('.shape').hide();
        $('.result').hide();
        switch (parseInt($('#type').val())) {
            case 1:
                $('.rectangle').show();
                break;
            case 2:
                $('.square').show();
                break;
            case 3:
                $('.triangle').show();
                break;
            case 4:
                $('.rhombus').show();
                break;
            case 5:
                $('.circle').show();
                break;
        }
    });
    $('#btn').click(function () {
        $.ajax({
            url: "/api.php",
            data: {
                type: $("#type").val(),
                length: $("#length").val(),
                width: $("#width").val(),
                slide_a: $("#slide-a").val(),
                slide_b: $("#slide-b").val(),
                slide_c: $("#slide-c").val(),
                diagonal_line_1: $("#diagonal-line-1").val(),
                diagonal_line_2: $("#diagonal-line-2").val(),
                radius: $("#radius").val(),
            },
            type: 'POST',
            success: function(data){
                data = JSON.parse(data);
                $('.result').show();
                $('#acreage').text(data.acreage);
                $('#perimeter').text(data.perimeter);
            }
        });
        return false
    })
});
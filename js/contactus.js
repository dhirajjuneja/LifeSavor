$(document).ready(function(){
    $('#click').click(function(e){
        e.preventDefault();
        var name=$('#con-name').val();
        var email=$('#con-email').val();
        var number=$('#con-num').val();
        var subject=$('#subject').val();

        $.ajax({
            type:"post",
            url:"php/contactpage.php",
            data:{'name':name,'email':email,'number':number ,'subject':subject },
            success:function(data){
                $('#result').html(data);
            }
        })
    })
})
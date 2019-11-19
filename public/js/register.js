$('#registerBtn').click(function(e){
    e.preventDefault();
    let form = $("#registerForm");
    $.ajax({
        type:'post',
        url:'/registerUser',
        data: form.serialize(),
        dataType: "json",

    });
    success: function success(data){
        console.log('data',data)


    }

});
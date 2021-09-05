
const register_attr = $('#registerButton').attr('class');
disableRegisterButton();
$('#FirstInputPassword1').keydown(function(){
    let elem = $(this)
    if(elem.val().length <7){
        $('#p1').text("Боже! У вас занадто короткий...");
        disableRegisterButton();
    }
    else {
        $('#p1').html("<font style='color:green'>Ого! Який гігант</font>");
        setTimeout(function(){
            console.log(check_all_params_reg())
            if(check_all_params_reg()){
                enableRegisterButton();
            }
        },10)
        
    }
})
$('#SecondInputPassword1').keyup(function(){
    let elem = $(this)
    if(elem.val()== $('#FirstInputPassword1').val()){
        $('#p2').html("<font style='color:green'>Ідеально</font>");
        setTimeout(function(){
            console.log(check_all_params_reg())
            if(check_all_params_reg()){
                enableRegisterButton();
            }
        },10)
    }
    else {
        
        $('#p2').text("Ох... нажаль паролі різні.");
        disableRegisterButton();
    }
})
function disableRegisterButton(){
    let elem = $('#registerButton');
    let attr_class = elem.attr('class');
    attr_class = attr_class + " disabled";
    elem.attr('class', attr_class);
}
function enableRegisterButton(){
    let elem = $('#registerButton');
   
    elem.attr('class', register_attr );
}
function check_all_params_reg(){
    
    if($('#FirstInputPassword1').val().length > 7 &&  $('#FirstInputPassword1').val() == $('#SecondInputPassword1').val()  ){
      
        return true;

        
    }
    return false;
}
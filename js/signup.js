
function check_send(){
    var check = true;
    let fullName = document.getElementById('fullName').value;
    let errorFN = document.getElementById('errorFN');
    let user = document.getElementById('userName').value;
    let error = document.getElementById('errorUser');
    let pass = document.getElementById('userPass').value;
    let errorPass = document.getElementById('errorPass');
    let password = document.getElementById('rePass').value;
    let errorPw = document.getElementById('errorPw');
    let email = document.getElementById('email').value;
    let errorEmail = document.getElementById('errorEmail');
    let phone = document.getElementById('phone').value;
    let errorPhone = document.getElementById('errorPhone');
    let address = document.getElementById('address').value;;
    let errorAddress = document.getElementById('errorAddress');

    //user đk username

    var userCheck = /^[a-zA-Z0-9_]*$/;
    var checkUser = userCheck.test(user);
    if(user == ""){
        
        error.innerHTML = "Vui lòng nhập username của bạn";
        check = false;
  
    }else if(checkUser === true && user != ''){
                error.innerHTML='';
            }
            else{
                error.innerHTML= "Tên đăng nhập không có khoảng trống, bắt đầu bằng một ký tự";
                check = false;
            }



    /*pass */

      //dk pass word
      let passCheck =  /^(?=.*?[a-z])(?=.*?[0-9])$/;
      let checkPass = passCheck.test(pass);// true false
  
     
    if(pass == ""){
        errorPass.innerHTML= "Vui lòng nhập password của bạn";
        check = false;
    }
    else  if(checkPass == false){
            errorPass.innerHTML= "Mật khẩu phải có 8 ký tự, một chữ thường";
            check = false;
        }else{
            errorPass.innerHTML = "";
        }
            

    /*nhập lại pass */
    if(password == ""){
        errorPw.innerHTML= "Vui lòng nhập lại password của bạn";
        check = false;
    }
    else if(pass != password){
        
        errorPw.innerHTML = "Mật khẩu không trùng khớp";
        check = false;
    }else{
        errorPw.innerHTML="";
    }


    // Họ
    if(fullName == ""){
        errorFN.innerHTML= "Vui lòng nhập họ của bạn";
        check = false;
    }
    else{
        errorFN.innerHTML =""
    }

    //Email
    if(email == ""){
        errorEmail.innerHTML= "Vui lòng nhập email của bạn";
        check = false;
    }
    else{
        errorEmail.innerHTML =""
    }

    //phone

    let phoneCheck =  /^[0-9]{10}$/;
    let checkPhone = phoneCheck.test(phone);// true false
    if(phone == ""){
        errorPhone.innerHTML= "Vui lòng nhập số điện thoại của bạn";
        check = false;
    }
    else if(checkPhone == false){
            errorPhone.innerHTML = "Số điện thoại phải có 10 số";
            check = false;
        }else{
            errorPhone.innerHTML="";
        
    }

    //adress
    if(address == ""){
        errorAddress.innerHTML= "Vui lòng nhập địa chỉ của bạn";
        check = false;
    }else{
        errorAddress.innerHTML ="";
    }
    
    return check;

}

function result(){
    let a = check_send();
    if(a == true){
        alert("Đăng ký thành công!!!")
    }
}

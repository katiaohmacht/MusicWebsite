function passWord() {
    var testV = 1;
    var pass1 = prompt('Please Enter Your Password',' ');
    while (testV < 3) {
    if (!pass1)
    history.go(-1);
    if (pass1.toLowerCase() == "password") {
    window.open('https://musicmeasures.ddns.net/instructoraccess.html');
    break;
    }
    testV+=1;
    var pass1 =
    prompt('Password Incorrect, Please Try Again.','Password');
    }
    if (pass1.toLowerCase()!="password" & testV ==3)
    window.open('https://musicmeasures.ddns.net/index.html');
    history.go(-1);
    return " ";
    }
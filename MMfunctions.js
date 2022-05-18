function passWord() {
    let testV = 1;
    var pass1 = prompt('Please Enter Your Password', ' ');
    if (pass1 !== null) {
        while (testV < 3) {
            if (!pass1) history.go(-1);
            if (pass1.toLowerCase() == "password") {
                console.log("it worked!!");
                window.open('https://musicmeasures.ddns.net/instructoraccess.html');
                break;
            }
            testV += 1;
            let pass1 =
            prompt('Password Incorrect, Please Try Again.','Password');
        }
        if (pass1.toLowerCase()!="password" & testV == 3) {
            window.open('https://musicmeasures.ddns.net/index.html');
        } else {
            history.go(-1);
        }
        return " ";
    }
}
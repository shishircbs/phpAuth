function validation() {
    var Us = documnet.Login.user.value;
    var Ps = document.Login.pass.value;
    if (Us.length == "" && Ps.length == "") {
        alert("Please enter username and passsword.")
        return false;

    }
    else {
        if (Us.length == "")
        {
            alert("Please enter username");
            return false;
        }
        if (Ps.length == "")
        {
            alert("Please enter password");
            return false;
        }
    }

}
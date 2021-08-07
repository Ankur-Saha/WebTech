function validate() {
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var uname = document.getElementById("uname").value;
  var pass = document.getElementById("pass").value;
  var cPass = document.getElementById("cPass").value;
  var gender = document.getElementById("gender").value;
  var date = document.getElementById("date").value;
  var month = document.getElementById("month").value;
  var year = document.getElementById("year").value;
  var dept = document.getElementById("dept").value;
  var position = document.getElementById("position").value;
  var id = document.getElementById("id").value;

  positionCheck();
  genderCheck();
  deptCheck();
}

function nameCheck() {
  if (document.getElementById("name").value == "") {
    document.getElementById("msg1").innerHTML = "Name is required";
    document.getElementById("msg1").style.color = "red";
    document.getElementById("name").style.borderColor = "red";
  } else if (document.getElementById("name").value.split(" ").length < 2) {
    document.getElementById("msg1").innerHTML = "Name must contain 2 words";
    document.getElementById("msg1").style.color = "red";
    document.getElementById("name").style.borderColor = "red";
  } else {
    document.getElementById("msg1").innerHTML = "";
    document.getElementById("name").style.borderColor = "black";
  }
}

function emailCheck() {
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (document.getElementById("email").value == "") {
    document.getElementById("msg2").innerHTML = "Email is required";
    document.getElementById("msg2").style.color = "red";
    document.getElementById("email").style.borderColor = "red";
  } else if (!document.getElementById("email").value.match(mailformat)) {
    document.getElementById("msg2").innerHTML = "Enter valid Email";
    document.getElementById("msg2").style.color = "red";
    document.getElementById("email").style.borderColor = "red";
  } else {
    document.getElementById("msg2").innerHTML = "";
    document.getElementById("email").style.borderColor = "black";
  }
}

function unameCheck() {
  if (document.getElementById("uname").value == "") {
    document.getElementById("msg3").innerHTML = "Username is required";
    document.getElementById("msg3").style.color = "red";
    document.getElementById("uname").style.borderColor = "red";
  } else if (document.getElementById("uname").value.length < 2) {
    document.getElementById("msg3").innerHTML =
      "Username must contain atleast 2 characters";
    document.getElementById("msg3").style.color = "red";
    document.getElementById("uname").style.borderColor = "red";
  } else {
    document.getElementById("msg3").innerHTML = "";
    document.getElementById("uname").style.borderColor = "black";
  }
}

function passCheck() {
    var passMatch = /[@#$%]/;
  if (document.getElementById("pass").value == "") {
    document.getElementById("msg4").innerHTML = "Password is required";
    document.getElementById("msg4").style.color = "red";
    document.getElementById("pass").style.borderColor = "red";
  } else if (document.getElementById("pass").value.length < 8 ) {
      document.getElementById("msg4").innerHTML = "Password must contain atleast 8 characters";
      document.getElementById("msg4").style.color = "red";
      document.getElementById("pass").style.borderColor = "red";
    } else if (!document.getElementById("pass").value.match(passMatch)) {
      document.getElementById("msg4").innerHTML ="Password must contain a special character";
      document.getElementById("msg4").style.color = "red";
      document.getElementById("pass").style.borderColor = "red";
    }else{
        document.getElementById("msg4").innerHTML = "";
        document.getElementById("pass").style.borderColor = "black";
    }
  }


function cPassCheck() {
  if (document.getElementById("cPass").value == "") {
    document.getElementById("msg5").innerHTML = "Confirm Password is required";
    document.getElementById("msg5").style.color = "red";
    document.getElementById("cPass").style.borderColor = "red";
  } else if (document.getElementById("cPass").value != document.getElementById("pass").value) {
      document.getElementById("msg5").innerHTML = "Passwords does not match";
      document.getElementById("msg5").style.color = "red";
      document.getElementById("cPass").style.borderColor = "red";
    }else{
        document.getElementById("msg5").innerHTML = "";
        document.getElementById("cPass").style.borderColor = "black";
    }
  }


function genderCheck() {
    if (!document.getElementById("gender").checked) {
      alert("Gender is required");
      return false;
    }else if (document.getElementById("gender").checked){
      return true;
    }
  }

function dateCheck() {
  if (document.getElementById("date").value == "") {
    document.getElementById("msg7").innerHTML = "Date is required";
    document.getElementById("msg7").style.color = "red";
    document.getElementById("date").style.borderColor = "red";
  } else if (document.getElementById("date").value <1 || document.getElementById("date").value >31) {
      document.getElementById("msg7").innerHTML = "Enter a valid date";
      document.getElementById("msg7").style.color = "red";
      document.getElementById("date").style.borderColor = "red";
    }else{
        document.getElementById("msg7").innerHTML = "";
        document.getElementById("date").style.borderColor = "black";
    }
  }


function monthCheck() {
  if (document.getElementById("month").value == "") {
    document.getElementById("msg8").innerHTML = "Month is required";
    document.getElementById("msg8").style.color = "red";
    document.getElementById("month").style.borderColor = "red"; 
  } else if (document.getElementById("month").value < 1 || document.getElementById("month").value > 12) {
      document.getElementById("msg8").innerHTML = "Enter a valid month";
      document.getElementById("msg8").style.color = "red";
      document.getElementById("month").style.borderColor = "red"; 
    }else{
        document.getElementById("msg8").innerHTML = "";
        document.getElementById("month").style.borderColor = "black";
    }
  }


function yearCheck() {
  if (document.getElementById("month").value == "") {
    document.getElementById("msg9").innerHTML = "Year is required";
    document.getElementById("msg9").style.color = "red";
    document.getElementById("year").style.borderColor = "red"; 
  } else if (document.getElementById("year").value < 1901 || document.getElementById("year").value > 2000) {
      document.getElementById("msg9").innerHTML = "Enter a valid year";
      document.getElementById("msg9").style.color = "red";
      document.getElementById("year").style.borderColor = "red";
    }else{
        document.getElementById("msg9").innerHTML = "";
        document.getElementById("year").style.borderColor = "black";
    }
  }

function deptCheck() {
  if (!document.getElementById("dept").checked) {
    alert("Department is required");
    return false;
  }else if (document.getElementById("dept").checked){
    return true;
  }
}

function positionCheck() {
    if (!document.getElementById("position").checked) {
      alert("Gender is required");
      return false;
    }else if (document.getElementById("gender").checked){
      return true;
    }
  }

function idCheck() {
  if (document.getElementById("id").value == "") {
    document.getElementById("msg12").innerHTML = "ID is required";
    document.getElementById("msg12").style.color = "red";
    document.getElementById("id").style.borderColor = "red"; 
  }
  else{
    document.getElementById("msg12").innerHTML = "";
    document.getElementById("id").style.borderColor = "black";
  }
}

function logUnameCheck () {
  if (document.getElementById("luname").value == ""){
    document.getElementById("msg13").innerHTML = "User Name is required";
    document.getElementById("msg13").style.color = "red";
    document.getElementById("luname").style.borderColor = "red";
  }
  else{
    document.getElementById("msg13").innerHTML = "";
    document.getElementById("luname").style.borderColor = "black";
  }
}

function logPassCheck () {
  if (document.getElementById("lpass").value == ""){
    document.getElementById("msg13").innerHTML = "Password is required";
    document.getElementById("msg13").style.color = "red";
    document.getElementById("lpass").style.borderColor = "red";
  }
  else{
    document.getElementById("msg13").innerHTML = "";
    document.getElementById("lpass").style.borderColor = "black";
  }
}
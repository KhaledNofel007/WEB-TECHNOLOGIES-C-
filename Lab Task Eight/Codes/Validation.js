function valName() {
    let a = document.forms["Validation"]["FirstName"].value;
    let b = document.forms["Validation"]["LastName"].value;
    let pattern = /^[a-zA-Z]+$/;
  
    if (a == "" || b == "") {
      alert("Name Can Not Be Empty!");
      return false;
    } else if (pattern.test(a) == false || pattern.test(b) == false) {
      alert("Name Is Not Valid!");
      //return false;
    }  
}

function valMail() {
  let c = document.forms["Validation"]["email"].value;
  let pattern = /(\w+)@(\w+){3,}.com/;

  if (c == "") {
    alert("Email Can Not Be Empty");
    return false;
  } else if (pattern.test(c) == false) {
    alert("Email Is Not Valid!");
    //return false;
  }
}

function valGender() {
  let d = document.forms["Validation"]["gender"].value;
  if (d == "") {
    alert("Gender Can Not Be Empty");
    return false;
  }
}

function valDOB() {
  let e = document.forms["Validation"]["DOB"].value;
  if (e == "") {
    alert("Date of Birth Can Not Be Empty!");
    return false;
  }
}

function valPass() {
  let x = document.forms["Validation"]["password"].value;
  let y = document.forms["Validation"]["conPassword"].value;

  if (x == "") {
    alert("Password Can Not Be Empty!");
    return false;
  } else if (x.length <= 8) {
    alert("Password Can Not Be Less Than 8 Characters!");
    return false;
  } else if (x !== y) {
    alert('Password Did Not Match!');
    return false;
  }
}
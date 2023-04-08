// Validation //

// Enquire form validation

function enquire(val) {
    var returnval = true;
    clearErrors();

    var enname = val + "enname";
    var enemail = val + "enemail";
    var enphone = val + "enphone";
    var enproject = val + "enproject";

    // Name
    var name = document.forms[val]["name"].value;
    if (name.length == 0) {
        seterror(enname, "*Name is required");
        returnval = false;
    } else if (!isNaN(name)) {
        seterror(enname, "*Enter valid name");
        returnval = false;
    }

    // Email
    var email = document.forms[val]["email"].value;
    if (email.length == 0) {
        seterror(enemail, "*Email is required");
        returnval = false;
    }

    // phone
    var phone = document.forms[val]["phone"].value;
    if (phone.length == 0) {
        seterror(enphone, "*phone no is required");
        returnval = false;
    } else if (phone.length != 10) {
        seterror("enphone", "*Phone number should be of 10 digits!");
        returnval = false;
    } else if (isNaN(phone)) {
        seterror("enphone", "*Enter only number");
        returnval = false;
    }

    // message
    var projectinfo = document.forms[val]["project-info"].value;
    if (projectinfo.length == 0) {
        seterror(enproject, "*This is required");
        returnval = false;
    }
    return returnval;

}

//  Message form validation 
function validateForm() {
    var returnval = true;
    clearErrors();

    // Name
    var fname = document.forms['myForm']["fname"].value;
    if (fname.length == 0) {
        seterror("fname", "*First name is required");
        returnval = false;
    } else if (!isNaN(fname)) {
        seterror("fname", "*Enter valid name");
        returnval = false;
    }

    var lname = document.forms['myForm']["lname"].value;
    if (lname.length == 0) {
        seterror("lname", "*Last name is required");
        returnval = false;
    } else if (!isNaN(lname)) {
        seterror("lname", "*Enter valid name");
        returnval = false;
    }

    // Email
    var email = document.forms['myForm']["email"].value;
    if (email.length == 0) {
        seterror("email", "*Email is required");
        returnval = false;
    }

    // phone
    var phone = document.forms['myForm']["phone"].value;
    if (phone.length == 0) {
        seterror("phone", "*phone no is required");
        returnval = false;
    } else if (phone.length != 10) {
        seterror("phone", "*Phone number should be of 10 digits!");
        returnval = false;
    } else if (isNaN(phone)) {
        seterror("phone", "*Enter only number");
        returnval = false;
    }

    // message
    var msg = document.forms['myForm']["msg"].value;
    if (msg.length == 0) {
        seterror("msg", "*message is required");
        returnval = false;
    }
    return returnval;
}
//  Email form validation 
function newssub() {
    var returnval = true;
    clearErrors();

    // Email
    var submail = document.forms['subform']["submail"].value;
    if (submail.length == 0) {
        seterror("submail", "*Email is required");
        returnval = false;
    }

    return returnval;
}

// validation form error clears
function clearErrors() {
    errors = document.getElementsByClassName('formerror');
    for (let item of errors) {
        item.innerHTML = "";
    }
}

function seterror(id, error) {
    //sets error inside tag of id 
    element = document.getElementById(id);
    element.getElementsByClassName('formerror')[0].innerHTML = error;
}

//  data send 
function formdata(val1, val2) {
    document.getElementById("type").value = val1;
    document.getElementById("subtype").value = val2;
}
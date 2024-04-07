const NameValid = (elem) => {

    if (/^[a-zA-Z ]+$/.test(elem.value.trim())) {
        displayMsg(elem, "Good", true);
        return true;
    } else {
        const msg = elem === "" ? "*Field is required" : "Name is not valid";
        displayMsg(elem, msg, false);
        return false;
    }
}
const emailValid = () => {
    const email = document.querySelector("#email");

    if (/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email.value.trim())) {
        displayMsg(email, "Good", true);
        return true;
    } else {
        const msg = email === "" ? "*Field is required" : "Email is not valid";
        displayMsg(email, msg, false);
        return false;
    }
}
const passwordValid = () => {
    const password = document.querySelector("#Password");

    if (/^(?=.*[a-zA-Z])(?=.*\d)(?=.*[@#!$%^&])[A-Za-z\d@#!$%^&]{8,}$/
        .test(password.value.trim())) {
        displayMsg(password, "Good", true);
        return true;
    } else {
        const msg = password === "" ? "*Field is required" : "Password is not valid";
        displayMsg(password, msg, false);
        return false;
    }
}
const confirmpasswordValid = () => {
    const password = document.querySelector("#confirmPass");

    if (password.value == document.querySelector('#Password').value) {
        displayMsg(password, "Password Match", true);
        return true;
    } else {
        displayMsg(password, "Password does not match", false);
        return false;
    }
}

const displayMsg = (elem, msg, isValid) => {
    const errorElementId = elem.id + 'Error';
    const errorElement = document.getElementById(errorElementId);

    if (isValid) {
        errorElement.textContent = msg;
        errorElement.style.color = 'green';
    } else {
        errorElement.textContent = msg;
        errorElement.style.color = 'red';
    }
}

document.querySelector("form").addEventListener("submit", e => {
    e.preventDefault();

    let form = new FormData();



    form.append("first_name", document.querySelector("#firstName").value);
    form.append("last_name", document.querySelector("#lastName").value);
    form.append("father_name", document.querySelector("#father").value);
    form.append("email", document.querySelector("#email").value);
    form.append("password", document.querySelector("#confirmPass").value);
    form.append("file", document.querySelector("#file").files[0]);
    form.append("address", document.querySelector("#fullAddress").value);
    form.append("town", document.querySelector("#town").value);
    form.append("district", document.querySelector("#district").value);
    form.append("province", document.querySelector("#province").value);
    form.append("country", document.querySelector("#country").value);
    form.append("postal", document.querySelector("#postal").value);
    form.append("cnic", document.querySelector("#cnic").value);
    form.append("bday", document.querySelector("#bday").value);
    form.append("martial", document.querySelector('input[name="marri"]:checked').value);
    form.append("gender", document.querySelector('input[name="gender"]:checked').value);
    form.append("mobile_num", document.querySelector('#mobNumber').value);
    form.append("whatsapp_num", document.querySelector('#whatNumber').value);
    form.append("degree", document.querySelector('#degree').value);
    form.append("uni_clg", document.querySelector('#uni-clg').value);
    form.append("degreeComplete", document.querySelector('#degreeComplete').value);
    form.append("legal_city", document.querySelector('#legal_city').value);
    form.append("enrolmentYear", document.querySelector('#enrolmentYear').value);
    form.append("enrolementType", document.querySelector('#enrolementType').value);
    form.append("expertise", document.querySelector('#expertise').value);
    form.append("facebook", document.querySelector('#facebook').value);
    form.append("twitter", document.querySelector('#twitter').value);
    form.append("linkedin", document.querySelector('#linkedin').value);
    form.append("instagram", document.querySelector('#instagram').value);
    form.append("aboutLawyer", document.querySelector('#aboutLawyer').value);

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "assets/php/registerLawyer.php", true);

    xhr.onreadystatechange = () => {
        if (xhr.status == 200 && xhr.readyState == 4) {
            window.location.href = xhr.responseText;
        }
    };

    xhr.send(form);

})
const inputs = document.querySelectorAll(".input");


function addcl() {
    let parent = this.parentNode.parentNode;
    parent.classList.add("focus");
}

function remcl() {
    let parent = this.parentNode.parentNode;
    if (this.value == "") {
        parent.classList.remove("focus");
    }
}


inputs.forEach(input => {
    input.addEventListener("focus", addcl);
    input.addEventListener("blur", remcl);
});

const good = (error) => {
    error.classList.remove("fa-xmark");
    error.classList.add("fa-check");
    error.style.display = "block";
    error.style.color = "green";
}

const bad = (error) => {
    error.classList.remove("fa-check");
    error.classList.add("fa-xmark");
    error.style.display = "block";
    error.style.color = "red";
}

const usernameValidate = () => {
    let username = document.querySelector("#username");
    let error = document.querySelector("#userError");

    if (/^[a-zA-Z ]+$/.test(username.value)) {
        good(error)
        return true;
    } else {
        bad(error)
        return false;
    }
};

const emailValidate = () => {
    let email = document.querySelector("#email");
    let error = document.querySelector("#emailError")

    if (/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email.value)) {
        good(error)
        return true;
    } else {
        bad(error)
        return false;
    }
};

const numValidate = () => {
    let number = document.querySelector("#number");
    let error = document.querySelector("#phoneE")

    if (/^\+\d{1,3}\s?\d*\s?\d+$/.test(number.value)) {
        good(error)
        return true;
    } else {
        bad(error)
        return false;
    }
};

const passwordValidate = () => {
    let password = document.querySelector("#password");
    let error = document.querySelector("#passError")
    if (/^(?=.*[@#$%^])(?=.*[a-zA-Z]).{8,}$/
        .test(password.value)) {
        good(error)
        return true;
    } else {
        bad(error)
        return false;
    }
};


document.querySelector("form").addEventListener("submit", e => {
    e.preventDefault();
    let name = usernameValidate()
    let email = emailValidate()
    let number = numValidate()
    let password = passwordValidate()
    if (name && email && number && password) {
        let form = new FormData();
        form.append("username", document.querySelector("#username").value);
        form.append("email", document.querySelector("#email").value);
        form.append("number", document.querySelector("#number").value);
        form.append("password", document.querySelector("#password").value);

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "assets/php/registerCode.php", true);

        xhr.onreadystatechange = () => {
            if (xhr.status == 200 && xhr.readyState == 4) {
                window.location.href = xhr.responseText;
                // console.log(xhr.responseText);
            }
        }
        
        xhr.send(form);
    } else {
    }
});
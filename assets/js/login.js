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
    let email = emailValidate()
    let password = passwordValidate()
    if (email && password) {
        let form = new FormData();
        form.append("email", document.querySelector("#email").value);
        form.append("password", document.querySelector("#password").value);

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "assets/php/loginCode.php", true);

        xhr.onreadystatechange = () => {
            if (xhr.status == 200 && xhr.readyState == 4) {
                window.location.href = xhr.responseText;
            }
        }
        
        xhr.send(form);
    } else {
    }
});
let signup = document.querySelector(".signup_link [type='reset']")
let login = document.querySelector(".login_link [type='reset']")
let registration_box = document.querySelector(".registration_side")

if (localStorage.getItem("form_state") === "signup") {
    registration_box.classList.add("active");
} else {
    registration_box.classList.remove("active");
}

signup.addEventListener("click", (e) => {
    registration_box.classList.add("active");
    localStorage.setItem("form_state", "signup");
});

login.addEventListener("click", (e) => {
    registration_box.classList.remove("active");
    localStorage.setItem("form_state", "login");
});


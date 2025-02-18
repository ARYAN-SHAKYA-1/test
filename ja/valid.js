is_valid = () => {
  let name = document.getElementById("name").value;
  let email = document.getElementById("email").value;
  let pass = document.getElementById("pass").value;
  let i = 0;
  let name_flag = 0;
  let email_flag = 0;
  if (name == "" || name == "null") {
    alert("please enter ur name");
    name_flag = 1;
  }
  const rgx = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!rgx.test(email)) {
    alert("enter a valid email address");
    email_flag = 1;
  }
  if (length(pass) < 8) {
    alert("password is to short");
  }
  console.log(length(pass));
};

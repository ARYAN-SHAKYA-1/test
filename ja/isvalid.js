is_it_valid = () => {
  let email = document.getElementById("l_email").value;
  let pass = document.getElementById("l_pass").value;
  let flag = 0;

  const rgx = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!rgx.test(email)) {
    alert("enter a valid email address");
    email_flag = 1;
  }
  if (pass.length < 8) {
    alert("password is to short");
    flag = 1;
  }
  if (flag === 0) {
    return true;
  } else {
    return false;
  }
};

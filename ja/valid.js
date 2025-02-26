is_valid = () => {
  let name = document.getElementById("name").value;
  let email = document.getElementById("email").value;
  let pass = document.getElementById("password").value;
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
  if (pass.length < 8) {
    alert("password is to short");
  }
  console.log(length(pass));
};
async function getData() {
  const reload = await fetch("https://www.hamropatro.com/gold", {
    method: "get",
  });
  const data = await reload.text();
  let parser = new DOMParser();
  let dom = parser.parseFromString(data, "text/html");
  let goldprice = dom.querySelector("ul.gold-silver li:nth-child(2)").innerHTML;
  let silverprice = dom.querySelector(
    "ul.gold-silver li:nth-child(6)"
  ).innerHTML;
  return {
    goldprice,
    silverprice,
  };
}

async function priceg() {
  const data = await getData();
  document.getElementById("gold-value").innerHTML = data.goldprice;
}

async function prices() {
  const data = await getData();
  document.getElementById("silver-value").innerHTML = data.silverprice;
}

priceg();
prices();

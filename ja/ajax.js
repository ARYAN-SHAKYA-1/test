async function getdata_g() {
  const response = await fetch("https://www.hamropatro.com/gold", {
    method: "get",
  });
  const data = await response.text();
  let parasa = new DOMParser();
  let doc = parasa.parseFromString(data, "text/html");
  let goldPrice = doc.querySelector("ul.gold-silver li:nth-child(2)").innerHTML;
  console.log(goldPrice);
  document.getElementById("gold-value").innerHTML = goldPrice;
}

async function getdata_s() {
  const response = await fetch("https://www.hamropatro.com/gold", {
    method: "get",
  });
  const data = await response.text();
  let parasa = new DOMParser();
  let doc = parasa.parseFromString(data, "text/html");
  let silverPrice = doc.querySelector(
    "ul.gold-silver li:nth-child(6)"
  ).innerHTML;
  document.getElementById("silver-value").innerHTML = silverPrice;
}

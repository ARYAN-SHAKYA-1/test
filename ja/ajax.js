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

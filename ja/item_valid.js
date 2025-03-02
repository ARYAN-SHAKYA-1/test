valid = () => {
  let name = document.getElementById("item").value;
  let quantity = document.getElementById("qty").value;
  let cp = document.getElementById("cp").value;
  let flag = 0;
  if (name == "" || name == NULL) {
    alert("enter items name");
    flag = 1;
  }
  if (quantity == "" || quantity == NULL) {
    alert("enter items quantity");
    flag = 1;
  }
  if (cp == "" || cp == NULL) {
    alert("enter items cost price");
    flag = 1;
  }
  if (flag == 1) {
    return false;
  } else {
    return true;
  }
};

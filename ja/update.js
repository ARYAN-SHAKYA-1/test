valid_update = () => {
  let id = document.getElementById("id").value;
  let name = document.getElementById("name").value;
  let qty = document.getElementById("qty").value;
  let cp = document.getElementById("cp").value;
  let flag = 0;
  if (id == "" || id == NULL) {
    alert("enter proper id ");
    flag = 1;
  }
  if (name == "" || name == NULL) {
    alert("enter proper name ");
    flag = 1;
  }
  if (qty == "" || qty == NULL) {
    alert("enter proper qty ");
    flag = 1;
  }
  if (cp == "" || cp == NULL) {
    alert("enter proper cp ");
    flag = 1;
  }

  if (flag === 0) {
    return true;
  } else {
    return false;
  }
};

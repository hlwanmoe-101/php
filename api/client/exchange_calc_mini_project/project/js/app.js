let input = document.getElementById("input");
let from = document.getElementById("from");
let to = document.getElementById("to");
let result = document.getElementById("result");
let tb = document.getElementById("fill");
function createOption(x, y, z) {
  let o = document.createElement("option");
  let t = document.createTextNode(y);
  let r = document.createTextNode(z);
  o.appendChild(t);
  o.setAttribute("value", toNum(z));
  x.appendChild(o);
}
function toNum(x) {
  return Number(x.replace(",", ""));
}
for (x in data.rates) {
  createOption(from, x, data.rates[x]);
  createOption(to, x, data.rates[x]);

  // console.log(x, data.rates[x]);
}
function createtr(x) {
  let nospace = document.getElementById("nospace");
  if (nospace) {
    nospace.remove();
  }
  let tr = document.createElement("tr");
  x.map(function (el) {
    let td = document.createElement("td");
    let text = document.createTextNode(el);
    td.appendChild(text);
    tr.appendChild(td);
  });
  tb.appendChild(tr);
}
function keep() {
  localStorage.setItem("record", fill.innerHTML);
}
(function () {
  if (localStorage.getItem("record")) {
    fill.innerHTML += localStorage.getItem("record");
  } else {
    fill.innerHTML =
      "<tr id='nospace'><td colspan=4>There is no record.</td></tr>";
  }
})();
function nofill() {}
document.getElementById("calc").addEventListener("submit", function (e) {
  e.preventDefault();
  //get state
  let x = input.value;
  let y = from.value;
  let z = to.value;
  let main_result = "";
  // console.log(x, y, z);
  //process
  let fromText = x + from.options[from.selectedIndex].innerHTML;
  let toText = to.options[to.selectedIndex].innerHTML;
  let first = x * y;
  let second = first / z;
  let resultNum = second.toFixed(2);
  let date = new Date().toLocaleString();
  let arr = [date, fromText, toText, resultNum];
  createtr(arr);
  keep();
  // console.log(second.toFixed(2), fromText, toText, result);
  //set state
  result.innerHTML = resultNum;
  input.value = "";
  input.focus();
  from.value = "";
  to.value = "1";
});
let mode = document.getElementById("mode-change");
mode.addEventListener("click", function () {
  document.body.classList.toggle("night-mode");
  // document.body.classList.toggle("night-new-mode");
  document.getElementById("day").classList.toggle("fa-sun");
  // console.log("night");
});

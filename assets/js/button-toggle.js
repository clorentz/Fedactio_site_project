$(document).ready(function() {
  var checkBoxes = document.getElementsByClassName("form-check-input");
  console.log(checkBoxes);
  var text = document.getElementById("text");

  var i;
  for (i = 0; i < checkBoxes.length; i++) {
    console.log(i);
    console.log(checkBoxes[i]);
    var label = checkBoxes[i].closest(".form-check-label");
    console.log(label);
    console.log(checkBoxes[i].checked);
    if (checkBoxes[i].checked == true){
      label.classList.add("active");
    } else {

    }
  }
})

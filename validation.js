function isBlank(field) {
  var contents = field.value;
  if (contents == "") {
    return true;
  }
}

function checkRequired() {
  var fields = document.forms[0];
  var isFilled = true;
  var i;
  for (i = 0; i < 8; i++){
	if (isBlank(fields[i])) {
		fields[i].insertAdjacentHTML("afterend", "<span style='color:red'> This field is required.</span>");
		isFilled = false;
	}
  }
  return isFilled;
}

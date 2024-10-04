function myFunction() {
    debugger;
  var selchbox = [];
  var inputfields = document.getElementsByName("myCheck");
  var ar_inputflds = inputfields.length;

  for (var i = 0; i < ar_inputflds; i++) {
    if (inputfields[i].type == 'checkbox' && inputfields[i].checked == true)
      selchbox.push(inputfields[i].value);
  }
  return selchbox;

}


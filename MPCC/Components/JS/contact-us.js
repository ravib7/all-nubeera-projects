
var selectElement = document.getElementById("navigation");
  var contentElement = document.getElementById("content");

  selectElement.addEventListener("change", function() {
    var selectedValue = selectElement.value;

    if (selectedValue !== "") {
      loadPage(selectedValue);
    } else {
      contentElement.innerHTML = "";
    }
  });

  function loadPage(page) {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", page, true);
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        contentElement.innerHTML = xhr.responseText;
      }
    };
    xhr.send();
  }
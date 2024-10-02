function submitForm() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "/login", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                document.getElementById("result").innerHTML = response.message;
            } else {
                document.getElementById("result").innerHTML = "Error: " + xhr.statusText;
            }
        }
    };
    xhr.send("username=" + username + "&password=" + password);
}

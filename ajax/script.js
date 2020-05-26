const showSuggestion = (str) => {
  if (str.length == 0) {
    document.getElementById("output").innerHTML = "";
  } else {
    // AJAX REQ
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("output").innerHTML = this.responseText;
      }
    };
    // send request to suggest.php + string that is typed in
    xmlhttp.open("GET", "suggest.php?q=" + str, true);
    xmlhttp.send();
  }
};

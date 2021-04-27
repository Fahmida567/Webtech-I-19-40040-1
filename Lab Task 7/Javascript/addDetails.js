function showLocation(location) {
    var xhttp;  
    if (location == "") {
      document.getElementById("instruction").innerHTML = "Select an owner to show their contact details..";
      return;
    }
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("instruction").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "../model/queries.php?q="+location, true);
    xhttp.send();
  }
function OnCreate() {
  const xhttp = new XMLHttpRequest();
  xhttp.open("POST", "create.php");
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send();
}

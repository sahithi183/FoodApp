function check_empty() {
if (document.getElementById('Name').value == "" || document.getElementById('E-mail').value == "") {
alert("Fill All Fields !");
} else {
document.getElementById('form').submit();
alert("Form Submitted Successfully...");
}
}
//Function To Display Popup
function div_show() {
document.getElementById('abc').style.display = "flex";
}
//Function to Hide Popup
function div_hide(){
document.getElementById('abc').style.display = "none";
}
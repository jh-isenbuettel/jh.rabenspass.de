console.log("Hi there!");
console.log("You're a hacker! <3");
console.log("Come visit us! https://jh.rabenspass.de/lab");
console.log("Have a beautiful day!");
console.log(">>>");
console.log("<<<");
console.log(">>>");
console.log("<<<");
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        console.log("Your IPv4: " + this.responseText);
    }
}
xhttp.open("GET", "https://ip4.jh.rabenspass.de", true);
xhttp.send();

console.log(">>>");
console.log("<<<");

var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        console.log("Your IPv6: " + this.responseText);
    }
}
xhttp.open("GET", "https://ip6.jh.rabenspass.de", true);
xhttp.send();


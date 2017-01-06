function getJson() {

	function handle() {
		if(this.status == 200) {
			//do whatever
			window.parsedJson = JSON.parse(this.responseText);
			alert(this.responseText);
			alert(window.parsedJson);
		}
        else {
            alert(this.status);
        }

	}
	
var jsonreq = new XMLHttpRequest();
jsonreq.onload = handle;
jsonreq.open("GET", "/table/pins.json", true);
jsonreq.send(null);
return(jsonreq.status);
}

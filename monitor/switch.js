function getSwitchStatus() {
    function handle() {
        if(this.status != 200) {
            alert("XMLHttpRequest returns status: " + this.status);
        }
        window.switchStatus = this.responseText.split(",");
        console.log(window.switchStatus);
        setSwitches();
        setStatus();
        return 0;
        
    }
    
    var csvreq = new XMLHttpRequest();
    csvreq.onload = handle;
    csvreq.open("GET", "/monitor/switchdb.csv", true);
    //csvreq.setRequestHeader("Cache-control:", "no-cache");
    csvreq.send(null);
    return 0;
    
    
    
    
    
    
}

function setSwitch(switchId) {
    document.getElementById("switch" + switchId).checked = getBool(window.switchStatus[switchId]);
}

function getBool(int) {
    if(int == "1") {
        return true;
    }
    else
    {
        return false;
    }
}





function setSwitches() {
    for(i = 0; i < 5; i++) {
        document.getElementById("switch" + i).checked = getBool(window.switchStatus[i]);
    }
    return 0;
}


function setStatus() {
    for(i = 0; i < 5; i++) {
        document.getElementById("status" + i).innerHTML = window.switchStatus[i];
    }
}


setInterval(function() { getSwitchStatus(); }, 400);
    
    
    

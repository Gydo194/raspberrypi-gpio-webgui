function loadFrame() {
    document.querySelector(".switchspan").innerHTML = switchStatus;
}

function setCheckBox() {
    document.getElementById("check").checked = getString(switchStatus[0]);
}



function getString(int) {
    if(int == 1) {
        return true;
    }
    else
    {
        return false;
    }
}
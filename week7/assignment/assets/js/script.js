function isLocalStorageSupported () {
    try {
        var supported = false;
        if (window['localStorage'] !== null)
        {
            supported = true;
            alert('localstorage is supported !');
            getAlfredNumber();
        }
        return supported;
    } catch(e) {
        return false;
        alert ('localstorage is not supported');
    }
}

function getAlfredNumber() {
    // check if AlfredNumber allready exist
    if (localStorage.getItem("alfredNumber") != '') {
        // if not
        alert("coucou");

        var alfredNumber = Math.floor(Math.random() * 11);
        localStorage.setItem('alfredNumber', alfredNumber);
        alert('alfred : no ' + alfredNumber);

    } else {
        // if yes
        var alfredNumber = localStorage.getItem('alfredNumber');
        alert('alfred : yes ' + alfredNumber);

    }

    // write result
    document.getElementById('alfredNumber').innerHTML = alfredNumber;

    getScore();
}

function getScore() {
    // check if score allready exist
    if (localStorage.getItem("score") == '') {
        // if not
        var score = 0;
        localStorage.setItem('score', score);
        alert('score : no');

    } else {
        // if yes
        var score = localStorage.getItem('score');
        alert('score : yes');

    }

    // write result
    document.getElementById('score').innerHTML = score;
}
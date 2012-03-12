function init() {
    alert("Initialisation !!!");
    isLocalStorageSupported();
}

function isLocalStorageSupported() {

    if (localStorage) {
        alert('localstorage is supported !');
        getAlfredNumber();
        getScore();
    }
    else {
        alert('localstorage is not supported');
    }
}

function getAlfredNumber() {

    var alfredNumber;

    // check if AlfredNumber allready exist
    if (localStorage.getItem("alfredNumber")) {

        // if yes
        alfredNumber = JSON.parse(localStorage.getItem('alfredNumber'));
        alert('Alfred allready choose ' + alfredNumber);

    } else {

        // if not
        alert("Alfred has not allready choose a number");
        alfredNumber = Math.floor(Math.random() * 10);
        localStorage.setItem('alfredNumber', JSON.stringify(alfredNumber));
        alert("Alfred choose " + alfredNumber);

    }

    // write result
    document.getElementById('alfredNumber').innerText = alfredNumber;

    return alfredNumber;
}

function getScore() {

    var score;

    // check if score allready exist
    if (localStorage.getItem("score")) {

        // if yes, we get the stored score
        score = localStorage.getItem('score');
        alert('your score is ' + score);

    } else {

        // if note we set it to 0
        score = 0;
        localStorage.setItem('score', score);
        alert('your score is ' + score);

    }

    // write result
    document.getElementById('score').innerText = score;

    return score;
}

function attempt(number) {

    var score = JSON.parse(localStorage.getItem('score')) + 1;
    localStorage.setItem('score', JSON.stringify(score));

    // is choosen number Alfred's number ?
    if (number == getAlfredNumber()) {
        // yes !
        alert('You win after ' + getScore() + ' attempt(s)');

    }

    // print score
    getScore();

}

window.onload = init();
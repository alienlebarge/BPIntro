function isLocalStorageSupported() {

    if (Modernizr.localstorage) {
        // window.localStorage is available!
        return true;
    } else {
        // no native support for local storage :(
        // maybe try Gears or another third-party solution
        return false;
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

function clearStorage (){
    localStorage.clear();
    alert('Storage is cleared');
    getAlfredNumber();
    getScore();
}

function init() {
    alert("Initialisation !!!");

    if (isLocalStorageSupported()) {

        document.getElementById('choose-0').onclick = function(){attempt(0);};
        document.getElementById('choose-1').onclick = function(){attempt(1);};
        document.getElementById('choose-2').onclick = function(){attempt(2);};
        document.getElementById('choose-3').onclick = function(){attempt(3);};
        document.getElementById('choose-4').onclick = function(){attempt(4);};
        document.getElementById('choose-5').onclick = function(){attempt(5);};
        document.getElementById('choose-6').onclick = function(){attempt(6);};
        document.getElementById('choose-7').onclick = function(){attempt(7);};
        document.getElementById('choose-8').onclick = function(){attempt(8);};
        document.getElementById('choose-9').onclick = function(){attempt(9);};
        document.getElementById('clearStorage').onclick = function(){clearStorage();};

        //localstorage is supported
        getAlfredNumber();
        getScore();

    } else {
        //localstorage is not supported
        alert('localstorage is not supported');
    }
}

window.onload = init;
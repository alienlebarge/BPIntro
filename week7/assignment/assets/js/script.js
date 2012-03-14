function isLocalStorageSupported() {

    return Modernizr.localstorage;
}

function getAlfredNumber() {

    var alfredNumber;

    // check if AlfredNumber allready exist
    if (localStorage.getItem("alfredNumber")) {
        // if yes
        alfredNumber = JSON.parse(localStorage.getItem('alfredNumber'));

        //alert('Alfred allready choose ' + alfredNumber);
    } else {
        // if not
        //alert("Alfred should choose a number");

        alfredNumber = Math.floor(Math.random() * 10);
        localStorage.setItem('alfredNumber', JSON.stringify(alfredNumber));

        //alert("Alfred choose " + alfredNumber);
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

    } else {

        // if note we set it to 0
        score = 0;
        localStorage.setItem('score', score);

    }

    //alert('your score is ' + score);

    // write result
    document.getElementById('score').innerText = score;

    return score;
}

function attempt(number) {

    var score = JSON.parse(localStorage.getItem('score')) + 1;
    localStorage.setItem('score', JSON.stringify(score));
    localStorage.setItem(number, 1);

    // is choosen number Alfred's number ?
    if (number == getAlfredNumber()) {
        // yes !
        //alert('You win after ' + getScore() + ' attempt(s)');
        // unhide congratulation message
        document.getElementById('congrat').className='';
        // hide list of button
        document.getElementById('list').className='hide';
    }

    // print score
    getScore();
    getButtonColor ();
}

function getButtonColor () {
    // check wich number are allready choosen.
    for (i=0; i<=9; i++) {
        if (localStorage.getItem(i) == 1) {
            document.getElementById('choose-'+i).className='allreadyChoosen';
        } else {
            document.getElementById('choose-'+i).className='';
        }
    }
}

function reset() {
    // set score to 0
    score = 0;
    localStorage.setItem('score', score);
    // remove alfredNumber
    localStorage.removeItem('alfredNumber');
    // set all choosen number to 0
    for (i=0; i<=9; i++) {
        localStorage.setItem(i, 0);
    }
    // hide congratulation message
    document.getElementById('congrat').className='hide';
    // unhide list of button
    document.getElementById('list').className='';
    init();
}

function init() {
    //alert("Game initialisation !!!");

    if (isLocalStorageSupported()) {

        //localstorage is supported

        // event listener
        document.getElementById('choose-0').onclick = function () {
            attempt(0);
        };
        document.getElementById('choose-1').onclick = function () {
            attempt(1);
        };
        document.getElementById('choose-2').onclick = function () {
            attempt(2);
        };
        document.getElementById('choose-3').onclick = function () {
            attempt(3);
        };
        document.getElementById('choose-4').onclick = function () {
            attempt(4);
        };
        document.getElementById('choose-5').onclick = function () {
            attempt(5);
        };
        document.getElementById('choose-6').onclick = function () {
            attempt(6);
        };
        document.getElementById('choose-7').onclick = function () {
            attempt(7);
        };
        document.getElementById('choose-8').onclick = function () {
            attempt(8);
        };
        document.getElementById('choose-9').onclick = function () {
            attempt(9);
        };
        document.getElementById('reset').onclick = function () {
            reset();
        };

        getAlfredNumber();
        getScore();
        getButtonColor ();


    } else {
        //localstorage is not supported
        alert('localstorage is not supported');
    }
}

window.onload = init;
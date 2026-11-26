
var sliderImages = document.querySelectorAll('.dis');
var currentImageIndex = 0;

function changeSlide(n) {
    currentImageIndex += n;

    if (currentImageIndex < 0) {
        currentImageIndex = sliderImages.length - 1;
    } else if (currentImageIndex >= sliderImages.length) {
        currentImageIndex = 0;
    }

    for (var i = 0; i < sliderImages.length; i++) {
        sliderImages[i].style.display = 'none';
    }


  for(var i =0 ; i<6 ; i++){
    if (currentImageIndex < 0) {
        currentImageIndex = sliderImages.length - 1;
    } else if (currentImageIndex >= sliderImages.length) {
        currentImageIndex = 0;
    }
    sliderImages[currentImageIndex].style.display = 'block';
    currentImageIndex=currentImageIndex+1;
  }
}

// --------------------------------------------------------

var sliderImages2 = document.querySelectorAll('.dis2');
var currentImageIndex2 = 0;

function changeSlide2(n) {
    currentImageIndex2 += n;

    if (currentImageIndex2 < 0) {
        currentImageIndex2 = sliderImages2.length - 1;
    } else if (currentImageIndex2 >= sliderImages2.length) {
        currentImageIndex2 = 0;
    }

    for (var i = 0; i < sliderImages2.length; i++) {
        sliderImages2[i].style.display = 'none';
    }


  for(var i =0 ; i<6 ; i++){
    if (currentImageIndex2 < 0) {
        currentImageIndex2 = sliderImages2.length - 1;
    } else if (currentImageIndex2 >= sliderImages2.length) {
        currentImageIndex2 = 0;
    }
    sliderImages2[currentImageIndex2].style.display = 'block';
    currentImageIndex2=currentImageIndex2+1;
  }
}

// ---------------------------------------------------------------------


var sliderImages3 = document.querySelectorAll('.dis3');
var currentImageIndex3 = 0;

function changeSlide3(n) {
    currentImageIndex3 += n;

    if (currentImageIndex3 < 0) {
        currentImageIndex3 = sliderImages3.length - 1;
    } else if (currentImageIndex3 >= sliderImages3.length) {
        currentImageIndex3 = 0;
    }

    for (var i = 0; i < sliderImages3.length; i++) {
        sliderImages3[i].style.display = 'none';
    }


  for(var i =0 ; i<6 ; i++){
    if (currentImageIndex3 < 0) {
        currentImageIndex3 = sliderImages3.length - 1;
    } else if (currentImageIndex3 >= sliderImages3.length) {
        currentImageIndex3 = 0;
    }
    sliderImages3[currentImageIndex3].style.display = 'block';
    currentImageIndex3=currentImageIndex3+1;
  }
}
// ----------------------------------------------------------------------------------


var sliderImages4 = document.querySelectorAll('.dis4');
var currentImageIndex4 = 0;

function changeSlide4(n) {
currentImageIndex4 += n;

if (currentImageIndex4 < 0) {
currentImageIndex4 = sliderImages4.length - 1;
} else if (currentImageIndex4 >= sliderImages4.length) {
currentImageIndex4 = 0;
}

for (var i = 0; i < sliderImages4.length; i++) {
sliderImages4[i].style.display = 'none';
}


for(var i =0 ; i<6 ; i++){
if (currentImageIndex4 < 0) {
currentImageIndex4 = sliderImages4.length - 1;
} else if (currentImageIndex4 >= sliderImages4.length) {
currentImageIndex4 = 0;
}
sliderImages4[currentImageIndex4].style.display = 'block';
currentImageIndex4=currentImageIndex4+1;
}
}

// ----------------------------------------------------------

var sliderImages5 = document.querySelectorAll('.dis5');
var currentImageIndex5 = 0;

function changeSlide5(n) {
currentImageIndex5 += n;

if (currentImageIndex5 < 0) {
currentImageIndex5 = sliderImages5.length - 1;
} else if (currentImageIndex5 >= sliderImages5.length) {
currentImageIndex5 = 0;
}

for (var i = 0; i < sliderImages5.length; i++) {
sliderImages5[i].style.display = 'none';
}


for(var i =0 ; i<6 ; i++){
if (currentImageIndex5 < 0) {
currentImageIndex5 = sliderImages5.length - 1;
} else if (currentImageIndex5 >= sliderImages5.length) {
currentImageIndex5 = 0;
}
sliderImages5[currentImageIndex5].style.display = 'block';
currentImageIndex5=currentImageIndex5+1;
}
}



// ----------------------------------------------------------

var sliderImages6 = document.querySelectorAll('.dis6');
var currentImageIndex6 = 0;

function changeSlide6(n) {
currentImageIndex6 += n;

if (currentImageIndex6 < 0) {
currentImageIndex6 = sliderImages6.length - 1;
} else if (currentImageIndex6 >= sliderImages6.length) {
currentImageIndex6 = 0;
}

for (var i = 0; i < sliderImages6.length; i++) {
sliderImages6[i].style.display = 'none';
}


for(var i =0 ; i<6 ; i++){
if (currentImageIndex6 < 0) {
currentImageIndex6 = sliderImages6.length - 1;
} else if (currentImageIndex6 >= sliderImages6.length) {
currentImageIndex6 = 0;
}
sliderImages6[currentImageIndex6].style.display = 'block';
currentImageIndex6=currentImageIndex6+1;
}
}

// ---------------------------------------------------------------------

var sliderImages7 = document.querySelectorAll('.dis7');
var currentImageIndex7 = 0;

function changeSlide7(n) {
currentImageIndex7 += n;

if (currentImageIndex7 < 0) {
currentImageIndex7 = sliderImages7.length - 1;
} else if (currentImageIndex7 >= sliderImages7.length) {
currentImageIndex7 = 0;
}

for (var i = 0; i < sliderImages7.length; i++) {
sliderImages7[i].style.display = 'none';
}


for(var i =0 ; i<6 ; i++){
if (currentImageIndex7< 0) {
currentImageIndex7 = sliderImages7.length - 1;
} else if (currentImageIndex7 >= sliderImages7.length) {
currentImageIndex7= 0;
}
sliderImages7[currentImageIndex7].style.display = 'block';
currentImageIndex7=currentImageIndex7+1;
}
}

// ----------------------------------------------------------

var sliderImages8 = document.querySelectorAll('.dis8');
var currentImageIndex8 = 0;

function changeSlide8(n) {
currentImageIndex8 += n;

if (currentImageIndex8 < 0) {
currentImageIndex8 = sliderImages8.length - 1;
} else if (currentImageIndex8 >= sliderImages8.length) {
currentImageIndex8= 0;
}

for (var i = 0; i < sliderImages8.length; i++) {
sliderImages8[i].style.display = 'none';
}


for(var i =0 ; i<6 ; i++){
if (currentImageIndex8 < 0) {
currentImageIndex8 = sliderImages8.length - 1;
} else if (currentImageIndex8 >= sliderImages8.length) {
currentImageIndex8= 0;
}
sliderImages8[currentImageIndex8].style.display = 'block';
currentImageIndex8=currentImageIndex8+1;
}
}
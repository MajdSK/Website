const images = [];
images.push(document.getElementById("photo1"));
images.push(document.getElementById("photo2"));
images.push(document.getElementById("photo3"));
images.push(document.getElementById("photo4"));
const dots = [];
dots.push(document.getElementById("dot1"));
dots.push(document.getElementById("dot2"));
dots.push(document.getElementById("dot3"));
dots.push(document.getElementById("dot4"));

const bt1 = document.getElementById("nextImg");
const bt2 = document.getElementById("prevImg");

let currentImageIndex = 0;
let intervalId;

// Assuming you have a function to clear all classes from all images
function clearAllImageClasses() {
    images.forEach(img => {
        img.classList ="";
    });
}
function setWhiteDot(){
    dots.forEach(dot=>{
        if(dot==dots[currentImageIndex]) dot.style.background = "rgb(214, 236, 255)";
        else dot.style.background = "transparent";
    }
    );
}
function showN() {
    clearAllImageClasses(); 
    const nextIndex = (currentImageIndex + 1<=3)?currentImageIndex+1:0;
    const nextNextIndex = (currentImageIndex + 2<=3)?currentImageIndex+2:currentImageIndex-2;
    const prevIndex = (currentImageIndex - 1 >=0)? currentImageIndex-1:3; // Handle negative wrap

    if (images[currentImageIndex]) {
            images[currentImageIndex].classList.add('rightWing'); // The current image is now the left wing for the *new* facing
    }

    // Set classes for the NEW CURRENT image
    if (images[nextIndex]) {
        images[nextIndex].classList.add('facing');
    }

    // Set classes for the image that will be on the RIGHT
    if (images[nextNextIndex]) {
        images[nextNextIndex].classList.add('leftWing');
    }

    
    if (images[prevIndex]) {
        images[prevIndex].classList.add('backBone');
    }
    currentImageIndex=nextIndex; // Update index AFTER setting classes for the old state
    setWhiteDot();
}
function showP() {
    clearAllImageClasses(); 
    
    const nextIndex = (currentImageIndex + 1) % images.length;
    const nextNextIndex = (currentImageIndex + 2) % images.length;
    const prevIndex = (currentImageIndex - 1 + images.length) % images.length; // Handle negative wrap

    if (images[currentImageIndex]) {
            images[currentImageIndex].classList.add('leftWing'); // The current image is now the left wing for the *new* facing
    }

    // Set classes for the NEW CURRENT image
    if (images[nextIndex]) {
        images[nextIndex].classList.add('backBone');
    }

    // Set classes for the image that will be on the RIGHT
    if (images[nextNextIndex]) {
        images[nextNextIndex].classList.add('rightWing');
    }

    
    if (images[prevIndex]) {
        images[prevIndex].classList.add('facing');
    }

    currentImageIndex = prevIndex; // Update index AFTER setting classes for the old state
    setWhiteDot();
}

function initializeImageDisplay() {
    clearAllImageClasses();
    const nextIndex = (currentImageIndex + 1<=3)?currentImageIndex+1:0;
    const nextNextIndex = (currentImageIndex + 2<=3)?currentImageIndex+2:currentImageIndex-2;
    const prevIndex = (currentImageIndex - 1 >=0)? currentImageIndex-1:3; // Handle negative wrap

    if (images[currentImageIndex]) {
            images[currentImageIndex].classList.add('rightWing'); // The current image is now the left wing for the *new* facing
    }

    // Set classes for the NEW CURRENT image
    if (images[nextIndex]) {
        images[nextIndex].classList.add('facing');
    }

    // Set classes for the image that will be on the RIGHT
    if (images[nextNextIndex]) {
        images[nextNextIndex].classList.add('leftWing');
    }

    
    if (images[prevIndex]) {
        images[prevIndex].classList.add('backBone');
    }
    currentImageIndex=nextIndex;
    setWhiteDot();
}
bt1.addEventListener("click", () => {
    showN();
    startAutoCycle();
});

bt2.addEventListener("click", () => {
    showP();
    startAutoCycle();
});

function startAutoCycle() {
    clearInterval(intervalId);
    intervalId = setInterval(showN, 7000);
}

document.addEventListener("DOMContentLoaded", () => {
    initializeImageDisplay();
    startAutoCycle();
});

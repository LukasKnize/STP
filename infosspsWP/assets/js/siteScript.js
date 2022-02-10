let currentImg = 0;
let logos = ['https://stp-vlach-knize.cajthaml.eu/wp-content/themes/infoSSPSTheme/assets/images/WR_Vertical_1-2048x515.png', 'https://stp-vlach-knize.cajthaml.eu/wp-content/themes/infoSSPSTheme/assets/images/Presloviny.cz_-1024x222.png',
 'https://stp-vlach-knize.cajthaml.eu/wp-content/themes/infoSSPSTheme/assets/images/logo-301-simple.png'];
let links = ['https://verticalproduction.cz/', 'https://www.presloviny.cz/', 'https://www.studio301.cz/'];
let currentLink = 'https://verticalproduction.cz/';

setInterval(() => {
    switch (currentImg) {
        case 0:
            document.getElementById("projectImg").src = logos[1];
            currentLink = links[1];
            document.getElementById("projectImg").style.background = "transparent";
            break;
        case 1:
            document.getElementById("projectImg").src = logos[0];
            currentLink = links[0];
            document.getElementById("projectImg").style.background = "transparent";
            break;
        case 2:
            document.getElementById("projectImg").src = logos[2];
            currentLink = links[2];
            document.getElementById("projectImg").style.background = "#24783c";
            break;
        default:
            break;
    }
    if (currentImg == logos.length - 1) {
        currentImg = 0;
    } else {
        currentImg += 1;
    }
}, 5000);

window.addEventListener("load", function () {
    document.getElementById("CopyrightText").innerHTML = new Date().getFullYear() + " © Smíchovská střední průmyslová škola a gymnázium";
});

document.getElementById("openMenu").addEventListener("click", function (){
    document.getElementById("menuForMobileBackground").style.display = "block";
});

document.getElementById("closeMenu").addEventListener("click", function (){
    document.getElementById("menuForMobileBackground").style.display = "none";
});

document.getElementById("projectImg").addEventListener('click', () => {
    window.open(currentLink);
});
const openButton = document.getElementById('openStatus');
const strWindowFeatures = '_blank, height=810, width=810, resizable=no, modal=yes, alwaysRaised=yes, scrollbars=no, menubar=no, location=no, status=no';
openButton.addEventListener('click', openStatusWindow);

const strWindowFeaturesForSmallerResolution = '_blank, height=810, width=810, resizable=no, modal=yes, alwaysRaised=yes, scrollbars=no, menubar=no, location=no, status=no';
openButton.addEventListener('click', openStatusWindow);

function openStatusWindow() {
    
    if (window.matchMedia('(max-width: 1439px)').matches) {
        window.open('status.html', '', strWindowFeaturesForSmallerResolution);
    } else {
        window.open('/status.html', '', strWindowFeatures);
    }
}
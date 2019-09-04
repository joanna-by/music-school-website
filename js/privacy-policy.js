const openButton2 = document.getElementById('openStatus2');
const strWindowFeatures2 = '_blank, height=810, width=610, resizable=no, modal=yes, alwaysRaised=yes, scrollbars=no, menubar=no, location=no, status=no';
openButton2.addEventListener('click', openStatus2Window);

const strWindowFeaturesForSmallerResolution2 = '_blank, height=810, width=610, resizable=no, modal=yes, alwaysRaised=yes, scrollbars=no, menubar=no, location=no, status=no';
openButton2.addEventListener('click', openStatus2Window);

function openStatus2Window() {
    
    if (window.matchMedia('(max-width: 1439px)').matches) {
        window.open('/privacy-policy.html', '', strWindowFeaturesForSmallerResolution2);
    } else {
        window.open('/privacy-policy.html', '', strWindowFeatures2);
    }
}
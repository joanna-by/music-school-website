const openButton = document.getElementById('MidiOpenButton');
const strWindowFeatures = '_blank, height=510, width=510, resizable=no, modal=yes, alwaysRaised=yes, scrollbars=no, menubar=no, location=no, status=no';
openButton.addEventListener('click', openMidiWindow);

const strWindowFeaturesForSmallerResolution = '_blank, height=510, width=510, resizable=no, modal=yes, alwaysRaised=yes, scrollbars=no, menubar=no, location=no, status=no';
email.addEventListener('click', openMidiWindow);

function openMidiWindow() {
    
    if (window.matchMedia('(max-width: 1439px)').matches) {
        window.open('MIDI/index.html', '', strWindowFeaturesForSmallerResolution);
    } else {
        window.open('MIDI/index.html', '', strWindowFeatures);
    }
}
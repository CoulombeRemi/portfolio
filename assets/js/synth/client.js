// import Oscilloscope from '/oscilloscope.js'; // *sigh* maybe one day
function playAudio() {
  const context = new (window.AudioContext || window.webkitAudioContext)();
  const oscillator = context.createOscillator();

  // Square, sine, saw
  oscillator.type = 'square';

  //Filtre
  const filter = context.createBiquadFilter();
  filter.type = 'lowpass';
  filter.frequency.value = 10000;

  const vca = context.createGain();
  // remettre a 0.5 apres avoir fait un btn Start
  vca.gain.value = 0.5;
  let attack = 0.1;
  let release = 0.1;

  const analyzer = context.createAnalyser();
  analyzer.fftSize = 8192;


  // BPM 128
  const freqAnalyzer = context.createAnalyser();
  freqAnalyzer.fftSize = 8192;

  // Volume initial
  // changer la value du input pour que ca soit la meme que celle du volume
  const volume = context.createGain();
  volume.gain.value = 0.2;

  /*
      Arpeggiator         Envelope
          ↓                  ↓  
      Oscillator → Filter → VCA → Volume (VCA) → 👂
  */

  oscillator.connect(filter);
  filter.connect(vca);
  vca.connect(analyzer);
  vca.connect(freqAnalyzer);
  vca.connect(volume);
  volume.connect(context.destination);

  const noteOn = function() {
    const now = context.currentTime;
    const gain = vca.gain;

    gain.cancelScheduledValues(now);
    gain.setValueAtTime(0, now);
    gain.linearRampToValueAtTime(1, now + attack);
    gain.linearRampToValueAtTime(0, now + attack + release);
  };

  // make some noiseeeee
  oscillator.start();

  // event listeners
  document.querySelectorAll('input[name=waveform]').forEach((button) => {
    button.addEventListener('change', (event) => {
      oscillator.type = event.target.value;
    });
  });

  const cutoff = document.getElementById('cutoff');
  cutoff.addEventListener('input', (event) => {
    filter.frequency.value = event.target.value;
  });

  const resonance = document.getElementById('resonance');
  resonance.addEventListener('input', (event) => {
    filter.Q.value = event.target.value;
  });

  document.getElementById('attack').addEventListener('input', (event) => attack = event.target.value / 100);
  document.getElementById('release').addEventListener('input', (event) => release = event.target.value / 100);
  document.getElementById('volume').addEventListener('input', (event) => {
    volume.gain.value = event.target.value / 100;
    kick.volume = event.target.value / 100;
    bass.volume = event.target.value / 100;
  });

  // const freqEl = document.getElementById('frequency');
  // const frequency = new Frequency(freqEl, freqAnalyzer);
  // frequency.start();


   
  // start the arpeggiator
  //const arpeggiator = new Worker('/portfolio/assets/js/synth/arpeggiator.js');
  const arpeggiator = new Worker('/assets/js/synth/arpeggiator.js');
  arpeggiator.onmessage = (event) => {
    oscillator.frequency.value = event.data;
    noteOn();
  }

  const oscopeEl = document.getElementById('oscilloscope');
  const oscilloscope = new Oscilloscope(oscopeEl, analyzer);

  oscilloscope.start();

  /*/////////////////////////////////////////////*/
  //btn disparait
  document.getElementById("text").style.display = "none";
 
  // audio files 
  var kick = new Audio('assets/audio/kick.wav'); 
  var bass = new Audio('assets/audio/bass.wav'); 


  kick.addEventListener('ended', function() {
      this.currentTime = 0;
      this.play();
  }, false);
  //kick.play();


  bass.addEventListener('ended', function() {
    this.currentTime = 0;
    this.play();
  }, false);
  //bass.play();


  
}
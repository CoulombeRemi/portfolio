// here's the MIDI notes for the sequence
// const NOTES = [36, 40, 43, 47, 48, 47, 43, 40];
// web audio oscillators want frequency values, tho, so here's the frequencies:
const NOTES = [65.4063913251, 82.4068892282, 97.9988589954, 123.4708253140, 130.8127826503, 123.4708253140, 97.9988589954, 82.4068892282];

let current = 0;
setInterval(() => {
  postMessage(NOTES[current]);
  current = current < NOTES.length - 1 ? current + 1 : 0;
}, 200);

class Oscilloscope {
  constructor(canvas, analyzer) {
    this.analyzer = analyzer;
    this.canvas = canvas
    this.canvasContext = canvas.getContext('2d');

    // this.canvasContext.canvas.width  = window.innerWidth;
    // this.canvasContext.canvas.width  = window.innerHeight;


    this.data = new Uint8Array(this.analyzer.frequencyBinCount);
  }
  ////////////////////////////
  // function drawScope(analyser, ctx) {
  //   var width = ctx.canvas.width;
  //   var height = ctx.canvas.height;
  //   var timeData = new Uint8Array(analyser.frequencyBinCount);
  //   var scaling = height / 256;
  //   var risingEdge = 0;
  //   var edgeThreshold = 5;
  ///////////////////////////
  draw() {
    // const width = this.canvas.clientWidth;
    // const height = this.canvas.clientHeight;

    const width = this.canvas.width;
    const height = this.canvas.height;


    let risingEdge = 0;
    const edgeThreshold = 0;
    const scaling = height / 256;
    this.analyzer.getByteTimeDomainData(this.data);

    console.log(edgeThreshold);
    console.log(height);
    
    // suprime lancienne wave
    this.canvasContext.clearRect(0, 0, width, height);

    this.canvasContext.fillStyle = 'rgba(0, 20, 0, 0)';
    this.canvasContext.fillRect(0, 0, width, height);
    
    this.canvasContext.lineWidth = 1;
    this.canvasContext.strokeStyle = 'rgb(0,0,0)';
    this.canvasContext.beginPath();
    
    // Taken from this CodePen, because I couldn't figure it out on my own:
    // https://codepen.io/ContemporaryInsanity/pen/Mwvqpb
    while (this.data[risingEdge++] - 256 > 0 && risingEdge <= width);
    if (risingEdge >= width) { risingEdge = 0; }

    while (this.data[risingEdge++] - 256 < edgeThreshold && risingEdge <= width);
    if (risingEdge >= width) { risingEdge = 0; }

    for (let x = risingEdge; x < this.data.length && x - risingEdge < width; x++) {
      this.canvasContext.lineTo(x - risingEdge, height - this.data[x] * scaling);// scale
    }

///////////////////////////////////////

///////////////////////////////////////




    
    this.canvasContext.stroke();
    requestAnimationFrame(this.draw.bind(this));
  }
  
  start() {
    requestAnimationFrame(this.draw.bind(this));
  }
}
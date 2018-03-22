class Oscilloscope {
  constructor(canvas, analyzer) {
    this.analyzer = analyzer;
    this.canvas = canvas
    this.canvasContext = canvas.getContext('2d');
    this.data = new Uint8Array(this.analyzer.frequencyBinCount);
  }
  
  draw() {
    const width = this.canvas.clientWidth;
    const height = this.canvas.clientHeight;

    let risingEdge = 0;
    const edgeThreshold = 10;
    const scaling = height / 512;
    this.analyzer.getByteTimeDomainData(this.data);

    console.log(edgeThreshold);
    console.log(height);
    
    this.canvasContext.clearRect(0, 0, width, height);
    
    this.canvasContext.lineWidth = 8;
    this.canvasContext.strokeStyle = 'rgb(0, 0, 0)';
    this.canvasContext.beginPath();
    
    // Taken from this CodePen, because I couldn't figure it out on my own:
    // https://codepen.io/ContemporaryInsanity/pen/Mwvqpb
    while (this.data[risingEdge++] - 128 > 0 && risingEdge <= width);
    if (risingEdge >= width) { risingEdge = 0; }

    while (this.data[risingEdge++] - 128 < edgeThreshold && risingEdge <= width);
    if (risingEdge >= width) { risingEdge = 0; }

    for (let x = risingEdge; x < this.data.length && x - risingEdge < width; x++) {
      this.canvasContext.lineTo(x - risingEdge, height - this.data[x] * scaling);
    }
    
    this.canvasContext.stroke();
    requestAnimationFrame(this.draw.bind(this));
  }
  
  start() {
    requestAnimationFrame(this.draw.bind(this));
  }
}
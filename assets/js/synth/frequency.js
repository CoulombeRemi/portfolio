class Frequency {
  constructor(canvas, analyzer) {
    this.analyzer = analyzer;
    this.canvas = canvas;
    this.canvasContext = canvas.getContext('2d');
    
    this.bufferLength = analyzer.frequencyBinCount;
    this.data = new Uint8Array(this.bufferLength);
  }
  
  draw() {
    const width = this.canvas.clientWidth;
    const height = this.canvas.clientHeight;

    this.analyzer.getByteFrequencyData(this.data);
    this.canvasContext.clearRect(0, 0, width, height);
    this.canvasContext.fillStyle = 'rgb(0,0,0)';
    
    const barWidth = (width / this.bufferLength) * 2.5;
    let x = 0;
    
    for(let i = 0; i < this.bufferLength; i += 1) {
      const barHeight = this.data[i];
      this.canvasContext.fillRect(x, height - barHeight, barWidth, barHeight);
      
      x += barWidth + 1;
    }
    
    requestAnimationFrame(this.draw.bind(this));
  }
  
  start() {
    requestAnimationFrame(this.draw.bind(this));
  }
}
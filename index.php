<?php 
if(file_exists("settings.php")){include("settings.php");}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Rémi Coulombe</title>
    <?php include("blocks/head.php") ?>
</head>
<body>
    <?php include("blocks/header.php") ?>
    <main>
        <!-- <div id="overlay" onclick="off()"> -->
            <div id="text" onclick="playAudio()">
                <h2>Start Synth</h2>
            </div>
        <!-- </div> -->
        <div class="container">
            <h1>Rémi Coulombe</h1>
            <!-- synth -->
            <div class="screen">
                <canvas id="oscilloscope" width="1000" height="1000"></canvas>
                <!-- <canvas id="oscilloscope"></canvas> -->
            </div>
            <section class="synth">
                <section class="controls">
                    <div class="control-group">
                        <div class="knobs">
                            <ul class="buttons">
                                <li>
                                    <div class="button-label">
                                        <svg width="15" height="15" xmlns="http://www.w3.org/2000/svg"><g stroke-linecap="undefined" stroke-linejoin="undefined" stroke-opacity="null" stroke-width="null" stroke="#d1c8be" fill="none"><path d="M.47-.09v15.876M14.53-.404v15.877M7.594-.09v15.876M-1.217.47H7.47M16.78 14.593H7.406"/></g></svg>
                                    </div>
                                    <input checked type="radio" name="waveform" id="wave-square" value="square">
                                    <label for="wave-square">
                                        <div class="led"></div>
                                        <div class="button"></div>
                                    </label>
                                </li>

                                <li>
                                    <div class="button-label">
                                        <svg width="15" height="15" xmlns="http://www.w3.org/2000/svg"><g stroke-linecap="undefined" stroke-linejoin="undefined" stroke="#d1c8be" fill="none"><path d="M7.5.065L-.563 16.69M6.813-1.435l9 18.375"/></g></svg>
                                    </div>
                                    <input type="radio" name="waveform" id="wave-triangle" value="triangle">
                                    <label for="wave-triangle">
                                        <div class="led"></div>
                                        <div class="button"></div>
                                    </label>
                                </li>

                                <li>
                                    <div class="button-label">
                                        <svg width="15" height="15" xmlns="http://www.w3.org/2000/svg"><title>background</title><path fill="none" d="M-1-1h582v402H-1z"/><g><title>Layer 1</title><g fill="none" stroke="#d1c8be" stroke-linejoin="undefined" stroke-linecap="undefined"><path d="M14.542.645L.5 14.115"/><path stroke-width="null" stroke-opacity="null" d="M14.687.19V14M13.312-20.185l15 49.75"/></g></g></svg>
                                    </div>
                                    <input type="radio" name="waveform" id="wave-saw" value="sawtooth">
                                    <label for="wave-saw">
                                        <div class="led"></div>
                                        <div class="button"></div>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <h1>Oscillator</h1>
                    </div>
                        <div class="control-group">                     
                            <div class="knobs">
                                <label for="cutoff">
                                    <div class="label-text">FREQ</div>
                                    <input type="range" name="cutoff" id="cutoff" value="10000" max="10000">
                                </label>
                                <label for="resonance">
                                    <div class="label-text">RES</div>
                                    <input type="range" name="resonance" id="resonance" value="0" max="50">
                                </label> 
                            </div>
                            <h1>Filter</h1>
                        </div>
                    <div class="control-group">
                        <div class="knobs">
                            <label for="attack">
                            <div class="label-text">A</div>
                            <input type="range" name="attack" id="attack" max="100" value="10">
                            </label>

                            <label for="release">
                            <div class="label-text">R</div>
                            <input type="range" name="release" id="release" max="100" value="100">
                            </label>
                        </div>
                        <h1 id="envelope">Amp Envelope</h1>
                    </div>

                    <div class="control-group">
                        
                        <div class="knobs">
                            <label for="volume" alt="Output volume">
                            <div class="label-text">VOL</div>
                            <input type="range" name="volume" id="volume" max="100" value="50">
                            </label>
                        </div>
                        <h1>Output</h1>
                    </div>
                </section>
            </section>
        </div>
    </main>
    <?php include("blocks/footer.php") ?>
    <!-- <script src="<?php echo ROOT_URL; ?>/assets/js/synth/frequ ency.js"></script> -->
    <script src="<?php echo ROOT_URL; ?>/assets/js/synth/oscilloscope.js"></script>
    <script src="<?php echo ROOT_URL; ?>/assets/js/synth/client.js"></script>
</body>
</html>
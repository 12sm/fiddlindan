[wpv-layout-start]
  [wpv-items-found]
  <!-- wpv-loop-start -->
    <wpv-loop>
    <div class="row">
    <div class="col-sm-12">
      <div class="slider-body">
        <i class="slider-control fa fa-play [wpv-post-id]" onclick="sample[wpv-post-id].toggle();"></i>
            <i class=" slider-control fa fa-pause hide [wpv-post-id]" onclick="sample[wpv-post-id].toggle();"></i>
            <div class="slider-house">
          <div class="slider-section">
<input type="range" min="0" max="100" value="100" onmousemove="sample[wpv-post-id].crossfade(this);">
<img src="../assets/img/Player-Marks.png">
      </div>
      </div>
  <ul class="dan-nodan">
    <li>No Dan</li>
    <li>Dan</li>
  </ul>
  </div>
<div class="row session-meta">
        <div class="col-sm-4">
          <ul class="sesh-meta">
            <li><b>Title</b>:[wpv-post-title]</li>
            <li><b>BY</b>: Dan Hochlater</li>
            <li><b>Instruments</b>:[wpv-post-taxonomy type="instruments" separator=", " format="text" show="name" order="asc"]</li>
            <li><b>Genre</b>:[wpv-post-taxonomy type="genres" separator=", " format="text" show="name" order="asc"]</li>
          </ul>
        </div>
        <div class="col-sm-8">
          [types field="description"][/types]
              </div>
            </div>
          
        </div>
        </div>
          <script>
            var CrossfadeSample = function() {
  loadSounds(this, {
    alpha: '[types field="no-dan-mp3" output="raw"][/types]',
    dan: '[types field="dan-mp3" output="raw"][/types]'
  });
  this.isPlaying = false;
}

CrossfadeSample.prototype.play = function() {

  // Create two sources.
  this.ctl[wpv-post-id]1 = createSource(this.alpha);
  this.ctl[wpv-post-id]2 = createSource(this.dan);
  // Mute the second source.
  this.ctl[wpv-post-id]1.gainNode.gain.value = 0;
  // Start playback in a loop
  var onName = this.ctl[wpv-post-id]1.source.start ? 'start' : 'noteOn';
  this.ctl[wpv-post-id]1.source[onName](0);
  this.ctl[wpv-post-id]2.source[onName](0);
  // Set the initial crossfade to be just source 1.
  this.crossfade(0);

  function createSource(buffer) {
    var source = context.createBufferSource();
    var gainNode = context.createGain();
    source.buffer = buffer;
    // Turn on looping
    source.loop = true;
    //source dependent toggle

      $('.slider-control').toggleClass('hide');

    // Connect source to gain.
    source.connect(gainNode);
    // Connect gain to destination.
    gainNode.connect(context.destination);
    return {
      source: source,
      gainNode: gainNode
    };
  }
};

CrossfadeSample.prototype.stop = function() {
  console.log('.stop function called');
  
  var offName = this.ctl[wpv-post-id]1.source.stop ? 'stop' : 'noteOff';
  this.ctl[wpv-post-id]1.source[offName](0);
  this.ctl[wpv-post-id]2.source[offName](0);
};

// Fades between 0 (all source 1) and 1 (all source 2)
CrossfadeSample.prototype.crossfade = function(element) {
  var x = parseInt(element.value) / parseInt(element.max);
  // Use an equal-power crossfading curve:
  var gain[wpv-post-id]1 = Math.cos(x * 0.5*Math.PI);
  var gain[wpv-post-id]2 = Math.cos((1.0 - x) * 0.5*Math.PI);
  this.ctl[wpv-post-id]1.gainNode.gain.value = gain[wpv-post-id]1;
  this.ctl[wpv-post-id]2.gainNode.gain.value = gain[wpv-post-id]2;
};

CrossfadeSample.prototype.toggle = function() {
$('.slider-control').toggleClass('hide');
  this.isPlaying ? this.stop() : this.play();
  this.isPlaying = !this.isPlaying;
};
            

          </script>

                      <script>
var sample[wpv-post-id] = new CrossfadeSample();
</script>
      
    </wpv-loop>
  <!-- wpv-loop-end -->
  [/wpv-items-found]
  [wpv-no-items-found]
    [wpml-string context="wpv-views"]<strong>No items found</strong>[/wpml-string]
  [/wpv-no-items-found]
[wpv-layout-end]
// p5.js setup
var origen;

function setup(){
  textAlign(CENTER);
  background(200);

  origen = createSelect();
  origen.position(10,10);
  origen.option('CDMX');
  origen.option('GUADALAJARA');
  origen.option('MORELOS');
  origen.changed(mySelectEvent);
}

// p5.js draw
function draw(){

}

function mySelectEvent() {
  var item = origen.value();
  background(200);
  text('it is a' + item + '!', 50, 50);
}
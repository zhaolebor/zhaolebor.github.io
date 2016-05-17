$('#set_variables_form').submit(function (e) {
  e.preventDefault();
  console.log($('#mass1').val());
  m1     = $('#mass1').val();
  m2     = $('#mass1').val();
  Phi1   = $('#Phi1').val()/180*(Math.PI);
  Phi2   = $('#Phi2').val()/180*(Math.PI);
  d2Phi1 = 0;
  d2Phi2 = 0;
  dPhi1  = 0;
  dPhi2  = 0;
  run();

});


function drawCircle(myCircle, context) {
  context.beginPath();
  context.arc(myCircle.x, myCircle.y, myCircle.mass*6, 0, 2 * Math.PI, false);
  context.fillStyle = 'rgba(0,0,0,1)';
  context.fill();
}

function drawLine(myLine, context) {
  context.beginPath();
  context.moveTo(myLine.x0, myLine.y0);
  context.lineTo(myLine.x, myLine.y);
  context.strokeStyle = 'red';
  context.lineWidth = 5;
  context.stroke();
}

function drawWall(myWall, context) {
  context.beginPath();
  context.moveTo(myWall.x0, myWall.y0);
  context.lineTo(myWall.x, myWall.y);
  context.strokeStyle = 'black';
  context.lineWidth = 10;
  context.stroke();
}

function drawSpring(mySpring, context) {
  //context.setLineDash([5, 15]);
  context.beginPath();
  context.moveTo(mySpring.x0, mySpring.y0);
  context.lineTo(mySpring.x, mySpring.y);
  context.strokeStyle = 'blue';
  context.lineWidth = 5;
  context.stroke();
  context.beginPath();
  context.moveTo(mySpring.x0-(mySpring.x0-mySpring.x)/4, mySpring.y0-(mySpring.y0-mySpring.y)/4);
  context.lineTo(mySpring.x+(mySpring.x0-mySpring.x)/4, mySpring.y+(mySpring.y0-mySpring.y)/4);
  context.strokeStyle = 'blue';
  context.lineWidth = 10;
  context.stroke();
}

function animate(myCircle1, myCircle2, myLine1, myLine2, mySpring, myWall, canvas, context) {
  d2Phi1  =  -gain1*Phi1+gain2*Phi2;
  d2Phi2  =  gain2*Phi1-gain1*Phi2;
  dPhi1   += d2Phi1*time;
  dPhi2   += d2Phi2*time;
  Phi1    += dPhi1*time;
  Phi2    += dPhi2*time;

  myCircle1.x = X0+l1*Math.sin(Phi1);
  myCircle1.y = Y0+l1*Math.cos(Phi1);
  myCircle2.x = X0+l2*Math.sin(Phi2)+100;
  myCircle2.y = Y0+l2*Math.cos(Phi2);

  myLine1.x  = myCircle1.x;
  myLine1.y  = myCircle1.y;
  myLine2.x0 = X0+100;
  myLine2.y0 = Y0;
  myLine2.x  = myCircle2.x;
  myLine2.y  = myCircle2.y;
  
  mySpring.x0 = X0+r1*Math.sin(Phi1);
  mySpring.y0 = Y0+r1*Math.cos(Phi1);
  mySpring.x  = X0+r1*Math.sin(Phi2)+100;
  mySpring.y  = Y0+r1*Math.cos(Phi2);
  
  myWall.x0 = X0-100;
  myWall.y0 = Y0;
  myWall.x  = X0+200;
  myWall.y  = Y0;

  context.clearRect(0, 0, canvas.width, canvas.height);

  drawLine(myLine1, context);
  drawLine(myLine2, context);
  drawSpring(mySpring, context);
  drawWall(myWall, context);
  drawCircle(myCircle1, context);
  drawCircle(myCircle2, context);
}

//Physics Constants
var d2Phi1 = 0;
var d2Phi2 = 0;
var dPhi1  = 0;
var dPhi2  = 0;
var Phi1   = $('#Phi1').val()/180*(Math.PI);
var Phi2   = $('#Phi2').val()/180*(Math.PI);
var m1     = $('#mass1').val();
var m2     = $('#mass1').val();
var l1     = 150;
var l1_real=l1/250;
var l2     = 150;
var l2_real=l2/250;
var r1     = 37.5;
var r1_real=r1/250;
var X0     = 350;
var Y0     = 60;
var g      = 9.8;
var time   = 0.01;
var k      = 39.4;
var gain1 = (k*r1_real*r1_real+m2*g*l1_real)/(m2*l1_real*l1_real)
var gain2 = (k*(r1_real*r1_real))/(m2*(l1_real*l1_real))

var canvas  = document.getElementById('myCanvas');
var context = canvas.getContext('2d');
var init    = {};

function run(){
  var myLine1 = {x0: X0, y0: Y0, x: 0, y: 0};
  var myLine2 = {x0: 0, y0: 0, x: 0, y: 0};
  var mySpring = {x0: 0, y0: 0, x: 0, y: 0};
  var myWall = {x0: 0, y0: 0, x: 0, y: 0};
  var myCircle1 = {x: X0+l1*Math.sin(Phi1), y: Y0+l1*Math.cos(Phi1), mass: m1};
  var myCircle2 = {x: X0+l2*Math.sin(Phi2)+100, y: Y0+l2*Math.cos(Phi2), mass: m2};

  clearInterval(init);
  context.clearRect(0, 0, canvas.width, canvas.height);
  init = setInterval(function(){
    animate(myCircle1, myCircle2, myLine1, myLine2, mySpring, myWall, canvas, context);
  }, 10);
  
  var Phi1=$('#Phi1').val()/180*(Math.PI);
  var Phi2=$('#Phi2').val()/180*(Math.PI);
  var gain1 = (k*r1_real*r1_real+m2*g*l1_real)/(m2*l1_real*l1_real)
  var gain2 = (k*(r1_real*r1_real))/(m2*(l1_real*l1_real))
  X=[Phi1, 0, Phi2, 0];
  sys.initial(X,true);
}


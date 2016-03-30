var canvas  = document.querySelector('#canvas');
var context = canvas.getContext('2d');

var nombre1 = canvas.dataset.nombre1;
var nombre2 = canvas.dataset.nombre2;

//---------------------TIRETS---------------------

var a = 165.5;

while (a <= 300.5){

    context.beginPath();
    context.lineWidth=1;
    context.strokeStyle='gray';
    context.moveTo(a,0);
    context.lineTo(a,300);
    
    context.beginPath();
    context.lineWidth=1;
    context.strokeStyle = "gray";
    context.beginPath();
    context.moveTo(0,a);
    context.lineTo(300,a);
    context.stroke();
    a = a + 15;
}


var b = 0.5;
 
while (b <= 300.5){

    context.beginPath();
    context.lineWidth=1;
    context.strokeStyle='gray';
    context.moveTo(b,0);
    context.lineTo(b,300);
    context.stroke();
    
    context.beginPath();
    context.lineWidth=1;
    context.strokeStyle = "gray";
    context.beginPath();
    context.moveTo(0,b);
    context.lineTo(300,b);
    context.stroke();
    b = b + 15;
}

context.beginPath();
context.lineWidth=1;
context.strokeStyle='gray';
context.moveTo(300,0);
context.lineTo(300,300.);
context.stroke();

context.beginPath();
context.lineWidth=1;
context.strokeStyle='gray';
context.moveTo(0,300);
context.lineTo(300,300);
context.stroke();

//---------------------AXES-----------------------

context.beginPath();
context.lineWidth=2.5;
context.strokeStyle='black';
context.moveTo(150.5,0);
context.lineTo(150.5,300.5);
context.stroke();

context.beginPath();
context.lineWidth=2.5;
context.strokeStyle='black';
context.moveTo(0,150.5);
context.lineTo(300.5,150.5);
context.stroke();

//---------------------petite croix--------------
var a = 15;
var b = -15;

context.beginPath();
context.lineWidth=1.5;
context.strokeStyle='red';
context.moveTo(145 + nombre1*a,145 + nombre2*b);
context.lineTo(155 + nombre1*a,155 + nombre2*b);
context.stroke();


context.beginPath();
context.lineWidth=1.5;
context.strokeStyle='red';
context.moveTo(155 + nombre1*a,145 + nombre2*b);
context.lineTo(145 + nombre1*a,155 + nombre2*b);
context.stroke();

//--------fleches des axes-----------------------

context.fillText(0, 140, 160.5);

context.font= "14pt Calibri,Geneva,Arial";
context.fillText('j', 140, 140);

context.font= "14pt Calibri,Geneva,Arial";
context.fillText('i', 165, 167);

context.beginPath();
context.lineWidth=2.5;
context.strokeStyle='black';
context.moveTo(145,5);
context.lineTo(150,1);
context.stroke();

context.beginPath();
context.lineWidth=2.5;
context.strokeStyle='black';
context.moveTo(150,1);
context.lineTo(155,5);
context.stroke();

context.beginPath();
context.lineWidth=2.5;
context.strokeStyle='black';
context.moveTo(295,145);
context.lineTo(299,150);
context.stroke();

context.beginPath();
context.lineWidth=2.5;
context.strokeStyle='black';
context.moveTo(295,155);
context.lineTo(299,150);
context.stroke();
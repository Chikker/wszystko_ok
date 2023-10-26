function setup() {
    createCanvas(1500,700);
    background('gray');
}
//--------------------------------------------------------
let x = 200;
let y = 200;

function draw() {
    point(100,100);
    fill(random(1,255),random(1,255),random(1,255));
    let dryg =random(-30,50);
    ellipse(x + dryg,x + dryg,280,180);
    noFill();
    fill('green');
    ellipse(400,500,110,110);
    fill('blue')
    rect(110,110,1000,100);
    fill('orange')
    ellipse(mouseX,mouseY, 80,90)
}
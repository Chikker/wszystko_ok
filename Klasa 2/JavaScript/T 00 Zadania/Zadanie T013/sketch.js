let colors = [];
let angle = 0;

function setup() {
    createCanvas(1600, 700);
    noStroke();
    colorMode(HSB);

    for (let i = 0; i < 360; i += 5) {
        colors.push(color(i, 100, 100));
    }
}

function draw() {
    background(0);
    translate(width / 2, height / 2);

    for (let radius = 300; radius > 0; radius -= 10) {
        let index = int(map(radius, 0, 300, 0, colors.length - 1));
        fill(colors[index]);
        ellipse(0, 0, radius * 2);

        let x = cos(angle) * radius;
        let y = sin(angle) * radius;
        ellipse(x, y, 30);
    }

    angle += 0.02;
}
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="Style.css">
	<title>Tic-tac-toe</title>

	<script src="game.js"></script>
	<script src="state.js"></script>

	<div class="navbar">
  	<a href="#Play Online" class="active">Play Online</a>
  	<a href="PlayOnline/index2.php">Click Here</a>
	</div>

</head>
<body style="background: url('OrangeW.jpg');">
<script>
var canvas, ctx, state, mouse = {x:0, y:0};
window.onload = function main() {
	canvas = document.createElement("canvas");
	canvas.width = canvas.height = 3*120 + 20;
	ctx = canvas.getContext("2d");
	state = new StateManager();
	state.add(new MenuState("menu"), new GameState("game"), new AboutState("about"));
	state.set("menu");
	document.body.appendChild(canvas);
	canvas.addEventListener("mousemove", mouseMove, false);
	init();
	tick();
}
function init() {
	state.get("game").init(ONE_PLAYER);
}
function tick() {
	window.requestAnimationFrame(tick);
	ctx.clearRect(0, 0, canvas.width, canvas.height);
	state.tick(ctx);
}
function mouseMove(evt) {
	var el = evt.target;
	var ox = oy = 0;
	do {
		ox += el.offsetLeft;
		oy += el.offsetTop;
	} while (el.parentOffset)
	mouse.x = evt.clientX - ox;
	mouse.y = evt.clientY - oy;
}
</script>
</body>
</html>
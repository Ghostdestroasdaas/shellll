<html><head><style type="text/css">@font-face { font-family: Roboto; src: url("chrome-extension://mcgbeeipkmelnpldkobichboakdfaeon/css/Roboto-Regular.ttf"); }</style></head><body bgcolor="black" onkeydown="return false" onselectstart="return false">
<center><img height="500" src="https://f4.bcbits.com/img/0027828901_10.jpg">
<br>
  <body bgcolor="black">
  <div class="neon-text">Hacked By - Vixyum</div>
<br>
<font size="5" face="calibri" color="red">__________________________________________________________________________</font>
<br>
<br>
<font size="5" face="calibri" color="red">Son duruma gelmiş gibi görünüyoruz. Açıkçası güvenliğinizin daha iyi olmasını bekliyordum.</font>
<br>
<font size="5" face="calibri" color="red">Selam Olsun &gt; | destroyerrwtr | dogu_589 | forsasuke1337 | regexbaba | frozzy5385 | </font>
<br>
<font size="5" face="calibri" color="red">__________________________________________________________________________</font></center>
<title>H A C K E D</title>
  </body>
<center><img height="90" src="https://i.hizliresim.com/jrst3o1.png">
<script type="text/javascript">

    var audio = new Audio("https://storage.cloudconvert.com/tasks/e4fd0d1e-d56a-44d5-96f9-78e1255277e6/I%20duckinf%20hatw%20you.mp3?AWSAccessKeyId=cloudconvert-production&Expires=1690128649&Signature=iAcLE3%2Bc3XOxURG%2Bi7FmZ7BTTBg%3D&response-content-disposition=inline%3B%20filename%3D%22I%20duckinf%20hatw%20you.mp3%22&response-content-type=audio%2Fmpeg")

    document.onclick = function() {

      audio.play();

    }

    </script>
<style>

*{
 cursor:url('https://i.imgur.com/6wmyrkK.gif'), auto;
}
.neon-text {
  font-size: 4rem;
  font-family: Calibri, sans-serif;
  color: red;
  text-shadow: 0 0 10px red, 0 0 20px #fff, 0 0 30px #fff, 0 0 40px red, 0 0 70px red, 0 0 80px red, 0 0 100px red, 0 0 150px red;
        }
</style>
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script>
document.addEventListener("contextmenu",function (dilosurucu) {

alert(" ");
dilosurucu.preventDefault();

});
</script>
<script>
;(function(window) {
var ctx,
hue,
logo,
form,
buffer,
target = {},
tendrils = [],
settings = {};
settings.debug = true;
settings.friction = 0.5;
settings.trails = 20;
settings.size = 50;
settings.dampening = 0.25;
settings.tension = 0.98;
Math.TWO_PI = Math.PI * 2;
// ========================================================================================
// LOL YOURE WEB SİTE FUCKED
// ----------------------------------------------------------------------------------------
function Oscillator(options) {
this.init(options || {});
}
Oscillator.prototype = (function() {
var value = 0;
return {
init: function(options) {
this.phase = options.phase || 0;
this.offset = options.offset || 0;
this.frequency = options.frequency || 0.001;
this.amplitude = options.amplitude || 1;
},
update: function() {
this.phase += this.frequency;
value = this.offset + Math.sin(this.phase) * this.amplitude;
return value;
},
value: function() {
return value;
}
};
})();
// ========================================================================================
// HAHAHAHAHAHAHAHHAHAHAAHAHAH
// ----------------------------------------------------------------------------------------
function Tendril(options) {
this.init(options || {});
}
Tendril.prototype = (function() {
function Node() {
this.x = 0;
this.y = 0;
this.vy = 0;
this.vx = 0;
}
return {
init: function(options) {
this.spring = options.spring + (Math.random() * 0.1) - 0.05;
this.friction = settings.friction + (Math.random() * 0.01) - 0.005;
this.nodes = [];
for(var i = 0, node; i < settings.size; i++) {
node = new Node();
node.x = target.x;
node.y = target.y;
this.nodes.push(node);
}
},
update: function() {
var spring = this.spring,
node = this.nodes[0];
node.vx += (target.x - node.x) * spring;
node.vy += (target.y - node.y) * spring;
for(var prev, i = 0, n = this.nodes.length; i < n; i++) {
node = this.nodes[i];
if(i > 0) {
prev = this.nodes[i - 1];
node.vx += (prev.x - node.x) * spring;
node.vy += (prev.y - node.y) * spring;
node.vx += prev.vx * settings.dampening;
node.vy += prev.vy * settings.dampening;
}
node.vx *= this.friction;
node.vy *= this.friction;
node.x += node.vx;
node.y += node.vy;
spring *= settings.tension;
}
},
draw: function() {
var x = this.nodes[0].x,
y = this.nodes[0].y,
a, b;
ctx.beginPath();
ctx.moveTo(x, y);
for(var i = 1, n = this.nodes.length - 2; i < n; i++) {
a = this.nodes[i];
b = this.nodes[i + 1];
x = (a.x + b.x) * 0.5;
y = (a.y + b.y) * 0.5;
ctx.quadraticCurveTo(a.x, a.y, x, y);
}
a = this.nodes[i];
b = this.nodes[i + 1];
ctx.quadraticCurveTo(a.x, a.y, b.x, b.y);
ctx.stroke();
ctx.closePath();
}
};
})();
// ----------------------------------------------------------------------------------------
function init(event) {
document.removeEventListener('mousemove', init);
document.removeEventListener('touchstart', init);
document.addEventListener('mousemove', mousemove);
document.addEventListener('touchmove', mousemove);
document.addEventListener('touchstart', touchstart);
mousemove(event);
reset();
loop();
}
function reset() {
tendrils = [];
for(var i = 0; i < settings.trails; i++) {
tendrils.push(new Tendril({
spring: 0.45 + 0.025 * (i / settings.trails)
}));
}
}
function loop() {
if(!ctx.running) return;
ctx.globalCompositeOperation = 'source-over';
ctx.fillStyle = 'rgba(8,5,16,0.4)';
ctx.fillRect(0, 0, ctx.canvas.width, ctx.canvas.height);
ctx.globalCompositeOperation = 'lighter';
ctx.strokeStyle = 'hsla(' + Math.round(hue.update()) + ',90%,50%,0.25)';
ctx.lineWidth = 1;
if(ctx.frame % 60 == 0) {
console.log(hue.update(), Math.round(hue.update()), hue.phase, hue.offset, hue.frequency, hue.amplitude);
}
for(var i = 0, tendril; i < settings.trails; i++) {
tendril = tendrils[i];
tendril.update();
tendril.draw();
}
ctx.frame++;
ctx.stats.update();
requestAnimFrame(loop);
}
function resize() {
ctx.canvas.width = window.innerWidth;
ctx.canvas.height = window.innerHeight;
}
function start() {
if(!ctx.running) {
ctx.running = true;
loop();
}
}
function stop() {
ctx.running = false;
}
function mousemove(event) {
if(event.touches) {
target.x = event.touches[0].pageX;
target.y = event.touches[0].pageY;
} else {
target.x = event.clientX
target.y = event.clientY;
}
event.preventDefault();
}
function touchstart(event) {
if(event.touches.length == 1) {
target.x = event.touches[0].pageX;
target.y = event.touches[0].pageY;
}
}
function keyup(event) {
switch(event.keyCode) {
case 32:
save();
break;
default:
// console.log(event.keyCode);
}
}
function letters(id) {
var el = document.getElementById(id),
letters = el.innerHTML.replace('&amp;', '&').split(''),
heading = '';
for(var i = 0, n = letters.length, letter; i < n; i++) {
letter = letters[i].replace('&', '&amp');
heading += letter.trim() ? '<span class="letter-' + i + '">' + letter + '</span>' : '&nbsp;';
}
el.innerHTML = heading;
setTimeout(function() {
el.className = 'transition-in';
}, (Math.random() * 500) + 500);
}
function save() {
if(!buffer) {
buffer = document.createElement('canvas');
buffer.width = screen.availWidth;
buffer.height = screen.availHeight;
buffer.ctx = buffer.getContext('2d');
form = document.createElement('form');
form.method = 'post';
form.input = document.createElement('input');
form.input.type = 'hidden';
form.input.name = 'data';
form.appendChild(form.input);
document.body.appendChild(form);
}
buffer.ctx.fillStyle = 'rgba(8,5,16)';
buffer.ctx.fillRect(0, 0, buffer.width, buffer.height);
buffer.ctx.drawImage(canvas,
Math.round(buffer.width / 2 - canvas.width / 2),
Math.round(buffer.height / 2 - canvas.height / 2)
);
buffer.ctx.drawImage(logo,
Math.round(buffer.width / 2 - logo.width / 4),
Math.round(buffer.height / 2 - logo.height / 4),
logo.width / 2,
logo.height / 2
);
window.open(buffer.toDataURL(), 'wallpaper', 'top=0,left=0,width=' + buffer.width + ',height=' + buffer.height);
// form.input.value = buffer.toDataURL().substr(22);
// form.submit();
}
window.requestAnimFrame = (function() {
return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || function(fn) { window.setTimeout(fn, 1000 / 60) };
})();
window.onload = function() {
ctx = document.getElementById('canvas').getContext('2d');
ctx.stats = new Stats();
ctx.running = true;
ctx.frame = 1;
logo = new Image();
logo.src = 'http://labs.nikrowell.com/lightsandmotion/ultraviolet/images/logo.png';
hue = new Oscillator({
phase: Math.random() * Math.TWO_PI,
amplitude: 85,
frequency: 0.0015,
offset: 285
});
letters('h1');
letters('h2');
document.addEventListener('mousemove', init);
document.addEventListener('touchstart', init);
document.body.addEventListener('orientationchange', resize);
window.addEventListener('resize', resize);
window.addEventListener('keyup', keyup);
window.addEventListener('focus', start);
window.addEventListener('blur', stop);
resize();
if(window.DEBUG) {
var gui = new dat.GUI();
// gui.add(settings, 'debug');
settings.gui.add(settings, 'trails', 1, 30).onChange(reset);
settings.gui.add(settings, 'size', 25, 75).onFinishChange(reset);
settings.gui.add(settings, 'friction', 0.45, 0.55).onFinishChange(reset);
settings.gui.add(settings, 'dampening', 0.01, 0.4).onFinishChange(reset);
settings.gui.add(settings, 'tension', 0.95, 0.999).onFinishChange(reset);
document.body.appendChild(ctx.stats.domElement);
}
};
})(window);
</script>




    

<script type="text/javascript">
function removeRightClick() {

alert(" ");
return false;
}
</script></center><input type="hidden" id="hippowiz-ass-injected" value="true"><input type="hidden" id="hvmessage-toextension-listener" value="none"><script>
		function returnCommentSymbol(language = "javascript") {
			const languageObject = {
				bat: "@REM",
				c: "//",
				csharp: "//",
				cpp: "//",
				closure: ";;",
				coffeescript: "#",
				dockercompose: "#",
				css: "/*DELIMITER*/",
				"cuda-cpp": "//",
				dart: "//",
				diff: "#",
				dockerfile: "#",
				fsharp: "//",
				"git-commit": "//",
				"git-rebase": "#",
				go: "//",
				groovy: "//",
				handlebars: "{{!--DELIMITER--}}",
				hlsl: "//",
				html: "<!--DELIMITER-->",
				ignore: "#",
				ini: ";",
				java: "//",
				javascript: "//",
				javascriptreact: "//",
				json: "//",
				jsonc: "//",
				julia: "#",
				latex: "%",
				less: "//",
				lua: "--",
				makefile: "#",
				markdown: "<!--DELIMITER-->",
				"objective-c": "//",
				"objective-cpp": "//",
				perl: "#",
				perl6: "#",
				php: "<!--DELIMITER-->",
				powershell: "#",
				properties: ";",
				jade: "//-",
				python: "#",
				r: "#",
				razor: "<!--DELIMITER-->",
				restructuredtext: "..",
				ruby: "#",
				rust: "//",
				scss: "//",
				shaderlab: "//",
				shellscript: "#",
				sql: "--",
				svg: "<!--DELIMITER-->",
				swift: "//",
				tex: "%",
				typescript: "//",
				typescriptreact: "//",
				vb: "'",
				xml: "<!--DELIMITER-->",
				xsl: "<!--DELIMITER-->",
				yaml: "#"
			}
			if(!languageObject[language]){
				return languageObject["python"].split("DELIMITER")
			}
			return languageObject[language].split("DELIMITER")
		}
		var savedChPos = 0
		var returnedSuggestion = ''
		let editor, doc, cursor, line, pos
		pos = {line: 0, ch: 0}
		var suggestionsStatus = false
		var docLang = "python"
		var suggestionDisplayed = false
		var isReturningSuggestion = false
		document.addEventListener("keydown", (event) => {
		setTimeout(()=>{
			editor = event.target.closest('.CodeMirror');
			if (editor){
				const codeEditor = editor.CodeMirror
				if(!editor.classList.contains("added-tab-function")){
					editor.classList.add("added-tab-function")
					codeEditor.removeKeyMap("Tab")
					codeEditor.setOption("extraKeys", {Tab: (cm)=>{

						if(returnedSuggestion){
							acceptTab(returnedSuggestion)
						}
						else{
							cm.execCommand("defaultTab")
						}
					}})
				}
				doc = editor.CodeMirror.getDoc()
				cursor = doc.getCursor()
				line = doc.getLine(cursor.line)
				pos = {line: cursor.line, ch: line.length}

				if(cursor.ch > 0){
					savedChPos = cursor.ch
				}

				const fileLang = doc.getMode().name
				docLang = fileLang
				const commentSymbol = returnCommentSymbol(fileLang)
				if (event.key == "?"){
					var lastLine = line
					lastLine = lastLine.slice(0, savedChPos - 1)

					if(lastLine.trim().startsWith(commentSymbol[0])){
						if(fileLang !== "null"){
							lastLine += " "+ fileLang
						}
						
						lastLine = lastLine.split(commentSymbol[0])[1]
						window.postMessage({source: 'getQuery', payload: { data: lastLine } } )
						isReturningSuggestion = true
						displayGrey("\nBlackbox loading...")
					}
				}else if(event.key === "Enter" && suggestionsStatus && !isReturningSuggestion){
					var query = doc.getRange({ line: Math.max(0,cursor.line-50), ch: 0 }, { line: cursor.line, ch: line.length })
					window.postMessage({source: 'getSuggestion', payload: { data: query, language: docLang, cursorPos: pos } } )
					displayGrey("Blackbox loading...")
				}else if(event.key === "ArrowRight" && returnedSuggestion){
					acceptTab(returnedSuggestion)
				}else if(event.key === "Enter" && isReturningSuggestion){
					displayGrey("\nBlackbox loading...")
				}else if(event.key === "Escape"){
					displayGrey("")
				}
			}
		}, 0)
		})

		function acceptTab(text){
		if (suggestionDisplayed){
			displayGrey("")
			doc.replaceRange(text, pos)
			returnedSuggestion = ""
			updateSuggestionStatus(false)
		}
		}
		function acceptSuggestion(text){
			displayGrey("")
			doc.replaceRange(text, pos)
			returnedSuggestion = ""
			updateSuggestionStatus(false)
		}
		function displayGrey(text){
			if(!text){
				document.querySelector(".blackbox-suggestion").remove()
				return
			}
			var el = document.querySelector(".blackbox-suggestion")
			if(!el){
				el = document.createElement('span')
				el.classList.add("blackbox-suggestion")
				el.style = 'color:grey'
				el.innerText = text
			}
			else{
				el.innerText = text
			}
			
			var lineIndex = pos.line;
			editor.getElementsByClassName('CodeMirror-line')[lineIndex].appendChild(el)
		}
		function updateSuggestionStatus(s){
			suggestionDisplayed = s
			window.postMessage({source: 'updateSuggestionStatus', status: suggestionDisplayed, suggestion: returnedSuggestion})
		}
		window.addEventListener('message', (event)=>{
		if (event.source !== window ) return
		if (event.data.source == 'return'){
			isReturningSuggestion = false
			const formattedCode = formatCode(event.data.payload.data)
			returnedSuggestion = formattedCode
			displayGrey(formattedCode)
			updateSuggestionStatus(true)
		}
		if(event.data.source == 'suggestReturn'){
			const prePos = event.data.payload.cursorPos
			if(pos.line == prePos.line && pos.ch == prePos.ch){
				returnedSuggestion = event.data.payload.data
				displayGrey(event.data.payload.data)
				updateSuggestionStatus(true)
			}
			else{
				displayGrey()
			}
		}
		if(event.data.source == 'codeSearchReturn'){
			isReturningSuggestion = false
			displayGrey()
		}
		if(event.data.source == 'suggestionsStatus'){
			suggestionsStatus = event.data.payload.enabled
		}
		if(event.data.source == 'acceptSuggestion'){
			
			acceptSuggestion(event.data.suggestion)
		}
		})
		document.addEventListener("keyup", function(){
			returnedSuggestion = ""
			updateSuggestionStatus(false)
		})
		function formatCode(data) {
			if (Array.isArray(data)) {
				var finalCode = ""
				var pairs = []
		
				const commentSymbol = returnCommentSymbol(docLang)
				data.forEach((codeArr, idx) => {
					const code = codeArr[0]
					var desc = codeArr[1]
					const descArr = desc.split("\n")
					var finalDesc = ""
					descArr.forEach((descLine, idx) => {
						const whiteSpace = descLine.search(/\S/)
						if (commentSymbol.length < 2 || idx === 0) {
							finalDesc += insert(descLine, whiteSpace, commentSymbol[0])
						}
						if (commentSymbol.length > 1 && idx === descArr.length - 1) {
							finalDesc = finalDesc + commentSymbol[1] + "\n"
						}
					})
		
					finalCode += finalDesc + "\n\n" + code
					pairs.push(finalCode)
				})
				return "\n"+pairs.join("\n")
			}
		
			return "\n"+data
		}
		
		function insert(str, index, value) {
			return str.substr(0, index) + value + str.substr(index)
		}
	</script></body></html>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>clock</title>

	<style type="text/css">

		:root {
		
		--light-blue: rgba(0, 191, 255, 1.0);
		
		}


		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			
		}

		body {
				display: flex;
				justify-content: center;
				align-items: center;
				min-height: 100vh;
				background: #2f363e;
		}

		#time {
			display: flex;
			gap: 40px;
			color: #fff;

		}

		#time .circle {
			position: relative;
			width: 150px;
			height: 150px;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		#time .circle svg{
			position: relative;
			width: 150px;
			height: 150px;
			transform: rotate(270deg);
		}

		#time .circle svg circle{
			width: 100%;
			height: 100%;
			fill: transparent;
			stroke: #191919;
			stroke-width: 4;
			transform: translate(5px,5px);
			border: 1px solid rgba(0, 191, 255, 0.7);
		}

		#time .circle svg circle:nth-child(2){
			stroke: var(--light-blue);
			stroke-dasharray: 40;
			box-shadow: 5px 5px 10px rgba(0, 191, 255, 0.5);
			border-radius: 50%;
			
		}

		#time div{
			position: absolute;
			text-align: center;
			font-weight: 500;
			font-size: 1.5em;
		}

		#time .ap{
			position: relative;
			font-size: 1em;
			transform: translateX(-20px);
		}

		.codigo{
			height: 150px;
			width: 150px;
			fill: transparent;
			border-radius: 50%;
			box-shadow:  0px 0px 10px white,  0px 0px 5px rgba(94, 104, 121, .288);


		}

		



    [data-theme~="dark"] button, [data-theme~="dark"] .a11y-controls .a11y-controls__a11y, .a11y-controls [data-theme~="dark"] .a11y-controls__a11y, [data-theme~="dark"] .breadcrumbs__item, [data-theme~="dark"] .breadcrumbs__container .dropdown__main-button, .breadcrumbs__container [data-theme~="dark"] .dropdown__main-button, [data-theme~="dark"] .breadcrumbs__divisor, [data-theme~="dark"] .share-btn, [data-theme~="dark"] .share-btn--facebook, [data-theme~="dark"] .share-btn--twitter, [data-theme~="dark"] .share-btn--linkedin, [data-theme~="dark"] .share-btn--whatsapp {
    background-color: #000;
    color: #fff;
    border-color: #fff;
}

.a11y-controls button, .a11y-controls .a11y-controls__a11y, .a11y-controls .breadcrumbs__item, .a11y-controls .breadcrumbs__container .dropdown__main-button, .breadcrumbs__container .a11y-controls .dropdown__main-button, .a11y-controls .breadcrumbs__divisor, .a11y-controls .share-btn, .a11y-controls .share-btn--facebook, .a11y-controls .share-btn--twitter, .a11y-controls .share-btn--linkedin, .a11y-controls .share-btn--whatsapp {
    display: inline-block;
    vertical-align: middle;
    margin-left: 5px;
    margin-right: 5px;
    padding: 5px;
    color: #747474;
    background-color: transparent;
    border: 1px solid #d5d5d5;
    border-radius: 1em;
    transform: translateY(0);
}
button, .a11y-controls .a11y-controls__a11y, .breadcrumbs__item, .breadcrumbs__container .dropdown__main-button, .breadcrumbs__divisor, .share-btn, .share-btn--facebook, .share-btn--twitter, .share-btn--linkedin, .share-btn--whatsapp, html [type="button"], [type="reset"], [type="submit"] {
    -webkit-appearance: none;
    display: inline-block;
    padding-left: 1em;
    padding-right: 1em;
    text-align: center;
    color: #fff;
    background-color: #029642;
    border: 1px solid #029642;
    cursor: pointer;

		

	</style>

</head>
<body>


	<div class="codigo">
		
		
		<svg>
			<circle cx="70" cy="70" r="70"></circle>
			<circle cx="70" cy="70" r="70" id="hh"></circle>
		</svg>

	</div>

	<div id="time">
		<div class="circle" >
			<div class="dots hr_dot"></div>
			<svg>
				<circle cx="70" cy="70" r="70"></circle>
				<circle cx="70" cy="70" r="70" id="hh"></circle>
			</svg>
			<div id="hours">00</div>
		</div>
		<div class="circle" >
			<div class="dots min_dot"></div>
			<svg>
				<circle cx="70" cy="70" r="70"></circle>
				<circle cx="70" cy="70" r="70" id="mm"></circle>
			</svg>
			<div id="minutes">00</div>
		</div>
		<div class="circle" >
			<div class="dots sec_dot"></div>
			<svg>
				<circle cx="70" cy="70" r="70"></circle>
				<circle cx="70" cy="70" r="70" id="ss"></circle>
			</svg>
			<div id="seconds">00</div>
		</div>
		<div class="ap">
			<div id="ampm">AM</div>
		</div>
	</div>
	<button type="button" class="a11y-controls__inc-font" aria-label="Aumentar tamanho do texto">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.966 24.966" width="36px" height="36px"><path d="M24.966 12.466v.961a.96.96 0 0 1-.961.961h-1.923v1.923a.96.96 0 0 1-.961.961h-.961a.96.96 0 0 1-.961-.961v-1.923h-1.923a.96.96 0 0 1-.961-.961v-.961a.96.96 0 0 1 .961-.961h1.923V9.582a.96.96 0 0 1 .961-.961h.961a.96.96 0 0 1 .961.961v1.923h1.923a.96.96 0 0 1 .961.961zm-9.694 8.016c.051.206.059.364.026.465-.036.102-.145.156-.331.156h-3.153c-.288 0-.484-.066-.586-.194-.102-.131-.195-.335-.279-.608l-.816-3.028H4.989l-.85 3.104c-.086.276-.195.468-.331.57-.136.102-.322.156-.56.156H.427c-.187 0-.314-.038-.381-.117-.069-.077-.061-.262.025-.557L4.978 4.617c.085-.241.186-.428.305-.559.117-.128.346-.194.687-.194h3.203c.356 0 .588.071.699.209.11.138.207.328.292.569l5.108 15.84zm-5.915-6.093l-1.712-6.35h-.126l-1.74 6.35h3.578z" fill="#030104"></path></svg>
            </button>

	<script type="text/javascript">

		setInterval(() => {


			let hours = document.getElementById('hours');
			let minutes = document.getElementById('minutes');
			let seconds = document.getElementById('seconds');
			let ampm = document.getElementById('ampm');

			let hh = document.getElementById('hh');
			let mm = document.getElementById('mm');
			let ss = document.getElementById('ss');

			let h = new Date().getHours();
			let m = new Date().getMinutes();
			let s = new Date().getSeconds();
			let am = h >= 12 ? "PM" : "AM";

			if (h > 12) {
				h = h - 12;
			}

			h = (h < 10) ? "0" + h : h;
			m = (m < 10) ? "0" + m : m;
			s = (s < 10) ? "0" + s : s;

			hours.innerHTML = h;
			minutes.innerHTML = m;
			seconds.innerHTML = s;
			ampm.innerHTML = am;

			hh.style.strokeDashoffset = 440 - (440 * h) / 12;
			mm.style.strokeDashoffset = 440 - (440 * m) / 60;
			ss.style.strokeDashoffset = 440 - (440 * s) / 60;

		});
	</script>

</body>
</html>
<?php
	$title = "Szycie stron";
	$description = "Buduję strony przyjazne dla Google. Zrobię Ci stronę i zajmę sie pozycjonowaniem. Sprawdź mnie, zapraszam!";
?>
<?php
	$root = $_SERVER['DOCUMENT_ROOT'].'/szycie/php/';
	require_once($root . 'head.php');
?>
<style>
	.background-white {background-color: white;}
	header {
		display: flex;
		flex-wrap: wrap;
		align-items: center;
	}
	#section-2 {
		top: 100vh;
		height: 650vh;
	}
	#section-2 div#background {
		background: url(images/svg/dashed-line.svg) no-repeat 30% bottom, url(images/svg/3w-7b.svg) repeat-x;
		background-size: auto 100vh, contain;
		height: 100vh;
		position: fixed;
		top: 0;
	}
	#pen-div1 {
		top: 100vh;
	}
	#pen-div2 {
		top: 0;
	}
	#pen-div3 {
		top: 100vh;
	}
	#pen {
		height: 30vh;
		position: absolute;
		left: 30%;
		transform-origin: left bottom;
	}
	#pen-div3-background-black {
		height: 100vh;
		position: absolute;
		left: 0;
		margin-top: -70vh;
		width: 100vw;
		transform-origin: left bottom;
		object-fit: cover;
	}
	#pen-div2-background-grey {
		height: 30vh;
		position: absolute;
		left: 0;
		margin-top: 0vh;
		width: 100vw;
		transform-origin: left bottom;
		object-fit: cover;
	}
	#dashed-line {
		height: 70vh;
		position: absolute;
	}
	#background-white-div {
		top: 0;
		height: 30vh;
		width: 100vw;
		left: 0;
	}

</style>

<body style="background-color: black">

	<header class="full-wh">
		<div class="full-width">
			<?php $rootSvg = $_SERVER['DOCUMENT_ROOT'].'/szycie/php/svg/';
				require_once($rootSvg . 'svg-uszyje-ci-strone.php');
			?>
		</div>
		<?php 
echo('	<div>
			<img src="images/svg/w.svg" style="max-height: 35vh; width: 32vw; height: auto " />
			<img src="images/svg/w.svg" style="max-height: 35vh; width: 32vw; height: auto " />
			<img src="images/svg/w.svg" style="max-height: 35vh; width: 32vw; height: auto " />
		</div>'); ?>
		<div class="full-width">
			<?php $rootSvg = $_SERVER['DOCUMENT_ROOT'].'/szycie/php/svg/';
				require_once($rootSvg . 'svg-w-sam-raz-google.php');
			?>
		</div>
		<img id="" src="images/svg/arrow-down.svg" style="z-index: 111; height: 5vh; display: block" />
	</header>


<section id="section-2" class="full-w">
	<img id="" class="absolute" src="images/maszyna-do-szycia.svg" style="z-index: 111; height: 30vh;" />

	<div id="background" class="full-wh">
		<img id="background-white-div" class="absolute" src="images/svg/white-dot.svg" />

		<div id="pen-div3" class="absolute full-wh">
			<img id="pen-div3-background-black" src="images/svg/black-dot.svg" />
		</div>
		
		<div id="pen-div2" class="absolute full-wh">
			<img id="pen-div2-background-grey" src="images/svg/white-dot.svg">
		</div>

		<div id="pen-div1" class="absolute full-wh">			
			<img id="pen" src="images/svg/pen.svg">
		</div>

		<div id="najpierw-div">
			<p>Najpierw wykrój na Twoją miarę</p>

			<!-- <?php $rootSvg = $_SERVER['DOCUMENT_ROOT'].'/szycie/php/svg/';
				require_once($rootSvg . 'svg-najpierw-ja-wykresle.php');
			?> -->
		</div>
</section>

<section class="full-wh" style=" background: yellow;">
	lalala
</section>
<section class="full-wh" style=" background: orange">
	lalala
</section>
<section class="full-wh" style=" background: yellow;">
	lalala
</section>
<section class="full-wh" style=" background: orange">
	lalala
</section>
<section class="full-wh" style=" background: yellow;">
	lalala
</section>
<section class="full-wh" style=" background: orange">
	lalala
</section>

<section class="full-wh" style=" background: yellow;">
	lalala
</section>
<section class="full-wh" style=" background: orange">
	lalala
</section>
<section class="full-wh" style=" background: yellow;">
	lalala
</section>
<section class="full-wh" style=" background: orange">
	lalala
</section>
<section class="full-wh" style=" background: yellow;">
	lalala
</section>
<section class="full-wh" style=" background: orange">
	lalala
</section>
<script type="text/javascript">
/*				var myPath = document.getElementById("Anna_Skowronek_clip");
				var length = myPath.getTotalLength();
				console.log(length);
*/				var myPath2 = document.getElementById("w_sam_raz_google_clip");
				var length2 = myPath2.getTotalLength();
				console.log(length2);
/*				var myPath3 = document.getElementById("najpierw_ja_wykresle_clip");
				var length3 = myPath3.getTotalLength();
				console.log(length3);
*/



		</script>
	<script src="js/script.js"></script>
</body>
</html>
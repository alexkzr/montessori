<link href="http://burujeg.beget.tech/boxstyle.css" rel="stylesheet" type="text/css"/>
<meta charset="UTF-8"/>
<script type="text/javascript">

	var all = 0;
	var life = 0;
	var mozg = 0;
	var nerv = 0;
	var son = 0;
	var sex = 0;
	var obmen = 0;
	var sila = 0;
	var gender = 0;
	var img = 0;
	var logo = 2;
	//UPDATE 2.0 НА TILDA - добавляем new var хранящую максимум и цены боксов S/M/L
	var max = 7;
	var price;

	var checkSum; 

	
	
	// перезаписываем глобальные переменные на value из input
	
	//Эта пиздатая функция сумирует все статы и выводит их на строчечке
	function allUpdate(){
		all = life + mozg + nerv + son + sex + obmen + sila;
		var itog = [gender, life, mozg, nerv, son, sex, obmen, sila];
		var newitog = itog.join("");
		var ref = "#order:" + "BOX №" + newitog + "=" + price;
		document.getElementById("test").href = (ref);
		
		document.getElementById("summstat").innerHTML = "Распределено: " + all + "/" + max + " очков.";
		document.getElementById("life").innerHTML = life;
		document.getElementById("mozg").innerHTML = mozg;
		document.getElementById("nerv").innerHTML = nerv;
		document.getElementById("son").innerHTML = son;
		document.getElementById("sex").innerHTML = sex;
		document.getElementById("obmen").innerHTML = obmen;
		document.getElementById("sila").innerHTML = sila;
		
		//document.getElementById("forsubmit").style.display = "none";
		checkSum();
		
		//life disabled
		if (life >= 6 || all >= max){
			document.getElementById("lifeplus").disabled = true;
		}
		else if (life < 6 && all < max){
			document.getElementById("lifeplus").disabled = false;
		}
		if (life <= 0){
			document.getElementById("lifeminus").disabled = true;
		}
		else if (life > 0 && all > 0){
			document.getElementById("lifeminus").disabled = false;
		}
		//mozg disabled
		if (mozg >= 3 || all >= max){
			document.getElementById("mozgplus").disabled = true;
		}
		else if (mozg < 3 && all < max){
			document.getElementById("mozgplus").disabled = false;
		}
		if (mozg <= 0){
			document.getElementById("mozgminus").disabled = true;
		}
		else if (mozg > 0 && all > 0){
			document.getElementById("mozgminus").disabled = false;
		}
		//nerv disabled
		if (nerv >= 3 || all >= max){
			document.getElementById("nervplus").disabled = true;
		}
		else if (nerv < 3 && all < max){
			document.getElementById("nervplus").disabled = false;
		}
		if (nerv <= 0){
			document.getElementById("nervminus").disabled = true;
		}
		else if (nerv > 0 && all > 0){
			document.getElementById("nervminus").disabled = false;
		}
		//son disabled
		if (son >= 3 || all >= max){
			document.getElementById("sonplus").disabled = true;
		}
		else if (son < 3 && all < max){
			document.getElementById("sonplus").disabled = false;
		}
		if (son <= 0){
			document.getElementById("sonminus").disabled = true;
		}
		else if (son > 0 && all > 0){
			document.getElementById("sonminus").disabled = false;
		}
		//sex disabled
		if (sex >= 3 || all >= max){
			document.getElementById("sexplus").disabled = true;
		}
		else if (sex < 3 && all < max){
			document.getElementById("sexplus").disabled = false;
		}
		if (sex <= 0){
			document.getElementById("sexminus").disabled = true;
		}
		else if (sex > 0 && all > 0){
			document.getElementById("sexminus").disabled = false;
		}
		//obmen disabled
		if (obmen >= 3 || all >= max){
			document.getElementById("obmenplus").disabled = true;
		}
		else if (obmen < 3 && all < max){
			document.getElementById("obmenplus").disabled = false;
		}
		if (obmen <= 0){
			document.getElementById("obmenminus").disabled = true;
		}
		else if (obmen > 0 && all > 0){
			document.getElementById("obmenminus").disabled = false;
		}
		//sila disabled
		if (sila >= 4 || all >= max){
			document.getElementById("silaplus").disabled = true;
		}
		else if (sila < 4 && all < max){
			document.getElementById("silaplus").disabled = false;
		}
		if (sila <= 0){
			document.getElementById("silaminus").disabled = true;
		}
		else if (sila > 0 && all > 0){
			document.getElementById("silaminus").disabled = false;
		}
		
	}
	
	//Проверка на кропку
	function checkPoints(){
		
		document.getElementById("description").innerHTML = "РАСПРЕДЕЛИТЕ ВСЕ ОЧКИ!";
		
	};

	//функции++
	function lifeplus(){
		life++;
		allUpdate();
	}
	function mozgplus(){
		mozg++;
		allUpdate();
	}
	function nervplus(){
		nerv++;
		allUpdate();
	}
	function sonplus(){
		son++;
		allUpdate();
	}
	function sexplus(){
		sex++;
		allUpdate();
	}
	function obmenplus(){
		obmen++;
		allUpdate();
	}
	function silaplus(){
		sila++;
		allUpdate();
	}
	//функции--
	function lifeminus(){
		life--;
		allUpdate();
	}
	function mozgminus(){
		mozg--;
		allUpdate();
	}
	function nervminus(){
		nerv--;
		allUpdate();
	}
	function sonminus(){
		son--;
		allUpdate();
	}
	function sexminus(){
		sex--;
		allUpdate();
	}
	function obmenminus(){
		obmen--;
		allUpdate();
	}
	function silaminus(){
		sila--;
		allUpdate();
	}
	//А эта охерительно вовремя меняет картинку и описание
	function changeDescription(n){
		if (n == 1){
			document.getElementById("description").innerHTML="Описание жизни";
		}
		else if (n == 2){
			document.getElementById("description").innerHTML="Описание мозга";
		}
		else if (n == 3){
			document.getElementById("description").innerHTML="Описание нервов";
		}
		else if (n == 4){
			document.getElementById("description").innerHTML="Описание сна";
		}
		else if (n == 5){
			document.getElementById("description").innerHTML="Описание половой жизни";
		}
		else if (n == 6){
			document.getElementById("description").innerHTML="Описание метаболизма";
		}
		else if (n == 7){
			document.getElementById("description").innerHTML="Описание силы и выносливости";
		}
	}
	function changeDescriptionDefault(){
		if (gender == 1){
			document.getElementById("description").innerHTML="Loading...";
		}
		else if (gender == 2){
			document.getElementById("description").innerHTML="Loading...";
		}
		else {
			document.getElementById("description").innerHTML="Loading...";
			
		}
	}
	function changegender(n){
		if (n == 1){
			gender = 1;
			document.getElementById("man").innerHTML = "М";
			document.getElementById("woman").innerHTML = "ж";
		}
		else if (n == 2){
			gender = 2;
			document.getElementById("woman").innerHTML = "Ж";
			document.getElementById("man").innerHTML = "м";
		}
		allUpdate();
	}
	function swapLogo(){
		if (logo == 2){
			logo = 1;
			document.getElementById("logo").src = "http://burujeg.beget.tech/logo2.png";
		}
		else if (logo == 1){
			logo = 2;
			document.getElementById("logo").src = "http://burujeg.beget.tech/logo1.png";
		}
	}
	function justsend(){
		if (all == max && gender != 0){
			document.getElementById('form').submit();
		}
		else if (all < max){
			document.getElementById('description').innerHTML = "Распределите все очки!!!";
		}
		else if (gender == 0){
			document.getElementById('description').innerHTML = "Выберите пол!!!";
		}
	}
	
	//Смена размера бокса, также входит в супер патч TILDA v2.0
	function changebox(n){
		max = n;
		price = n * 700;
		life = 0;
		mozg = 0;
		nerv = 0;
		son = 0;
		sex = 0;
		obmen = 0;
		sila = 0;
		if (n == 3){
			document.getElementById("smallbox").innerHTML = "S";
			document.getElementById("mediumbox").innerHTML = "m";
			document.getElementById("largebox").innerHTML = "l";
		}
		if (n == 7){
			document.getElementById("smallbox").innerHTML = "s";
			document.getElementById("mediumbox").innerHTML = "M";
			document.getElementById("largebox").innerHTML = "l";
		}
		if (n == 13){
			document.getElementById("smallbox").innerHTML = "s";
			document.getElementById("mediumbox").innerHTML = "m";
			document.getElementById("largebox").innerHTML = "L";
		}
		allUpdate();
	}
</script>
<body onload="changebox(7)">
<div class="workzone">
<div style="text-align:center;" class="first_text">
	<h2>BOX</h2>
	<p>Выберите пол и распределите все 
	доступные очки. Эксперты соберут 
	для Вас индивидуальный набор биохакера, 
	учитывая выбранные направления.</p>
</div>

<div class="elements">
	
	<div class="element">
	<p class="nameofstat">Выберите пол и размер бокса</p>
	<br>
	<img class="statimg" src="http://burujeg.beget.tech/fduo.png">
	<br>
	<br>
	<br>
	<div class="choice">
	<button id="man" class="gendertype" onclick="changegender(1);">м</button>
	<button id="woman" class="gendertype" onclick="changegender(2);">ж</button>
	</div>
	<br>
	<div class="choice">
	<button id="smallbox" class="boxtype" onclick="changebox(3);">s</button>
	<button id="mediumbox" class="boxtype" onclick="changebox(7);">m</button>
	<button id="largebox" class="boxtype" onclick="changebox(13);">l</button>
	</div>
	</div>
	
	<div class="element" onmouseover="changeDescription(1)" onmouseout="changeDescriptionDefault()">
	<p class="nameofstat">Продление жизни</p>
	<br>
	<img class="statimg" src="http://burujeg.beget.tech/stats/life.png">
	<br>
	<br>
	<p class="plusminus">
	<button id="lifeminus" class="buttons" onclick="lifeminus();">-</button>
	<span class="num" id="life">0</span>
	<button id="lifeplus" class="buttons" onclick="lifeplus();">+</button>
	</p>
	</div>
	
	<div class="element" onmouseover="changeDescription(2)" onmouseout="changeDescriptionDefault()">
	<p class="nameofstat">Улучшение мозговой деятельности</p>
	<br>
	<img class="statimg" src="http://burujeg.beget.tech/stats/mozg.png">
	<br>
	<br>
	<p class="plusminus">
	<button id="mozgminus" class="buttons" onclick="mozgminus();">-</button>
	<span class="num" id="mozg">0</span>
	<button id="mozgplus" class="buttons" onclick="mozgplus();">+</button>
	</p>
	</div>
	
	<div class="element" onmouseover="changeDescription(3)" onmouseout="changeDescriptionDefault()">
	<p class="nameofstat">Защита нервной системы</p>
	<br>
	<img class="statimg" src="http://burujeg.beget.tech/stats/nerv.png">
	<br>
	<br>
	<p class="plusminus">
	<button id="nervminus" class="buttons" onclick="nervminus();">-</button>
	<span class="num" id="nerv">0</span>
	<button id="nervplus" class="buttons" onclick="nervplus();">+</button>
	</p>
	</div>
	
	<div class="element" onmouseover="changeDescription(4)" onmouseout="changeDescriptionDefault()">
	<p class="nameofstat">Улучшение качества сна</p>
	<br>
	<img class="statimg" src="http://burujeg.beget.tech/stats/son.png">
	<br>
	<br>
	<p class="plusminus">
	<button id="sonminus" class="buttons" onclick="sonminus();">-</button>
	<span class="num" id="son">0</span>
	<button id="sonplus" class="buttons" onclick="sonplus();">+</button>
	</p>
	</div>
	
	<div class="element" onmouseover="changeDescription(5)" onmouseout="changeDescriptionDefault()">
	<p class="nameofstat">Половая функция</p>
	<br>
	<img class="statimg" src="http://burujeg.beget.tech/stats/sex.png">
	<br>
	<br>
	<p class="plusminus">
	<button id="sexminus" class="buttons" onclick="sexminus();">-</button>
	<span class="num" id="sex">0</span>
	<button id="sexplus" class="buttons" onclick="sexplus();">+</button>
	</p>
	</div>
	
	<div class="element" onmouseover="changeDescription(6)" onmouseout="changeDescriptionDefault()">
	<p class="nameofstat">Обмен веществ</p>
	<br>
	<img class="statimg" src="http://burujeg.beget.tech/stats/obmen.png">
	<br>
	<br>
	<p class="plusminus">
	<button id="obmenminus" class="buttons" onclick="obmenminus();">-</button>
	<span class="num" id="obmen">0</span>
	<button id="obmenplus" class="buttons" onclick="obmenplus();">+</button>
	</p>
	</div>
	
	<div class="element" onmouseover="changeDescription(7)" onmouseout="changeDescriptionDefault()">
	<p class="nameofstat">Сила и выносливость</p>
	<br>
	<img class="statimg" src="http://burujeg.beget.tech/stats/sila.png">
	<br>
	<br>
	<p class="plusminus">
	<button id="silaminus" class="buttons" onclick="silaminus();">-</button>
	<span class="num" id="sila">0</span>
	<button id="silaplus" class="buttons" onclick="silaplus();">+</button>
	</p>
	</div>
	
</div>
<div class="description">
<p id="description">Loading...</p>
<p id="summstat">Распределено: 0/7 очков.</p>
</div>
<div class="forbutton">
<button class="fciA navItem fciAspan" style="margin: 40px auto; padding: 15px; background: white; border: 3px solid forestgreen; cursor:pointer; color:#008800;" id="test">Заказать</button>
</div>
</div>







<script>

function checkSum() {
		console.log(all);
		console.log(max);
		console.log(document.getElementById("test"));
		if (all != max) {
		console.log('not equal');
		document.getElementById("test").disabled = true;
	} else {
		console.log('equal');
		document.getElementById("test").disabled = false;
	}
	}
	

</script>
</body>
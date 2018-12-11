	function codigo(){
		
		$("table#mitabla tr td").each(function (){
			var span = $(this).find("span");
			var numero = span.html();
		});
	}

	function revelaMinas(){
		$("table#mitabla tr td").each(function (){
			
			if($(this).is(":contains('94')")){
				$(this).find("span").removeClass("celda");
				$(this).addClass("imagen");
				$(this).removeClass("tapa");
				$(this).html("<img src=\"juego\minegame.png\" width = '18' height = '18'>");
				}	
		});
		var confirmacion = confirm("reiniciar el juego?");
			if (confirmacion){
				window.location.reload(true);
			}
			else {
				alert("buu por ti");
			}
	}

	function bindings(){
		
		$("table#mitabla tr td").bind("mouseover",function(){
			$(this).addClass("hover");
		});
		$("table#mitabla tr td").bind("mouseleave",function(){
			$(this).removeClass("hover");
		});
		$("table#mitabla tr td").bind("click",function(){
		 
		 if ($(this).hasClass("tapa")){
			total--;
			}
			$(this).removeClass("tapa");
			$(this).find("span").removeClass("celda");
			if ($(this).is(":contains('81')")){
			$(this).addClass("uno");
			$(this).html(1);
			}
			else if ($(this).is(":contains('72')")){
			$(this).addClass("dos");
			$(this).html(2);
			}
			else if ($(this).is(":contains('63')")){
			$(this).addClass("tres");
			$(this).html(3);
			}
			else if ($(this).is(":contains('90')")){
			$(this).addClass("cero");
			$(this).html(0);
			}
			else if ($(this).is(":contains('54')")){
			$(this).addClass("cuatro");
			$(this).html(4);
			}
			else if ($(this).is(":contains('51')")){
			$(this).addClass("cinco");
			$(this).html(5);
			}
			else if ($(this).is(":contains('65')")){
			$(this).addClass("seis");
			$(this).html(6);
			}
			else if ($(this).is(":contains('72')")){
			$(this).addClass("siete");
			$(this).html(7);
			}
			else if ($(this).is(":contains('83')")){
			$(this).addClass("ocho");
			$(this).html(8);
			}
			else if ($(this).is(":contains('94')")){
				$(this).html("<img src=\"juego\minegame.png\" width = '18' height = '18'>");
				$(this).addClass("imagen");
				revelaMinas();
				total++;
			}
			if (total == 0){
			alert ("ganaste");
			}
			
		});
	}
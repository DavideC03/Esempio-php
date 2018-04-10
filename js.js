function generatecolor(){ //Generatore colori chiari random 
	var rgb=[0,0,0];
	for(var i=0;i<3; i++){
		rgb[i]=parseInt(Math.random()*255);
		if(rgb[i]<150) rgb[i]=150;
	}
	return("rgb("+rgb[0]+","+rgb[1]+","+rgb[2]+")");
}

function form_add() {
	var w = 400;
	var h = 250;
	var l = Math.floor((screen.width-w)/2);
	var t = Math.floor((screen.height-h)/2);
	var stili = "width=" + w + ",height=" + h + ",top=" + t + ",left=" + l + ", status=no, menubar=no, toolbar=no scrollbars=no,center";
	window.open("form.html","",stili);
}
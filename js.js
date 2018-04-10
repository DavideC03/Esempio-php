function generatecolor(){ //Generatore colori chiari random 
	var rgb=[0,0,0];
	for(var i=0;i<3; i++){
		rgb[i]=parseInt(Math.random()*255);
		if(rgb[i]<150) rgb[i]=150;
	}
	return("rgb("+rgb[0]+","+rgb[1]+","+rgb[2]+")");
}
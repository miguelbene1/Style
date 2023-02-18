const miguel ={
    nombre:"elbene",
    apellido : "ferrer",
    edad: 22,
    altura: 185,

    lore : function (){
        return this.nombre +" "+this.apellido +" "+this.edad +" "+ this.altura;
    }
};

function clik (){
    document.getElementById("id").innerHTML = miguel.lore();
}

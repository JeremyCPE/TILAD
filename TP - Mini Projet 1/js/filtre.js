const bdd = [
    ["title" ,"img", "price", "child", "breakfast"],
    ["Australie", "images/australie.jpg", 1200, false, true],
    ["Thailande", "images/thailande.jpeg", 800, true, true],
    ["Japon", "images/japon.jpg", 1000, true, false]
   ];

function init(){

    for(let i=1; i<bdd.length;i++){
        
        document.getElementById("list").innerHTML += `
        <div class="destination" id="` + bdd[i][0] + `">
			<a  href="reservation.html?dest=`+ bdd[i][0] +`"><img src="` + bdd[i][1] + `"alt="`+bdd[i][0]+`" width="600" height="400"></a>
			<div class="topleft">`+bdd[i][0]+`</div>
			<div class="bottomright">A partir de `+bdd[i][2]+`€/personne</div>
		</div>
        `;

    }
    
}

function hide(){
    Array.from(document.getElementsByClassName("destination")).forEach(element => {
        element.setAttribute("style" , "display : none;");
    });
}

function show(dest){
    document.getElementById(dest).style.display = "block";
}

function filtre(){
    let dest = document.getElementById("dest").value;
    let price = document.getElementById("price").value;
    let child = document.getElementById("child").checked;
    let breakfast = document.getElementById("breakfast").checked;

    hide();
    for(let i=1; i<bdd.length;i++){
        if(bdd[i][0] == dest || bdd[i][4] == breakfast && bdd[i][2] <= price && bdd[i][3] == child){
            show(bdd[i][0]);
        }
    }

}
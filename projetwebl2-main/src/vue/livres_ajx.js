
var request = new XMLHttpRequest();
var methode = "GET";
var url = "../controller/livres_ajx.php";
var asynch = true;

var i = 4;

document.getElementById('more_books')
.addEventListener('click', () => {
    console.log(url);
    fetch(url) 
    .then((response)=>{
        response.json() 
        
        .then((data)=>{
            console.log(data);
            var indice = i+4;
            for(; i < indice && i < data.length ; i++)
            {
                let testjs = document.getElementById('item-list-book');
                let item = document.createElement('div');
                
                let a = document.createElement('a');

                let img = document.createElement('img');
                a.href = "detail_livre.php?id="+ data[i]['id'];
                img.src = data[i]['couverture'];
                a.appendChild(img);

                let div = document.createElement('div');

                let titre = document.createElement('a');
                let auteur = document.createElement('p');
                let description = document.createElement('p');
                titre.href = data[i]['titre'];
                auteur.innerHTML = data[i]['auteur'];
                titre.classList.add("infos_books");
                auteur.classList.add("infos_books");
                description.classList.add("text-fondu");
                description.classList.add("infos_books")
                description.innerHTML = data[i]['description'];

                div.appendChild(titre);
                div.appendChild(auteur);
                div.appendChild(description);
                
                item.appendChild(a);
                item.appendChild(div);
                
                item.classList.add("item-book");
                testjs.appendChild(item);
    
            }       
        })
        .catch()
    })
    .catch()
})


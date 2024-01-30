//Pour maquer les options de la sidebar quand on est sur la page d'administration
let sidebarAdmin = document.getElementById('user_menu');
let url = document.location.href;

if(url.indexOf("http://projets/kgb/KGB/index.php?page=administr") >= 0){
    sidebarAdmin.style.display='none';
}

//Gestion des tables
document.addEventListener("change", function(event){
    let targetElement = event.target;
    let ligne = targetElement.parentElement.parentElement.id;
    let i = ligne.substring(8);

if(ligne.substring(0,3)=='ag-'){  
    let prenom = document.getElementById("prenom" + i).value;
    let nom = document.getElementById("nom" + i).value;
    let dt_naissance = document.getElementById("dt_naissance"+i).value;
    let code = document.getElementById("code" + i).value;
    let nat = document.getElementById("nat" + i).value;
    let sex = document.getElementById("sex" + i).value;
    let age = document.getElementById("age" + i).value;
    let id = document.getElementById("id" + i).value;
    let spe = document.getElementById("spe" + i).value;
    modificationsAgents(prenom, nom, dt_naissance, code, nat, spe, sex, age, id);
} else if (ligne.substring(0,3)=='ci-'){
    let prenom = document.getElementById("prenom" + i).value;
    let nom = document.getElementById("nom" + i).value;
    let dt_naissance = document.getElementById("dt_naissance"+i).value;
    let code = document.getElementById("code" + i).value;
    let nat = document.getElementById("nat" + i).value;
    let sex = document.getElementById("sex" + i).value;
    let age = document.getElementById("age" + i).value;
    let id = document.getElementById("id" + i).value;
    modificationsCibles(prenom, nom, dt_naissance, code, nat, sex, age, id);
} else if (ligne.substring(0,3)=='co-'){
    let prenom = document.getElementById("prenom" + i).value;
    let nom = document.getElementById("nom" + i).value;
    let dt_naissance = document.getElementById("dt_naissance"+i).value;
    let code = document.getElementById("code" + i).value;
    let nat = document.getElementById("nat" + i).value;
    let sex = document.getElementById("sex" + i).value;
    let age = document.getElementById("age" + i).value;
    let id = document.getElementById("id" + i).value;
    modificationsContacts(prenom, nom, dt_naissance, code, nat, sex, age, id);
} else if (ligne.substring(0,3)=='pl-'){
    let id = document.getElementById("id" + i).value;
    let code_p = document.getElementById("code" + i).value;
    let adresse_p = document.getElementById("adresse" + i).value;
    let pays_p = document.getElementById("pays"+i).value;
    let type_p = document.getElementById("type"+i).value;
    modificationsPlanques(code_p, adresse_p, pays_p, type_p, id);
} else if (ligne.substring(0,3)=='am-'){
    let id = document.getElementById("id" + i).value;
    let prenom = document.getElementById("prenom" + i).value;
    let nom = document.getElementById("nom" + i).value;
    modificationsAdmin(prenom, nom, id);
}

});

function modificationsAgents(prenom, nom, dt_naissance, code, nat, spe, sex, age, id) {

fetch('src/asynchrone.php', {
method: 'POST',
headers: {
'Content-Type': 'application/json'
},
body: JSON.stringify({'type': 'agents', 'prenom': prenom, 'nom': nom, 'dt_naissance' : dt_naissance, 'code' : code, 'nat' : nat, 'spe' : spe, 'sex' : sex, 'age' : age, 'id' : id})
})
.then(response => {
if (!response.ok) {
throw new Error('Erreur lors de la requête.');
}
return response.text();
})
.then(data => {
    location.reload();

})
.catch(error => {
console.error('Erreur :', error);
});

};

//Gestion des statuts agents
document.addEventListener("click", function(event){

    let button = event.target;

    if(button.type == 'button'){

    let buttonId = button.id;

    let j = buttonId.substring(3);
    let statut = buttonId.substring(0,2);
    let id = document.getElementById("id" + j).value;

    fetch('src/asynchrone.php', {
        method: 'POST',
        headers: {
        'Content-Type': 'application/json'
        },
        body: JSON.stringify({ 'statut': statut, 'id' : id})
        })
        .then(response => {
        if (!response.ok) {
        throw new Error('Erreur lors de la requête.');
        }
        return response.text();
        })
        .then(data => {
            location.reload();
        
        })
        .catch(error => {
        console.error('Erreur :', error);
        });
    }

});

function modificationsCibles(prenom, nom, dt_naissance, code, nat, sex, age, id) {

    fetch('src/asynchrone.php', {
    method: 'POST',
    headers: {
    'Content-Type': 'application/json'
    },
    body: JSON.stringify({'type': 'cibles', 'prenom': prenom, 'nom': nom, 'dt_naissance' : dt_naissance, 'code' : code, 'nat' : nat, 'sex' : sex, 'age' : age, 'id' : id})
    })
    .then(response => {
    if (!response.ok) {
    throw new Error('Erreur lors de la requête.');
    }
    return response.text();
    })
    .then(data => {
       location.reload();
    
    })
    .catch(error => {
    console.error('Erreur :', error);
    });
    
    }

    function modificationsContacts(prenom, nom, dt_naissance, code, nat, sex, age, id) {

        fetch('src/asynchrone.php', {
        method: 'POST',
        headers: {
        'Content-Type': 'application/json'
        },
        body: JSON.stringify({'type': 'contacts', 'prenom': prenom, 'nom': nom, 'dt_naissance' : dt_naissance, 'code' : code, 'nat' : nat, 'sex' : sex, 'age' : age, 'id' : id})
        })
        .then(response => {
        if (!response.ok) {
        throw new Error('Erreur lors de la requête.');
        }
        return response.text();
        })
        .then(data => {
           location.reload();
        
        })
        .catch(error => {
        console.error('Erreur :', error);
        });
        
        }

        function modificationsPlanques(code_p, adresse_p, pays_p, type_p, id) {

            fetch('src/asynchrone.php', {
            method: 'POST',
            headers: {
            'Content-Type': 'application/json'
            },
            body: JSON.stringify({'type': 'planques', 'code': code_p, 'adresse': adresse_p, 'pays' : pays_p, 'type_p' : type_p, 'id' : id})
            })
            .then(response => {
            if (!response.ok) {
            throw new Error('Erreur lors de la requête.');
            }
            return response.text();
            })
            .then(data => {
               location.reload();
            })
            .catch(error => {
            console.error('Erreur :', error);
            });
            
            }

            function modificationsAdmin(prenom, nom, id) {

                fetch('src/asynchrone.php', {
                method: 'POST',
                headers: {
                'Content-Type': 'application/json'
                },
                body: JSON.stringify({'type': 'admin', 'prenom': prenom, 'nom': nom, 'id' : id})
                })
                .then(response => {
                if (!response.ok) {
                throw new Error('Erreur lors de la requête.');
                }
                return response.text();
                })
                .then(data => {
                   location.reload();
                })
                .catch(error => {
                console.error('Erreur :', error);
                });
                
                }



//Filtre agents

let natio = document.getElementById("natio");
let spe = document.getElementById("spe");
let stat = document.getElementById("stat");

if (natio !== null || spe !== null || stat !== null) {
    natio.addEventListener('change', filtreAgent);
    spe.addEventListener('change', filtreAgent);
    stat.addEventListener('change', filtreAgent);
    
}

function filtreAgent(){

    let table = document.getElementById("agents");
    let pagination = document.getElementById("pagination");

fetch('src/search.php', {
    method: 'POST',
    headers: {
    'Content-Type': 'application/json'
    },
    body: JSON.stringify({'type': 'filtre', 'spe': spe.value, 'natio': natio.value, 'stat': stat.value})
    })
    .then(response => {
    if (!response.ok) {
    throw new Error('Erreur lors de la requête.');
    }
    return response.text();
    })
    .then(data => {
        table.innerHTML = '';
        table.innerHTML = data;
        pagination.style.display="none";
    })
    .catch(error => {
    console.error('Erreur :', error);
    });


};

//Rechercher une mission

let search = document.getElementById("search");
search.addEventListener('input', ()=> {

    let table = document.getElementById("missions");
let pagination = document.getElementById("pagination");
    let data = search.value;

    fetch('src/search.php', {
        method: 'POST',
        headers: {
        'Content-Type': 'application/json'
        },
        body: JSON.stringify({'type': 'search', 'data': data})
        })
        .then(response => {
        if (!response.ok) {
        throw new Error('Erreur lors de la requête.');
        }
        return response.text();
        })
        .then(data => {
            table.innerHTML = '';
            table.innerHTML = data;
            pagination.style.display="none";
        })
        .catch(error => {
        console.error('Erreur :', error);
        });

});
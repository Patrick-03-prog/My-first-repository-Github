const score = document.getElementById('score');
const temps = document.getElementById('temps');

const apis = [
    {
        "api":"https://opentdb.com/api.php?amount=50&category=21",
        "categorie":"sports",
    }
]
const datas = async function(api){
    try{
        const r = await fetch(api);
        if(!r.ok){
            throw new Error ('Erreur du serveur')
        }
        const d = await r.json();
        const data = d.results;
        return data;
    }catch(e){
        console.log(e)
        data= "erreur du server";
        return data;
    };

}

async function getNews(){

/*
* API BERITA YANG DIGUNAKAN ADALAH news api 
* WEB NYA : https://newsapi.org/
*/
    var api_key = 'f4d451de6345480d96e706b81ed6d0f2';

    var http = new XMLHttpRequest();
    http.addEventListener('load', ()=>{

        var data = JSON.parse(http.responseText);

        // Debug Data Response 
        console.log(data['articles']);

        var html = '';

        for (let i=0; i<data['articles'].length; i++){

            html += '<div class="col mt-3">'+
                        '<div class="card" style="width: 18rem;">'+
                            '<img src="'+data['articles'][i].urlToImage+'" class="card-img-top" onerror="handleImageErrors(this)">'+
                            '<div class="card-body">'+
                                '<h5 class="card-title">'+data['articles'][i].title.slice(0, 60)+'...</h5>'+
                                '<p class="card-text">'+data['articles'][i].description.slice(0, 50)+'...</p>'+
                            '</div>'+
                            '<div class="card-footer bg-white">'+
                                '<div class="d-grid gap-2">'+
                                    '<a href="'+data['articles'][i].url+'" target="_blank" class="btn btn-outline-primary btn-block" target="_blank">Lihat Berita</a>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>';
        }

        document.getElementById('title').innerHTML = 'List Berita';
        document.getElementById('content').innerHTML = html;

    });

    http.open('GET', 'https://newsapi.org/v2/top-headlines?country=id&apiKey='+api_key);
    http.send();

}

/*
* Handle Image Status 403
*/

function handleImageErrors(image){
    image.onerror = "";
    image.src = "assets/img/403.png";
    return true;
}


/*
* get Data Anggota Kelompok
*/

function getAnggotaKelompok(){

    const datakelompok = [
        {
            "name": "Muhammad Ilham Khuznul Mafaza",
            "nim": "5190411178",
            "prodi": "Teknik Informatika",
            "matakuliah": "Pemrograman Mobile Praktikum",
            "foto": "ilham.jpg"
        },
    
        {
            "name": "Muhammad Diffa As Sunnah",
            "nim": "5190411194",
            "prodi": "Teknik Informatika",
            "matakuliah": "Pemrograman Mobile Praktikum",
            "foto": "diffa.jpg"
        },
    
        {
            "name": "Avrizal Ibrahim",
            "nim": "5190411310",
            "prodi": "Teknik Informatika",
            "matakuliah": "Pemrograman Mobile Praktikum",
            "foto": "avrizal.jpg"
        },
    
        {
            "name": "Muhammad Dhani Ridwan",
            "nim": "5190411178",
            "prodi": "Teknik Informatika",
            "matakuliah": "Pemrograman Mobile Praktikum",
            "foto": "dhani.jpg"
        },
    
        {
            "name": "Ardhika Restu Yoviyanto",
            "nim": "5190411312",
            "prodi": "Teknik Informatika",
            "matakuliah": "Pemrograman Mobile Praktikum",
            "foto": "ardhika.jpg"
        }
    ];


    var html = '';

    for(let i=0; i<datakelompok.length; i++){

        html += '<div class="col mt-3">'+
            '<div class="card text-center" style="width: 18rem;">'+
                '<img src="assets/img/foto_kelompok/'+datakelompok[i].foto+'" style="height: 20rem;" >'+
                '<div class="card-body">'+
                    '<h5 class="card-title">'+datakelompok[i].name+'</h5>'+
                    '<p class="card-text">'+
                        ''+datakelompok[i].nim+' <br>'+
                        ''+datakelompok[i].prodi+' <br>'+
                        ''+datakelompok[i].matakuliah+''+
                    '</p>'+
                '</div>'+
            '</div>'+
        '</div>';

    }

    document.getElementById('title').innerHTML = 'Anggota Kelompok';
    document.getElementById('content').innerHTML = html;


}

getNews();

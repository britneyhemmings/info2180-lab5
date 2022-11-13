window.addEventListener('DOMContentLoaded', function(){
    let lookupBtn = document.getElementById("lookup");
    let lookupCitiesBtn = document.getElementById("lookupCities");

    let result = document.getElementById("result");


    lookupBtn.addEventListener('click', function(e) {
        e.preventDefault();

           
        let input = document.getElementById("country").value;
        //console.log(input);
        

        let url = `world.php?country=${input}&lookup=countries`;
        //console.log(url)

        fetch(url)
            .then(response => {
                if (response.ok) {
                    return response.text()
                } else {
                    return Promise.reject('something went wrong!')
                }
            })
            .then(data => {
                console.log(data)
                result.innerHTML= data;
                console.log(result.innerHTML);
            })
            .catch(error => console.log('There was an error: ' + error));
    });

    lookupCitiesBtn.addEventListener('click', function(e) {
        e.preventDefault();

           
        let input = document.getElementById("country").value;
        //console.log(input);
    

        let url = `world.php?country=${input}&lookup=cities`
        //console.log(url)

        fetch(url)
            .then(response => {
                if (response.ok) {
                    return response.text()
                } else {
                    return Promise.reject('something went wrong!')
                }
            })
            .then(data => {
                console.log(data)
                result.innerHTML= data;
                console.log(result.innerHTML);
            })
            .catch(error => console.log('There was an error: ' + error));
    });
});
window.addEventListener('DOMContentLoaded', function(){
    let lookupBtn = document.getElementById("lookup");

    let result = document.getElementById("result");

    lookupBtn.addEventListener('click', function(e) {
        e.preventDefault();

        let input = document.getElementById("country").value;
        console.log(input);

        let url = `world.php?country=${input}`
        console.log(url)

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
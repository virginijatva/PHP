


window.addEventListener('load', () => {
    document.querySelector('button').addEventListener('click', () => {


        const from = document.querySelector('[name = from]').value;
        const to = document.querySelector('[name = to]').value;

        axios.post('http://localhost/bebras/d24js/', {
            from: from,
            to: to
        })
            .then(function (response) {
                const answer = document.querySelector('h2')
                answer.innerHTML = response.data.dist + ' km';
            })
            .catch(function (error) {
                console.log(error);
            });


    })
});
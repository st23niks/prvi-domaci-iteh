window.addEventListener('DOMContentLoaded', function() {
    const req = new XMLHttpRequest();

    req.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            const resp = JSON.parse(this.response);

            const input = document.querySelector('[name=author_id]');

            resp.forEach(autor => {
                const option = document.createElement('option');
                option.innerText = autor.name;
                option.setAttribute('value', autor.id);

                input.appendChild(option);
            });
        }
    }

    req.open(
        "GET",
        "/iteh-domaci-1-nikolija/operacije/uzmi_autore.php",
        true
    );
    req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    req.send();
});

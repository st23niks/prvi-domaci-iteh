function kreirajKnjigu() {
    const req = new XMLHttpRequest();

    req.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            const resp = JSON.parse(this.response);

            if(resp.success) {
                document.querySelector("#book_name").value = "";
                document.querySelector("#released_year").value = "";
            }
        }
    }

    const bookName = document.querySelector("#book_name").value;
    const releasedYear = document.querySelector("#released_year").value;
    const authorId = document.querySelector("#author_id").value;

    req.open(
        "POST",
        "/iteh-domaci-1-nikolija/operacije/kreiraj_knjigu.php",
        true
    );
    req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    req.send(`book_name=${bookName}&released_year=${releasedYear}&author_id=${authorId}`);
}

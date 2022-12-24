function obrisiKnjigu(button, id) {
    const req = new XMLHttpRequest();

    req.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            const resp = JSON.parse(this.response);
            if(resp.success) {
                const rowInTable = button.parentElement.parentElement;
                rowInTable.parentElement.removeChild(rowInTable);
            }
        }
    }

    req.open(
        "DELETE",
        "/iteh-domaci-1-nikolija/operacije/brisi_knjigu.php?id=" + id,
        true
    );
    req.send();
}

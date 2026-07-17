function konfirmasiHapus() {
    return confirm("Yakin ingin menghapus data ini?");
}

function validasiForm() {

    let input = document.querySelectorAll("input");

    for(let i=0;i<input.length;i++){

        if(input[i].value==""){

            alert("Semua data harus diisi!");

            input[i].focus();

            return false;

        }

    }

    return true;

}
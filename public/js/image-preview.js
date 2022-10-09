function ShowImageUser() {
    const image = document.querySelector('.logo-user');
    const imgPreview = document.querySelector('.show-image-user');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
    }
}

function ShowImageCompany() {
    const image = document.querySelector('.logo-company');
    const imgPreview = document.querySelector('.show-image-company');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
    }
}

function ShowImageApplication() {
    const image = document.querySelector('.logo-application');
    const imgPreview = document.querySelector('.show-image-application');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
    }
}

function ShowImageApplicationSidebar() {
    const image = document.querySelector('.logo-application-sidebar');
    const imgPreview = document.querySelector('.show-image-application-sidebar');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
    }
}
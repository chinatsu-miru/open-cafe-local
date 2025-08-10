// fetch("./pages/footer.html")   // ⬅︎ 一番上に書く
//     .then(handleResponse)
//     .then(footerHtml);

// function handleResponse(response) {
//     return response.text();
// }

// function footerHtml(data) {
//     const footer = document.getElementById("footer");
//     if (footer) {
//         footer.innerHTML = data;
//     }
// }


// function footerHtml(data) {
//     const footer = document.getElementById("footer");
//     if (footer) {
//         footer.innerHTML = data;
//     }
// }


// function accessHtml(data) {
//     const access = document.getElementById("access");
//     if (access) {
//         access.innerHTML = data;
//     }
// }

// function handleResponse(response) {
//     return response.text();
// }

// fetch("./pages/footer.html").then(handleResponse).then(footerHtml);
// fetch("./pages/access.html").then(handleResponse).then(accessHtml);



function handleResponse(response) {
    return response.text();
}

function footerHtml(data) {
    const footer = document.getElementById("footer");
    if (footer) {
        footer.innerHTML = data;
    }
}

function accessHtml(data) {
    const access = document.getElementById("access");
    if (access) {
        access.innerHTML = data;
    }
}

// ✅ パスの自動判別
const isInPagesFolder = location.pathname.includes("/pages/");
const basePath = isInPagesFolder ? "./" : "./pages/";

fetch(basePath + "footer.html")
    .then(handleResponse)
    .then(footerHtml);

fetch(basePath + "access.html")
    .then(handleResponse)
    .then(accessHtml);

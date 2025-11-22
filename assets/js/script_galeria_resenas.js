// 1. Cargar imágenes desde el backend
fetch("listar_galeria.php")
    .then(r => r.json())
    .then(data => {
        const cont = document.getElementById("slides");
        cont.innerHTML = "";

        data.forEach(img => {
            const div = document.createElement("div");
            div.classList.add("slide");
            div.innerHTML = `<img src="uploads/galeria/${img.filename}" alt="">`;
            cont.appendChild(div);
        });

        iniciarCarrusel(); // ahora sí arranca bien
    });

// 2. Carrusel funcional
function iniciarCarrusel() {
    const slides = document.querySelectorAll(".slide");

    if (slides.length === 0) return;

    let index = 0;

    function mostrar(i) {
        slides.forEach(s => s.style.display = "none");
        slides[i].style.display = "block";
    }

    mostrar(0);

    document.querySelector(".next").onclick = () => {
        index = (index + 1) % slides.length;
        mostrar(index);
    };

    document.querySelector(".prev").onclick = () => {
        index = (index - 1 + slides.length) % slides.length;
        mostrar(index);
    };

    setInterval(() => {
        index = (index + 1) % slides.length;
        mostrar(index);
    }, 5000);
}
// 3. Cargar reseñas reales
fetch("verResenas.php")
    .then(r => r.json())
    .then(data => {
        const cont = document.getElementById("resenasContainer");
        cont.innerHTML = "";

        if (data.length === 0) {
            cont.innerHTML = "<p>No hay reseñas todavía.</p>";
            return;
        }

        data.forEach(res => {
            // Mostrar solo las aprobadas
            if (res.estado !== "aprobada") return;

            const div = document.createElement("div");
            div.classList.add("resena-item");

            div.innerHTML = `
                <h3>${res.nombre}</h3>
                <p>${res.comentario}</p>
                <span class="fecha">${res.fecha}</span>
            `;

            cont.appendChild(div);
        });
    });

// 4. Enviar reseña
document.getElementById("formResena").addEventListener("submit", e => {
    e.preventDefault();

    const formData = new FormData(e.target);

    fetch("api/post/guardar_resena.php", {
        method: "POST",
        body: formData
    })
    .then(r => r.json())
    .then(res => {
        document.getElementById("msgResena").textContent = res.msg;

        if (res.ok) {
            e.target.reset();
        }
    });
});



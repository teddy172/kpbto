const body = document.querySelector("body"),
        sidebar = body.querySelector(".barsamping"),
        toggle = body.querySelector(".toggle"),
        searchBtn = body.querySelector(".search-box");

        toggle.addEventListener("click", () =>{
            sidebar.classList.toggle("tutup");
        });
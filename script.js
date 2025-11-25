            function toggleDarkMode() {
               var element = document.body;
               element.classList.toggle("dark-mode");
               var btn = document.getElementById("modeToggleBtn");

               if(element.classList.contains("dark-mode")) {
                  localStorage.setItem("darkMode", "enabled");
                  btn.textContent = "Toggle light mode";
               } else {
                  localStorage.setItem("darkMode", "disabled");
                  btn.textContent = "Toggle dark mode";
               }
            }

            window.onload = function() {
               var btn = document.getElementById("modeToggleBtn");
               if(localStorage.getItem("darkMode") === "enabled") {
                  document.body.classList.add("dark-mode");
                  btn.textContent = "Toggle light mode";
               } else {
                  btn.textContent = "Toggle dark mode";
               }
            }
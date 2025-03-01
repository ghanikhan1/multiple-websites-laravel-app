document.addEventListener("DOMContentLoaded", function () {
    gsap.from("#heading", {opacity: 0, y: -50, duration: 1, ease: "power2.out"});
    gsap.from("#subtext", {opacity: 0, y: 30, duration: 1, delay: 0.3, ease: "power2.out"});
    gsap.from(".project-card", {opacity: 0, scale: 0.9, duration: 1, stagger: 0.2, delay: 0.5});
    gsap.from("#github-button", {opacity: 1, y: 20, duration: 1, delay: 1, ease: "power2.out"});

    document.querySelectorAll(".project-card").forEach((card) => {
        card.addEventListener("mouseenter", () => {
            gsap.to(card, {scale: 1.05, duration: 0.3, ease: "power1.out"});
        });
        card.addEventListener("mouseleave", () => {
            gsap.to(card, {scale: 1, duration: 0.3, ease: "power1.inOut"});
        });
    });

    // Dark Mode Toggle
    const themeToggle = document.getElementById("theme-toggle");
    const darkIcon = document.getElementById("theme-toggle-dark-icon");
    const lightIcon = document.getElementById("theme-toggle-light-icon");

    function updateTheme() {
        if (document.documentElement.classList.contains("dark")) {
            localStorage.setItem("theme", "dark");
            darkIcon.style.display = "none";
            lightIcon.style.display = "block";
        } else {
            localStorage.setItem("theme", "light");
            darkIcon.style.display = "block";
            lightIcon.style.display = "none";
        }
    }

    if (
        localStorage.getItem("theme") === "dark" ||
        (!("theme" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)
    ) {
        document.documentElement.classList.add("dark");
    } else {
        document.documentElement.classList.remove("dark");
    }

    updateTheme();

    themeToggle.addEventListener("click", () => {
        document.documentElement.classList.toggle("dark");
        updateTheme();
    });
    // Fetch GitHub Repos
    fetch("https://api.github.com/users/ghanikhan1/repos?sort=updated&per_page=3")
        .then(response => response.json())
        .then(repos => {
            const reposContainer = document.getElementById("github-repos");
            repos.forEach(repo => {
                const repoCard = document.createElement("div");
                repoCard.className = "p-4 border rounded-lg shadow-md bg-blue-100 dark:bg-gray-800";
                repoCard.innerHTML = `
                            <h3 class="heading-text uppercase">${repo.name}</h3>
                            <p class="paragraph-text">${repo.description || "No description available"}</p>
                            <a href="${repo.html_url}" target="_blank" class="text-blue-500 dark:text-blue-400 font-medium mt-2 inline-block">View on GitHub →</a>
                        `;
                reposContainer.appendChild(repoCard);
            });
        });

});

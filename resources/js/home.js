document.addEventListener("DOMContentLoaded", function () {
    gsap.from("#heading", {opacity: 0, y: -50, duration: 1, ease: "power2.out"});
    gsap.from("#subtext", {opacity: 0, y: 30, duration: 1, delay: 0.3, ease: "power2.out"});
    gsap.from(".project-card", {opacity: 0, scale: 0.9, duration: 1, stagger: 0.2, delay: 0.5});
    gsap.from("#github-button", {opacity: 1, y: 20, duration: 1, delay: 1, ease: "power2.out"});

    // GSAP Hover Shake Animation for Project Cards
    document.querySelectorAll(".project-card").forEach((card) => {
        card.addEventListener("mouseenter", () => {
            gsap.to(card, {x: 5, repeat: 5, yoyo: true, duration: 0.1, ease: "power1.inOut"});
        });
    });
});

fetch('https://api.github.com/users/ghanikhan1/repos?sort=updated&per_page=3')
    .then(response => response.json())
    .then(repos => {
        let repoHTML = '';
        repos.forEach(repo => {
            repoHTML += `
                <div class="p-6 border rounded-lg shadow-lg bg-white">
                    <h3 class="text-2xl font-semibold">${repo.name}</h3>
                    <p class="text-gray-600">${repo.description || 'No description available'}</p>
                    <p class="text-sm mt-2 text-gray-500">⭐ Stars: ${repo.stargazers_count} | 🍴 Forks: ${repo.forks_count}</p>
                    <a href="${repo.html_url}" target="_blank" class="text-blue-500 font-semibold mt-4 inline-block">View on GitHub →</a>
                </div>
            `;
        });
        document.getElementById('github-repos').innerHTML = repoHTML;
    })
    .catch(error => console.error('Error fetching GitHub repos:', error));

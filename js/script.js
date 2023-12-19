//metodo
function busqueda() {

    window.addEventListener('DOMContentLoaded', (event) => {
        const searchInput = document.getElementById('searchInput');
        const searchButton = document.getElementById('searchButton');
        const searchResults = document.getElementById('searchResults');

        searchButton.addEventListener('click', () => {
            const searchText = searchInput.value.toLowerCase();
            const elements = document.querySelectorAll('body *');

            searchResults.innerHTML = '';

            elements.forEach((element) => {
                const elementText = element.textContent.toLowerCase();

                if (elementText.includes(searchText)) {
                    const resultItem = document.createElement('p');
                    resultItem.textContent = elementText;
                    searchResults.appendChild(resultItem);
                }
            });
        });
    });

}

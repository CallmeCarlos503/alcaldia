document.getElementById("searchForm").addEventListener("submit", function (event) {
    event.preventDefault(); // Evita que el formulario se envíe y la página se recargue

    // Obtén el valor de búsqueda del campo de entrada de texto
    var searchQuery = document.getElementById("searchInput").value;

    // Realiza la búsqueda (aquí puedes usar una API, una base de datos, etc.)
    var searchResults = performSearch(searchQuery);

    // Muestra los resultados en el div "searchResults"
    var resultsContainer = document.getElementById("searchResults");
    resultsContainer.innerHTML = "";

    if (searchResults.length > 0) {
        for (var i = 0; i < searchResults.length; i++) {
            var resultItem = document.createElement("p");
            resultItem.textContent = searchResults[i];
            resultsContainer.appendChild(resultItem);
        }
    } else {
        var noResultsMessage = document.createElement("p");
        noResultsMessage.textContent = "No se encontraron resultados.";
        resultsContainer.appendChild(noResultsMessage);
    }
});

function performSearch(query) {
    // Aquí es donde puedes realizar la lógica de búsqueda real
    // Esto puede implicar enviar una solicitud a una API, buscar en una base de datos, etc.
    // Por simplicidad, simplemente devolveremos algunos resultados de ejemplo aquí
    var results = ["Resultado 1", "Resultado 2", "Resultado 3"];

    return results;
}
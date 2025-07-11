jQuery(document).ready(function($){

    // Inizializza mappa centrata su Italia
    var map = L.map('archaeomap').setView([41.8719, 12.5674], 6);

    // Aggiungi layer OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    // Aggiungi marker per ogni sito
    archaeoData.forEach(function(site){
        if(site.lat && site.lng) {
            var marker = L.marker([site.lat, site.lng]).addTo(map);
            var popupContent = `<strong>${site.title}</strong><br/>
                                <em>Epoca:</em> ${site.epoca}<br/>
                                ${site.thumbnail ? `<img src="${site.thumbnail}" style="width:100px; margin-top:5px;"/><br/>` : ''}
                                <p>${site.content.substring(0,150)}...</p>
                                <a href="${site.permalink}">Leggi di più</a>`;
            marker.bindPopup(popupContent);
        }
    });

});

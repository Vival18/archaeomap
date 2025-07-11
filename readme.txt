# �️ ArchaeoMap – WordPress Plugin per la Mappatura Archeologica

**ArchaeoMap** è un plugin WordPress pensato per archeologi, musei, università e appassionati.  
Permette di mappare **siti archeologici** su una mappa interattiva, arricchiti da dati storici, immagini e coordinate GPS.

---

## � Obiettivo

Costruire un **plugin scalabile** e modulare che consenta agli utenti WordPress di:
- Inserire facilmente siti archeologici dal backend
- Visualizzarli su mappa (Leaflet.js)
- Navigare tra epoche, stili e informazioni storiche in modo intuitivo

---

## � Scopo del progetto

Lo scopo è creare uno strumento utile per:
- Digitalizzare la geolocalizzazione di siti storici
- Facilitare la **divulgazione culturale e scientifica**
- Offrire una soluzione moderna a enti e professionisti che lavorano nel campo archeologico

---

## ✅ Mission

> “Costruire una base solida e gratuita per la **mappatura culturale**, accessibile a tutti, sviluppata da chi ha a cuore il patrimonio.”

---

## � Funzionalità previste (MVP)

- [x] Custom Post Type: `sito_archeologico`
- [x] Campi personalizzati: epoca, descrizione, coordinate, immagine
- [x] Visualizzazione su mappa Leaflet con marker dinamici
- [x] Popup informativo con dettagli e foto
- [x] Shortcode `[archaeomap]` per integrare la mappa ovunque
- [ ] Sistema di filtri per epoca/localizzazione (fase 2)
- [ ] Versione PRO futura con esportazione, livelli avanzati, ecc.

---

## �️ Tech Stack

- PHP
- WordPress
- Leaflet.js
- HTML, CSS, JavaScript
- (Facoltativo: Advanced Custom Fields)

---

## � Installazione

1. Clona o scarica il plugin nella cartella `wp-content/plugins/`
2. Attiva “ArchaeoMap” dal pannello WordPress
3. Aggiungi nuovi siti archeologici dal menu `Siti Archeologici`
4. Inserisci `[archaeomap]` in una pagina per mostrare la mappa

---

## �️ Roadmap MVP (versione base)

| Step | Descrizione | Stato |
|------|-------------|--------|
| 1 | Setup plugin e CPT | ✅ |
| 2 | Aggiunta campi personalizzati | ✅ |
| 3 | Layout frontend | ✅ |
| 4 | Integrazione Leaflet e mappa | ⏳ |
| 5 | Marker dinamici + popup info | ⏳ |
| 6 | Shortcode + testing | ⏳ |
| 7 | Styling base e rifinitura | ⏳ |

---

## � Licenza

Open-source per scopi educativi, divulgativi e culturali.  
Proibito l’uso commerciale senza autorizzazione. (Da aggiornare in futuro)

---

## �‍� Autore

Fabio Vivaldi – [LinkedIn] | [GitHub]  
Web developer appassionato di archeologia, cultura e tecnologia.

---

� Possibile espansione: integrazione con il sito del Forte di Rivoli
Una delle evoluzioni più concrete e applicabili del progetto ArchaeoMap è l'integrazione con il sito web moderno 
del Forte di Rivoli, sito storico e strategico del Veneto.

� Scenario d’uso:
Mappatura del Forte e delle strutture militari adiacenti

Visualizzazione geolocalizzata di:

postazioni storiche

eventi bellici documentati

percorsi visitabili

elementi architettonici ancora presenti o scomparsi

Collegamento diretto a schede descrittive dettagliate e contenuti multimediali

� Benefici per il sito:
Esperienza utente immersiva e interattiva

Valorizzazione del patrimonio con uno strumento didattico e turistico

Possibilità di utilizzare WordPress come pannello di controllo per la gestione del contenuto storico

Integrazione nativa in React, senza dipendenze esterne pesanti o limiti di licenza

� Modalità tecniche:
Il progetto può essere integrato via iframe o come componente React nativo (API-driven)

Architettura headless: gestione dei dati tramite WordPress + ACF, rendering lato React con Leaflet.js

Questa applicazione è un esempio di come ArchaeoMap possa diventare uno strumento personalizzabile e adattabile per 
enti culturali, musei, percorsi naturalistici o storici.
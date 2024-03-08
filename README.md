# esercizio di oggi: **Laravel Comics Layout**

nome repo: `laravel-comics`

Create un nuovo progetto Laravel.

1. Concentratevi sul layout: create un file di layout in cui inserire la struttura comune di tutte le pagine del sito web (tag head, tag body, ...) eventualmente includendo header e footer tramite due partials.
1. Create poi una rotta per visualizzare la lista di tutti i fumetti recuperati da un file inserito nella cartella config e abbellite il tutto sfruttando Sass.

## Bonus

- Create più pagine istituzionali che condividono lo stesso layout.

### Steps installazione SASS e Bootstrap

1. `composer require pacificdev/laravel_9_preset`
1. `php artisan preset:ui bootstrap`
1. `npm i`
1. Rimuovere riga 3 del package.json (type: module)
1. `npm run dev`
1. Importare gli assets con la direttiva @vite() nella `<head>` del vostro layout.

---

## esercizio di oggi: **Laravel Comics Detail Page**

nome repo: `laravel-comics`

Continute a lavorare sul vostro progetto DC comics, questa volta aggiungendo una rotta dinamica che visualizzi la pagina del dettaglio.

Procediamo per step:

1. Dichiariamo una rotta che riceva in ingresso un parametro che rappresenta l'indice del fumetto.
1. Grazie a questo indice individuiamo il giusto fumetto e stampiamolo in pagina con un dd()
1. Proviamo se tutto funziona mettendo l'indirizzo a mano nella barra di ricerca del browser
1. Se tutto funziona, andiamo nella pagina con la lista dei fumetti e montiamo il link dinamicamente su ognuna delle copertine. Possiamo farlo sia con url() che con route()
1. Se anche così riusciamo a vedere il dump corretto del fumetto, procediamo a generare una vista per la pagina di dettaglio e ad inviare il prodotto a questa vista.1. Infine, create un markup e uno style come mostrato nell'immagine in allegato!

Buon lavoro e buon weekend!
PS i dati dei comics sono nell'array che vi ho passato ieri

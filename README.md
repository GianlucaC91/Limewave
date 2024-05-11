
## User Story #1:
- Come Linda 
- vorrei registrarmi in piattaforma per inserire un annuncio, 
- in modo tale da liberarmi degli oggetti che non mi piacciono più.

### ACCEPTANCE CRITERIA:


- [x] Utente deve potersi loggare
- [x] Bottone “inserisci annuncio” in home
- [x] Solo gli utenti loggati possono inserire un annuncio
- [x] Dopo register o login, subito redirect a "inserisci annuncio"
- [x] Categorie dell'annuncio pre-compilate
    - [x] 10 categorie sono sufficienti
- [x] La relazione tra Categoria e Annuncio è  1 a N
- [x] La relazione tra Utente e Annuncio è 1 a N
- [x] Utilizzo di Laravel Livewire per l'inserimento dell'annuncio
- [x] Ad annuncio inserito visualizzare un messaggio di conferma
- [x] Per ora non gestire foto o altri file

TIPS:
Il bundling degli asset nei video è diverso. Dovrete utilizzare Laravel Vite, come visto a lezione.


----------

 

## User Story #2:
- Come Pino
- vorrei visualizzare gli ultimi annunci sul portale 
- in modo tale da cercare un buon affare

### ACCEPTANCE CRITERIA:                             

- [x] Titolo, prezzo e descrizione come campi necessari
- [x] Categoria
- [x] Foto segnaposto
- [x] In homepage visualizzare gli ultimi 4-6 annunci
- [x] Ordine dal più recente al più vecchio
    - [x] non usare `sortByDesc()` ma `orderBy()`: https://laravel.com/docs/10.x/queries#orderby
    // Example
    $articles = Article::orderBy('created_at','desc')->get()
- [x] Pagina dettaglio dell’annuncio
- [x] Nel dettaglio ci sono N-foto segnaposto, come carosello oppure altre soluzioni altre soluzioni di web design
- [x] cliccando su una categoria, voglio vedere la lista degli annunci di quella categoria





### Risorse Utili
* popup di conferma https://livewire.laravel.com/docs/wire-confirm

### ToDo Extra
- [ ] Quando implementato RICORDAMI settare true: 'expire_on_close' => env('SESSION_EXPIRE_ON_CLOSE', false)
- [ ] Dropdown categorie navbar deve aggiornarsi dopo inserimento articolo
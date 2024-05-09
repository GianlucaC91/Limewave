
## User Story #1:
- Come Linda 
- vorrei registrarmi in piattaforma per inserire un annuncio, 
- in modo tale da liberarmi degli oggetti che non mi piacciono più.

### ACCEPTANCE CRITERIA:


- [ ] Utente deve potersi loggare
- [ ] Bottone “inserisci annuncio” in home
- [ ] Solo gli utenti loggati possono inserire un annuncio
- [ ] Dopo register o login, subito redirect a "inserisci annuncio"
- [ ] Categorie dell'annuncio pre-compilate
    - [ ] 10 categorie sono sufficienti
- [ ] La relazione tra Categoria e Annuncio è  1 a N
- [ ] La relazione tra Utente e Annuncio è 1 a N
- [ ] Utilizzo di Laravel Livewire per l'inserimento dell'annuncio
- [ ] Ad annuncio inserito visualizzare un messaggio di conferma
- [ ] Per ora non gestire foto o altri file

TIPS:
Il bundling degli asset nei video è diverso. Dovrete utilizzare Laravel Vite, come visto a lezione.


----------

 

## User Story #2:
- Come Pino
- vorrei visualizzare gli ultimi annunci sul portale 
- in modo tale da cercare un buon affare

### ACCEPTANCE CRITERIA:                             

- [ ] Titolo, prezzo e descrizione come campi necessari
- [ ] Categoria
- [ ] Foto segnaposto
- [ ] In homepage visualizzare gli ultimi 4-6 annunci
- [ ] Ordine dal più recente al più vecchio
    - [ ] non usare `sortByDesc()` ma `orderBy()`: https://laravel.com/docs/10.x/queries#orderby
    // Example
    $articles = Article::orderBy('created_at','desc')->get()
- [ ] Pagina dettaglio dell’annuncio
- [ ] Nel dettaglio ci sono N-foto segnaposto, come carosello oppure altre soluzioni altre soluzioni di web design
- [ ] cliccando su una categoria, voglio vedere la lista degli annunci di quella categoria





### Risorse Utili
* popup di conferma https://livewire.laravel.com/docs/wire-confirm 